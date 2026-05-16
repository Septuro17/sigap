<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisKejadian extends Model
{
    protected $table = 'jenis_kejadian';

    protected $fillable = [
        'nama_jenis'
    ];

    public function laporan()
    {
        return $this->hasMany(Laporan::class);
    }
}