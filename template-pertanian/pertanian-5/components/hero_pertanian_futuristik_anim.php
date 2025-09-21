<?php // File: components/hero_pertanian_futuristik_anim.php 
?>
<style>
    /* Hero Pertanian Futuristik Anim Styles */
    #heroPertanianFuturistikAnim {
        min-height: 100vh;
        background: linear-gradient(160deg, var(--bg-dark-farm5) 0%, #0A0F1A 100%);
        /* Gradien gelap futuristik */
        color: var(--text-dark-farm5);
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 120px 0;
    }

    /* Komentar CSS: Tidak ada penyesuaian dark mode spesifik jika hero sudah dominan gelap */

    /* Efek latar belakang "circuit board" atau "data stream" dengan SVG atau canvas */
    .hero-bg-futuristic-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        opacity: 0.07;
        /* Sangat transparan */
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%2300CBA9'%3E%3Cpath opacity='.5' d='M20 20h60v60H20z'/%3E%3Cpath d='M0 0h20v20H0zM20 0h20v20H20zM40 0h20v20H40zM60 0h20v20H60zM80 0h20v20H80zM0 20h20v20H0zM80 20h20v20H80zM0 40h20v20H0zM80 40h20v20H80zM0 60h20v20H0zM80 60h20v20H80zM0 80h20v20H0zM20 80h20v20H20zM40 80h20v20H40zM60 80h20v20H60zM80 80h20v20H80z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        /* Ganti dengan warna var(--primary-futura-farm-dark) */
        animation: bgPatternScroll 30s linear infinite;
    }

    body.dark-mode .hero-bg-futuristic-pattern {
        /* Komentar CSS: SVG fill sudah diatur, bisa juga diubah di sini jika perlu */
    }

    @keyframes bgPatternScroll {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 200px 200px;
        }

        /* Sesuaikan untuk kecepatan scroll pattern */
    }

    .hero-content-futuristic {
        position: relative;
        /* Di atas pattern */
        z-index: 1;
        text-align: center;
        /* Teks di tengah */
    }

    .hero-content-futuristic .super-title {
        /* Teks kecil di atas judul utama */
        font-family: 'Exo 2', sans-serif;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--accent-futura-farm-dark);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 10px;
        display: block;
        opacity: 0.8;
    }

    body:not(.dark-mode) .hero-content-futuristic .super-title {
        color: var(--accent-futura-farm);
    }

    .hero-content-futuristic h1 {
        font-size: 4.5rem;
        /* Judul utama sangat besar */
        font-weight: 800;
        line-height: 1.15;
        margin-bottom: 20px;
        color: #fff;
        /* Teks putih untuk kontras maksimal */
        text-shadow: 0 0 15px rgba(var(--primary-futura-farm-dark-rgb, 0, 203, 169), 0.4), 0 0 25px rgba(var(--secondary-futura-farm-dark-rgb, 243, 211, 74), 0.3);
        /* Glow effect */
    }

    /* Komentar CSS: Variabel RGB untuk warna glow */
    body.dark-mode {
        --primary-futura-farm-dark-rgb: 0, 203, 169;
        --secondary-futura-farm-dark-rgb: 243, 211, 74;
    }

    body:not(.dark-mode) {
        --primary-futura-farm-rgb: 0, 168, 150;
        --secondary-futura-farm-rgb: 240, 200, 8;
    }

    body:not(.dark-mode) .hero-content-futuristic h1 {
        text-shadow: 0 0 15px rgba(var(--primary-futura-farm-rgb, 0, 168, 150), 0.4), 0 0 25px rgba(var(--secondary-futura-farm-rgb, 240, 200, 8), 0.3);
    }

    .hero-content-futuristic h1 .typed-text-container {
        /* Untuk efek ketik */
        display: inline-block;
        /* Agar kursor typed.js pas */
        /* color: var(--secondary-futura-farm-dark); */
        /* Warna teks yang diketik */
    }

    body:not(.dark-mode) .hero-content-futuristic h1 .typed-text-container {
        /* color: var(--secondary-futura-farm); */
    }


    .hero-content-futuristic p.lead-futuristic {
        font-family: 'Inter', sans-serif;
        font-size: 1.3rem;
        font-weight: 400;
        margin-bottom: 35px;
        color: var(--muted-text-dark-farm5);
        /* Default dark mode */
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.7;
        opacity: 0.9;
    }

    body:not(.dark-mode) .hero-content-futuristic p.lead-futuristic {
        color: var(--muted-text-light-farm5);
    }

    .hero-content-futuristic .hero-cta-futuristic a {
        margin: 10px;
        /* Jarak antar tombol */
    }

    /* Elemen visual "data nodes" yang bergerak */
    .data-node {
        position: absolute;
        background-color: var(--accent-futura-farm-dark);
        border-radius: 50%;
        opacity: 0;
        /* Awalnya transparan, muncul dengan JS */
        box-shadow: 0 0 10px var(--accent-futura-farm-dark), 0 0 20px var(--accent-futura-farm-dark);
        /* Akan dianimasikan dengan JS/Anime.js */
    }

    body:not(.dark-mode) .data-node {
        background-color: var(--accent-futura-farm);
        box-shadow: 0 0 10px var(--accent-futura-farm), 0 0 20px var(--accent-futura-farm);
    }
