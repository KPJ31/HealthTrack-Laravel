<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $fillable = [
        'generate_by',

        'report_type',
        'parameters',
        'file_path'
    ];
}
