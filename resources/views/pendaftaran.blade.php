@extends('tataletak')

@section('content')
<h3 class="mb-3">Pendaftaran Santri</h3>

<p class="mb-4">
    "Mari bergabung bersama kami untuk menuntut ilmu, membentuk karakter, dan memperkuat iman."
</p>


<form method="POST" action="/pendaftaran" class="card p-4 shadow-sm slide-up">
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

<div class="card  shadow-sm mt-4 slide-up mb-5">
    <div class="card-body" style="line-height: 1.6;">
        <p class="card-text">
            Selamat datang di formulir pendaftaran santri baru Pondok Pesantren AL-FATTAH. 
            Silakan isi semua data dengan lengkap dan benar agar proses pendaftaran berjalan lancar. 
            Pastikan Anda mencantumkan nama, asal sekolah, tanggal lahir, alamat, dan data orang tua/wali. 
            Pendaftaran ini terbuka untuk semua calon santri yang berusia minimal 7 tahun. 
            Dokumen pendukung seperti surat rekomendasi dari sekolah dan fotokopi identitas akan diperlukan setelah form ini terkirim. 
        </p>
        <p class="card-text">
            Kami mengutamakan kejujuran dan ketelitian dalam pengisian data, sehingga pengasuh dan staf pesantren dapat segera memproses pendaftaran Anda. 
            Jika mengalami kesulitan atau ada pertanyaan, jangan ragu untuk menghubungi kami melalui email <strong>info@alfattah.com</strong> atau telepon <strong>+62 812 3456 7890</strong>. 
            Terima kasih telah mempercayakan pendidikan anak Anda kepada Pondok Pesantren AL-FATTAH, semoga proses pendaftaran ini menjadi awal perjalanan ilmu yang bermanfaat.
        </p>
    </div>
</div>

@endsection
