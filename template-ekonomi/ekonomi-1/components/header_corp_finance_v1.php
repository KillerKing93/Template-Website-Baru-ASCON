<?php // File: components_econ_v1/header_corp_finance_v1.php - Header Perusahaan Ekonomi (Perbaikan V2) 
?>
<style>
    /* Styles untuk Header Perusahaan Ekonomi */
    .header-econ-v1 {
        background-color: rgba(var(--bg-light-econ-rgb), 0.97);
        /* Lebih solid, sedikit transparan */
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07);
        transition: background-color 0.3s ease, padding 0.3s ease, box-shadow 0.3s ease;
        border-bottom: 1px solid var(--border-light-econ);
    }

    body.dark-mode .header-econ-v1 {
        background-color: rgba(var(--card-bg-dark-econ-rgb), 0.97);
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.25);
        border-bottom: 1px solid var(--border-dark-econ);
    }

    .header-econ-v1 .navbar-brand-econ .logo-icon-econ {
        color: var(--primary-econ);
        font-size: 1.6em;
        transition: transform 0.3s cubic-bezier(0.68, -0.55, 0.27, 1.55);
    }

    .header-econ-v1 .navbar-brand-econ:hover .logo-icon-econ {
        transform: rotate(12deg) scale(1.08);
    }

    body.dark-mode .header-econ-v1 .navbar-brand-econ .logo-icon-econ {
        color: var(--primary-econ-dark);
    }

    .header-econ-v1 .navbar-brand-econ .brand-text-header {
        color: var(--text-light-econ);
        transition: color 0.3s ease;
        font-weight: 700;
        /* Nama brand lebih tegas */
    }

    body.dark-mode .header-econ-v1 .navbar-brand-econ .brand-text-header {
        color: var(--text-dark-econ);
    }

    .header-econ-v1 .nav-link-econ {
        color: var(--muted-text-light-econ) !important;
        font-weight: 500;
        padding: 0.45rem 0.85rem !important;
        position: relative;
        transition: color 0.3s ease, background-color 0.3s ease;
        border-radius: 4px;
    }

    .header-econ-v1 .nav-link-econ::after {
        content: '';
        position: absolute;
        bottom: -1px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background-color: var(--secondary-econ);
        transition: width 0.25s ease-in-out;
        /* Transisi lebih cepat */
        border-radius: 1px;
    }

    .header-econ-v1 .nav-link-econ:hover,
    .header-econ-v1 .nav-link-econ.active {
        color: var(--primary-econ) !important;
        background-color: rgba(var(--primary-econ-rgb), 0.07);
    }

    .header-econ-v1 .nav-link-econ:hover::after,
    .header-econ-v1 .nav-link-econ.active::after {
        width: 55%;
    }

    body.dark-mode .header-econ-v1 .nav-link-econ {
        color: var(--muted-text-dark-econ) !important;
    }

    body.dark-mode .header-econ-v1 .nav-link-econ::after {
        background-color: var(--secondary-econ-dark);
    }

    body.dark-mode .header-econ-v1 .nav-link-econ:hover,
    body.dark-mode .header-econ-v1 .nav-link-econ.active {
        color: var(--primary-econ-dark) !important;
        background-color: rgba(var(--primary-econ-dark-rgb), 0.12);
    }

    .header-econ-v1 .btn-request-quote {
        padding: 0.4rem 1rem;
        font-size: 0.8rem;
    }

    .offcanvas-header-econ {
        border-bottom: 1px solid var(--border-light-econ);
        background-color: var(--bg-light-econ);
    }

    .offcanvas-body-econ {
        background-color: var(--bg-light-econ);
    }

    body.dark-mode .offcanvas-header-econ {
        background-color: var(--bg-dark-econ);
        /* Background offcanvas header dark */
        border-bottom-color: var(--border-dark-econ);
    }

    body.dark-mode .offcanvas-body-econ {
        background-color: var(--bg-dark-econ);
        /* Background offcanvas body dark */
    }

    body.dark-mode .offcanvas-header-econ .btn-close {
        filter: invert(1) grayscale(100%) brightness(200%);
    }

    .offcanvas-title-econ {
        color: var(--primary-econ);
    }

    body.dark-mode .offcanvas-title-econ {
        color: var(--primary-econ-dark);
    }
</style>

<header id="headerCorpFinance" class="header-econ-v1 sticky-top py-2">
    <nav class="container navbar navbar-expand-lg">
        <a class="navbar-brand-econ navbar-brand d-flex align-items-center" href="index.php">
            <i class="fas fa-chart-line logo-icon-econ me-2"></i>
            <span class="fs-4 font-oswald brand-text-header">QuantumLeap</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarCorp" aria-controls="offcanvasNavbarCorp" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarCorp" aria-labelledby="offcanvasNavbarCorpLabel">
            <div class="offcanvas-header offcanvas-header-econ">
                <h5 class="offcanvas-title offcanvas-title-econ font-oswald" id="offcanvasNavbarCorpLabel">Menu Navigasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-body-econ">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-link-econ active" aria-current="page" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-econ" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-econ" href="#services">Layanan</a>
                    </li>
                    <?php /* Komentar: Asumsi section #insights akan dibuat atau sudah ada */ ?>
                    <li class="nav-item">
                        <a class="nav-link nav-link-econ" href="#insights">Wawasan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-econ" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a href="#contact" class="btn-econ-accent btn-request-quote">Minta Penawaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const headerCorpFinance = document.getElementById('headerCorpFinance');
        const navLinksCorp = document.querySelectorAll('#headerCorpFinance .nav-link-econ');
        const sectionsCorp = document.querySelectorAll('section[id]');

        function updateActiveNavLinkCorp() {
            if (!headerCorpFinance || sectionsCorp.length === 0) return;

            let currentSectionId = "";
            // Default ke section pertama jika tidak ada yang aktif atau di paling atas
            if (window.pageYOffset < sectionsCorp[0].offsetTop - headerCorpFinance.offsetHeight - 100) {
                currentSectionId = sectionsCorp[0].id;
            } else {
                currentSectionId = sectionsCorp[0].id; // Default
            }

            const headerHeight = headerCorpFinance.offsetHeight;
            const scrollThreshold = window.innerHeight * 0.4; // 40% dari tinggi viewport
            const scrollPosition = window.pageYOffset + headerHeight + scrollThreshold;

            for (let i = sectionsCorp.length - 1; i >= 0; i--) {
                const section = sectionsCorp[i];
                if (section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                    break;
                }
            }

            if ((window.innerHeight + Math.ceil(window.pageYOffset)) >= document.body.offsetHeight - 2 && sectionsCorp.length > 0) {
                const lastSection = sectionsCorp[sectionsCorp.length - 1];
                if (lastSection) currentSectionId = lastSection.id;
            }

            navLinksCorp.forEach(link => {
                link.classList.remove('active');
                const linkHref = link.getAttribute('href');
                if (linkHref && linkHref.substring(1) === currentSectionId) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkCorp);
        window.addEventListener('load', updateActiveNavLinkCorp);

        navLinksCorp.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const headerOffset = headerCorpFinance ? headerCorpFinance.offsetHeight : 70;
                        let elementPosition = targetElement.offsetTop; // Gunakan offsetTop untuk posisi absolut
                        let offsetPosition = elementPosition - headerOffset;

                        if (targetId !== sectionsCorp[0].id) {
                            offsetPosition -= 20; // Penyesuaian offset tambahan untuk section selain hero
                        }

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        const offcanvasElement = document.getElementById('offcanvasNavbarCorp');
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