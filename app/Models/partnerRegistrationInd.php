<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class partnerRegistrationInd extends Model
{
    use HasFactory;
/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
 protected $fillable = [
    'partner_individual_first_name',
    'partner_individual_last_name',
    'partner_individual_email_address',
    'partner_individual_spouse_first_name',
    'partner_individual_spouse_last_name',
    'partner_individual_spouse_email_address',
    'partner_individual_employment_status',
    'partner_individual_household_income',
    'partner_individual_employment_status_spouse',
    'partner_individual_address',
    'partner_individual_street',
    'partner_individual_state',
    'partner_individual_city',
    'partner_individual_zip_code',
];
 

}
