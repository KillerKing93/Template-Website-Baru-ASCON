<?php // File: components/header_pendidikan_nova_uni.php 
?>
<style>
    /* Header Pendidikan Nova Universitas Styles */
    .header-nova-uni {
        padding: 15px 0;
        background-color: transparent;
        /* Awalnya transparan total */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        transition: background-color 0.4s ease, box-shadow 0.4s ease, padding 0.4s ease;
    }

    .header-nova-uni.scrolled {
        padding: 12px 0;
        background-color: rgba(var(--card-bg-light-edu6-rgb, 248, 249, 250), 0.85);
        /* var(--card-bg-light-edu6) dengan alpha */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.07);
    }

    /* Komentar CSS: Variabel RGB untuk warna dasar */
    body {
        --card-bg-light-edu6-rgb: 248, 249, 250;
        --card-bg-dark-edu6-rgb: 30, 30, 30;
        /* var(--card-bg-dark-edu6) */
        --border-light-edu6-rgb: 225, 227, 230;
        --border-dark-edu6-rgb: 51, 51, 51;
    }

    body.dark-mode .header-nova-uni.scrolled {
        background-color: rgba(var(--card-bg-dark-edu6-rgb, 30, 30, 30), 0.85);
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.25);
    }


    .header-nova-uni .container-fluid {
        padding-left: 40px;
        padding-right: 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-nova-uni .navbar-brand-nova {
        font-family: 'Syne', sans-serif;
        font-size: 2.2rem;
        /* Ukuran brand */
        font-weight: 800;
        /* Sangat bold */
        color: var(--primary-nova);
        text-decoration: none;
        transition: color 0.3s ease;
        letter-spacing: -1px;
        /* Sedikit rapat untuk Syne */
    }

    .header-nova-uni .navbar-brand-nova .logo-icon-nova {
        /* Menggunakan ikon Font Awesome dengan efek */
        font-size: 1.9rem;
        /* Ukuran ikon */
        color: var(--secondary-nova);
        margin-right: 10px;
        vertical-align: -3px;
        transition: color 0.3s ease, transform 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        /* Efek elastic */
    }

    .header-nova-uni .navbar-brand-nova:hover .logo-icon-nova {
        transform: rotateY(360deg) scale(1.1);
    }

    body.dark-mode .header-nova-uni .navbar-brand-nova {
        color: var(--primary-nova-dark);
    }

    body.dark-mode .header-nova-uni .navbar-brand-nova .logo-icon-nova {
        color: var(--secondary-nova-dark);
    }

    /* Navigasi Kanan sebagai Panel Mengambang dengan desain artistik */
    .header-nova-uni .nav-panel-nova {
        background-color: rgba(var(--card-bg-light-edu6-rgb, 248, 249, 250), 0.5);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        padding: 6px 8px;
        border-radius: 30px;
        /* Bentuk kapsul/pil yang lebih ekstrim */
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.07);
        border: 1px solid rgba(var(--border-light-edu6-rgb, 225, 227, 230), 0.4);
        transition: background-color 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode .header-nova-uni .nav-panel-nova {
        background-color: rgba(var(--card-bg-dark-edu6-rgb, 30, 30, 30), 0.6);
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.25);
        border-color: rgba(var(--border-dark-edu6-rgb, 51, 51, 51), 0.5);
    }

    .header-nova-uni.scrolled .nav-panel-nova {
        background-color: rgba(var(--card-bg-light-edu6-rgb, 248, 249, 250), 0.85);
    }

    body.dark-mode .header-nova-uni.scrolled .nav-panel-nova {
        background-color: rgba(var(--card-bg-dark-edu6-rgb, 30, 30, 30), 0.9);
    }

    .header-nova-uni .nav-link-nova {
        font-family: 'Syne', sans-serif;
        font-weight: 700;
        /* Link lebih bold */
        font-size: 0.9rem;
        color: var(--text-light-edu6) !important;
        margin: 0 5px;
        padding: 7px 15px !important;
        position: relative;
        transition: color 0.3s ease, background-color 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        border-radius: 25px;
        /* Link juga bulat */
    }

    /* Efek hover: "Liquid fill" atau "Pill shape fill" */
    .header-nova-uni .nav-link-nova:hover,
    .header-nova-uni .nav-link-nova.active {
        color: #fff !important;
        /* Teks putih kontras */
        background-color: var(--accent-nova);
        box-shadow: 0 0 10px rgba(var(--accent-nova-rgb, 0, 188, 212), 0.4);
    }

    /* Komentar CSS: Variabel RGB untuk accent-nova */
    body {
        --accent-nova-rgb: 0, 188, 212;
    }

    body.dark-mode {
        --accent-nova-dark-rgb: 0, 229, 255;
    }

    body.dark-mode .header-nova-uni .nav-link-nova {
        color: var(--text-dark-edu6) !important;
    }

    body.dark-mode .header-nova-uni .nav-link-nova:hover,
    body.dark-mode .header-nova-uni .nav-link-nova.active {
        color: var(--bg-dark-edu6) !important;
        /* Teks kontras dengan background */
        background-color: var(--accent-nova-dark);
        box-shadow: 0 0 10px rgba(var(--accent-nova-dark-rgb, 0, 229, 255), 0.4);
    }

    .header-nova-uni .navbar-toggler-nova {
        border: 1px solid var(--primary-nova);
        padding: .3rem .6rem;
    }

    .header-nova-uni .navbar-toggler-nova .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 64, 129, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-nova-uni .navbar-toggler-nova {
        border-color: var(--primary-nova-dark);
    }

    body.dark-mode .header-nova-uni .navbar-toggler-nova .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(245, 0, 87, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Offcanvas menu untuk mobile */
    .offcanvas-header-nova,
    .offcanvas-body-nova {
        background-color: var(--bg-light-edu6);
        transition: background-color 0.3s ease;
    }

    .offcanvas-header-nova {
        border-bottom: 1px solid var(--border-light-edu6);
    }

    body.dark-mode .offcanvas-header-nova,
    body.dark-mode .offcanvas-body-nova {
        background-color: var(--bg-dark-edu6);
    }

    body.dark-mode .offcanvas-header-nova {
        border-bottom-color: var(--border-dark-edu6);
    }

    .offcanvas-title-nova {
        color: var(--primary-nova);
        font-family: 'Syne', sans-serif;
    }

    body.dark-mode .offcanvas-title-nova {
        color: var(--primary-nova-dark);
    }

    .offcanvas-body-nova .nav-link-nova {
        margin-bottom: 10px;
        display: block;
        text-align: left;
        padding-left: 5px !important;
    }
</style>

<header id="headerNovaUni" class="header-nova-uni">
    <div class="container-fluid">
        <a class="navbar-brand-nova" href="index.php">
            <i class="fas fa-palette logo-icon-nova"></i> <?php /* Komentar PHP: Ikon palet seni */ ?>
            Nova Universitas
        </a>

        <?php /* Komentar PHP: Navigasi Desktop sebagai Panel Mengambang */ ?>
        <nav class="nav-panel-nova d-none d-lg-flex">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link nav-link-nova active" aria-current="page" href="#heroPendidikanNovaUniParallax">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-nova" href="#tentangKamiPendidikanInterdisipliner">Manifesto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-nova" href="#programStudiInovatifNova">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-nova" href="#pusatKolaborasiSeniSains">Kolaborasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-nova" href="#eventPameranKaryaNova">Acara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-nova" href="#kontakPendidikanNovaOsm">Kontak</a>
                </li>
            </ul>
        </nav>

        <?php /* Komentar PHP: Tombol Toggler untuk Mobile */ ?>
        <button class="navbar-toggler navbar-toggler-nova d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarNovaUni" aria-controls="offcanvasNavbarNovaUni" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php /* Komentar PHP: Offcanvas untuk Navigasi Mobile */ ?>
        <div class="offcanvas offcanvas-end offcanvas-header-nova" tabindex="-1" id="offcanvasNavbarNovaUni" aria-labelledby="offcanvasNavbarNovaUniLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title offcanvas-title-nova" id="offcanvasNavbarNovaUniLabel">Menu Nova Uni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-nova">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-nova active" aria-current="page" href="#heroPendidikanNovaUniParallax" data-bs-dismiss="offcanvas">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-nova" href="#tentangKamiPendidikanInterdisipliner" data-bs-dismiss="offcanvas">Manifesto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-nova" href="#programStudiInovatifNova" data-bs-dismiss="offcanvas">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-nova" href="#pusatKolaborasiSeniSains" data-bs-dismiss="offcanvas">Kolaborasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-nova" href="#eventPameranKaryaNova" data-bs-dismiss="offcanvas">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-nova" href="#profilDosenPenelitiNova" data-bs-dismiss="offcanvas">Pengajar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-nova" href="#kontakPendidikanNovaOsm" data-bs-dismiss="offcanvas">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header Nova Universitas
        const headerNovaUni = document.getElementById('headerNovaUni');
        const navLinksNovaUni = document.querySelectorAll('.nav-link-nova');
        const sectionsNovaUni = document.querySelectorAll('section[id]');

        // Komentar JavaScript: Efek header saat scroll
        if (headerNovaUni) {
            const headerScrollEffectNovaUni = () => {
                if (window.scrollY > 30) {
                    headerNovaUni.classList.add('scrolled');
                } else {
                    headerNovaUni.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScrollEffectNovaUni);
            document.addEventListener('scroll', headerScrollEffectNovaUni);
        }

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkNovaUni() {
            let currentSectionId = '';
            const headerHeight = (headerNovaUni ? headerNovaUni.offsetHeight : 70) + (headerNovaUni && headerNovaUni.classList.contains('scrolled') ? 0 : 15);
            const scrollPosition = window.pageYOffset + headerHeight + 70;

            sectionsNovaUni.forEach(section => {
                if (section && typeof section.offsetTop !== 'undefined' && section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksNovaUni.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkNovaUni);
        window.addEventListener('load', updateActiveNavLinkNovaUni);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        navLinksNovaUni.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerNovaUni ? headerNovaUni.offsetHeight : 70) + (headerNovaUni && headerNovaUni.classList.contains('scrolled') ? 0 : 15);
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const offcanvasElement = document.getElementById('offcanvasNavbarNovaUni');
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