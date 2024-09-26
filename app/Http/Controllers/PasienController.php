<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'kontak' => 'required|string',
            'keluhan' => 'nullable|string',
            'pemeriksaan' => 'required|string',
            'pembayaran' => 'required|string',
        ]);

        // Simpan data ke database
        $pasien = new Pasien();
        $pasien->nama_pasien = $validated['nama_pasien'];
        $pasien->tempat_lahir = $validated['tempat_lahir'];
        $pasien->tanggal_lahir = $validated['tanggal_lahir'];
        $pasien->alamat = $validated['alamat'];
        $pasien->kontak = $validated['kontak'];
        $pasien->keluhan = $validated['keluhan'];
        $pasien->pemeriksaan = $validated['pemeriksaan'];
        $pasien->pembayaran = $validated['pembayaran'];
        $pasien->save();

        // Kembalikan respons JSON
        return response()->json(['success' => true, 'message' => 'Data pasien berhasil ditambahkan']);
    }

    public function index()
    {
        // Ambil semua data pasien dari database
        $pasiens = Pasien::all();

        // Kirim data pasien ke view 'datapasien'
        return view('datapasien', compact('pasiens'));
    }
}
