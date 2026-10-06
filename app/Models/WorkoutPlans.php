<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkoutPlans extends Model
{
    protected $fillable = [
        'trainer_id',

        'name',
        'description',
        'goal',
        'difficulty',
        'duration_week',
        'is_active'
    ];
}
