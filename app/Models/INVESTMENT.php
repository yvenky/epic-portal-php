<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
