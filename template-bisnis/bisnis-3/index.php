<?php // File: index.php - Template Bisnis Futuristik & Interaktif 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan Futuristik - Inovasi Tanpa Batas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin="" />


    <style>
        /* Global Styles Template 3 */
        :root {
            --primary-color: #6A11CB;
            /* Ungu Gelap Futuristik */
            --secondary-color: #2575FC;
            /* Biru Cerah Futuristik */
            --accent-color: #00FFED;
            /* Cyan/Turquoise Terang untuk Aksen */
            --text-color: #EAEAEA;
            /* Teks terang untuk kontras di latar gelap */
            --dark-bg: #121212;
            /* Latar belakang sangat gelap */
            --card-bg: #1E1E1E;
            /* Latar untuk card/elemen menonjol */
            --border-color: rgba(var(--accent-rgb), 0.2);
            /* Border dengan warna aksen transparan */

            /* Konversi warna hex ke RGB untuk penggunaan di rgba() */
            --accent-rgb: 0, 255, 237;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.7;
            color: var(--text-color);
            background-color: var(--dark-bg);
            overflow-x: hidden;
            font-size: 16px;
            /* Ukuran font dasar */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
            /* Bisa juga pakai Roboto Mono untuk beberapa heading jika ingin kesan lebih techy */
            font-weight: 700;
            color: #FFFFFF;
            /* Heading putih di atas latar gelap */
        }

        .section {
            padding: 100px 0;
            overflow: hidden;
        }

        .section-title-futuristic {
            text-align: center;
            margin-bottom: 70px;
            position: relative;
        }

        .section-title-futuristic h2 {
            font-size: 2.8rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #fff;
            margin-bottom: 15px;
            display: inline-block;
            /* Agar garis bawah pas */
            position: relative;
        }

        .section-title-futuristic h2::before {
            /* Garis atas dinamis */
            content: '';
            position: absolute;
            width: 60%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
            opacity: 0.8;
        }

        .section-title-futuristic h2::after {
            /* Garis bawah dinamis */
            content: '';
            position: absolute;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--secondary-color), var(--primary-color));
            bottom: -10px;
            left: 0;
            border-radius: 2px;
        }

        .section-title-futuristic p.subtitle {
            /* Subjudul */
            font-size: 1.1rem;
            color: var(--text-color);
            opacity: 0.8;
            max-width: 700px;
            margin: 20px auto 0 auto;
            font-family: 'Open Sans', sans-serif;
            /* Font berbeda untuk subjudul */
        }


        .btn-futuristic-primary {
            display: inline-block;
            padding: 14px 35px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            color: #fff;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.4s ease;
            box-shadow: 0 5px 20px rgba(37, 117, 252, 0.4);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-futuristic-primary::before {
            /* Efek kilau */
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.7s ease;
            z-index: -1;
        }

        .btn-futuristic-primary:hover::before {
            left: 150%;
        }

        .btn-futuristic-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(37, 117, 252, 0.6);
        }

        .btn-futuristic-secondary {
            display: inline-block;
            padding: 12px 33px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            color: var(--accent-color);
            background-color: transparent;
            border: 2px solid var(--accent-color);
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.4s ease;
        }

        .btn-futuristic-secondary:hover {
            background-color: var(--accent-color);
            color: var(--dark-bg);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(var(--accent-rgb), 0.3);
        }

        /* Preloader Style */
        #preloader-futuristic {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--dark-bg);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.5s ease-out;
        }

        #preloader-futuristic.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-dots span {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin: 0 5px;
            background-color: var(--accent-color);
            border-radius: 50%;
            animation: dotBounce 1.4s infinite ease-in-out both;
        }

        .loader-dots span:nth-child(1) {
            animation-delay: -0.32s;
        }

        .loader-dots span:nth-child(2) {
            animation-delay: -0.16s;
        }

        @keyframes dotBounce {

            0%,
            80%,
            100% {
                transform: scale(0);
            }

            40% {
                transform: scale(1.0);
            }
        }

        /* Back to top button */
        .back-to-top-futuristic {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 20px;
            bottom: 20px;
            z-index: 999;
            background: var(--accent-color);
            width: 44px;
            height: 44px;
            border-radius: 50px;
            transition: all 0.4s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-futuristic i {
            font-size: 20px;
            color: var(--dark-bg);
            line-height: 0;
        }

        .back-to-top-futuristic:hover {
            background: var(--secondary-color);
        }

        .back-to-top-futuristic.active {
            visibility: visible;
            opacity: 1;
        }

        /* Kustomisasi Scrollbar (Opsional) */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-bg);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }
    </style>
</head>

<body>

    <div id="preloader-futuristic">
        <div class="loader-dots">
            <span></span><span></span><span></span>
        </div>
    </div>

    <?php include 'components/header_futuristic.php'; ?>
    <?php include 'components/hero_interactive_3d.php'; ?>
    <?php include 'components/about_storytelling.php'; ?>
    <?php include 'components/services_dynamic_tabs.php'; ?>
    <?php include 'components/process_animated.php'; ?>
    <?php include 'components/portfolio_masonry_hover.php'; ?>
    <?php include 'components/pricing_table_toggle.php'; ?>
    <?php include 'components/timeline_interactive.php'; ?>
    <?php include 'components/client_logos_carousel.php'; ?>
    <?php include 'components/testimonials_video.php'; ?>
    <?php include 'components/contact_map_multi.php'; ?>
    <?php include 'components/footer_modern.php'; ?>

    <a href="#" class="back-to-top-futuristic"><i class="fas fa-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi AOS
            AOS.init({
                duration: 1000,
                once: true,
                offset: 50,
                easing: 'ease-in-out-quad', // Easing yang lebih smooth
            });

            // Preloader Logic
            const preloader = document.getElementById('preloader-futuristic');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => { // Beri sedikit delay agar animasi terlihat
                        preloader.classList.add('loaded');
                    }, 500);
                });
            }

            // Back to top button logic
            const backToTopButton = document.querySelector('.back-to-top-futuristic');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 200) { // Threshold lebih besar
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
        });
    </script>
</body>

</html>