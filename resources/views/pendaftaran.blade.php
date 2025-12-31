@extends('tataletak')

@section('content')
<h2>Pendaftaran Santri</h2>

<form method="POST" action="/pendaftaran">
    @csrf

    <p>
        Nama:<br>
        <input type="text" name="nama" required>
    </p>

    <p>
        Asal Sekolah:<br>
        <input type="text" name="asal" required>
    </p>

    <button type="submit">Daftar</button>
</form>
@endsection
