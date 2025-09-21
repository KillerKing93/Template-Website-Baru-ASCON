<?php // File: index.php - Template Website Pendidikan Athenaeum Digitalis (Revamped)
// Komentar PHP: Anda dapat menambahkan logika PHP di sini jika diperlukan, misalnya untuk manajemen sesi atau konfigurasi.
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athenaeum Digitalis - Perpustakaan Pengetahuan Modern (Revamped)</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Global Styles - Tema Pendidikan Athenaeum Digitalis */
        :root {
            /* Light Mode (Default) */
            --bg-primary-light: #FDF6E3;
            /* Krem pucat (warna kertas tua) */
            --text-primary-light: #4A443C;
            /* Coklat sephia tua */
            --card-bg-light: #FFFBF0;
            /* Krem lebih terang untuk kartu */
            --border-light: #E8DDCB;
            --color-primary: #7B3F00;
            /* Coklat tua (Maroon/Dark Brown) */
            --color-secondary: #C0A080;
            /* Beige/Tan (warna kulit buku) */
            --color-accent: #5F9EA0;
            /* Biru Cadet (untuk sentuhan modern) */
            --text-muted-light: #6E6055;

            /* Dark Mode Variables */
            --bg-primary-dark: #2C2A2A;
            /* Abu-abu gelap kehitaman */
            --text-primary-dark: #E0D8CC;
            /* Krem terang */
            --card-bg-dark: #3E3A3A;
            /* Abu-abu gelap untuk kartu */
            --border-dark: #504840;
            --color-primary-dark: #A0522D;
            /* Sienna (coklat kemerahan) */
            --color-secondary-dark: #D2B48C;
            /* Tan (coklat muda) */
            --color-accent-dark: #7FB3B5;
            /* Biru Cadet lebih terang */
            --text-muted-dark: #B0A8A0;
        }

        /* Menerapkan variabel berdasarkan mode tema */
        html.dark {
            --bg-primary: var(--bg-primary-dark);
            --text-primary: var(--text-primary-dark);
            --card-bg: var(--card-bg-dark);
            --border-color: var(--border-dark);
            --color-p: var(--color-primary-dark);
            --color-s: var(--color-secondary-dark);
            --color-a: var(--color-accent-dark);
            --text-muted: var(--text-muted-dark);
        }

        html:not(.dark) {
            --bg-primary: var(--bg-primary-light);
            --text-primary: var(--text-primary-light);
            --card-bg: var(--card-bg-light);
            --border-color: var(--border-light);
            --color-p: var(--color-primary);
            --color-s: var(--color-secondary);
            --color-a: var(--color-accent);
            --text-muted: var(--text-muted-light);
        }

        body {
            font-family: 'Inter', 'EB Garamond', serif;
            /* Inter sebagai fallback umum, EB Garamond untuk teks utama */
            line-height: 1.75;
            background-color: var(--bg-primary);
            color: var(--text-primary);
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 17px;
            /* Sedikit lebih besar dari default */
            overflow-x: hidden;
            /* Mencegah scroll horizontal */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Cinzel Decorative', serif;
            /* Font utama untuk heading */
            font-weight: 700;
            color: var(--text-primary);
            /* Menggunakan variabel agar konsisten dengan tema */
            transition: color 0.3s ease;
            letter-spacing: 0.5px;
        }

        .font-eb-garamond {
            font-family: 'EB Garamond', serif;
        }

        .font-cinzel {
            font-family: 'Cinzel Decorative', serif;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        /* Global Section Styling */
        .section-athenaeum {
            padding-top: 6rem;
            /* 96px */
            padding-bottom: 6rem;
            /* 96px */
            overflow: hidden;
            position: relative;
        }

        /* Global Section Title Styling */
        .section-title-athenaeum {
            text-align: center;
            margin-bottom: 4rem;
            /* 64px */
        }

        .section-title-athenaeum h2 {
            font-size: 2.5rem;
            /* Tailwind: text-4xl */
            line-height: 1.2;
            font-weight: 900;
            /* Cinzel Decorative sudah bold */
            color: var(--color-p);
            margin-bottom: 0.75rem;
            /* mb-3 */
            display: inline-block;
            position: relative;
            padding-bottom: 0.5rem;
            /* pb-2 */
        }

        .section-title-athenaeum h2::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--color-s);
            box-shadow: 0 0 8px color-mix(in srgb, var(--color-s) 40%, transparent);
            border-radius: 1px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .section-title-athenaeum .subtitle-athenaeum {
            font-family: 'EB Garamond', serif;
            font-style: italic;
            font-size: 1.25rem;
            /* text-xl */
            color: var(--text-muted);
            max-width: 46rem;
            /* max-w-2xl atau 3xl */
            margin-left: auto;
            margin-right: auto;
            margin-top: 1.25rem;
            /* mt-5 */
        }

        /* Global Button Styles */
        .btn-athenaeum {
            display: inline-block;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            border: 2px solid transparent;
            padding: 0.75rem 1.875rem;
            /* py-3 px-7 atau px-8 */
            font-size: 1rem;
            /* text-base */
            border-radius: 0.375rem;
            /* rounded-md */
            transition: all 0.3s ease-in-out;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .btn-athenaeum-primary {
            background-color: var(--color-p);
            border-color: var(--color-p);
            color: var(--bg-primary);
            /* Teks kontras dengan background tombol */
            box-shadow: 0 3px 8px color-mix(in srgb, var(--color-p) 25%, transparent);
        }

        html.dark .btn-athenaeum-primary {
            color: var(--text-primary-dark);
            /* Pastikan kontras di dark mode */
        }

        html:not(.dark) .btn-athenaeum-primary {
            color: white;
        }


        .btn-athenaeum-primary:hover {
            background-color: color-mix(in srgb, var(--color-p) 85%, black);
            border-color: color-mix(in srgb, var(--color-p) 85%, black);
            transform: translateY(-2px);
            box-shadow: 0 5px 12px color-mix(in srgb, var(--color-p) 35%, transparent);
        }

        .btn-athenaeum-secondary {
            background-color: transparent;
            border-color: var(--color-s);
            color: var(--color-s);
        }

        .btn-athenaeum-secondary:hover {
            background-color: var(--color-s);
            color: var(--bg-primary);
            /* Teks kontras dengan background tombol */
            box-shadow: 0 3px 8px color-mix(in srgb, var(--color-s) 25%, transparent);
            transform: translateY(-2px);
        }

        html.dark .btn-athenaeum-secondary:hover {
            color: var(--text-primary-dark);
        }

        /* Preloader */
        #preloader-athenaeum {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--bg-primary);
            z-index: 99999;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.7s ease-out 0.5s;
            /* Penundaan sebelum fade out */
        }

        #preloader-athenaeum.loaded {
            opacity: 0;
            pointer-events: none;
            /* Agar tidak menghalangi interaksi setelah hilang */
        }

        .loader-athenaeum {
            font-size: 3.5rem;
            /* Ukuran ikon loader */
            color: var(--color-p);
            animation: spinBook 2s infinite linear;
        }

        @keyframes spinBook {
            0% {
                transform: rotate(0deg) scale(1);
            }

            50% {
                transform: rotate(180deg) scale(1.1);
            }

            100% {
                transform: rotate(360deg) scale(1);
            }
        }

        /* Back to Top Button */
        .back-to-top-athenaeum {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 1.5rem;
            /* 24px */
            bottom: 1.5rem;
            /* 24px */
            z-index: 999;
            background: var(--color-p);
            width: 42px;
            height: 42px;
            border-radius: 0.375rem;
            /* rounded-md */
            transition: all 0.3s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top-athenaeum i {
            font-size: 1.125rem;
            /* text-lg */
            color: #fff;
            /* Pastikan ikon selalu putih atau kontras */
        }

        html:not(.dark) .back-to-top-athenaeum i {
            color: white;
        }

        html.dark .back-to-top-athenaeum i {
            color: var(--text-primary-dark);
        }


        .back-to-top-athenaeum:hover {
            background: color-mix(in srgb, var(--color-p) 80%, black);
            transform: scale(1.08) translateY(-2px);
        }

        .back-to-top-athenaeum.active {
            visibility: visible;
            opacity: 1;
        }

        /* Theme Toggle Button */
        .theme-toggle-button-athenaeum {
            position: fixed;
            bottom: 1.5rem;
            /* 24px */
            left: 1.5rem;
            /* 24px */
            z-index: 1000;
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            width: 42px;
            height: 42px;
            border-radius: 0.375rem;
            /* rounded-md */
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .theme-toggle-button-athenaeum:hover {
            background-color: color-mix(in srgb, var(--card-bg) 90%, var(--text-primary) 10%);
            transform: scale(1.08) translateY(-2px);
            border-color: var(--color-s);
        }

        .theme-toggle-button-athenaeum i {
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .theme-toggle-button-athenaeum .icon-sun-athenaeum {
            display: none;
        }

        /* Sun icon hidden by default */
        html.dark .theme-toggle-button-athenaeum .icon-moon-athenaeum {
            display: none;
        }

        /* Moon icon hidden in dark mode */
        html.dark .theme-toggle-button-athenaeum .icon-sun-athenaeum {
            display: block;
        }

        /* Sun icon shown in dark mode */

        /* Styling untuk scrollbar (opsional, bisa disesuaikan) */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-primary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--color-s);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--color-p);
        }
    </style>

    <script>
        // Konfigurasi Tailwind CSS (jika diperlukan kustomisasi lebih lanjut)
        tailwind.config = {
            darkMode: 'class', // Menggunakan class 'dark' pada HTML tag
            theme: {
                extend: {
                    colors: {
                        // Menambahkan variabel CSS ke config Tailwind agar bisa digunakan sebagai class
                        'athenaeum-bg-primary-light': 'var(--bg-primary-light)',
                        'athenaeum-text-primary-light': 'var(--text-primary-light)',
                        'athenaeum-card-bg-light': 'var(--card-bg-light)',
                        'athenaeum-border-light': 'var(--border-light)',
                        'athenaeum-p-light': 'var(--color-primary)',
                        'athenaeum-s-light': 'var(--color-secondary)',
                        'athenaeum-a-light': 'var(--color-accent)',
                        'athenaeum-muted-light': 'var(--text-muted-light)',

                        'athenaeum-bg-primary-dark': 'var(--bg-primary-dark)',
                        'athenaeum-text-primary-dark': 'var(--text-primary-dark)',
                        'athenaeum-card-bg-dark': 'var(--card-bg-dark)',
                        'athenaeum-border-dark': 'var(--border-dark)',
                        'athenaeum-p-dark': 'var(--color-primary-dark)',
                        'athenaeum-s-dark': 'var(--color-secondary-dark)',
                        'athenaeum-a-dark': 'var(--color-accent-dark)',
                        'athenaeum-muted-dark': 'var(--text-muted-dark)',
                    },
                    fontFamily: {
                        'cinzel': ['Cinzel Decorative', 'serif'],
                        'eb-garamond': ['EB Garamond', 'serif'],
                        'inter': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="<?php echo isset($_COOKIE['theme_athenaeum_v2']) && $_COOKIE['theme_athenaeum_v2'] === 'dark' ? 'dark' : ''; ?>">

    <div id="preloader-athenaeum">
        <div class="loader-athenaeum"><i class="fas fa-book-open-reader"></i></div>
    </div>

    <?php
    // Komentar PHP: Menyertakan komponen header
    // Pastikan path ke komponen sudah benar, contoh: 'components/header.php'
    include 'components/header_pendidikan_athenaeum_v2.php';

    // Komentar PHP: Menyertakan komponen-komponen lainnya
    include 'components/hero_pendidikan_athenaeum_scroll_v2.php';
    include 'components/tentang_kami_pendidikan_manuskrip_v2.php';
    include 'components/koleksi_digital_pendidikan_sorot_v2.php';
    include 'components/riset_unggulan_athenaeum_v2.php';
    include 'components/ruang_studi_virtual_pendidikan_v2.php';
    include 'components/acara_literasi_pendidikan_v2.php';
    include 'components/kontak_pendidikan_athenaeum_osm_v2.php';

    // Komentar PHP: Menyertakan komponen footer
    include 'components/footer_pendidikan_klasik_v3.php';
    ?>

    <a href="#" class="back-to-top-athenaeum d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

    <button class="theme-toggle-button-athenaeum" id="themeTogglerAthenaeum" title="Alihkan Tema">
        <i class="fas fa-moon icon-moon-athenaeum"></i>
        <i class="fas fa-sun icon-sun-athenaeum"></i>
    </button>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Komentar JavaScript: Script Global
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi AOS (Animate on Scroll)
            AOS.init({
                duration: 900, // Durasi animasi
                once: true, // Animasi hanya sekali
                offset: 80, // Offset dari viewport
                easing: 'ease-in-out-quad', // Jenis easing
            });

            // Logika Preloader
            const preloader = document.getElementById('preloader-athenaeum');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => { // Memberi sedikit jeda agar transisi lebih halus
                        preloader.classList.add('loaded');
                    }, 500); // 0.5 detik
                    setTimeout(() => {
                        preloader.style.display = 'none';
                    }, 1200); // 0.5s (transisi opacity) + 0.7s (delay)
                });
            }

            // Logika Tombol Kembali ke Atas
            const backToTopButton = document.querySelector('.back-to-top-athenaeum');
            if (backToTopButton) {
                const toggleBackToTop = () => {
                    if (window.scrollY > 200) { // Muncul setelah scroll 200px
                        backToTopButton.classList.add('active');
                    } else {
                        backToTopButton.classList.remove('active');
                    }
                }
                window.addEventListener('load', toggleBackToTop); // Cek saat load
                document.addEventListener('scroll', toggleBackToTop); // Cek saat scroll
                backToTopButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth' // Efek scroll halus
                    });
                });
            }

            // Logika Pengalih Tema (Dark/Light Mode)
            const themeToggler = document.getElementById('themeTogglerAthenaeum');
            const htmlElement = document.documentElement; // Menggunakan documentElement (<html>)

            function applyTheme(theme) {
                if (theme === 'dark') {
                    htmlElement.classList.add('dark');
                } else {
                    htmlElement.classList.remove('dark');
                }
                // Menyimpan preferensi tema di localStorage dan cookie
                localStorage.setItem('theme_athenaeum_v2', theme);
                document.cookie = `theme_athenaeum_v2=${theme};path=/;max-age=${60*60*24*365}`; // Cookie berlaku 1 tahun

                // Memicu event kustom yang bisa didengarkan oleh komponen lain (misalnya peta)
                document.dispatchEvent(new CustomEvent('themeChanged', {
                    detail: {
                        theme: theme
                    }
                }));
            }

            // Cek tema tersimpan atau preferensi sistem
            let savedTheme = localStorage.getItem('theme_athenaeum_v2') ||
                (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

            // Jika ada cookie, utamakan cookie
            const cookieTheme = document.cookie.split('; ').find(row => row.startsWith('theme_athenaeum_v2='))?.split('=')[1];
            if (cookieTheme) {
                savedTheme = cookieTheme;
            }

            applyTheme(savedTheme); // Terapkan tema saat halaman dimuat

            if (themeToggler) {
                themeToggler.addEventListener('click', function() {
                    const newTheme = htmlElement.classList.contains('dark') ? 'light' : 'dark';
                    applyTheme(newTheme);
                });
            }
        });
    </script>
</body>

</html>