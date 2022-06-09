<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\INVESTOR;
use App\Models\ENTITY_PROPERTIES;

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
        'INVESTOR_ID',

    ];


    public function investor_select()
    {
   
        return $this->belongsTo(INVESTOR::class,'INVESTOR_ID');
    }

}
