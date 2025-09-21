<?php // File: components/header_pendidikan_innovateu.php 
?>
<style>
    /* Header Pendidikan InnovateU Styles */
    .header-innovateu {
        padding: 15px 0;
        background-color: rgba(var(--bg-light-edu4-rgb, 244, 247, 252), 0.1);
        /* Sangat transparan */
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        position: fixed;
        top: 15px;
        /* Beri jarak dari atas */
        left: 50%;
        transform: translateX(-50%);
        width: calc(100% - 60px);
        /* Lebar header tidak full, dengan margin */
        max-width: 1300px;
        /* Batas lebar maksimum */
        z-index: 1030;
        border-radius: 12px;
        /* Sudut header lebih membulat */
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(var(--border-light-edu4-rgb, 216, 226, 239), 0.3);
        transition: background-color 0.35s ease, box-shadow 0.35s ease, top 0.35s ease, width 0.35s ease, border-radius 0.35s ease, border-color 0.35s ease;
    }

    .header-innovateu.scrolled {
        top: 0;
        width: 100%;
        max-width: 100%;
        border-radius: 0;
        background-color: rgba(var(--bg-light-edu4-rgb, 244, 247, 252), 0.95);
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
        border-color: rgba(var(--border-light-edu4-rgb, 216, 226, 239), 0.7);
    }

    /* Komentar CSS: Variabel RGB untuk warna dasar */
    body {
        --bg-light-edu4-rgb: 244, 247, 252;
        --border-light-edu4-rgb: 216, 226, 239;
        --bg-dark-edu4-rgb: 10, 25, 47;
        --border-dark-edu4-rgb: 44, 62, 93;
        --card-bg-light-edu4-rgb: 255, 255, 255;
        --card-bg-dark-edu4-rgb: 23, 42, 69;
    }

    body.dark-mode .header-innovateu {
        background-color: rgba(var(--bg-dark-edu4-rgb, 10, 25, 47), 0.2);
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        border-color: rgba(var(--border-dark-edu4-rgb, 44, 62, 93), 0.5);
    }

    body.dark-mode .header-innovateu.scrolled {
        background-color: rgba(var(--bg-dark-edu4-rgb, 10, 25, 47), 0.95);
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.3);
        border-color: rgba(var(--border-dark-edu4-rgb, 44, 62, 93), 0.8);
    }


    .header-innovateu .container-header-custom-iu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 0 10px;
    }

    .header-innovateu .navbar-brand-innovateu {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.1rem;
        font-weight: 700;
        color: var(--primary-innovate);
        text-decoration: none;
        transition: color 0.3s ease;
        letter-spacing: 0.5px;
    }

    .header-innovateu .navbar-brand-innovateu .logo-icon-iu {
        font-size: 1.8rem;
        color: var(--secondary-innovate);
        margin-right: 8px;
        vertical-align: -1px;
        transition: color 0.3s ease, transform 0.4s ease;
    }

    .header-innovateu .navbar-brand-innovateu:hover .logo-icon-iu {
        transform: rotate(-15deg) scale(1.1);
    }

    body.dark-mode .header-innovateu .navbar-brand-innovateu {
        color: var(--primary-innovate-dark);
    }

    body.dark-mode .header-innovateu .navbar-brand-innovateu .logo-icon-iu {
        color: var(--secondary-innovate-dark);
    }

    /* Navigasi Kanan sebagai Floating Panel dengan style "tech" */
    .header-innovateu .nav-panel-innovateu {
        background-color: rgba(var(--card-bg-light-edu4-rgb, 255, 255, 255), 0.4);
        backdrop-filter: blur(7px);
        -webkit-backdrop-filter: blur(7px);
        padding: 7px 8px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(var(--border-light-edu4-rgb, 216, 226, 239), 0.3);
        transition: background-color 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode .header-innovateu .nav-panel-innovateu {
        background-color: rgba(var(--card-bg-dark-edu4-rgb, 23, 42, 69), 0.5);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        border-color: rgba(var(--border-dark-edu4-rgb, 44, 62, 93), 0.4);
    }

    .header-innovateu.scrolled .nav-panel-innovateu {
        background-color: rgba(var(--card-bg-light-edu4-rgb, 255, 255, 255), 0.8);
    }

    body.dark-mode .header-innovateu.scrolled .nav-panel-innovateu {
        background-color: rgba(var(--card-bg-dark-edu4-rgb, 23, 42, 69), 0.9);
    }

    .header-innovateu .nav-link-innovateu {
        font-family: 'Orbitron', sans-serif;
        font-weight: 500;
        font-size: 0.85rem;
        color: var(--text-light-edu4) !important;
        margin: 0 6px;
        padding: 6px 10px !important;
        position: relative;
        transition: color 0.3s ease, background-color 0.3s ease, border-color 0.3s ease, text-shadow 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 5px;
        border: 1px solid transparent;
    }

    .header-innovateu .nav-link-innovateu:hover,
    .header-innovateu .nav-link-innovateu.active {
        color: var(--accent-innovate) !important;
        background-color: rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.08);
        border-color: rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.3);
        text-shadow: 0 0 5px rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.5);
    }

    body {
        --accent-innovate-rgb: 127, 0, 255;
    }

    body.dark-mode {
        --accent-innovate-dark-rgb: 164, 80, 255;
    }


    body.dark-mode .header-innovateu .nav-link-innovateu {
        color: var(--text-dark-edu4) !important;
    }

    body.dark-mode .header-innovateu .nav-link-innovateu:hover,
    body.dark-mode .header-innovateu .nav-link-innovateu.active {
        color: var(--accent-innovate-dark) !important;
        background-color: rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.12);
        border-color: rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.4);
        text-shadow: 0 0 5px rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.5);
    }

    .header-innovateu .navbar-toggler-innovateu {
        border: 1px solid var(--primary-innovate);
        padding: .3rem .6rem;
    }

    .header-innovateu .navbar-toggler-innovateu .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 169, 224, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-innovateu .navbar-toggler-innovateu {
        border-color: var(--primary-innovate-dark);
    }

    body.dark-mode .header-innovateu .navbar-toggler-innovateu .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 191, 255, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Offcanvas menu untuk mobile */
    .offcanvas-header-innovateu,
    .offcanvas-body-innovateu {
        background-color: var(--bg-light-edu4);
        transition: background-color 0.3s ease;
    }

    .offcanvas-header-innovateu {
        border-bottom: 1px solid var(--border-light-edu4);
    }

    body.dark-mode .offcanvas-header-innovateu,
    body.dark-mode .offcanvas-body-innovateu {
        background-color: var(--bg-dark-edu4);
    }

    body.dark-mode .offcanvas-header-innovateu {
        border-bottom-color: var(--border-dark-edu4);
    }

    .offcanvas-title-innovateu {
        color: var(--primary-innovate);
        font-family: 'Orbitron', sans-serif;
    }

    body.dark-mode .offcanvas-title-innovateu {
        color: var(--primary-innovate-dark);
    }

    .offcanvas-body-innovateu .nav-link-innovateu {
        margin-bottom: 10px;
        display: block;
        text-align: left;
        padding-left: 5px !important;
    }
