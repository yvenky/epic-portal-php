<?php

namespace App\Models;
use App\Models\ENTITY;
use App\Models\PROPERTY;
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

    public function entity_select()
    {
   
        return $this->belongsTo(ENTITY::class,'ENTITY_SELECT');
    }

    public function properties_select()
    {
   
        return $this->belongsTo(PROPERTY::class,'PROPERTY_SELECT');
    }
}
