<?php

namespace App\Models;
use App\Models\ADDRESS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ENTITY extends Model
{
    use HasFactory;

    protected $table ='ENTITY';
    protected $fillable = [
        
        'EIN',                      
        'ENTITY_NAME',                 
        'ADDRESS_ID',                    
        'MANAGING_MEMBER_1',               
        'MANAGING_MEMBER_2',                
        'OPERATING_AGREEMENT',           

    ];

    public function address()
    {
   
        return $this->belongsTo(ADDRESS::class,'ADDRESS_ID');
    }

    public function entity()
    {
        return $this->belongsTo(INVESTOR::class,'ID');
        
    }
 
}
