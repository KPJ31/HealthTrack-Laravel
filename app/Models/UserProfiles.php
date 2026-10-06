<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    protected $fillable = [
        'user_id',

        'dob',
        'gender',
        'height',
        'weight',
        'phone',
        'address',
        'profile_image'
    ];
}
