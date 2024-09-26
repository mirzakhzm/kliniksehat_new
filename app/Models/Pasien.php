<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    // Tambahkan properti fillable untuk mengizinkan mass assignment
    protected $fillable = [
        'nama_pasien',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kontak',
        'keluhan',
        'pemeriksaan',
        'pembayaran',
    ];
}
