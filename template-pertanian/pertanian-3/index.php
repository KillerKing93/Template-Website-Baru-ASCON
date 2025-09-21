<?php // File: index.php - Template Website Pertanian 3 (Artistik & Modern) 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriNova Tech - Inovasi Pertanian Masa Depan</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Teko (Headings) & Poppins (Body) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri/Lightbox) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: Swiper CSS (Untuk Carousel/Slider) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pertanian Artistik & Modern */
        :root {
            /* Light Mode (Default) */
            --bg-light-farm3: #F9F9F9;
            --text-light-farm3: #222222;
            --card-bg-light-farm3: #FFFFFF;
            --border-light-farm3: #E1E1E1;
            --primary-art-farm: #4CAF50;
            /* Hijau segar */
            --secondary-art-farm: #FF9800;
            /* Oranye hangat */
            --accent-art-farm: #03A9F4;
            /* Biru langit cerah */
            --muted-text-light-farm3: #555555;

            /* Dark Mode Variables */
            --bg-dark-farm3: #1C1C1C;
            --text-dark-farm3: #E0E0E0;
            --card-bg-dark-farm3: #2A2A2A;
            --border-dark-farm3: #3D3D3D;
            --primary-art-farm-dark: #81C784;
            /* Hijau lebih terang */
            --secondary-art-farm-dark: #FFB74D;
            /* Oranye lebih terang */
            --accent-art-farm-dark: #4FC3F7;
            /* Biru lebih terang */
            --muted-text-dark-farm3: #A0A0A0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.7;
            background-color: var(--bg-light-farm3);
            color: var(--text-light-farm3);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Teko', sans-serif;
            /* Font Teko untuk heading */
            font-weight: 600;
            /* Teko sudah cukup bold */
            color: var(--text-light-farm3);
            transition: color 0.3s ease;
            text-transform: uppercase;
            /* Heading uppercase */
            letter-spacing: 1px;
        }

        .section-artistic-farm {
            padding: 90px 0;
            overflow: hidden;
            position: relative;
        }

        .section-title-artistic-farm {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-artistic-farm h2 {
            font-size: 3rem;
            /* Ukuran judul section */
            font-weight: 700;
            color: var(--primary-art-farm);
            margin-bottom: 15px;
            display: inline-block;
            position: relative;
            padding: 0 10px;
        }

        /* Dekorasi unik untuk judul section */
        .section-title-artistic-farm h2::before,
        .section-title-artistic-farm h2::after {
            content: '';
            position: absolute;
            height: 100%;
            width: 10px;
            /* Lebar elemen dekoratif samping */
            top: 0;
            background-color: var(--secondary-art-farm);
            opacity: 0.6;
            transition: background-color 0.3s ease;
        }

        .section-title-artistic-farm h2::before {
            left: -20px;
            transform: skewX(-15deg);
        }

        .section-title-artistic-farm h2::after {
            right: -20px;
            transform: skewX(15deg);
        }

        .section-title-artistic-farm p.subtitle-artistic-farm {
            font-size: 1.2rem;
            /* Subtitle lebih besar */
            color: var(--muted-text-light-farm3);
            max-width: 800px;
            margin: 20px auto 0 auto;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            transition: color 0.3s ease;
            letter-spacing: 0.5px;
        }

        .btn-art-farm-primary {
            background: linear-gradient(45deg, var(--primary-art-farm), var(--secondary-art-farm));
            border: none;
            color: #fff;
            padding: 12px 35px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            border-radius: 50px;
            /* Tombol sangat bulat */
            transition: all 0.4s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(76, 175, 80, 0.4);
            /* Bayangan dari warna primer */
        }

        .btn-art-farm-primary:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(255, 152, 0, 0.5);
            /* Bayangan dari warna sekunder saat hover */
            background: linear-gradient(45deg, var(--secondary-art-farm), var(--primary-art-farm));
            color: #fff;
        }

        .btn-art-farm-secondary {
            background-color: transparent;
            border: 2px solid var(--accent-art-farm);
            color: var(--accent-art-farm);
            padding: 10px 30px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-art-farm-secondary:hover {
            background-color: var(--accent-art-farm);
            color: #fff;
            box-shadow: 0 4px 12px rgba(3, 169, 244, 0.3);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-farm3);
            color: var(--text-dark-farm3);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-farm3);
        }

        body.dark-mode .section-title-artistic-farm h2 {
            color: var(--primary-art-farm-dark);
        }

        body.dark-mode .section-title-artistic-farm h2::before,
        body.dark-mode .section-title-artistic-farm h2::after {
            background-color: var(--secondary-art-farm-dark);
        }

        body.dark-mode .section-title-artistic-farm p.subtitle-artistic-farm {
            color: var(--muted-text-dark-farm3);
        }

        body.dark-mode .btn-art-farm-primary {
            background: linear-gradient(45deg, var(--primary-art-farm-dark), var(--secondary-art-farm-dark));
            box-shadow: 0 5px 15px rgba(129, 199, 132, 0.4);
        }

        body.dark-mode .btn-art-farm-primary:hover {
            box-shadow: 0 8px 20px rgba(255, 183, 77, 0.5);
            background: linear-gradient(45deg, var(--secondary-art-farm-dark), var(--primary-art-farm-dark));
        }

        body.dark-mode .btn-art-farm-secondary {
            border-color: var(--accent-art-farm-dark);
            color: var(--accent-art-farm-dark);
        }

        body.dark-mode .btn-art-farm-secondary:hover {
            background-color: var(--accent-art-farm-dark);
            color: var(--bg-dark-farm3);
            /* Teks kontras */
            box-shadow: 0 4px 12px rgba(79, 195, 247, 0.3);
        }

        /* Preloader */
        #preloader-art-farm {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-farm3);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.7s ease-out 0.5s;
        }

        body.dark-mode #preloader-art-farm {
            background-color: var(--bg-dark-farm3);
        }

        #preloader-art-farm.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-art-farm {
            /* Loader dengan bentuk organik/daun */
            width: 60px;
            height: 60px;
            position: relative;
        }

        .loader-art-farm .leaf {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            border-radius: 0 50% 0 50%;
            /* Bentuk daun */
            background-color: var(--primary-art-farm);
            animation: leafSpin 1.5s infinite cubic-bezier(0.65, 0.05, 0.36, 1);
            transform-origin: bottom left;
        }

        body.dark-mode .loader-art-farm .leaf {
            background-color: var(--primary-art-farm-dark);
        }

        .loader-art-farm .leaf:nth-child(2) {
            animation-delay: 0.2s;
            background-color: var(--secondary-art-farm);
        }

        body.dark-mode .loader-art-farm .leaf:nth-child(2) {
            background-color: var(--secondary-art-farm-dark);
        }

        .loader-art-farm .leaf:nth-child(3) {
            animation-delay: 0.4s;
            background-color: var(--accent-art-farm);
        }

        body.dark-mode .loader-art-farm .leaf:nth-child(3) {
            background-color: var(--accent-art-farm-dark);
        }

        @keyframes leafSpin {
            0% {
                transform: rotate(0deg) scale(0.2);
                opacity: 0;
            }

            50% {
                transform: rotate(180deg) scale(1);
                opacity: 0.7;
            }

            100% {
                transform: rotate(360deg) scale(0.2);
                opacity: 0;
            }
        }

        /* Back to top button */
        .back-to-top-art-farm {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-art-farm);
            width: 44px;
            height: 44px;
            border-radius: 8px;
            /* Sedikit kotak */
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-art-farm i {
            font-size: 20px;
            color: #fff;
        }

        .back-to-top-art-farm:hover {
            background: #388E3C;
            transform: scale(1.05);
        }

        /* Lebih gelap */
        .back-to-top-art-farm.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-art-farm {
            background: var(--primary-art-farm-dark);
        }

        body.dark-mode .back-to-top-art-farm:hover {
            background: #66BB6A;
        }

        /* Lebih terang */

        /* Tombol Theme Toggle */
        .theme-toggle-button-art-farm {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light-farm3);
            border: 1px solid var(--border-light-farm3);
            color: var(--text-light-farm3);
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

        .theme-toggle-button-art-farm:hover {
            background-color: #e9ecef;
            transform: rotate(15deg);
        }

        .theme-toggle-button-art-farm i {
            font-size: 1.2rem;
        }

        .theme-toggle-button-art-farm .icon-sun-art-farm {
            display: none;
        }

        body.dark-mode .theme-toggle-button-art-farm {
            background-color: var(--card-bg-dark-farm3);
            border-color: var(--border-dark-farm3);
            color: var(--text-dark-farm3);
        }

        body.dark-mode .theme-toggle-button-art-farm:hover {
            background-color: #3A3A3A;
        }

        body.dark-mode .theme-toggle-button-art-farm .icon-moon-art-farm {
            display: none;
        }

        body.dark-mode .theme-toggle-button-art-farm .icon-sun-art-farm {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_art_farm']) && $_COOKIE['theme_art_farm'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-art-farm">
        <div class="loader-art-farm">
            <div class="leaf"></div>
            <div class="leaf"></div>
            <div class="leaf"></div>
        </div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website pertanian artistik */
    include 'components/header_pertanian_unik.php';
    ?>

    <?php include 'components/hero_pertanian_artistik.php'; ?>
    <?php include 'components/tentang_kami_pertanian_inovatif.php'; ?>
    <?php include 'components/layanan_pertanian_teknologi.php'; ?>
    <?php include 'components/galeri_produk_pertanian_interaktif.php'; ?>
    <?php include 'components/blog_insight_pertanian.php'; ?>
    <?php include 'components/kontak_pertanian_modern_osm.php'; ?>
    <?php include 'components/footer_pertanian_kontemporer.php'; ?>

    <a href="#" class="back-to-top-art-farm"><i class="fas fa-angle-up"></i></a>

    <button class="theme-toggle-button-art-farm" id="themeTogglerArtFarm" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-art-farm"></i>
        <i class="fas fa-sun icon-sun-art-farm"></i>
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
                duration: 1000,
                once: true,
                offset: 70,
                easing: 'ease-in-out-quart',
            });

            // Komentar JavaScript: Logika Preloader
            const preloader = document.getElementById('preloader-art-farm');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 600);
                });
            }

            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-art-farm');
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
            const themeToggler = document.getElementById('themeTogglerArtFarm');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-art-farm');
            const sunIcon = themeToggler.querySelector('.icon-sun-art-farm');

            function applyThemeArtFarm(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedArtFarm', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeArtFarm = localStorage.getItem('theme_art_farm');
            if (!savedThemeArtFarm) {
                savedThemeArtFarm = bodyElement.classList.contains('dark-mode') ? 'dark' : 'light';
            } else {
                applyThemeArtFarm(savedThemeArtFarm);
            }

            if (themeToggler) {
                applyThemeArtFarm(bodyElement.classList.contains('dark-mode') ? 'dark' : 'light');

                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeArtFarm(newTheme);
                    localStorage.setItem('theme_art_farm', newTheme);
                });
            }
        });
    </script>
</body>

</html>