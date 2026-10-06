<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $fillable = [
        'client_id',
        'trainer_id',

        'appointment_date',
        'status',
        'notes'
    ];
}
