<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkoutExercises extends Model
{
    protected $fillable = [
        'client_workout_plan_id',
        'exercise_id',

        'sets',
        'reps',
        'rest_seconds',
        'order_index'
    ];
}
