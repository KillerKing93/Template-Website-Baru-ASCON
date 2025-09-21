<?php // File: components_econ_v2/hero_econ_v2.php - Hero Section Vertex Capital Partners 
?>
<style>
    /* Styles untuk Hero Section Vertex Capital Partners */
    #heroVertex {
        min-height: 95vh;
        background: linear-gradient(135deg, rgba(var(--bg-dark-vertex-rgb), 0.92) 0%, rgba(var(--primary-vertex-rgb), 0.85) 100%),
            url('https://placehold.co/1920x1080/0A192F/0A192F?text=%20') no-repeat center center;
        background-size: cover;
        background-attachment: scroll;
        /* Tidak fixed agar lebih smooth dengan animasi konten */
        color: var(--text-dark-vertex);
        /* Teks terang di atas latar gelap */
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: left;
        /* Teks rata kiri */
        overflow: hidden;
        /* Untuk elemen animasi */
        padding-top: 120px;
        /* Padding atas untuk memberi ruang dari header */
        padding-bottom: 80px;
    }

    body:not(.dark-mode) #heroVertex {
        /* Override untuk light mode jika diperlukan, namun hero ini didesain gelap */
        background: linear-gradient(135deg, rgba(var(--primary-vertex-rgb), 0.05) 0%, rgba(var(--secondary-vertex-rgb), 0.1) 100%),
            url('https://placehold.co/1920x1080/F9FAFB/F9FAFB?text=%20') no-repeat center center;
        background-size: cover;
        color: var(--text-light-vertex);
    }

    body:not(.dark-mode) #heroVertex .hero-content-vertex h1,
    body:not(.dark-mode) #heroVertex .hero-content-vertex p.lead-vertex {
        color: var(--text-light-vertex);
    }

    body:not(.dark-mode) #heroVertex .hero-content-vertex h1 .highlight-vertex {
        color: var(--primary-vertex);
    }


    #heroVertex .container {
        position: relative;
        z-index: 2;
    }

    #heroVertex .hero-content-vertex h1 {
        font-size: clamp(2.8rem, 6vw, 4.2rem);
        font-weight: 800;
        /* Raleway sangat tebal */
        line-height: 1.15;
        margin-bottom: 1.2rem;
        color: #FFFFFF;
        /* Teks putih untuk kontras maksimal di latar gelap */
        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    #heroVertex .hero-content-vertex h1 .highlight-vertex {
        color: var(--accent-vertex-dark);
        /* Aksen kuning di latar gelap */
        display: inline-block;
        /* Untuk animasi jika ada */
    }

    body:not(.dark-mode) #heroVertex .hero-content-vertex h1 .highlight-vertex {
        color: var(--accent-vertex);
    }


    #heroVertex .hero-content-vertex p.lead-vertex {
        font-size: clamp(1.1rem, 2.5vw, 1.35rem);
        font-weight: 300;
        /* Lato light */
        max-width: 650px;
        opacity: 0.9;
        margin-bottom: 2.2rem;
        line-height: 1.7;
        color: var(--text-dark-vertex);
        /* Teks terang */
    }

    .hero-visual-area {
        position: relative;
        /* Bisa diisi dengan animasi JS atau SVG kompleks */
    }

    #hero-animation-plexus {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 120%;
        /* Lebih besar dari container agar bisa bergerak */
        height: 120%;
        transform: translate(-50%, -50%);
        z-index: 0;
        /* Di belakang konten teks */
        opacity: 0.3;
    }

    body:not(.dark-mode) #hero-animation-plexus {
        opacity: 0.15;
    }


    /* Styling untuk tombol CTA di hero */
    #heroVertex .hero-cta-vertex a {
        font-size: 0.95rem;
        padding: 12px 28px;
    }

    /* Efek animasi masuk untuk konten */
    .hero-content-item {
        opacity: 0;
        /* Disembunyikan awal oleh JS Anime.js */
    }
</style>

