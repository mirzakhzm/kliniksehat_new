<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nama_pasien');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->bigInteger('kontak'); // Kontak sebagai bigInteger
            $table->string('keluhan')->nullable();
            $table->string('pemeriksaan')->nullable();
            $table->string('pembayaran')->nullable();
            $table->string('status_pembayaran');
            $table->timestamp('created_at')->nullable()-> now();
            $table->timestamp('updated_at')->nullable()-> now();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
