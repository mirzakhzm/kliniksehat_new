<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemeriksaan;

class PemeriksaanController extends Controller
{
    
    // Menampilkan form dan daftar pemeriksaan
    public function index()
    {
        $pemeriksaans = Pemeriksaan::all();
        return view('jenispemeriksaan', compact('pemeriksaans'));
    }

    // Menambahkan jenis pemeriksaan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric', // Validasi untuk kolom 'harga'
        ]);

        Pemeriksaan::create([
            'nama' => $request->nama,
            'harga' => $request->harga, // Tambahkan kolom 'harga'
        ]);

        return redirect()->back()->with('success', 'Jenis pemeriksaan berhasil ditambahkan!');
    }

    // Mengedit jenis pemeriksaan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric', // Validasi untuk kolom 'harga'
        ]);

        $pemeriksaan = Pemeriksaan::findOrFail($id);
        $pemeriksaan->update([
            'nama' => $request->nama,
            'harga' => $request->harga, // Tambahkan kolom 'harga'
        ]);

        return redirect()->back()->with('success', 'Jenis pemeriksaan berhasil diperbarui!');
    }

    // Menghapus jenis pemeriksaan
    public function destroy($id)
    {
        $pemeriksaan = Pemeriksaan::findOrFail($id);
        $pemeriksaan->delete();

        return redirect()->back()->with('success', 'Jenis pemeriksaan berhasil dihapus!');
    }
}
