<?php // File: index.php - Template Website Pendidikan 6 (Nova Universitas) 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Universitas - Kampus Seni & Sains Digital Interdisipliner</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Syne (Heading - Artistik, Unik) & Work Sans (Body - Modern, Bersih) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Work+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri/Lightbox) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: Swiper CSS (Untuk Carousel/Slider) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pendidikan Nova Universitas */
        :root {
            /* Light Mode (Default) */
            --bg-light-edu6: #FFFFFF;
            --text-light-edu6: #1A1A1A;
            /* Hitam pekat untuk teks */
            --card-bg-light-edu6: #F8F9FA;
            /* Abu-abu sangat terang untuk kartu */
            --border-light-edu6: #E1E3E6;
            --primary-nova: #FF4081;
            /* Pink cerah (Hot Pink) */
            --secondary-nova: #7C4DFF;
            /* Ungu tua (Deep Purple) */
            --accent-nova: #00BCD4;
            /* Cyan */
            --muted-text-light-edu6: #4A4A4A;

            /* Dark Mode Variables */
            --bg-dark-edu6: #121212;
            /* Hitam pekat */
            --text-dark-edu6: #F0F0F0;
            /* Putih terang */
            --card-bg-dark-edu6: #1E1E1E;
            /* Abu-abu sangat gelap untuk kartu */
            --border-dark-edu6: #333333;
            --primary-nova-dark: #F50057;
            /* Pink lebih intens */
            --secondary-nova-dark: #9575CD;
            /* Ungu lebih lembut */
            --accent-nova-dark: #00E5FF;
            /* Cyan lebih terang */
            --muted-text-dark-edu6: #A0A0A0;
        }

        body {
            font-family: 'Work Sans', sans-serif;
            line-height: 1.7;
            background-color: var(--bg-light-edu6);
            color: var(--text-light-edu6);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
            overflow-x: hidden;
            /* Mencegah horizontal scroll global */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            color: var(--text-light-edu6);
            transition: color 0.3s ease;
            letter-spacing: 0.5px;
        }

        .section-nova-uni {
            padding: 90px 0;
            overflow: hidden;
            /* Pastikan section tidak menyebabkan overflow */
            position: relative;
        }

        .section-title-nova-uni {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-nova-uni h2 {
            font-size: 3rem;
            /* Ukuran judul section */
            font-weight: 800;
            /* Syne sudah bold */
            color: var(--primary-nova);
            margin-bottom: 15px;
            display: inline-block;
            position: relative;
            padding: 0 15px;
            /* Padding agar dekorasi tidak terlalu mepet */
        }

        /* Dekorasi unik untuk judul section - bentuk abstrak */
        .section-title-nova-uni h2::before,
        .section-title-nova-uni h2::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: var(--secondary-nova);
            opacity: 0.3;
            transition: background-color 0.3s ease, transform 0.4s ease;
            z-index: -1;
            /* Di belakang teks */
        }

        .section-title-nova-uni h2::before {
            top: 50%;
            left: -25px;
            transform: translateY(-50%) rotate(45deg);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            /* Bentuk organik */
        }

        .section-title-nova-uni h2::after {
            bottom: 50%;
            right: -25px;
            transform: translateY(50%) rotate(-30deg);
            border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
        }

        .section-title-nova-uni:hover h2::before {
            transform: translateY(-50%) rotate(60deg) scale(1.1);
        }

        .section-title-nova-uni:hover h2::after {
            transform: translateY(50%) rotate(-45deg) scale(1.1);
        }

        .section-title-nova-uni p.subtitle-nova-uni {
            font-size: 1.15rem;
            color: var(--muted-text-light-edu6);
            max-width: 750px;
            margin: 20px auto 0 auto;
            font-family: 'Work Sans', sans-serif;
            font-weight: 400;
            transition: color 0.3s ease;
        }

        .btn-nova-primary {
            background: linear-gradient(135deg, var(--primary-nova), var(--secondary-nova));
            border: none;
            color: #fff;
            padding: 14px 35px;
            /* Tombol lebih besar */
            font-weight: 700;
            /* Font lebih bold */
            font-family: 'Syne', sans-serif;
            /* Font heading untuk tombol */
            border-radius: 50px;
            transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
            text-transform: uppercase;
            letter-spacing: 1.2px;
            box-shadow: 0 5px 20px rgba(255, 64, 129, 0.4);
            /* Bayangan dari warna primer */
        }

        .btn-nova-primary:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 8px 25px rgba(124, 77, 255, 0.5);
            /* Bayangan dari warna sekunder */
            background: linear-gradient(135deg, var(--secondary-nova), var(--primary-nova));
            color: #fff;
        }

        .btn-nova-secondary {
            background-color: transparent;
            border: 2px solid var(--accent-nova);
            color: var(--accent-nova);
            padding: 12px 32px;
            font-weight: 700;
            font-family: 'Syne', sans-serif;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1.2px;
        }

        .btn-nova-secondary:hover {
            background-color: var(--accent-nova);
            color: #fff;
            box-shadow: 0 4px 15px rgba(0, 188, 212, 0.4);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-edu6);
            color: var(--text-dark-edu6);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-edu6);
        }

        body.dark-mode .section-title-nova-uni h2 {
            color: var(--primary-nova-dark);
        }

        body.dark-mode .section-title-nova-uni h2::before,
        body.dark-mode .section-title-nova-uni h2::after {
            background-color: var(--secondary-nova-dark);
        }

        body.dark-mode .section-title-nova-uni p.subtitle-nova-uni {
            color: var(--muted-text-dark-edu6);
        }

        body.dark-mode .btn-nova-primary {
            background: linear-gradient(135deg, var(--primary-nova-dark), var(--secondary-nova-dark));
            box-shadow: 0 5px 20px rgba(245, 0, 87, 0.4);
        }

        body.dark-mode .btn-nova-primary:hover {
            box-shadow: 0 8px 25px rgba(149, 117, 205, 0.5);
            background: linear-gradient(135deg, var(--secondary-nova-dark), var(--primary-nova-dark));
        }

        body.dark-mode .btn-nova-secondary {
            border-color: var(--accent-nova-dark);
            color: var(--accent-nova-dark);
        }

        body.dark-mode .btn-nova-secondary:hover {
            background-color: var(--accent-nova-dark);
            color: var(--bg-dark-edu6);
            box-shadow: 0 4px 15px rgba(0, 229, 255, 0.4);
        }

        /* Preloader */
        #preloader-nova-uni {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-edu6);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.8s ease-out 0.6s;
        }

        body.dark-mode #preloader-nova-uni {
            background-color: var(--bg-dark-edu6);
        }

        #preloader-nova-uni.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-nova-uni {
            /* Loader dengan bentuk "atom" atau "orbit" */
            width: 70px;
            height: 70px;
            position: relative;
            animation: atomSpin 3s infinite linear;
        }

        .loader-nova-uni .electron {
            position: absolute;
            width: 15px;
            height: 15px;
            background-color: var(--primary-nova);
            border-radius: 50%;
            top: 50%;
            left: 50%;
            margin: -7.5px 0 0 -7.5px;
            /* Tengah */
        }

        body.dark-mode .loader-nova-uni .electron {
            background-color: var(--primary-nova-dark);
        }

        .loader-nova-uni .electron:nth-child(1) {
            animation: electronOrbit1 3s infinite ease-in-out;
        }

        .loader-nova-uni .electron:nth-child(2) {
            animation: electronOrbit2 3s infinite ease-in-out;
            background-color: var(--secondary-nova);
        }

        body.dark-mode .loader-nova-uni .electron:nth-child(2) {
            background-color: var(--secondary-nova-dark);
        }

        .loader-nova-uni .electron:nth-child(3) {
            animation: electronOrbit3 3s infinite ease-in-out;
            background-color: var(--accent-nova);
        }

        body.dark-mode .loader-nova-uni .electron:nth-child(3) {
            background-color: var(--accent-nova-dark);
        }

        @keyframes atomSpin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes electronOrbit1 {

            0%,
            100% {
                transform: rotate(0deg) translateX(30px) rotate(0deg) scale(1);
            }

            50% {
                transform: rotate(180deg) translateX(30px) rotate(-180deg) scale(0.7);
            }
        }

        @keyframes electronOrbit2 {

            0%,
            100% {
                transform: rotate(120deg) translateX(30px) rotate(-120deg) scale(1);
            }

            50% {
                transform: rotate(300deg) translateX(30px) rotate(-300deg) scale(0.7);
            }
        }

        @keyframes electronOrbit3 {

            0%,
            100% {
                transform: rotate(240deg) translateX(30px) rotate(-240deg) scale(1);
            }

            50% {
                transform: rotate(420deg) translateX(30px) rotate(-420deg) scale(0.7);
            }
        }


        /* Back to top button */
        .back-to-top-nova-uni {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-nova);
            width: 44px;
            height: 44px;
            border-radius: 8px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-nova-uni i {
            font-size: 20px;
            color: #fff;
        }

        .back-to-top-nova-uni:hover {
            background: #D81B60;
            transform: scale(1.05);
        }

        /* Lebih gelap */
        .back-to-top-nova-uni.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-nova-uni {
            background: var(--primary-nova-dark);
        }

        body.dark-mode .back-to-top-nova-uni:hover {
            background: #E0004D;
        }

        /* Tombol Theme Toggle */
        .theme-toggle-button-nova-uni {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light-edu6);
            border: 1px solid var(--border-light-edu6);
            color: var(--text-light-edu6);
            width: 44px;
            height: 44px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .theme-toggle-button-nova-uni:hover {
            background-color: #e1e3e6;
            transform: scale(1.1) rotate(-15deg);
        }

        .theme-toggle-button-nova-uni i {
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .theme-toggle-button-nova-uni .icon-sun-nova-uni {
            display: none;
        }

        body.dark-mode .theme-toggle-button-nova-uni {
            background-color: var(--card-bg-dark-edu6);
            border-color: var(--border-dark-edu6);
            color: var(--text-dark-edu6);
        }

        body.dark-mode .theme-toggle-button-nova-uni:hover {
            background-color: #333333;
        }

        body.dark-mode .theme-toggle-button-nova-uni .icon-moon-nova-uni {
            display: none;
        }

        body.dark-mode .theme-toggle-button-nova-uni .icon-sun-nova-uni {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_nova_uni_edu']) && $_COOKIE['theme_nova_uni_edu'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-nova-uni">
        <div class="loader-nova-uni">
            <div class="electron"></div>
            <div class="electron"></div>
            <div class="electron"></div>
        </div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website Nova Universitas */
    include 'components/header_pendidikan_nova_uni.php';
    ?>

    <?php include 'components/hero_pendidikan_nova_uni_parallax.php'; ?>
    <?php include 'components/tentang_kami_pendidikan_interdisipliner.php'; ?>
    <?php include 'components/program_studi_inovatif_nova.php'; ?>
    <?php include 'components/pusat_kolaborasi_seni_sains.php'; ?>
    <?php include 'components/event_pameran_karya_nova.php'; ?>
    <?php include 'components/profil_dosen_peneliti_nova.php'; ?>
    <?php include 'components/kontak_pendidikan_nova_osm.php'; ?>
    <?php include 'components/footer_pendidikan_avant_garde.php'; ?>

    <a href="#" class="back-to-top-nova-uni"><i class="fas fa-atom"></i></a> <?php /* Ikon atom */ ?>

    <button class="theme-toggle-button-nova-uni" id="themeTogglerNovaUni" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-nova-uni"></i>
        <i class="fas fa-sun icon-sun-nova-uni"></i>
    </button>

    <?php /* Komentar PHP: Bootstrap Bundle JS */ ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php /* Komentar PHP: Leaflet JS (Untuk OpenStreetMap) */ ?>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <?php /* Komentar PHP: GLightbox JS (Untuk Galeri/Lightbox) */ ?>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <?php /* Komentar PHP: Swiper JS (Untuk Carousel/Slider) */ ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?php /* Komentar PHP: AOS JS */ ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <?php /* Komentar PHP: Anime.js (jika digunakan untuk animasi kustom) */ ?>
    <?php /* <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script> */ ?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Komentar JavaScript: Inisialisasi AOS
            AOS.init({
                duration: 1000, // Durasi animasi
                once: true,
                offset: 70,
                easing: 'ease-out-quart',
            });

            // Komentar JavaScript: Logika Preloader
            const preloader = document.getElementById('preloader-nova-uni');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 700); // Delay lebih lama untuk loader yang lebih kompleks
                });
            }

            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-nova-uni');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 250) {
                        backToTopButton.classList.add('active');
                    } else {
                        backToTopButton.classList.remove('active');
                    }
                }
                window.addEventListener('load', toggleBackToTop);
                document.addEventListener('scroll', toggleBackToTop);
                backToTopButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }

            // Komentar JavaScript: Logika Pengalih Tema
            const themeToggler = document.getElementById('themeTogglerNovaUni');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-nova-uni');
            const sunIcon = themeToggler.querySelector('.icon-sun-nova-uni');

            function applyThemeNovaUni(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedNovaUni', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeNovaUni = localStorage.getItem('theme_nova_uni_edu');
            if (!savedThemeNovaUni) {
                if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    savedThemeNovaUni = 'dark';
                } else {
                    savedThemeNovaUni = 'light';
                }
            }
            applyThemeNovaUni(savedThemeNovaUni);

            if (themeToggler) {
                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeNovaUni(newTheme);
                    localStorage.setItem('theme_nova_uni_edu', newTheme);
                });
            }
        });
    </script>
</body>

</html>