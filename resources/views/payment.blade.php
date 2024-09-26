@extends('headerfooter.headerfooteradmin')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Invoice</h2>
    <div class="card">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col-sm-3 font-weight-bold">Nama Pasien:</div>
          <div class="col-sm-9">John Doe</div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-3 font-weight-bold">Keluhan:</div>
          <div class="col-sm-9">Sakit Kepala</div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-3 font-weight-bold">Diagnosa:</div>
          <div class="col-sm-9">Migrain</div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-3 font-weight-bold">Hasil Pemeriksaan:</div>
          <div class="col-sm-9">CT Scan Normal</div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-3 font-weight-bold">Jenis Pasien:</div>
          <div class="col-sm-9">Umum</div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-3 font-weight-bold">Total Pembayaran:</div>
          <div class="col-sm-9">Rp 500,000</div>
        </div>
        <div class="row">
          <div class="col-sm-3 font-weight-bold">Aksi:</div>
          <div class="col-sm-9">
            <button class="btn btn-success mr-2">Bayar</button>
            <button class="btn btn-warning">Nanti</button>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection