<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get("/", [PagesController::class, "home"]);
Route::post("/search", [PagesController::class, "search"])->name('search');
Route::get("/search-company", [PagesController::class, "searchCompany"])->name("searchCompany");
Route::get("/search-results", [PagesController::class, "searchResults"]);
Route::get("/company-details", [PagesController::class, "companyDetails"]);
Route::get("/contact", [PagesController::class, "contact"])->name('contact');
Route::post("/sendcontactrequest", [PagesController::class, "sendContactRequest"])->name('sendContactRequest');
