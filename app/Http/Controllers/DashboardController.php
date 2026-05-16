<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\JenisKejadian;

class DashboardController extends Controller
{
    public function index()
    {
        return response()->json([
            'total_laporan' => Laporan::count(),
            'total_jenis_kejadian' => JenisKejadian::count(),
            'laporan_selesai' => Laporan::where('status', 'Selesai')->count(),
            'laporan_diproses' => Laporan::where('status', 'Diproses')->count(),
            'laporan_menunggu' => Laporan::where('status', 'Menunggu')->count(),
        ]);
    }
}