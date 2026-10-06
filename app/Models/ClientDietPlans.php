<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientDietPlans extends Model
{
    protected $fillable = [
        'client_id',
        'diet_plan_id',

        'start_date',
        'end_date',
        'status'
    ];
}
