<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ADDRESS extends Model
{
   
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'ADDRESS';
    public  $timestamps = false;
    protected $fillable = [
        'STREET_1',
        'CITY',
        'STATE',
        'ZIP_CODE',
    ];
}
