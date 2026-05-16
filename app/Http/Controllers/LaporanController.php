<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        return response()->json(
            Laporan::with('user', 'jenisKejadian')->latest()->get()
        );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'jenis_kejadian_id' => 'required',
            'lokasi_kejadian' => 'required',
            'tanggal_waktu_kejadian' => 'required',
            'nama_personel' => 'required',
            'regu' => 'required',
            'shift' => 'required',
            'kronologi' => 'required'
        ]);

        $laporan = Laporan::create($data);

        return response()->json([
            'message' => 'Laporan berhasil ditambahkan',
            'data' => $laporan
        ]);
    }

    public function show(int $id)
    {
        return response()->json(
            Laporan::with('user', 'jenisKejadian')->findOrFail($id)
        );
    }

    public function update(Request $request, int $id)
    {
        $laporan = Laporan::findOrFail($id);

        $laporan->update($request->all());

        return response()->json([
            'message' => 'Laporan berhasil diupdate'
        ]);
    }

    public function destroy(int $id)
    {
        Laporan::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Laporan berhasil dihapus'
        ]);
    }
}