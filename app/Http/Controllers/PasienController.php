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
        'tempat_lahir' => 'required|string',
        'tanggal_lahir' => 'required|date',
        'alamat' => 'required|string',
        'kontak' => 'required|numeric',
        'keluhan' => 'required|string',
        'pemeriksaan' => 'required|string',
        'jenis_pasien' => 'required|in:BPJS,Umum',
        // 'total_pembayaran' => 'required|numeric',
        // 'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096' // Validasi gambar
    ]);

    // Handle file upload
    // if ($request->hasFile('foto')) {
    //     $fileName = time().'.'.$request->foto->extension();
    //     $request->foto->move(public_path('pasien/foto'), $fileName);
    //     $validated['foto'] = $fileName;
    // }

    // Simpan data ke database
    $pasien = new Pasien($validated);
    // $pasien->total_pembayaran = $pasien->hitungDiskon();
    $pasien->save();

    return redirect()->route('datapasien')->with('success', 'Data pasien berhasil disimpan!');
}

    public function index()
    {
        // Ambil semua data pasien dari database
        $pasiens = Pasien::all();

        // Kirim data pasien ke view 'datapasien'
        return view('datapasien', compact('pasiens'));
    }


    //Menghapus Pasien
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id); // Temukan pasien berdasarkan id_pasien
        $pasien->delete();

        return redirect()->route('datapasien')->with('success', 'Pasien berhasil dihapus!');
   
    }

    // public function edit($id)
    // {
    //     $pasien = Pasien::findOrFail($id); // Find the patient by ID
    
    //     return view('updatepasien', compact('pasien'));
    // }
    

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'kontak' => 'required|string|max:255',
    //         'alamat' => 'required|string|max:255',
    //         'jenis_pasien' => 'required|in:BPJS,Umum',
    //         'pemeriksaan' => 'required|string',
    //     ]);

    //     $pasien = Pasien::findOrFail($id);
    //     $pasien->update([
    //     'kontak' => $request->kontak,
    //     'alamat' => $request->alamat,
    //     'jenis_pasien' => $request->jenis_pasien,
    //     'pemeriksaan' => $request->pemeriksaan,
    // ]);

    //     return redirect()->back()->with('success', 'Pasien berhasil diperbarui!');
    // }
}