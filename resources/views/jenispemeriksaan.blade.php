@extends('headerfooter.headerfooteradmin')

@section('content')

<div class="container mt-5">

    <h2 class="text-center">Tambah Jenis Pemeriksaan</h2>
    <form>
        <div class="form-group">
            <label for="namaPasien">Nama Jenis</label>
            <input type="text" class="form-control" id="namaPasien" placeholder="Masukkan nama jenis">
        </div>
       
        <div class="form-group">
            <label for="alamatDomisili">Biaya Pemeriksaan</label>
            <textarea class="form-control" id="alamatDomisili" rows="3" placeholder="Masukkan biaya"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>

    <br>

    <h2 class="text-center">Data Jenis Pemeriksaan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Jenis Pemeriksaan</th>
                <th>Biaya Penangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pemeriksaan A</td>
                <td>Rp 100,000</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editDataModal">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete()">Hapus</button>
                </td>
            </tr>
            <tr>
                <td>Pemeriksaan B</td>
                <td>Rp 200,000</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editDataModal">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete()">Hapus</button>
                </td>
            </tr>
            <!-- Data lainnya dapat ditambahkan di sini -->
        </tbody>
    </table>
</div>



@endsection