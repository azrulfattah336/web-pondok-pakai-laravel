<!DOCTYPE html>
    <html>
        <head>
            <title>Pondok Pesantren</title>

                <!-- BOOTSTRAP CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

                  <style>
                 .btn-success {
                  background-color: #9b59b6 !important;
                  border-color: #9b59b6 !important;
                  color: #fff;
                  }
                 .btn-success:hover {
                  background-color: #8e44ad !important;
                  border-color: #8e44ad !important;
                  }

                 .navbar {
                  background-color: #111111 !important; 
                  padding-top: 0.5rem;
                  padding-bottom: 0.5rem;
                  }

                 .navbar .navbar-brand,
                 .navbar .nav-link {
                  color: #fff;
                  transition: color 0.3s;
                  }

       
                 .navbar .nav-link:hover,
                 .navbar .nav-link.active {
                  color: #9b59b6 !important; /* ungu */
                  }
                  body {
                  background: url('/images/bg-islami.jpg') no-repeat center center fixed; /* path gambar */
                  background-size: cover; /* biar penuh */
                  color: #fff;
                  min-height: 100vh;
                  font-family: Arial, sans-serif;
                  padding-top: 70px; /* untuk fixed navbar */
                  }


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
        .card {
    background-color: rgba(44,44,44,0.85); /* gelap tapi transparan */
    border: 1px solid #555;
    color: #fff;
}

        /* Card tambahan */
        .card {
            cursor: pointer; /* supaya hover zoom terasa */
        }

        /* Semua list di dalam card */
.card ul,
.card ol {
    background-color: transparent !important; /* jangan putih */
    padding-left: 20px; /* jarak bullet */
    margin-bottom: 0; 
}

.card ul li,
.card ol li {
    color: #fff !important; /* teks putih */
    background-color: transparent !important; /* pastikan bullet tidak tertutup putih */
    margin-bottom: 5px;
}
/* Form input dark mode */
.card input.form-control,
.card textarea.form-control,
.card select.form-control {
    background-color: #2c2c2c !important; /* gelap */
    color: #fff !important; /* teks putih */
    border: 1px solid #555 !important; /* border gelap tapi terlihat */
}

/* Placeholder putih supaya terbaca */
.card input.form-control::placeholder,
.card textarea.form-control::placeholder {
    color: #ccc !important;
}

/* Focus input */
.card input.form-control:focus,
.card textarea.form-control:focus,
.card select.form-control:focus {
    background-color: #2c2c2c !important;
    color: #fff !important;
    border-color: #9b59b6 !important; /* ungu saat fokus */
    box-shadow: 0 0 0 0.2rem rgba(155,89,182,0.25); /* glow ungu */
}



        /* Overlay supaya teks terbaca jika background terlalu gelap */
        .container {
            border-radius: 10px;
            padding: 3px;
        }
        .table {
    background-color: rgba(44,44,44,0.85); /* gelap transparan */
    color: #fff; /* teks putih */
    border-color: #555;
}

/* Table header */
.table thead th {
    background-color: #2c2c2c !important; /* gelap header */
    color: #fff !important; /* teks putih */
}

/* Table body */
.table tbody td {
    background-color: #2c2c2c !important; /* gelap tiap baris */
    color: #fff !important;
}

/* Table border */
.table-bordered th,
.table-bordered td {
    border: 1px solid #555 !important;
}
html, body {
    height: 100%;   /* Body mengisi seluruh tinggi viewport */
    margin: 0;      /* Hilangkan margin default browser */
}
body {
    display: flex;          /* Aktifkan Flexbox */
    flex-direction: column; /* Susun vertikal: navbar -> main -> footer */
}
main {
    flex: 1;  /* Konten mengambil ruang tersisa */
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

<body>

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

<main class="container mt-4 flex-grow-1">
    @yield('content')
</main>

<footer class="bg-dark text-white d-flex align-items-center" style="height: 56px;">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <small>Alamat: Pondok Pesantren AL-FATTAH | Email: info@alfattah.com | Telp: +62 812 3456 7890</small>
            </div>
            <div class="d-none d-md-block">
                <small>&copy; 2026 Pondok Pesantren AL-FATTAH</small>
            </div>
        </div>
    </footer>
</body>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
