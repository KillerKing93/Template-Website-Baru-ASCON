<?php // File: components/hero.php 
?>
<style>
    /* Hero Component Styles */
    .hero-component {
        background: linear-gradient(rgba(0, 123, 255, 0.7), rgba(0, 86, 179, 0.8)), url('https://placehold.co/1920x1080/343a40/ffffff?text=Latar+Hero+Modern') no-repeat center center;
        background-size: cover;
        color: white;
        padding: 150px 0;
        text-align: center;
        min-height: 90vh;
        /* Lebih tinggi untuk dampak visual */
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        /* Untuk animasi */
    }

    .hero-component h1 {
        font-size: 3.8rem;
        /* Lebih besar */
        font-weight: 700;
        margin-bottom: 25px;
        letter-spacing: 1px;
    }

    .hero-component p.lead {
        font-size: 1.35rem;
        margin-bottom: 35px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .hero-component .btn-hero {
        padding: 15px 35px;
        font-size: 1.15rem;
        font-weight: 600;
        border-radius: 50px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        background-color: #ffffff;
        color: #007bff;
        border: 2px solid #ffffff;
    }

    .hero-component .btn-hero:hover {
        background-color: transparent;
        color: #ffffff;
        transform: translateY(-3px);
    }
</style>

<header class="hero-component">
    <div class="container">
        <h1 class="hero-title">Solusi Digital Terdepan untuk Masa Depan Bisnis Anda</h1>
        <p class="lead hero-subtitle">Kami hadir untuk mentransformasi ide Anda menjadi kenyataan digital yang berdampak.</p>
        <a href="#layanan" class="btn btn-hero">Jelajahi Layanan Kami <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
</header>

<script>
    // Hero Component Specific JS
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof anime === 'function') {
            anime.timeline({
                    easing: 'easeOutExpo'
                })
                .add({
                    targets: '.hero-component .hero-title',
                    opacity: [0, 1],
                    translateY: [-30, 0],
                    duration: 800,
                    delay: 300
                })
                .add({
                    targets: '.hero-component .hero-subtitle',
                    opacity: [0, 1],
                    translateY: [-30, 0],
                    duration: 800,
                }, '-=400') // Start 400ms before the previous animation ends
                .add({
                    targets: '.hero-component .btn-hero',
                    opacity: [0, 1],
                    translateY: [-30, 0],
                    duration: 800,
                }, '-=500');
        }
    });
</script>