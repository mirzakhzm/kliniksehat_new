<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';

    public $timestamps = false; // Disable timestamps

    //Untuk mengizinkan mass assignment
    protected $fillable = [
        'nama_pasien',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kontak',
        'keluhan',
        'pemeriksaan',
        'jenis_pasien',
      
        
    ];


    public function hitungDiskon()
    {
        if ($this->jenis_pasien == 'BPJS' && $this->total_pembayaran >= 500000) {
            return $this->total_pembayaran * 0.4; // Diskon 60%
        } elseif ($this->jenis_pasien == 'Umum' && $this->total_pembayaran < 500000) {
            return $this->total_pembayaran * 0.9; // Diskon 10%
        } else {
            return $this->total_pembayaran; // Tidak ada diskon
        }
    }
    // Mengatur kolom primary key
    // protected $primaryKey = 'id_pasien'; // Menggunakan kolom id_pasien

}
