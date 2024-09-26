@extends('headerfooter.headerfooteradmin')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Tambah Data Pasien</h2>
    <form id="formtambahpasien" method="POST" action="/tambahPasien">
        @csrf
            <!-- Form Input -->
        <div class="form-group">
            <label for="nama_pasien">Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" placeholder="Masukkan nama pasien" required>
        </div> 
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukkan tempat lahir" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan alamat domisili" required></textarea>
        </div>
        <div class="form-group">
            <label for="kontak">No Telepon</label>
            <input type="tel" class="form-control" name="kontak" id="kontak" placeholder="Masukkan no telepon" required>
        </div>
        <div class="form-group">
            <label for="keluhan">Keluhan</label>
            <textarea class="form-control" name="keluhan" id="keluhan" rows="3" placeholder="Masukkan keluhan"></textarea>
        </div>
        <div class="form-group">
            <label for="pemeriksaan">Jenis Pemeriksaan</label>
            <select class="form-control" name="pemeriksaan" id="pemeriksaan" required>
                <option>Pemeriksaan A</option>
                <option>Pemeriksaan B</option>
                <option>Pemeriksaan C</option>
                <!-- Tambahkan opsi lain sesuai kebutuhan -->
            </select>
        </div>
        <div class="form-group">
            <label>Jenis Pembayaran</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pembayaran" id="bpjs" value="BPJS" required>
                <label class="form-check-label" for="bpjs">
                    Bpjs
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pembayaran" id="umum" value="Umum" required>
                <label class="form-check-label" for="umum">
                    Umum
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>

<script>
    document.getElementById('formtambahpasien').onsubmit = async function(e) {
        e.preventDefault(); // Menghentikan pengiriman formulir default
    
        const formData = new FormData(this);
    
        try {
            const response = await fetch('/tambahPasien', { // Sesuaikan URL dengan route yang benar
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
    
            const data = await response.json();
            
            if (data.success) {
                alert(data.message); // Menampilkan pesan sukses
                window.location.href = '/datapasien'; // Redirect ke halaman data pasien
            } else {
                alert('Error: ' + data.message); // Menampilkan pesan error
            }
        } catch (error) {
            console.error('Error:', error);
            alert('An error occurred while processing your request.'); // Menampilkan pesan error umum
        }
    };
    </script>
    

@endsection
