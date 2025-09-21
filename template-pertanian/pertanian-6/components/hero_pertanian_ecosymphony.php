<?php // File: components/hero_pertanian_ecosymphony.php 
?>
<style>
    /* Hero Pertanian EcoSymphony Styles */
    #heroPertanianEcoSymphony {
        min-height: 100vh;
        background: linear-gradient(to bottom right, rgba(245, 245, 240, 0.7), rgba(245, 245, 240, 0.9)),
            url('https://placehold.co/1920x1200/D8E0D5/556B2F?text=Pemandangan+Ladang+Harmonis&font=lora') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        text-align: center;
        /* Teks di tengah untuk hero ini */
        padding: 120px 0;
        position: relative;
        overflow: hidden;
        transition: background 0.35s ease;
    }

    body.dark-mode #heroPertanianEcoSymphony {
        background: linear-gradient(to bottom right, rgba(42, 47, 42, 0.85), rgba(42, 47, 42, 0.95)),
            url('https://placehold.co/1920x1200/2A2F2A/8FBC8F?text=Ladang+Malam+Harmonis&font=lora') no-repeat center center;
        background-size: cover;
    }

    /* Efek "Sun Ray" atau "Light Beam" dari atas (opsional) */
    #heroPertanianEcoSymphony::before {
        content: '';
        position: absolute;
        top: -50%;
        left: 50%;
        transform: translateX(-50%);
        width: 200%;
        /* Sangat lebar */
        height: 150%;
        /* Sangat tinggi */
        background: radial-gradient(ellipse at center, rgba(255, 215, 0, 0.12), transparent 70%);
        /* var(--secondary-eco-farm) dengan alpha */
        opacity: 0;
        /* Awalnya tidak terlihat */
        animation: sunRayEffect 20s infinite linear;
        z-index: 0;
        pointer-events: none;
        transition: background 0.35s ease;
    }

    body.dark-mode #heroPertanianEcoSymphony::before {
        background: radial-gradient(ellipse at center, rgba(240, 230, 140, 0.1), transparent 70%);
        /* var(--secondary-eco-farm-dark) dengan alpha */
    }

    @keyframes sunRayEffect {
        0% {
            opacity: 0;
            transform: translateX(-50%) translateY(-10%) scale(0.8);
        }

        25% {
            opacity: 0.7;
        }

        50% {
            opacity: 0.4;
            transform: translateX(-50%) translateY(0%) scale(1);
        }

        75% {
            opacity: 0.7;
        }

        100% {
            opacity: 0;
            transform: translateX(-50%) translateY(10%) scale(0.8);
        }
    }


    .hero-content-ecosymphony {
        position: relative;
        /* Di atas efek ::before */
        z-index: 1;
    }

    .hero-content-ecosymphony h1 {
        font-size: 4.2rem;
        /* Judul utama besar */
        font-weight: 700;
        /* Lora sudah cukup bold */
        line-height: 1.2;
        margin-bottom: 20px;
        color: var(--text-light-farm5);
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    body.dark-mode .hero-content-ecosymphony h1 {
        color: var(--text-dark-farm5);
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .hero-content-ecosymphony h1 .highlight-organic {
        color: var(--primary-eco-farm);
        /* Bisa ditambahkan efek underline organik dengan SVG atau pseudo-element */
        position: relative;
        display: inline-block;
    }

    .hero-content-ecosymphony h1 .highlight-organic::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: var(--secondary-eco-farm);
        border-radius: 2px;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.5s ease-out 0.5s;
        /* Muncul setelah teks */
    }

    .aos-animate .hero-content-ecosymphony h1 .highlight-organic::after {
        /* Hanya aktifkan setelah AOS */
        transform: scaleX(1);
    }

    body.dark-mode .hero-content-ecosymphony h1 .highlight-organic {
        color: var(--primary-eco-farm-dark);
    }

    body.dark-mode .hero-content-ecosymphony h1 .highlight-organic::after {
        background-color: var(--secondary-eco-farm-dark);
    }


    .hero-content-ecosymphony p.lead-ecosymphony {
        font-family: 'Nunito Sans', sans-serif;
        font-size: 1.3rem;
        font-weight: 400;
        margin-bottom: 35px;
        color: var(--muted-text-light-farm5);
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.8;
    }

    body.dark-mode .hero-content-ecosymphony p.lead-ecosymphony {
        color: var(--muted-text-dark-farm5);
    }

    .hero-content-ecosymphony .hero-cta-ecosymphony a {
        margin: 8px;
        /* Jarak antar tombol */
    }
</style>

<section id="heroPertanianEcoSymphony" class="section-ecosymphony">
    <div class="container hero-content-ecosymphony">
        <div data-aos="fade-up" data-aos-duration="1200">
            <h1>Simfoni Alam, <span class="highlight-organic">Hasil Bumi Terbaik</span></h1>
            <p class="lead-ecosymphony">
                Rasakan harmoni antara praktik pertanian berkelanjutan dan kualitas produk organik premium dari EcoSymphony Farm.
            </p>
            <div class="hero-cta-ecosymphony">
                <a href="#produkAlamiPertanian" class="btn-eco-primary btn-lg">Jelajahi Produk Kami</a>
                <a href="#tentangKamiPertanianHarmoni" class="btn-eco-secondary btn-lg">Kisah Kami</a>
            </div>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Tidak ada JS spesifik untuk hero ini selain AOS yang sudah di index.php
    // Efek sunRay dan highlight underline sudah dihandle CSS.
</script>