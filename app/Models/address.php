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
    public $timestamps = false;
    protected $fillable = [
        'STREET_1',
        'CITY',
        'STATE',
        'ZIP_CODE',
    ];

    public function investor()
    {
    return $this->hasMany('App\INVESTOR');
   
    }

    public function entity()
    {
        return $this->hasMany('App\ENTITY');
        
    }

    public function property()
    {
        return $this->hasMany('App\PROPERTY');
        
    }

}
