<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    protected $fillable = [
        'name',
        'description',
        'calories_per_100g',
        'protein',
        'carbohydrates',
        'fat',
        'is_active'
    ];
}
