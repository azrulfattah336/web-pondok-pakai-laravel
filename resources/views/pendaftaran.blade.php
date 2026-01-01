@extends('tataletak')

@section('content')
<h3 class="mb-3">Pendaftaran Santri</h3>

<form method="POST" action="/pendaftaran" class="card p-4 shadow-sm">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Asal Sekolah</label>
        <input type="text" name="asal" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">
        Daftar
    </button>
</form>
@endsection
