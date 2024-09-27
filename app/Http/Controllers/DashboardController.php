<?php

namespace App\Http\Controllers;

use App\Models\Pasien;

class DashboardController extends Controller
{
    public function index()
    {
        // Menampilkan Skor dalam Dashboard
        $totalPasien = Pasien::count();
        $totalBPJS = Pasien::where('jenis_pasien', 'BPJS')->count();
        $totalUmum = Pasien::where('jenis_pasien', 'Umum')->count();
        $totalDokter = 25; // Misalnya Anda punya data dokter dari model lain atau hardcode
        
        return view('dashboard', compact('totalPasien', 'totalBPJS', 'totalUmum', 'totalDokter',));
    }
}
