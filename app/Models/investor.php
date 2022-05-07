<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class INVESTOR extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

 protected $table ='INVESTOR';
 public  $timestamps = false;
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
    return $this->belongsTo(ADDRESS::class,'ADDRESS_ID');
}
}
