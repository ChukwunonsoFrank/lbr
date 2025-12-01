<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    "company_name",
    "registration_date",
    "registered_address",
    "status",
    "country",
    "business_activities"
  ];
}
