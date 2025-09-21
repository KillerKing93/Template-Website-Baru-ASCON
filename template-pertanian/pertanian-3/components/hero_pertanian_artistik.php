<?php // File: components/hero_pertanian_artistik.php 
?>
<style>
    /* Hero Pertanian Artistik Styles */
    #heroPertanianArtistik {
        min-height: 100vh;
        background-color: var(--bg-dark-farm3);
        /* Latar gelap untuk efek artistik */
        color: var(--text-dark-farm3);
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    /* Komentar CSS: Tidak perlu penyesuaian dark mode spesifik jika hero sudah dominan gelap */

    /* Lapisan-lapisan dengan blend mode */
    .hero-art-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
    }

    .hero-bg-image {
        /* Gambar utama ladang */
        background-image: url('https://placehold.co/1920x1200/1C1C1C/4CAF50?text=Pemandangan+Artistik+Ladang');
        opacity: 0.6;
        /* Sedikit transparan */
        z-index: 1;
    }

    .hero-texture-overlay {
        /* Overlay tekstur (misal, goresan kuas atau noise) */
        background-image: url('https://www.transparenttextures.com/patterns/brushed-alum.png');
        /* Ganti dengan tekstur yang sesuai */
        opacity: 0.1;
        mix-blend-mode: overlay;
        /* Atau screen, multiply, dll. */
        z-index: 2;
    }

    .hero-gradient-overlay {
        /* Overlay gradien warna artistik */
        background: linear-gradient(135deg, rgba(var(--primary-art-farm-rgb, 76, 175, 80), 0.3) 0%, rgba(var(--secondary-art-farm-rgb, 255, 152, 0), 0.2) 50%, rgba(var(--accent-art-farm-rgb, 3, 169, 244), 0.3) 100%);
        mix-blend-mode: color-dodge;
        /* Eksperimen dengan blend mode */
        opacity: 0.5;
        z-index: 3;
    }

    /* Komentar CSS: Variabel RGB untuk warna-warna di atas */
    body {
        --primary-art-farm-rgb: 76, 175, 80;
        --secondary-art-farm-rgb: 255, 152, 0;
        --accent-art-farm-rgb: 3, 169, 244;
    }


    .hero-content-artistik {
        position: relative;
        /* Di atas semua layer */
        z-index: 4;
        text-align: center;
        /* Teks di tengah */
        padding: 0 15px;
    }

    .hero-content-artistik h1 {
        font-family: 'Teko', sans-serif;
        font-size: 5rem;
        /* Judul sangat besar */
        font-weight: 700;
        line-height: 1.1;
        margin-bottom: 20px;
        color: #fff;
        /* Teks putih agar kontras */
        text-shadow: 0 0 15px rgba(0, 0, 0, 0.5), 0 0 30px rgba(var(--primary-art-farm-rgb), 0.3);
        /* Bayangan & glow */
    }

    .hero-content-artistik h1 .line-break {
        display: block;
    }

    /* Untuk memecah baris judul */
    .hero-content-artistik h1 .highlight-art {
        /* Sorotan dengan warna aksen */
        color: var(--secondary-art-farm-dark);
        /* Gunakan varian dark untuk kontras di latar gelap */
        /* Bisa ditambahkan efek animasi teks di sini */
    }

    body:not(.dark-mode) .hero-content-artistik h1 .highlight-art {
        color: var(--secondary-art-farm);
    }


    .hero-content-artistik p.lead-artistik {
        font-family: 'Poppins', sans-serif;
        font-size: 1.4rem;
        /* Lead lebih besar */
        font-weight: 400;
        margin-bottom: 35px;
        color: rgba(224, 224, 224, 0.9);
        /* var(--text-dark-farm3) dengan alpha */
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.7;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    body:not(.dark-mode) .hero-content-artistik p.lead-artistik {
        color: rgba(249, 249, 249, 0.9);
    }

    .hero-content-artistik .btn-art-farm-primary {
        padding: 15px 40px;
        /* Tombol lebih besar */
        font-size: 1.1rem;
    }

    /* Elemen dekoratif bentuk geometris/abstrak */
    .art-shape {
        position: absolute;
        background-color: var(--accent-art-farm);
        opacity: 0.15;
        z-index: 0;
        /* Di paling belakang konten tapi di atas bg image */
        transition: transform 1s ease-in-out;
    }

    .art-shape-1 {
        width: 200px;
        height: 200px;
        top: 10%;
        left: 5%;
        border-radius: 50% 0 50% 0;
        transform: rotate(-15deg);
        animation: shapeFloat1 12s infinite alternate;
    }

    .art-shape-2 {
        width: 150px;
        height: 150px;
        bottom: 15%;
        right: 10%;
        border-radius: 0 50% 0 50%;
        transform: rotate(25deg);
        animation: shapeFloat2 10s infinite alternate;
    }

    body.dark-mode .art-shape {
        background-color: var(--accent-art-farm-dark);
    }

    @keyframes shapeFloat1 {
        0% {
            transform: translateY(0px) rotate(-15deg) scale(1);
        }

        50% {
            transform: translateY(-30px) rotate(-5deg) scale(1.1);
        }

        100% {
            transform: translateY(0px) rotate(-15deg) scale(1);
        }
    }

    @keyframes shapeFloat2 {
        0% {
            transform: translateY(0px) rotate(25deg) scale(1);
        }

        50% {
            transform: translateY(20px) rotate(35deg) scale(0.9);
        }

        100% {
            transform: translateY(0px) rotate(25deg) scale(1);
        }
    }
</style>

<section id="heroPertanianArtistik" class="section-artistic-farm">
    <div class="hero-art-layer hero-bg-image"></div>
    <div class="hero-art-layer hero-texture-overlay"></div>
    <div class="hero-art-layer hero-gradient-overlay"></div>

    <div class="art-shape art-shape-1" data-aos="zoom-in-left" data-aos-duration="1500"></div>
    <div class="art-shape art-shape-2" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="200"></div>

    <div class="container hero-content-artistik">
        <div data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
            <h1>
                <span class="line-break">AGRIN<span class="highlight-art">O</span>VA:</span>
                <span class="line-break">Seni Bertani, <span class="highlight-art">Sains</span> Masa Depan</span>
            </h1>
            <p class="lead-artistik">
                Kami melukis masa depan pertanian dengan palet inovasi, teknologi, dan dedikasi terhadap alam.
            </p>
            <a href="#layananPertanianTeknologi" class="btn-art-farm-primary">Temukan Karya Kami</a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Animasi tambahan untuk hero artistik (jika diperlukan)
        // Misalnya, menggerakkan .art-shape dengan Anime.js untuk efek yang lebih terkontrol
        // atau menganimasikan teks judul per huruf.
        // AOS sudah menangani animasi fade-in dasar.

        // Contoh: animasi sederhana untuk judul jika tidak menggunakan AOS
        // if (typeof anime !== 'undefined') {
        //     const heroTitle = document.querySelector('#heroPertanianArtistik h1');
        //     if (heroTitle) {
        //         // Pecah teks menjadi span per huruf
        //         heroTitle.innerHTML = heroTitle.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        //         anime.timeline({loop: false})
        //           .add({
        //             targets: '#heroPertanianArtistik .letter',
        //             opacity: [0,1],
        //             translateY: ["1.1em", 0],
        //             translateX: ["0.55em", 0],
        //             translateZ: 0,
        //             rotateZ: [180, 0],
        //             duration: 750,
        //             easing: "easeOutExpo",
        //             delay: (el, i) => 50 * i + 500 // Delay setelah AOS
        //           });
        //     }
        // }
    });
</script>