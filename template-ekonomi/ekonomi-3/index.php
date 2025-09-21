<?php // File: index.php - Aetherium Finance (Ekonomi Template 3 - Rebuild)
// Komentar PHP: File utama untuk merangkai semua komponen website.
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aetherium Finance - Merintis Masa Depan Keuangan Digital</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <style>
        /* Global Styles - Tema Aetherium Finance (Ekonomi Template 3) */
        :root {
            /* Light Mode (Default) - Dominan terang dengan aksen kuat */
            --bg-light-aether: #FFFFFF;
            --bg-light-aether-rgb: 255, 255, 255;
            --text-light-aether: #18212F;
            /* Biru sangat gelap untuk teks, lebih baik dari #1B263B */
            --card-bg-light-aether: #F7F9FD;
            /* Abu-abu kebiruan sangat terang, lebih lembut */
            --card-bg-light-aether-rgb: 247, 249, 253;
            --border-light-aether: #E2E8F0;
            /* Border lebih halus dan terang */

            --primary-aether: #5D3FD3;
            /* Ungu violet yang lebih modern dan elegan */
            --primary-aether-rgb: 93, 63, 211;
            --secondary-aether: #7E57C2;
            /* Ungu lebih muda, komplementer */
            --secondary-aether-rgb: 126, 87, 194;
            --accent-aether: #00E0C6;
            /* Teal/Mint yang lebih vibrant dan techy */
            --accent-aether-rgb: 0, 224, 198;
            --muted-text-light-aether: #5A6978;
            /* Abu-abu kebiruan untuk teks sekunder */

            /* Dark Mode Variables - Dominan gelap dengan aksen neon */
            --bg-dark-aether: #0F172A;
            /* Biru malam sangat gelap (mirip Tailwind slate-900) */
            --bg-dark-aether-rgb: 15, 23, 42;
            --text-dark-aether: #E2E8F0;
            /* Putih keabuan (mirip Tailwind slate-200) */
            --card-bg-dark-aether: #1E293B;
            /* Biru abu-abu gelap (mirip Tailwind slate-800) */
            --card-bg-dark-aether-rgb: 30, 41, 59;
            --border-dark-aether: #334155;
            /* Border gelap (mirip Tailwind slate-700) */
            --border-dark-aether-rgb: 51, 65, 85;

            --primary-aether-dark: #A78BFA;
            /* Ungu Lavender cerah (mirip Tailwind violet-400) */
            --primary-aether-dark-rgb: 167, 139, 250;
            --secondary-aether-dark: #C4B5FD;
            /* Ungu Lavender lebih muda (mirip Tailwind violet-300) */
            --secondary-aether-dark-rgb: 196, 181, 253;
            --accent-aether-dark: #34D399;
            /* Hijau Emerald cerah (mirip Tailwind emerald-400) */
            --accent-aether-dark-rgb: 52, 211, 153;
            --muted-text-dark-aether: #94A3B8;
            /* Abu-abu kebiruan (mirip Tailwind slate-400) */
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.75;
            /* Spasi baris lebih nyaman */
            background-color: var(--bg-light-aether);
            color: var(--text-light-aether);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            /* Font smoothing */
            -moz-osx-font-smoothing: grayscale;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Source Code Pro', monospace;
            font-weight: 600;
            /* Sedikit lebih ringan dari 700 untuk Source Code Pro */
            color: var(--text-light-aether);
            transition: color 0.3s ease;
            text-transform: none;
            letter-spacing: -0.3px;
            /* Kerning sedikit disesuaikan */
        }

        h1 {
            font-size: 2.6rem;
            line-height: 1.2;
        }

        h2 {
            font-size: 2rem;
            line-height: 1.25;
        }

        h3 {
            font-size: 1.6rem;
            line-height: 1.3;
        }

        .section-aether {
            padding: 85px 0;
            overflow: hidden;
            position: relative;
        }

        .section-title-aether {
            text-align: center;
            margin-bottom: 45px;
            position: relative;
        }

        .section-title-aether h2 {
            font-size: 2.3rem;
            font-weight: 700;
            color: var(--primary-aether);
            margin-bottom: 12px;
            position: relative;
            padding-bottom: 10px;
            display: inline-block;
        }

        .section-title-aether h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3.5px;
            /* Garis lebih tebal */
            background: linear-gradient(90deg, var(--primary-aether), var(--accent-aether), var(--secondary-aether));
            background-size: 250% 250%;
            /* Ukuran gradien lebih besar untuk animasi */
            animation: gradientLineAnimationV3 5s ease infinite alternate;
            /* Animasi lebih lambat dan alternate */
            border-radius: 3px;
            transition: background 0.3s ease;
        }

        @keyframes gradientLineAnimationV3 {

            /* Nama keyframe unik */
            0% {
                background-position: 0% 50%
            }

            100% {
                background-position: 100% 50%
            }
        }

        .section-title-aether p.subtitle-aether {
            font-size: 1.05rem;
            color: var(--muted-text-light-aether);
            max-width: 680px;
            margin: 12px auto 0 auto;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            transition: color 0.3s ease;
            line-height: 1.7;
        }

        .btn-aether-primary {
            background: linear-gradient(45deg, var(--primary-aether), var(--secondary-aether));
            border: none;
            color: #fff;
            padding: 11px 30px;
            font-weight: 600;
            font-family: 'Source Code Pro', monospace;
            border-radius: 5px;
            transition: all 0.35s ease;
            /* Transisi lebih halus */
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 12px rgba(var(--primary-aether-rgb), 0.25);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-aether-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -160%;
            width: 70%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.25), transparent);
            transform: skewX(-30deg);
            /* Sudut kilau diubah */
            transition: left 0.7s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .btn-aether-primary:hover::before {
            left: 160%;
        }

        .btn-aether-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 18px rgba(var(--primary-aether-rgb), 0.35);
        }

        .btn-aether-secondary {
            background-color: transparent;
            border: 2px solid var(--accent-aether);
            color: var(--accent-aether);
            padding: 9px 28px;
            font-weight: 600;
            font-family: 'Source Code Pro', monospace;
            border-radius: 5px;
            transition: all 0.35s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-aether-secondary:hover {
            background-color: var(--accent-aether);
            color: var(--bg-light-aether);
            box-shadow: 0 3px 10px rgba(var(--accent-aether-rgb), 0.28);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-aether);
            color: var(--text-dark-aether);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-aether);
        }

        body.dark-mode .section-title-aether h2 {
            color: var(--primary-aether-dark);
        }

        body.dark-mode .section-title-aether h2::after {
            background: linear-gradient(90deg, var(--primary-aether-dark), var(--accent-aether-dark), var(--secondary-aether-dark));
            background-size: 250% 250%;
            animation: gradientLineAnimationV3 5s ease infinite alternate;
        }

        body.dark-mode .section-title-aether p.subtitle-aether {
            color: var(--muted-text-dark-aether);
        }

        body.dark-mode .btn-aether-primary {
            background: linear-gradient(45deg, var(--primary-aether-dark), var(--secondary-aether-dark));
            box-shadow: 0 5px 15px rgba(var(--primary-aether-dark-rgb), 0.3);
            color: var(--bg-dark-aether);
        }

        body.dark-mode .btn-aether-primary:hover {
            box-shadow: 0 8px 20px rgba(var(--primary-aether-dark-rgb), 0.4);
        }

        body.dark-mode .btn-aether-secondary {
            border-color: var(--accent-aether-dark);
            color: var(--accent-aether-dark);
        }

        body.dark-mode .btn-aether-secondary:hover {
            background-color: var(--accent-aether-dark);
            color: var(--bg-dark-aether);
            box-shadow: 0 4px 12px rgba(var(--accent-aether-dark-rgb), 0.3);
        }

        #preloader-aether {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-aether);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.5s ease-out 0.3s;
        }

        body.dark-mode #preloader-aether {
            background-color: var(--bg-dark-aether);
        }

        #preloader-aether.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-aether {
            font-family: 'Source Code Pro', monospace;
            font-size: 1.8rem;
            /* Ukuran teks loader */
            color: var(--primary-aether);
            position: relative;
        }

        body.dark-mode .loader-aether {
            color: var(--primary-aether-dark);
        }

        .loader-aether::before,
        .loader-aether::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .loader-aether::before {
            left: 1.5px;
            /* Glitch lebih halus */
            text-shadow: -1px 0 var(--accent-aether);
            animation: glitchLoader1V3 1.6s infinite linear alternate-reverse;
            /* Nama animasi unik */
        }

        .loader-aether::after {
            left: -1.5px;
            text-shadow: 1px 0 var(--secondary-aether);
            animation: glitchLoader2V3 1.3s infinite linear alternate-reverse;
            /* Nama animasi unik */
        }

        body.dark-mode .loader-aether::before {
            text-shadow: -1px 0 var(--accent-aether-dark);
        }

        body.dark-mode .loader-aether::after {
            text-shadow: 1px 0 var(--secondary-aether-dark);
        }

        @keyframes glitchLoader1V3 {

            /* Nama keyframe unik */
            0% {
                clip-path: polygon(0 5%, 100% 5%, 100% 35%, 0 35%);
            }

            100% {
                clip-path: polygon(0 65%, 100% 65%, 100% 95%, 0 95%);
            }
        }

        @keyframes glitchLoader2V3 {

            /* Nama keyframe unik */
            0% {
                clip-path: polygon(0 45%, 100% 45%, 100% 65%, 0 65%);
            }

            100% {
                clip-path: polygon(0 15%, 100% 15%, 100% 25%, 0 25%);
            }
        }

        .back-to-top-aether {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 16px;
            bottom: 16px;
            z-index: 999;
            background: var(--primary-aether);
            width: 38px;
            height: 38px;
            border-radius: 5px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 7px rgba(var(--primary-aether-rgb), 0.25);
        }

        .back-to-top-aether i {
            font-size: 0.9rem;
            color: #fff;
        }

        .back-to-top-aether:hover {
            background: color-mix(in srgb, var(--primary-aether) 80%, black);
            transform: translateY(-2px);
        }

        .back-to-top-aether.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-aether {
            background: var(--primary-aether-dark);
            box-shadow: 0 2px 7px rgba(var(--primary-aether-dark-rgb), 0.25);
        }

        body.dark-mode .back-to-top-aether:hover {
            background: color-mix(in srgb, var(--primary-aether-dark) 80%, black);
        }

        .theme-toggle-button-aether {
            position: fixed;
            bottom: 16px;
            left: 16px;
            z-index: 1000;
            background-color: var(--card-bg-light-aether);
            border: 1px solid var(--border-light-aether);
            color: var(--text-light-aether);
            width: 38px;
            height: 38px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 7px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .theme-toggle-button-aether:hover {
            background-color: #E9ECEF;
            transform: scale(1.05) rotate(-12deg);
        }

        .theme-toggle-button-aether i {
            font-size: 0.9rem;
        }

        .theme-toggle-button-aether .icon-sun-aether {
            display: none;
        }

        body.dark-mode .theme-toggle-button-aether {
            background-color: var(--card-bg-dark-aether);
            border-color: var(--border-dark-aether);
            color: var(--text-dark-aether);
        }

        body.dark-mode .theme-toggle-button-aether:hover {
            background-color: #222B38;
        }

        body.dark-mode .theme-toggle-button-aether .icon-moon-aether {
            display: none;
        }

        body.dark-mode .theme-toggle-button-aether .icon-sun-aether {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_econ_v3_fresh']) && $_COOKIE['theme_econ_v3_fresh'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-aether">
        <div class="loader-aether" data-text="AETHR...">AETHR...</div>
    </div>

    <?php
    $component_dir_v3_fresh = 'components/'; // Nama direktori baru

    $components_v3_fresh = [
        'header_econ_v3_fresh.php',
        'hero_econ_v3_fresh.php',
        'about_econ_v3_fresh.php',
        'services_econ_v3_fresh.php',
        'market_data_econ_v3_fresh.php', // Komponen baru untuk Market Data
        'cta_econ_v3_fresh.php',
        'contact_econ_v3_fresh.php',
        'footer_econ_v3_fresh.php'
    ];

    foreach ($components_v3_fresh as $component) {
        $component_path_v3_fresh = $component_dir_v3_fresh . $component;
        if (file_exists($component_path_v3_fresh)) {
            include $component_path_v3_fresh;
        } else {
            echo "<div class='container my-5 py-5 text-center'><div class='alert alert-danger' role='alert'>";
            echo "<strong>Error Kritis:</strong> Komponen <code>" . htmlspecialchars($component_path_v3_fresh) . "</code> tidak ditemukan.";
            echo "<br>Pastikan file ada di direktori yang benar (<code>" . htmlspecialchars($component_dir_v3_fresh) . "</code>) dan nama file tidak salah ketik. Website tidak dapat dimuat dengan benar.";
            echo "</div></div>";
        }
    }
    ?>

    <a href="#" class="back-to-top-aether"><i class="fas fa-angle-up"></i></a>

    <button class="theme-toggle-button-aether" id="themeTogglerEconV3Fresh" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-aether"></i>
        <i class="fas fa-sun icon-sun-aether"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js" xintegrity="sha512-NEjbZ2P_rU8575TqLwG2MOwNnC2A2j5DqS8B/n9IgTLPLutUo3KslYM/0B+U5i1fSgceTkF9F4L36qRjYpQJ1Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 650, // Durasi animasi lebih cepat
                once: true,
                offset: 35, // Trigger lebih awal
                easing: 'ease-out-sine', // Easing yang lebih tajam
            });

            const preloader = document.getElementById('preloader-aether');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                        setTimeout(() => {
                            if (preloader) preloader.style.display = 'none';
                        }, 500);
                    }, 250); // Delay preloader lebih singkat
                });
            }

            const backToTopButton = document.querySelector('.back-to-top-aether');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    window.scrollY > 180 ? backToTopButton.classList.add('active') : backToTopButton.classList.remove('active');
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

            const themeToggler = document.getElementById('themeTogglerEconV3Fresh'); // ID unik
            const bodyElement = document.body;
            const moonIcon = themeToggler ? themeToggler.querySelector('.icon-moon-aether') : null;
            const sunIcon = themeToggler ? themeToggler.querySelector('.icon-sun-aether') : null;

            function applyThemeEconV3Fresh(theme) { // Nama fungsi unik
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedEconV3Fresh', {
                    detail: {
                        theme: theme
                    }
                })); // Event unik
            }

            let savedThemeEconV3Fresh = localStorage.getItem('theme_econ_v3_fresh'); // Key localStorage unik
            if (!savedThemeEconV3Fresh) {
                savedThemeEconV3Fresh = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }
            applyThemeEconV3Fresh(savedThemeEconV3Fresh);

            if (themeToggler) {
                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeEconV3Fresh(newTheme);
                    localStorage.setItem('theme_econ_v3_fresh', newTheme); // Key localStorage unik
                });
            }
        });
    </script>
</body>

</html>