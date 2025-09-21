<?php // File: components/hero_serene.php 
?>
<style>
    /* Serene Hero Component Styles */
    #heroSerene {
        min-height: 85vh;
        /* Tinggi hero section */
        background: linear-gradient(to bottom, rgba(248, 249, 250, 0.8), rgba(248, 249, 250, 1)),
            url('https://placehold.co/1920x1080/A8DADC/F4A261?text=Latar+Alam+Tenang') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        text-align: center;
        padding: 100px 0;
        transition: background 0.3s ease;
    }

    body.dark-mode #heroSerene {
        background: linear-gradient(to bottom, rgba(33, 37, 41, 0.85), rgba(33, 37, 41, 1)),
            url('https://placehold.co/1920x1080/212529/F4A261?text=Latar+Malam+Tenang') no-repeat center center;
        background-size: cover;
    }

    .hero-content-serene h1 {
        font-size: 3.2rem;
        /* Ukuran judul */
        font-weight: 700;
        /* Lebih tebal untuk judul utama */
        margin-bottom: 20px;
        color: var(--text-light);
        /* Default light */
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    body.dark-mode .hero-content-serene h1 {
        color: var(--text-dark);
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }

    .hero-content-serene p.lead-serene {
        font-family: 'Noto Sans', sans-serif;
        font-size: 1.25rem;
        font-weight: 300;
        /* Teks lead lebih ringan */
        margin-bottom: 30px;
        color: #495057;
        /* Warna teks lead sedikit lebih gelap dari body */
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        transition: color 0.3s ease;
    }

    body.dark-mode .hero-content-serene p.lead-serene {
        color: #adb5bd;
        /* Warna teks lead di dark mode */
    }

    /* Animasi halus untuk tombol */
    .hero-content-serene .btn {
        animation: subtlePulse 2s infinite ease-in-out;
    }

    @keyframes subtlePulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.03);
        }

        100% {
            transform: scale(1);
        }
    }
</style>

<section id="heroSerene" class="section-calm">
    <div class="container hero-content-serene">
        <div data-aos="fade-up" data-aos-duration="1000">
            <h1>Solusi Harmonis untuk Pertumbuhan Bisnis Anda</h1>
            <p class="lead-serene">
                Kami hadir untuk memberikan ketenangan dan kejelasan dalam perjalanan digital Anda, dengan layanan yang terpercaya dan hasil yang terukur.
            </p>
            <a href="#servicesMinimalist" class="btn btn-calm-primary btn-lg">Temukan Solusi Kami</a>
        </div>
    </div>
</section>