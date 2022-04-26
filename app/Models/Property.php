<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_address',                      
        'property_of_acres',    
        'property_map_right_url',       
        'property_contract_url',       
        'property_survey_url',       
        'property_closing_documents',       
        'property_appraisal',       
        'property_phase_env_inspection',       
        'property_attorney_feedback'
    ];
}
