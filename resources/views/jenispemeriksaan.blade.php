@extends('headerfooter.headerfooteradmin')

@section('content')
<div class="container">
    <h2>Jenis Pemeriksaan</h2>

    <!-- Form Tambah Jenis Pemeriksaan -->
    <form action="{{ route('jenispemeriksaan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pemeriksaan</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga Pemeriksaan</label>
            <input type="number" name="harga" class="form-control" id="harga" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Pemeriksaan</button>
    </form>

    <!-- Daftar Pemeriksaan -->
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th> <!-- Kolom Harga -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemeriksaans as $pemeriksaan)
            <tr>
                <td>{{ $pemeriksaan->nama }}</td>
                <td>{{ number_format($pemeriksaan->harga, 2) }} IDR</td> <!-- Menampilkan Harga -->
                <td>
                    <!-- Form Edit Pemeriksaan -->
                    <form action="{{ route('jenispemeriksaan.update', $pemeriksaan->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <input type="text" name="nama" value="{{ $pemeriksaan->nama }}" required>
                        <input type="number" name="harga" value="{{ $pemeriksaan->harga }}" required> <!-- Input untuk Harga -->
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </form>

                    <!-- Form Hapus Pemeriksaan -->
                    <form action="{{ route('jenispemeriksaan.destroy', $pemeriksaan->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
