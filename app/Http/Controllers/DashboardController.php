<?php

namespace App\Http\Controllers;

use App\Models\Pasien;

class DashboardController extends Controller
{
    public function index()
    {
        // Menampilkan Skor dalam Dashboard
        $totalPasien = Pasien::count();
        $totalBPJS = Pasien::where('pembayaran', 'BPJS')->count();
        $totalUmum = Pasien::where('pembayaran', 'Umum')->count();
        $totalDokter = 25; // Misalnya Anda punya data dokter dari model lain atau hardcode

        // Mengambil data pasien per bulan
        $bpjsData = Pasien::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('pembayaran', 'Bpjs')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count')
            ->toArray();

        $umumData = Pasien::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('pembayaran', 'Umum')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count')
            ->toArray();

        // Menyediakan data bulan untuk grafik
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        
        return view('dashboard', compact('totalPasien', 'totalBPJS', 'totalUmum', 'totalDokter', 'bpjsData', 'umumData', 'months'));
    }
}
