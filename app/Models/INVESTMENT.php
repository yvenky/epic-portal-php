<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\INVESTOR;

class INVESTMENT extends Model
{
    use HasFactory;

    protected $table = 'INVESTMENT';
    public $timestamps = false;

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
        'ENTITY_PROPERTIES',
        'INVESTOR_ID',

    ];


    public function INVESTOR_select()
    {
   
        return $this->belongsTo(INVESTOR::class,'INVESTOR_ID');
    }

    public function entity__properties_()
    {
   
        return $this->belongsTo(ENTITY_PROPERTIES::class,'ENTITY_PROPERTIES');
    }
}
