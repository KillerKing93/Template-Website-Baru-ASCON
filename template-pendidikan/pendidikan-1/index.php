<?php // File: index.php - Template Website Pendidikan 1 (Inspiratif & Modern) 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Institusi Pendidikan Anda - Membangun Masa Depan Cerah</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Poppins (Serbaguna, modern) & Merriweather Sans (Body - mudah dibaca) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Merriweather+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri/Lightbox) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: Swiper CSS (Untuk Carousel/Slider) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pendidikan Inspiratif & Modern */
        :root {
            /* Light Mode (Default) */
            --bg-light-edu1: #F8F9FA;
            /* Abu-abu sangat terang */
            --text-light-edu1: #2C3E50;
            /* Biru tua keabuan untuk teks */
            --card-bg-light-edu1: #FFFFFF;
            --border-light-edu1: #DEE2E6;
            --primary-edu1: #3498DB;
            /* Biru cerah (Peter River) */
            --secondary-edu1: #F1C40F;
            /* Kuning (Sun Flower) */
            --accent-edu1: #E74C3C;
            /* Merah (Alizarin) */
            --muted-text-light-edu1: #5A6268;

            /* Dark Mode Variables */
            --bg-dark-edu1: #2C3E50;
            /* Biru tua keabuan */
            --text-dark-edu1: #ECF0F1;
            /* Putih keabuan */
            --card-bg-dark-edu1: #34495E;
            /* Biru abu-abu lebih gelap */
            --border-dark-edu1: #4A6572;
            --primary-edu1-dark: #5DADE2;
            /* Biru lebih terang */
            --secondary-edu1-dark: #F39C12;
            /* Oranye (Orange) */
            --accent-edu1-dark: #E67E22;
            /* Oranye tua (Carrot) */
            --muted-text-dark-edu1: #BDC3C7;
        }

        body {
            font-family: 'Merriweather Sans', sans-serif;
            line-height: 1.7;
            background-color: var(--bg-light-edu1);
            color: var(--text-light-edu1);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: var(--text-light-edu1);
            transition: color 0.3s ease;
        }

        .section-pendidikan {
            padding: 80px 0;
            overflow: hidden;
            position: relative;
        }

        .section-title-pendidikan {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-pendidikan h2 {
            font-size: 2.6rem;
            font-weight: 800;
            color: var(--primary-edu1);
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-title-pendidikan h2 .highlight-accent-edu {
            color: var(--secondary-edu1);
            /* Bisa ditambahkan efek underline atau background clip */
        }

        .section-title-pendidikan .title-deco-line-edu {
            width: 70px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-edu1), var(--secondary-edu1));
            margin: 10px auto 0;
            border-radius: 2px;
            transition: background 0.3s ease;
        }

        .section-title-pendidikan p.subtitle-pendidikan {
            font-size: 1.1rem;
            color: var(--muted-text-light-edu1);
            max-width: 700px;
            margin: 20px auto 0 auto;
            font-family: 'Merriweather Sans', sans-serif;
            font-weight: 400;
            transition: color 0.3s ease;
        }

        .btn-edu-primary {
            background-color: var(--primary-edu1);
            border: 2px solid var(--primary-edu1);
            color: #fff;
            padding: 10px 28px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            border-radius: 30px;
            /* Tombol bulat */
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 3px 10px rgba(52, 152, 219, 0.3);
        }

        .btn-edu-primary:hover {
            background-color: transparent;
            color: var(--primary-edu1);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
        }

        .btn-edu-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-edu1);
            color: var(--secondary-edu1);
            padding: 8px 25px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            border-radius: 30px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-edu-secondary:hover {
            background-color: var(--secondary-edu1);
            color: var(--text-light-edu1);
            box-shadow: 0 3px 10px rgba(241, 196, 15, 0.3);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-edu1);
            color: var(--text-dark-edu1);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-edu1);
        }

        body.dark-mode .section-title-pendidikan h2 {
            color: var(--primary-edu1-dark);
        }

        body.dark-mode .section-title-pendidikan h2 .highlight-accent-edu {
            color: var(--secondary-edu1-dark);
        }

        body.dark-mode .section-title-pendidikan .title-deco-line-edu {
            background: linear-gradient(90deg, var(--primary-edu1-dark), var(--secondary-edu1-dark));
        }

        body.dark-mode .section-title-pendidikan p.subtitle-pendidikan {
            color: var(--muted-text-dark-edu1);
        }

        body.dark-mode .btn-edu-primary {
            background-color: var(--primary-edu1-dark);
            border-color: var(--primary-edu1-dark);
            box-shadow: 0 3px 10px rgba(93, 173, 226, 0.3);
        }

        body.dark-mode .btn-edu-primary:hover {
            color: var(--primary-edu1-dark);
            box-shadow: 0 5px 15px rgba(93, 173, 226, 0.4);
        }

        body.dark-mode .btn-edu-secondary {
            border-color: var(--secondary-edu1-dark);
            color: var(--secondary-edu1-dark);
        }

        body.dark-mode .btn-edu-secondary:hover {
            background-color: var(--secondary-edu1-dark);
            color: var(--bg-dark-edu1);
            /* Teks kontras */
            box-shadow: 0 3px 10px rgba(243, 156, 18, 0.3);
        }

        /* Preloader */
        #preloader-pendidikan {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-edu1);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.6s ease-out 0.4s;
        }

        body.dark-mode #preloader-pendidikan {
            background-color: var(--bg-dark-edu1);
        }

        #preloader-pendidikan.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-pendidikan {
            /* Loader dengan bentuk buku terbuka */
            width: 50px;
            height: 40px;
            position: relative;
            perspective: 1000px;
        }

        .loader-pendidikan .page {
            width: 50%;
            height: 100%;
            position: absolute;
            top: 0;
            background-color: var(--primary-edu1);
            border: 1px solid var(--border-light-edu1);
            transform-origin: left center;
            animation: bookFlip 1.6s infinite ease-in-out;
        }

        body.dark-mode .loader-pendidikan .page {
            background-color: var(--primary-edu1-dark);
            border-color: var(--border-dark-edu1);
        }

        .loader-pendidikan .page:nth-child(1) {
            left: 0;
            border-radius: 3px 0 0 3px;
        }

        .loader-pendidikan .page:nth-child(2) {
            left: 50%;
            transform-origin: right center;
            animation-delay: -0.8s;
            border-radius: 0 3px 3px 0;
        }

        @keyframes bookFlip {

            0%,
            100% {
                transform: rotateY(0deg);
            }

            50% {
                transform: rotateY(-180deg);
            }
        }


        /* Back to top button */
        .back-to-top-pendidikan {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-edu1);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-pendidikan i {
            font-size: 18px;
            color: #fff;
        }

        .back-to-top-pendidikan:hover {
            background: #2980B9;
            transform: scale(1.05);
        }

        /* Lebih gelap */
        .back-to-top-pendidikan.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-pendidikan {
            background: var(--primary-edu1-dark);
        }

        body.dark-mode .back-to-top-pendidikan:hover {
            background: #4DA8DB;
        }

        /* Tombol Theme Toggle */
        .theme-toggle-button-pendidikan {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light-edu1);
            border: 1px solid var(--border-light-edu1);
            color: var(--text-light-edu1);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .theme-toggle-button-pendidikan:hover {
            background-color: #e9ecef;
            transform: rotate(360deg);
        }

        .theme-toggle-button-pendidikan i {
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .theme-toggle-button-pendidikan .icon-sun-pendidikan {
            display: none;
        }

        body.dark-mode .theme-toggle-button-pendidikan {
            background-color: var(--card-bg-dark-edu1);
            border-color: var(--border-dark-edu1);
            color: var(--text-dark-edu1);
        }

        body.dark-mode .theme-toggle-button-pendidikan:hover {
            background-color: #4A6572;
        }

        body.dark-mode .theme-toggle-button-pendidikan .icon-moon-pendidikan {
            display: none;
        }

        body.dark-mode .theme-toggle-button-pendidikan .icon-sun-pendidikan {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_pendidikan']) && $_COOKIE['theme_pendidikan'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-pendidikan">
        <div class="loader-pendidikan">
            <div class="page"></div>
            <div class="page"></div>
        </div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website pendidikan */
    include 'components/header_pendidikan.php';
    ?>

    <?php include 'components/hero_pendidikan_inspiratif.php'; ?>
    <?php include 'components/tentang_kami_pendidikan_visi.php'; ?>
    <?php include 'components/program_unggulan_pendidikan.php'; ?>
    <?php include 'components/fasilitas_pendidikan_modern.php'; ?>
    <?php include 'components/galeri_kegiatan_pendidikan.php'; ?>
    <?php include 'components/berita_acara_pendidikan.php'; ?>
    <?php include 'components/kontak_pendidikan_osm.php'; ?>
    <?php include 'components/footer_pendidikan_informatif.php'; ?>

    <a href="#" class="back-to-top-pendidikan"><i class="fas fa-graduation-cap"></i></a> <?php /* Ikon topi toga */ ?>

    <button class="theme-toggle-button-pendidikan" id="themeTogglerPendidikan" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-pendidikan"></i>
        <i class="fas fa-sun icon-sun-pendidikan"></i>
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
                offset: 60,
                easing: 'ease-in-out-sine',
            });

            // Komentar JavaScript: Logika Preloader
            const preloader = document.getElementById('preloader-pendidikan');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 500);
                });
            }

            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-pendidikan');
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
            const themeToggler = document.getElementById('themeTogglerPendidikan');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-pendidikan');
            const sunIcon = themeToggler.querySelector('.icon-sun-pendidikan');

            function applyThemePendidikan(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedPendidikan', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemePendidikan = localStorage.getItem('theme_pendidikan');
            if (!savedThemePendidikan) {
                savedThemePendidikan = bodyElement.classList.contains('dark-mode') ? 'dark' : 'light';
            } else {
                applyThemePendidikan(savedThemePendidikan);
            }

            if (themeToggler) {
                applyThemePendidikan(bodyElement.classList.contains('dark-mode') ? 'dark' : 'light');

                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemePendidikan(newTheme);
                    localStorage.setItem('theme_pendidikan', newTheme);
                });
            }
        });
    </script>
</body>

</html>