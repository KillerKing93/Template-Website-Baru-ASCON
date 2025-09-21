<?php // File: index.php - Template Website Pertanian 4 (Bio-Integrated & Sustainable) 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioFarm Lestari - Pertanian Terintegrasi & Berkelanjutan</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Nunito (Headings - bulat, ramah) & Roboto Slab (Body - serif modern) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Roboto+Slab:wght@300;400;500;700&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri/Lightbox) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: Swiper CSS (Untuk Carousel/Slider) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pertanian Bio-Integrated & Sustainable */
        :root {
            /* Light Mode (Default) */
            --bg-light-farm4: #F0F4F0;
            /* Sangat terang, sedikit kehijauan */
            --text-light-farm4: #2D3A3A;
            /* Abu-abu gelap kehijauan */
            --card-bg-light-farm4: #FFFFFF;
            --border-light-farm4: #D8E0D8;
            --primary-bio-farm: #388E3C;
            /* Hijau hutan sedang */
            --secondary-bio-farm: #FFC107;
            /* Kuning amber cerah */
            --accent-bio-farm: #81D4FA;
            /* Biru langit muda */
            --muted-text-light-farm4: #5E705E;

            /* Dark Mode Variables */
            --bg-dark-farm4: #18281A;
            /* Hijau sangat gelap, hampir hitam */
            --text-dark-farm4: #D0E0D0;
            /* Putih kehijauan pucat */
            --card-bg-dark-farm4: #203722;
            /* Hijau gelap untuk kartu */
            --border-dark-farm4: #305032;
            --primary-bio-farm-dark: #66BB6A;
            /* Hijau lebih cerah */
            --secondary-bio-farm-dark: #FFD54F;
            /* Kuning amber lebih cerah */
            --accent-bio-farm-dark: #B3E5FC;
            /* Biru langit lebih pucat */
            --muted-text-dark-farm4: #A0B0A2;
        }

        body {
            font-family: 'Roboto Slab', serif;
            line-height: 1.75;
            background-color: var(--bg-light-farm4);
            color: var(--text-light-farm4);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            /* Nunito sudah cukup bold */
            color: var(--text-light-farm4);
            transition: color 0.3s ease;
        }

        .section-bio-farm {
            padding: 90px 0;
            overflow: hidden;
            position: relative;
        }

        .section-title-bio-farm {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-bio-farm h2 {
            font-size: 2.7rem;
            font-weight: 800;
            /* Lebih tebal untuk judul section */
            color: var(--primary-bio-farm);
            margin-bottom: 15px;
            text-transform: capitalize;
            /* Judul tidak uppercase */
            letter-spacing: 0.5px;
        }

        .section-title-bio-farm h2 .highlight-accent-bio {
            color: var(--secondary-bio-farm);
            position: relative;
            display: inline-block;
        }

        /* Dekorasi underline organik untuk highlight */
        .section-title-bio-farm h2 .highlight-accent-bio::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 4px;
            /* Ketebalan underline */
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='10' viewBox='0 0 100 10' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 5 Q 25 10, 50 5 T 100 5' stroke='%23FFC107' stroke-width='3' fill='none'/%3E%3C/svg%3E");
            /* Ganti dengan warna var(--secondary-bio-farm) */
            background-repeat: repeat-x;
            background-size: 20px 10px;
            /* Ukuran pattern SVG */
            transition: background-image 0.3s ease;
        }

        .section-title-bio-farm p.subtitle-bio-farm {
            font-size: 1.1rem;
            color: var(--muted-text-light-farm4);
            max-width: 700px;
            margin: 20px auto 0 auto;
            font-family: 'Roboto Slab', serif;
            font-weight: 300;
            /* Subtitle lebih ringan */
            transition: color 0.3s ease;
        }

        .btn-bio-farm-primary {
            background-color: var(--primary-bio-farm);
            border: 2px solid var(--primary-bio-farm);
            color: #fff;
            padding: 12px 30px;
            font-weight: 700;
            /* Tombol lebih bold */
            font-family: 'Nunito', sans-serif;
            border-radius: 8px;
            /* Sudut sedikit membulat */
            transition: all 0.3s ease;
            text-transform: capitalize;
            /* Tidak uppercase */
            letter-spacing: 0.3px;
            box-shadow: 0 4px 10px rgba(56, 142, 60, 0.25);
        }

        .btn-bio-farm-primary:hover {
            background-color: transparent;
            color: var(--primary-bio-farm);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(56, 142, 60, 0.35);
        }

        .btn-bio-farm-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-bio-farm);
            color: var(--secondary-bio-farm);
            padding: 10px 28px;
            font-weight: 700;
            font-family: 'Nunito', sans-serif;
            border-radius: 8px;
            transition: all 0.3s ease;
            text-transform: capitalize;
        }

        .btn-bio-farm-secondary:hover {
            background-color: var(--secondary-bio-farm);
            color: var(--text-light-farm4);
            /* Atau warna kontras lain */
            box-shadow: 0 4px 10px rgba(255, 193, 7, 0.25);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-farm4);
            color: var(--text-dark-farm4);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-farm4);
        }

        body.dark-mode .section-title-bio-farm h2 {
            color: var(--primary-bio-farm-dark);
        }

        body.dark-mode .section-title-bio-farm h2 .highlight-accent-bio {
            color: var(--secondary-bio-farm-dark);
        }

        body.dark-mode .section-title-bio-farm h2 .highlight-accent-bio::after {
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='10' viewBox='0 0 100 10' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 5 Q 25 10, 50 5 T 100 5' stroke='%23FFD54F' stroke-width='3' fill='none'/%3E%3C/svg%3E");
            /* Ganti dengan warna var(--secondary-bio-farm-dark) */
        }

        body.dark-mode .section-title-bio-farm p.subtitle-bio-farm {
            color: var(--muted-text-dark-farm4);
        }

        body.dark-mode .btn-bio-farm-primary {
            background-color: var(--primary-bio-farm-dark);
            border-color: var(--primary-bio-farm-dark);
            box-shadow: 0 4px 10px rgba(102, 187, 106, 0.25);
        }

        body.dark-mode .btn-bio-farm-primary:hover {
            color: var(--primary-bio-farm-dark);
            box-shadow: 0 6px 15px rgba(102, 187, 106, 0.35);
        }

        body.dark-mode .btn-bio-farm-secondary {
            border-color: var(--secondary-bio-farm-dark);
            color: var(--secondary-bio-farm-dark);
        }

        body.dark-mode .btn-bio-farm-secondary:hover {
            background-color: var(--secondary-bio-farm-dark);
            color: var(--bg-dark-farm4);
            box-shadow: 0 4px 10px rgba(255, 213, 79, 0.25);
        }

        /* Preloader */
        #preloader-bio-farm {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-farm4);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.7s ease-out 0.5s;
        }

        body.dark-mode #preloader-bio-farm {
            background-color: var(--bg-dark-farm4);
        }

        #preloader-bio-farm.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-bio-farm {
            /* Loader dengan efek "growing seed" */
            width: 50px;
            height: 50px;
            position: relative;
        }

        .loader-bio-farm::before {
            /* Seed */
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 15px;
            height: 15px;
            background-color: var(--secondary-bio-farm);
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            /* Bentuk biji */
            animation: seedPulse 1.5s infinite ease-in-out;
        }

        .loader-bio-farm::after {
            /* Sprout */
            content: '';
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%) scaleY(0);
            width: 4px;
            height: 30px;
            background-color: var(--primary-bio-farm);
            border-radius: 2px 2px 0 0;
            transform-origin: bottom center;
            animation: sproutGrow 1.5s infinite ease-in-out;
            animation-delay: 0.3s;
            /* Muncul setelah biji */
        }

        body.dark-mode .loader-bio-farm::before {
            background-color: var(--secondary-bio-farm-dark);
        }

        body.dark-mode .loader-bio-farm::after {
            background-color: var(--primary-bio-farm-dark);
        }

        @keyframes seedPulse {

            0%,
            100% {
                transform: translateX(-50%) scale(1);
            }

            50% {
                transform: translateX(-50%) scale(1.2);
            }
        }

        @keyframes sproutGrow {

            0%,
            20% {
                transform: translateX(-50%) scaleY(0);
            }

            60% {
                transform: translateX(-50%) scaleY(1);
            }

            100% {
                transform: translateX(-50%) scaleY(0);
                opacity: 0;
            }
        }


        /* Back to top button */
        .back-to-top-bio-farm {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-bio-farm);
            width: 42px;
            height: 42px;
            border-radius: 8px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-bio-farm i {
            font-size: 18px;
            color: #fff;
        }

        .back-to-top-bio-farm:hover {
            background: #2E7D32;
            transform: translateY(-2px);
        }

        /* Lebih gelap */
        .back-to-top-bio-farm.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-bio-farm {
            background: var(--primary-bio-farm-dark);
        }

        body.dark-mode .back-to-top-bio-farm:hover {
            background: #4CAF50;
        }

        /* Tombol Theme Toggle */
        .theme-toggle-button-bio-farm {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light-farm4);
            border: 1px solid var(--border-light-farm4);
            color: var(--text-light-farm4);
            width: 42px;
            height: 42px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .theme-toggle-button-bio-farm:hover {
            background-color: #e9ecef;
            transform: scale(1.05);
        }

        .theme-toggle-button-bio-farm i {
            font-size: 1.1rem;
        }

        .theme-toggle-button-bio-farm .icon-sun-bio-farm {
            display: none;
        }

        body.dark-mode .theme-toggle-button-bio-farm {
            background-color: var(--card-bg-dark-farm4);
            border-color: var(--border-dark-farm4);
            color: var(--text-dark-farm4);
        }

        body.dark-mode .theme-toggle-button-bio-farm:hover {
            background-color: #2A402C;
        }

        body.dark-mode .theme-toggle-button-bio-farm .icon-moon-bio-farm {
            display: none;
        }

        body.dark-mode .theme-toggle-button-bio-farm .icon-sun-bio-farm {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_bio_farm']) && $_COOKIE['theme_bio_farm'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-bio-farm">
        <div class="loader-bio-farm"></div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website pertanian bio-integrated */
    include 'components/header_pertanian_bio_integrated.php';
    ?>

    <?php include 'components/hero_pertanian_bio_visual.php'; ?>
    <?php include 'components/tentang_kami_pertanian_sustainable.php'; ?>
    <?php include 'components/layanan_pertanian_holistik.php'; ?>
    <?php include 'components/teknologi_hijau_pertanian.php'; ?>
    <?php include 'components/produk_organik_pertanian_showcase.php'; ?>
    <?php include 'components/komunitas_dampak_pertanian.php'; ?>
    <?php include 'components/kontak_pertanian_alami_osm.php'; ?>
    <?php include 'components/footer_pertanian_earthy.php'; ?>

    <a href="#" class="back-to-top-bio-farm"><i class="fas fa-leaf"></i></a> <?php /* Ikon daun untuk back to top */ ?>

    <button class="theme-toggle-button-bio-farm" id="themeTogglerBioFarm" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-bio-farm"></i>
        <i class="fas fa-sun icon-sun-bio-farm"></i>
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
                duration: 950, // Durasi animasi
                once: true,
                offset: 65,
                easing: 'ease-in-out-back', // Easing yang lebih organik
            });

            // Komentar JavaScript: Logika Preloader
            const preloader = document.getElementById('preloader-bio-farm');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 550);
                });
            }

            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-bio-farm');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 220) {
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
            const themeToggler = document.getElementById('themeTogglerBioFarm');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-bio-farm');
            const sunIcon = themeToggler.querySelector('.icon-sun-bio-farm');

            function applyThemeBioFarm(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedBioFarm', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeBioFarm = localStorage.getItem('theme_bio_farm');
            if (!savedThemeBioFarm) {
                savedThemeBioFarm = bodyElement.classList.contains('dark-mode') ? 'dark' : 'light';
            } else {
                applyThemeBioFarm(savedThemeBioFarm);
            }

            if (themeToggler) {
                applyThemeBioFarm(bodyElement.classList.contains('dark-mode') ? 'dark' : 'light');

                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeBioFarm(newTheme);
                    localStorage.setItem('theme_bio_farm', newTheme);
                });
            }
        });
    </script>
</body>

</html>