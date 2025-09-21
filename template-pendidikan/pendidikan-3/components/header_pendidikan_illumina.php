<?php // File: components/header_pendidikan_illumina.php 
?>
<style>
    /* Header Pendidikan Illumina Styles */
    .header-illumina {
        padding: 18px 0;
        background-color: rgba(var(--card-bg-light-edu3-rgb, 255, 255, 255), 0.8);
        /* var(--card-bg-light-edu3) dengan alpha */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        transition: background-color 0.3s ease, box-shadow 0.3s ease, padding 0.3s ease;
    }

    /* Komentar CSS: Variabel RGB untuk warna dasar */
    body {
        --card-bg-light-edu3-rgb: 255, 255, 255;
        --card-bg-dark-edu3-rgb: 56, 56, 56;
        /* var(--card-bg-dark-edu3) */
    }

    body.dark-mode .header-illumina {
        background-color: rgba(var(--card-bg-dark-edu3-rgb, 56, 56, 56), 0.85);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    /* Komentar CSS: Tidak ada .scrolled style karena header sudah fixed dan semi-transparan */


    .header-illumina .container-fluid {
        padding-left: 35px;
        padding-right: 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-illumina .navbar-brand-illumina {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.2rem;
        /* Ukuran brand */
        font-weight: 700;
        color: var(--primary-illumina);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .header-illumina .navbar-brand-illumina .logo-icon-illumina {
        font-size: 1.8rem;
        /* Ukuran ikon */
        color: var(--secondary-illumina);
        margin-right: 10px;
        vertical-align: -1px;
        /* Penyesuaian vertikal */
        transition: color 0.3s ease, transform 0.4s ease;
    }

    .header-illumina .navbar-brand-illumina:hover .logo-icon-illumina {
        transform: rotate(5deg);
    }

    body.dark-mode .header-illumina .navbar-brand-illumina {
        color: var(--primary-illumina-dark);
    }

    body.dark-mode .header-illumina .navbar-brand-illumina .logo-icon-illumina {
        color: var(--secondary-illumina-dark);
    }

    /* Navigasi Kanan sebagai Panel Mengambang dengan style klasik */
    .header-illumina .nav-panel-illumina {
        background-color: rgba(var(--card-bg-light-edu3-rgb, 255, 255, 255), 0.6);
        backdrop-filter: blur(7px);
        -webkit-backdrop-filter: blur(7px);
        padding: 7px 10px;
        /* Padding panel */
        border-radius: 6px;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.06);
        border: 1px solid rgba(var(--border-light-edu3-rgb, 234, 224, 213), 0.4);
        /* Border halus */
        transition: background-color 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    /* Komentar CSS: Variabel RGB untuk border */
    body {
        --border-light-edu3-rgb: 234, 224, 213;
    }

    body.dark-mode {
        --border-dark-edu3-rgb: 79, 79, 79;
    }

    body.dark-mode .header-illumina .nav-panel-illumina {
        background-color: rgba(var(--card-bg-dark-edu3-rgb, 56, 56, 56), 0.7);
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.2);
        border-color: rgba(var(--border-dark-edu3-rgb, 79, 79, 79), 0.5);
    }

    .header-illumina .nav-link-illumina {
        font-family: 'Open Sans', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
        color: var(--text-light-edu3) !important;
        margin: 0 7px;
        /* Jarak antar link */
        padding: 6px 10px !important;
        position: relative;
        transition: color 0.3s ease;
        text-transform: capitalize;
        border-radius: 4px;
    }

    /* Efek hover: Garis bawah halus dan perubahan warna teks */
    .header-illumina .nav-link-illumina::after {
        content: '';
        position: absolute;
        width: 0;
        height: 1px;
        /* Garis sangat tipis */
        bottom: 0px;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--accent-illumina);
        transition: width 0.3s ease;
    }

    .header-illumina .nav-link-illumina:hover,
    .header-illumina .nav-link-illumina.active {
        color: var(--accent-illumina) !important;
    }

    .header-illumina .nav-link-illumina:hover::after,
    .header-illumina .nav-link-illumina.active::after {
        width: 80%;
    }

    body.dark-mode .header-illumina .nav-link-illumina {
        color: var(--text-dark-edu3) !important;
    }

    body.dark-mode .header-illumina .nav-link-illumina::after {
        background-color: var(--accent-illumina-dark);
    }

    body.dark-mode .header-illumina .nav-link-illumina:hover,
    body.dark-mode .header-illumina .nav-link-illumina.active {
        color: var(--accent-illumina-dark) !important;
    }

    .header-illumina .navbar-toggler-illumina {
        border: 1px solid var(--primary-illumina);
        padding: .3rem .6rem;
    }

    .header-illumina .navbar-toggler-illumina .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(139, 69, 19, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-illumina .navbar-toggler-illumina {
        border-color: var(--primary-illumina-dark);
    }

    body.dark-mode .header-illumina .navbar-toggler-illumina .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(160, 82, 45, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Offcanvas menu untuk mobile */
    .offcanvas-header-illumina,
    .offcanvas-body-illumina {
        background-color: var(--bg-light-edu3);
        transition: background-color 0.3s ease;
    }

    .offcanvas-header-illumina {
        border-bottom: 1px solid var(--border-light-edu3);
    }

    body.dark-mode .offcanvas-header-illumina,
    body.dark-mode .offcanvas-body-illumina {
        background-color: var(--bg-dark-edu3);
    }

    body.dark-mode .offcanvas-header-illumina {
        border-bottom-color: var(--border-dark-edu3);
    }

    .offcanvas-title-illumina {
        color: var(--primary-illumina);
        font-family: 'Cormorant Garamond', serif;
    }

    body.dark-mode .offcanvas-title-illumina {
        color: var(--primary-illumina-dark);
    }

    .offcanvas-body-illumina .nav-link-illumina {
        margin-bottom: 10px;
        display: block;
        text-align: left;
        padding-left: 5px !important;
    }
</style>

<header id="headerIllumina" class="header-illumina">
    <div class="container-fluid">
        <a class="navbar-brand-illumina" href="index.php">
            <i class="fas fa-book-open logo-icon-illumina"></i> <?php /* Ikon buku terbuka */ ?>
            Academia Illumina
        </a>

        <?php /* Komentar PHP: Navigasi Desktop sebagai Panel Mengambang */ ?>
        <nav class="nav-panel-illumina d-none d-lg-flex">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link nav-link-illumina active" aria-current="page" href="#heroPendidikanElegan">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-illumina" href="#tentangKamiPendidikanAkademik">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-illumina" href="#fakultasJurusanPendidikan">Fakultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-illumina" href="#risetPublikasiPendidikan">Riset</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-illumina" href="#kehidupanKampusPendidikan">Kampus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-illumina" href="#kontakPendidikanKlasikOsm">Kontak</a>
                </li>
            </ul>
        </nav>

        <?php /* Komentar PHP: Tombol Toggler untuk Mobile */ ?>
        <button class="navbar-toggler navbar-toggler-illumina d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarIllumina" aria-controls="offcanvasNavbarIllumina" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php /* Komentar PHP: Offcanvas untuk Navigasi Mobile */ ?>
        <div class="offcanvas offcanvas-end offcanvas-header-illumina" tabindex="-1" id="offcanvasNavbarIllumina" aria-labelledby="offcanvasNavbarIlluminaLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title offcanvas-title-illumina" id="offcanvasNavbarIlluminaLabel">Menu Academia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-illumina">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-illumina active" aria-current="page" href="#heroPendidikanElegan" data-bs-dismiss="offcanvas">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-illumina" href="#tentangKamiPendidikanAkademik" data-bs-dismiss="offcanvas">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-illumina" href="#fakultasJurusanPendidikan" data-bs-dismiss="offcanvas">Fakultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-illumina" href="#risetPublikasiPendidikan" data-bs-dismiss="offcanvas">Riset</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-illumina" href="#kehidupanKampusPendidikan" data-bs-dismiss="offcanvas">Kehidupan Kampus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-illumina" href="#penerimaanMahasiswaBaru" data-bs-dismiss="offcanvas">Penerimaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-illumina" href="#kontakPendidikanKlasikOsm" data-bs-dismiss="offcanvas">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header Illumina
        const headerIllumina = document.getElementById('headerIllumina');
        const navLinksIllumina = document.querySelectorAll('.nav-link-illumina');
        const sectionsIllumina = document.querySelectorAll('section[id]');

        // Komentar JavaScript: Efek header saat scroll (jika ingin ada perubahan saat scroll)
        // Saat ini header sudah fixed dan semi-transparan, jadi .scrolled mungkin tidak diperlukan
        // kecuali jika ingin mengubah padding atau shadow lebih lanjut.
        // if (headerIllumina) {
        //     const headerScrollEffectIllumina = () => {
        //         if (window.scrollY > 50) { 
        //             headerIllumina.classList.add('scrolled');
        //         } else {
        //             headerIllumina.classList.remove('scrolled');
        //         }
        //     };
        //     window.addEventListener('load', headerScrollEffectIllumina);
        //     document.addEventListener('scroll', headerScrollEffectIllumina);
        // }

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkIllumina() {
            let currentSectionId = '';
            const headerHeight = (headerIllumina ? headerIllumina.offsetHeight : 70);
            const scrollPosition = window.pageYOffset + headerHeight + 70;

            sectionsIllumina.forEach(section => {
                if (section && typeof section.offsetTop !== 'undefined' && section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksIllumina.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkIllumina);
        window.addEventListener('load', updateActiveNavLinkIllumina);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        navLinksIllumina.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerIllumina ? headerIllumina.offsetHeight : 70) + 0;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const offcanvasElement = document.getElementById('offcanvasNavbarIllumina');
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