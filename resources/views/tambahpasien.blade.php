@extends('headerfooter.headerfooteradmin')

@section('content')

<section>
<div class="container mt-5">
    <h2 class="text-center">Tambah Data Pasien</h2>
    <form action="{{ route('pasien.store') }}" method="POST" enctype="multipart/form-data">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        @csrf
        <div class="form-group">
            <label for="nama_pasien">Nama Pasien</label>
            <input type="text" class="form-control" name="nama_pasien" required>
        </div>
        
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <textarea class="form-control" name="tempat_lahir" required></textarea>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" required>
        </div>
        
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="kontak">Kontak</label>
            <textarea class="form-control" name="kontak" required></textarea>
        </div>

        <div class="form-group">
            <label for="keluhan">Keluhan</label>
            <textarea class="form-control" name="keluhan" required></textarea>
        </div>

        <div class="form-group">
            <label for="pemeriksaan">Jenis Pemeriksaan</label>
            <select class="form-control" name="pemeriksaan" id="pemeriksaan" required>
                @foreach ($pemeriksaans as $pemeriksaan)
                    <option value="{{ $pemeriksaan->nama }}">{{ $pemeriksaan->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jenis_pasien">Jenis Pasien</label><br>
            <input type="radio" name="jenis_pasien" value="BPJS" required> Bpjs
            <input type="radio" name="jenis_pasien" value="Umum" required> Umum
        </div>

        {{-- <div class="form-group">
            <label for="total_pembayaran">Total Pembayaran</label>
            <input type="number" class="form-control" name="total_pembayaran" required>
        </div> --}}

        {{-- <div class="form-group">
            <label for="foto">Foto Pasien</label>
            <input type="file" class="form-control" name="foto" accept="image/*">
        </div> --}}

        <button type="submit" class="btn btn-primary">Simpan Data Pasien</button>
    </form>
</div>
  
@endsection