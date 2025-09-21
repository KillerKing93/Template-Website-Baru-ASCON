<?php // File: index.php - Template Website Pertanian 1 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Pertanian Anda - Segar dari Ladang</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Merriweather (Serif untuk kesan alami) & Open Sans (Body) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pertanian Alami */
        :root {
            /* Light Mode (Default) */
            --bg-light: #F4F1EA;
            /* Krem lembut */
            --text-light: #3C2A21;
            /* Coklat tua */
            --card-bg-light: #FFFFFF;
            --border-light: #D5C7BC;
            /* Coklat muda untuk border */
            --primary-farm: #5A8B41;
            /* Hijau daun */
            --secondary-farm: #D4A373;
            /* Coklat tanah/kayu */
            --accent-farm: #E76F51;
            /* Oranye/merah bata sebagai aksen */
            --muted-text-light: #7A6C62;

            /* Dark Mode Variables */
            --bg-dark: #2A3D2A;
            /* Hijau hutan gelap */
            --text-dark: #E0E0D0;
            /* Krem terang */
            --card-bg-dark: #3E523E;
            /* Hijau gelap untuk kartu */
            --border-dark: #5A705A;
            --primary-farm-dark: #7CB342;
            /* Hijau lebih terang */
            --secondary-farm-dark: #B08968;
            /* Coklat lebih terang */
            --accent-farm-dark: #F08A5D;
            /* Oranye lebih terang */
            --muted-text-dark: #B0B5A8;
        }

        body {
            font-family: 'Open Sans', sans-serif;
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
            font-family: 'Merriweather', serif;
            font-weight: 700;
            color: var(--text-light);
            transition: color 0.3s ease;
        }

        .section-pertanian {
            padding: 80px 0;
            overflow: hidden;
        }

        .section-title-pertanian {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title-pertanian h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-farm);
            /* Judul dengan warna primer */
            margin-bottom: 10px;
            display: inline-block;
        }

        .section-title-pertanian h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background-color: var(--secondary-farm);
            margin: 10px auto 0;
            border-radius: 2px;
            transition: background-color 0.3s ease;
        }

        .section-title-pertanian p.subtitle-pertanian {
            font-size: 1.1rem;
            color: var(--muted-text-light);
            max-width: 700px;
            margin: 15px auto 0 auto;
            font-family: 'Open Sans', sans-serif;
            transition: color 0.3s ease;
        }

        .btn-farm-primary {
            background-color: var(--primary-farm);
            border: 2px solid var(--primary-farm);
            color: #fff;
            padding: 10px 28px;
            font-weight: 600;
            font-family: 'Open Sans', sans-serif;
            border-radius: 30px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 3px 10px rgba(90, 139, 65, 0.3);
        }

        .btn-farm-primary:hover {
            background-color: #4A7531;
            /* Lebih gelap */
            border-color: #4A7531;
            color: #fff;
            transform: translateY(-2px);
        }

        .btn-farm-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-farm);
            color: var(--secondary-farm);
            padding: 8px 25px;
            font-weight: 600;
            font-family: 'Open Sans', sans-serif;
            border-radius: 30px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-farm-secondary:hover {
            background-color: var(--secondary-farm);
            color: #fff;
            /* Teks putih saat hover */
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

        body.dark-mode .section-title-pertanian h2 {
            color: var(--primary-farm-dark);
        }

        body.dark-mode .section-title-pertanian h2::after {
            background-color: var(--secondary-farm-dark);
        }

        body.dark-mode .section-title-pertanian p.subtitle-pertanian {
            color: var(--muted-text-dark);
        }

        body.dark-mode .btn-farm-primary {
            background-color: var(--primary-farm-dark);
            border-color: var(--primary-farm-dark);
            box-shadow: 0 3px 10px rgba(124, 179, 66, 0.3);
        }

        body.dark-mode .btn-farm-primary:hover {
            background-color: #689F38;
            /* Lebih gelap dari primary-farm-dark */
            border-color: #689F38;
        }

        body.dark-mode .btn-farm-secondary {
            border-color: var(--secondary-farm-dark);
            color: var(--secondary-farm-dark);
        }

        body.dark-mode .btn-farm-secondary:hover {
            background-color: var(--secondary-farm-dark);
            color: var(--bg-dark);
        }

        /* Preloader */
        #preloader-pertanian {
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
            transition: opacity 0.5s ease-out 0.3s;
        }

        body.dark-mode #preloader-pertanian {
            background-color: var(--bg-dark);
        }

        #preloader-pertanian.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .spinner-pertanian {
            width: 45px;
            height: 45px;
            border: 5px solid rgba(90, 139, 65, 0.2);
            /* var(--primary-farm) dengan alpha */
            border-top-color: var(--primary-farm);
            border-radius: 50%;
            animation: spinPertanian 0.9s linear infinite;
        }

        body.dark-mode .spinner-pertanian {
            border-color: rgba(124, 179, 66, 0.2);
            /* var(--primary-farm-dark) dengan alpha */
            border-top-color: var(--primary-farm-dark);
        }

        @keyframes spinPertanian {
            to {
                transform: rotate(360deg);
            }
        }

        /* Back to top button */
        .back-to-top-pertanian {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 20px;
            bottom: 20px;
            z-index: 999;
            background: var(--primary-farm);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-pertanian i {
            font-size: 18px;
            color: #fff;
        }

        .back-to-top-pertanian:hover {
            background: #4A7531;
        }

        .back-to-top-pertanian.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-pertanian {
            background: var(--primary-farm-dark);
        }

        body.dark-mode .back-to-top-pertanian:hover {
            background: #689F38;
        }

        /* Tombol Theme Toggle */
        .theme-toggle-button-pertanian {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
            background-color: var(--card-bg-light);
            border: 1px solid var(--border-light);
            color: var(--text-light);
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

        .theme-toggle-button-pertanian:hover {
            background-color: #e9ecef;
            transform: scale(1.1);
        }

        .theme-toggle-button-pertanian i {
            font-size: 1.1rem;
        }

        .theme-toggle-button-pertanian .icon-sun-pertanian {
            display: none;
        }

        body.dark-mode .theme-toggle-button-pertanian {
            background-color: var(--card-bg-dark);
            border-color: var(--border-dark);
            color: var(--text-dark);
        }

        body.dark-mode .theme-toggle-button-pertanian:hover {
            background-color: #495057;
        }

        body.dark-mode .theme-toggle-button-pertanian .icon-moon-pertanian {
            display: none;
        }

        body.dark-mode .theme-toggle-button-pertanian .icon-sun-pertanian {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_pertanian']) && $_COOKIE['theme_pertanian'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-pertanian">
        <div class="spinner-pertanian"></div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website pertanian */
    include 'components/header_pertanian.php';
    ?>

    <?php include 'components/hero_pertanian.php'; ?>
    <?php include 'components/tentang_kami_pertanian.php'; ?>
    <?php include 'components/produk_unggulan_pertanian.php'; ?> <?php /* Mengganti nama dari produk_layanan_pertanian */ ?>
    <?php include 'components/galeri_pertanian.php'; ?>
    <?php include 'components/berita_artikel_pertanian.php'; ?>
    <?php include 'components/kontak_pertanian_osm.php'; ?> <?php /* Mengganti nama dari kontak_pertanian */ ?>
    <?php include 'components/footer_pertanian.php'; ?>

    <a href="#" class="back-to-top-pertanian"><i class="fas fa-arrow-up"></i></a>

    <button class="theme-toggle-button-pertanian" id="themeTogglerPertanian" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-pertanian"></i>
        <i class="fas fa-sun icon-sun-pertanian"></i>
    </button>

    <?php /* Komentar PHP: Bootstrap Bundle JS */ ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php /* Komentar PHP: Leaflet JS (Untuk OpenStreetMap) */ ?>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <?php /* Komentar PHP: GLightbox JS (Untuk Galeri) */ ?>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

    <?php /* Komentar PHP: AOS JS */ ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <?php /* Komentar PHP: Anime.js (jika digunakan untuk animasi kustom) */ ?>
    <?php /* <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script> */ ?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Komentar JavaScript: Inisialisasi AOS
            AOS.init({
                duration: 800, // Durasi animasi yang lebih kalem
                once: true,
                offset: 50,
                easing: 'ease-in-out-sine',
            });

            // Komentar JavaScript: Logika Preloader
            const preloader = document.getElementById('preloader-pertanian');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 300); // Sedikit delay agar animasi terlihat
                });
            }

            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-pertanian');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 180) { // Muncul setelah scroll lebih banyak
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
            const themeToggler = document.getElementById('themeTogglerPertanian');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-pertanian');
            const sunIcon = themeToggler.querySelector('.icon-sun-pertanian');

            function applyTheme(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                // Komentar JavaScript: Dispatch custom event untuk memberitahu komponen lain (misal peta)
                document.dispatchEvent(new CustomEvent('themeChangedPertanian', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            // Komentar JavaScript: Cek tema dari localStorage atau preferensi sistem saat load
            // Untuk cookie, Anda sudah menanganinya di PHP. Ini contoh jika pakai localStorage.
            let savedTheme = localStorage.getItem('theme_pertanian');
            if (!savedTheme) { // Jika tidak ada di localStorage, cek cookie (PHP sudah menangani ini di class body)
                savedTheme = bodyElement.classList.contains('dark-mode') ? 'dark' : 'light';
            } else { // Jika ada di localStorage, sinkronkan class body
                applyTheme(savedTheme); // Terapkan dari localStorage
            }

            if (themeToggler) {
                // Komentar JavaScript: Set ikon awal berdasarkan tema saat load
                applyTheme(bodyElement.classList.contains('dark-mode') ? 'dark' : 'light');

                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyTheme(newTheme);
                    localStorage.setItem('theme_pertanian', newTheme); // Simpan preferensi ke localStorage

                    // Komentar JavaScript: Update cookie jika perlu (opsional, karena localStorage lebih modern)
                    // document.cookie = "theme_pertanian=" + newTheme + ";path=/;max-age=" + (60*60*24*30); 
                });
            }
        });
    </script>
</body>

</html>