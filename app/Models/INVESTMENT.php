<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\INVESTOR;
use App\Models\ENTITY_PROPERTIES;
use App\Models\ENTITY;

class INVESTMENT extends Model
{
    use HasFactory;

    protected $table = 'INVESTMENT';
    public $timestamps = false;

    protected $casts = [
   
        'SHAREHOLDING' => 'float',
    ];
    protected $fillable = [
        
        'FIRST_NAME',
        'LAST_NAME',
        'CASH',
        'LOAN',
        'SHAREHOLDING',
        'TOTAL_SHARE',
        'FINDER_FEES',
        'CLOSING_FEES',
        'TOTAL_CASH',
        'ENTITY_PROPERTIES_ID',
        'INVESTOR_ID',
        'ENTITY_ID',

    ];


    public function investor_select()
    {
   
        return $this->belongsTo(INVESTOR::class,'INVESTOR_ID');
    }
    public function entity_select()
    {
   
       return $this->belongsTo(ENTITY::class,'ENTITY_ID');
       
    }
    
    public function entityPropertiesget()
    {
   
       return $this->belongsTo(ENTITY_PROPERTIES::class,'ENTITY_PROPERTIES_ID');
       
    }

    

}