</style>

<section id="heroPertanianFuturistikAnim" class="section-futura-farm">
    <div class="hero-bg-futuristic-pattern"></div>
    <?php /* Komentar PHP: Tambahkan elemen node di sini jika dibuat dengan PHP, atau biarkan JS yang generate */ ?>

    <div class="container hero-content-futuristic">
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <span class="super-title">Selamat Datang di AgriFutura</span>
            <h1>
                Transformasi <span class="typed-text-container" id="typed-hero-keywords"></span><br>
                Untuk Pertanian Presisi
            </h1>
            <p class="lead-futuristic">
                Kami memadukan inovasi teknologi terkini dengan praktik pertanian berkelanjutan untuk hasil panen optimal dan masa depan agrikultur yang lebih cerah.
            </p>
            <div class="hero-cta-futuristic">
                <a href="#solusiAgritechPertanian" class="btn-futura-primary btn-lg">Jelajahi Solusi Kami</a>
                <a href="#tentangKamiPertanianTeknologi" class="btn-futura-secondary btn-lg">Pelajari Visi Kami</a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Efek ketik untuk kata kunci di judul hero
        if (typeof Typed !== 'undefined' && document.getElementById('typed-hero-keywords')) {
            var typedHero = new Typed('#typed-hero-keywords', {
                strings: ['Data', 'AI', 'IoT', 'Robotika'],
                typeSpeed: 80,
                backSpeed: 50,
                backDelay: 2000,
                startDelay: 700, // Setelah AOS judul utama
                loop: true,
                cursorChar: '_',
                smartBackspace: true,
                onStringTyped: function(arrayPos, self) {
                    // Komentar JavaScript: Ganti warna teks yang diketik agar sesuai dengan highlight
                    self.el.style.color = document.body.classList.contains('dark-mode') ?
                        'var(--secondary-futura-farm-dark)' :
                        'var(--secondary-futura-farm)';
                }
            });
        }

        // Komentar JavaScript: Animasi "Data Nodes" (contoh sederhana)
        const heroSection = document.getElementById('heroPertanianFuturistikAnim');
        const numNodes = 15; // Jumlah node
        if (heroSection && typeof anime !== 'undefined') {
            for (let i = 0; i < numNodes; i++) {
                const node = document.createElement('div');
                node.classList.add('data-node');

                const size = Math.random() * 10 + 5; // Ukuran node 5-15px
                node.style.width = `${size}px`;
                node.style.height = `${size}px`;
                node.style.left = `${Math.random() * 100}%`;
                node.style.top = `${Math.random() * 100}%`;

                heroSection.appendChild(node);

                anime({
                    targets: node,
                    translateX: [0, () => anime.random(-50, 50) + 'px'],
                    translateY: [0, () => anime.random(-50, 50) + 'px'],
                    scale: [0, 1, 0], // Muncul lalu hilang
                    opacity: [0, 0.6, 0],
                    duration: () => anime.random(3000, 6000),
                    loop: true,
                    direction: 'alternate',
                    easing: 'easeInOutSine',
                    delay: () => anime.random(0, 2000)
                });
            }
        }
    });
</script>