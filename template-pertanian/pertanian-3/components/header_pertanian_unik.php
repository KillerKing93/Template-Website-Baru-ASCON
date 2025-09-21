<?php // File: components/header_pertanian_unik.php 
?>
<style>
    /* Header Pertanian Unik Styles */
    .header-pertanian-unik {
        padding: 20px 0;
        background-color: transparent;
        /* Awalnya transparan */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        transition: background-color 0.4s ease, box-shadow 0.4s ease, padding 0.4s ease;
    }

    .header-pertanian-unik.scrolled {
        padding: 15px 0;
        background-color: rgba(var(--card-bg-light-farm3-rgb, 255, 255, 255), 0.9);
        /* var(--card-bg-light-farm3) dengan alpha */
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
    }

    /* Komentar CSS: Variabel RGB untuk card-bg-light-farm3 & card-bg-dark-farm3 */
    body {
        --card-bg-light-farm3-rgb: 255, 255, 255;
        --card-bg-dark-farm3-rgb: 42, 42, 42;
        /* Digunakan untuk .navbar-nav-unik di dark mode */
        --bg-dark-farm3-rgb: 28, 28, 28;
        /* Digunakan untuk header.scrolled di dark mode */
    }


    body.dark-mode .header-pertanian-unik.scrolled {
        background-color: rgba(var(--bg-dark-farm3-rgb, 28, 28, 28), 0.85);
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.3);
    }

    .header-pertanian-unik .container-fluid {
        padding-left: 40px;
        padding-right: 40px;
        display: flex;
        /* Memastikan elemen di dalamnya bisa diatur dengan justify-content */
        justify-content: space-between;
        /* Logo di kiri, nav di kanan */
        align-items: center;
    }

    .header-pertanian-unik .navbar-brand-unik {
        font-family: 'Teko', sans-serif;
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-art-farm);
        text-decoration: none;
        transition: color 0.3s ease;
        line-height: 1;
    }

    .header-pertanian-unik .navbar-brand-unik i {
        margin-right: 10px;
        color: var(--secondary-art-farm);
        font-size: 2.2rem;
        vertical-align: -3px;
    }

    body.dark-mode .header-pertanian-unik .navbar-brand-unik {
        color: var(--primary-art-farm-dark);
    }

    body.dark-mode .header-pertanian-unik .navbar-brand-unik i {
        color: var(--secondary-art-farm-dark);
    }

    /* Styling untuk "Floating Box" Navigasi Kanan */
    .header-pertanian-unik .navbar-nav-unik-wrapper {
        /* Wrapper ini akan menjadi floating box */
        background-color: rgba(var(--card-bg-light-farm3-rgb, 255, 255, 255), 0.7);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        padding: 10px 15px;
        border-radius: 8px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode .header-pertanian-unik .navbar-nav-unik-wrapper {
        background-color: rgba(var(--card-bg-dark-farm3-rgb, 42, 42, 42), 0.7);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.25);
    }

    .header-pertanian-unik.scrolled .navbar-nav-unik-wrapper {
        /* Bisa disamakan dengan header atau sedikit berbeda */
        background-color: rgba(var(--card-bg-light-farm3-rgb, 255, 255, 255), 0.85);
    }

    body.dark-mode .header-pertanian-unik.scrolled .navbar-nav-unik-wrapper {
        background-color: rgba(var(--card-bg-dark-farm3-rgb, 42, 42, 42), 0.8);
    }


    .header-pertanian-unik .navbar-nav-unik {
        /* Hapus margin-left: auto; karena wrapper yang akan diposisikan */
        display: flex;
        flex-direction: row;
        /* Pastikan horizontal di desktop */
        align-items: center;
    }

    .header-pertanian-unik .nav-link-unik {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 0.95rem;
        /* Sedikit lebih kecil agar muat di box */
        color: var(--text-light-farm3) !important;
        margin: 0 10px;
        /* Jarak antar link lebih kecil */
        padding: 8px 10px !important;
        position: relative;
        transition: color 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-radius: 4px;
        /* Sudut link sedikit bulat */
    }

    /* Efek hover/active baru untuk link di dalam box */
    .header-pertanian-unik .nav-link-unik::before,
    .header-pertanian-unik .nav-link-unik::after {
        display: none;
        /* Hapus efek bracket sebelumnya */
    }

    .header-pertanian-unik .nav-link-unik span.bracket-v-tl,
    .header-pertanian-unik .nav-link-unik span.bracket-v-br {
        display: none;
        /* Hapus efek bracket sebelumnya */
    }

    .header-pertanian-unik .nav-link-unik:hover,
    .header-pertanian-unik .nav-link-unik.active {
        color: var(--primary-art-farm) !important;
        background-color: rgba(var(--primary-art-farm-rgb, 76, 175, 80), 0.1);
        /* Latar hover halus */
    }

    body.dark-mode .header-pertanian-unik .nav-link-unik {
        color: var(--text-dark-farm3) !important;
    }

    body.dark-mode .header-pertanian-unik .nav-link-unik:hover,
    body.dark-mode .header-pertanian-unik .nav-link-unik.active {
        color: var(--primary-art-farm-dark) !important;
        background-color: rgba(var(--primary-art-farm-dark-rgb, 129, 199, 132), 0.15);
    }


    .header-pertanian-unik .navbar-toggler-unik {
        border: 1px solid var(--primary-art-farm);
        padding: .4rem .7rem;
        /* Tidak perlu ms-auto jika wrapper navigasi sudah di kanan */
    }

    .header-pertanian-unik .navbar-toggler-unik .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(76, 175, 80, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-pertanian-unik .navbar-toggler-unik {
        border-color: var(--primary-art-farm-dark);
    }

    body.dark-mode .header-pertanian-unik .navbar-toggler-unik .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(129, 199, 132, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Offcanvas menu untuk mobile */
    .offcanvas-header-unik {
        background-color: var(--bg-light-farm3);
        border-bottom: 1px solid var(--border-light-farm3);
    }

    .offcanvas-body-unik {
        background-color: var(--bg-light-farm3);
    }

    body.dark-mode .offcanvas-header-unik,
    body.dark-mode .offcanvas-body-unik {
        background-color: var(--bg-dark-farm3);
        border-bottom-color: var(--border-dark-farm3);
    }

    .offcanvas-title-unik {
        color: var(--primary-art-farm);
    }

    body.dark-mode .offcanvas-title-unik {
        color: var(--primary-art-farm-dark);
    }
</style>

<header id="headerPertanianUnik" class="header-pertanian-unik">
    <div class="container-fluid"> <?php /* Menggunakan container-fluid */ ?>
        <?php /* Komentar PHP: Navbar Bootstrap di sini dimodifikasi agar logo dan navigasi terpisah */ ?>
        <a class="navbar-brand-unik" href="index.php">
            <i class="fas fa-spa"></i> <?php /* Ikon daun spa atau sejenisnya */ ?>
            AgriNova
        </a>

        <button class="navbar-toggler navbar-toggler-unik d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarUnik" aria-controls="offcanvasNavbarUnik" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php /* Komentar PHP: Wrapper untuk navigasi desktop agar bisa distyle sebagai box */ ?>
        <div class="navbar-nav-unik-wrapper d-none d-lg-block">
            <ul class="navbar-nav navbar-nav-unik">
                <li class="nav-item">
                    <a class="nav-link nav-link-unik active" aria-current="page" href="#heroPertanianArtistik">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-unik" href="#tentangKamiPertanianInovatif">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-unik" href="#layananPertanianTeknologi">Teknologi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-unik" href="#galeriProdukPertanianInteraktif">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-unik" href="#blogInsightPertanian">Wawasan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-unik" href="#kontakPertanianModernOsm">Kontak</a>
                </li>
            </ul>
        </div>

        <?php /* Komentar PHP: Offcanvas untuk navigasi mobile */ ?>
        <div class="offcanvas offcanvas-end offcanvas-header-unik" tabindex="-1" id="offcanvasNavbarUnik" aria-labelledby="offcanvasNavbarUnikLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title offcanvas-title-unik" id="offcanvasNavbarUnikLabel">Menu AgriNova</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-unik">
                <ul class="navbar-nav"> <?php /* Komentar PHP: Style link di offcanvas bisa berbeda jika diinginkan */ ?>
                    <li class="nav-item">
                        <a class="nav-link nav-link-unik active" aria-current="page" href="#heroPertanianArtistik" data-bs-dismiss="offcanvas">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-unik" href="#tentangKamiPertanianInovatif" data-bs-dismiss="offcanvas">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-unik" href="#layananPertanianTeknologi" data-bs-dismiss="offcanvas">Teknologi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-unik" href="#galeriProdukPertanianInteraktif" data-bs-dismiss="offcanvas">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-unik" href="#blogInsightPertanian" data-bs-dismiss="offcanvas">Wawasan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-unik" href="#kontakPertanianModernOsm" data-bs-dismiss="offcanvas">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header pertanian unik
        const headerUnik = document.getElementById('headerPertanianUnik');
        const navLinksUnik = document.querySelectorAll('.nav-link-unik'); // Ambil semua nav-link, termasuk di offcanvas
        const sectionsUnik = document.querySelectorAll('section[id]');

        // Komentar JavaScript: Efek header saat scroll
        if (headerUnik) {
            const headerScrollEffectUnik = () => {
                if (window.scrollY > 70) {
                    headerUnik.classList.add('scrolled');
                } else {
                    headerUnik.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScrollEffectUnik);
            document.addEventListener('scroll', headerScrollEffectUnik);
        }

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkUnik() {
            let currentSectionId = '';
            const scrollPosition = window.pageYOffset + (headerUnik ? headerUnik.offsetHeight : 80) + 70;

            sectionsUnik.forEach(section => {
                if (section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksUnik.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkUnik);
        window.addEventListener('load', updateActiveNavLinkUnik);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        navLinksUnik.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerUnik ? headerUnik.offsetHeight : 80) + 0;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        // Komentar JavaScript: Tutup offcanvas jika link di offcanvas diklik
                        const offcanvasElement = document.getElementById('offcanvasNavbarUnik');
                        if (offcanvasElement && link.closest('.offcanvas')) { // Cek apakah link ada di dalam offcanvas
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