<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *public function address_all(){
    return $this->hasMany(ADDRESS::class);
        }
     * @var array<int, string>
     * 
     */

 protected $table ='investor';
 public  $timestamps = true;
 protected $fillable = [
    'FIRST_NAME',
    'LAST_NAME',
    'ADDRESS_ID',
    'EMAIL_ADDRESS',
    'PHONE_NUMBER',
    'EMPLOYMENT_STATUS',
    'HOUSEHOLD_INCOME',
    'SPOUSE_FIRSTNAME',
    'SPOUSE_LASTNAME',
    'SPOUSE_EMAIL',
    'SPOUSE_PHONE_NO',
    'SPOUSE_EMPLOYMENT_STATUS',
];

public function address()
{
    return $this->hasMany(address::class,'ADDRESS_ID');
}


}
