@extends('tataletak')

@section('content')
<h2>Data Santri</h2>

@if(count($santris) == 0)
    <p>Belum ada santri yang terdaftar.</p>
@else
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Asal Sekolah</th>
    </tr>
    @foreach($santris as $no => $s)
    <tr>
        <td>{{ $no + 1 }}</td>
        <td>{{ $s['nama'] }}</td>
        <td>{{ $s['asal'] }}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection
