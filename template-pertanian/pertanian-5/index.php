<?php // File: index.php - Template Website Pertanian 5 (AgroFutura) 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroFutura Farm - Inovasi Pertanian Organik & Teknologi</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Exo 2 (Futuristik, modern) & Inter (Clean body) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri/Lightbox) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: Swiper CSS (Untuk Carousel/Slider) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pertanian AgroFutura */
        :root {
            /* Light Mode (Default) */
            --bg-light-farm5: #FDFEFF;
            /* Putih kebiruan sangat terang */
            --text-light-farm5: #1A2B3C;
            /* Biru tua untuk teks */
            --card-bg-light-farm5: #FFFFFF;
            --border-light-farm5: #DDE6ED;
            --primary-futura-farm: #00A896;
            /* Teal/Hijau laut modern */
            --secondary-futura-farm: #F0C808;
            /* Kuning emas cerah */
            --accent-futura-farm: #02C39A;
            /* Hijau mint sebagai aksen */
            --muted-text-light-farm5: #52616B;

            /* Dark Mode Variables */
            --bg-dark-farm5: #0F172A;
            /* Biru malam sangat gelap */
            --text-dark-farm5: #E2E8F0;
            /* Putih kebiruan pucat */
            --card-bg-dark-farm5: #1E293B;
            /* Biru abu-abu gelap untuk kartu */
            --border-dark-farm5: #334155;
            --primary-futura-farm-dark: #00CBA9;
            /* Teal lebih terang */
            --secondary-futura-farm-dark: #F3D34A;
            /* Kuning emas lebih terang */
            --accent-futura-farm-dark: #03DAC5;
            /* Hijau mint lebih terang */
            --muted-text-dark-farm5: #94A3B8;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.7;
            background-color: var(--bg-light-farm5);
            color: var(--text-light-farm5);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Exo 2', sans-serif;
            font-weight: 700;
            color: var(--text-light-farm5);
            transition: color 0.3s ease;
            letter-spacing: 0.5px;
        }

        .section-futura-farm {
            padding: 90px 0;
            overflow: hidden;
            position: relative;
        }

        .section-title-futura-farm {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-futura-farm h2 {
            font-size: 2.8rem;
            font-weight: 800;
            /* Sangat tebal */
            color: var(--primary-futura-farm);
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .section-title-futura-farm h2 .highlight-yellow {
            color: var(--secondary-futura-farm);
            /* Bisa ditambahkan efek text-stroke atau text-shadow */
        }

        .section-title-futura-farm .title-deco-line {
            /* Garis dekoratif bawah judul */
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-futura-farm), var(--secondary-futura-farm));
            margin: 10px auto 0;
            border-radius: 2px;
            transition: background 0.3s ease;
        }

        .section-title-futura-farm p.subtitle-futura-farm {
            font-size: 1.15rem;
            color: var(--muted-text-light-farm5);
            max-width: 750px;
            margin: 20px auto 0 auto;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            transition: color 0.3s ease;
        }

        .btn-futura-primary {
            background: linear-gradient(45deg, var(--primary-futura-farm), var(--accent-futura-farm));
            border: none;
            color: #fff;
            padding: 12px 32px;
            font-weight: 600;
            font-family: 'Exo 2', sans-serif;
            border-radius: 6px;
            /* Sudut sedikit membulat */
            transition: all 0.35s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0, 168, 150, 0.3);
            /* Bayangan dari warna primer */
        }

        .btn-futura-primary:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 7px 20px rgba(2, 195, 154, 0.4);
            /* Bayangan dari warna aksen */
            background: linear-gradient(45deg, var(--accent-futura-farm), var(--primary-futura-farm));
            color: #fff;
        }

        .btn-futura-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-futura-farm);
            color: var(--secondary-futura-farm);
            padding: 10px 30px;
            font-weight: 600;
            font-family: 'Exo 2', sans-serif;
            border-radius: 6px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-futura-secondary:hover {
            background-color: var(--secondary-futura-farm);
            color: var(--text-light-farm5);
            /* Atau warna kontras lain */
            box-shadow: 0 4px 15px rgba(240, 200, 8, 0.3);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-farm5);
            color: var(--text-dark-farm5);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-farm5);
        }

        body.dark-mode .section-title-futura-farm h2 {
            color: var(--primary-futura-farm-dark);
        }

        body.dark-mode .section-title-futura-farm h2 .highlight-yellow {
            color: var(--secondary-futura-farm-dark);
        }

        body.dark-mode .section-title-futura-farm .title-deco-line {
            background: linear-gradient(90deg, var(--primary-futura-farm-dark), var(--secondary-futura-farm-dark));
        }

        body.dark-mode .section-title-futura-farm p.subtitle-futura-farm {
            color: var(--muted-text-dark-farm5);
        }

        body.dark-mode .btn-futura-primary {
            background: linear-gradient(45deg, var(--primary-futura-farm-dark), var(--accent-futura-farm-dark));
            box-shadow: 0 4px 15px rgba(0, 203, 169, 0.3);
        }

        body.dark-mode .btn-futura-primary:hover {
            box-shadow: 0 7px 20px rgba(3, 218, 197, 0.4);
            background: linear-gradient(45deg, var(--accent-futura-farm-dark), var(--primary-futura-farm-dark));
        }

        body.dark-mode .btn-futura-secondary {
            border-color: var(--secondary-futura-farm-dark);
            color: var(--secondary-futura-farm-dark);
        }

        body.dark-mode .btn-futura-secondary:hover {
            background-color: var(--secondary-futura-farm-dark);
            color: var(--bg-dark-farm5);
            box-shadow: 0 4px 15px rgba(243, 211, 74, 0.3);
        }

        /* Preloader */
        #preloader-futura-farm {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-farm5);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.7s ease-out 0.5s;
        }

        body.dark-mode #preloader-futura-farm {
            background-color: var(--bg-dark-farm5);
        }

        #preloader-futura-farm.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-futura-farm {
            /* Loader dengan efek "data stream" */
            width: 60px;
            height: 60px;
            position: relative;
        }

        .loader-futura-farm .stream-line {
            position: absolute;
            width: 3px;
            background-color: var(--primary-futura-farm);
            border-radius: 2px;
            animation: dataStream 1.2s infinite ease-out;
        }

        body.dark-mode .loader-futura-farm .stream-line {
            background-color: var(--primary-futura-farm-dark);
        }

        .loader-futura-farm .stream-line:nth-child(1) {
            left: 0;
            height: 30%;
            animation-delay: 0s;
        }

        .loader-futura-farm .stream-line:nth-child(2) {
            left: 10px;
            height: 50%;
            animation-delay: 0.1s;
        }

        .loader-futura-farm .stream-line:nth-child(3) {
            left: 20px;
            height: 70%;
            animation-delay: 0.2s;
        }

        .loader-futura-farm .stream-line:nth-child(4) {
            left: 30px;
            height: 50%;
            animation-delay: 0.3s;
        }

        .loader-futura-farm .stream-line:nth-child(5) {
            left: 40px;
            height: 30%;
            animation-delay: 0.4s;
        }

        @keyframes dataStream {
            0% {
                transform: scaleY(0);
                transform-origin: bottom;
            }

            50% {
                transform: scaleY(1);
                transform-origin: bottom;
            }

            51% {
                transform: scaleY(1);
                transform-origin: top;
            }

            100% {
                transform: scaleY(0);
                transform-origin: top;
            }
        }


        /* Back to top button */
        .back-to-top-futura-farm {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-futura-farm);
            width: 44px;
            height: 44px;
            border-radius: 6px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-futura-farm i {
            font-size: 20px;
            color: #fff;
        }

        .back-to-top-futura-farm:hover {
            background: #008A75;
            transform: scale(1.05);
        }

        /* Lebih gelap */
        .back-to-top-futura-farm.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-futura-farm {
            background: var(--primary-futura-farm-dark);
        }

        body.dark-mode .back-to-top-futura-farm:hover {
            background: #00A786;
        }

        /* Tombol Theme Toggle */
        .theme-toggle-button-futura-farm {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light-farm5);
            border: 1px solid var(--border-light-farm5);
            color: var(--text-light-farm5);
            width: 44px;
            height: 44px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .theme-toggle-button-futura-farm:hover {
            background-color: #e9ecef;
            transform: rotate(45deg);
        }

        .theme-toggle-button-futura-farm i {
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .theme-toggle-button-futura-farm:hover i {
            transform: scale(1.1);
        }

        .theme-toggle-button-futura-farm .icon-sun-futura-farm {
            display: none;
        }

        body.dark-mode .theme-toggle-button-futura-farm {
            background-color: var(--card-bg-dark-farm5);
            border-color: var(--border-dark-farm5);
            color: var(--text-dark-farm5);
        }

        body.dark-mode .theme-toggle-button-futura-farm:hover {
            background-color: #2A3B4D;
        }

        body.dark-mode .theme-toggle-button-futura-farm .icon-moon-futura-farm {
            display: none;
        }

        body.dark-mode .theme-toggle-button-futura-farm .icon-sun-futura-farm {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_futura_farm']) && $_COOKIE['theme_futura_farm'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-futura-farm">
        <div class="loader-futura-farm">
            <div class="stream-line"></div>
            <div class="stream-line"></div>
            <div class="stream-line"></div>
            <div class="stream-line"></div>
            <div class="stream-line"></div>
        </div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website pertanian futuristik */
    include 'components/header_pertanian_futuristik.php';
    ?>

    <?php include 'components/hero_pertanian_futuristik_anim.php'; ?>
    <?php include 'components/tentang_kami_pertanian_teknologi.php'; ?>
    <?php include 'components/solusi_agritech_pertanian.php'; ?>
    <?php include 'components/inovasi_riset_pertanian.php'; ?>
    <?php include 'components/produk_digital_pertanian.php'; ?>
    <?php include 'components/studi_kasus_pertanian_modern.php'; ?>
    <?php include 'components/kontak_pertanian_futuristik_osm.php'; ?>
    <?php include 'components/footer_pertanian_tech_savvy.php'; ?>

    <a href="#" class="back-to-top-futura-farm"><i class="fas fa-angle-up"></i></a>

    <button class="theme-toggle-button-futura-farm" id="themeTogglerFuturaFarm" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-futura-farm"></i>
        <i class="fas fa-sun icon-sun-futura-farm"></i>
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
                offset: 70,
                easing: 'ease-out-expo',
            });

            // Komentar JavaScript: Logika Preloader
            const preloader = document.getElementById('preloader-futura-farm');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 600);
                });
            }

            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-futura-farm');
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
            const themeToggler = document.getElementById('themeTogglerFuturaFarm');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-futura-farm');
            const sunIcon = themeToggler.querySelector('.icon-sun-futura-farm');

            function applyThemeFuturaFarm(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedFuturaFarm', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeFuturaFarm = localStorage.getItem('theme_futura_farm');
            if (!savedThemeFuturaFarm) {
                savedThemeFuturaFarm = bodyElement.classList.contains('dark-mode') ? 'dark' : 'light';
            } else {
                applyThemeFuturaFarm(savedThemeFuturaFarm);
            }

            if (themeToggler) {
                applyThemeFuturaFarm(bodyElement.classList.contains('dark-mode') ? 'dark' : 'light');

                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeFuturaFarm(newTheme);
                    localStorage.setItem('theme_futura_farm', newTheme);
                });
            }
        });
    </script>
</body>

</html>