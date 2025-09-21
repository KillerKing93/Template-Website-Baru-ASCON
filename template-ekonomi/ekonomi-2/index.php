<?php // File: index.php - Vertex Capital Partners (Ekonomi Template 2)
// Komentar PHP: File utama untuk merangkai semua komponen website.
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertex Capital Partners - Strategi Investasi & Pertumbuhan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <style>
        /* Global Styles - Tema Vertex Capital Partners */
        :root {
            /* Light Mode (Default) */
            --bg-light-vertex: #FFFFFF;
            /* Putih bersih */
            --bg-light-vertex-rgb: 255, 255, 255;
            --text-light-vertex: #1E2D3B;
            /* Biru tua keabuan untuk teks */
            --card-bg-light-vertex: #F9FAFB;
            /* Abu-abu sangat terang untuk kartu/section alternatif */
            --border-light-vertex: #D1D9E6;
            /* Border halus */

            --primary-vertex: #0D47A1;
            /* Biru Navy yang kuat dan elegan */
            --primary-vertex-rgb: 13, 71, 161;
            --secondary-vertex: #1976D2;
            /* Biru sedikit lebih terang */
            --secondary-vertex-rgb: 25, 118, 210;
            --accent-vertex: #FFB300;
            /* Kuning Emas sebagai aksen kuat */
            --accent-vertex-rgb: 255, 179, 0;
            --muted-text-light-vertex: #546E7A;
            /* Abu-abu kebiruan untuk teks sekunder */

            /* Dark Mode Variables */
            --bg-dark-vertex: #0A192F;
            /* Biru malam sangat gelap */
            --bg-dark-vertex-rgb: 10, 25, 47;
            --text-dark-vertex: #E0E6F1;
            /* Putih kebiruan lembut */
            --card-bg-dark-vertex: #172A46;
            /* Biru gelap untuk kartu/section alternatif */
            --card-bg-dark-vertex-rgb: 23, 42, 70;
            --border-dark-vertex: #2C3E50;
            /* Border lebih gelap */
            --border-dark-vertex-rgb: 44, 62, 80;

            --primary-vertex-dark: #1E88E5;
            /* Biru lebih cerah untuk dark mode */
            --primary-vertex-dark-rgb: 30, 136, 229;
            --secondary-vertex-dark: #42A5F5;
            /* Biru langit lebih cerah */
            --secondary-vertex-dark-rgb: 66, 165, 245;
            --accent-vertex-dark: #FFCA28;
            /* Kuning Emas lebih cerah */
            --accent-vertex-dark-rgb: 255, 202, 40;
            --muted-text-dark-vertex: #9FB3C8;
            /* Abu-abu muda kebiruan */
        }

        body {
            font-family: 'Lato', sans-serif;
            line-height: 1.75;
            background-color: var(--bg-light-vertex);
            color: var(--text-light-vertex);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            /* Raleway lebih tebal untuk heading */
            color: var(--text-light-vertex);
            transition: color 0.3s ease;
            letter-spacing: 0.2px;
            /* Spasi huruf sedikit */
        }

        .section-vertex {
            padding: 80px 0;
            overflow: hidden;
            position: relative;
        }

        .section-title-vertex {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title-vertex h2 {
            font-size: 2.6rem;
            font-weight: 800;
            /* Sangat tebal */
            color: var(--primary-vertex);
            margin-bottom: 12px;
            position: relative;
            padding-bottom: 10px;
            text-transform: capitalize;
            /* Judul tidak selalu uppercase */
        }

        .section-title-vertex h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-vertex), var(--secondary-vertex));
            /* Gradien untuk garis bawah */
            border-radius: 2px;
            transition: background 0.3s ease;
        }

        .section-title-vertex p.subtitle-vertex {
            font-size: 1.1rem;
            color: var(--muted-text-light-vertex);
            max-width: 720px;
            margin: 15px auto 0 auto;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            transition: color 0.3s ease;
            line-height: 1.65;
        }

        .btn-vertex-primary {
            background-color: var(--primary-vertex);
            border: 2px solid var(--primary-vertex);
            color: #fff;
            padding: 12px 30px;
            font-weight: 600;
            font-family: 'Raleway', sans-serif;
            border-radius: 6px;
            /* Sudut sedikit membulat */
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(var(--primary-vertex-rgb), 0.25);
        }

        .btn-vertex-primary:hover {
            background-color: color-mix(in srgb, var(--primary-vertex) 80%, black);
            border-color: color-mix(in srgb, var(--primary-vertex) 80%, black);
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 7px 18px rgba(var(--primary-vertex-rgb), 0.35);
        }

        .btn-vertex-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-vertex);
            color: var(--secondary-vertex);
            padding: 10px 28px;
            font-weight: 600;
            font-family: 'Raleway', sans-serif;
            border-radius: 6px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .btn-vertex-secondary:hover {
            background-color: var(--secondary-vertex);
            color: #fff;
            box-shadow: 0 4px 12px rgba(var(--secondary-vertex-rgb), 0.3);
        }

        .btn-vertex-accent {
            background-color: var(--accent-vertex);
            border: 2px solid var(--accent-vertex);
            color: var(--text-light-vertex);
            padding: 12px 30px;
            font-weight: 600;
            font-family: 'Raleway', sans-serif;
            border-radius: 6px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(var(--accent-vertex-rgb), 0.25);
        }

        .btn-vertex-accent:hover {
            background-color: color-mix(in srgb, var(--accent-vertex) 85%, black);
            border-color: color-mix(in srgb, var(--accent-vertex) 85%, black);
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 7px 18px rgba(var(--accent-vertex-rgb), 0.35);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-vertex);
            color: var(--text-dark-vertex);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-vertex);
        }

        body.dark-mode .section-title-vertex h2 {
            color: var(--primary-vertex-dark);
        }

        body.dark-mode .section-title-vertex h2::after {
            background: linear-gradient(90deg, var(--primary-vertex-dark), var(--secondary-vertex-dark));
        }

        body.dark-mode .section-title-vertex p.subtitle-vertex {
            color: var(--muted-text-dark-vertex);
        }

        body.dark-mode .btn-vertex-primary {
            background-color: var(--primary-vertex-dark);
            border-color: var(--primary-vertex-dark);
            color: #fff;
            /* Teks putih kontras */
            box-shadow: 0 4px 15px rgba(var(--primary-vertex-dark-rgb), 0.25);
        }

        body.dark-mode .btn-vertex-primary:hover {
            background-color: color-mix(in srgb, var(--primary-vertex-dark) 80%, black);
            border-color: color-mix(in srgb, var(--primary-vertex-dark) 80%, black);
            box-shadow: 0 7px 18px rgba(var(--primary-vertex-dark-rgb), 0.35);
        }

        body.dark-mode .btn-vertex-secondary {
            border-color: var(--secondary-vertex-dark);
            color: var(--secondary-vertex-dark);
        }

        body.dark-mode .btn-vertex-secondary:hover {
            background-color: var(--secondary-vertex-dark);
            color: var(--bg-dark-vertex);
            box-shadow: 0 4px 12px rgba(var(--secondary-vertex-dark-rgb), 0.3);
        }

        body.dark-mode .btn-vertex-accent {
            background-color: var(--accent-vertex-dark);
            border-color: var(--accent-vertex-dark);
            color: var(--bg-dark-vertex);
            box-shadow: 0 4px 15px rgba(var(--accent-vertex-dark-rgb), 0.25);
        }

        body.dark-mode .btn-vertex-accent:hover {
            background-color: color-mix(in srgb, var(--accent-vertex-dark) 85%, black);
            border-color: color-mix(in srgb, var(--accent-vertex-dark) 85%, black);
            color: var(--bg-dark-vertex);
            box-shadow: 0 7px 18px rgba(var(--accent-vertex-dark-rgb), 0.35);
        }

        #preloader-vertex {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-vertex);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.5s ease-out 0.3s;
        }

        body.dark-mode #preloader-vertex {
            background-color: var(--bg-dark-vertex);
        }

        #preloader-vertex.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-vertex {
            /* Loader dengan bentuk geometris */
            width: 45px;
            height: 45px;
            position: relative;
            animation: rotateVertexLoader 2s infinite linear;
        }

        .loader-vertex::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: var(--primary-vertex);
            border-bottom-color: var(--secondary-vertex);
            animation: spinVertexLoader 1s infinite linear;
        }

        body.dark-mode .loader-vertex::before {
            border-top-color: var(--primary-vertex-dark);
            border-bottom-color: var(--secondary-vertex-dark);
        }

        @keyframes rotateVertexLoader {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes spinVertexLoader {
            100% {
                transform: rotate(-360deg);
            }
        }


        .back-to-top-vertex {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 18px;
            bottom: 18px;
            z-index: 999;
            background: var(--primary-vertex);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            /* Bulat */
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);
        }

        .back-to-top-vertex i {
            font-size: 1rem;
            color: #fff;
        }

        .back-to-top-vertex:hover {
            background: color-mix(in srgb, var(--primary-vertex) 75%, black);
            transform: translateY(-2px);
        }

        .back-to-top-vertex.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-vertex {
            background: var(--primary-vertex-dark);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.35);
        }

        body.dark-mode .back-to-top-vertex:hover {
            background: color-mix(in srgb, var(--primary-vertex-dark) 75%, black);
        }

        .theme-toggle-button-vertex {
            position: fixed;
            bottom: 18px;
            left: 18px;
            z-index: 1000;
            background-color: var(--card-bg-light-vertex);
            border: 1px solid var(--border-light-vertex);
            color: var(--text-light-vertex);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            /* Bulat */
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.12);
            transition: all 0.3s ease;
        }

        .theme-toggle-button-vertex:hover {
            background-color: #E9ECEF;
            transform: scale(1.08) rotate(15deg);
        }

        .theme-toggle-button-vertex i {
            font-size: 1rem;
        }

        .theme-toggle-button-vertex .icon-sun-vertex {
            display: none;
        }

        body.dark-mode .theme-toggle-button-vertex {
            background-color: var(--card-bg-dark-vertex);
            border-color: var(--border-dark-vertex);
            color: var(--text-dark-vertex);
        }

        body.dark-mode .theme-toggle-button-vertex:hover {
            background-color: #2C3E50;
        }

        body.dark-mode .theme-toggle-button-vertex .icon-moon-vertex {
            display: none;
        }

        body.dark-mode .theme-toggle-button-vertex .icon-sun-vertex {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_econ_v2']) && $_COOKIE['theme_econ_v2'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-vertex">
        <div class="loader-vertex"></div>
    </div>

    <?php
    $component_dir_v2 = 'components/'; // Ganti dengan nama direktori Anda

    $components_v2 = [
        'header_econ_v2.php',
        'hero_econ_v2.php',
        'about_econ_v2.php',
        'services_econ_v2.php',
        'cta_econ_v2.php',
        'contact_econ_v2.php',
        'footer_econ_v2.php'
    ];

    foreach ($components_v2 as $component) {
        $component_path_v2 = $component_dir_v2 . $component;
        if (file_exists($component_path_v2)) {
            include $component_path_v2;
        } else {
            echo "<div class='container my-5 py-5 text-center'><div class='alert alert-danger' role='alert'>";
            echo "<strong>Error Kritis:</strong> Komponen <code>" . htmlspecialchars($component_path_v2) . "</code> tidak ditemukan.";
            echo "<br>Pastikan file ada di direktori yang benar dan nama file tidak salah ketik. Website tidak dapat dimuat dengan benar.";
            echo "</div></div>";
        }
    }
    ?>

    <a href="#" class="back-to-top-vertex"><i class="fas fa-arrow-up"></i></a>

    <button class="theme-toggle-button-vertex" id="themeTogglerEconV2" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-vertex"></i>
        <i class="fas fa-sun icon-sun-vertex"></i>
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
                duration: 750,
                once: true,
                offset: 45,
                easing: 'ease-out-quint', // Easing yang lebih modern
            });

            const preloader = document.getElementById('preloader-vertex');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                        setTimeout(() => {
                            if (preloader) preloader.style.display = 'none';
                        }, 500);
                    }, 300);
                });
            }

            const backToTopButton = document.querySelector('.back-to-top-vertex');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    window.scrollY > 190 ? backToTopButton.classList.add('active') : backToTopButton.classList.remove('active');
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

            const themeToggler = document.getElementById('themeTogglerEconV2');
            const bodyElement = document.body;
            const moonIcon = themeToggler ? themeToggler.querySelector('.icon-moon-vertex') : null;
            const sunIcon = themeToggler ? themeToggler.querySelector('.icon-sun-vertex') : null;

            function applyThemeEconV2(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedEconV2', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeEconV2 = localStorage.getItem('theme_econ_v2');
            if (!savedThemeEconV2) {
                savedThemeEconV2 = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }
            applyThemeEconV2(savedThemeEconV2);

            if (themeToggler) {
                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeEconV2(newTheme);
                    localStorage.setItem('theme_econ_v2', newTheme);
                });
            }
        });
    </script>
</body>

</html>