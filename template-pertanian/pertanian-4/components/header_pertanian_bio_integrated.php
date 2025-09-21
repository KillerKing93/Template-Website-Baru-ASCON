<?php // File: components/header_pertanian_bio_integrated.php 
?>
<style>
    /* Header Pertanian Bio-Integrated Styles */
    .header-bio-integrated {
        padding: 18px 0;
        background-color: rgba(var(--bg-light-farm4-rgb, 240, 244, 240), 0.8);
        /* var(--bg-light-farm4) dengan alpha */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        transition: background-color 0.3s ease, box-shadow 0.3s ease, padding 0.3s ease;
    }

    .header-bio-integrated.scrolled {
        padding: 12px 0;
        background-color: rgba(var(--bg-light-farm4-rgb, 240, 244, 240), 0.95);
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
    }

    /* Komentar CSS: Variabel RGB untuk bg-light-farm4 & bg-dark-farm4 */
    body {
        --bg-light-farm4-rgb: 240, 244, 240;
        --bg-dark-farm4-rgb: 24, 40, 26;
    }

    body.dark-mode .header-bio-integrated {
        background-color: rgba(var(--bg-dark-farm4-rgb, 24, 40, 26), 0.8);
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.2);
    }

    body.dark-mode .header-bio-integrated.scrolled {
        background-color: rgba(var(--bg-dark-farm4-rgb, 24, 40, 26), 0.95);
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.3);
    }

    .header-bio-integrated .navbar-brand-bio {
        font-family: 'Nunito', sans-serif;
        font-size: 1.9rem;
        /* Ukuran brand */
        font-weight: 800;
        /* Sangat bold */
        color: var(--primary-bio-farm);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .header-bio-integrated .navbar-brand-bio .logo-icon-bio {
        /* SVG atau Font Icon */
        width: 30px;
        /* Ukuran ikon disesuaikan */
        height: 30px;
        margin-right: 10px;
        vertical-align: -3px;
        /* Jika SVG, fill dengan var(--secondary-bio-farm) */
        color: var(--secondary-bio-farm);
        transition: color 0.3s ease, transform 0.4s ease;
    }

    .header-bio-integrated .navbar-brand-bio:hover .logo-icon-bio {
        transform: rotate(360deg);
    }

    body.dark-mode .header-bio-integrated .navbar-brand-bio {
        color: var(--primary-bio-farm-dark);
    }

    body.dark-mode .header-bio-integrated .navbar-brand-bio .logo-icon-bio {
        color: var(--secondary-bio-farm-dark);
    }

    .header-bio-integrated .nav-link-bio {
        font-family: 'Nunito', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        color: var(--text-light-farm4) !important;
        margin: 0 15px;
        padding: 8px 0 !important;
        position: relative;
        transition: color 0.3s ease;
        text-transform: capitalize;
    }

    /* Efek hover unik: Garis bawah tumbuh dari tengah dengan ujung bulat */
    .header-bio-integrated .nav-link-bio::after {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        /* Garis lebih tebal */
        bottom: -3px;
        /* Posisi di bawah teks */
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--secondary-bio-farm);
        border-radius: 2px;
        /* Ujung bulat */
        transition: width 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        /* Transisi smooth */
    }

    .header-bio-integrated .nav-link-bio:hover::after,
    .header-bio-integrated .nav-link-bio.active::after {
        width: 70%;
        /* Lebar garis saat aktif/hover */
    }

    .header-bio-integrated .nav-link-bio:hover,
    .header-bio-integrated .nav-link-bio.active {
        color: var(--primary-bio-farm) !important;
    }

    body.dark-mode .header-bio-integrated .nav-link-bio {
        color: var(--text-dark-farm4) !important;
    }

    body.dark-mode .header-bio-integrated .nav-link-bio::after {
        background-color: var(--secondary-bio-farm-dark);
    }

    body.dark-mode .header-bio-integrated .nav-link-bio:hover,
    body.dark-mode .header-bio-integrated .nav-link-bio.active {
        color: var(--primary-bio-farm-dark) !important;
    }

    .header-bio-integrated .navbar-toggler-bio {
        border-color: rgba(var(--primary-bio-farm-rgb, 56, 142, 60), 0.3);
    }

    /* Komentar CSS: Variabel RGB untuk primary-bio-farm */
    body {
        --primary-bio-farm-rgb: 56, 142, 60;
    }

    body.dark-mode {
        --primary-bio-farm-dark-rgb: 102, 187, 106;
    }

    .header-bio-integrated .navbar-toggler-bio .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(56, 142, 60, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-bio-integrated .navbar-toggler-bio {
        border-color: rgba(var(--primary-bio-farm-dark-rgb, 102, 187, 106), 0.4);
    }

    body.dark-mode .header-bio-integrated .navbar-toggler-bio .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(102, 187, 106, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .header-bio-integrated .btn-contact-nav-bio {
        margin-left: 20px;
        padding: 8px 22px;
        font-size: 0.9rem;
    }
</style>

<header id="headerBioIntegrated" class="header-bio-integrated">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
            <a class="navbar-brand-bio" href="index.php">
                <?php /* Komentar PHP: Ganti dengan SVG logo Anda jika ada, atau gunakan Font Awesome */ ?>
                <i class="fas fa-leaf logo-icon-bio"></i>
                BioFarm
            </a>
            <button class="navbar-toggler navbar-toggler-bio" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavBioIntegrated" aria-controls="navbarNavBioIntegrated" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavBioIntegrated">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link nav-link-bio active" aria-current="page" href="#heroPertanianBioVisual">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-bio" href="#tentangKamiPertanianSustainable">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-bio" href="#layananPertanianHolistik">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-bio" href="#teknologiHijauPertanian">Teknologi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-bio" href="#produkOrganikPertanianShowcase">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-bio" href="#kontakPertanianAlamiOsm">Kontak</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a href="#kontakPertanianAlamiOsm" class="btn-bio-farm-primary btn-contact-nav-bio">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header bio-integrated
        const headerBio = document.getElementById('headerBioIntegrated');
        const navLinksBio = document.querySelectorAll('#headerBioIntegrated .nav-link-bio');
        const sectionsBio = document.querySelectorAll('section[id]');

        // Komentar JavaScript: Efek header saat scroll
        if (headerBio) {
            const headerScrollEffectBio = () => {
                if (window.scrollY > 60) {
                    headerBio.classList.add('scrolled');
                } else {
                    headerBio.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScrollEffectBio);
            document.addEventListener('scroll', headerScrollEffectBio);
        }

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkBio() {
            let currentSectionId = '';
            const scrollPosition = window.pageYOffset + (headerBio ? headerBio.offsetHeight : 75) + 50;

            sectionsBio.forEach(section => {
                if (section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksBio.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkBio);
        window.addEventListener('load', updateActiveNavLinkBio);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        navLinksBio.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerBio ? headerBio.offsetHeight : 75) + 0;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const navbarCollapse = document.getElementById('navbarNavBioIntegrated');
                        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                            new bootstrap.Collapse(navbarCollapse).hide();
                        }
                    }
                }
            });
        });
    });
</script>