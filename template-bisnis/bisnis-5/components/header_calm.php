<?php // File: components/header_calm.php 
?>
<style>
    /* Calm Header Component Styles */
    .header-calm {
        padding: 15px 0;
        background-color: var(--card-bg-light);
        /* Default light mode */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        position: sticky;
        /* Atau fixed jika diinginkan */
        top: 0;
        z-index: 1020;
    }

    body.dark-mode .header-calm {
        background-color: var(--card-bg-dark);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .header-calm .navbar-brand-calm {
        font-family: 'Raleway', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-calm);
        /* Warna brand */
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .header-calm .navbar-brand-calm i {
        margin-right: 8px;
        color: var(--secondary-calm);
        /* Ikon dengan warna sekunder */
    }

    body.dark-mode .header-calm .navbar-brand-calm {
        color: var(--accent-calm);
    }

    body.dark-mode .header-calm .navbar-brand-calm i {
        color: var(--accent-calm);
        opacity: 0.8;
    }


    .header-calm .nav-link-calm {
        font-family: 'Raleway', sans-serif;
        font-weight: 500;
        color: var(--text-light) !important;
        /* Teks nav */
        margin-left: 12px;
        margin-right: 12px;
        padding: 8px 0 !important;
        position: relative;
        transition: color 0.3s ease;
    }

    .header-calm .nav-link-calm::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--secondary-calm);
        transition: width 0.3s ease;
    }

    .header-calm .nav-link-calm:hover::after,
    .header-calm .nav-link-calm.active::after {
        width: 60%;
    }

    .header-calm .nav-link-calm:hover,
    .header-calm .nav-link-calm.active {
        color: var(--primary-calm) !important;
    }

    body.dark-mode .header-calm .nav-link-calm {
        color: var(--text-dark) !important;
    }

    body.dark-mode .header-calm .nav-link-calm::after {
        background-color: var(--accent-calm);
    }

    body.dark-mode .header-calm .nav-link-calm:hover,
    body.dark-mode .header-calm .nav-link-calm.active {
        color: var(--accent-calm) !important;
    }

    .header-calm .navbar-toggler-calm {
        border-color: rgba(var(--primary-calm-rgb, 108, 117, 125), 0.3);
    }

    .header-calm .navbar-toggler-calm .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(108, 117, 125, 0.7)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    body.dark-mode .header-calm .navbar-toggler-calm {
        border-color: rgba(var(--accent-calm-rgb, 244, 162, 97), 0.4);
    }

    body.dark-mode .header-calm .navbar-toggler-calm .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(244, 162, 97, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
</style>

<header id="headerCalm" class="header-calm">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
            <a class="navbar-brand-calm" href="index.php">
                <i class="fas fa-leaf"></i> NamaBisnis
            </a>
            <button class="navbar-toggler navbar-toggler-calm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavCalm" aria-controls="navbarNavCalm" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavCalm">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-calm active" aria-current="page" href="#heroSerene">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-calm" href="#aboutGentle">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-calm" href="#servicesMinimalist">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-calm" href="#portfolioSubtle">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-calm" href="#contactOsmMap">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Logika untuk header calm
        const headerCalm = document.getElementById('headerCalm');
        const navLinksCalm = document.querySelectorAll('#headerCalm .nav-link-calm');
        const sectionsCalm = document.querySelectorAll('section[id]');

        // Fungsi untuk memperbarui link aktif saat scroll
        function updateActiveNavLinkCalm() {
            let currentSectionId = '';
            const scrollPosition = window.pageYOffset + (headerCalm ? headerCalm.offsetHeight : 70) + 50;

            sectionsCalm.forEach(section => {
                if (section.offsetTop <= scrollPosition) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinksCalm.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        // Panggil saat scroll dan load
        window.addEventListener('scroll', updateActiveNavLinkCalm);
        window.addEventListener('load', updateActiveNavLinkCalm);

        // Smooth scroll untuk semua link nav
        navLinksCalm.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = (headerCalm ? headerCalm.offsetHeight : 70) + 10; // Offset tambahan
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        // Tutup navbar mobile jika terbuka (jika menggunakan Bootstrap collapse)
                        const navbarCollapse = document.getElementById('navbarNavCalm');
                        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                            new bootstrap.Collapse(navbarCollapse).hide();
                        }
                    }
                }
            });
        });
    });
</script>