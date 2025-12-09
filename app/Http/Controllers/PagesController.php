<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Notifications\SendContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PagesController extends Controller
{
  public function home()
  {
    return view("pages.index");
  }

  public function search(Request $request)
  {
    // Validate and sanitize input
    $validated = $request->validate([
      'query' => 'required|string|min:1|max:255'
    ]);

    $query = trim($validated['query']);

    // Guard clause: Check if query is empty after trimming
    if (empty($query)) {
      session()->flash('error', 'Search query cannot be empty');
      return back();
    }

    // Guard clause: Validate query length (prevent extremely long queries)
    if (strlen($query) > 255) {
      session()->flash('error', 'Search query is too long');
      return back();
    }

    try {
      // Escape special characters to prevent SQL injection
      $result = Company::where('company_name', 'like', '%' . addslashes($query) . '%')
        ->orWhere('reg_number', 'like', '%' . addslashes($query) . '%')
        ->first();

      // Guard clause: Check if result exists
      if (!$result) {
        session()->flash('error', 'No companies found matching your search');
        return back();
      }

      return view('pages.search-results', ['result' => $result]);
    } catch (\Throwable $th) {
      session()->flash('error', 'An error occurred during search');
      return back();
    }
  }

  public function searchResults(Request $request)
  {
    return view("pages.search-results");
  }

  public function searchCompany(Request $request)
  {
    return view("pages.search-company");
  }

  public function companyDetails(Request $request)
  {
    try {
      // Get company ID from query parameter
      $companyId = $request->query('cid');

      // Guard clause: Check if company ID is provided
      if (!$companyId) {
        session()->flash('error', 'Company ID is required');
        return back();
      }

      // Guard clause: Validate that company ID is numeric
      if (!is_numeric($companyId)) {
        session()->flash('error', 'Invalid company ID');
        return back();
      }

      // Fetch company data
      $company = Company::find($companyId);

      // Guard clause: Check if company exists
      if (!$company) {
        session()->flash('error', 'Company not found');
        return back();
      }

      return view("pages.company-details", ['company' => $company]);
    } catch (\Throwable $th) {
      session()->flash('error', 'An error occurred while retrieving company details');
      return back();
    }
  }

  public function contact()
  {
    return view("pages.contact");
  }

  public function sendContactRequest(Request $request)
  {
    // Validate incoming request data
    $validated = $request->validate([
      'last_name' => 'required|string|max:255|regex:/^[a-zA-Z\s\-\']+$/',
      'first_name' => 'required|string|max:255|regex:/^[a-zA-Z\s\-\']+$/',
      'telephone_number' => 'required|string|regex:/^[0-9\s\-\+\(\)]+$/',
      'email_address' => 'required|email:rfc,dns',
      'message' => 'required|string|min:10|max:5000',
    ]);

    // Guard clause: Check if any field is empty after trimming
    foreach ($validated as $field => $value) {
      $trimmed = trim($value);
      if (empty($trimmed)) {
        session()->flash("error", "Invalid $field provided");
        return back();
      }
      $validated[$field] = $trimmed;
    }

    // Guard clause: Validate telephone number length
    $digitsOnly = strlen(preg_replace('/[^0-9]/', '', $validated['telephone_number']));
    if ($digitsOnly < 9) {
      session()->flash('error', 'Telephone number must contain at least 9 digits');
      return back();
    }

    // Guard clause: Prevent spam - check message for excessive URLs
    $urlCount = substr_count($validated['message'], 'http');
    if ($urlCount > 3) {
      session()->flash('error', 'Message contains too many links');
      return back();
    }

    try {
      // Send notification to admin with contact request details
      Notification::route('mail', 'info@luxembourgregistrar.org')->notify(
        new SendContactRequest(
          $validated['last_name'],
          $validated['first_name'],
          $validated['telephone_number'],
          $validated['email_address'],
          $validated['message']
        )
      );

      session()->flash('success', 'Contact request sent successfully');
      return back();
    } catch (\Throwable $th) {
      session()->flash('error', 'Failed to send contact request');
      return back();
    }
  }

  public function showCreateCompany()
  {
    return view("pages.create-company");
  }

  public function createCompany(Request $request)
  {
    // Validate and sanitize input
    $validated = $request->validate([
      'company_name' => 'required|string|max:255',
      'reg_number' => 'required|string|max:255',
      'registration_date' => 'required|string',
      'registered_address' => 'required|string|max:500',
      'country' => 'required|string|max:255',
      'business_activities' => 'required|string|max:1000'
    ]);

    // Guard clause: Check if any field is empty after trimming
    foreach ($validated as $field => $value) {
      $trimmed = trim($value);
      if (empty($trimmed)) {
        session()->flash('error', "Invalid $field provided");
        return back();
      }
      $validated[$field] = $trimmed;
    }

    // Guard clause: Validate company name doesn't contain special characters
    if (!preg_match('/^[a-zA-Z0-9\s\.\-\&]+$/', $validated['company_name'])) {
      session()->flash('error', 'Company name contains invalid characters');
      return back();
    }

    // Guard clause: Validate registration date is not in the future
    if (strtotime($validated['registration_date']) > time()) {
      session()->flash('error', 'Registration date cannot be in the future');
      return back();
    }

    try {
      // Create company record
      $company = Company::create($validated);

      // Guard clause: Check if company was created successfully
      if (!$company) {
        session()->flash('error', 'Failed to create company');
        return back();
      }

      session()->flash('success', 'Company created successfully');
      return back();
    } catch (\Throwable $th) {
      session()->flash('error', 'An error occurred while creating the company');
      return back();
    }
  }
}
