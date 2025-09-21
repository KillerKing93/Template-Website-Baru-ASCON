<?php // File: components/hero_data_visualization.php 
?>
<style>
    /* Hero Data Visualization Component Styles */
    :root {
        /* Variabel dari index.php */
        --dark-bg-primary: #0D0221;
        --primary-accent: #FF00E4;
        --secondary-accent: #00F5D4;
        --text-light: #F0F0F0;
    }

    #heroDataVisualization {
        width: 100%;
        height: 100vh;
        background-color: var(--dark-bg-primary);
        /* Latar belakang utama */
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: var(--text-light);
        overflow: hidden;
    }

    /* Container untuk canvas Particles.js */
    #particles-hero {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 1;
        /* Di bawah konten */
    }

    .hero-content-cyber {
        position: relative;
        z-index: 2;
        /* Di atas partikel */
        max-width: 900px;
        /* Batasi lebar konten */
        padding: 0 20px;
    }

    .hero-content-cyber .main-headline {
        font-size: 4.5rem;
        /* Ukuran sangat besar */
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 25px;
        position: relative;
        display: inline-block;
        /* Untuk efek ::before/::after */
    }

    /* Efek teks dengan multiple shadows / layers */
    .hero-content-cyber .main-headline .layer {
        display: block;
    }

    .hero-content-cyber .main-headline .layer:nth-child(1) {
        color: var(--secondary-accent);
        text-shadow: 0 0 5px rgba(var(--secondary-accent-rgb), 0.7), 0 0 10px rgba(var(--secondary-accent-rgb), 0.5);
    }

    .hero-content-cyber .main-headline .layer:nth-child(2) {
        color: var(--primary-accent);
        transform: translate(3px, 3px);
        /* Sedikit offset */
        text-shadow: 0 0 5px rgba(var(--primary-accent-rgb), 0.7), 0 0 10px rgba(var(--primary-accent-rgb), 0.5);
        mix-blend-mode: screen;
        /* Efek blending */
        opacity: 0.8;
    }

    .hero-content-cyber .main-headline .layer:nth-child(3) {
        /* Lapisan dasar (putih) */
        color: #fff;
        transform: translate(-1px, -1px);
        opacity: 0.9;
    }


    .hero-content-cyber .sub-headline {
        font-family: 'Lexend', sans-serif;
        font-size: 1.4rem;
        font-weight: 400;
        color: var(--text-light);
        opacity: 0.9;
        margin-bottom: 40px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.6;
    }

    .hero-content-cyber .cta-buttons-cyber a {
        margin: 0 12px;
    }

    /* Canvas untuk visualisasi data abstrak (jika tidak pakai particles.js untuk ini) */
    #data-viz-canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        /* Paling bawah */
        opacity: 0.15;
        /* Sangat transparan */
    }
</style>

<section id="heroDataVisualization">
    <div id="particles-hero"></div>
    <!-- {/* Kontainer untuk Particles.js */} -->
    <canvas id="data-viz-canvas"></canvas> <!-- {/* Opsional: canvas untuk visualisasi kustom */} -->

    <div class="container hero-content-cyber">
        <h1 class="main-headline" data-aos="zoom-in-down" data-aos-duration="1000">
            <span class="layer">QUANTUMLEAP</span>
            <span class="layer">QUANTUMLEAP</span>
            <span class="layer">QUANTUMLEAP</span>
        </h1>
        <p class="sub-headline" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
            Membuka Potensi Tanpa Batas Melalui Solusi Teknologi Futuristik dan Inovasi Terdepan.
        </p>
        <div class="cta-buttons-cyber" data-aos="fade-up" data-aos-delay="800" data-aos-duration="800">
            <a href="#servicesInteractiveGrid" class="btn-cyber-primary">Eksplorasi Layanan</a>
            <a href="#aboutDeconstructed" class="btn-cyber-secondary">Pelajari Kami</a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi Particles.js
        if (typeof particlesJS !== 'undefined') {
            particlesJS('particles-hero', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": ["#FF00E4", "#00F5D4", "#6A11CB"]
                    }, // Array warna partikel
                    "shape": {
                        "type": "triangle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        }
                    },
                    "opacity": {
                        "value": 0.4,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 0.8,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#0F084B",
                        "opacity": 0.2,
                        "width": 1
                    }, // Garis penghubung
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 0.7
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        } else {
            console.warn('Particles.js library not loaded.');
        }

        // Animasi judul dengan Anime.js (jika ingin lebih kompleks dari AOS)
        const mainHeadlineLayers = document.querySelectorAll('#heroDataVisualization .main-headline .layer');
        if (mainHeadlineLayers.length > 0 && typeof anime !== 'undefined') {
            anime.timeline({
                    easing: 'easeOutExpo',
                    duration: 1200
                })
                .add({
                    targets: mainHeadlineLayers,
                    opacity: [0, 1],
                    translateY: ['20px', '0px'],
                    delay: anime.stagger(100, {
                        start: 500
                    }) // Stagger untuk setiap layer
                });
        }

        // Contoh Visualisasi Data Abstrak dengan Canvas API (jika tidak pakai particles.js untuk ini)
        // const canvas = document.getElementById('data-viz-canvas');
        // if (canvas) {
        //     const ctx = canvas.getContext('2d');
        //     canvas.width = window.innerWidth;
        //     canvas.height = window.innerHeight;
        //     let points = [];
        //     // Logika untuk membuat dan menganimasikan titik/garis abstrak
        //     // ... (Ini bisa menjadi cukup kompleks)
        // }

    });
</script>