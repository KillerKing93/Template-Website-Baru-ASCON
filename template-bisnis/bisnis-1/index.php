<?php // File: index.php ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan Anda - Desain Modular</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

    <style>
        /* Global Styles */
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.7;
            color: #333;
            background-color: #f8f9fa; /* Warna latar belakang umum yang lembut */
        }

        .section {
            padding: 70px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-weight: 700;
            font-size: 2.8rem;
            color: #343a40;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 70px;
            height: 4px;
            background-color: #007bff; /* Warna aksen utama */
            margin: 10px auto 0;
            border-radius: 2px;
        }
        
        /* Styling untuk card agar lebih modern */
        .custom-card {
            background-color: #fff;
            border: none;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .custom-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.15);
        }

        /* Animasi untuk elemen yang muncul saat di-scroll */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <?php include 'components/navbar.php'; ?>
    <?php include 'components/hero.php'; ?>
    <?php include 'components/tentang_kami.php'; ?>
    <?php include 'components/layanan.php'; ?>
    <?php include 'components/cta.php'; ?>
    <?php include 'components/kontak.php'; ?>
    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const animatedElements = document.querySelectorAll('.animate-on-scroll');

            if ("IntersectionObserver" in window) {
                let observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            // Optional: unobserve after animation
                            // observer.unobserve(entry.target); 
                        }
                    });
                }, { threshold: 0.1 }); // Trigger when 10% of the element is visible

                animatedElements.forEach(el => {
                    observer.observe(el);
                });
            } else {
                // Fallback for browsers that don't support IntersectionObserver
                animatedElements.forEach(el => {
                    el.classList.add('is-visible');
                });
            }
        });
    </script>
</body>
</html>
