<?php // File: components/header_pendidikan_eduverse.php 
?>
<style>
    /* Header Pendidikan EduVerse Styles */
    .header-eduverse {
        padding: 18px 0;
        background-color: rgba(var(--bg-light-edu2-rgb, 233, 241, 247), 0.7);
        /* var(--bg-light-edu2) dengan alpha */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
        position: fixed;
        top: 0;
        /* Header menempel di atas */
        left: 0;
        width: 100%;
        z-index: 1030;
        transition: background-color 0.3s ease, box-shadow 0.3s ease, padding 0.3s ease;
    }

    /* Komentar CSS: Variabel RGB untuk warna dasar */
    body {
        --bg-light-edu2-rgb: 233, 241, 247;
        --bg-dark-edu2-rgb: 10, 25, 47;
        --card-bg-light-edu2-rgb: 255, 255, 255;
        --card-bg-dark-edu2-rgb: 23, 42, 69;
    }

    body.dark-mode .header-eduverse {
        background-color: rgba(var(--bg-dark-edu2-rgb, 10, 25, 47), 0.75);
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.28);
    }

    /* Komentar CSS: Tidak ada .scrolled style karena header sudah fixed dan semi-transparan */


    .header-eduverse .container-fluid {
        padding-left: 30px;
        padding-right: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-eduverse .navbar-brand-eduverse {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        /* Ukuran brand */
        font-weight: 700;
        /* Orbitron sudah bold */
        color: var(--primary-edu2);
        text-decoration: none;
        transition: color 0.3s ease;
        letter-spacing: 1px;
    }

    .header-eduverse .navbar-brand-eduverse .logo-icon-ev {
        font-size: 1.8rem;
        /* Ukuran ikon */
        color: var(--secondary-edu2);
        margin-right: 8px;
        vertical-align: -2px;
        transition: color 0.3s ease, transform 0.4s ease;
    }

    .header-eduverse .navbar-brand-eduverse:hover .logo-icon-ev {
        transform: rotate(12deg);
    }

    body.dark-mode .header-eduverse .navbar-brand-eduverse {
        color: var(--primary-edu2-dark);
    }

    body.dark-mode .header-eduverse .navbar-brand-eduverse .logo-icon-ev {
        color: var(--secondary-edu2-dark);
    }

    /* Navigasi Kanan sebagai Panel Mengambang dengan style "tech" */
    .header-eduverse .nav-panel-eduverse {
        background-color: rgba(var(--card-bg-light-edu2-rgb, 255, 255, 255), 0.5);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        padding: 6px 8px;
        /* Padding panel lebih kecil */
        border-radius: 6px;
        /* Sudut sedikit membulat */
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(var(--border-light-edu2-rgb, 201, 214, 226), 0.5);
        /* Border halus */
        transition: background-color 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    /* Komentar CSS: Variabel RGB untuk border */
    body {
        --border-light-edu2-rgb: 201, 214, 226;
    }

    body.dark-mode {
        --border-dark-edu2-rgb: 42, 64, 90;
    }


    body.dark-mode .header-eduverse .nav-panel-eduverse {
        background-color: rgba(var(--card-bg-dark-edu2-rgb, 23, 42, 69), 0.6);
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.22);
        border-color: rgba(var(--border-dark-edu2-rgb, 42, 64, 90), 0.6);
    }

    .header-eduverse .nav-link-eduverse {
        font-family: 'Orbitron', sans-serif;
        /* Font techy untuk link */
        font-weight: 500;
        font-size: 0.85rem;
        /* Ukuran link lebih kecil */
        color: var(--text-light-edu2) !important;
        margin: 0 5px;
        /* Jarak antar link lebih rapat */
        padding: 6px 10px !important;
        position: relative;
        transition: color 0.3s ease, background-color 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        border-radius: 4px;
        border: 1px solid transparent;
        /* Untuk efek hover */
    }

    /* Efek hover: "Digital Button" */
    .header-eduverse .nav-link-eduverse:hover,
    .header-eduverse .nav-link-eduverse.active {
        color: var(--accent-edu2) !important;
        background-color: rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.1);
        /* var(--accent-edu2) dengan alpha */
        border-color: var(--accent-edu2);
        box-shadow: 0 0 8px rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.3);
    }

    /* Komentar CSS: Variabel RGB untuk accent-edu2 */
    body {
        --accent-edu2-rgb: 78, 205, 196;
    }

    body.dark-mode {
        --accent-edu2-dark-rgb: 111, 255, 233;
    }


    body.dark-mode .header-eduverse .nav-link-eduverse {
        color: var(--text-dark-edu2) !important;
    }

    body.dark-mode .header-eduverse .nav-link-eduverse:hover,
    body.dark-mode .header-eduverse .nav-link-eduverse.active {
        color: var(--accent-edu2-dark) !important;
        background-color: rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.15);
        border-color: var(--accent-edu2-dark);
        box-shadow: 0 0 8px rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.3);
    }

    .header-eduverse .navbar-toggler-eduverse {
        border: 1px solid var(--primary-edu2);
        padding: .3rem .6rem;
    }

    .header-eduverse .navbar-toggler-eduverse .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 119, 204, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-eduverse .navbar-toggler-eduverse {
        border-color: var(--primary-edu2-dark);
    }

    body.dark-mode .header-eduverse .navbar-toggler-eduverse .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(51, 161, 255, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Offcanvas menu untuk mobile */
    .offcanvas-header-eduverse,
    .offcanvas-body-eduverse {
        background-color: var(--bg-light-edu2);
        transition: background-color 0.3s ease;
    }

    .offcanvas-header-eduverse {
        border-bottom: 1px solid var(--border-light-edu2);
    }

    body.dark-mode .offcanvas-header-eduverse,
    body.dark-mode .offcanvas-body-eduverse {
        background-color: var(--bg-dark-edu2);
    }

    body.dark-mode .offcanvas-header-eduverse {
        border-bottom-color: var(--border-dark-edu2);
    }

    .offcanvas-title-eduverse {
        color: var(--primary-edu2);
        font-family: 'Orbitron', sans-serif;
    }

    body.dark-mode .offcanvas-title-eduverse {
        color: var(--primary-edu2-dark);
    }

    .offcanvas-body-eduverse .nav-link-eduverse {
        margin-bottom: 10px;
        display: block;
        text-align: left;
        padding-left: 5px !important;
    }
</style>

<header id="headerEduverse" class="header-eduverse">
    <div class="container-fluid">
        <a class="navbar-brand-eduverse" href="index.php">
            <i class="fas fa-atom logo-icon-ev"></i> <?php /* Ikon atom atau ikon tech lainnya */ ?>
            EduVerse
        </a>

        <?php /* Komentar PHP: Navigasi Desktop sebagai Panel Mengambang */ ?>
        <nav class="nav-panel-eduverse d-none d-lg-flex">
            <ul class="navbar-nav flex-row">
                <li class="nav-item">
                    <a class="nav-link nav-link-eduverse active" aria-current="page" href="#heroPendidikanEduverseInteractive">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-eduverse" href="#tentangKamiPendidikanDigital">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-eduverse" href="#programStudiFuturistik">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-eduverse" href="#labVirtualPendidikan">Lab Virtual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-eduverse" href="#eventWebinarPendidikan">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-eduverse" href="#kontakPendidikanInteraktifOsm">Kontak</a>
                </li>
            </ul>
        </nav>

        <?php /* Komentar PHP: Tombol Toggler untuk Mobile */ ?>
        <button class="navbar-toggler navbar-toggler-eduverse d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarEduverse" aria-controls="offcanvasNavbarEduverse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php /* Komentar PHP: Offcanvas untuk Navigasi Mobile */ ?>
        <div class="offcanvas offcanvas-end offcanvas-header-eduverse" tabindex="-1" id="offcanvasNavbarEduverse" aria-labelledby="offcanvasNavbarEduverseLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title offcanvas-title-eduverse" id="offcanvasNavbarEduverseLabel">Menu EduVerse</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-eduverse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-eduverse active" aria-current="page" href="#heroPendidikanEduverseInteractive" data-bs-dismiss="offcanvas">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-eduverse" href="#tentangKamiPendidikanDigital" data-bs-dismiss="offcanvas">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-eduverse" href="#programStudiFuturistik" data-bs-dismiss="offcanvas">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-eduverse" href="#labVirtualPendidikan" data-bs-dismiss="offcanvas">Lab Virtual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-eduverse" href="#eventWebinarPendidikan" data-bs-dismiss="offcanvas">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-eduverse" href="#testimoniAlumniDigital" data-bs-dismiss="offcanvas">Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-eduverse" href="#kontakPendidikanInteraktifOsm" data-bs-dismiss="offcanvas">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header EduVerse
        const headerEduverse = document.getElementById('headerEduverse');
        const navLinksEduverse = document.querySelectorAll('.nav-link-eduverse');
        const sectionsEduverse = document.querySelectorAll('section[id]');

        // Komentar JavaScript: Efek header saat scroll (jika ingin header berubah saat scroll)
        // Untuk desain header yang fixed di atas dengan jarak, efek .scrolled mungkin tidak terlalu signifikan
        // kecuali untuk mengubah background atau shadow jika diinginkan.
        if (headerEduverse) {
            const headerScrollEffectEduverse = () => {
                if (window.scrollY > 30) { // Threshold kecil karena header sudah "mengambang"
                    headerEduverse.classList.add('scrolled');
                } else {
                    headerEduverse.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScrollEffectEduverse);
            document.addEventListener('scroll', headerScrollEffectEduverse);
        }

        // Komentar JavaScript: Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkEduverse() {
            let currentSectionId = '';
            const headerHeight = (headerEduverse ? headerEduverse.offsetHeight : 80) + (headerEduverse && headerEduverse.classList.contains('scrolled') ? 0 : 20); // Perhitungkan top saat tidak scrolled
            const scrollPosition = window.pageYOffset + headerHeight + 70;

            sectionsEduverse.forEach(section => {
                if (section && typeof section.offsetTop !== 'undefined' && section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksEduverse.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkEduverse);
        window.addEventListener('load', updateActiveNavLinkEduverse);

        // Komentar JavaScript: Smooth scroll untuk semua link nav
        navLinksEduverse.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerEduverse ? headerEduverse.offsetHeight : 80) + (headerEduverse && headerEduverse.classList.contains('scrolled') ? 0 : 20);
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const offcanvasElement = document.getElementById('offcanvasNavbarEduverse');
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