<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view("pages.index");
    }

    public function search(Request $request)
    {
        $query = $request->input("query");
        $results = Company::where("company_name", "like", "%$query%")
            ->orWhere("rcs_number", "like", "%$query%")
            ->get();
        return view("pages.search-results", ["results" => $results]);
    }

    public function searchResults(Request $request)
    {
        return view("pages.search-results");
    }

    public function companyDetails()
    {
        return view("pages.company-details");
    }
}
