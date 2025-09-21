<?php // File: components/hero_complex.php 
?>
<style>
    /* Complex Hero Component Styles */
    #heroComplex {
        width: 100%;
        min-height: 100vh;
        /* Tinggi minimal viewport */
        background: url('https://placehold.co/1920x1200/2C3E50/FFFFFF?text=Latar+Hero+Abstrak') no-repeat center center;
        background-size: cover;
        position: relative;
        display: flex;
        align-items: center;
        color: white;
        overflow: hidden;
        /* Penting untuk animasi elemen keluar masuk */
    }

    #heroComplex::before {
        /* Overlay gelap untuk kontras teks */
        content: "";
        background: rgba(44, 62, 80, 0.6);
        /* Warna gelap dari palet */
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #heroComplex .container {
        position: relative;
        /* Agar konten di atas overlay */
        z-index: 2;
        text-align: left;
        /* Teks rata kiri */
    }

    #heroComplex h1 {
        margin: 0 0 20px 0;
        font-size: 3.5rem;
        /* Ukuran font besar */
        font-weight: 800;
        /* Sangat tebal */
        line-height: 1.2;
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    #heroComplex .highlight {
        /* Untuk menyorot kata kunci */
        color: #00A9FF;
        /* Warna biru cerah sebagai aksen */
        /* text-decoration: underline; 
           text-decoration-color: #00A9FF;
           text-decoration-thickness: 3px; */
    }

    #heroComplex p {
        color: #E0E0E0;
        /* Warna teks deskripsi yang lebih terang */
        margin-bottom: 40px;
        font-size: 1.3rem;
        line-height: 1.6;
        max-width: 600px;
        /* Batasi lebar paragraf */
    }

    #heroComplex .btn-get-started {
        margin-right: 15px;
    }

    /* Animasi untuk elemen teks */
    .hero-text-element {
        opacity: 0;
        /* Mulai tidak terlihat */
    }

    /* Partikel animasi (opsional, jika ingin lebih kompleks) */
    #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 1;
        /* Di bawah konten, di atas background image */
    }
</style>

<section id="heroComplex" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 data-aos="fade-up" data-aos-delay="100">Transformasi <span class="highlight">Digital</span><br>Bisnis Anda Dimulai Di Sini</h1>
                <p data-aos="fade-up" data-aos-delay="300">Kami adalah mitra strategis Anda dalam merancang solusi teknologi inovatif yang mendorong pertumbuhan dan efisiensi.</p>
                <div data-aos="fade-up" data-aos-delay="500">
                    <a href="#aboutDetailed" class="btn-custom-primary btn-get-started">Pelajari Lebih Lanjut</a>
                    <a href="#servicesInteractive" class="btn-custom-secondary">Lihat Layanan Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Hero Complex Component Specific JS
    document.addEventListener('DOMContentLoaded', function() {
        // Contoh animasi teks menggunakan Anime.js jika tidak menggunakan AOS untuk ini
        // AOS sudah menangani fade-up, jadi ini bisa jadi alternatif atau tambahan

        // anime({
        //     targets: '#heroComplex h1',
        //     opacity: [0, 1],
        //     translateY: [50, 0],
        //     duration: 1200,
        //     delay: 200,
        //     easing: 'easeOutExpo'
        // });
        // anime({
        //     targets: '#heroComplex p',
        //     opacity: [0, 1],
        //     translateY: [50, 0],
        //     duration: 1200,
        //     delay: 400,
        //     easing: 'easeOutExpo'
        // });
        // anime({
        //     targets: '#heroComplex .btn-get-started, #heroComplex .btn-custom-secondary',
        //     opacity: [0, 1],
        //     translateY: [50, 0],
        //     duration: 1000,
        //     delay: anime.stagger(200, {start: 600}),
        //     easing: 'easeOutExpo'
        // });

        // Jika ingin menggunakan particles.js, Anda perlu menyertakan library-nya
        // dan menginisialisasinya di sini. Contoh:
        /*
        if (typeof particlesJS !== 'undefined') {
            particlesJS('particles-js', {
                "particles": {
                    "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
                    "color": { "value": "#ffffff" },
                    "shape": { "type": "circle", "stroke": { "width": 0, "color": "#000000" }, "polygon": { "nb_sides": 5 } },
                    "opacity": { "value": 0.5, "random": false, "anim": { "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false } },
                    "size": { "value": 3, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 0.1, "sync": false } },
                    "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1 },
                    "move": { "enable": true, "speed": 2, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false, "attract": { "enable": false, "rotateX": 600, "rotateY": 1200 } }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": { "onhover": { "enable": true, "mode": "repulse" }, "onclick": { "enable": true, "mode": "push" }, "resize": true },
                    "modes": { "grab": { "distance": 400, "line_linked": { "opacity": 1 } }, "bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 }, "repulse": { "distance": 100, "duration": 0.4 }, "push": { "particles_nb": 4 }, "remove": { "particles_nb": 2 } }
                },
                "retina_detect": true
            });
        }
        */
    });
</script>