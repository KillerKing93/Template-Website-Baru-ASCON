<?php // File: index.php - Template Website Pendidikan 3 (Academia Illumina) 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Illumina - Pusat Studi & Riset Klasik Modern</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Cormorant Garamond (Serif elegan untuk Headings) & Open Sans (Body) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri/Lightbox) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: Swiper CSS (Untuk Carousel/Slider) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pendidikan Academia Illumina */
        :root {
            /* Light Mode (Default) */
            --bg-light-edu3: #FDFBF5;
            /* Krem sangat terang, nuansa kertas tua */
            --text-light-edu3: #4A3B32;
            /* Coklat tua untuk teks */
            --card-bg-light-edu3: #FFFFFF;
            --border-light-edu3: #EAE0D5;
            --primary-illumina: #8B4513;
            /* Coklat SaddleBrown (klasik) */
            --secondary-illumina: #B8860B;
            /* Emas Gelap (DarkGoldenrod) */
            --accent-illumina: #5F9EA0;
            /* Biru Cadet (CadetBlue) */
            --muted-text-light-edu3: #7A6D65;

            /* Dark Mode Variables */
            --bg-dark-edu3: #2A2A2A;
            /* Abu-abu arang */
            --text-dark-edu3: #E8E2D8;
            /* Krem pucat */
            --card-bg-dark-edu3: #383838;
            /* Abu-abu gelap untuk kartu */
            --border-dark-edu3: #4F4F4F;
            --primary-illumina-dark: #A0522D;
            /* Sienna (coklat kemerahan lebih terang) */
            --secondary-illumina-dark: #D4AF37;
            /* Emas pucat (PaleGoldenrod) */
            --accent-illumina-dark: #77A8AA;
            /* Biru Cadet lebih terang */
            --muted-text-dark-edu3: #B8B0A8;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.75;
            background-color: var(--bg-light-edu3);
            color: var(--text-light-edu3);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            color: var(--text-light-edu3);
            transition: color 0.3s ease;
        }

        .section-illumina {
            padding: 90px 0;
            overflow: hidden;
            position: relative;
        }

        .section-title-illumina {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-illumina h2 {
            font-size: 3rem;
            /* Judul section lebih besar dan elegan */
            font-weight: 700;
            color: var(--primary-illumina);
            margin-bottom: 20px;
            display: inline-block;
            position: relative;
            padding-bottom: 10px;
        }

        /* Dekorasi garis bawah kaligrafi/elegan */
        .section-title-illumina h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 2px;
            /* Garis lebih tipis */
            background-color: var(--secondary-illumina);
            transition: background-color 0.3s ease;
            /* Bisa ditambahkan ::before untuk elemen dekoratif tambahan */
        }

        .section-title-illumina p.subtitle-illumina {
            font-size: 1.2rem;
            color: var(--muted-text-light-edu3);
            max-width: 750px;
            margin: 15px auto 0 auto;
            font-family: 'Open Sans', sans-serif;
            font-style: italic;
            transition: color 0.3s ease;
        }

        .btn-illumina-primary {
            background-color: var(--primary-illumina);
            border: 2px solid var(--primary-illumina);
            color: #fff;
            padding: 12px 32px;
            font-weight: 600;
            font-family: 'Open Sans', sans-serif;
            border-radius: 5px;
            /* Sudut sedikit membulat */
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            box-shadow: 0 4px 10px rgba(139, 69, 19, 0.25);
        }

        .btn-illumina-primary:hover {
            background-color: transparent;
            color: var(--primary-illumina);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(139, 69, 19, 0.35);
        }

        .btn-illumina-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-illumina);
            color: var(--secondary-illumina);
            padding: 10px 30px;
            font-weight: 600;
            font-family: 'Open Sans', sans-serif;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .btn-illumina-secondary:hover {
            background-color: var(--secondary-illumina);
            color: var(--bg-light-edu3);
            /* Atau warna kontras lain */
            box-shadow: 0 4px 10px rgba(184, 134, 11, 0.25);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-edu3);
            color: var(--text-dark-edu3);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-edu3);
        }

        body.dark-mode .section-title-illumina h2 {
            color: var(--primary-illumina-dark);
        }

        body.dark-mode .section-title-illumina h2::after {
            background-color: var(--secondary-illumina-dark);
        }

        body.dark-mode .section-title-illumina p.subtitle-illumina {
            color: var(--muted-text-dark-edu3);
        }

        body.dark-mode .btn-illumina-primary {
            background-color: var(--primary-illumina-dark);
            border-color: var(--primary-illumina-dark);
            box-shadow: 0 4px 10px rgba(160, 82, 45, 0.25);
        }

        body.dark-mode .btn-illumina-primary:hover {
            color: var(--primary-illumina-dark);
            box-shadow: 0 6px 15px rgba(160, 82, 45, 0.35);
        }

        body.dark-mode .btn-illumina-secondary {
            border-color: var(--secondary-illumina-dark);
            color: var(--secondary-illumina-dark);
        }

        body.dark-mode .btn-illumina-secondary:hover {
            background-color: var(--secondary-illumina-dark);
            color: var(--bg-dark-edu3);
            /* Teks kontras */
            box-shadow: 0 4px 10px rgba(212, 175, 55, 0.25);
        }

        /* Preloader */
        #preloader-illumina {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-edu3);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.7s ease-out 0.5s;
        }

        body.dark-mode #preloader-illumina {
            background-color: var(--bg-dark-edu3);
        }

        #preloader-illumina.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-illumina {
            /* Loader dengan bentuk pena/kuas */
            width: 50px;
            height: 50px;
            position: relative;
        }

        .loader-illumina::before {
            /* Batang pena */
            content: '';
            position: absolute;
            left: 50%;
            top: 5px;
            transform: translateX(-50%);
            width: 6px;
            height: 30px;
            background-color: var(--secondary-illumina);
            border-radius: 3px 3px 0 0;
            animation: quillDip 1.5s infinite ease-in-out;
        }

        .loader-illumina::after {
            /* Ujung pena */
            content: '';
            position: absolute;
            left: 50%;
            bottom: 5px;
            transform: translateX(-50%) rotate(45deg);
            width: 12px;
            height: 12px;
            background-color: var(--secondary-illumina);
        }

        body.dark-mode .loader-illumina::before,
        body.dark-mode .loader-illumina::after {
            background-color: var(--secondary-illumina-dark);
        }

        @keyframes quillDip {

            0%,
            100% {
                transform: translateX(-50%) translateY(0);
            }

            50% {
                transform: translateX(-50%) translateY(5px);
            }
        }


        /* Back to top button */
        .back-to-top-illumina {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-illumina);
            width: 42px;
            height: 42px;
            border-radius: 6px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-illumina i {
            font-size: 18px;
            color: #fff;
        }

        .back-to-top-illumina:hover {
            background: #7A3D13;
            transform: scale(1.05);
        }

        /* Lebih gelap */
        .back-to-top-illumina.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-illumina {
            background: var(--primary-illumina-dark);
        }

        body.dark-mode .back-to-top-illumina:hover {
            background: #8C481F;
        }

        /* Tombol Theme Toggle */
        .theme-toggle-button-illumina {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light-edu3);
            border: 1px solid var(--border-light-edu3);
            color: var(--text-light-edu3);
            width: 42px;
            height: 42px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .theme-toggle-button-illumina:hover {
            background-color: #EAE0D5;
            transform: scale(1.08);
        }

        .theme-toggle-button-illumina i {
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .theme-toggle-button-illumina .icon-sun-illumina {
            display: none;
        }

        body.dark-mode .theme-toggle-button-illumina {
            background-color: var(--card-bg-dark-edu3);
            border-color: var(--border-dark-edu3);
            color: var(--text-dark-edu3);
        }

        body.dark-mode .theme-toggle-button-illumina:hover {
            background-color: #4F4F4F;
        }

        body.dark-mode .theme-toggle-button-illumina .icon-moon-illumina {
            display: none;
        }

        body.dark-mode .theme-toggle-button-illumina .icon-sun-illumina {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_illumina_edu']) && $_COOKIE['theme_illumina_edu'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-illumina">
        <div class="loader-illumina"></div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website Academia Illumina */
    include 'components/header_pendidikan_illumina.php';
    ?>

    <?php include 'components/hero_pendidikan_elegan.php'; ?>
    <?php include 'components/tentang_kami_pendidikan_akademik.php'; ?>
    <?php include 'components/fakultas_jurusan_pendidikan.php'; ?>
    <?php include 'components/riset_publikasi_pendidikan.php'; ?>
    <?php include 'components/kehidupan_kampus_pendidikan.php'; ?>
    <?php include 'components/penerimaan_mahasiswa_baru.php'; ?>
    <?php include 'components/kontak_pendidikan_klasik_osm.php'; ?>
    <?php include 'components/footer_pendidikan_tradisional.php'; ?>

    <a href="#" class="back-to-top-illumina"><i class="fas fa-book-open"></i></a> <?php /* Ikon buku */ ?>

    <button class="theme-toggle-button-illumina" id="themeTogglerIllumina" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-illumina"></i>
        <i class="fas fa-sun icon-sun-illumina"></i>
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
                offset: 65,
                easing: 'ease-in-out-cubic',
            });

            // Komentar JavaScript: Logika Preloader
            const preloader = document.getElementById('preloader-illumina');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 500);
                });
            }

            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-illumina');
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
            const themeToggler = document.getElementById('themeTogglerIllumina');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-illumina');
            const sunIcon = themeToggler.querySelector('.icon-sun-illumina');

            function applyThemeIllumina(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedIllumina', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeIllumina = localStorage.getItem('theme_illumina_edu');
            if (!savedThemeIllumina) {
                savedThemeIllumina = bodyElement.classList.contains('dark-mode') ? 'dark' : 'light';
            } else {
                applyThemeIllumina(savedThemeIllumina);
            }

            if (themeToggler) {
                applyThemeIllumina(bodyElement.classList.contains('dark-mode') ? 'dark' : 'light');

                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeIllumina(newTheme);
                    localStorage.setItem('theme_illumina_edu', newTheme);
                });
            }
        });
    </script>
</body>

</html>