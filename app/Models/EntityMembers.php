<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityMembers extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_individual_first_name',
        'partner_individual_last_name',
    ];
}
