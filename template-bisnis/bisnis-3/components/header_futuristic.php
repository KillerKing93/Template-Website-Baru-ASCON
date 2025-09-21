<?php // File: components/header_futuristic.php 
?>
<style>
    /* Futuristic Header Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses atau definisikan ulang jika perlu */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --dark-bg: #121212;
        --card-bg: #1E1E1E;
    }

    .header-futuristic {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
        transition: background-color 0.4s ease, padding 0.4s ease, box-shadow 0.4s ease;
        padding: 25px 0;
        background-color: transparent;
        /* Awalnya transparan */
    }

    .header-futuristic.scrolled {
        background-color: rgba(18, 18, 18, 0.85);
        /* var(--dark-bg) dengan alpha */
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        padding: 15px 0;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
    }

    .header-futuristic .navbar-brand {
        font-family: 'Roboto Mono', monospace;
        /* Font khas techy */
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
        /* Putih agar kontras */
        letter-spacing: 1px;
        position: relative;
        text-decoration: none;
    }

    .header-futuristic .navbar-brand .logo-icon {
        color: var(--accent-color);
        margin-right: 8px;
        animation: rotateIcon 8s linear infinite;
        /* Animasi ikon logo */
    }

    @keyframes rotateIcon {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .header-futuristic .navbar-brand .cursor {
        /* Efek kursor ketik */
        display: inline-block;
        width: 3px;
        height: 1.8rem;
        /* Sesuaikan dengan font size brand */
        background-color: var(--accent-color);
        animation: blinkCursor 0.8s infinite;
        vertical-align: bottom;
        margin-left: 2px;
    }

    @keyframes blinkCursor {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }


    /* Styling untuk Fullscreen Overlay Menu */
    .fullscreen-menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(18, 18, 18, 0.97), rgba(30, 30, 30, 0.98));
        /* var(--dark-bg) & var(--card-bg) */
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        z-index: 1020;
        /* Di bawah header, di atas konten lain */
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.5s ease, visibility 0s linear 0.5s;
    }

    .fullscreen-menu-overlay.active {
        opacity: 1;
        visibility: visible;
        transition: opacity 0.5s ease, visibility 0s linear 0s;
    }

    .fullscreen-menu-overlay .nav-list-fullscreen {
        list-style: none;
        padding: 0;
        text-align: center;
    }

    .fullscreen-menu-overlay .nav-list-fullscreen .nav-item-fullscreen {
        margin: 20px 0;
        opacity: 0;
        /* Untuk animasi masuk */
        transform: translateY(20px);
    }

    .fullscreen-menu-overlay .nav-list-fullscreen .nav-link-fullscreen {
        font-family: 'Poppins', sans-serif;
        font-size: 2.5rem;
        /* Ukuran besar untuk menu overlay */
        font-weight: 700;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        display: inline-block;
        position: relative;
        transition: color 0.3s ease;
    }

    .fullscreen-menu-overlay .nav-link-fullscreen:hover {
        color: var(--accent-color);
    }

    .fullscreen-menu-overlay .nav-link-fullscreen::before {
        /* Efek garis hover */
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--accent-color);
        transition: width 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .fullscreen-menu-overlay .nav-link-fullscreen:hover::before {
        width: 70%;
    }

    .menu-toggler {
        /* Tombol burger/close */
        background: none;
        border: none;
        color: #fff;
        font-size: 2rem;
        /* Ukuran ikon burger */
        z-index: 1031;
        /* Di atas segalanya */
        position: relative;
        /* Agar z-index bekerja */
        cursor: pointer;
        padding: 5px;
        line-height: 1;
    }

    .menu-toggler:hover {
        color: var(--accent-color);
    }

    .menu-toggler .icon-menu,
    .menu-toggler .icon-close {
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .menu-toggler .icon-close {
        display: none;
        /* Awalnya sembunyikan ikon close */
    }

    /* Saat menu aktif, tampilkan ikon close dan sembunyikan burger */
    .menu-toggler.active .icon-menu {
        transform: rotate(45deg);
        opacity: 0;
        display: none;
    }

    .menu-toggler.active .icon-close {
        transform: rotate(0);
        opacity: 1;
        display: block;
    }

    /* Desktop Nav (sembunyikan jika overlay aktif atau di mobile) */
    .desktop-nav {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        /* Defaultnya tampil */
        align-items: center;
    }

    .desktop-nav .nav-item-desktop {
        margin-left: 25px;
    }

    .desktop-nav .nav-link-desktop {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        color: #EAEAEA !important;
        text-decoration: none;
        font-size: 1rem;
        padding: 5px 0;
        position: relative;
        transition: color 0.3s ease;
    }

    .desktop-nav .nav-link-desktop:hover {
        color: var(--accent-color) !important;
    }

    .desktop-nav .nav-link-desktop::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -3px;
        left: 0;
        background-color: var(--accent-color);
        transition: width 0.3s ease;
    }

    .desktop-nav .nav-link-desktop:hover::after,
    .desktop-nav .nav-link-desktop.active::after {
        width: 100%;
    }

    .header-futuristic .btn-contact-nav {
        margin-left: 30px;
        padding: 10px 25px;
        font-size: 0.9rem;
    }

    @media (max-width: 991.98px) {
        .desktop-nav {
            display: none;
            /* Sembunyikan nav desktop di mobile */
        }
    }

    @media (min-width: 992px) {
        .menu-toggler {
            display: none;
            /* Sembunyikan burger di desktop */
        }
    }
