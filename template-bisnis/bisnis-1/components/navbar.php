<?php // File: components/navbar.php 
?>
<style>
    /* Navbar Component Styles */
    .navbar-component .navbar-brand-logo {
        font-weight: 700;
        font-size: 1.9rem;
        color: #0056b3 !important;
        /* Warna biru lebih gelap untuk kontras */
    }

    .navbar-component .navbar-brand-logo i {
        margin-right: 10px;
        color: #0d6efd;
        /* Warna ikon */
    }

    .navbar-component .nav-link {
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .navbar-component .nav-link:hover,
    .navbar-component .nav-link.active {
        color: #007bff !important;
    }

    .navbar-component.shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .065) !important;
        /* Bayangan lebih lembut */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top navbar-component">
    <div class="container">
        <a class="navbar-brand navbar-brand-logo" href="#">
            <i class="fas fa-building-columns"></i> NamaBisnis Anda
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavMain" aria-controls="navbarNavMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavMain">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#layanan">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    // Navbar component specific JS (if any)
    // Example: Active link highlighting based on scroll (can be complex, Bootstrap handles basic cases)
    // For now, Bootstrap's default behavior is sufficient.
</script>