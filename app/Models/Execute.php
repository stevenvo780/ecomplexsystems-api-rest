<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Execute extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'process',
        'robot',
        'machine',
        'job',
        'status',
        'date_init',
        'date_end',
    ];
}