</style>

<header id="headerFuturistic" class="header-futuristic">
    <div class="container d-flex align-items-center justify-content-between">
        <a class="navbar-brand" href="index.php" data-aos="fade-right">
            <i class="fas fa-atom logo-icon"></i>Nama<span class="d-none d-sm-inline">Bisnis</span><span class="cursor"></span>
        </a>

        <!-- {/* Navigasi Desktop */} -->
        <nav class="d-none d-lg-block">
            <ul class="desktop-nav">
                <li class="nav-item-desktop"><a class="nav-link-desktop active" href="#heroInteractive3D">Beranda</a></li>
                <li class="nav-item-desktop"><a class="nav-link-desktop" href="#aboutStorytelling">Tentang</a></li>
                <li class="nav-item-desktop"><a class="nav-link-desktop" href="#servicesDynamicTabs">Layanan</a></li>
                <li class="nav-item-desktop"><a class="nav-link-desktop" href="#portfolioMasonryHover">Portfolio</a></li>
                <li class="nav-item-desktop"><a class="nav-link-desktop" href="#contactMapMulti">Kontak</a></li>
                <li><a href="#contactMapMulti" class="btn-futuristic-primary btn-contact-nav">Diskusi Proyek</a></li>
            </ul>
        </nav>

        <!-- {/* Tombol Burger Menu untuk Mobile & Tablet */} -->
        <button class="menu-toggler d-lg-none" id="menuToggler" aria-label="Toggle Navigation">
            <i class="fas fa-bars icon-menu"></i>
            <i class="fas fa-times icon-close"></i>
        </button>
    </div>
</header>

