<?php // File: index.php - Template Website Pendidikan 4 (InnovateU) 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InnovateU - Ekosistem Pembelajaran Dinamis</title>

    <?php /* Komentar PHP: Bootstrap CSS */ ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php /* Komentar PHP: Font Awesome */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php /* Komentar PHP: Google Fonts - Orbitron (Futuristik, techy) & Montserrat (Clean, modern body) */ ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <?php /* Komentar PHP: Leaflet CSS (Untuk OpenStreetMap) */ ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <?php /* Komentar PHP: GLightbox CSS (Untuk Galeri/Lightbox) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <?php /* Komentar PHP: Swiper CSS (Untuk Carousel/Slider) */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php /* Komentar PHP: AOS - Animate On Scroll Library */ ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pendidikan InnovateU */
        :root {
            /* Light Mode (Default) */
            --bg-light-edu4: #F4F7FC;
            /* Biru/abu-abu sangat terang */
            --text-light-edu4: #213547;
            /* Biru tua */
            --card-bg-light-edu4: #FFFFFF;
            --border-light-edu4: #D8E2EF;
            --primary-innovate: #00A9E0;
            /* Biru Cyan Terang */
            --secondary-innovate: #FF6F61;
            /* Koral Terang */
            --accent-innovate: #7F00FF;
            /* Ungu Elektrik */
            --muted-text-light-edu4: #5A6F82;

            /* Dark Mode Variables */
            --bg-dark-edu4: #0A192F;
            /* Biru navy sangat gelap */
            --text-dark-edu4: #E6F1FF;
            /* Putih kebiruan terang */
            --card-bg-dark-edu4: #172A46;
            /* Biru navy lebih gelap untuk kartu */
            --border-dark-edu4: #2C3E5D;
            --primary-innovate-dark: #00BFFF;
            /* DeepSkyBlue (Biru cyan lebih terang) */
            --secondary-innovate-dark: #FF8C7A;
            /* Koral lebih terang */
            --accent-innovate-dark: #A450FF;
            /* Ungu elektrik lebih terang */
            --muted-text-dark-edu4: #8892B0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.7;
            background-color: var(--bg-light-edu4);
            color: var(--text-light-edu4);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 16px;
            overflow-x: hidden;
            /* Mencegah horizontal scroll global */
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
            color: var(--text-light-edu4);
            transition: color 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .section-eduverse {
            padding: 90px 0;
            overflow: hidden;
            /* Pastikan section tidak menyebabkan overflow */
            position: relative;
        }

        .section-title-eduverse {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title-eduverse h2 {
            font-size: 2.7rem;
            font-weight: 900;
            color: var(--primary-innovate);
            margin-bottom: 15px;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
        }

        .section-title-eduverse h2 span.highlight-accent-edu2 {
            color: var(--secondary-innovate);
            position: relative;
        }

        .section-title-eduverse h2 span.highlight-accent-edu2::before,
        .section-title-eduverse h2 span.highlight-accent-edu2::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: var(--bg-light-edu4);
        }

        body.dark-mode .section-title-eduverse h2 span.highlight-accent-edu2::before,
        body.dark-mode .section-title-eduverse h2 span.highlight-accent-edu2::after {
            background: var(--bg-dark-edu4);
        }

        .section-title-eduverse h2 span.highlight-accent-edu2::before {
            left: 2px;
            text-shadow: -1px 0 var(--accent-innovate);
            animation: titleGlitch1 2.5s infinite linear alternate-reverse;
        }

        .section-title-eduverse h2 span.highlight-accent-edu2::after {
            left: -2px;
            text-shadow: 1px 0 var(--secondary-innovate);
            animation: titleGlitch2 3s infinite linear alternate-reverse;
        }

        @keyframes titleGlitch1 {
            0% {
                clip-path: inset(30% 0 60% 0);
            }

            100% {
                clip-path: inset(5% 0 80% 0);
            }
        }

        @keyframes titleGlitch2 {
            0% {
                clip-path: inset(70% 0 10% 0);
            }

            100% {
                clip-path: inset(25% 0 50% 0);
            }
        }

        .section-title-eduverse p.subtitle-eduverse {
            font-size: 1.1rem;
            color: var(--muted-text-light-edu4);
            max-width: 700px;
            margin: 20px auto 0 auto;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            transition: color 0.3s ease;
        }

        .btn-eduverse-primary {
            background: linear-gradient(135deg, var(--primary-innovate), var(--accent-innovate));
            border: none;
            color: #fff;
            padding: 12px 30px;
            font-weight: 600;
            font-family: 'Orbitron', sans-serif;
            border-radius: 5px;
            transition: all 0.35s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0, 169, 224, 0.35);
        }

        .btn-eduverse-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 7px 20px rgba(127, 0, 255, 0.4);
            background: linear-gradient(135deg, var(--accent-innovate), var(--primary-innovate));
            color: #fff;
        }

        .btn-eduverse-secondary {
            background-color: transparent;
            border: 2px solid var(--secondary-innovate);
            color: var(--secondary-innovate);
            padding: 10px 28px;
            font-weight: 600;
            font-family: 'Orbitron', sans-serif;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-eduverse-secondary:hover {
            background-color: var(--secondary-innovate);
            color: var(--bg-light-edu4);
            box-shadow: 0 4px 15px rgba(255, 111, 97, 0.35);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background-color: var(--bg-dark-edu4);
            color: var(--text-dark-edu4);
        }

        body.dark-mode h1,
        body.dark-mode h2,
        body.dark-mode h3,
        body.dark-mode h4,
        body.dark-mode h5,
        body.dark-mode h6 {
            color: var(--text-dark-edu4);
        }

        body.dark-mode .section-title-eduverse h2 {
            color: var(--primary-innovate-dark);
        }

        body.dark-mode .section-title-eduverse h2 span.highlight-accent-edu2 {
            color: var(--secondary-innovate-dark);
        }

        body.dark-mode .section-title-eduverse h2 span.highlight-accent-edu2::before {
            text-shadow: -1px 0 var(--accent-innovate-dark);
        }

        body.dark-mode .section-title-eduverse h2 span.highlight-accent-edu2::after {
            text-shadow: 1px 0 var(--secondary-innovate-dark);
        }

        body.dark-mode .section-title-eduverse p.subtitle-eduverse {
            color: var(--muted-text-dark-edu4);
        }

        body.dark-mode .btn-eduverse-primary {
            background: linear-gradient(135deg, var(--primary-innovate-dark), var(--accent-innovate-dark));
            box-shadow: 0 4px 15px rgba(0, 191, 255, 0.35);
        }

        body.dark-mode .btn-eduverse-primary:hover {
            box-shadow: 0 7px 20px rgba(164, 80, 255, 0.4);
            background: linear-gradient(135deg, var(--accent-innovate-dark), var(--primary-innovate-dark));
        }

        body.dark-mode .btn-eduverse-secondary {
            border-color: var(--secondary-innovate-dark);
            color: var(--secondary-innovate-dark);
        }

        body.dark-mode .btn-eduverse-secondary:hover {
            background-color: var(--secondary-innovate-dark);
            color: var(--bg-dark-edu4);
            box-shadow: 0 4px 15px rgba(255, 140, 122, 0.35);
        }

        /* Preloader */
        #preloader-eduverse {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-light-edu4);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.7s ease-out 0.5s;
        }

        body.dark-mode #preloader-eduverse {
            background-color: var(--bg-dark-edu4);
        }

        #preloader-eduverse.loaded {
            opacity: 0;
            pointer-events: none;
        }

        .loader-eduverse {
            font-family: 'Orbitron', monospace;
            font-size: 1.5rem;
            color: var(--primary-innovate);
            white-space: nowrap;
            overflow: hidden;
            border-right: .10em solid var(--secondary-innovate);
            animation: typingPreloader 2s steps(15, end) infinite, blinkCaretPreloader .75s step-end infinite;
        }

        body.dark-mode .loader-eduverse {
            color: var(--primary-innovate-dark);
            border-right-color: var(--secondary-innovate-dark);
        }

        @keyframes typingPreloader {
            from {
                width: 0
            }

            to {
                width: 10ch
            }
        }

        @keyframes blinkCaretPreloader {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: var(--secondary-innovate);
            }
        }

        body.dark-mode @keyframes blinkCaretPreloader {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: var(--secondary-innovate-dark);
            }
        }


        /* Back to top button */
        .back-to-top-eduverse {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 25px;
            bottom: 25px;
            z-index: 999;
            background: var(--primary-innovate);
            width: 44px;
            height: 44px;
            border-radius: 6px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 10px rgba(0, 169, 224, 0.3);
        }

        .back-to-top-eduverse i {
            font-size: 20px;
            color: #fff;
        }

        .back-to-top-eduverse:hover {
            background: #008BBF;
            transform: scale(1.05);
        }

        .back-to-top-eduverse.active {
            visibility: visible;
            opacity: 1;
        }

        body.dark-mode .back-to-top-eduverse {
            background: var(--primary-innovate-dark);
            box-shadow: 0 0 10px rgba(0, 191, 255, 0.3);
        }

        body.dark-mode .back-to-top-eduverse:hover {
            background: #00A0D0;
        }

        /* Tombol Theme Toggle */
        .theme-toggle-button-eduverse {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background-color: var(--card-bg-light-edu4);
            border: 1px solid var(--border-light-edu4);
            color: var(--text-light-edu4);
            width: 44px;
            height: 44px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .theme-toggle-button-eduverse:hover {
            background-color: #d1e0eb;
            transform: rotate(180deg);
        }

        .theme-toggle-button-eduverse i {
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .theme-toggle-button-eduverse .icon-sun-eduverse {
            display: none;
        }

        body.dark-mode .theme-toggle-button-eduverse {
            background-color: var(--card-bg-dark-edu4);
            border-color: var(--border-dark-edu4);
            color: var(--text-dark-edu4);
        }

        body.dark-mode .theme-toggle-button-eduverse:hover {
            background-color: #2C3E5D;
        }

        body.dark-mode .theme-toggle-button-eduverse .icon-moon-eduverse {
            display: none;
        }

        body.dark-mode .theme-toggle-button-eduverse .icon-sun-eduverse {
            display: block;
        }
    </style>
</head>

<body class="<?php echo isset($_COOKIE['theme_innovateu_edu']) && $_COOKIE['theme_innovateu_edu'] === 'dark' ? 'dark-mode' : ''; ?>">

    <div id="preloader-eduverse">
        <div class="loader-eduverse" data-text="LOADING..."></div>
    </div>

    <?php
    /* Komentar PHP: Menyertakan komponen header untuk website InnovateU */
    include 'components/header_pendidikan_innovateu.php';
    ?>

    <?php include 'components/hero_pendidikan_innovateu_dynamic.php'; ?>
    <?php include 'components/tentang_kami_pendidikan_futuristik.php'; ?>
    <?php include 'components/kurikulum_adaptif_pendidikan.php'; ?>
    <?php include 'components/pusat_riset_kolaborasi_pendidikan.php'; ?>
    <?php include 'components/event_workshop_virtual_pendidikan.php'; ?>
    <?php include 'components/jaringan_alumni_global_pendidikan.php'; ?>
    <?php include 'components/kontak_pendidikan_tech_osm.php'; ?>
    <?php include 'components/footer_pendidikan_innovateu_links.php'; ?>

    <a href="#" class="back-to-top-eduverse"><i class="fas fa-rocket"></i></a> <?php /* Ikon roket */ ?>

    <button class="theme-toggle-button-eduverse" id="themeTogglerInnovateU" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-innovateu"></i>
        <i class="fas fa-sun icon-sun-innovateu"></i>
    </button>

    <?php /* Komentar PHP: Bootstrap Bundle JS */ ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <?php /* Komentar PHP: Leaflet JS (Untuk OpenStreetMap) */ ?>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <?php /* Komentar PHP: GLightbox JS (Untuk Galeri/Lightbox) */ ?>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

    <?php /* Komentar PHP: Swiper JS (Untuk Carousel/Slider) */ ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?php /* Komentar PHP: AOS JS */ ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <?php /* Komentar PHP: Particles.js (Pastikan dimuat SEBELUM skrip komponen yang menggunakannya) */ ?>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <?php /* Komentar PHP: Anime.js (jika digunakan untuk animasi kustom) */ ?>
    <?php /* <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js"></script> */ ?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Komentar JavaScript: Inisialisasi AOS
            AOS.init({
                duration: 900,
                once: true,
                offset: 60,
                easing: 'ease-out-cubic',
            });

            // Komentar JavaScript: Logika Preloader yang lebih baik
            const preloader = document.getElementById('preloader-eduverse');
            if (preloader) {
                const loaderTextElement = preloader.querySelector('.loader-eduverse');
                const preloaderTexts = ["INITIATING_SYSTEMS...", "BOOTING_OS_EDUVERSE...", "LOADING_AI_MODULES...", "CONNECTING_NETWORK...", "SYSTEM_READY."];
                let textIndex = 0;

                function runPreloaderAnimation() {
                    if (textIndex < preloaderTexts.length) {
                        if (loaderTextElement) {
                            loaderTextElement.setAttribute('data-text', preloaderTexts[textIndex]);
                            // Komentar JavaScript: Reset animasi ketik dengan menghapus dan menambahkan kembali kelas atau mengubah konten
                            loaderTextElement.style.animation = 'none'; // Hentikan animasi lama
                            loaderTextElement.offsetHeight; /* Trigger reflow */
                            loaderTextElement.style.width = '0'; // Reset lebar untuk animasi ketik
                            loaderTextElement.textContent = preloaderTexts[textIndex]; // Set teks untuk fallback
                            // Komentar JavaScript: Atur lebar berdasarkan teks baru untuk animasi ketik CSS
                            loaderTextElement.style.width = preloaderTexts[textIndex].length + 'ch';
                            loaderTextElement.style.animation = `typingPreloader 2s steps(${preloaderTexts[textIndex].length}, end) 1, blinkCaretPreloader .75s step-end infinite`; // Mulai animasi baru
                        }
                        textIndex++;
                        setTimeout(runPreloaderAnimation, 2100); // Durasi typing + sedikit jeda
                    } else {
                        if (preloader) preloader.classList.add('loaded');
                    }
                }

                if (loaderTextElement) {
                    runPreloaderAnimation();
                } else if (preloader) {
                    window.addEventListener('load', () => { // Fallback jika elemen teks tidak ada
                        setTimeout(() => {
                            preloader.classList.add('loaded');
                        }, 600);
                    });
                }
            }


            // Komentar JavaScript: Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-eduverse');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 220) {
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
            const themeToggler = document.getElementById('themeTogglerInnovateU');
            const bodyElement = document.body;
            const moonIcon = themeToggler.querySelector('.icon-moon-innovateu');
            const sunIcon = themeToggler.querySelector('.icon-sun-innovateu');

            function applyThemeInnovateU(theme) {
                if (theme === 'dark') {
                    bodyElement.classList.add('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'none';
                    if (sunIcon) sunIcon.style.display = 'block';
                } else {
                    bodyElement.classList.remove('dark-mode');
                    if (moonIcon) moonIcon.style.display = 'block';
                    if (sunIcon) sunIcon.style.display = 'none';
                }
                document.dispatchEvent(new CustomEvent('themeChangedInnovateU', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            let savedThemeInnovateU = localStorage.getItem('theme_innovateu_edu');
            if (!savedThemeInnovateU) {
                if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    savedThemeInnovateU = 'dark';
                } else {
                    savedThemeInnovateU = 'light';
                }
            }
            applyThemeInnovateU(savedThemeInnovateU);

            if (themeToggler) {
                themeToggler.addEventListener('click', function() {
                    const newTheme = bodyElement.classList.contains('dark-mode') ? 'light' : 'dark';
                    applyThemeInnovateU(newTheme);
                    localStorage.setItem('theme_innovateu_edu', newTheme);
                });
            }
        });
    </script>
</body>

</html>