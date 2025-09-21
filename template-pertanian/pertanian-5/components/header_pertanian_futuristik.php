<?php // File: components/header_pertanian_futuristik.php 
?>
<style>
    /* Header Pertanian Futuristik Styles */
    .header-futuristik-farm {
        padding: 15px 0;
        background-color: rgba(var(--bg-light-farm5-rgb, 253, 252, 251), 0.1);
        /* Sangat transparan */
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        position: fixed;
        top: 20px;
        /* Beri jarak dari atas */
        left: 50%;
        transform: translateX(-50%);
        width: calc(100% - 80px);
        /* Lebar header tidak full, dengan margin */
        max-width: 1320px;
        /* Batas lebar maksimum */
        z-index: 1030;
        border-radius: 10px;
        /* Sudut header membulat */
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(var(--border-light-farm5-rgb, 221, 230, 237), 0.3);
        transition: background-color 0.4s ease, box-shadow 0.4s ease, top 0.4s ease, width 0.4s ease;
    }

    .header-futuristik-farm.scrolled {
        top: 0;
        /* Menempel ke atas saat scroll */
        width: 100%;
        max-width: 100%;
        border-radius: 0;
        background-color: rgba(var(--bg-light-farm5-rgb, 253, 252, 251), 0.9);
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
    }

    /* Komentar CSS: Variabel RGB untuk warna dasar */
    body {
        --bg-light-farm5-rgb: 253, 252, 251;
        --border-light-farm5-rgb: 221, 230, 237;
        --bg-dark-farm5-rgb: 15, 23, 42;
        --border-dark-farm5-rgb: 51, 65, 85;
    }

    body.dark-mode .header-futuristik-farm {
        background-color: rgba(var(--bg-dark-farm5-rgb, 15, 23, 42), 0.2);
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        border-color: rgba(var(--border-dark-farm5-rgb, 51, 65, 85), 0.4);
    }

    body.dark-mode .header-futuristik-farm.scrolled {
        background-color: rgba(var(--bg-dark-farm5-rgb, 15, 23, 42), 0.9);
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.3);
    }


    .header-futuristik-farm .container-header-custom {
        /* Kontainer custom di dalam header */
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 0 15px;
        /* Padding internal */
    }

    .header-futuristik-farm .navbar-brand-futura {
        font-family: 'Exo 2', sans-serif;
        font-size: 2rem;
        /* Ukuran brand */
        font-weight: 800;
        color: var(--primary-futura-farm);
        text-decoration: none;
        transition: color 0.3s ease;
        letter-spacing: 1px;
    }

    .header-futuristik-farm .navbar-brand-futura .logo-icon-futura {
        /* Bisa menggunakan SVG atau Font Awesome dengan style unik */
        display: inline-block;
        width: 32px;
        height: 32px;
        background-color: var(--secondary-futura-farm);
        border-radius: 50%;
        margin-right: 10px;
        vertical-align: -4px;
        transition: background-color 0.3s ease, transform 0.4s ease;
        /* Contoh: Placeholder untuk ikon SVG atau FA */
        text-align: center;
        line-height: 32px;
        color: var(--bg-light-farm5);
        font-size: 1.2rem;
    }

    .header-futuristik-farm .navbar-brand-futura:hover .logo-icon-futura {
        transform: rotateY(180deg);
        /* Efek flip ikon */
    }

    body.dark-mode .header-futuristik-farm .navbar-brand-futura {
        color: var(--primary-futura-farm-dark);
    }

    body.dark-mode .header-futuristik-farm .navbar-brand-futura .logo-icon-futura {
        background-color: var(--secondary-futura-farm-dark);
        color: var(--bg-dark-farm5);
    }

    /* Navigasi Kanan sebagai Floating Panel */
    .header-futuristik-farm .nav-panel-futura {
        background-color: rgba(var(--card-bg-light-farm5-rgb, 255, 255, 255), 0.5);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        padding: 8px 10px;
        /* Padding panel */
        border-radius: 8px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.07);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode .header-futuristik-farm .nav-panel-futura {
        background-color: rgba(var(--card-bg-dark-farm5-rgb, 30, 41, 59), 0.6);
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2);
    }

    .header-futuristik-farm.scrolled .nav-panel-futura {
        background-color: rgba(var(--card-bg-light-farm5-rgb, 255, 255, 255), 0.8);
    }

    body.dark-mode .header-futuristik-farm.scrolled .nav-panel-futura {
        background-color: rgba(var(--card-bg-dark-farm5-rgb, 30, 41, 59), 0.85);
    }


    .header-futuristik-farm .nav-link-futura {
        font-family: 'Exo 2', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
        /* Ukuran link sedikit lebih kecil */
        color: var(--text-light-farm5) !important;
        margin: 0 8px;
        /* Jarak antar link */
        padding: 6px 12px !important;
        position: relative;
        transition: color 0.3s ease, background-color 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        border-radius: 5px;
        /* Sudut link membulat */
    }

    /* Efek hover unik: "Glitchy" border atau background fill */
    .header-futuristik-farm .nav-link-futura:hover,
    .header-futuristik-farm .nav-link-futura.active {
        color: #fff !important;
        background-color: var(--primary-futura-farm);
        text-shadow: 0 0 5px rgba(0, 168, 150, 0.5);
        /* var(--primary-futura-farm) */
    }

    body.dark-mode .header-futuristik-farm .nav-link-futura {
        color: var(--text-dark-farm5) !important;
    }

    body.dark-mode .header-futuristik-farm .nav-link-futura:hover,
    body.dark-mode .header-futuristik-farm .nav-link-futura.active {
        color: var(--bg-dark-farm5) !important;
        /* Teks kontras dengan background */
        background-color: var(--primary-futura-farm-dark);
        text-shadow: 0 0 5px rgba(0, 203, 169, 0.5);
        /* var(--primary-futura-farm-dark) */
    }

    .header-futuristik-farm .navbar-toggler-futura {
        border: 1px solid var(--primary-futura-farm);
        padding: .3rem .6rem;
        margin-left: 15px;
        /* Jarak dari nav panel jika ada */
    }

    .header-futuristik-farm .navbar-toggler-futura .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 168, 150, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-futuristik-farm .navbar-toggler-futura {
        border-color: var(--primary-futura-farm-dark);
    }

    body.dark-mode .header-futuristik-farm .navbar-toggler-futura .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 203, 169, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Offcanvas menu untuk mobile */
    .offcanvas-header-futura,
    .offcanvas-body-futura {
        background-color: var(--bg-light-farm5);
        transition: background-color 0.3s ease;
    }

    .offcanvas-header-futura {
        border-bottom: 1px solid var(--border-light-farm5);
    }

    body.dark-mode .offcanvas-header-futura,
    body.dark-mode .offcanvas-body-futura {
        background-color: var(--bg-dark-farm5);
    }

    body.dark-mode .offcanvas-header-futura {
        border-bottom-color: var(--border-dark-farm5);
    }

    .offcanvas-title-futura {
        color: var(--primary-futura-farm);
        font-family: 'Exo 2', sans-serif;
    }

    body.dark-mode .offcanvas-title-futura {
        color: var(--primary-futura-farm-dark);
    }
