<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DietPlanMeals extends Model
{
    protected $fillable = [
        'client_diet_plan_id',
        'food_id',

        'meal_type',
        'quantity',
        'calories',
        'notes'
    ];
}
