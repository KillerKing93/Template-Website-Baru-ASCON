<?php // File: components/header_pertanian_modern.php 
?>
<style>
    /* Header Pertanian Modern Styles */
    .header-pertanian-modern {
        padding: 18px 0;
        /* Padding sedikit lebih besar */
        background-color: rgba(253, 252, 251, 0.85);
        /* var(--bg-light-farm2) dengan alpha */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.07);
        position: fixed;
        /* Header fixed */
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        /* Di atas konten lain */
        transition: background-color 0.3s ease, box-shadow 0.3s ease, padding 0.3s ease;
    }

    .header-pertanian-modern.scrolled {
        padding: 12px 0;
        background-color: rgba(253, 252, 251, 0.98);
        /* Lebih solid saat scroll */
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
    }

    body.dark-mode .header-pertanian-modern {
        background-color: rgba(27, 38, 44, 0.85);
        /* var(--bg-dark-farm2) dengan alpha */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    body.dark-mode .header-pertanian-modern.scrolled {
        background-color: rgba(27, 38, 44, 0.98);
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.4);
    }

    .header-pertanian-modern .navbar-brand-modern-farm {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.7rem;
        /* Ukuran brand disesuaikan */
        font-weight: 800;
        /* Sangat bold */
        color: var(--primary-modern-farm);
        text-decoration: none;
        transition: color 0.3s ease;
        letter-spacing: 0.5px;
    }

    .header-pertanian-modern .navbar-brand-modern-farm i {
        /* Ikon logo */
        margin-right: 8px;
        color: var(--secondary-modern-farm);
        transition: color 0.3s ease, transform 0.4s ease;
    }

    .header-pertanian-modern .navbar-brand-modern-farm:hover i {
        transform: rotateZ(360deg) scale(1.1);
        /* Ikon berputar saat hover */
    }

    body.dark-mode .header-pertanian-modern .navbar-brand-modern-farm {
        color: var(--primary-modern-farm-dark);
    }

    body.dark-mode .header-pertanian-modern .navbar-brand-modern-farm i {
        color: var(--secondary-modern-farm-dark);
    }

    .header-pertanian-modern .nav-link-modern-farm {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        /* Teks nav lebih bold */
        font-size: 0.95rem;
        color: var(--text-light-farm2) !important;
        margin: 0 12px;
        padding: 8px 0 !important;
        position: relative;
        transition: color 0.3s ease;
        text-transform: uppercase;
        /* Nav uppercase */
        letter-spacing: 0.5px;
    }

    .header-pertanian-modern .nav-link-modern-farm::before {
        /* Efek garis atas */
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--secondary-modern-farm);
        transition: width 0.3s ease;
    }

    .header-pertanian-modern .nav-link-modern-farm::after {
        /* Efek garis bawah */
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--primary-modern-farm);
        transition: width 0.3s ease 0.1s;
        /* Delay untuk garis bawah */
    }

    .header-pertanian-modern .nav-link-modern-farm:hover::before,
    .header-pertanian-modern .nav-link-modern-farm.active::before {
        width: 30%;
        /* Garis atas lebih pendek */
    }

    .header-pertanian-modern .nav-link-modern-farm:hover::after,
    .header-pertanian-modern .nav-link-modern-farm.active::after {
        width: 80%;
        /* Garis bawah lebih panjang */
    }

    .header-pertanian-modern .nav-link-modern-farm:hover,
    .header-pertanian-modern .nav-link-modern-farm.active {
        color: var(--primary-modern-farm) !important;
    }

    body.dark-mode .header-pertanian-modern .nav-link-modern-farm {
        color: var(--text-dark-farm2) !important;
    }

    body.dark-mode .header-pertanian-modern .nav-link-modern-farm::before {
        background-color: var(--secondary-modern-farm-dark);
    }

    body.dark-mode .header-pertanian-modern .nav-link-modern-farm::after {
        background-color: var(--primary-modern-farm-dark);
    }

    body.dark-mode .header-pertanian-modern .nav-link-modern-farm:hover,
    body.dark-mode .header-pertanian-modern .nav-link-modern-farm.active {
        color: var(--primary-modern-farm-dark) !important;
    }

    .header-pertanian-modern .navbar-toggler-modern-farm {
        border-color: rgba(46, 125, 50, 0.4);
        /* var(--primary-modern-farm) dengan alpha */
        padding: .35rem .65rem;
        /* Padding toggler */
    }

    .header-pertanian-modern .navbar-toggler-modern-farm .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(46, 125, 50, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-pertanian-modern .navbar-toggler-modern-farm {
        border-color: rgba(102, 187, 106, 0.5);
        /* var(--primary-modern-farm-dark) dengan alpha */
    }

    body.dark-mode .header-pertanian-modern .navbar-toggler-modern-farm .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(102, 187, 106, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .header-pertanian-modern .btn-konsultasi-nav {
        margin-left: 20px;
        padding: 8px 20px;
        font-size: 0.85rem;
    }
</style>

<header id="headerPertanianModern" class="header-pertanian-modern">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
            <a class="navbar-brand-modern-farm" href="index.php">
                <i class="fas fa-seedling"></i> <?php /* Atau fas fa-tractor, fas fa-leaf */ ?>
                AgroModern
            </a>
            <button class="navbar-toggler navbar-toggler-modern-farm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavPertanianModern" aria-controls="navbarNavPertanianModern" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavPertanianModern">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link nav-link-modern-farm active" aria-current="page" href="#heroPertanianDinamis">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-modern-farm" href="#tentangKamiPertanianDetail">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-modern-farm" href="#layananAgroteknologiPertanian">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-modern-farm" href="#produkKatalogPertanian">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-modern-farm" href="#testimoniPetaniMitra">Mitra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-modern-farm" href="#kontakPertanianInteraktifOsm">Kontak</a>
                    </li>
                    <li class="nav-item d-none d-lg-block"> <?php /* Tombol hanya tampil di desktop */ ?>
                        <a href="#kontakPertanianInteraktifOsm" class="btn-farm-modern-primary btn-konsultasi-nav">Konsultasi Gratis</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header pertanian modern
        const headerModern = document.getElementById('headerPertanianModern');
        const navLinksModern = document.querySelectorAll('#headerPertanianModern .nav-link-modern-farm');
        const sectionsModern = document.querySelectorAll('section[id]');

        // Komentar JavaScript: Efek header saat scroll
        if (headerModern) {
            const headerScrollEffectModern = () => {
                if (window.scrollY > 50) {
                    headerModern.classList.add('scrolled');
                } else {
                    headerModern.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScrollEffectModern);
            document.addEventListener('scroll', headerScrollEffectModern);
        }

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkModern() {
            let currentSectionId = '';
            const scrollPosition = window.pageYOffset + (headerModern ? headerModern.offsetHeight : 70) + 60; // Offset lebih besar

            sectionsModern.forEach(section => {
                if (section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksModern.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkModern);
        window.addEventListener('load', updateActiveNavLinkModern);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        navLinksModern.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerModern ? headerModern.offsetHeight : 70) + 5;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const navbarCollapse = document.getElementById('navbarNavPertanianModern');
                        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                            new bootstrap.Collapse(navbarCollapse).hide();
                        }
                    }
                }
            });
        });
    });
</script>