<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get("/", [PagesController::class, "home"]);
Route::get("/search", [PagesController::class, "search"])->name("search");
Route::get("/search-results", [PagesController::class, "searchResults"]);
Route::get("/company-details", [PagesController::class, "companyDetails"]);
