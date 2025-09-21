<?php // File: index.php - Template Website Pertanian 5 (EcoSymphony Farm) 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoSymphony Farm - Harmoni Alam & Inovasi Pertanian</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Lora (Headings - elegan, serif) & Nunito Sans (Body - bersih, sans-serif) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600;700&family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri/Lightbox) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: Swiper CSS (Untuk Carousel/Slider) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pertanian EcoSymphony */
        :root {
            /* Light Mode (Default) */
            --bg-light-farm5: #F5F5F0;
            /* Krem sangat terang, nuansa tanah liat */
            --text-light-farm5: #382E2E;
            /* Coklat tua pekat */
            --card-bg-light-farm5: #FFFFFF;
            --border-light-farm5: #E5E0D5;
            --primary-eco-farm: #556B2F;
            /* Hijau zaitun tua (OliveDrab) */
            --secondary-eco-farm: #DAA520;
            /* Emas tua (Goldenrod) */
            --accent-eco-farm: #A0522D;
            /* Coklat kemerahan (Sienna) */
            --muted-text-light-farm5: #6A5F5F;

            /* Dark Mode Variables */
            --bg-dark-farm5: #2A2F2A;
            /* Abu-abu kehijauan sangat gelap */
            --text-dark-farm5: #E8E8E0;
            /* Krem pucat */
            --card-bg-dark-farm5: #384038;
            /* Abu-abu kehijauan gelap untuk kartu */
            --border-dark-farm5: #4A524A;
            --primary-eco-farm-dark: #8FBC8F;
            /* Hijau laut gelap pucat (DarkSeaGreen) */
            --secondary-eco-farm-dark: #F0E68C;
            /* Khaki (kuning pucat) */
            --accent-eco-farm-dark: #CD853F;
            /* Peru (coklat oranye) */
            --muted-text-dark-farm5: #B0B8B0;
        }

        body {
            font-family: 'Nunito Sans', sans-serif;
            line-height: 1.7;
            background-color: var(--bg-light-farm5);
            color: var(--text-light-farm5);
            transition: background-color 0.35s ease, color 0.35s ease;
            font-size: 16px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Lora', serif;
            font-weight: 700;
            color: var(--text-light-farm5);
            transition: color 0.35s ease;
        }

        .section-ecosymphony {
            padding: 90px 0;
            overflow: hidden;
            position: relative;
        }

        .section-title-ecosymphony {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-ecosymphony h2 {
            font-size: 2.6rem;
            /* Ukuran judul section */
            font-weight: 700;
            color: var(--primary-eco-farm);
            margin-bottom: 15px;
            display: inline-block;
            position: relative;
            padding-bottom: 10px;
        }

        /* Dekorasi garis bawah organik untuk judul section */
        .section-title-ecosymphony h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            /* Lebar awal */
            height: 3px;
            background-color: var(--secondary-eco-farm);
            border-radius: 3px;
            transition: width 0.4s ease, background-color 0.3s ease;
        }

        .section-title-ecosymphony:hover h2::after {
            width: 100px;
            /* Lebar bertambah saat hover section title (atau h2) */
        }

        .section-title-ecosymphony p.subtitle-ecosymphony {
            font-size: 1.15rem;
            color: var(--muted-text-light-farm5);
            max-width: 750px;
            margin: 15px auto 0 auto;
            font-family: 'Nunito Sans', sans-serif;
            font-style: italic;
            /* Subtitle italic */
            transition: color 0.3s ease;
        }

        .btn-eco-primary {
            background-color: var(--primary-eco-farm);
            border: 2px solid var(--primary-eco-farm);
            color: #fff;
            padding: 12px 30px;
            font-weight: 600;
            font-family: 'Nunito Sans', sans-serif;
            border-radius: 50px;
            /* Tombol sangat bulat */
            transition: all 0.3s ease;
            text-transform: capitalize;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 12px rgba(85, 107, 47, 0.3);
            /* Bayangan dari warna primer */
        }

        .btn-eco-primary:hover {
            background-color: transparent;
            color: var(--primary-eco-farm);
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(85, 107, 47, 0.4);
        }

        .btn-eco-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-eco-farm);
            color: var(--secondary-eco-farm);
            padding: 10px 28px;
            font-weight: 600;
            font-family: 'Nunito Sans', sans-serif;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: capitalize;
        }

        .btn-eco-secondary:hover {
            background-color: var(--secondary-eco-farm);
            color: var(--text-light-farm5);
            box-shadow: 0 4px 12px rgba(218, 165, 32, 0.3);
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

        body.dark-mode .section-title-ecosymphony h2 {
            color: var(--primary-eco-farm-dark);
        }

        body.dark-mode .section-title-ecosymphony h2::after {
            background-color: var(--secondary-eco-farm-dark);
        }

        body.dark-mode .section-title-ecosymphony p.subtitle-ecosymphony {
            color: var(--muted-text-dark-farm5);
        }

        body.dark-mode .btn-eco-primary {
            background-color: var(--primary-eco-farm-dark);
            border-color: var(--primary-eco-farm-dark);
            box-shadow: 0 4px 12px rgba(143, 188, 143, 0.3);
        }

        body.dark-mode .btn-eco-primary:hover {
            color: var(--primary-eco-farm-dark);
            box-shadow: 0 6px 18px rgba(143, 188, 143, 0.4);
        }

        body.dark-mode .btn-eco-secondary {
            border-color: var(--secondary-eco-farm-dark);
            color: var(--secondary-eco-farm-dark);
        }

        body.dark-mode .btn-eco-secondary:hover {
            background-color: var(--secondary-eco-farm-dark);
            color: var(--bg-dark-farm5);
            box-shadow: 0 4px 12px rgba(240, 230, 140, 0.3);
        }

        /* Preloader */
        #preloader-ecosymphony {
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

        body.dark-mode #preloader-ecosymphony {
            background-color: var(--bg-dark-farm5);
        }

        #preloader-ecosymphony.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-ecosymphony {
            /* Loader dengan efek "ripple" atau gelombang air */
            width: 60px;
            height: 60px;
            position: relative;
        }

        .loader-ecosymphony::before,
        .loader-ecosymphony::after {
            content: '';
            position: absolute;
            border: 3px solid var(--primary-eco-farm);
            opacity: 1;
            border-radius: 50%;
            animation: rippleEffect 1.5s cubic-bezier(0, 0.2, 0.8, 1) infinite;
        }

        body.dark-mode .loader-ecosymphony::before,
        body.dark-mode .loader-ecosymphony::after {
            border-color: var(--primary-eco-farm-dark);
        }

        .loader-ecosymphony::after {
            animation-delay: -0.75s;
        }

        @keyframes rippleEffect {
            0% {
                top: 27px;
                left: 27px;
                width: 6px;
                height: 6px;
                opacity: 1;
            }

            100% {
                top: 0px;
                left: 0px;
                width: 60px;
                height: 60px;
                opacity: 0;
            }
        }

        /* Back to top button */
        .back-to-top-ecosymphony {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-eco-farm);
            width: 42px;
            height: 42px;
            border-radius: 8px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-ecosymphony i {
            font-size: 18px;
            color: #fff;
        }

        .back-to-top-ecosymphony:hover {
            background: #445725;
            transform: scale(1.05);
        }

        /* Lebih gelap */
        .back-to-top-ecosymphony.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-ecosymphony {
            background: var(--primary-eco-farm-dark);
        }

        body.dark-mode .back-to-top-ecosymphony:hover {
            background: #79A679;
        }

        /* Tombol Theme Toggle */
        .theme-toggle-button-ecosymphony {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light-farm5);
            border: 1px solid var(--border-light-farm5);
            color: var(--text-light-farm5);
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

        .theme-toggle-button-ecosymphony:hover {
            background-color: #e9ecef;
            transform: rotate(-15deg);
        }

        .theme-toggle-button-ecosymphony i {
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .theme-toggle-button-ecosymphony:hover i {
            transform: scale(1.1);
        }

        .theme-toggle-button-ecosymphony .icon-sun-ecosymphony {
            display: none;
        }

        body.dark-mode .theme-toggle-button-ecosymphony {
            background-color: var(--card-bg-dark-farm5);
            border-color: var(--border-dark-farm5);
            color: var(--text-dark-farm5);
        }

        body.dark-mode .theme-toggle-button-ecosymphony:hover {
            background-color: #4A524A;
        }

        body.dark-mode .theme-toggle-button-ecosymphony .icon-moon-ecosymphony {
            display: none;
        }

        body.dark-mode .theme-toggle-button-ecosymphony .icon-sun-ecosymphony {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_ecosymphony_farm']) && $_COOKIE['theme_ecosymphony_farm'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-ecosymphony">
        <div class="loader-ecosymphony"></div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website EcoSymphony Farm */
    include 'components/header_pertanian_ecosymphony.php';
    ?>

    <?php include 'components/hero_pertanian_ecosymphony.php'; ?>
    <?php include 'components/tentang_kami_pertanian_harmoni.php'; ?>
    <?php include 'components/layanan_pertanian_ekologis.php'; ?>
    <?php include 'components/produk_alami_pertanian.php'; ?>
    <?php include 'components/galeri_keindahan_alam_pertanian.php'; ?>
    <?php include 'components/cerita_petani_ekosistem.php'; ?>
    <?php include 'components/kontak_pertanian_alami_osm_v2.php'; ?>
    <?php include 'components/footer_pertanian_natural.php'; ?>

    <a href="#" class="back-to-top-ecosymphony"><i class="fas fa-feather-alt"></i></a> <?php /* Ikon bulu untuk back to top */ ?>

    <button class="theme-toggle-button-ecosymphony" id="themeTogglerEcoSymphony" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-ecosymphony"></i>
        <i class="fas fa-sun icon-sun-ecosymphony"></i>
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
                duration: 950,
                once: true,
                offset: 60,
                easing: 'ease-out-quint', // Easing yang lebih halus
            });

            // Komentar JavaScript: Logika Preloader
            const preloader = document.getElementById('preloader-ecosymphony');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 500);
                });
            }

            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-ecosymphony');
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
            const themeToggler = document.getElementById('themeTogglerEcoSymphony');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-ecosymphony');
            const sunIcon = themeToggler.querySelector('.icon-sun-ecosymphony');

            function applyThemeEcoSymphony(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedEcoSymphony', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeEcoSymphony = localStorage.getItem('theme_ecosymphony_farm');
            if (!savedThemeEcoSymphony) {
                savedThemeEcoSymphony = bodyElement.classList.contains('dark-mode') ? 'dark' : 'light';
            } else {
                applyThemeEcoSymphony(savedThemeEcoSymphony);
            }

            if (themeToggler) {
                applyThemeEcoSymphony(bodyElement.classList.contains('dark-mode') ? 'dark' : 'light');

                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeEcoSymphony(newTheme);
                    localStorage.setItem('theme_ecosymphony_farm', newTheme);
                });
            }
        });
    </script>
</body>

</html>