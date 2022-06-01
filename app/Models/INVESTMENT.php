<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class INVESTMENT extends Model
{
    use HasFactory;

    protected $fillable = [
        'INVESTOR_ID',
        'CASH',
        'LOAN',
        'SHAREHOLDING',
        'TOTAL_SHARE',
        'FINDER_FEES',
        

    ];
}
