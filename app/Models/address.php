<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
   
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'address';
    protected $fillable = [
        'STREET_1',
        'CITY',
        'STATE',
        'ZIP_CODE',
    ];

    public function investor()
{
    return $this->hasMany('App\investor');
}

}
