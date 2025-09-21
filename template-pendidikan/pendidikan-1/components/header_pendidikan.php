<?php // File: components/header_pendidikan.php 
?>
<style>
    /* Header Pendidikan Styles */
    .header-pendidikan {
        padding: 18px 0;
        background-color: rgba(var(--card-bg-light-edu1-rgb, 255, 255, 255), 0.85);
        /* var(--card-bg-light-edu1) dengan alpha */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        position: fixed;
        /* Header fixed */
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        transition: background-color 0.3s ease, box-shadow 0.3s ease, padding 0.3s ease;
    }

    .header-pendidikan.scrolled {
        padding: 12px 0;
        background-color: rgba(var(--card-bg-light-edu1-rgb, 255, 255, 255), 0.98);
        /* Lebih solid saat scroll */
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.09);
    }

    /* Komentar CSS: Variabel RGB untuk warna dasar */
    body {
        --card-bg-light-edu1-rgb: 255, 255, 255;
        --card-bg-dark-edu1-rgb: 52, 73, 94;
        /* var(--card-bg-dark-edu1) */
        --bg-dark-edu1-rgb: 44, 62, 80;
        /* var(--bg-dark-edu1) */
    }

    body.dark-mode .header-pendidikan {
        background-color: rgba(var(--card-bg-dark-edu1-rgb, 52, 73, 94), 0.85);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.25);
    }

    body.dark-mode .header-pendidikan.scrolled {
        background-color: rgba(var(--card-bg-dark-edu1-rgb, 52, 73, 94), 0.98);
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.35);
    }

    .header-pendidikan .container-fluid {
        padding-left: 35px;
        padding-right: 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-pendidikan .navbar-brand-pendidikan {
        font-family: 'Poppins', sans-serif;
        font-size: 1.9rem;
        /* Ukuran brand */
        font-weight: 800;
        /* Sangat bold */
        color: var(--primary-edu1);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .header-pendidikan .navbar-brand-pendidikan i {
        /* Ikon logo */
        margin-right: 10px;
        color: var(--secondary-edu1);
        transition: color 0.3s ease, transform 0.4s ease;
    }

    .header-pendidikan .navbar-brand-pendidikan:hover i {
        transform: rotate(10deg) scale(1.1);
    }

    body.dark-mode .header-pendidikan .navbar-brand-pendidikan {
        color: var(--primary-edu1-dark);
    }

    body.dark-mode .header-pendidikan .navbar-brand-pendidikan i {
        color: var(--secondary-edu1-dark);
    }

    /* Navigasi Kanan sebagai Panel Mengambang */
    .header-pendidikan .nav-panel-pendidikan {
        background-color: rgba(var(--card-bg-light-edu1-rgb, 255, 255, 255), 0.6);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        padding: 8px 10px;
        /* Padding panel */
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.07);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode .header-pendidikan .nav-panel-pendidikan {
        background-color: rgba(var(--card-bg-dark-edu1-rgb, 52, 73, 94), 0.7);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .header-pendidikan.scrolled .nav-panel-pendidikan {
        background-color: rgba(var(--card-bg-light-edu1-rgb, 255, 255, 255), 0.9);
    }

    body.dark-mode .header-pendidikan.scrolled .nav-panel-pendidikan {
        background-color: rgba(var(--card-bg-dark-edu1-rgb, 52, 73, 94), 0.9);
    }

    .header-pendidikan .nav-link-pendidikan {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        /* Teks nav tidak terlalu bold */
        font-size: 0.95rem;
        color: var(--text-light-edu1) !important;
        margin: 0 8px;
        padding: 7px 14px !important;
        position: relative;
        transition: color 0.3s ease, background-color 0.3s ease;
        text-transform: capitalize;
        /* Tidak uppercase */
        border-radius: 6px;
    }

    /* Efek hover: Latar belakang halus dengan warna aksen */
    .header-pendidikan .nav-link-pendidikan:hover,
    .header-pendidikan .nav-link-pendidikan.active {
        color: #fff !important;
        /* Teks putih kontras */
        background-color: var(--primary-edu1);
    }

    body.dark-mode .header-pendidikan .nav-link-pendidikan {
        color: var(--text-dark-edu1) !important;
    }

    body.dark-mode .header-pendidikan .nav-link-pendidikan:hover,
    body.dark-mode .header-pendidikan .nav-link-pendidikan.active {
        color: var(--bg-dark-edu1) !important;
        /* Teks kontras dengan background */
        background-color: var(--primary-edu1-dark);
    }

    .header-pendidikan .navbar-toggler-pendidikan {
        border: 1px solid var(--primary-edu1);
        padding: .3rem .6rem;
    }

    .header-pendidikan .navbar-toggler-pendidikan .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(52, 152, 219, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-pendidikan .navbar-toggler-pendidikan {
        border-color: var(--primary-edu1-dark);
    }

    body.dark-mode .header-pendidikan .navbar-toggler-pendidikan .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(93, 173, 226, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Offcanvas menu untuk mobile */
    .offcanvas-header-pendidikan,
    .offcanvas-body-pendidikan {
        background-color: var(--bg-light-edu1);
        transition: background-color 0.3s ease;
    }

    .offcanvas-header-pendidikan {
        border-bottom: 1px solid var(--border-light-edu1);
    }

    body.dark-mode .offcanvas-header-pendidikan,
    body.dark-mode .offcanvas-body-pendidikan {
        background-color: var(--bg-dark-edu1);
    }

    body.dark-mode .offcanvas-header-pendidikan {
        border-bottom-color: var(--border-dark-edu1);
    }

    .offcanvas-title-pendidikan {
        color: var(--primary-edu1);
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
    }

    body.dark-mode .offcanvas-title-pendidikan {
        color: var(--primary-edu1-dark);
    }

    .offcanvas-body-pendidikan .nav-link-pendidikan {
        margin-bottom: 10px;
        display: block;
        text-align: left;
        padding-left: 5px !important;
    }
</style>

<header id="headerPendidikan" class="header-pendidikan">
    <div class="container-fluid">
        <a class="navbar-brand-pendidikan" href="index.php">
            <i class="fas fa-university"></i> <?php /* Atau fas fa-graduation-cap, fas fa-book-open */ ?>
            NamaInstitusi
        </a>

        <?php /* Komentar PHP: Navigasi Desktop sebagai Panel Mengambang */ ?>
        <nav class="nav-panel-pendidikan d-none d-lg-flex">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link nav-link-pendidikan active" aria-current="page" href="#heroPendidikanInspiratif">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-pendidikan" href="#tentangKamiPendidikanVisi">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-pendidikan" href="#programUnggulanPendidikan">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-pendidikan" href="#fasilitasPendidikanModern">Fasilitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-pendidikan" href="#beritaAcaraPendidikan">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-pendidikan" href="#kontakPendidikanOsm">Kontak</a>
                </li>
            </ul>
        </nav>

        <?php /* Komentar PHP: Tombol Toggler untuk Mobile */ ?>
        <button class="navbar-toggler navbar-toggler-pendidikan d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarPendidikan" aria-controls="offcanvasNavbarPendidikan" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php /* Komentar PHP: Offcanvas untuk Navigasi Mobile */ ?>
        <div class="offcanvas offcanvas-end offcanvas-header-pendidikan" tabindex="-1" id="offcanvasNavbarPendidikan" aria-labelledby="offcanvasNavbarPendidikanLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title offcanvas-title-pendidikan" id="offcanvasNavbarPendidikanLabel">Menu Navigasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-pendidikan">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-pendidikan active" aria-current="page" href="#heroPendidikanInspiratif" data-bs-dismiss="offcanvas">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pendidikan" href="#tentangKamiPendidikanVisi" data-bs-dismiss="offcanvas">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pendidikan" href="#programUnggulanPendidikan" data-bs-dismiss="offcanvas">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pendidikan" href="#fasilitasPendidikanModern" data-bs-dismiss="offcanvas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pendidikan" href="#galeriKegiatanPendidikan" data-bs-dismiss="offcanvas">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pendidikan" href="#beritaAcaraPendidikan" data-bs-dismiss="offcanvas">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-pendidikan" href="#kontakPendidikanOsm" data-bs-dismiss="offcanvas">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header pendidikan
        const headerPendidikan = document.getElementById('headerPendidikan');
        const navLinksPendidikan = document.querySelectorAll('.nav-link-pendidikan');
        const sectionsPendidikan = document.querySelectorAll('section[id]');

        // Komentar JavaScript: Efek header saat scroll
        if (headerPendidikan) {
            const headerScrollEffectPendidikan = () => {
                if (window.scrollY > 60) {
                    headerPendidikan.classList.add('scrolled');
                } else {
                    headerPendidikan.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScrollEffectPendidikan);
            document.addEventListener('scroll', headerScrollEffectPendidikan);
        }

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkPendidikan() {
            let currentSectionId = '';
            const headerHeight = (headerPendidikan ? headerPendidikan.offsetHeight : 70);
            const scrollPosition = window.pageYOffset + headerHeight + 70; // Penyesuaian offset

            sectionsPendidikan.forEach(section => {
                // Komentar JavaScript: Pastikan section memiliki offsetTop sebelum mengaksesnya
                if (section && typeof section.offsetTop !== 'undefined' && section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksPendidikan.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkPendidikan);
        window.addEventListener('load', updateActiveNavLinkPendidikan);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        navLinksPendidikan.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerPendidikan ? headerPendidikan.offsetHeight : 70) + 0;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const offcanvasElement = document.getElementById('offcanvasNavbarPendidikan');
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