</style>

<header id="headerInnovateU" class="header-innovateu">
    <div class="container-header-custom-iu">
        <a class="navbar-brand-innovateu" href="index.php">
            <span class="logo-icon-iu"><i class="fas fa-cogs"></i></span> <?php /* Komentar PHP: Ikon gear/tech */ ?>
            InnovateU
        </a>

        <?php /* Komentar PHP: Navigasi Desktop sebagai Panel Mengambang */ ?>
        <nav class="nav-panel-innovateu d-none d-lg-flex">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link nav-link-innovateu active" aria-current="page" href="#heroPendidikanInnovateuDynamic">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-innovateu" href="#tentangKamiPendidikanFuturistik">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-innovateu" href="#kurikulumAdaptifPendidikan">Kurikulum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-innovateu" href="#pusatRisetKolaborasiPendidikan">Riset</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-innovateu" href="#eventWorkshopVirtualPendidikan">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-innovateu" href="#kontakPendidikanTechOsm">Kontak</a>
                </li>
            </ul>
        </nav>

        <?php /* Komentar PHP: Tombol Toggler untuk Mobile */ ?>
        <button class="navbar-toggler navbar-toggler-innovateu d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarInnovateU" aria-controls="offcanvasNavbarInnovateU" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php /* Komentar PHP: Offcanvas untuk Navigasi Mobile */ ?>
        <div class="offcanvas offcanvas-end offcanvas-header-innovateu" tabindex="-1" id="offcanvasNavbarInnovateU" aria-labelledby="offcanvasNavbarInnovateULabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title offcanvas-title-innovateu" id="offcanvasNavbarInnovateULabel">Menu InnovateU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-innovateu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-innovateu active" aria-current="page" href="#heroPendidikanInnovateuDynamic" data-bs-dismiss="offcanvas">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-innovateu" href="#tentangKamiPendidikanFuturistik" data-bs-dismiss="offcanvas">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-innovateu" href="#kurikulumAdaptifPendidikan" data-bs-dismiss="offcanvas">Kurikulum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-innovateu" href="#pusatRisetKolaborasiPendidikan" data-bs-dismiss="offcanvas">Riset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-innovateu" href="#eventWorkshopVirtualPendidikan" data-bs-dismiss="offcanvas">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-innovateu" href="#jaringanAlumniGlobalPendidikan" data-bs-dismiss="offcanvas">Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-innovateu" href="#kontakPendidikanTechOsm" data-bs-dismiss="offcanvas">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header InnovateU
        const headerInnovateU = document.getElementById('headerInnovateU');
        const navLinksInnovateU = document.querySelectorAll('.nav-link-innovateu');
        const sectionsInnovateU = document.querySelectorAll('section[id]');

        // Komentar JavaScript: Efek header saat scroll
        if (headerInnovateU) {
            const headerScrollEffectInnovateU = () => {
                if (window.scrollY > 20) {
                    headerInnovateU.classList.add('scrolled');
                } else {
                    headerInnovateU.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScrollEffectInnovateU);
            document.addEventListener('scroll', headerScrollEffectInnovateU);
        }

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkInnovateU() {
            let currentSectionId = '';
            const headerHeight = (headerInnovateU ? headerInnovateU.offsetHeight : 70) + (headerInnovateU && headerInnovateU.classList.contains('scrolled') ? 0 : 15);
            const scrollPosition = window.pageYOffset + headerHeight + 70;

            sectionsInnovateU.forEach(section => {
                if (section && typeof section.offsetTop !== 'undefined' && section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksInnovateU.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkInnovateU);
        window.addEventListener('load', updateActiveNavLinkInnovateU);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        navLinksInnovateU.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerInnovateU ? headerInnovateU.offsetHeight : 70) + (headerInnovateU && headerInnovateU.classList.contains('scrolled') ? 0 : 15);
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const offcanvasElement = document.getElementById('offcanvasNavbarInnovateU');
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