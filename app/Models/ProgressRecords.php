<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgressRecords extends Model
{
    protected $fillable = [
        'user_id',

        'record_type',
        'title',
        'description',
        'record_date',
        'value'
    ];
}
