<?php // File: index.php - Profil Perusahaan Ekonomi Modern v1 (Perbaikan V2)
// Komentar PHP: File utama untuk merangkai semua komponen website.
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuantumLeap Finance - Solusi Keuangan Inovatif</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />


    <style>
        /* Global Styles - Tema Perusahaan Ekonomi Profesional (Perbaikan Warna) */
        :root {
            /* Light Mode (Default) */
            --bg-light-econ: #FFFFFF;
            /* Putih bersih */
            --bg-light-econ-rgb: 255, 255, 255;
            --text-light-econ: #202A37;
            /* Biru tua untuk teks, lebih lembut dari hitam */
            --card-bg-light-econ: #F8F9FC;
            /* Abu-abu sangat terang untuk kartu */
            --border-light-econ: #E1E8ED;
            /* Border lebih halus */

            --primary-econ: #004A8F;
            /* Biru korporat yang lebih dalam dan kaya */
            --primary-econ-rgb: 0, 74, 143;
            --secondary-econ: #00A1D9;
            /* Biru cerah yang lebih vibrant */
            --secondary-econ-rgb: 0, 161, 217;
            --accent-econ: #F2A900;
            /* Kuning-oranye untuk aksen yang kuat */
            --accent-econ-rgb: 242, 169, 0;
            --muted-text-light-econ: #5A6F84;
            /* Abu-abu kebiruan untuk teks sekunder */

            /* Dark Mode Variables */
            --bg-dark-econ: #0D1B2A;
            /* Biru malam sangat gelap */
            --bg-dark-econ-rgb: 13, 27, 42;
            --text-dark-econ: #DDE6F0;
            /* Putih kebiruan lembut */
            --card-bg-dark-econ: #172A46;
            /* Biru gelap untuk kartu */
            --card-bg-dark-econ-rgb: 23, 42, 70;
            --border-dark-econ: #2A3B4D;
            /* Border lebih gelap dan kontras */
            --border-dark-econ-rgb: 42, 59, 77;

            --primary-econ-dark: #007FFF;
            /* Biru Azure cerah */
            --primary-econ-dark-rgb: 0, 127, 255;
            --secondary-econ-dark: #38B6FF;
            /* Biru langit lebih cerah */
            --secondary-econ-dark-rgb: 56, 182, 255;
            --accent-econ-dark: #FFC107;
            /* Kuning emas cerah (tetap) */
            --accent-econ-dark-rgb: 255, 193, 7;
            --muted-text-dark-econ: #9FB3C8;
            /* Abu-abu muda kebiruan */
        }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.7;
            background-color: var(--bg-light-econ);
            color: var(--text-light-econ);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 1rem;
            /* 16px */
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Oswald', sans-serif;
            font-weight: 600;
            color: var(--text-light-econ);
            transition: color 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .section-econ {
            padding: 70px 0;
            /* Padding section disesuaikan */
            overflow: hidden;
            position: relative;
        }

        .section-title-econ {
            text-align: center;
            margin-bottom: 45px;
            position: relative;
        }

        .section-title-econ h2 {
            font-size: 2.4rem;
            font-weight: 700;
            color: var(--primary-econ);
            margin-bottom: 12px;
            /* Margin bawah judul */
            position: relative;
            padding-bottom: 8px;
            /* Padding bawah untuk garis */
        }

        .section-title-econ h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--secondary-econ);
            border-radius: 2px;
            transition: background-color 0.3s ease;
        }

        .section-title-econ p.subtitle-econ {
            font-size: 1.05rem;
            color: var(--muted-text-light-econ);
            max-width: 680px;
            margin: 12px auto 0 auto;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            transition: color 0.3s ease;
            line-height: 1.6;
            /* Spasi baris subtitle */
        }

        .btn-econ-primary {
            background-color: var(--primary-econ);
            border: 2px solid var(--primary-econ);
            color: #fff;
            padding: 10px 25px;
            font-weight: 500;
            /* Sedikit lebih ringan */
            font-family: 'Oswald', sans-serif;
            border-radius: 4px;
            /* Sudut lebih tegas */
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            /* Spasi huruf */
            box-shadow: 0 3px 10px rgba(var(--primary-econ-rgb), 0.15);
        }

        .btn-econ-primary:hover {
            background-color: color-mix(in srgb, var(--primary-econ) 85%, black);
            /* Warna hover lebih gelap */
            border-color: color-mix(in srgb, var(--primary-econ) 85%, black);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 5px 12px rgba(var(--primary-econ-rgb), 0.25);
        }

        .btn-econ-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-econ);
            color: var(--secondary-econ);
            padding: 8px 22px;
            font-weight: 500;
            font-family: 'Oswald', sans-serif;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .btn-econ-secondary:hover {
            background-color: var(--secondary-econ);
            color: #fff;
            box-shadow: 0 3px 10px rgba(var(--secondary-econ-rgb), 0.2);
        }

        .btn-econ-accent {
            background-color: var(--accent-econ);
            border: 2px solid var(--accent-econ);
            color: var(--text-light-econ);
            padding: 10px 25px;
            font-weight: 500;
            font-family: 'Oswald', sans-serif;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            box-shadow: 0 3px 10px rgba(var(--accent-econ-rgb), 0.15);
        }

        .btn-econ-accent:hover {
            background-color: color-mix(in srgb, var(--accent-econ) 85%, black);
            border-color: color-mix(in srgb, var(--accent-econ) 85%, black);
            color: #fff;
            /* Teks putih untuk kontras */
            transform: translateY(-2px);
            box-shadow: 0 5px 12px rgba(var(--accent-econ-rgb), 0.25);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-econ);
            color: var(--text-dark-econ);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-econ);
        }

        body.dark-mode .section-title-econ h2 {
            color: var(--primary-econ-dark);
        }

        body.dark-mode .section-title-econ h2::after {
            background-color: var(--secondary-econ-dark);
        }

        body.dark-mode .section-title-econ p.subtitle-econ {
            color: var(--muted-text-dark-econ);
        }

        body.dark-mode .btn-econ-primary {
            background-color: var(--primary-econ-dark);
            border-color: var(--primary-econ-dark);
            color: var(--text-dark-econ);
            box-shadow: 0 4px 12px rgba(var(--primary-econ-dark-rgb), 0.2);
        }

        body.dark-mode .btn-econ-primary:hover {
            background-color: color-mix(in srgb, var(--primary-econ-dark) 85%, black);
            border-color: color-mix(in srgb, var(--primary-econ-dark) 85%, black);
            color: var(--text-dark-econ);
            box-shadow: 0 6px 15px rgba(var(--primary-econ-dark-rgb), 0.3);
        }

        body.dark-mode .btn-econ-secondary {
            border-color: var(--secondary-econ-dark);
            color: var(--secondary-econ-dark);
        }

        body.dark-mode .btn-econ-secondary:hover {
            background-color: var(--secondary-econ-dark);
            color: var(--bg-dark-econ);
            box-shadow: 0 4px 12px rgba(var(--secondary-econ-dark-rgb), 0.25);
        }

        body.dark-mode .btn-econ-accent {
            background-color: var(--accent-econ-dark);
            border-color: var(--accent-econ-dark);
            color: var(--bg-dark-econ);
            box-shadow: 0 4px 12px rgba(var(--accent-econ-dark-rgb), 0.2);
        }

        body.dark-mode .btn-econ-accent:hover {
            background-color: color-mix(in srgb, var(--accent-econ-dark) 85%, black);
            border-color: color-mix(in srgb, var(--accent-econ-dark) 85%, black);
            color: var(--bg-dark-econ);
            box-shadow: 0 6px 15px rgba(var(--accent-econ-dark-rgb), 0.3);
        }

        #preloader-econ {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-econ);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.5s ease-out 0.3s;
            /* Durasi dan delay disesuaikan */
        }

        body.dark-mode #preloader-econ {
            background-color: var(--bg-dark-econ);
        }

        #preloader-econ.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-econ {
            width: 40px;
            height: 40px;
            border: 4px solid var(--border-light-econ);
            border-top-color: var(--primary-econ);
            border-radius: 50%;
            animation: spinEcon 0.8s linear infinite;
        }

        body.dark-mode .loader-econ {
            border-color: var(--border-dark-econ);
            border-top-color: var(--primary-econ-dark);
        }

        @keyframes spinEcon {
            to {
                transform: rotate(360deg);
            }
        }

        .back-to-top-econ {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 15px;
            bottom: 15px;
            z-index: 999;
            background: var(--primary-econ);
            width: 38px;
            height: 38px;
            border-radius: 4px;
            /* Lebih tegas */
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }

        .back-to-top-econ i {
            font-size: 0.9rem;
            color: #fff;
        }

        .back-to-top-econ:hover {
            background: color-mix(in srgb, var(--primary-econ) 80%, black);
            transform: translateY(-2px);
        }

        .back-to-top-econ.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-econ {
            background: var(--primary-econ-dark);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        body.dark-mode .back-to-top-econ:hover {
            background: color-mix(in srgb, var(--primary-econ-dark) 80%, black);
        }

        .theme-toggle-button-econ {
            position: fixed;
            bottom: 15px;
            left: 15px;
            z-index: 1000;
            background-color: var(--card-bg-light-econ);
            border: 1px solid var(--border-light-econ);
            color: var(--text-light-econ);
            width: 38px;
            height: 38px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .theme-toggle-button-econ:hover {
            background-color: #E9ECEF;
            transform: scale(1.05);
        }

        .theme-toggle-button-econ i {
            font-size: 0.9rem;
        }

        .theme-toggle-button-econ .icon-sun-econ {
            display: none;
        }

        body.dark-mode .theme-toggle-button-econ {
            background-color: var(--card-bg-dark-econ);
            border-color: var(--border-dark-econ);
            color: var(--text-dark-econ);
        }

        body.dark-mode .theme-toggle-button-econ:hover {
            background-color: #2C3E50;
        }

        body.dark-mode .theme-toggle-button-econ .icon-moon-econ {
            display: none;
        }

        body.dark-mode .theme-toggle-button-econ .icon-sun-econ {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_econ_v1']) && $_COOKIE['theme_econ_v1'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-econ">
        <div class="loader-econ"></div>
    </div>

    <?php
    $component_dir = 'components/';

    $components = [
        'header_corp_finance_v1.php',
        'hero_corp_finance_v1.php',
        'about_corp_finance_v1.php',
        'services_corp_finance_v1.php',
        'cta_corp_finance_v1.php',
        'contact_corp_finance_v1.php',
        'footer_corp_finance_v1.php'
    ];

    foreach ($components as $component) {
        if (file_exists($component_dir . $component)) {
            include $component_dir . $component;
        } else {
            // Menampilkan pesan error yang lebih informatif jika file tidak ada
            // Ini akan membantu debugging jika ada masalah path atau nama file
            echo "<div class='container my-5'><div class='alert alert-danger' role='alert'>";
            echo "<strong>Error:</strong> Komponen <code>" . htmlspecialchars($component_dir . $component) . "</code> tidak ditemukan.";
            echo "<br>Pastikan file ada di direktori yang benar dan nama file tidak salah ketik.";
            echo "</div></div>";
        }
    }
    ?>

    <a href="#" class="back-to-top-econ"><i class="fas fa-chevron-up"></i></a>

    <button class="theme-toggle-button-econ" id="themeTogglerEconV1" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-econ"></i>
        <i class="fas fa-sun icon-sun-econ"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js" xintegrity="sha512-NEjbZ2P_rU8575TqLwG2MOwNnC2A2j5DqS8B/n9IgTLPLutUo3KslYM/0B+U5i1fSgceTkF9F4L36qRjYpQJ1Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="anonymous"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 50,
                easing: 'ease-in-out-cubic',
            });

            const preloader = document.getElementById('preloader-econ');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                        setTimeout(() => {
                            if (preloader) preloader.style.display = 'none';
                        }, 500); // Sesuaikan dengan durasi transisi opacity di CSS (0.6s -> 600ms)
                    }, 300); // Initial delay
                });
            }

            const backToTopButton = document.querySelector('.back-to-top-econ');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    window.scrollY > 200 ? backToTopButton.classList.add('active') : backToTopButton.classList.remove('active');
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

            const themeToggler = document.getElementById('themeTogglerEconV1');
            const bodyElement = document.body;
            const moonIcon = themeToggler ? themeToggler.querySelector('.icon-moon-econ') : null;
            const sunIcon = themeToggler ? themeToggler.querySelector('.icon-sun-econ') : null;

            function applyThemeEconV1(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedEconV1', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeEconV1 = localStorage.getItem('theme_econ_v1');
            if (!savedThemeEconV1) {
                savedThemeEconV1 = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }
            applyThemeEconV1(savedThemeEconV1);

            if (themeToggler) {
                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeEconV1(newTheme);
                    localStorage.setItem('theme_econ_v1', newTheme);
                });
            }
        });
    </script>
</body>

</html>