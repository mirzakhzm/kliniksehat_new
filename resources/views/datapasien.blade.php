@extends('headerfooter.headerfooteradmin')

@section('content')
  <!-- Data Table Section -->
<section id="data-table" class="data-table section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-12">
          <h2 class="text-center">Data Pasien</h2>

          <br>
          <!-- Search and Filter -->
        <div class="d-flex justify-content-between mb-3">
            <input type="text" id="searchInput" class="form-control w-50" placeholder="Search data pasien">
            <select id="filterKategori" class="form-control w-25">
              <option value="all">Semua</option>
              <option value="BPJS">BPJS</option>
              <option value="Umum">Umum</option>
            </select>
            <a href="{{ route('tambahpasien') }}" class="btn btn-success bi bi-person-fill-add">Tambah Pasien</a>
          </div>

          <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Jenis Pemeriksaan</th>
                    <th scope="col">Pembayaran</th>
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasiens as $pasien)
                <tr>
                    <td>{{ $pasien->nama_pasien}}</td>
                    <td>{{ $pasien->pemeriksaan}}</td>
                    <td>{{ $pasien->pembayaran}}</td>
                    <td>{{ $pasien->status_pembayaran }}</td>
                    <td>{{ $pasien->keluhan }}</td>
                    <td>
                        <button class="btn btn-info btn-sm">Lihat</button>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                @endforeach
                @if($pasiens->isEmpty())
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data pasien</td>
                </tr>
                @endif
            </tbody>
        </table>
        </div>
      </div>
    </div>
  </section><!-- /Data Table Section -->
  
@endsection
