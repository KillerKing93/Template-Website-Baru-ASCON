<?php // File: components/hero_pendidikan_nova_uni_parallax.php 
?>
<style>
    /* Hero Pendidikan Nova Uni Parallax Styles */
    #heroPendidikanNovaUniParallax {
        min-height: 100vh;
        background-color: var(--bg-dark-edu6);
        color: var(--text-dark-edu6);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        text-align: center;
        padding-top: 140px;
        padding-bottom: 80px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    body:not(.dark-mode) #heroPendidikanNovaUniParallax {
        background-color: var(--bg-light-edu6);
        color: var(--text-light-edu6);
    }

    .parallax-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        transition: transform 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    }

    #plx-bg-nova {
        background: linear-gradient(160deg, var(--bg-dark-edu6) 30%, #0A0A0F 100%);
        z-index: 1;
    }

    body:not(.dark-mode) #plx-bg-nova {
        background: linear-gradient(160deg, var(--bg-light-edu6) 30%, #E8EAF6 100%);
    }

    /* Canvas untuk partikel */
    #heroParticleCanvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 3;
        /* Di atas background, di bawah konten */
        pointer-events: none;
        /* Agar tidak menghalangi interaksi mouse dengan konten */
    }

    /* Mouse Aura Effect */
    #heroMouseAura {
        position: absolute;
        width: 300px;
        /* Ukuran aura */
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(var(--accent-nova-dark-rgb, 0, 229, 255), 0.08) 0%, transparent 70%);
        pointer-events: none;
        /* Tidak menghalangi interaksi */
        transform: translate(-50%, -50%);
        /* Posisi tengah di kursor */
        transition: opacity 0.3s ease, background 0.3s ease;
        z-index: 2;
        /* Di atas background, di bawah partikel */
        opacity: 0;
        /* Awalnya tidak terlihat */
    }

    body:not(.dark-mode) #heroMouseAura {
        background: radial-gradient(circle, rgba(var(--accent-nova-rgb, 0, 188, 212), 0.1) 0%, transparent 70%);
    }

    #heroPendidikanNovaUniParallax:hover #heroMouseAura {
        opacity: 1;
        /* Tampil saat mouse di atas hero */
    }


    /* Variabel RGB (pastikan sudah ada atau didefinisikan di global) */
    body.dark-mode {
        --primary-nova-dark-rgb: 245, 0, 87;
        --secondary-nova-dark-rgb: 149, 117, 205;
        --accent-nova-dark-rgb: 0, 229, 255;
    }

    body {
        --primary-nova-rgb: 255, 64, 129;
        --secondary-nova-rgb: 124, 77, 255;
        --accent-nova-rgb: 0, 188, 212;
    }

    .hero-content-nova-parallax-wrapper {
        /* Wrapper untuk memastikan konten tetap di tengah */
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        position: relative;
        /* Untuk z-index konten */
        z-index: 4;
    }

    .hero-content-nova-parallax {
        position: relative;
        /* Diubah dari absolute agar flex centering bekerja */
        /* z-index: 4; Sudah dihandle oleh wrapper */
        max-width: 850px;
        /* Menghilangkan transisi transform karena tilt dihilangkan */
        /* transition: transform 0.2s ease-out; */
        /* will-change: transform; */
    }

    .hero-content-nova-parallax .hero-supertitle-nova {
        font-family: 'Syne', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--accent-nova-dark);
        text-transform: uppercase;
        letter-spacing: 2.5px;
        margin-bottom: 15px;
        display: block;
    }

    body:not(.dark-mode) .hero-content-nova-parallax .hero-supertitle-nova {
        color: var(--accent-nova);
    }

    .hero-content-nova-parallax h1 {
        font-size: clamp(3.5rem, 6vw, 5rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 25px;
        color: #fff;
        text-shadow: 0 0 30px rgba(var(--primary-nova-dark-rgb, 245, 0, 87), 0.6);
    }

    body:not(.dark-mode) .hero-content-nova-parallax h1 {
        color: var(--text-light-edu6);
        text-shadow: 0 0 25px rgba(var(--primary-nova-rgb, 255, 64, 129), 0.4);
    }

    .hero-content-nova-parallax h1 .highlight-nova-hero {
        color: var(--secondary-nova-dark);
        display: inline-block;
        animation: textGlow 3s infinite alternate;
        position: relative;
        transition: transform 0.3s ease, color 0.3s ease;
        /* Transisi untuk hover */
    }

    .hero-content-nova-parallax h1 .highlight-nova-hero:hover {
        transform: scale(1.05) rotate(-2deg);
        /* Efek 3D lebih menonjol */
        color: var(--accent-nova-dark);
        /* Ganti warna saat hover */
    }

    .hero-content-nova-parallax h1 .highlight-nova-hero::after {
        content: '';
        position: absolute;
        width: 0;
        height: 3px;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--accent-nova-dark);
        transition: width 0.3s ease-in-out;
    }

    .hero-content-nova-parallax h1 .highlight-nova-hero:hover::after {
        width: 100%;
    }


    @keyframes textGlow {
        from {
            text-shadow: 0 0 10px var(--secondary-nova-dark), 0 0 20px var(--secondary-nova-dark);
        }

        to {
            text-shadow: 0 0 20px var(--secondary-nova-dark), 0 0 30px var(--secondary-nova-dark), 0 0 40px var(--accent-nova-dark);
        }
    }

    body:not(.dark-mode) .hero-content-nova-parallax h1 .highlight-nova-hero {
        color: var(--secondary-nova);
        animation-name: textGlowLight;
    }

    body:not(.dark-mode) .hero-content-nova-parallax h1 .highlight-nova-hero:hover {
        color: var(--accent-nova);
    }

    body:not(.dark-mode) .hero-content-nova-parallax h1 .highlight-nova-hero::after {
        background-color: var(--accent-nova);
    }


    @keyframes textGlowLight {
        from {
            text-shadow: 0 0 10px var(--secondary-nova), 0 0 20px var(--secondary-nova);
        }

        to {
            text-shadow: 0 0 20px var(--secondary-nova), 0 0 30px var(--secondary-nova), 0 0 40px var(--accent-nova);
        }
    }


    .hero-content-nova-parallax p.lead-nova-parallax {
        font-family: 'Work Sans', sans-serif;
        font-size: clamp(1rem, 2.5vw, 1.35rem);
        font-weight: 400;
        margin-bottom: 40px;
        color: var(--muted-text-dark-edu6);
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.75;
        opacity: 0.9;
    }

    body:not(.dark-mode) .hero-content-nova-parallax p.lead-nova-parallax {
        color: var(--muted-text-light-edu6);
    }

    .hero-content-nova-parallax .hero-cta-nova a {
        margin: 10px;
        transition: transform 0.2s ease-out, box-shadow 0.2s ease-out, background-color 0.2s ease-out;
    }

    .hero-content-nova-parallax .hero-cta-nova a:hover {
        transform: translateY(-4px) scale(1.08);
        /* Efek lebih dramatis */
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
    }

    .btn-nova-primary:hover {
        background-color: var(--secondary-nova) !important;
        /* Ganti warna background saat hover */
        border-color: var(--secondary-nova) !important;
    }

    body:not(.dark-mode) .btn-nova-primary:hover {
        background-color: var(--secondary-nova-dark) !important;
        border-color: var(--secondary-nova-dark) !important;
    }
