<?php

namespace App\Models;
use App\Models\ENTITY;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PROPERTY extends Model
{
    use HasFactory;

    protected $table ='PROPERTY';
    public $timestamps = false;

    protected $fillable = [                        
        'PROPERTY_ADDRESS',       
        'GOOGLE_COORDINATES',       
        'ENTITY_COMPANY',       
        'NO_OF_ACRES',          
        'MAP_URL',       
        'PROPERTY_DOCUMENTS',
        'PURCHASE_PRICE',           
        'COST_PER_ACRE',
        'POTENTIAL_PER_ACRE',
        'POTENTIAL_MARKET_VALUE',    
    ];



    public function entity_id()
    {
        return $this->belongsTo(ENTITY::class,'ENTITY_COMPANY');
        
    }

}
