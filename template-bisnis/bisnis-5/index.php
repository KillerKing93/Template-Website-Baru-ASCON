<?php // File: index.php - Template Bisnis Kalem dengan Mode Terang/Gelap 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan Harmoni - Solusi Tenang & Terpercaya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&family=Noto+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Light Mode (Default) */
        :root {
            --bg-light: #F8F9FA;
            /* Latar belakang terang */
            --text-light: #212529;
            /* Teks gelap untuk kontras */
            --card-bg-light: #FFFFFF;
            --border-light: #DEE2E6;
            --primary-calm: #6C757D;
            /* Abu-abu netral */
            --secondary-calm: #A8DADC;
            /* Biru kehijauan pastel */
            --accent-calm: #F4A261;
            /* Oranye lembut sebagai aksen */

            --bg-dark: #212529;
            /* Latar belakang gelap */
            --text-dark: #F8F9FA;
            /* Teks terang untuk kontras */
            --card-bg-dark: #343A40;
            --border-dark: #495057;
        }

        body {
            font-family: 'Noto Sans', sans-serif;
            line-height: 1.7;
            background-color: var(--bg-light);
            color: var(--text-light);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Raleway', sans-serif;
            font-weight: 600;
            /* Tidak terlalu tebal */
            color: var(--text-light);
            /* Default untuk light mode */
            transition: color 0.3s ease;
        }

        .section-calm {
            padding: 80px 0;
            overflow: hidden;
        }

        .section-title-calm {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-calm h2 {
            font-size: 2.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            display: inline-block;
        }

        .section-title-calm h2::after {
            /* Garis bawah halus */
            content: '';
            display: block;
            width: 70px;
            height: 3px;
            background-color: var(--secondary-calm);
            /* Warna aksen lembut */
            margin: 10px auto 0;
            border-radius: 2px;
            transition: background-color 0.3s ease;
        }

        .section-title-calm p.subtitle-calm {
            font-size: 1.1rem;
            color: var(--text-light);
            /* Default untuk light mode */
            opacity: 0.8;
            max-width: 700px;
            margin: 10px auto 0 auto;
            transition: color 0.3s ease;
        }

        .btn-calm-primary {
            background-color: var(--primary-calm);
            border-color: var(--primary-calm);
            color: #fff;
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 25px;
            /* Tombol lebih bulat */
            transition: all 0.3s ease;
            font-family: 'Raleway', sans-serif;
        }

        .btn-calm-primary:hover {
            background-color: #5a6268;
            /* Sedikit lebih gelap */
            border-color: #545b62;
            color: #fff;
            transform: translateY(-2px);
        }

        .btn-calm-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-calm);
            color: var(--secondary-calm);
            padding: 8px 23px;
            font-weight: 500;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-family: 'Raleway', sans-serif;
        }

        .btn-calm-secondary:hover {
            background-color: var(--secondary-calm);
            color: var(--text-light);
            /* Teks kontras saat hover */
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

        body.dark-mode .section-title-calm h2::after {
            background-color: var(--accent-calm);
            /* Aksen berbeda di dark mode */
        }

        body.dark-mode .section-title-calm p.subtitle-calm {
            color: var(--text-dark);
            opacity: 0.7;
        }

        body.dark-mode .btn-calm-secondary {
            color: var(--accent-calm);
            border-color: var(--accent-calm);
        }

        body.dark-mode .btn-calm-secondary:hover {
            background-color: var(--accent-calm);
            color: var(--bg-dark);
            /* Teks kontras saat hover */
        }

        /* Komponen lain akan menyesuaikan style dark mode di file masing-masing */


        /* Preloader (Opsional) */
        #preloader-calm {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light);
            /* Sesuai mode awal */
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.5s ease-out 0.3s;
        }

        body.dark-mode #preloader-calm {
            /* Preloader dark mode */
            background-color: var(--bg-dark);
        }

        #preloader-calm.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .spinner-calm {
            width: 40px;
            height: 40px;
            border: 4px solid rgba(var(--primary-calm-rgb, 108, 117, 125), 0.2);
            /* Default primary calm */
            border-top-color: var(--secondary-calm);
            /* Warna spinner */
            border-radius: 50%;
            animation: spinCalm 0.8s linear infinite;
        }

        body.dark-mode .spinner-calm {
            border-top-color: var(--accent-calm);
        }

        @keyframes spinCalm {
            to {
                transform: rotate(360deg);
            }
        }

        /* Back to top button */
        .back-to-top-calm {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 20px;
            bottom: 20px;
            z-index: 999;
            background: var(--primary-calm);
            width: 40px;
            height: 40px;
            border-radius: 50px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-calm i {
            font-size: 18px;
            color: #fff;
        }

        .back-to-top-calm:hover {
            background: #5a6268;
        }

        /* Lebih gelap dari primary-calm */
        .back-to-top-calm.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-calm {
            background: var(--accent-calm);
        }

        body.dark-mode .back-to-top-calm:hover {
            background: #d18240;
            /* Lebih gelap dari accent-calm */
        }

        body.dark-mode .back-to-top-calm i {
            color: var(--bg-dark);
        }


        /* Tombol Theme Toggle */
        .theme-toggle-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
            background-color: var(--card-bg-light);
            border: 1px solid var(--border-light);
            color: var(--text-light);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        .theme-toggle-button:hover {
            background-color: #e9ecef;
            /* Sedikit lebih gelap */
        }

        .theme-toggle-button i {
            font-size: 1.2rem;
        }

        .theme-toggle-button .icon-sun {
            display: none;
        }

        /* Default light, tampilkan bulan */

        body.dark-mode .theme-toggle-button {
            background-color: var(--card-bg-dark);
            border-color: var(--border-dark);
            color: var(--text-dark);
        }

        body.dark-mode .theme-toggle-button:hover {
            background-color: #495057;
            /* Sedikit lebih terang */
        }

        body.dark-mode .theme-toggle-button .icon-moon {
            display: none;
        }

        body.dark-mode .theme-toggle-button .icon-sun {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark' ? 'dark-mode' : ''; ?>">
    <div id="preloader-calm">
        <div class="spinner-calm"></div>
    </div>

    <?php
    // Ini adalah komentar PHP satu baris
    /*
           Ini adalah komentar PHP
           multi-baris.
           Kita akan menyertakan komponen header di sini.
        */
    include 'components/header_calm.php';
    ?>

    <?php include 'components/hero_serene.php'; ?>
    <?php include 'components/about_gentle.php'; ?>
    <?php include 'components/services_minimalist.php'; ?>
    <?php include 'components/portfolio_subtle.php'; ?>
    <?php include 'components/testimonials_soft.php'; ?>
    <?php include 'components/contact_osm_map.php'; ?>
    <?php include 'components/footer_simple.php'; ?>

    <a href="#" class="back-to-top-calm"><i class="fas fa-arrow-up"></i></a>

    <button class="theme-toggle-button" id="themeToggler" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon"></i>
        <i class="fas fa-sun icon-sun"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi AOS
            AOS.init({
                duration: 900, // Durasi animasi yang tenang
                once: true,
                offset: 40,
                easing: 'ease-in-out-cubic',
            });

            // Preloader Logic
            const preloader = document.getElementById('preloader-calm');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 300);
                });
            }

            // Back to top button logic
            const backToTopButton = document.querySelector('.back-to-top-calm');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 150) {
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
            const themeToggler = document.getElementById('themeToggler');
            const currentTheme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';

            // Set ikon awal berdasarkan tema saat load (jika tema dari cookie)
            const moonIcon = themeToggler.querySelector('.icon-moon');
            const sunIcon = themeToggler.querySelector('.icon-sun');
            if (currentTheme === 'dark') {
                moonIcon.style.display = 'none';
                sunIcon.style.display = 'block';
            } else {
                moonIcon.style.display = 'block';
                sunIcon.style.display = 'none';
            }


            if (themeToggler) {
                themeToggler.addEventListener('click', function() {
                    document.body.classList.toggle('dark-mode');
                    const newTheme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';

                    // Simpan preferensi tema di cookie
                    // document.cookie = "theme=" + newTheme + ";path=/;max-age=" + (60*60*24*30); // Cookie 30 hari
                    // Untuk environment iframe, cookie mungkin tidak reliable.
                    // Jika ingin persistensi, localStorage adalah alternatif, tapi tidak akan terbawa antar sesi jika iframe di-refresh total.
                    // Untuk sekarang, kita hanya toggle kelas. Jika user minta persistensi, kita bisa tambahkan localStorage.

                    if (newTheme === 'dark') {
                        moonIcon.style.display = 'none';
                        sunIcon.style.display = 'block';
                    } else {
                        moonIcon.style.display = 'block';
                        sunIcon.style.display = 'none';
                    }

                    // Jika ada peta Leaflet, mungkin perlu re-render atau update style tile layer
                    if (typeof map !== 'undefined' && map) {
                        // Contoh: jika tile layer perlu diubah
                        // map.removeLayer(currentTileLayer);
                        // currentTileLayer = L.tileLayer(newTheme === 'dark' ? darkMapUrl : lightMapUrl, { attribution: '...' }).addTo(map);
                    }
                });
            }
        });
    </script>
</body>

</html>