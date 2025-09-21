<?php // File: components/hero_luminous.php 
?>
<style>
    /* Luminous Hero Component Styles */
    #heroLuminous {
        min-height: 100vh;
        background: linear-gradient(135deg, #E0EAFC 0%, #CFDEF3 100%);
        /* Latar gradient terang lembut */
        display: flex;
        align-items: center;
        text-align: left;
        /* Teks rata kiri */
        padding: 120px 0;
        position: relative;
        overflow: hidden;
        transition: background 0.4s ease;
    }

    body.dark-mode #heroLuminous {
        background: linear-gradient(135deg, var(--bg-dark) 0%, #101830 100%);
        /* Latar gradient gelap */
    }

    /* Elemen dekoratif "cahaya" */
    .luminous-glow {
        position: absolute;
        border-radius: 50%;
        opacity: 0;
        /* Awalnya tidak terlihat, muncul dengan animasi */
        filter: blur(80px);
        /* Efek blur besar */
        animation: floatGlow 15s infinite ease-in-out alternate;
    }

    .glow-1 {
        width: 400px;
        height: 400px;
        background-color: rgba(var(--primary-luminous-rgb, 138, 43, 226), 0.15);
        top: 10%;
        left: 5%;
        animation-delay: 0s;
    }

    .glow-2 {
        width: 300px;
        height: 300px;
        background-color: rgba(var(--secondary-luminous-rgb, 255, 215, 0), 0.1);
        top: 50%;
        right: 10%;
        animation-delay: -5s;
    }

    .glow-3 {
        width: 350px;
        height: 350px;
        background-color: rgba(var(--accent-luminous-rgb, 70, 130, 180), 0.12);
        bottom: 5%;
        left: 20%;
        animation-delay: -10s;
    }

    body.dark-mode .glow-1 {
        background-color: rgba(var(--primary-luminous-dark-rgb, 160, 96, 255), 0.2);
    }

    body.dark-mode .glow-2 {
        background-color: rgba(var(--secondary-luminous-dark-rgb, 255, 235, 153), 0.15);
    }

    body.dark-mode .glow-3 {
        background-color: rgba(var(--accent-luminous-dark-rgb, 106, 158, 207), 0.18);
    }

    @keyframes floatGlow {
        from {
            transform: translateY(-20px) scale(0.95);
            opacity: 0.5;
        }

        to {
            transform: translateY(20px) scale(1.05);
            opacity: 0.8;
        }
    }


    .hero-content-luminous {
        position: relative;
        /* Di atas glow */
        z-index: 2;
    }

    .hero-content-luminous h1 {
        font-size: 4rem;
        /* Judul utama besar */
        font-weight: 800;
        /* Sangat bold */
        line-height: 1.2;
        margin-bottom: 25px;
        color: #2c3e50;
        /* Warna teks gelap di light mode */
    }

    .hero-content-luminous h1 .highlight {
        /* Kata kunci yang disorot */
        color: var(--primary-luminous);
        /* Bisa ditambahkan efek teks, misal text-shadow atau background-clip */
    }

    body.dark-mode .hero-content-luminous h1 {
        color: var(--text-dark);
    }

    body.dark-mode .hero-content-luminous h1 .highlight {
        color: var(--primary-luminous-dark);
    }


    .hero-content-luminous p.lead-luminous {
        font-family: 'Lato', sans-serif;
        font-size: 1.3rem;
        font-weight: 400;
        /* Teks lead lebih ringan */
        margin-bottom: 35px;
        color: var(--muted-text-light);
        max-width: 650px;
        /* Batasi lebar paragraf */
        line-height: 1.7;
    }

    body.dark-mode .hero-content-luminous p.lead-luminous {
        color: var(--muted-text-dark);
    }

    .hero-content-luminous .btn-luminous-primary {
        margin-right: 15px;
    }

    /* Ilustrasi atau gambar di sisi kanan */
    .hero-illustration-luminous {
        position: relative;
        z-index: 1;
        /* Bisa di bawah teks jika ada overlap */
    }

    .hero-illustration-luminous img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        /* box-shadow: 0 10px 30px rgba(0,0,0,0.1); */
        /* Bisa ditambahkan efek "mengambang" dengan JS/Anime.js */
    }
</style>

<section id="heroLuminous" class="section-elegant">
    <div class="luminous-glow glow-1" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0"></div>
    <div class="luminous-glow glow-2" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0"></div>
    <div class="luminous-glow glow-3" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0"></div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 hero-content-luminous">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h1>Solusi <span class="highlight">Cemerlang</span> untuk Bisnis yang <span class="highlight">Bersinar</span></h1>
                    <p class="lead-luminous">
                        Kami menggabungkan strategi inovatif dengan teknologi terdepan untuk menerangi jalan kesuksesan digital Anda. Mari ciptakan masa depan yang lebih cerah bersama.
                    </p>
                    <div>
                        <a href="#servicesShowcaseElegant" class="btn-luminous-primary">Lihat Layanan Kami</a>
                        <a href="#contactOsmElegant" class="btn-luminous-secondary">Hubungi Konsultan</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 hero-illustration-luminous d-none d-lg-block" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <?php /* Komentar PHP: Placeholder untuk ilustrasi yang elegan */ ?>
                <img src="https://placehold.co/500x550/FFFFFF/8A2BE2?text=Ilustrasi+Elegan+Modern&font=playfairdisplay" alt="[Ilustrasi Bisnis Modern dan Elegan]">
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Animasi untuk elemen ilustrasi (jika ada)
        const illustration = document.querySelector('#heroLuminous .hero-illustration-luminous img');
        if (illustration && typeof anime !== 'undefined') {
            anime({
                targets: illustration,
                translateY: ['-10px', '10px'],
                duration: 3000,
                loop: true,
                direction: 'alternate',
                easing: 'easeInOutSine',
                delay: 500 // Mulai setelah AOS
            });
        }

        // Komentar JavaScript: Update warna glow berdasarkan tema (jika variabel CSS tidak cukup)
        // Ini bisa lebih kompleks jika warna glow sangat berbeda antar tema
        // dan tidak bisa hanya di-handle oleh CSS variables di :root.
        // Untuk saat ini, CSS variables di :root dan body.dark-mode sudah menangani perubahan warna glow.
    });
</script>