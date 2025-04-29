<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arduino extends Model
{
    protected $table = 'arduino_data';
    protected $guarded = ['id'];

    protected $fillable = [
        'rak',
        'nomor'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

}
