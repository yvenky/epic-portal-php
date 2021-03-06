<?php

namespace App\Models;
use App\Models\ADDRESS;
use App\Models\INVESTOR;
use App\Models\PROPERTY;
use App\Models\ENTITY_PROPERTIES;
use App\Models\INVESTMENT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ENTITY extends Model
{
    use HasFactory;

    protected $table ='ENTITY';
    protected $fillable = [
        
        'EIN',                      
        'ENTITY_NAME',                 
        'ADDRESS_ID',                    
        'MANAGING_MEMBER_1',               
        'MANAGING_MEMBER_2',                
        'OPERATING_AGREEMENT',           

    ];

    public function address()
    {
   
        return $this->belongsTo(ADDRESS::class,'ADDRESS_ID');
    }

    public function investor_mm_one()
    {
        return $this->belongsTo(INVESTOR::class,'MANAGING_MEMBER_1');
        
    }
    public function investor_mm_two()
    {
        return $this->belongsTo(INVESTOR::class,'MANAGING_MEMBER_2');
        
    }

    public function entity()
    {
        return $this->hasMany('App\Models\INVESTMENT');
        
    }
    public function property()
    {
        return $this->hasMany('App\Models\PROPERTY');
        
    }


}
