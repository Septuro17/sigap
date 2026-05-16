<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    protected $table = 'logbook';

    protected $fillable = [
        'laporan_id',
        'user_id',
        'aktivitas'
    ];
}