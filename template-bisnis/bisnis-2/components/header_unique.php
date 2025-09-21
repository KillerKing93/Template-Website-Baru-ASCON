<?php // File: components/header_unique.php 
?>
<style>
    /* Unique Header Component Styles */
    .header-unique {
        transition: all 0.5s ease;
        padding: 20px 0;
        position: fixed;
        /* Atau sticky, tergantung preferensi */
        width: 100%;
        z-index: 1000;
        background-color: rgba(255, 255, 255, 0.9);
        /* Latar belakang transparan saat di atas */
        backdrop-filter: blur(10px);
        /* Efek glassmorphism */
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
    }

    .header-unique.scrolled {
        padding: 10px 0;
        background-color: rgba(255, 255, 255, 0.98);
        /* Lebih solid saat di-scroll */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .header-unique .navbar-brand {
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem;
        /* Lebih besar */
        font-weight: 800;
        color: #007BFF;
        /* Warna brand utama */
        transition: font-size 0.3s ease;
    }

    .header-unique.scrolled .navbar-brand {
        font-size: 1.75rem;
        /* Mengecil saat di-scroll */
    }

    .header-unique .navbar-brand i {
        margin-right: 10px;
        transform: rotate(-15deg);
        /* Sedikit miring untuk keunikan */
        transition: transform 0.3s ease;
    }

    .header-unique.scrolled .navbar-brand i {
        transform: rotate(0deg);
    }


    .header-unique .nav-link {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        color: #2C3E50 !important;
        /* Warna link yang kuat */
        margin-left: 15px;
        margin-right: 15px;
        position: relative;
        padding-bottom: 8px !important;
        /* Ruang untuk garis bawah animasi */
        transition: color 0.3s ease;
    }

    .header-unique .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        /* Garis bawah lebih tebal */
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: #007BFF;
        transition: width 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        /* Transisi smooth */
    }

    .header-unique .nav-link:hover::after,
    .header-unique .nav-link.active::after {
        width: 70%;
        /* Garis bawah muncul saat hover/active */
    }

    .header-unique .nav-link:hover,
    .header-unique .nav-link.active {
        color: #007BFF !important;
        /* Warna aksen saat hover/active */
    }

    .header-unique .navbar-toggler {
        border: none;
        color: #007BFF;
    }

    .header-unique .navbar-toggler:focus {
        box-shadow: none;
    }

    .header-unique .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 123, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Tombol CTA di Navbar */
    .header-unique .btn-cta-nav {
        margin-left: 20px;
        padding: 8px 20px;
        font-size: 0.9rem;
    }
</style>

<header id="headerUnique" class="header-unique">
    <div class="container d-flex align-items-center justify-content-between">
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-rocket"></i> NamaBisnis
        </a>

        <nav class="navbar navbar-expand-lg p-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavUnique" aria-controls="navbarNavUnique" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavUnique">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#heroComplex">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutDetailed">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicesInteractive">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolioGallery">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blogPreview">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactEnhanced">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contactEnhanced" class="btn btn-custom-primary btn-cta-nav d-none d-lg-inline-block">Mulai Proyek</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('headerUnique');
        const navLinks = document.querySelectorAll('#headerUnique .nav-link');
        const sections = document.querySelectorAll('section[id]'); // Asumsi semua section target punya ID

        function updateActiveLink() {
            let currentSectionId = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                // Beri sedikit offset agar link aktif sebelum section persis di atas
                if (pageYOffset >= (sectionTop - header.offsetHeight - 50)) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }

        if (header) {
            const headerScroll = () => {
                if (window.scrollY > 80) { // Atur threshold scroll
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScroll);
            document.addEventListener('scroll', headerScroll);
            document.addEventListener('scroll', updateActiveLink);
            window.addEventListener('load', updateActiveLink); // Panggil saat load juga
        }

        // Smooth scroll untuk semua link nav
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        const headerOffset = header.offsetHeight + 20; // Offset tambahan
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: "smooth"
                        });

                        // Tutup navbar mobile jika terbuka
                        const navbarCollapse = document.getElementById('navbarNavUnique');
                        if (navbarCollapse.classList.contains('show')) {
                            new bootstrap.Collapse(navbarCollapse).hide();
                        }
                    }
                }
            });
        });
    });
</script>