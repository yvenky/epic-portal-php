<?php

namespace App\Models;
use App\Models\ENTITY;
use App\Models\ADDRESS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PROPERTY extends Model
{
    use HasFactory;

    protected $table ='PROPERTY';
    public $timestamps = false;

    protected $fillable = [
        'INCOME',                      
        'ADDRESS_ID',    
        'NO_OF_ACRES',       
        'COST_PER_ACRE',       
        'PURCHASE_PRICE',       
        'POTENTIAL_MARKET_VALUE',       
        'PURCHASE_DATE',       
        'ENTITY_ID',       
        'PROPERTY_MAP',
        'SURVEY',       
        'DEED',       
        'ENVIRONMENT_STUDY_REPORT',       
        'DUE_DILEGENCE',
    ];

    public function address()
    {
   
        return $this->belongsTo(ADDRESS::class,'ADDRESS_ID');
     
    }

    public function entity_id()
    {
        return $this->belongsTo(ENTITY::class,'ENTITY_ID');
        
    }
}
