<?php // File: index.php - Template Website Pertanian 2 (Unik & Kompleks) 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Pertanian Modern Anda - Inovasi Agrikultur</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Montserrat (Modern & Clean) & Source Sans Pro (Body) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri/Lightbox) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: Swiper CSS (Untuk Carousel/Slider) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pertanian Modern & Dinamis */
        :root {
            /* Light Mode (Default) */
            --bg-light-farm2: #FDFCFB;
            /* Putih gading yang sangat terang */
            --text-light-farm2: #2C3333;
            /* Abu-abu gelap kebiruan */
            --card-bg-light-farm2: #FFFFFF;
            --border-light-farm2: #E0E0E0;
            --primary-modern-farm: #2E7D32;
            /* Hijau tua modern */
            --secondary-modern-farm: #FFB300;
            /* Kuning amber sebagai aksen kuat */
            --accent-modern-farm: #607D8B;
            /* Biru abu-abu netral */
            --muted-text-light-farm2: #5F6A6A;

            /* Dark Mode Variables */
            --bg-dark-farm2: #1B262C;
            /* Biru malam yang gelap */
            --text-dark-farm2: #E8F6EF;
            /* Putih kehijauan pucat */
            --card-bg-dark-farm2: #0F4C75;
            /* Biru tua untuk kartu */
            --border-dark-farm2: #3282B8;
            /* Biru sebagai border */
            --primary-modern-farm-dark: #66BB6A;
            /* Hijau lebih terang */
            --secondary-modern-farm-dark: #FFCA28;
            /* Kuning amber lebih terang */
            --accent-modern-farm-dark: #90A4AE;
            /* Biru abu-abu lebih terang */
            --muted-text-dark-farm2: #BBE1FA;
        }

        body {
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 1.75;
            background-color: var(--bg-light-farm2);
            color: var(--text-light-farm2);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 17px;
            /* Sedikit lebih besar */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--text-light-farm2);
            transition: color 0.3s ease;
        }

        .section-pertanian-modern {
            padding: 90px 0;
            overflow: hidden;
            position: relative;
            /* Untuk elemen dekoratif */
        }

        .section-title-modern-farm {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-modern-farm h2 {
            font-size: 2.6rem;
            font-weight: 800;
            /* Lebih tebal */
            color: var(--primary-modern-farm);
            margin-bottom: 15px;
            text-transform: uppercase;
            /* Judul uppercase */
            letter-spacing: 1px;
        }

        .section-title-modern-farm h2 span.highlight-accent {
            /* Sorotan dengan warna aksen */
            color: var(--secondary-modern-farm);
        }

        .section-title-modern-farm .line-decorator {
            /* Garis dekoratif */
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-modern-farm), var(--secondary-modern-farm));
            margin: 10px auto 0;
            border-radius: 2px;
            transition: background 0.3s ease;
        }

        .section-title-modern-farm p.subtitle-modern-farm {
            font-size: 1.15rem;
            color: var(--muted-text-light-farm2);
            max-width: 750px;
            margin: 20px auto 0 auto;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
            /* Subtitle lebih ringan */
            transition: color 0.3s ease;
        }

        .btn-farm-modern-primary {
            background-color: var(--primary-modern-farm);
            border: 2px solid var(--primary-modern-farm);
            color: #fff;
            padding: 12px 32px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            border-radius: 5px;
            /* Sudut sedikit tajam */
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            box-shadow: 0 4px 12px rgba(46, 125, 50, 0.3);
        }

        .btn-farm-modern-primary:hover {
            background-color: transparent;
            color: var(--primary-modern-farm);
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(46, 125, 50, 0.4);
        }

        .btn-farm-modern-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-modern-farm);
            color: var(--secondary-modern-farm);
            padding: 10px 30px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .btn-farm-modern-secondary:hover {
            background-color: var(--secondary-modern-farm);
            color: var(--text-light-farm2);
            /* Atau warna kontras lain */
            box-shadow: 0 4px 12px rgba(255, 179, 0, 0.3);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-farm2);
            color: var(--text-dark-farm2);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-farm2);
        }

        body.dark-mode .section-title-modern-farm h2 {
            color: var(--primary-modern-farm-dark);
        }

        body.dark-mode .section-title-modern-farm h2 span.highlight-accent {
            color: var(--secondary-modern-farm-dark);
        }

        body.dark-mode .section-title-modern-farm .line-decorator {
            background: linear-gradient(90deg, var(--primary-modern-farm-dark), var(--secondary-modern-farm-dark));
        }

        body.dark-mode .section-title-modern-farm p.subtitle-modern-farm {
            color: var(--muted-text-dark-farm2);
        }

        body.dark-mode .btn-farm-modern-primary {
            background-color: var(--primary-modern-farm-dark);
            border-color: var(--primary-modern-farm-dark);
            box-shadow: 0 4px 12px rgba(102, 187, 106, 0.3);
        }

        body.dark-mode .btn-farm-modern-primary:hover {
            color: var(--primary-modern-farm-dark);
            box-shadow: 0 6px 18px rgba(102, 187, 106, 0.4);
        }

        body.dark-mode .btn-farm-modern-secondary {
            border-color: var(--secondary-modern-farm-dark);
            color: var(--secondary-modern-farm-dark);
        }

        body.dark-mode .btn-farm-modern-secondary:hover {
            background-color: var(--secondary-modern-farm-dark);
            color: var(--bg-dark-farm2);
            box-shadow: 0 4px 12px rgba(255, 202, 40, 0.3);
        }

        /* Preloader */
        #preloader-pertanian-modern {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-farm2);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.6s ease-out 0.4s;
        }

        body.dark-mode #preloader-pertanian-modern {
            background-color: var(--bg-dark-farm2);
        }

        #preloader-pertanian-modern.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-modern-farm {
            /* Loader dengan beberapa bar */
            display: flex;
            align-items: flex-end;
            /* Agar bar tumbuh dari bawah */
            height: 50px;
        }

        .loader-modern-farm .bar {
            width: 8px;
            height: 10px;
            /* Tinggi awal */
            margin: 0 3px;
            background-color: var(--primary-modern-farm);
            border-radius: 2px;
            animation: barGrow 1.2s infinite ease-in-out;
        }

        body.dark-mode .loader-modern-farm .bar {
            background-color: var(--primary-modern-farm-dark);
        }

        .loader-modern-farm .bar:nth-child(2) {
            animation-delay: 0.1s;
        }

        .loader-modern-farm .bar:nth-child(3) {
            animation-delay: 0.2s;
        }

        .loader-modern-farm .bar:nth-child(4) {
            animation-delay: 0.3s;
        }

        @keyframes barGrow {

            0%,
            100% {
                height: 10px;
                opacity: 0.5;
            }

            50% {
                height: 50px;
                opacity: 1;
            }
        }


        /* Back to top button */
        .back-to-top-modern-farm {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-modern-farm);
            width: 44px;
            height: 44px;
            border-radius: 5px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-modern-farm i {
            font-size: 20px;
            color: #fff;
        }

        .back-to-top-modern-farm:hover {
            background: #1E5E20;
            transform: translateY(-2px);
        }

        /* Lebih gelap */
        .back-to-top-modern-farm.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-modern-farm {
            background: var(--primary-modern-farm-dark);
        }

        body.dark-mode .back-to-top-modern-farm:hover {
            background: #4C9F4F;
        }

        /* Tombol Theme Toggle */
        .theme-toggle-button-modern-farm {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light-farm2);
            border: 1px solid var(--border-light-farm2);
            color: var(--text-light-farm2);
            width: 44px;
            height: 44px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .theme-toggle-button-modern-farm:hover {
            background-color: #e9ecef;
            transform: scale(1.05);
        }

        .theme-toggle-button-modern-farm i {
            font-size: 1.2rem;
        }

        .theme-toggle-button-modern-farm .icon-sun-modern-farm {
            display: none;
        }

        body.dark-mode .theme-toggle-button-modern-farm {
            background-color: var(--card-bg-dark-farm2);
            border-color: var(--border-dark-farm2);
            color: var(--text-dark-farm2);
        }

        body.dark-mode .theme-toggle-button-modern-farm:hover {
            background-color: #163A5F;
        }

        body.dark-mode .theme-toggle-button-modern-farm .icon-moon-modern-farm {
            display: none;
        }

        body.dark-mode .theme-toggle-button-modern-farm .icon-sun-modern-farm {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_pertanian_modern']) && $_COOKIE['theme_pertanian_modern'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-pertanian-modern">
        <div class="loader-modern-farm">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website pertanian modern */
    include 'components/header_pertanian_modern.php';
    ?>

    <?php include 'components/hero_pertanian_dinamis.php'; ?>
    <?php include 'components/tentang_kami_pertanian_detail.php'; ?>
    <?php include 'components/layanan_agroteknologi_pertanian.php'; ?>
    <?php include 'components/produk_katalog_pertanian.php'; ?>
    <?php include 'components/proses_panen_pertanian.php'; ?>
    <?php include 'components/testimoni_petani_mitra.php'; ?>
    <?php include 'components/kontak_pertanian_interaktif_osm.php'; ?>
    <?php include 'components/footer_pertanian_informatif.php'; ?>

    <a href="#" class="back-to-top-modern-farm"><i class="fas fa-chevron-up"></i></a>

    <button class="theme-toggle-button-modern-farm" id="themeTogglerPertanianModern" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-modern-farm"></i>
        <i class="fas fa-sun icon-sun-modern-farm"></i>
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
                duration: 900,
                once: true,
                offset: 60, // Trigger sedikit lebih awal
                easing: 'ease-out-cubic',
            });

            // Komentar JavaScript: Logika Preloader
            const preloader = document.getElementById('preloader-pertanian-modern');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 500);
                });
            }

            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-modern-farm');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 200) {
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
            const themeToggler = document.getElementById('themeTogglerPertanianModern');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-modern-farm');
            const sunIcon = themeToggler.querySelector('.icon-sun-modern-farm');

            function applyThemeModern(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedPertanianModern', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeModern = localStorage.getItem('theme_pertanian_modern');
            if (!savedThemeModern) {
                savedThemeModern = bodyElement.classList.contains('dark-mode') ? 'dark' : 'light';
            } else {
                applyThemeModern(savedThemeModern);
            }

            if (themeToggler) {
                applyThemeModern(bodyElement.classList.contains('dark-mode') ? 'dark' : 'light');

                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeModern(newTheme);
                    localStorage.setItem('theme_pertanian_modern', newTheme);
                });
            }
        });
    </script>
</body>

</html>