</style>

<section id="heroPendidikanNovaUniParallax" class="section-nova-uni">
    <div class="parallax-layer" id="plx-bg-nova" data-depth="0.1"></div>
    <canvas id="heroParticleCanvas"></canvas>
    <div id="heroMouseAura"></div>
    <div class="container hero-content-nova-parallax-wrapper">
        <div class="hero-content-nova-parallax">
            <div data-aos="zoom-out-up" data-aos-duration="1200">
                <span class="hero-supertitle-nova" data-aos="fade-down" data-aos-delay="300">Selamat Datang di Nova Universitas</span>
                <h1 data-aos="fade-down" data-aos-delay="500">
                    Ekspresikan <span class="highlight-nova-hero">Kreativitas</span>,<br> Ciptakan <span class="highlight-nova-hero">Inovasi</span>.
                </h1>
                <p class="lead-nova-parallax" data-aos="fade-up" data-aos-delay="700">
                    Kampus interdisipliner yang memadukan seni, sains, dan teknologi digital untuk membentuk para pemimpin kreatif masa depan.
                </p>
                <div class="hero-cta-nova" data-aos="fade-up" data-aos-delay="900">
                    <a href="#programStudiInovatifNova" class="btn-nova-primary btn-lg">Program Unggulan</a>
                    <a href="#tentangKamiPendidikanInterdisipliner" class="btn-nova-secondary btn-lg">Kenali Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const heroSectionNova = document.getElementById('heroPendidikanNovaUniParallax');
        // const heroContentNova = heroSectionNova ? heroSectionNova.querySelector('.hero-content-nova-parallax') : null; // Tidak digunakan lagi untuk tilt
        const particleCanvas = document.getElementById('heroParticleCanvas');
        const mouseAura = document.getElementById('heroMouseAura');
        let ctx;
        let particlesArray;
        let animationFrameId;

        // Particle Class
        class Particle {
            constructor(x, y, size, color, weight) {
                this.x = x;
                this.y = y;
                this.size = size;
                this.color = color;
                this.weight = weight; // Kecepatan jatuh/gerak
                this.opacity = Math.random() * 0.5 + 0.2; // Opasitas acak
            }
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
                ctx.fillStyle = `rgba(${this.color.r}, ${this.color.g}, ${this.color.b}, ${this.opacity})`;
                ctx.fill();
            }
            update() {
                this.size -= 0.03; // Partikel mengecil
                if (this.size < 0) {
                    // Reset partikel jika terlalu kecil
                    this.x = Math.random() * particleCanvas.width;
                    this.y = Math.random() * particleCanvas.height;
                    this.size = Math.random() * 3 + 1; // Ukuran acak antara 1 dan 4
                    this.weight = Math.random() * 0.5 + 0.1; // Kecepatan acak
                    this.opacity = Math.random() * 0.5 + 0.2;
                }
                this.y += this.weight; // Gerak ke bawah
                this.weight += 0.005; // Sedikit percepatan

                // Jika keluar batas bawah, reset ke atas
                if (this.y > particleCanvas.height - this.size) {
                    this.y = 0 - this.size;
                    this.weight = Math.random() * 0.5 + 0.1;
                    this.x = Math.random() * particleCanvas.width;
                }
                this.draw();
            }
        }

        function getParticleColor() {
            const isDarkMode = document.body.classList.contains('dark-mode');
            // Warna partikel disesuaikan dengan tema
            const colors = isDarkMode ? [{
                    r: 245,
                    g: 0,
                    b: 87
                }, // Primary Dark (Pink)
                {
                    r: 149,
                    g: 117,
                    b: 205
                }, // Secondary Dark (Ungu)
                {
                    r: 0,
                    g: 229,
                    b: 255
                }, // Accent Dark (Biru Muda)
                {
                    r: 255,
                    g: 255,
                    b: 255
                } // Putih (untuk kontras)
            ] : [{
                    r: 255,
                    g: 64,
                    b: 129
                }, // Primary Light
                {
                    r: 124,
                    g: 77,
                    b: 255
                }, // Secondary Light
                {
                    r: 0,
                    g: 188,
                    b: 212
                }, // Accent Light
                {
                    r: 50,
                    g: 50,
                    b: 50
                } // Abu-abu gelap (untuk kontras)
            ];
            return colors[Math.floor(Math.random() * colors.length)];
        }

        function initParticles() {
            particlesArray = [];
            const numberOfParticles = 100; // Jumlah partikel
            for (let i = 0; i < numberOfParticles; i++) {
                const x = Math.random() * particleCanvas.width;
                const y = Math.random() * particleCanvas.height;
                const size = Math.random() * 3 + 1; // Ukuran acak antara 1 dan 4
                const color = getParticleColor();
                const weight = Math.random() * 0.5 + 0.1; // Kecepatan acak
                particlesArray.push(new Particle(x, y, size, color, weight));
            }
        }

        function animateParticles() {
            if (!ctx || !particleCanvas) return; // Pastikan context dan canvas ada
            ctx.clearRect(0, 0, particleCanvas.width, particleCanvas.height);
            for (let i = 0; i < particlesArray.length; i++) {
                particlesArray[i].update();
            }
            animationFrameId = requestAnimationFrame(animateParticles);
        }

        function setupCanvas() {
            if (!particleCanvas || !heroSectionNova) return; // Pastikan elemen ada
            particleCanvas.width = heroSectionNova.offsetWidth;
            particleCanvas.height = heroSectionNova.offsetHeight;
            ctx = particleCanvas.getContext('2d');
            initParticles();
            if (animationFrameId) cancelAnimationFrame(animationFrameId);
            animateParticles();
        }


        if (heroSectionNova) {
            setupCanvas();
            window.addEventListener('resize', setupCanvas);

            document.addEventListener('themeChangedNovaUni', function() {
                setupCanvas();
            });


            const parallaxLayersNova = heroSectionNova.querySelectorAll('.parallax-layer');

            function handleMouseMove(e) {
                const {
                    clientX,
                    clientY
                } = e;
                const {
                    offsetWidth,
                    offsetHeight,
                    offsetLeft,
                    offsetTop
                } = heroSectionNova;

                // Parallax layers
                const moveXParallax = (clientX / offsetWidth - 0.5) * 2;
                const moveYParallax = (clientY / offsetHeight - 0.5) * 2;

                parallaxLayersNova.forEach(layer => {
                    const depth = parseFloat(layer.getAttribute('data-depth')) || 0;
                    const x = -moveXParallax * (20 * depth);
                    const y = -moveYParallax * (20 * depth);
                    layer.style.transform = `translateX(${x}px) translateY(${y}px) translateZ(0)`;
                });

                // Mouse Aura
                if (mouseAura) {
                    const auraX = clientX - offsetLeft;
                    const auraY = clientY - offsetTop;
                    mouseAura.style.left = `${auraX}px`;
                    mouseAura.style.top = `${auraY}px`;
                }
            }

            function handleMouseLeave() {
                parallaxLayersNova.forEach(layer => {
                    layer.style.transform = `translateX(0px) translateY(0px) translateZ(0)`;
                });
                // Tidak perlu reset transform untuk heroContentNova karena tilt dihilangkan
            }

            if (!('ontouchstart' in window || navigator.maxTouchPoints)) {
                heroSectionNova.addEventListener('mousemove', handleMouseMove);
                heroSectionNova.addEventListener('mouseleave', handleMouseLeave);
            }
        }
    });
</script>