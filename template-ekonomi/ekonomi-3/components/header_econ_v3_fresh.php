<?php // File: components_econ_v3_fresh/header_econ_v3_fresh.php - Header Aetherium Finance (Fresh) 
?>
<style>
    /* Styles untuk Header Aetherium Finance */
    .header-aether-v3 {
        background-color: rgba(var(--bg-light-aether-rgb), 0.9);
        /* Latar semi-transparan lebih solid */
        backdrop-filter: blur(8px);
        /* Blur lebih halus */
        -webkit-backdrop-filter: blur(8px);
        box-shadow: 0 1px 5px rgba(var(--primary-aether-rgb), 0.06);
        transition: background-color 0.3s ease, padding 0.3s ease, box-shadow 0.3s ease;
        border-bottom: 1px solid var(--border-light-aether);
        padding: 12px 0;
        /* Padding awal sedikit dikurangi */
    }

    .header-aether-v3.scrolled {
        background-color: rgba(var(--bg-light-aether-rgb), 0.98);
        /* Lebih solid saat scroll */
        box-shadow: 0 2px 8px rgba(var(--primary-aether-rgb), 0.09);
        padding: 10px 0;
    }

    body.dark-mode .header-aether-v3 {
        background-color: rgba(var(--card-bg-dark-aether-rgb), 0.9);
        box-shadow: 0 1px 5px rgba(var(--primary-aether-dark-rgb), 0.1);
        border-bottom: 1px solid var(--border-dark-aether);
    }

    body.dark-mode .header-aether-v3.scrolled {
        background-color: rgba(var(--card-bg-dark-aether-rgb), 0.98);
        box-shadow: 0 2px 8px rgba(var(--primary-aether-dark-rgb), 0.15);
    }

    .header-aether-v3 .navbar-brand-aether .logo-icon-aether {
        color: var(--primary-aether);
        font-size: 1.8em;
        /* Ukuran ikon disesuaikan */
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), color 0.3s ease;
        display: inline-block;
    }

    .header-aether-v3 .navbar-brand-aether:hover .logo-icon-aether {
        transform: rotate(10deg) scale(1.07);
        /* Efek hover lebih subtle */
        color: var(--secondary-aether);
    }

    body.dark-mode .header-aether-v3 .navbar-brand-aether .logo-icon-aether {
        color: var(--primary-aether-dark);
    }

    body.dark-mode .header-aether-v3 .navbar-brand-aether:hover .logo-icon-aether {
        color: var(--secondary-aether-dark);
    }

    .header-aether-v3 .navbar-brand-aether .brand-text-header-aether {
        color: var(--text-light-aether);
        transition: color 0.3s ease;
        font-weight: 700;
        font-size: 1.5rem;
        margin-left: 7px;
        letter-spacing: 0.2px;
    }

    body.dark-mode .header-aether-v3 .navbar-brand-aether .brand-text-header-aether {
        color: var(--text-dark-aether);
    }

    .header-aether-v3 .nav-link-aether {
        color: var(--muted-text-light-aether) !important;
        font-weight: 500;
        /* Font weight lebih ringan untuk link */
        font-size: 0.85rem;
        padding: 0.5rem 0.85rem !important;
        position: relative;
        transition: color 0.25s ease;
        /* Transisi warna lebih cepat */
        border-radius: 4px;
        margin: 0 2px;
        /* Jarak antar link lebih kecil */
        font-family: 'Source Code Pro', monospace;
        text-transform: uppercase;
    }

    .header-aether-v3 .nav-link-aether::after {
        content: '';
        position: absolute;
        bottom: 0px;
        left: 0;
        width: 0%;
        height: 1.5px;
        /* Garis bawah lebih tipis */
        background-color: var(--accent-aether);
        transition: width 0.25s ease-in-out;
    }

    .header-aether-v3 .nav-link-aether::before {
        content: '';
        position: absolute;
        bottom: 3px;
        left: 1px;
        width: 0%;
        height: 0.8px;
        background-color: var(--secondary-aether);
        opacity: 0.55;
        transition: width 0.3s ease-in-out 0.05s;
    }

    .header-aether-v3 .nav-link-aether:hover,
    .header-aether-v3 .nav-link-aether.active {
        color: var(--primary-aether) !important;
    }

    .header-aether-v3 .nav-link-aether:hover::after,
    .header-aether-v3 .nav-link-aether.active::after {
        width: 100%;
    }

    .header-aether-v3 .nav-link-aether:hover::before,
    .header-aether-v3 .nav-link-aether.active::before {
        width: 95%;
    }

    body.dark-mode .header-aether-v3 .nav-link-aether {
        color: var(--muted-text-dark-aether) !important;
    }

    body.dark-mode .header-aether-v3 .nav-link-aether::after {
        background-color: var(--accent-aether-dark);
    }

    body.dark-mode .header-aether-v3 .nav-link-aether::before {
        background-color: var(--secondary-aether-dark);
    }

    body.dark-mode .header-aether-v3 .nav-link-aether:hover,
    body.dark-mode .header-aether-v3 .nav-link-aether.active {
        color: var(--primary-aether-dark) !important;
    }

    .header-aether-v3 .btn-contact-header-aether {
        padding: 0.5rem 1.1rem;
        font-size: 0.8rem;
        letter-spacing: 0.7px;
    }

    .offcanvas-header-aether {
        border-bottom: 1px solid var(--border-light-aether);
        background-color: var(--bg-light-aether);
    }

    .offcanvas-body-aether {
        background-color: var(--bg-light-aether);
    }

    body.dark-mode .offcanvas-header-aether {
        background-color: var(--bg-dark-aether);
        border-bottom-color: var(--border-dark-aether);
    }

    body.dark-mode .offcanvas-body-aether {
        background-color: var(--bg-dark-aether);
    }

    body.dark-mode .offcanvas-header-aether .btn-close {
        filter: invert(1) grayscale(100%) brightness(200%);
    }

    .offcanvas-title-aether {
        color: var(--primary-aether);
        font-weight: 700;
    }

    body.dark-mode .offcanvas-title-aether {
        color: var(--primary-aether-dark);
    }
