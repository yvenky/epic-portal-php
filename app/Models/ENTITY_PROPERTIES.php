<?php

namespace App\Models;
use App\Models\ENTITY;
use App\Models\PROPERTY;
use App\Models\INVESTMENT;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ENTITY_PROPERTIES extends Model
{
    
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'ENTITY_PROPERTIES';
    public $timestamps = false;
    protected $fillable = [
        'ENTITY_SELECT',
        'PROPERTY_SELECT',
        'TOTAL_PROPERTIES_VALUE',
    ];

  
    public function investmentGet()
    {
        return $this->hasMany('App\INVESTMENT');
        
    }
    public function entityGet()
    {
        return $this->hasMany('App\ENTITY');
        
    }

    public function propertyGet()
    {
        return $this->hasMany('App\PROPERTY');
        
    }

}
