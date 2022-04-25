<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddNewEntry extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'add_partner_entity_name',                      
        'add_partner_entity_ein',                        
        'add_partner_entity_web_file_number',       
        'add_partner_entity_docs',                    
        'add_partner_managing_member_1',               
        'add_partner_managing_member_2',                
        'add_partner_entity_address_street',           
        'add_partner_entity_address_city',                          
        'add_partner_entity_address_state',                         
        'add_partner_entity_address_zipcode', 

    ];

}

                              