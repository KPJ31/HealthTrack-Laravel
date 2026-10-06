<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthMetrics extends Model
{
    protected $fillable = [
        'user_id',

        'metric_type',
        'value',
        'unit',
        'recorded_at',
        'notes'
    ];
}
