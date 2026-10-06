<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientWorkoutPlans extends Model
{
    protected $fillable = [
        'client_id',
        'workout_plan_id',

        'start_date',
        'end_date',
        'progress',
        'status'
    ];
}
