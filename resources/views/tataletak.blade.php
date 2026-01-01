<!DOCTYPE html>
<html>
<head>
    <title>Pondok Pesantren</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">Pondok Pesantren</a>
        <div class="navbar-nav">
            <a class="nav-link" href="/">Beranda</a>
            <a class="nav-link" href="/pendaftaran">Pendaftaran</a>
            <a class="nav-link" href="/data-santri">Data Santri</a>
            <a class="nav-link" href="/tata-tertib">Tata Tertib</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
