@extends('tataletak')

@section('content')
<div class="card border text-center p-5 rounded shadow-sm slide-up">
    <h1 class="mb-3">Selamat Datang</h1>
    <h4 class="mb-4">Sistem Informasi Pendaftaran Santri</h4>

    <p class="mb-4">
        Website ini digunakan untuk pendaftaran santri baru,
        melihat data santri, serta informasi tata tertib pesantren.
    </p>

    <div class="text-center">
    <a href="/pendaftaran" class="btn btn-success btn-lg px-4">
        Daftar Santri Baru
    </a>
    </div>
</div>

<div class="row my-4">
    <!-- KOLOM KIRI -->
    <div class="col-md-6">
        <div class="card shadow-sm mb-4 slide-up">
            <div class="card-body">
                <p class="card-text">
                    Pondok Pesantren AL-FATTAH merupakan lembaga pendidikan Islam yang didirikan pada tahun 1765.
                     Pesantren ini berada di bawah pengasuhan Azrul Fattah, 
                     yang berkomitmen membina generasi santri agar memiliki keimanan yang kuat, akhlak mulia,
                      serta wawasan keilmuan yang luas.
                </p>
                <p class="card-text">Sejak awal berdirinya, Pondok Pesantren AL-FATTAH berfokus pada pendidikan Islam yang menekankan keseimbangan antara ilmu agama dan ilmu umum.
                     Santri dibimbing untuk memahami Al-Qur’an, Hadis, serta dasar-dasar keilmuan Islam,
                      sekaligus dibekali pengetahuan umum yang berguna dalam kehidupan bermasyarakat.
                </p>
                <p class="card-text">Dalam kehidupan sehari-hari, pesantren menerapkan nilai-nilai kedisiplinan, tanggung jawab, dan kebersamaan. 
                    Lingkungan pesantren dirancang agar menjadi tempat yang aman, nyaman, dan kondusif bagi proses pembentukan karakter santri.
                </p>
                <p class="card-text">Dengan bimbingan pengasuh dan para ustadz,
                     Pondok Pesantren AL-FATTAH terus berupaya mencetak santri yang berakhlakul karimah,
                      mandiri, serta siap berkontribusi positif bagi agama, bangsa, dan masyarakat.
                </p>
            </div>
        </div>
    </div>

    <!-- KOLOM KANAN -->
    <div class="col-md-6">

        <!-- Visi & Misi -->
        <div class="card shadow-sm mb-4 slide-up">
            <div class="card-body">
                <h4 class="card-title">Visi & Misi</h4>
                <ul>
                    <li>Mencetak santri berakhlakul karimah</li>
                    <li>Menguasai ilmu agama dan umum</li>
                    <li>Membentuk pribadi mandiri dan disiplin</li>
                    <li>Mengembangkan potensi intelektual dan spiritual santri</li>
                    <li>Membiasakan budaya ilmu dan adab pesantren, seperti menghormati guru, mencintai ilmu, dan kebersamaan.</li>
                    <li>Mempersiapkan santri agar mampu menghadapi tantangan global,</li>
                </ul>
            </div>
        </div>

        <!-- Aktifitas Santri -->
        <div class="card shadow-sm mb-4 slide-up">
            <div class="card-body">
                <h4 class="card-title">Kegiatan/agenda</h4>
                <ul>
                    <li>Kegiatan belajar mengajar (KBM)</li>
                    <li>Hafalan Al-Qur’an (Bagi yang tahfidz)</li>
                    <li>Pengajian kitab kuning</li>
                    <li>Sholat berjamaah</li>
                    <li>Kegiatan olahraga & seni</li>
                </ul>
            </div>
        </div>
</div>

@endsection
