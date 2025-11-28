<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        "company_name",
        "rcs_number",
        "registered_office_address",
        "company_status",
        "dissolved_on",
        "company_type",
        "incorporated_on",
    ];
}
