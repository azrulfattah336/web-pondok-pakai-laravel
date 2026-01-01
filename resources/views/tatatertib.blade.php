@extends('tataletak')

@section('content')
<h3 class="mb-4">Tata Tertib Santri</h3>

<div class="card shadow-sm mb-4 slide-up">
    <div class="card-body">
        <ol class="list-group list-group-numbered">
            <li class="list-group-item">
                Santri wajib mengikuti seluruh kegiatan pesantren.
            </li>
            <li class="list-group-item">
                Santri wajib menjaga kebersihan lingkungan pesantren.
            </li>
            <li class="list-group-item">
                Santri dilarang membawa barang terlarang.
            </li>
            <li class="list-group-item">
                Santri wajib berpakaian sopan dan rapi.
            </li>
            <li class="list-group-item">
                Santri wajib menghormati ustadz dan sesama santri.
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm slide-up" style="background-color: rgba(139,0,0,0.6); color: white;">
            <div class="card-body">
                <h5 class="card-title">Pelanggaran Fatal</h5>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item bg-transparent text-white border-0">
                        Membawa atau mengedarkan barang terlarang (narkoba, senjata, alkohol, rokok ilegal).
                    </li>
                    <li class="list-group-item bg-transparent text-white border-0">
                        Kekerasan fisik terhadap santri atau pengasuh.
                    </li>
                    <li class="list-group-item bg-transparent text-white border-0">
                        Melarikan diri dari asrama atau pesantren tanpa izin.
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="card shadow-sm slide-up" style="background-color: rgba(255,165,0,0.6); color: white;">
            <div class="card-body">
                <h5 class="card-title">Pelanggaran Sedang</h5>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item bg-transparent text-white border-0">
                        Tidak mengikuti seluruh kegiatan pesantren (tanpa izin).
                    </li>
                    <li class="list-group-item bg-transparent text-white border-0">
                        Mengabaikan jadwal ibadah atau kegiatan belajar.
                    </li>
                    <li class="list-group-item bg-transparent text-white border-0">
                        Membawa handphone tanpa izin atau mengakses media sosial saat jam belajar.
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="card shadow-sm slide-up" style="background-color: rgba(0,0,139,0.6); color: white;">
            <div class="card-body">
                <h5 class="card-title">Pelanggaran Ringan / Teguran</h5>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item bg-transparent text-white border-0">
                        Tidak memakai pakaian rapi sesuai aturan pesantren.
                    </li>
                    <li class="list-group-item bg-transparent text-white border-0">
                        Tidak membersihkan kamar atau lingkungan sendiri.
                    </li>
                    <li class="list-group-item bg-transparent text-white border-0">
                        Menggunakan bahasa kurang sopan dengan teman atau pengasuh.
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
