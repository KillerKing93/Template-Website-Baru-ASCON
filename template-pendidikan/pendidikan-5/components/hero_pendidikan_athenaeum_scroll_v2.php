<?php // File: components/hero_pendidikan_athenaeum_scroll_v2.php 
?>
<style>
    /* Styles untuk Hero Section Athenaeum */
    #hero-athenaeum-component {
        /* Menggunakan variabel global dari index.php */
        background-image: linear-gradient(to bottom, rgba(var(--bg-primary-light-rgb, 253, 246, 227), 0.7), rgba(var(--bg-primary-light-rgb, 253, 246, 227), 0.95)), url('https://placehold.co/1920x1200/FDF6E3/4A3B32?text=Perpustakaan+Klasik&font=cinzeldecorative&font-size=70');
        background-attachment: fixed;
        /* Efek parallax */
        transition: background-image 0.5s ease-in-out;
        /* Transisi untuk dark mode */
    }

    html.dark #hero-athenaeum-component {
        background-image: linear-gradient(to bottom, rgba(var(--bg-primary-dark-rgb, 44, 42, 42), 0.8), rgba(var(--bg-primary-dark-rgb, 44, 42, 42), 0.98)), url('https://placehold.co/1920x1200/2C2A2A/E0D8CC?text=Perpustakaan+Malam&font=cinzeldecorative&font-size=70');
    }

    /* Untuk variabel RGB (jika belum ada di global index.php, bisa ditambahkan di sana) */
    :root {
        --bg-primary-light-rgb: 253, 246, 227;
        /* FDF6E3 */
        --bg-primary-dark-rgb: 44, 42, 42;
        /* 2C2A2A */
    }


    /* Efek "old paper texture" overlay (opsional, bisa di-uncomment jika diinginkan) */
    /*
    #hero-athenaeum-component::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('https://www.transparenttextures.com/patterns/old-paper.png');
        opacity: 0.08;
        mix-blend-mode: multiply;
        pointer-events: none;
        z-index: 0;
    }
    html.dark #hero-athenaeum-component::before {
        opacity: 0.06;
        mix-blend-mode: overlay;
    }
    */

    .hero-content-athenaeum .super-title-ath {
        color: var(--color-a);
        /* Warna aksen untuk super title */
        letter-spacing: 2px;
        /* Sedikit lebih renggang */
    }

    .hero-content-athenaeum h1 {
        color: var(--color-p);
        /* Warna primer untuk judul utama */
        text-shadow: 1px 1px 3px color-mix(in srgb, var(--bg-primary) 30%, transparent);
    }

    html.dark .hero-content-athenaeum h1 {
        text-shadow: 1px 1px 4px color-mix(in srgb, var(--text-primary-dark) 10%, black);
    }


    .hero-content-athenaeum h1 .highlight-gold {
        color: var(--color-s);
        /* Warna sekunder untuk highlight */
        /* Bisa ditambahkan efek text-shadow khusus jika perlu */
    }

    .hero-content-athenaeum .lead-athenaeum {
        color: var(--text-muted);
        font-family: 'EB Garamond', serif;
        font-style: italic;
    }

    /* Tombol Scroll Down Animasi */
    .scroll-down-indicator-athenaeum {
        color: var(--color-p);
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .scroll-down-indicator-athenaeum:hover {
        color: var(--color-s);
        transform: translateY(5px) translateX(-50%);
        /* Sedikit turun saat hover */
    }

    @keyframes bounceScrollAthenaeum {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateX(-50%) translateY(0);
        }

        40% {
            transform: translateX(-50%) translateY(-12px);
            /* Bounce lebih rendah */
        }

        60% {
            transform: translateX(-50%) translateY(-6px);
        }
    }

    .animate-bounce-scroll-athenaeum {
        animation: bounceScrollAthenaeum 2.5s infinite;
        /* Durasi sedikit lebih lama */
    }
</style>

<section id="hero" class="hero-athenaeum-component section-athenaeum min-h-screen bg-cover bg-center flex flex-col items-center justify-center text-center relative pt-24 pb-12 lg:pt-32 lg:pb-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 hero-content-athenaeum relative z-10">
        <div data-aos="zoom-in-up" data-aos-duration="1000">
            <span class="super-title-ath block font-eb-garamond text-sm sm:text-base font-semibold uppercase tracking-wider mb-2 sm:mb-3">
                Selamat Datang di Athenaeum Digitalis
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-4 sm:mb-6">
                Pusat <span class="highlight-gold">Pengetahuan</span> & <span class="highlight-gold">Inspirasi</span><br class="hidden sm:block"> Lintas Generasi
            </h1>
            <p class="lead-athenaeum text-lg sm:text-xl lg:text-2xl max-w-xl lg:max-w-3xl mx-auto mb-6 sm:mb-8">
                Menjelajahi khazanah ilmu melalui koleksi digital dan fisik kami yang kaya, dalam lingkungan studi yang mendukung penemuan dan pencerahan.
            </p>
            <div class="hero-cta-athenaeum space-y-3 sm:space-y-0 sm:space-x-4">
                <a href="#koleksi-digital" class="btn-athenaeum btn-athenaeum-primary text-sm sm:text-base px-6 py-2.5 sm:px-8 sm:py-3 rounded-lg">
                    Eksplorasi Koleksi <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="#tentang-kami" class="btn-athenaeum btn-athenaeum-secondary text-sm sm:text-base px-6 py-2.5 sm:px-8 sm:py-3 rounded-lg">
                    Tentang Athenaeum
                </a>
            </div>
        </div>
    </div>
    <a href="#tentang-kami" class="scroll-down-indicator-athenaeum absolute bottom-8 sm:bottom-10 left-1/2 transform -translate-x-1/2 text-3xl sm:text-4xl z-10 animate-bounce-scroll-athenaeum" aria-label="Scroll ke bawah">
        <i class="fas fa-chevron-down"></i>
    </a>
</section>

<script>
    // Komentar JavaScript: Script khusus untuk Hero Section (jika ada interaktivitas tambahan)
    document.addEventListener('DOMContentLoaded', function() {
        const scrollDownBtnHero = document.querySelector('.scroll-down-indicator-athenaeum');
        if (scrollDownBtnHero) {
            scrollDownBtnHero.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    const header = document.getElementById('header-athenaeum-component'); // ID dari header
                    const headerOffset = header ? header.offsetHeight : 70; // Default offset jika header tidak ada
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        }
    });
</script>