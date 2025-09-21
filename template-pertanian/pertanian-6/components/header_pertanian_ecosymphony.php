<?php // File: components/header_pertanian_ecosymphony.php 
?>
<style>
    /* Header Pertanian EcoSymphony Styles */
    .header-ecosymphony {
        padding: 18px 0;
        background-color: rgba(var(--bg-light-farm5-rgb, 245, 245, 240), 0.85);
        /* var(--bg-light-farm5) dengan alpha */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 1px 10px rgba(0, 0, 0, 0.06);
        position: fixed;
        top: 0;
        /* Header menempel di atas */
        left: 0;
        width: 100%;
        z-index: 1030;
        transition: background-color 0.35s ease, box-shadow 0.35s ease, padding 0.35s ease;
    }

    /* Komentar CSS: Variabel RGB untuk warna dasar */
    body {
        --bg-light-farm5-rgb: 245, 245, 240;
        --bg-dark-farm5-rgb: 42, 47, 42;
        --card-bg-light-farm5-rgb: 255, 255, 255;
        --card-bg-dark-farm5-rgb: 56, 64, 56;
    }

    body.dark-mode .header-ecosymphony {
        background-color: rgba(var(--bg-dark-farm5-rgb, 42, 47, 42), 0.85);
        box-shadow: 0 1px 10px rgba(0, 0, 0, 0.25);
    }

    /* Komentar CSS: Tidak ada .scrolled style karena header sudah fixed dan semi-transparan */


    .header-ecosymphony .container-fluid {
        padding-left: 35px;
        padding-right: 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-ecosymphony .navbar-brand-ecosymphony {
        font-family: 'Lora', serif;
        font-size: 2.1rem;
        /* Ukuran brand */
        font-weight: 700;
        color: var(--primary-eco-farm);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .header-ecosymphony .navbar-brand-ecosymphony .logo-icon-eco {
        /* Menggunakan Font Awesome dengan style organik */
        font-size: 1.8rem;
        /* Ukuran ikon */
        color: var(--secondary-eco-farm);
        margin-right: 10px;
        vertical-align: -2px;
        transition: color 0.3s ease, transform 0.4s ease;
    }

    .header-ecosymphony .navbar-brand-ecosymphony:hover .logo-icon-eco {
        transform: rotate(-10deg) scale(1.1);
    }

    body.dark-mode .header-ecosymphony .navbar-brand-ecosymphony {
        color: var(--primary-eco-farm-dark);
    }

    body.dark-mode .header-ecosymphony .navbar-brand-ecosymphony .logo-icon-eco {
        color: var(--secondary-eco-farm-dark);
    }

    /* Navigasi Kanan sebagai Floating Panel dengan bentuk organik */
    .header-ecosymphony .nav-panel-ecosymphony {
        background-color: rgba(var(--card-bg-light-farm5-rgb, 255, 255, 255), 0.6);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        padding: 8px 12px;
        /* Padding panel */
        border-radius: 30px;
        /* Bentuk kapsul/pil */
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode .header-ecosymphony .nav-panel-ecosymphony {
        background-color: rgba(var(--card-bg-dark-farm5-rgb, 56, 64, 56), 0.7);
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.28);
    }

    .header-ecosymphony .nav-link-ecosymphony {
        font-family: 'Nunito Sans', sans-serif;
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--text-light-farm5) !important;
        margin: 0 6px;
        /* Jarak antar link lebih rapat */
        padding: 7px 14px !important;
        position: relative;
        transition: color 0.3s ease, background-color 0.3s ease;
        text-transform: capitalize;
        /* Tidak uppercase */
        border-radius: 25px;
        /* Link juga bulat */
    }

    /* Efek hover: Latar belakang halus dengan warna aksen */
    .header-ecosymphony .nav-link-ecosymphony:hover,
    .header-ecosymphony .nav-link-ecosymphony.active {
        color: #fff !important;
        /* Teks putih kontras */
        background-color: var(--primary-eco-farm);
    }

    body.dark-mode .header-ecosymphony .nav-link-ecosymphony {
        color: var(--text-dark-farm5) !important;
    }

    body.dark-mode .header-ecosymphony .nav-link-ecosymphony:hover,
    body.dark-mode .header-ecosymphony .nav-link-ecosymphony.active {
        color: var(--bg-dark-farm5) !important;
        /* Teks kontras dengan background */
        background-color: var(--primary-eco-farm-dark);
    }

    .header-ecosymphony .navbar-toggler-ecosymphony {
        border: 1px solid var(--primary-eco-farm);
        padding: .3rem .6rem;
    }

    .header-ecosymphony .navbar-toggler-ecosymphony .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(85, 107, 47, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-ecosymphony .navbar-toggler-ecosymphony {
        border-color: var(--primary-eco-farm-dark);
    }

    body.dark-mode .header-ecosymphony .navbar-toggler-ecosymphony .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(143, 188, 143, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Offcanvas menu untuk mobile */
    .offcanvas-header-ecosymphony,
    .offcanvas-body-ecosymphony {
        background-color: var(--bg-light-farm5);
        transition: background-color 0.3s ease;
    }

    .offcanvas-header-ecosymphony {
        border-bottom: 1px solid var(--border-light-farm5);
    }

    body.dark-mode .offcanvas-header-ecosymphony,
    body.dark-mode .offcanvas-body-ecosymphony {
        background-color: var(--bg-dark-farm5);
    }

    body.dark-mode .offcanvas-header-ecosymphony {
        border-bottom-color: var(--border-dark-farm5);
    }

    .offcanvas-title-ecosymphony {
        color: var(--primary-eco-farm);
        font-family: 'Lora', serif;
    }

    body.dark-mode .offcanvas-title-ecosymphony {
        color: var(--primary-eco-farm-dark);
    }

    /* Style link di offcanvas bisa sama atau sedikit berbeda */
    .offcanvas-body-ecosymphony .nav-link-unik {
        margin-bottom: 10px;
        display: block;
        text-align: center;
    }
</style>

<header id="headerEcoSymphony" class="header-ecosymphony">
    <div class="container-fluid">
        <a class="navbar-brand-ecosymphony" href="index.php">
            <i class="fas fa-feather-alt logo-icon-eco"></i> <?php /* Ikon bulu atau daun yang lebih organik */ ?>
            EcoSymphony
        </a>

        <?php /* Komentar PHP: Navigasi Desktop sebagai Panel Mengambang */ ?>
        <nav class="nav-panel-ecosymphony d-none d-lg-flex"> <?php /* d-lg-flex agar item di dalamnya bisa diatur */ ?>
            <ul class="navbar-nav flex-row"> <?php /* flex-row untuk display horizontal */ ?>
                <li class="nav-item">
                    <a class="nav-link nav-link-ecosymphony active" aria-current="page" href="#heroPertanianEcoSymphony">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-ecosymphony" href="#tentangKamiPertanianHarmoni">Filosofi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-ecosymphony" href="#layananPertanianEkologis">Ekosistem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-ecosymphony" href="#produkAlamiPertanian">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-ecosymphony" href="#kontakPertanianAlamiOsmV2">Kontak</a>
                </li>
            </ul>
        </nav>

        <?php /* Komentar PHP: Tombol Toggler untuk Mobile */ ?>
        <button class="navbar-toggler navbar-toggler-ecosymphony d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarEcoSymphony" aria-controls="offcanvasNavbarEcoSymphony" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php /* Komentar PHP: Offcanvas untuk Navigasi Mobile */ ?>
        <div class="offcanvas offcanvas-end offcanvas-header-ecosymphony" tabindex="-1" id="offcanvasNavbarEcoSymphony" aria-labelledby="offcanvasNavbarEcoSymphonyLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title offcanvas-title-ecosymphony" id="offcanvasNavbarEcoSymphonyLabel">Menu EcoSymphony</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-ecosymphony">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-ecosymphony active" aria-current="page" href="#heroPertanianEcoSymphony" data-bs-dismiss="offcanvas">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ecosymphony" href="#tentangKamiPertanianHarmoni" data-bs-dismiss="offcanvas">Filosofi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ecosymphony" href="#layananPertanianEkologis" data-bs-dismiss="offcanvas">Ekosistem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ecosymphony" href="#produkAlamiPertanian" data-bs-dismiss="offcanvas">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ecosymphony" href="#galeriKeindahanAlamPertanian" data-bs-dismiss="offcanvas">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ecosymphony" href="#ceritaPetaniEkosistem" data-bs-dismiss="offcanvas">Cerita Mitra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ecosymphony" href="#kontakPertanianAlamiOsmV2" data-bs-dismiss="offcanvas">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header EcoSymphony
        const headerEco = document.getElementById('headerEcoSymphony');
        // Komentar JavaScript: Tidak ada .scrolled class lagi karena header selalu fixed dan semi-transparan
        // const navLinksEco = document.querySelectorAll('.nav-link-ecosymphony'); // Ambil semua nav-link
        // const sectionsEco = document.querySelectorAll('section[id]'); 

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll (opsional jika tidak terlalu banyak section)
        // function updateActiveNavLinkEco() {
        //     let currentSectionId = '';
        //     const headerHeight = (headerEco ? headerEco.offsetHeight : 70);
        //     const scrollPosition = window.pageYOffset + headerHeight + 70;

        //     sectionsEco.forEach(section => {
        //         if (section.offsetTop <= scrollPosition) {
        //             currentSectionId = section.getAttribute('id');
        //         }
        //     });

        //     navLinksEco.forEach(link => {
        //         link.classList.remove('active');
        //         if (link.getAttribute('href') === `#${currentSectionId}`) {
        //             link.classList.add('active');
        //         }
        //     });
        // }

        // window.addEventListener('scroll', updateActiveNavLinkEco);
        // window.addEventListener('load', updateActiveNavLinkEco);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        document.querySelectorAll('.nav-link-ecosymphony').forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerEco ? headerEco.offsetHeight : 70) + 0;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const offcanvasElement = document.getElementById('offcanvasNavbarEcoSymphony');
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