<?php // File: index.php - Template Bisnis Kompleks 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan Dinamis - Solusi Inovatif</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        /* Global Styles Template 2 */
        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.8;
            color: #4A4A4A;
            /* Warna teks utama yang lebih lembut */
            background-color: #FDFDFD;
            /* Latar belakang sangat terang, hampir putih */
            overflow-x: hidden;
            /* Mencegah scroll horizontal */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: #2C3E50;
            /* Warna heading yang kuat dan modern */
        }

        .section {
            padding: 80px 0;
            overflow: hidden;
            /* Untuk memastikan animasi tidak menyebabkan overflow */
        }

        .section-light {
            background-color: #FFFFFF;
        }

        .section-dark {
            background-color: #2C3E50;
            /* Warna gelap untuk kontras */
            color: #FDFDFD;
        }

        .section-dark h1,
        .section-dark h2,
        .section-dark h3,
        .section-dark h4,
        .section-dark h5,
        .section-dark h6 {
            color: #FFFFFF;
        }

        .section-dark p {
            color: #E0E0E0;
        }


        .section-title {
            text-align: center;
            margin-bottom: 60px;
            font-size: 2.8rem;
            /* Sedikit lebih besar */
            font-weight: 800;
            /* Lebih tebal */
            position: relative;
            padding-bottom: 20px;
        }

        .section-title::before {
            /* Garis atas pendek */
            content: '';
            position: absolute;
            display: block;
            width: 80px;
            height: 4px;
            background: #007BFF;
            /* Warna aksen utama Bootstrap */
            left: 50%;
            transform: translateX(-50%);
            top: -10px;
            /* Di atas judul */
            border-radius: 2px;
        }

        .section-title::after {
            /* Garis bawah panjang */
            content: '';
            position: absolute;
            display: block;
            width: 150px;
            /* Lebih panjang */
            height: 2px;
            background: #CED4DA;
            /* Warna abu-abu muda */
            left: 50%;
            transform: translateX(-50%);
            bottom: 0;
        }

        .section-subtitle {
            text-align: center;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            margin-top: -40px;
            /* Lebih dekat ke judul */
            margin-bottom: 50px;
            color: #6c757d;
            font-size: 1.1rem;
        }

        .btn-custom-primary {
            background-color: #007BFF;
            border-color: #007BFF;
            color: white;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            /* Sangat bulat */
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
        }

        .btn-custom-primary:hover,
        .btn-custom-primary:focus {
            background-color: #0056b3;
            border-color: #0056b3;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.5);
        }

        .btn-custom-secondary {
            background-color: transparent;
            border: 2px solid #007BFF;
            color: #007BFF;
            padding: 10px 28px;
            /* Sedikit lebih kecil */
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-custom-secondary:hover,
        .btn-custom-secondary:focus {
            background-color: #007BFF;
            color: white;
            transform: translateY(-3px);
        }

        /* Preloader Style (Optional, but good for complex sites) */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            /* Atau warna tema Anda */
            z-index: 9999;
            /* Pastikan di atas segalanya */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .spinner {
            /* Contoh spinner sederhana */
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            /* Light grey */
            border-top: 5px solid #007BFF;
            /* Blue */
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 15px;
            bottom: 15px;
            z-index: 996;
            background: #007bff;
            width: 40px;
            height: 40px;
            border-radius: 50px;
            transition: all 0.4s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top i {
            font-size: 24px;
            color: #fff;
        }

        .back-to-top:hover {
            background: #0056b3;
            color: #fff;
        }

        .back-to-top.active {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>

<body>

    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <?php include 'components/header_unique.php'; ?>
    <?php include 'components/hero_complex.php'; ?>
    <?php include 'components/about_detailed.php'; ?>
    <?php include 'components/services_interactive.php'; ?>
    <?php include 'components/stats_counter.php'; ?>
    <?php include 'components/portfolio_gallery.php'; ?>
    <?php include 'components/testimonials_slider.php'; ?>
    <?php include 'components/team_showcase.php'; ?>
    <?php include 'components/blog_preview.php'; ?>
    <?php include 'components/faq_accordion.php'; ?>
    <?php include 'components/contact_enhanced.php'; ?>
    <?php include 'components/footer_comprehensive.php'; ?>

    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi AOS
            AOS.init({
                duration: 1000, // Durasi animasi
                once: true, // Apakah animasi hanya terjadi sekali
                offset: 50, // Offset (dalam px) dari trigger point asli
            });

            // Preloader Logic
            const preloader = document.getElementById('preloader');
            if (preloader) {
                window.addEventListener('load', () => {
                    anime({
                        targets: preloader,
                        opacity: [1, 0],
                        duration: 800,
                        easing: 'easeInOutQuad',
                        complete: function() {
                            preloader.style.display = 'none';
                        }
                    });
                });
            }

            // Back to top button logic
            const backToTopButton = document.querySelector('.back-to-top');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 100) {
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