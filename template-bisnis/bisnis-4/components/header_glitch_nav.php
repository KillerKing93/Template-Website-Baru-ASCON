<?php // File: components/header_glitch_nav.php 
?>
<style>
    /* Glitch Nav Header Component Styles */
    :root {
        /* Variabel dari index.php */
        --dark-bg-primary: #0D0221;
        --dark-bg-secondary: #0F084B;
        --primary-accent: #FF00E4;
        --secondary-accent: #00F5D4;
        --text-light: #F0F0F0;
        --border-cyber: rgba(0, 245, 212, 0.3);
    }

    .header-glitch-nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1050;
        /* Di atas segalanya */
        padding: 20px 0;
        background-color: rgba(13, 2, 33, 0.6);
        /* var(--dark-bg-primary) dengan alpha */
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border-bottom: 1px solid var(--border-cyber);
        transition: background-color 0.3s ease, padding 0.3s ease;
    }

    .header-glitch-nav.scrolled {
        background-color: rgba(13, 2, 33, 0.9);
        padding: 15px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    }

    .header-glitch-nav .navbar-brand-glitch {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.8rem;
        font-weight: 900;
        color: var(--text-light);
        text-decoration: none;
        position: relative;
        display: inline-block;
    }

    .header-glitch-nav .navbar-brand-glitch span {
        /* Untuk efek glitch pada teks */
        display: inline-block;
    }

    .header-glitch-nav .navbar-brand-glitch .char {
        /* Setiap karakter */
        display: inline-block;
        position: relative;
    }

    /* Animasi glitch sederhana pada hover brand */
    .header-glitch-nav .navbar-brand-glitch:hover .char::before,
    .header-glitch-nav .navbar-brand-glitch:hover .char::after {
        content: attr(data-char);
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        /* Sembunyikan by default, muncul saat animasi */
    }

    .header-glitch-nav .navbar-brand-glitch:hover .char:nth-child(odd)::before {
        left: -2px;
        text-shadow: 1px 0 var(--primary-accent);
        animation: glitchChar 0.2s infinite alternate;
    }

    .header-glitch-nav .navbar-brand-glitch:hover .char:nth-child(even)::after {
        left: 2px;
        text-shadow: -1px 0 var(--secondary-accent);
        animation: glitchChar 0.3s infinite alternate-reverse;
    }

    @keyframes glitchChar {
        0% {
            visibility: visible;
            transform: skewX(-10deg);
            opacity: 0.8;
        }

        100% {
            visibility: visible;
            transform: skewX(10deg);
            opacity: 1;
        }
    }


    /* Tombol Navigasi Samping (Off-canvas) */
    .nav-toggler-glitch {
        background: none;
        border: 2px solid var(--secondary-accent);
        color: var(--secondary-accent);
        font-size: 1.5rem;
        width: 50px;
        height: 50px;
        border-radius: 3px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(var(--secondary-accent-rgb), 0.3);
    }

    .nav-toggler-glitch:hover {
        background-color: var(--secondary-accent);
        color: var(--dark-bg-primary);
        box-shadow: 0 0 15px rgba(var(--secondary-accent-rgb), 0.6);
    }

    .nav-toggler-glitch .icon-open,
    .nav-toggler-glitch .icon-close {
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .nav-toggler-glitch .icon-close {
        display: none;
    }

    .nav-toggler-glitch.active .icon-open {
        display: none;
    }

    .nav-toggler-glitch.active .icon-close {
        display: block;
    }


    /* Off-canvas Menu Styling */
    .offcanvas-glitch {
        background-color: var(--dark-bg-secondary);
        color: var(--text-light);
        border-left: 2px solid var(--primary-accent);
        box-shadow: -10px 0 30px rgba(var(--primary-accent-rgb), 0.3);
    }

    .offcanvas-glitch .offcanvas-header {
        border-bottom: 1px solid var(--border-cyber);
        padding: 20px 25px;
    }

    .offcanvas-glitch .offcanvas-title {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        color: var(--secondary-accent);
    }

    .offcanvas-glitch .btn-close-glitch {
        background: none;
        border: none;
        font-size: 1.8rem;
        color: var(--text-light);
        opacity: 0.7;
    }

    .offcanvas-glitch .btn-close-glitch:hover {
        opacity: 1;
        color: var(--primary-accent);
    }

    .offcanvas-glitch .offcanvas-body {
        padding: 30px 25px;
    }

    .offcanvas-glitch .nav-glitch-menu {
        list-style: none;
        padding: 0;
    }

    .offcanvas-glitch .nav-glitch-menu li a {
        display: block;
        padding: 15px 0;
        font-family: 'Lexend', sans-serif;
        font-size: 1.2rem;
        font-weight: 500;
        color: var(--text-light);
        text-decoration: none;
        position: relative;
        transition: color 0.3s ease, padding-left 0.3s ease;
    }

    .offcanvas-glitch .nav-glitch-menu li a:hover,
    .offcanvas-glitch .nav-glitch-menu li a.active {
        color: var(--primary-accent);
        padding-left: 10px;
        /* Efek indent saat hover/active */
    }

    .offcanvas-glitch .nav-glitch-menu li a::before {
        /* Garis bawah animasi */
        content: '';
        position: absolute;
        bottom: 10px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: var(--primary-accent);
        transition: width 0.4s ease;
    }

    .offcanvas-glitch .nav-glitch-menu li a:hover::before,
    .offcanvas-glitch .nav-glitch-menu li a.active::before {
        width: 50px;
        /* Lebar garis */
    }

    .offcanvas-glitch .social-links-offcanvas {
        margin-top: 40px;
        padding-top: 20px;
        border-top: 1px solid var(--border-cyber);
        text-align: center;
    }

    .offcanvas-glitch .social-links-offcanvas a {
        color: var(--text-muted-cyber);
        margin: 0 12px;
        font-size: 1.5rem;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .offcanvas-glitch .social-links-offcanvas a:hover {
        color: var(--secondary-accent);
        transform: scale(1.1);
    }
</style>

<header id="headerGlitchNav" class="header-glitch-nav">
    <div class="container d-flex align-items-center justify-content-between">
        <a class="navbar-brand-glitch" href="index.php" data-aos="fade-right">
            <!-- {/* Script akan mengisi karakter di sini */} -->
        </a>

        <button class="nav-toggler-glitch" id="navTogglerGlitch" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasGlitchMenu" aria-controls="offcanvasGlitchMenu" aria-label="Toggle navigation">
            <i class="fas fa-bars icon-open"></i>
            <i class="fas fa-times icon-close"></i>
        </button>
    </div>
</header>

<div class="offcanvas offcanvas-glitch offcanvas-end" tabindex="-1" id="offcanvasGlitchMenu" aria-labelledby="offcanvasGlitchMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasGlitchMenuLabel">Navigasi</h5>
        <button type="button" class="btn-close-glitch" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav-glitch-menu">
            <li><a class="nav-link active" href="#heroDataVisualization" data-bs-dismiss="offcanvas">Beranda</a></li>
            <li><a class="nav-link" href="#aboutDeconstructed" data-bs-dismiss="offcanvas">Tentang Kami</a></li>
            <li><a class="nav-link" href="#servicesInteractiveGrid" data-bs-dismiss="offcanvas">Layanan</a></li>
            <li><a class="nav-link" href="#techStackAnimatedIcons" data-bs-dismiss="offcanvas">Teknologi</a></li>
            <li><a class="nav-link" href="#projectsCaseStudyCards" data-bs-dismiss="offcanvas">Proyek</a></li>
            <li><a class="nav-link" href="#contactMinimalistForm" data-bs-dismiss="offcanvas">Kontak</a></li>
        </ul>
        <div class="social-links-offcanvas">
            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('headerGlitchNav');
        const navToggler = document.getElementById('navTogglerGlitch');
        const offcanvasMenu = new bootstrap.Offcanvas(document.getElementById('offcanvasGlitchMenu')); // Inisialisasi Bootstrap Offcanvas
        const offcanvasLinks = document.querySelectorAll('#offcanvasGlitchMenu .nav-link');
        const sections = document.querySelectorAll('section[id]'); // Untuk active link highlighting

        // Brand Name Character Spans for Glitch Effect
        const brandElement = document.querySelector('.navbar-brand-glitch');
        const brandName = "QLeap"; // Nama brand (bisa diganti)
        if (brandElement) {
            brandElement.innerHTML = ''; // Kosongkan dulu
            brandName.split('').forEach(char => {
                const span = document.createElement('span');
                span.className = 'char';
                span.setAttribute('data-char', char);
                span.textContent = char;
                brandElement.appendChild(span);
            });
        }

        // Header scroll effect
        if (header) {
            const headerScroll = () => {
                if (window.scrollY > 60) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            };
            window.addEventListener('load', headerScroll);
            document.addEventListener('scroll', headerScroll);
        }

        // Nav Toggler active state
        if (navToggler) {
            document.getElementById('offcanvasGlitchMenu').addEventListener('show.bs.offcanvas', function() {
                navToggler.classList.add('active');
            });
            document.getElementById('offcanvasGlitchMenu').addEventListener('hide.bs.offcanvas', function() {
                navToggler.classList.remove('active');
            });
        }

        // Active link highlighting & smooth scroll
        function smoothScrollToTarget(targetId) {
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                const headerOffset = header.classList.contains('scrolled') ? header.offsetHeight : header.offsetHeight + 10;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                window.scrollTo({
                    top: offsetPosition,
                    behavior: "smooth"
                });
            }
        }

        offcanvasLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    smoothScrollToTarget(href.substring(1));
                    // Offcanvas akan otomatis tertutup karena atribut data-bs-dismiss="offcanvas"
                }
            });
        });

        function updateActiveNavLink() {
            let currentSectionId = '';
            const scrollPosition = window.pageYOffset + header.offsetHeight + 50;

            sections.forEach(section => {
                if (scrollPosition >= section.offsetTop) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            offcanvasLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });
        }
        window.addEventListener('scroll', updateActiveNavLink);
        window.addEventListener('load', updateActiveNavLink);
    });
</script>