<section id="heroVertex" class="hero-vertex-v2 section-vertex">
    <canvas id="hero-animation-plexus"></canvas>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="hero-content-vertex">
                    <h1 class="hero-content-item">
                        Navigasi Kompleksitas Pasar, <span class="highlight-vertex">Raih Puncak</span> Investasi Anda.
                    </h1>
                    <p class="lead lead-vertex hero-content-item">
                        Vertex Capital Partners adalah mitra strategis Anda dalam mengoptimalkan portofolio, mengidentifikasi peluang pertumbuhan, dan mencapai tujuan finansial jangka panjang dengan presisi dan keahlian.
                    </p>
                    <div class="hero-cta-vertex hero-content-item">
                        <a href="#servicesVertex" class="btn-vertex-primary me-sm-3 mb-3 mb-sm-0">Strategi Kami</a>
                        <a href="#contactVertex" class="btn-vertex-secondary">Hubungi Analis</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block hero-visual-area">
                <img src="https://placehold.co/500x550/172A46/42A5F5?text=Visualisasi+Data+Pasar&font=raleway&font-size=30"
                    alt="[Ilustrasi Visualisasi Data Pasar Keuangan]"
                    class="img-fluid rounded-3 shadow-lg hero-content-item"
                    style="filter: brightness(0.9) contrast(1.1); mix-blend-mode: lighten; opacity:0.8;">
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animasi masuk untuk konten hero menggunakan Anime.js
        if (typeof anime !== 'undefined') {
            const heroItems = document.querySelectorAll('#heroVertex .hero-content-item');
            if (heroItems.length > 0) {
                anime({
                    targets: heroItems,
                    translateY: [50, 0],
                    opacity: [0, 1],
                    delay: anime.stagger(150, {
                        start: 500
                    }), // Staggering animation
                    duration: 900,
                    easing: 'easeOutExpo'
                });
            }
        } else {
            document.querySelectorAll('#heroVertex .hero-content-item').forEach(el => el.style.opacity = 1);
        }

        // Animasi Plexus sederhana pada Canvas
        const canvas = document.getElementById('hero-animation-plexus');
        if (canvas) {
            const ctx = canvas.getContext('2d');
            let width = canvas.width = canvas.offsetWidth;
            let height = canvas.height = canvas.offsetHeight;
            let points = [];
            const numPoints = Math.floor((width * height) / 15000); // Jumlah titik responsif
            const connectDistance = Math.min(width, height) / 6; // Jarak koneksi responsif

            // Fungsi untuk mendapatkan warna berdasarkan tema
            function getPlexusColor() {
                const isDarkMode = document.body.classList.contains('dark-mode');
                // Light mode: Gunakan warna sekunder dengan opacity
                // Dark mode: Gunakan warna aksen gelap dengan opacity
                return isDarkMode ? 'rgba(var(--accent-vertex-dark-rgb), 0.6)' : 'rgba(var(--secondary-vertex-rgb), 0.4)';
            }

            function getPlexusPointColor() {
                const isDarkMode = document.body.classList.contains('dark-mode');
                return isDarkMode ? 'rgba(var(--accent-vertex-dark-rgb), 0.7)' : 'rgba(var(--secondary-vertex-rgb), 0.5)';
            }


            class Point {
                constructor() {
                    this.x = Math.random() * width;
                    this.y = Math.random() * height;
                    this.vx = (Math.random() - 0.5) * 0.5; // Kecepatan x lebih lambat
                    this.vy = (Math.random() - 0.5) * 0.5; // Kecepatan y lebih lambat
                    this.radius = Math.random() * 1.5 + 0.5; // Ukuran titik lebih kecil
                }

                update() {
                    this.x += this.vx;
                    this.y += this.vy;
                    if (this.x < 0 || this.x > width) this.vx *= -1;
                    if (this.y < 0 || this.y > height) this.vy *= -1;
                }

                draw() {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                    ctx.fillStyle = getPlexusPointColor();
                    ctx.fill();
                }
            }

            function initPoints() {
                points = [];
                for (let i = 0; i < numPoints; i++) {
                    points.push(new Point());
                }
            }

            function connectPoints() {
                for (let i = 0; i < points.length; i++) {
                    for (let j = i + 1; j < points.length; j++) {
                        const dx = points[i].x - points[j].x;
                        const dy = points[i].y - points[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < connectDistance) {
                            ctx.beginPath();
                            ctx.moveTo(points[i].x, points[i].y);
                            ctx.lineTo(points[j].x, points[j].y);
                            const opacity = 1 - (distance / connectDistance);
                            ctx.strokeStyle = getPlexusColor().replace(/[^,]+(?=\))/, opacity.toFixed(2)); // Update opacity
                            ctx.lineWidth = 0.5; // Garis lebih tipis
                            ctx.stroke();
                        }
                    }
                }
            }

            function animate() {
                ctx.clearRect(0, 0, width, height);
                points.forEach(point => {
                    point.update();
                    point.draw();
                });
                connectPoints();
                requestAnimationFrame(animate);
            }

            function resizeCanvas() {
                width = canvas.width = canvas.offsetWidth;
                height = canvas.height = canvas.offsetHeight;
                // Recalculate numPoints and connectDistance if needed, then re-init points
                // For simplicity, we'll just re-init with existing numPoints
                initPoints();
            }

            window.addEventListener('resize', resizeCanvas);

            // Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedEconV2', function(e) {
                // Warna akan otomatis diupdate oleh getPlexusColor di dalam loop animasi
            });

            initPoints();
            animate();
        } else {
            console.warn('Canvas element for plexus animation not found.');
        }
    });
</script>