<!DOCTYPE html>
<html>
<head>
    <title>Pondok Pesantren</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

/* Navbar auto hide */
.navbar {
    transition: top 0.3s; /* efek smooth saat muncul/hilang */
    position: fixed;      /* navbar tetap di atas layar */
    width: 100%;
    top: 0;
    z-index: 1000;
}

/* biar konten tidak tertutup navbar */
body {
    padding-top: 70px; /* sesuaikan dengan tinggi navbar */
}

/* Slide-Up + Zoom */
        .slide-up {
            opacity: 0;
            transform: translateY(50px) scale(1);
            transition: all 0.5s ease-out;
        }

        .slide-up.active {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .slide-up.active:hover {
            transform: translateY(0) scale(1.05);
            z-index: 10;
        }

        /* Card tambahan */
        .card {
            cursor: pointer; /* supaya hover zoom terasa */
        }

        /* Overlay supaya teks terbaca jika background terlalu gelap */
        .container {
            border-radius: 10px;
            padding: 3px;
        }


</style>

</head>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll('.slide-up');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.classList.add('active'); // trigger slide-up + zoom
        }, index * 200); // delay tiap card
    });
});

// Navbar auto-hide
let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    const navbar = document.querySelector(".navbar");
    if (prevScrollpos > currentScrollPos) {
        navbar.style.top = "0";
    } else {
        navbar.style.top = "-80px";
    }
    prevScrollpos = currentScrollPos;
}
</script>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">Pondok Pesantren AL-FATTAH</a>
        <div class="navbar-nav">
        <a class="nav-link {{ request()->is('/') ? 'active text-white fw-bold' : '' }}" href="/">Beranda</a>
        <a class="nav-link {{ request()->is('pendaftaran') ? 'active text-white fw-bold' : '' }}" href="/pendaftaran">Pendaftaran</a>
        <a class="nav-link {{ request()->is('data-santri') ? 'active text-white fw-bold' : '' }}" href="/data-santri">Data Santri</a>
        <a class="nav-link {{ request()->is('tata-tertib') ? 'active text-white fw-bold' : '' }}" href="/tata-tertib">Tata Tertib</a>
        </div>

    </div>
</nav>

<div class="container mt-4 contetnt-wrapper">
    @yield('content')
</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