</style>

<header id="headerFuturistikFarm" class="header-futuristik-farm">
    <div class="container-header-custom">
        <a class="navbar-brand-futura" href="index.php">
            <span class="logo-icon-futura"><i class="fas fa-atom"></i></span> <?php /* Komentar PHP: Ganti dengan ikon yang sesuai */ ?>
            AgroFutura
        </a>

        <?php /* Komentar PHP: Navigasi Desktop sebagai Panel Mengambang */ ?>
        <nav class="nav-panel-futura d-none d-lg-block">
            <ul class="navbar-nav flex-row"> <?php /* flex-row untuk display horizontal */ ?>
                <li class="nav-item">
                    <a class="nav-link nav-link-futura active" aria-current="page" href="#heroPertanianFuturistikAnim">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-futura" href="#tentangKamiPertanianTeknologi">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-futura" href="#solusiAgritechPertanian">Solusi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-futura" href="#inovasiRisetPertanian">Inovasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-futura" href="#kontakPertanianFuturistikOsm">Kontak</a>
                </li>
            </ul>
        </nav>

        <?php /* Komentar PHP: Tombol Toggler untuk Mobile */ ?>
        <button class="navbar-toggler navbar-toggler-futura d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFutura" aria-controls="offcanvasNavbarFutura" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php /* Komentar PHP: Offcanvas untuk Navigasi Mobile */ ?>
        <div class="offcanvas offcanvas-end offcanvas-header-futura" tabindex="-1" id="offcanvasNavbarFutura" aria-labelledby="offcanvasNavbarFuturaLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title offcanvas-title-futura" id="offcanvasNavbarFuturaLabel">Menu AgroFutura</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-futura">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-futura active" aria-current="page" href="#heroPertanianFuturistikAnim" data-bs-dismiss="offcanvas">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-futura" href="#tentangKamiPertanianTeknologi" data-bs-dismiss="offcanvas">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-futura" href="#solusiAgritechPertanian" data-bs-dismiss="offcanvas">Solusi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-futura" href="#inovasiRisetPertanian" data-bs-dismiss="offcanvas">Inovasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-futura" href="#kontakPertanianFuturistikOsm" data-bs-dismiss="offcanvas">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header pertanian futuristik
        const headerFuturistik = document.getElementById('headerFuturistikFarm');
        const navLinksFutura = document.querySelectorAll('.nav-link-futura'); // Target semua link navigasi
        const sectionsFutura = document.querySelectorAll('section[id]');

        // Komentar JavaScript: Efek header saat scroll
        if (headerFuturistik) {
            const headerScrollEffectFutura = () => {
                if (window.scrollY > 50) {
                    headerFuturistik.classList.add('scrolled');
                } else {
                    headerFuturistik.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScrollEffectFutura);
            document.addEventListener('scroll', headerScrollEffectFutura);
        }

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkFutura() {
            let currentSectionId = '';
            const headerHeight = (headerFuturistik && headerFuturistik.classList.contains('scrolled')) ? headerFuturistik.offsetHeight : (headerFuturistik ? headerFuturistik.offsetHeight + 20 : 90); // Perhitungkan top saat tidak scrolled
            const scrollPosition = window.pageYOffset + headerHeight + 70; // Penyesuaian offset

            sectionsFutura.forEach(section => {
                if (section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksFutura.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkFutura);
        window.addEventListener('load', updateActiveNavLinkFutura);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        navLinksFutura.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerFuturistik && headerFuturistik.classList.contains('scrolled')) ? headerFuturistik.offsetHeight : (headerFuturistik ? headerFuturistik.offsetHeight + 20 : 90);
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        // Komentar JavaScript: Tutup offcanvas jika link di offcanvas diklik
                        const offcanvasElement = document.getElementById('offcanvasNavbarFutura');
                        if (offcanvasElement && link.closest('.offcanvas')) {
                            const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
                            if (offcanvas && offcanvasElement.classList.contains('show')) {
                                offcanvas.hide();
                            }
                        }
                    }
                }
            });
        });
    });
</script>