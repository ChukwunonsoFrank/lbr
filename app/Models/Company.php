<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    "company_name",
    "reg_number",
    "registration_date",
    "registered_address",
    "status",
    "country",
    "business_activities",
    "official_website_url"
  ];
}
