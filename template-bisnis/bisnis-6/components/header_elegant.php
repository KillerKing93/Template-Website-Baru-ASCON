<?php // File: components/header_elegant.php 
?>
<style>
    /* Elegant Header Component Styles */
    .header-elegant {
        padding: 20px 0;
        background-color: rgba(255, 255, 255, 0.9);
        /* Latar semi-transparan light */
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 0;
        z-index: 1020;
        transition: background-color 0.4s ease, box-shadow 0.4s ease, padding 0.4s ease;
    }

    .header-elegant.scrolled {
        /* Style saat di-scroll */
        padding: 15px 0;
        background-color: rgba(255, 255, 255, 0.98);
        /* Lebih solid */
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
    }

    body.dark-mode .header-elegant {
        background-color: rgba(26, 26, 46, 0.85);
        /* var(--bg-dark) dengan alpha */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    body.dark-mode .header-elegant.scrolled {
        background-color: rgba(26, 26, 46, 0.95);
        /* Lebih solid */
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.3);
    }


    .header-elegant .navbar-brand-elegant {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        /* Ukuran brand lebih besar */
        font-weight: 800;
        /* Sangat bold */
        color: var(--primary-luminous);
        text-decoration: none;
        transition: color 0.4s ease;
    }

    .header-elegant .navbar-brand-elegant i {
        /* Ikon logo */
        margin-right: 10px;
        color: var(--secondary-luminous);
        transition: color 0.4s ease, transform 0.4s ease;
    }

    .header-elegant .navbar-brand-elegant:hover i {
        transform: rotate(15deg);
    }

    body.dark-mode .header-elegant .navbar-brand-elegant {
        color: var(--primary-luminous-dark);
    }

    body.dark-mode .header-elegant .navbar-brand-elegant i {
        color: var(--secondary-luminous-dark);
    }


    .header-elegant .nav-link-elegant {
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        /* Teks nav lebih bold */
        font-size: 1.05rem;
        /* Sedikit lebih besar */
        color: var(--text-light) !important;
        margin: 0 15px;
        /* Jarak antar link */
        padding: 10px 0 !important;
        position: relative;
        transition: color 0.4s ease;
        text-transform: capitalize;
        /* Huruf awal besar */
    }

    .header-elegant .nav-link-elegant::after {
        /* Garis bawah elegan */
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        /* Mulai dari kiri */
        background-color: var(--secondary-luminous);
        transition: width 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .header-elegant .nav-link-elegant:hover::after,
    .header-elegant .nav-link-elegant.active::after {
        width: 100%;
    }

    .header-elegant .nav-link-elegant:hover,
    .header-elegant .nav-link-elegant.active {
        color: var(--primary-luminous) !important;
    }

    body.dark-mode .header-elegant .nav-link-elegant {
        color: var(--text-dark) !important;
    }

    body.dark-mode .header-elegant .nav-link-elegant::after {
        background-color: var(--secondary-luminous-dark);
    }

    body.dark-mode .header-elegant .nav-link-elegant:hover,
    body.dark-mode .header-elegant .nav-link-elegant.active {
        color: var(--primary-luminous-dark) !important;
    }

    .header-elegant .navbar-toggler-elegant {
        border-color: rgba(138, 43, 226, 0.3);
        /* var(--primary-luminous) dengan alpha */
    }

    .header-elegant .navbar-toggler-elegant .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(138, 43, 226, 0.7)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-elegant .navbar-toggler-elegant {
        border-color: rgba(160, 96, 255, 0.4);
        /* var(--primary-luminous-dark) dengan alpha */
    }

    body.dark-mode .header-elegant .navbar-toggler-elegant .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(160, 96, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
</style>

<header id="headerElegant" class="header-elegant">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0"> <?php /* Hapus class bg-light/dark bawaan Bootstrap */ ?>
            <a class="navbar-brand-elegant" href="index.php">
                <i class="fas fa-gem"></i> AuroraCorp
            </a>
            <button class="navbar-toggler navbar-toggler-elegant" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavElegant" aria-controls="navbarNavElegant" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavElegant">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-elegant active" aria-current="page" href="#heroLuminous">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-elegant" href="#aboutRefined">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-elegant" href="#servicesShowcaseElegant">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-elegant" href="#portfolioGridFilterLuminous">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-elegant" href="#blogHighlightsElegant">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-elegant" href="#contactOsmElegant">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header elegant
        const headerElegant = document.getElementById('headerElegant');
        const navLinksElegant = document.querySelectorAll('#headerElegant .nav-link-elegant');
        const sectionsElegant = document.querySelectorAll('section[id]'); // Asumsi semua section target punya ID

        // Efek header saat scroll
        if (headerElegant) {
            const headerScrollEffect = () => {
                if (window.scrollY > 80) { // Atur threshold scroll
                    headerElegant.classList.add('scrolled');
                } else {
                    headerElegant.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScrollEffect);
            document.addEventListener('scroll', headerScrollEffect);
        }

        // Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkElegant() {
            let currentSectionId = '';
            // Offset sedikit lebih besar agar link aktif saat section lebih terlihat
            const scrollPosition = window.pageYOffset + (headerElegant ? headerElegant.offsetHeight : 80) + 100;

            sectionsElegant.forEach(section => {
                if (section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksElegant.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveNavLinkElegant);
        window.addEventListener('load', updateActiveNavLinkElegant);

        // Smooth scroll untuk semua link nav
        navLinksElegant.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerElegant ? headerElegant.offsetHeight : 80) + 5; // Offset tambahan
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        // Tutup navbar mobile jika terbuka
                        const navbarCollapse = document.getElementById('navbarNavElegant');
                        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                            new bootstrap.Collapse(navbarCollapse).hide();
                        }
                    }
                }
            });
        });
    });
</script>