<!-- {/* Fullscreen Overlay Menu */} -->
<div class="fullscreen-menu-overlay" id="fullscreenMenu">
    <nav>
        <ul class="nav-list-fullscreen">
            <li class="nav-item-fullscreen"><a class="nav-link-fullscreen" href="#heroInteractive3D">Beranda</a></li>
            <li class="nav-item-fullscreen"><a class="nav-link-fullscreen" href="#aboutStorytelling">Tentang</a></li>
            <li class="nav-item-fullscreen"><a class="nav-link-fullscreen" href="#servicesDynamicTabs">Layanan</a></li>
            <li class="nav-item-fullscreen"><a class="nav-link-fullscreen" href="#portfolioMasonryHover">Portfolio</a></li>
            <li class="nav-item-fullscreen"><a class="nav-link-fullscreen" href="#timelineInteractive">Timeline</a></li>
            <li class="nav-item-fullscreen"><a class="nav-link-fullscreen" href="#contactMapMulti">Kontak</a></li>
        </ul>
    </nav>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('headerFuturistic');
        const menuToggler = document.getElementById('menuToggler');
        const fullscreenMenu = document.getElementById('fullscreenMenu');
        const fullscreenNavLinks = fullscreenMenu.querySelectorAll('.nav-link-fullscreen');
        const desktopNavLinks = document.querySelectorAll('.desktop-nav .nav-link-desktop');
        const sections = document.querySelectorAll('section[id]');


        // Efek brand name "diketik"
        const brandNameElement = document.querySelector('.header-futuristic .navbar-brand');
        if (brandNameElement) {
            const originalText = "NamaBisnis"; // Sesuaikan dengan nama brand Anda
            const shortText = "NB";
            let currentText = window.innerWidth < 576 ? shortText : originalText;

            const typeBrandName = () => {
                const textToType = window.innerWidth < 576 ? shortText : originalText;
                if (currentText !== textToType) { // Hanya ketik ulang jika teks berubah karena resize
                    currentText = textToType;
                    let i = 0;
                    const logoIconHTML = '<i class="fas fa-atom logo-icon"></i>';
                    const cursorHTML = '<span class="cursor"></span>';
                    brandNameElement.innerHTML = logoIconHTML + cursorHTML; // Reset dengan ikon

                    function type() {
                        if (i < textToType.length) {
                            brandNameElement.innerHTML = logoIconHTML + textToType.substring(0, i + 1) + cursorHTML;
                            i++;
                            setTimeout(type, 150); // Kecepatan ketik
                        } else {
                            // Biarkan kursor berkedip setelah selesai
                        }
                    }
                    type();
                }
            };

            typeBrandName(); // Panggil saat load
            let resizeTimer;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(typeBrandName, 250); // Panggil setelah resize selesai
            });
        }


        // Header scroll effect
        if (header) {
            const headerScroll = () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScroll);
            document.addEventListener('scroll', headerScroll);
        }

        // Fullscreen menu toggle
        if (menuToggler && fullscreenMenu) {
            menuToggler.addEventListener('click', function() {
                this.classList.toggle('active');
                fullscreenMenu.classList.toggle('active');
                document.body.style.overflow = fullscreenMenu.classList.contains('active') ? 'hidden' : '';

                // Animasi item menu saat overlay muncul
                if (fullscreenMenu.classList.contains('active')) {
                    anime({
                        targets: '.nav-item-fullscreen',
                        translateY: [20, 0],
                        opacity: [0, 1],
                        delay: anime.stagger(100, {
                            start: 300
                        }), // Staggered animation
                        easing: 'easeOutExpo'
                    });
                } else {
                    // Reset opacity dan transform jika diperlukan saat menu ditutup
                    document.querySelectorAll('.nav-item-fullscreen').forEach(item => {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                    });
                }
            });

            // Tutup menu saat link di klik
            fullscreenNavLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (fullscreenMenu.classList.contains('active')) {
                        menuToggler.classList.remove('active');
                        fullscreenMenu.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                });
            });
        }

        // Active link highlighting & smooth scroll untuk kedua jenis nav
        function smoothScrollToTarget(targetId, navType) {
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                const headerOffset = header.classList.contains('scrolled') ? (header.offsetHeight - 10) : (header.offsetHeight + 10); // Sesuaikan offset
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });

                // Tutup fullscreen menu jika dibuka dari sana
                if (navType === 'fullscreen' && fullscreenMenu.classList.contains('active')) {
                    menuToggler.click();
                }
            }
        }

        fullscreenNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    smoothScrollToTarget(href.substring(1), 'fullscreen');
                }
            });
        });

        desktopNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    smoothScrollToTarget(href.substring(1), 'desktop');
                }
            });
        });

        // Update active link on scroll
        function updateActiveNavLink() {
            let currentSectionId = '';
            const scrollPosition = window.pageYOffset + header.offsetHeight + 50; // offset tambahan

            sections.forEach(section => {
                if (scrollPosition >= section.offsetTop) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            desktopNavLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
            // Anda bisa menambahkan logic serupa untuk fullscreenNavLinks jika perlu highlight saat menu terbuka & discroll
        }

        window.addEventListener('scroll', updateActiveNavLink);
        window.addEventListener('load', updateActiveNavLink);

    });
</script>