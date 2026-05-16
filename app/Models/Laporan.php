<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';

    protected $fillable = [
        'user_id',
        'jenis_kejadian_id',
        'lokasi_kejadian',
        'tanggal_waktu_kejadian',
        'foto_bukti',
        'nama_personel',
        'regu',
        'shift',
        'kronologi',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenisKejadian()
    {
        return $this->belongsTo(JenisKejadian::class);
    }
}