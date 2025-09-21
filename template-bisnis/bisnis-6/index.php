<?php // File: index.php - Template Bisnis Luminous & Elegant 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan Aurora - Solusi Cemerlang & Elegan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Luminous & Elegant Theme */
        :root {
            /* Light Mode Variables */
            --bg-light: #FFFFFF;
            --text-light: #333333;
            --card-bg-light: #FDFDFD;
            --border-light: #EAEAEA;
            --primary-luminous: #8A2BE2;
            /* Biru Ungu (BlueViolet) */
            --secondary-luminous: #FFD700;
            /* Emas (Gold) */
            --accent-luminous: #4682B4;
            /* Biru Baja (SteelBlue) */
            --muted-text-light: #6c757d;

            /* Dark Mode Variables */
            --bg-dark: #1A1A2E;
            /* Biru malam yang sangat gelap */
            --text-dark: #E0E0E0;
            --card-bg-dark: #162447;
            /* Biru tua untuk kartu */
            --border-dark: #2F3B69;
            /* Border lebih gelap */
            /* Warna aksen bisa tetap sama atau disesuaikan untuk dark mode */
            --primary-luminous-dark: #A060FF;
            /* Ungu lebih terang */
            --secondary-luminous-dark: #FFEB99;
            /* Emas lebih pucat */
            --accent-luminous-dark: #6A9ECF;
            /* Biru baja lebih terang */
            --muted-text-dark: #9898b0;
        }

        body {
            font-family: 'Lato', sans-serif;
            line-height: 1.8;
            background-color: var(--bg-light);
            color: var(--text-light);
            transition: background-color 0.4s ease, color 0.4s ease;
            font-size: 17px;
            /* Ukuran font dasar sedikit lebih besar */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--text-light);
            transition: color 0.4s ease;
        }

        .section-elegant {
            padding: 90px 0;
            overflow: hidden;
        }

        .section-title-elegant {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-elegant h2 {
            font-size: 2.8rem;
            /* Ukuran judul section */
            font-weight: 800;
            margin-bottom: 15px;
            display: inline-block;
            position: relative;
        }

        .section-title-elegant h2::after {
            /* Dekorasi garis bawah elegan */
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background-color: var(--secondary-luminous);
            margin: 15px auto 0;
            border-radius: 2px;
            transition: background-color 0.4s ease;
        }

        .section-title-elegant p.subtitle-elegant {
            font-size: 1.15rem;
            color: var(--muted-text-light);
            max-width: 750px;
            margin: 10px auto 0 auto;
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            /* Subtitle lebih ringan */
            transition: color 0.4s ease;
        }

        .btn-luminous-primary {
            background-color: var(--primary-luminous);
            border: 2px solid var(--primary-luminous);
            color: #fff;
            padding: 12px 30px;
            font-weight: 700;
            font-family: 'Lato', sans-serif;
            border-radius: 5px;
            /* Sudut sedikit tajam untuk kesan modern */
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(138, 43, 226, 0.2);
            /* Bayangan dari warna primer */
        }

        .btn-luminous-primary:hover {
            background-color: transparent;
            color: var(--primary-luminous);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(138, 43, 226, 0.3);
        }

        .btn-luminous-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-luminous);
            color: var(--secondary-luminous);
            padding: 10px 28px;
            font-weight: 700;
            font-family: 'Lato', sans-serif;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-luminous-secondary:hover {
            background-color: var(--secondary-luminous);
            color: var(--bg-light);
            /* Atau warna teks kontras lainnya */
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark);
            color: var(--text-dark);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark);
        }

        body.dark-mode .section-title-elegant h2::after {
            background-color: var(--secondary-luminous-dark);
        }

        body.dark-mode .section-title-elegant p.subtitle-elegant {
            color: var(--muted-text-dark);
        }

        body.dark-mode .btn-luminous-primary {
            background-color: var(--primary-luminous-dark);
            border-color: var(--primary-luminous-dark);
            box-shadow: 0 4px 15px rgba(160, 96, 255, 0.2);
        }

        body.dark-mode .btn-luminous-primary:hover {
            color: var(--primary-luminous-dark);
            box-shadow: 0 6px 20px rgba(160, 96, 255, 0.3);
        }

        body.dark-mode .btn-luminous-secondary {
            border-color: var(--secondary-luminous-dark);
            color: var(--secondary-luminous-dark);
        }

        body.dark-mode .btn-luminous-secondary:hover {
            background-color: var(--secondary-luminous-dark);
            color: var(--bg-dark);
            box-shadow: 0 4px 15px rgba(255, 235, 153, 0.3);
        }


        /* Preloader */
        #preloader-elegant {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.6s ease-out 0.4s;
        }

        body.dark-mode #preloader-elegant {
            background-color: var(--bg-dark);
        }

        #preloader-elegant.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-elegant {
            /* Loader dengan efek "breathing" */
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--secondary-luminous);
            animation: breathe 1.5s infinite ease-in-out;
            box-shadow: 0 0 15px var(--secondary-luminous);
        }

        body.dark-mode .loader-elegant {
            background-color: var(--secondary-luminous-dark);
            box-shadow: 0 0 15px var(--secondary-luminous-dark);
        }

        @keyframes breathe {

            0%,
            100% {
                transform: scale(0.8);
                opacity: 0.7;
            }

            50% {
                transform: scale(1.2);
                opacity: 1;
            }
        }

        /* Back to top button */
        .back-to-top-elegant {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-luminous);
            width: 44px;
            height: 44px;
            border-radius: 5px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(138, 43, 226, 0.3);
        }

        .back-to-top-elegant i {
            font-size: 20px;
            color: #fff;
        }

        .back-to-top-elegant:hover {
            background: #7A1FB5;
            transform: translateY(-3px);
        }

        /* Warna lebih gelap dari primary */
        .back-to-top-elegant.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-elegant {
            background: var(--primary-luminous-dark);
            box-shadow: 0 2px 8px rgba(160, 96, 255, 0.3);
        }

        body.dark-mode .back-to-top-elegant:hover {
            background: #8A4FFF;
        }


        /* Tombol Theme Toggle */
        .theme-toggle-button-elegant {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light);
            border: 1px solid var(--border-light);
            color: var(--text-light);
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

        .theme-toggle-button-elegant:hover {
            background-color: #e9ecef;
            transform: scale(1.1);
        }

        .theme-toggle-button-elegant i {
            font-size: 1.3rem;
        }

        .theme-toggle-button-elegant .icon-sun-elegant {
            display: none;
        }

        body.dark-mode .theme-toggle-button-elegant {
            background-color: var(--card-bg-dark);
            border-color: var(--border-dark);
            color: var(--text-dark);
        }

        body.dark-mode .theme-toggle-button-elegant:hover {
            background-color: #2a3038;
        }

        /* Lebih terang dari card-bg-dark */
        body.dark-mode .theme-toggle-button-elegant .icon-moon-elegant {
            display: none;
        }

        body.dark-mode .theme-toggle-button-elegant .icon-sun-elegant {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_elegant']) && $_COOKIE['theme_elegant'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-elegant">
        <div class="loader-elegant"></div>
    </div>

    <?php
    // Komentar PHP: Menyertakan header
    include 'components/header_elegant.php';
    ?>

    <?php include 'components/hero_luminous.php'; ?>
    <?php include 'components/about_refined.php'; ?>
    <?php include 'components/services_showcase_elegant.php'; ?>
    <?php include 'components/portfolio_grid_filter_luminous.php'; ?>
    <?php include 'components/testimonials_carousel_refined.php'; ?>
    <?php include 'components/blog_highlights_elegant.php'; ?>
    <?php include 'components/contact_osm_elegant.php'; ?>
    <?php include 'components/footer_sophisticated.php'; ?>

    <a href="#" class="back-to-top-elegant"><i class="fas fa-chevron-up"></i></a>

    <button class="theme-toggle-button-elegant" id="themeTogglerElegant" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-elegant"></i>
        <i class="fas fa-sun icon-sun-elegant"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 50,
                easing: 'ease-out-quart',
            });

            const preloader = document.getElementById('preloader-elegant');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 400);
                });
            }

            const backToTopButton = document.querySelector('.back-to-top-elegant');
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

            // Theme Toggler Logic
            const themeToggler = document.getElementById('themeTogglerElegant');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-elegant');
            const sunIcon = themeToggler.querySelector('.icon-sun-elegant');

            function applyTheme(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    moonIcon.style.display = 'none';
                    sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    moonIcon.style.display = 'block';
                    sunIcon.style.display = 'none';
                }
            }

            // Cek tema dari localStorage saat load
            const savedTheme = localStorage.getItem('theme_elegant') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            applyTheme(savedTheme);

            // Event listener untuk tombol
            if (themeToggler) {
                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyTheme(newTheme);
                    localStorage.setItem('theme_elegant', newTheme); // Simpan preferensi

                    // Dispatch custom event untuk memberitahu komponen lain (misal peta)
                    document.dispatchEvent(new CustomEvent('themeChanged', {
                        detail: {
                            theme: newTheme
                        }
                    }));
                });
            }
        });
    </script>
</body>

</html>