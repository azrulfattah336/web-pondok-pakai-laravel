<h2>Form Pendaftaran Santri</h2>

<form method="POST" action="/pendaftaran">
    @csrf

    <label>Nama Lengkap</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Asal Sekolah</label><br>
    <input type="text" name="asal" required><br><br>

    <button>Daftar</button>
</form>

<br>
<a href="/">Kembali ke Beranda</a>
