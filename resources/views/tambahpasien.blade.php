@extends('headerfooter.headerfooteradmin')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Tambah Data Pasien</h2>
    <form>
        <div class="form-group">
            <label for="namaPasien">Nama Pasien</label>
            <input type="text" class="form-control" id="namaPasien" placeholder="Masukkan nama pasien">
        </div>
        <div class="form-group">
            <label for="tempatLahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempatLahir" placeholder="Masukkan tempat lahir">
        </div>
        <div class="form-group">
            <label for="tanggalLahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggalLahir">
        </div>
        <div class="form-group">
            <label for="alamatDomisili">Alamat Domisili</label>
            <textarea class="form-control" id="alamatDomisili" rows="3" placeholder="Masukkan alamat domisili"></textarea>
        </div>
        <div class="form-group">
            <label for="noTelepon">No Telepon</label>
            <input type="tel" class="form-control" id="noTelepon" placeholder="Masukkan no telepon">
        </div>
        <div class="form-group">
            <label for="keluhan">Keluhan</label>
            <textarea class="form-control" id="keluhan" rows="3" placeholder="Masukkan keluhan"></textarea>
        </div>
        <div class="form-group">
            <label for="jenisPemeriksaan">Jenis Pemeriksaan</label>
            <select class="form-control" id="jenisPemeriksaan">
                <option>Pemeriksaan A</option>
                <option>Pemeriksaan B</option>
                <option>Pemeriksaan C</option>
                <!-- Tambahkan opsi lain sesuai kebutuhan -->
            </select>
        </div>
        <div class="form-group">
            <label>Jenis Pembayaran</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenisPembayaran" id="bpjs" value="BPJS">
                <label class="form-check-label" for="bpjs">
                    BPJS
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenisPembayaran" id="umum" value="Umum">
                <label class="form-check-label" for="umum">
                    Umum
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Proses</button>
    </form>
</div>

@endsection