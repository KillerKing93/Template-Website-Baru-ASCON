<?php // File: index.php - Template Bisnis Artistic Tech / Neo-Cyberpunk 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan: QuantumLeap Solutions - Era Digital Berikutnya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&family=Lexend:wght@300;400;500&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>


    <style>
        /* Global Styles Template 4: Artistic Tech / Neo-Cyberpunk */
        :root {
            --dark-bg-primary: #0D0221;
            /* Biru keunguan sangat gelap */
            --dark-bg-secondary: #0F084B;
            /* Biru tua */
            --primary-accent: #FF00E4;
            /* Pink Neon */
            --secondary-accent: #00F5D4;
            /* Cyan/Turquoise Neon */
            --text-light: #F0F0F0;
            --text-muted-cyber: #A0A0C0;
            /* Abu-abu kebiruan */
            --border-cyber: rgba(0, 245, 212, 0.3);
            /* var(--secondary-accent) dengan alpha */

            --primary-accent-rgb: 255, 0, 228;
            --secondary-accent-rgb: 0, 245, 212;
        }

        body {
            font-family: 'Lexend', sans-serif;
            line-height: 1.7;
            color: var(--text-light);
            background-color: var(--dark-bg-primary);
            overflow-x: hidden;
            font-size: 16px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Orbitron', sans-serif;
            /* Font techy untuk heading */
            font-weight: 700;
            color: #FFFFFF;
            text-transform: uppercase;
            /* Judul uppercase */
            letter-spacing: 1px;
        }

        .section-cyber {
            padding: 100px 0;
            position: relative;
            /* Untuk elemen pseudo atau partikel */
            overflow: hidden;
        }

        .section-title-cyber {
            text-align: center;
            margin-bottom: 70px;
            position: relative;
        }

        .section-title-cyber h2 {
            font-size: 2.5rem;
            /* Sedikit lebih kecil tapi bold */
            font-weight: 900;
            /* Sangat tebal */
            color: #fff;
            margin-bottom: 15px;
            display: inline-block;
            position: relative;
            padding: 0 10px;
        }

        .section-title-cyber h2::before,
        .section-title-cyber h2::after {
            /* Efek garis glitchy */
            content: attr(data-text);
            /* Teks sama dengan judul */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--dark-bg-primary);
            /* Sembunyikan teks asli */
            overflow: hidden;
        }

        .section-title-cyber h2::before {
            left: 2px;
            text-shadow: -2px 0 var(--primary-accent);
            animation: glitch-anim-1 2.5s infinite linear alternate-reverse;
        }

        .section-title-cyber h2::after {
            left: -2px;
            text-shadow: -2px 0 var(--secondary-accent), 2px 2px var(--primary-accent);
            animation: glitch-anim-2 2s infinite linear alternate-reverse;
        }

        @keyframes glitch-anim-1 {
            0% {
                clip-path: polygon(0 2%, 100% 2%, 100% 5%, 0 5%);
            }

            10% {
                clip-path: polygon(0 15%, 100% 15%, 100% 15%, 0 15%);
            }

            /* ... tambahkan lebih banyak step untuk variasi glitch ... */
            100% {
                clip-path: polygon(0 60%, 100% 60%, 100% 75%, 0 75%);
            }
        }

        @keyframes glitch-anim-2 {
            0% {
                clip-path: polygon(0 70%, 100% 70%, 100% 72%, 0 72%);
            }

            /* ... tambahkan lebih banyak step ... */
            100% {
                clip-path: polygon(0 20%, 100% 20%, 100% 35%, 0 35%);
            }
        }

        .section-title-cyber p.subtitle-cyber {
            font-size: 1.1rem;
            color: var(--text-muted-cyber);
            max-width: 750px;
            margin: 25px auto 0 auto;
            font-family: 'Lexend', sans-serif;
            text-transform: none;
            /* Subtitle tidak uppercase */
            letter-spacing: 0.5px;
        }

        .btn-cyber-primary {
            display: inline-block;
            padding: 12px 30px;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--dark-bg-primary);
            background-color: var(--secondary-accent);
            border: 2px solid var(--secondary-accent);
            border-radius: 5px;
            /* Sudut lebih tajam */
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 0 15px rgba(var(--secondary-accent-rgb), 0.5), inset 0 0 5px rgba(255, 255, 255, 0.3);
        }

        .btn-cyber-primary:hover {
            color: var(--secondary-accent);
            background-color: transparent;
            box-shadow: 0 0 25px rgba(var(--secondary-accent-rgb), 0.7);
        }

        .btn-cyber-primary::after {
            /* Efek scan line */
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(45deg,
                    transparent,
                    transparent 5px,
                    rgba(var(--primary-accent-rgb), 0.1) 5px,
                    rgba(var(--primary-accent-rgb), 0.1) 10px);
            opacity: 0;
            transition: opacity 0.4s ease;
            animation: scan 4s linear infinite;
            z-index: -1;
        }

        .btn-cyber-primary:hover::after {
            opacity: 1;
        }

        @keyframes scan {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }

            /* Sesuaikan jarak scan line */
        }


        .btn-cyber-secondary {
            display: inline-block;
            padding: 10px 28px;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--primary-accent);
            background-color: transparent;
            border: 2px solid var(--primary-accent);
            border-radius: 5px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: all 0.3s ease;
            box-shadow: 0 0 10px rgba(var(--primary-accent-rgb), 0.3);
        }

        .btn-cyber-secondary:hover {
            color: var(--dark-bg-primary);
            background-color: var(--primary-accent);
            box-shadow: 0 0 20px rgba(var(--primary-accent-rgb), 0.6);
        }

        /* Preloader Style */
        #preloader-cyber {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--dark-bg-primary);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.6s ease-out 0.5s;
            /* Delay fade out */
        }

        #preloader-cyber.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-glitch-text {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.5rem;
            color: var(--secondary-accent);
            position: relative;
        }

        .loader-glitch-text::before,
        .loader-glitch-text::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--dark-bg-primary);
            overflow: hidden;
        }

        .loader-glitch-text::before {
            left: 2px;
            text-shadow: -2px 0 var(--primary-accent);
            animation: glitch-load 1.5s infinite linear alternate-reverse;
        }

        .loader-glitch-text::after {
            left: -2px;
            text-shadow: -2px 0 var(--secondary-accent), 2px 2px var(--primary-accent);
            animation: glitch-load-2 1.2s infinite linear alternate-reverse;
        }

        @keyframes glitch-load {
            0% {
                clip-path: inset(10% 0 85% 0);
            }

            100% {
                clip-path: inset(70% 0 5% 0);
            }
        }

        @keyframes glitch-load-2 {
            0% {
                clip-path: inset(40% 0 35% 0);
            }

            100% {
                clip-path: inset(5% 0 60% 0);
            }
        }


        /* Back to top button */
        .back-to-top-cyber {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 20px;
            bottom: 20px;
            z-index: 999;
            background: var(--primary-accent);
            width: 40px;
            height: 40px;
            border-radius: 3px;
            /* Sudut tajam */
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 10px rgba(var(--primary-accent-rgb), 0.4);
        }

        .back-to-top-cyber i {
            font-size: 18px;
            color: var(--dark-bg-primary);
        }

        .back-to-top-cyber:hover {
            background: var(--secondary-accent);
            box-shadow: 0 0 15px rgba(var(--secondary-accent-rgb), 0.6);
        }

        .back-to-top-cyber.active {
            visibility: visible;
            opacity: 1;
        }

        /* Kustomisasi Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-bg-secondary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-accent);
            border-radius: 0;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-accent);
        }
    </style>
</head>

<body>

    <div id="preloader-cyber">
        <div class="loader-glitch-text" data-text="LOADING...">LOADING...</div>
    </div>

    <?php include 'components/header_glitch_nav.php'; ?>
    <?php include 'components/hero_data_visualization.php'; ?>
    <?php include 'components/about_deconstructed.php'; ?>
    <?php include 'components/services_interactive_grid.php'; ?>
    <?php include 'components/tech_stack_animated_icons.php'; ?>
    <?php include 'components/projects_case_study_cards.php'; ?>
    <?php include 'components/call_to_action_glitch_banner.php'; ?>
    <?php include 'components/contact_minimalist_form.php'; ?>
    <?php include 'components/footer_cyberpunk_links.php'; ?>

    <a href="#" class="back-to-top-cyber"><i class="fas fa-angle-double-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800, // Durasi animasi lebih cepat
                once: true,
                offset: 30, // Trigger lebih awal
                easing: 'ease-out-sine',
            });

            const preloader = document.getElementById('preloader-cyber');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 800); // Sesuaikan dengan durasi animasi preloader jika ada
                });
            }

            const backToTopButton = document.querySelector('.back-to-top-cyber');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 300) {
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