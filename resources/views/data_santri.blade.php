@extends('tataletak')

@section('content')
<h3 class="mb-3">Data Santri</h3>

@if(count($santris) == 0)
    <div class="alert alert-warning">
        Belum ada santri yang terdaftar.
    </div>
@else
<table class="table table-bordered table-striped slide-up mb-5">
    <thead class="table-success">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Asal Sekolah</th>
        </tr>
    </thead>
    <tbody>
    @foreach($santris as $no => $s)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $s['nama'] }}</td>
            <td>{{ $s['asal'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif
@endsection
