<?php // File: components/header_pertanian.php 
?>
<style>
    /* Header Pertanian Styles */
    .header-pertanian {
        padding: 15px 0;
        background-color: rgba(255, 255, 255, 0.9);
        /* Putih semi-transparan */
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        position: sticky;
        top: 0;
        z-index: 1020;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode .header-pertanian {
        background-color: rgba(var(--card-bg-dark-rgb, 62, 82, 62), 0.9);
        /* var(--card-bg-dark) dengan alpha */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
    }

    /* Komentar CSS: Variabel RGB untuk dark mode card, jika tidak didefinisikan di root */
    body.dark-mode {
        --card-bg-dark-rgb: 62, 82, 62;
    }


    .header-pertanian .navbar-brand-pertanian {
        font-family: 'Merriweather', serif;
        font-size: 1.9rem;
        font-weight: 700;
        color: var(--primary-farm);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .header-pertanian .navbar-brand-pertanian i {
        /* Ikon logo */
        margin-right: 10px;
        color: var(--secondary-farm);
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .header-pertanian .navbar-brand-pertanian:hover i {
        transform: rotate(10deg);
    }

    body.dark-mode .header-pertanian .navbar-brand-pertanian {
        color: var(--primary-farm-dark);
    }

    body.dark-mode .header-pertanian .navbar-brand-pertanian i {
        color: var(--secondary-farm-dark);
    }

    .header-pertanian .nav-link-pertanian {
        font-family: 'Open Sans', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        color: var(--text-light) !important;
        margin: 0 10px;
        padding: 8px 5px !important;
        position: relative;
        transition: color 0.3s ease;
    }

    .header-pertanian .nav-link-pertanian::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--primary-farm);
        transition: width 0.3s ease;
    }

    .header-pertanian .nav-link-pertanian:hover::after,
    .header-pertanian .nav-link-pertanian.active::after {
        width: 70%;
    }

    .header-pertanian .nav-link-pertanian:hover,
    .header-pertanian .nav-link-pertanian.active {
        color: var(--primary-farm) !important;
    }

    body.dark-mode .header-pertanian .nav-link-pertanian {
        color: var(--text-dark) !important;
    }

    body.dark-mode .header-pertanian .nav-link-pertanian::after {
        background-color: var(--primary-farm-dark);
    }

    body.dark-mode .header-pertanian .nav-link-pertanian:hover,
    body.dark-mode .header-pertanian .nav-link-pertanian.active {
        color: var(--primary-farm-dark) !important;
    }

    .header-pertanian .navbar-toggler-pertanian {
        border-color: rgba(var(--primary-farm-rgb, 90, 139, 65), 0.3);
        /* var(--primary-farm) dengan alpha */
    }

    /* Komentar CSS: Variabel RGB untuk primary-farm, jika tidak didefinisikan di root */
    body {
        --primary-farm-rgb: 90, 139, 65;
    }

    body.dark-mode {
        --primary-farm-dark-rgb: 124, 179, 66;
    }

    .header-pertanian .navbar-toggler-pertanian .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(90, 139, 65, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-pertanian .navbar-toggler-pertanian {
        border-color: rgba(var(--primary-farm-dark-rgb, 124, 179, 66), 0.4);
    }

    body.dark-mode .header-pertanian .navbar-toggler-pertanian .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(124, 179, 66, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
</style>

<header id="headerPertanian" class="header-pertanian">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
            <a class="navbar-brand-pertanian" href="index.php">
                <i class="fas fa-tractor"></i> <?php /* Atau fas fa-seedling, fas fa-leaf */ ?>
                NamaPertanian
            </a>
            <button class="navbar-toggler navbar-toggler-pertanian" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavPertanian" aria-controls="navbarNavPertanian" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavPertanian">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-pertanian active" aria-current="page" href="#heroPertanian">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pertanian" href="#tentangKamiPertanian">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pertanian" href="#produkUnggulanPertanian">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pertanian" href="#galeriPertanian">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pertanian" href="#beritaArtikelPertanian">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pertanian" href="#kontakPertanianOsm">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header pertanian
        const headerPertanian = document.getElementById('headerPertanian');
        const navLinksPertanian = document.querySelectorAll('#headerPertanian .nav-link-pertanian');
        const sectionsPertanian = document.querySelectorAll('section[id]'); // Asumsi semua section target punya ID

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkPertanian() {
            let currentSectionId = '';
            const scrollPosition = window.pageYOffset + (headerPertanian ? headerPertanian.offsetHeight : 70) + 50;

            sectionsPertanian.forEach(section => {
                if (section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksPertanian.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        // Komentar JavaScript: Panggil saat scroll dan load
        window.addEventListener('scroll', updateActiveNavLinkPertanian);
        window.addEventListener('load', updateActiveNavLinkPertanian);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        navLinksPertanian.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerPertanian ? headerPertanian.offsetHeight : 70) + 10;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        // Komentar JavaScript: Tutup navbar mobile jika terbuka
                        const navbarCollapse = document.getElementById('navbarNavPertanian');
                        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                            new bootstrap.Collapse(navbarCollapse).hide();
                        }
                    }
                }
            });
        });
    });
</script>