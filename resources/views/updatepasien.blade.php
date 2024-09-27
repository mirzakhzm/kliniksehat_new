{{-- @extends('headerfooter.headerfooteradmin')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Update Data Pasien</h2>
    
    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="kontak">Kontak</label>
            <input type="text" class="form-control" name="kontak" value="{{ old('kontak', $pasien->kontak) }}" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $pasien->alamat) }}" required>
        </div>

        <div class="form-group">
            <label for="jenis_pasien">Jenis Pasien</label>
            <select class="form-control" name="jenis_pasien" required>
                <option value="BPJS" {{ $pasien->jenis_pasien == 'BPJS' ? 'selected' : '' }}>BPJS</option>
                <option value="Umum" {{ $pasien->jenis_pasien == 'Umum' ? 'selected' : '' }}>Umum</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pemeriksaan">Pemeriksaan</label>
            <input type="text" class="form-control" name="pemeriksaan" value="{{ old('pemeriksaan', $pasien->pemeriksaan) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection --}}
