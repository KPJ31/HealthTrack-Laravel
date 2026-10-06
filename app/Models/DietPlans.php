<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DietPlans extends Model
{
    protected $fillable = [
        'trainer_id',

        'name',
        'description',
        'goal',
        'calorie_target',
        'is_active'
    ];
}
