<!DOCTYPE html>
<html>
<head>
    <title>Pondok Pesantren</title>
    <style>
        body {
            font-family: Arial;
            margin: 30px;
        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }
        table {
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>

<nav>
    <a href="/">Beranda</a>
    <a href="/pendaftaran">Pendaftaran</a>
    <a href="/data-santri">Data Santri</a>
    <a href="/tata-tertib">Tata Tertib</a>
</nav>

<hr>

@yield('content')

</body>
</html>
