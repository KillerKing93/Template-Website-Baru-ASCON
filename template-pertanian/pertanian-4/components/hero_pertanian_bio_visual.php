<?php // File: components/hero_pertanian_bio_visual.php 
?>
<style>
    /* Hero Pertanian Bio-Visual Styles */
    #heroPertanianBioVisual {
        min-height: 100vh;
        background-color: var(--bg-light-farm4);
        /* Latar terang */
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 100px 0;
        transition: background-color 0.3s ease;
    }

    body.dark-mode #heroPertanianBioVisual {
        background-color: var(--bg-dark-farm4);
    }

    /* SVG Latar Belakang Organik */
    .hero-bg-svg-organic {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        opacity: 0.08;
        /* Sangat transparan */
        transition: opacity 0.3s ease;
    }

    body.dark-mode .hero-bg-svg-organic {
        opacity: 0.05;
    }

    .hero-bg-svg-organic svg path {
        fill: var(--primary-bio-farm);
        /* Warna path SVG */
        transition: fill 0.3s ease;
    }

    body.dark-mode .hero-bg-svg-organic svg path {
        fill: var(--primary-bio-farm-dark);
    }


    .hero-content-bio-visual {
        position: relative;
        /* Di atas SVG */
        z-index: 1;
        text-align: left;
    }

    .hero-content-bio-visual h1 {
        font-size: 3.8rem;
        /* Ukuran judul */
        font-weight: 800;
        line-height: 1.25;
        margin-bottom: 25px;
        color: var(--primary-bio-farm);
    }

    body.dark-mode .hero-content-bio-visual h1 {
        color: var(--primary-bio-farm-dark);
    }

    .hero-content-bio-visual h1 .highlight-green {
        color: #2E7D32;
        /* Hijau lebih tua untuk kontras */
        /* Bisa juga menggunakan var(--secondary-bio-farm) */
    }

    body.dark-mode .hero-content-bio-visual h1 .highlight-green {
        color: #81C784;
        /* Hijau lebih terang di dark mode */
    }


    .hero-content-bio-visual p.lead-bio-visual {
        font-family: 'Roboto Slab', serif;
        font-size: 1.25rem;
        font-weight: 400;
        margin-bottom: 35px;
        color: var(--muted-text-light-farm4);
        max-width: 600px;
        line-height: 1.8;
    }

    body.dark-mode .hero-content-bio-visual p.lead-bio-visual {
        color: var(--muted-text-dark-farm4);
    }

    .hero-content-bio-visual .hero-cta-bio a {
        margin-right: 15px;
        margin-bottom: 10px;
        /* Untuk mobile */
    }

    /* Ilustrasi/Gambar Hero */
    .hero-image-bio-visual-wrapper {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-image-bio-visual {
        max-width: 90%;
        /* Agar tidak terlalu memenuhi kolom */
        height: auto;
        border-radius: 15px;
        /* Sudut bulat */
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        /* Animasi "mengambang" halus */
        animation: floatImage 6s infinite ease-in-out;
        transition: box-shadow 0.3s ease;
    }

    body.dark-mode .hero-image-bio-visual {
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }

    @keyframes floatImage {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    /* Elemen dekoratif tambahan (misal, bentuk daun kecil) */
    .deco-leaf {
        position: absolute;
        font-size: 3rem;
        /* Ukuran daun */
        color: var(--primary-bio-farm);
        opacity: 0.2;
        z-index: 0;
        animation: spinLeaf 20s infinite linear;
    }

    .deco-leaf-1 {
        top: 15%;
        left: 5%;
        transform: rotate(20deg);
        animation-delay: -2s;
    }

    .deco-leaf-2 {
        bottom: 20%;
        right: 8%;
        transform: rotate(-30deg);
        font-size: 4rem;
        animation-delay: -5s;
    }

    body.dark-mode .deco-leaf {
        color: var(--primary-bio-farm-dark);
        opacity: 0.15;
    }

    @keyframes spinLeaf {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
</style>

<section id="heroPertanianBioVisual" class="section-bio-farm">
    <div class="hero-bg-svg-organic">
        <?php /* Komentar PHP: Contoh SVG sederhana, bisa diganti dengan yang lebih kompleks */ ?>
        <svg width="100%" height="100%" viewBox="0 0 1440 500" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
            <path d="M-200 550 Q -50 400 100 520 T 400 480 T 700 530 T 1000 460 T 1300 540 T 1600 450 L 1800 600 L -200 600 Z" />
            <path d="M-150 520 Q 0 380 150 500 T 450 460 T 750 510 T 1050 440 T 1350 520 T 1650 430 L 1800 600 L -150 600 Z" opacity="0.5" />
        </svg>
    </div>
    <span class="deco-leaf deco-leaf-1"><i class="fas fa-leaf"></i></span>
    <span class="deco-leaf deco-leaf-2"><i class="fas fa-feather-alt"></i></span>


    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 hero-content-bio-visual">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h1>Tumbuh Bersama Alam, <span class="highlight-green">Panen Masa Depan</span> yang Lestari.</h1>
                    <p class="lead-bio-visual">
                        BioFarm Lestari berkomitmen pada praktik pertanian terintegrasi yang menghargai alam, memberdayakan petani, dan menghasilkan pangan berkualitas untuk generasi mendatang.
                    </p>
                    <div class="hero-cta-bio">
                        <a href="#tentangKamiPertanianSustainable" class="btn-bio-farm-primary btn-lg">Filosofi Kami</a>
                        <a href="#produkOrganikPertanianShowcase" class="btn-bio-farm-secondary btn-lg">Lihat Produk Organik</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-image-bio-visual-wrapper" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <img src="https://placehold.co/600x500/F0F4F0/388E3C?text=Ilustrasi+Pertanian+Organik&font=nunito" alt="[Ilustrasi Pertanian Organik dan Berkelanjutan]" class="img-fluid hero-image-bio-visual">
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Animasi tambahan untuk hero bio-visual (jika diperlukan)
        // Misalnya, animasi untuk SVG background atau elemen dekoratif
        const svgPaths = document.querySelectorAll('#heroPertanianBioVisual .hero-bg-svg-organic svg path');
        if (svgPaths.length > 0 && typeof anime !== 'undefined') {
            anime({
                targets: svgPaths,
                d: [{
                        value: (el) => el.getAttribute('d')
                    }, // Path awal
                    // Komentar JavaScript: Path target animasi (bisa dibuat berbeda untuk efek morphing)
                    // Contoh: "M-200 500 Q -50 350 100 470 T 400 430 T 700 480 T 1000 410 T 1300 490 T 1600 400 L 1800 600 L -200 600 Z"
                ],
                duration: 20000, // Durasi panjang untuk animasi halus
                loop: true,
                direction: 'alternate',
                easing: 'easeInOutSine',
                delay: anime.stagger(1000)
            });
        }
    });
</script>