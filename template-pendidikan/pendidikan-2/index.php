<?php // File: index.php - Template Website Pendidikan 2 (EduVerse - Interaktif) 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduVerse Campus - Platform Pendidikan Interaktif Masa Depan</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Orbitron (Futuristik, techy) & Montserrat (Clean, modern body) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri/Lightbox) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: Swiper CSS (Untuk Carousel/Slider) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pendidikan EduVerse */
        :root {
            /* Light Mode (Default) */
            --bg-light-edu2: #E9F1F7;
            /* Biru langit sangat pucat */
            --text-light-edu2: #1C3F5F;
            /* Biru tua untuk teks */
            --card-bg-light-edu2: #FFFFFF;
            --border-light-edu2: #C9D6E2;
            --primary-edu2: #0077CC;
            /* Biru cerah (Azure) */
            --secondary-edu2: #FF6B6B;
            /* Merah koral sebagai aksen */
            --accent-edu2: #4ECDC4;
            /* Teal/Mint */
            --muted-text-light-edu2: #5A738B;

            /* Dark Mode Variables */
            --bg-dark-edu2: #0A192F;
            /* Biru malam sangat gelap */
            --text-dark-edu2: #CCD6F6;
            /* Putih kebiruan pucat */
            --card-bg-dark-edu2: #172A45;
            /* Biru abu-abu gelap untuk kartu */
            --border-dark-edu2: #2A405A;
            --primary-edu2-dark: #33A1FF;
            /* Biru lebih terang */
            --secondary-edu2-dark: #FF8787;
            /* Merah koral lebih terang */
            --accent-edu2-dark: #6FFFE9;
            /* Teal/Mint lebih terang */
            --muted-text-dark-edu2: #8892B0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.7;
            background-color: var(--bg-light-edu2);
            color: var(--text-light-edu2);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Orbitron', sans-serif;
            /* Font techy untuk heading */
            font-weight: 700;
            color: var(--text-light-edu2);
            transition: color 0.3s ease;
            letter-spacing: 0.5px;
        }

        .section-eduverse {
            padding: 90px 0;
            overflow: hidden;
            position: relative;
        }

        .section-title-eduverse {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-eduverse h2 {
            font-size: 2.7rem;
            font-weight: 900;
            /* Sangat tebal */
            color: var(--primary-edu2);
            margin-bottom: 15px;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
        }

        /* Efek "glitch" atau "digital scan" pada judul */
        .section-title-eduverse h2 span.highlight-accent-edu2 {
            color: var(--secondary-edu2);
            position: relative;
        }

        .section-title-eduverse h2 span.highlight-accent-edu2::before,
        .section-title-eduverse h2 span.highlight-accent-edu2::after {
            content: attr(data-text);
            /* Teks sama dengan highlight */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: var(--bg-light-edu2);
            /* Sembunyikan teks asli (sesuaikan dengan bg section) */
        }

        body.dark-mode .section-title-eduverse h2 span.highlight-accent-edu2::before,
        body.dark-mode .section-title-eduverse h2 span.highlight-accent-edu2::after {
            background: var(--bg-dark-edu2);
        }

        .section-title-eduverse h2 span.highlight-accent-edu2::before {
            left: 2px;
            text-shadow: -1px 0 var(--accent-edu2);
            animation: titleGlitch1 2.5s infinite linear alternate-reverse;
        }

        .section-title-eduverse h2 span.highlight-accent-edu2::after {
            left: -2px;
            text-shadow: 1px 0 var(--secondary-edu2);
            animation: titleGlitch2 3s infinite linear alternate-reverse;
        }

        @keyframes titleGlitch1 {
            0% {
                clip-path: inset(30% 0 60% 0);
            }

            100% {
                clip-path: inset(5% 0 80% 0);
            }
        }

        @keyframes titleGlitch2 {
            0% {
                clip-path: inset(70% 0 10% 0);
            }

            100% {
                clip-path: inset(25% 0 50% 0);
            }
        }

        .section-title-eduverse p.subtitle-eduverse {
            font-size: 1.1rem;
            color: var(--muted-text-light-edu2);
            max-width: 700px;
            margin: 20px auto 0 auto;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            transition: color 0.3s ease;
        }

        .btn-eduverse-primary {
            background: linear-gradient(135deg, var(--primary-edu2), var(--accent-edu2));
            border: none;
            color: #fff;
            padding: 12px 30px;
            font-weight: 600;
            font-family: 'Orbitron', sans-serif;
            border-radius: 5px;
            transition: all 0.35s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0, 119, 204, 0.3);
            /* Bayangan dari warna primer */
        }

        .btn-eduverse-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 7px 20px rgba(78, 205, 196, 0.4);
            /* Bayangan dari warna aksen */
            background: linear-gradient(135deg, var(--accent-edu2), var(--primary-edu2));
            color: #fff;
        }

        .btn-eduverse-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-edu2);
            color: var(--secondary-edu2);
            padding: 10px 28px;
            font-weight: 600;
            font-family: 'Orbitron', sans-serif;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-eduverse-secondary:hover {
            background-color: var(--secondary-edu2);
            color: var(--bg-light-edu2);
            /* Atau warna kontras lain */
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-edu2);
            color: var(--text-dark-edu2);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-edu2);
        }

        body.dark-mode .section-title-eduverse h2 {
            color: var(--primary-edu2-dark);
        }

        body.dark-mode .section-title-eduverse h2 span.highlight-accent-edu2 {
            color: var(--secondary-edu2-dark);
        }

        body.dark-mode .section-title-eduverse h2 span.highlight-accent-edu2::before {
            text-shadow: -1px 0 var(--accent-edu2-dark);
        }

        body.dark-mode .section-title-eduverse h2 span.highlight-accent-edu2::after {
            text-shadow: 1px 0 var(--secondary-edu2-dark);
        }

        body.dark-mode .section-title-eduverse p.subtitle-eduverse {
            color: var(--muted-text-dark-edu2);
        }

        body.dark-mode .btn-eduverse-primary {
            background: linear-gradient(135deg, var(--primary-edu2-dark), var(--accent-edu2-dark));
            box-shadow: 0 4px 15px rgba(51, 161, 255, 0.3);
        }

        body.dark-mode .btn-eduverse-primary:hover {
            box-shadow: 0 7px 20px rgba(111, 255, 233, 0.4);
            background: linear-gradient(135deg, var(--accent-edu2-dark), var(--primary-edu2-dark));
        }

        body.dark-mode .btn-eduverse-secondary {
            border-color: var(--secondary-edu2-dark);
            color: var(--secondary-edu2-dark);
        }

        body.dark-mode .btn-eduverse-secondary:hover {
            background-color: var(--secondary-edu2-dark);
            color: var(--bg-dark-edu2);
            /* Teks kontras */
            box-shadow: 0 4px 15px rgba(255, 135, 135, 0.3);
        }

        /* Preloader */
        #preloader-eduverse {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-edu2);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.7s ease-out 0.5s;
        }

        body.dark-mode #preloader-eduverse {
            background-color: var(--bg-dark-edu2);
        }

        #preloader-eduverse.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-eduverse {
            /* Loader dengan efek "binary code" atau "matrix" */
            font-family: 'Orbitron', monospace;
            font-size: 1.5rem;
            color: var(--primary-edu2);
            white-space: nowrap;
            overflow: hidden;
            border-right: .10em solid var(--secondary-edu2);
            /* Kursor ketik */
            animation: typing 2s steps(15, end) infinite, blink-caret .75s step-end infinite;
        }

        body.dark-mode .loader-eduverse {
            color: var(--primary-edu2-dark);
            border-right-color: var(--secondary-edu2-dark);
        }

        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 10ch
            }
        }

        /* 10 karakter */
        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: var(--secondary-edu2);
            }
        }

        body.dark-mode @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: var(--secondary-edu2-dark);
            }
        }


        /* Back to top button */
        .back-to-top-eduverse {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-edu2);
            width: 44px;
            height: 44px;
            border-radius: 6px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-eduverse i {
            font-size: 20px;
            color: #fff;
        }

        .back-to-top-eduverse:hover {
            background: #005FA3;
            transform: scale(1.05);
        }

        /* Lebih gelap */
        .back-to-top-eduverse.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-eduverse {
            background: var(--primary-edu2-dark);
        }

        body.dark-mode .back-to-top-eduverse:hover {
            background: #2080D0;
        }

        /* Tombol Theme Toggle */
        .theme-toggle-button-eduverse {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light-edu2);
            border: 1px solid var(--border-light-edu2);
            color: var(--text-light-edu2);
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

        .theme-toggle-button-eduverse:hover {
            background-color: #d1e0eb;
            transform: rotate(180deg);
        }

        .theme-toggle-button-eduverse i {
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .theme-toggle-button-eduverse .icon-sun-eduverse {
            display: none;
        }

        body.dark-mode .theme-toggle-button-eduverse {
            background-color: var(--card-bg-dark-edu2);
            border-color: var(--border-dark-edu2);
            color: var(--text-dark-edu2);
        }

        body.dark-mode .theme-toggle-button-eduverse:hover {
            background-color: #2A405A;
        }

        body.dark-mode .theme-toggle-button-eduverse .icon-moon-eduverse {
            display: none;
        }

        body.dark-mode .theme-toggle-button-eduverse .icon-sun-eduverse {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_eduverse']) && $_COOKIE['theme_eduverse'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-eduverse">
        <div class="loader-eduverse" data-text="LOADING..."></div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website EduVerse */
    include 'components/header_pendidikan_eduverse.php';
    ?>

    <?php include 'components/hero_pendidikan_eduverse_interactive.php'; ?>
    <?php include 'components/tentang_kami_pendidikan_digital.php'; ?>
    <?php include 'components/program_studi_futuristik.php'; ?>
    <?php include 'components/lab_virtual_pendidikan.php'; ?>
    <?php include 'components/event_webinar_pendidikan.php'; ?>
    <?php include 'components/testimoni_alumni_digital.php'; ?>
    <?php include 'components/kontak_pendidikan_interaktif_osm.php'; ?>
    <?php include 'components/footer_pendidikan_modern_v2.php'; ?>

    <a href="#" class="back-to-top-eduverse"><i class="fas fa-rocket"></i></a> <?php /* Ikon roket */ ?>

    <button class="theme-toggle-button-eduverse" id="themeTogglerEduverse" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-eduverse"></i>
        <i class="fas fa-sun icon-sun-eduverse"></i>
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

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Komentar JavaScript: Inisialisasi AOS
            AOS.init({
                duration: 900,
                once: true,
                offset: 60,
                easing: 'ease-out-quad',
            });

            // Komentar JavaScript: Logika Preloader
            const preloader = document.getElementById('preloader-eduverse');
            const loaderText = preloader.querySelector('.loader-eduverse');
            const preloaderTexts = ["INITIATING...", "BOOTING_OS...", "LOADING_MODULES...", "CONNECTING...", "READY."];
            let textIndex = 0;

            function updateLoaderText() {
                if (loaderText && textIndex < preloaderTexts.length) {
                    loaderText.setAttribute('data-text', preloaderTexts[textIndex]);
                    loaderText.style.width = preloaderTexts[textIndex].length + 'ch'; // Sesuaikan lebar untuk animasi ketik
                    loaderText.textContent = preloaderTexts[textIndex]; // Untuk fallback jika animasi CSS tidak jalan
                    textIndex++;
                } else {
                    clearInterval(loaderInterval);
                    if (preloader) {
                        preloader.classList.add('loaded');
                    }
                }
            }
            if (loaderText) {
                updateLoaderText(); // Panggil sekali di awal
                var loaderInterval = setInterval(updateLoaderText, 700); // Ganti teks setiap 0.7 detik
            } else if (preloader) { // Fallback jika loaderText tidak ada
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 600);
                });
            }


            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-eduverse');
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
            const themeToggler = document.getElementById('themeTogglerEduverse');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-eduverse');
            const sunIcon = themeToggler.querySelector('.icon-sun-eduverse');

            function applyThemeEduverse(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedEduverse', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeEduverse = localStorage.getItem('theme_eduverse');
            if (!savedThemeEduverse) {
                savedThemeEduverse = bodyElement.classList.contains('dark-mode') ? 'dark' : 'light';
            } else {
                applyThemeEduverse(savedThemeEduverse);
            }

            if (themeToggler) {
                applyThemeEduverse(bodyElement.classList.contains('dark-mode') ? 'dark' : 'light');

                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeEduverse(newTheme);
                    localStorage.setItem('theme_eduverse', newTheme);
                });
            }
        });
    </script>
</body>

</html>