</style>

<header id="headerAetherium" class="header-aether-v3 sticky-top">
    <nav class="container navbar navbar-expand-lg">
        <a class="navbar-brand-aether navbar-brand d-flex align-items-center" href="index.php">
            <i class="fas fa-atom logo-icon-aether"></i>
            <span class="font-source-code brand-text-header-aether">Aetherium</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarAetherV3" aria-controls="offcanvasNavbarAetherV3" aria-label="Toggle navigation"> <?php // ID Offcanvas Unik 
                                                                                                                                                                                                    ?>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarAetherV3" aria-labelledby="offcanvasNavbarAetherV3Label"> <?php // ID Offcanvas Unik 
                                                                                                                                        ?>
            <div class="offcanvas-header offcanvas-header-aether">
                <h5 class="offcanvas-title offcanvas-title-aether font-source-code" id="offcanvasNavbarAetherV3Label">Aetherium Nav</h5> <?php // ID Label Unik 
                                                                                                                                            ?>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-aether">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-link-aether active" aria-current="page" href="#heroAether">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-aether" href="#aboutAether">Filosofi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-aether" href="#servicesAether">Solusi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-aether" href="#marketDataAether">Data Pasar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-aether" href="#contactAether">Kontak</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a href="#contactAether" class="btn-aether-primary btn-contact-header-aether">Diskusi Proyek</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const headerAetherV3 = document.getElementById('headerAetherium'); // Pastikan ID ini unik jika ada header lain di halaman
        const navLinksAetherV3 = document.querySelectorAll('#headerAetherium .nav-link-aether');
        const sectionsAetherV3 = document.querySelectorAll('section[id]');

        if (headerAetherV3) {
            const headerScrollEffect = () => {
                if (window.scrollY > 30) { // Threshold scroll lebih kecil
                    headerAetherV3.classList.add('scrolled');
                } else {
                    headerAetherV3.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScrollEffect);
            document.addEventListener('scroll', headerScrollEffect);
        }

        function updateActiveNavLinkAetherV3() { // Nama fungsi unik
            if (!headerAetherV3 || sectionsAetherV3.length === 0) return;

            let currentSectionId = sectionsAetherV3[0].id;
            if (window.pageYOffset < sectionsAetherV3[0].offsetTop - headerAetherV3.offsetHeight - 70) {
                currentSectionId = sectionsAetherV3[0].id;
            } else {
                currentSectionId = sectionsAetherV3[0].id;
            }

            const headerHeight = headerAetherV3.offsetHeight;
            const scrollThreshold = window.innerHeight * 0.3;
            const scrollPosition = window.pageYOffset + headerHeight + scrollThreshold;

            for (let i = sectionsAetherV3.length - 1; i >= 0; i--) {
                const section = sectionsAetherV3[i];
                if (section && typeof section.offsetTop !== 'undefined' && section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                    break;
                }
            }

            if ((window.innerHeight + Math.ceil(window.pageYOffset)) >= document.body.offsetHeight - 10 && sectionsAetherV3.length > 0) {
                const lastSection = sectionsAetherV3[sectionsAetherV3.length - 1];
                if (lastSection) currentSectionId = lastSection.id;
            }

            navLinksAetherV3.forEach(link => {
                link.classList.remove('active');
                const linkHref = link.getAttribute('href');
                if (linkHref && linkHref.substring(1) === currentSectionId) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkAetherV3);
        window.addEventListener('load', updateActiveNavLinkAetherV3);

        navLinksAetherV3.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const headerOffset = headerAetherV3 ? headerAetherV3.offsetHeight : 70;
                        let elementPosition = targetElement.offsetTop;
                        let offsetPosition = elementPosition - headerOffset;

                        if (targetId !== sectionsAetherV3[0].id) {
                            offsetPosition -= 18; // Penyesuaian offset scroll
                        }

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const offcanvasElement = document.getElementById('offcanvasNavbarAetherV3'); // ID Offcanvas Unik
                        if (offcanvasElement && link.closest('.offcanvas')) {
                            const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasElement);
                            if (offcanvasInstance && offcanvasElement.classList.contains('show')) {
                                offcanvasInstance.hide();
                            }
                        }
                    }
                }
            });
        });
    });
</script>