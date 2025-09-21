<?php // File: components/hero_pendidikan_innovateu_dynamic.php 
?>
<style>
    /* Hero Pendidikan InnovateU Dynamic Styles */
    #heroPendidikanInnovateUDynamic {
        min-height: 100vh;
        background: linear-gradient(150deg, var(--bg-dark-edu4) 0%, #071A32 100%);
        /* Gradien biru tua ke gelap */
        color: var(--text-dark-edu4);
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        /* Penting untuk mencegah overflow dari elemen absolut/fixed di dalamnya */
        padding-top: 160px;
        padding-bottom: 100px;
    }

    body:not(.dark-mode) #heroPendidikanInnovateUDynamic {
        background: linear-gradient(150deg, var(--bg-light-edu4) 0%, #D6EAF8 100%);
        color: var(--text-light-edu4);
    }

    #hero-innovateu-plexus {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    .hero-content-innovateu {
        position: relative;
        z-index: 1;
        text-align: left;
    }

    .hero-content-innovateu .eyebrow-innovateu {
        font-family: 'Rajdhani', sans-serif;
        font-size: 1rem;
        font-weight: 600;
        color: var(--accent-innovate-dark);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 15px;
        display: inline-block;
        padding: 4px 8px;
        background-color: rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.1);
        border-left: 3px solid var(--accent-innovate-dark);
    }

    body:not(.dark-mode) .hero-content-innovateu .eyebrow-innovateu {
        color: var(--accent-innovate);
        background-color: rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.08);
        border-left-color: var(--accent-innovate);
    }

    .hero-content-innovateu h1 {
        font-size: 4.2rem;
        font-weight: 700;
        line-height: 1.15;
        margin-bottom: 20px;
        color: #fff;
    }

    body:not(.dark-mode) .hero-content-innovateu h1 {
        color: var(--text-light-edu4);
    }

    .hero-content-innovateu h1 .highlight-innovate {
        color: var(--secondary-innovate-dark);
        display: inline-block;
    }

    body:not(.dark-mode) .hero-content-innovateu h1 .highlight-innovate {
        color: var(--secondary-innovate);
    }

    .hero-content-innovateu p.lead-innovateu {
        font-family: 'Inter', sans-serif;
        font-size: 1.25rem;
        font-weight: 400;
        margin-bottom: 35px;
        color: var(--muted-text-dark-edu4);
        max-width: 600px;
        line-height: 1.7;
    }

    body:not(.dark-mode) .hero-content-innovateu p.lead-innovateu {
        color: var(--muted-text-light-edu4);
    }

    .hero-content-innovateu .hero-cta-innovateu a {
        margin-right: 15px;
        margin-bottom: 10px;
    }

    .hero-visual-innovateu {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        perspective: 1500px;
    }

    .hero-visual-innovateu img.main-visual {
        max-width: 90%;
        height: auto;
        border-radius: 10px;
        transform: rotateY(-10deg) rotateX(3deg) translateZ(40px);
        /* Sedikit diubah untuk efek awal */
        transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        /* Transisi lebih smooth */
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
        /* Bayangan lebih dramatis */
    }

    .hero-visual-innovateu:hover img.main-visual {
        transform: rotateY(0deg) rotateX(0deg) translateZ(0px) scale(1.08);
        /* Efek hover lebih menonjol */
        box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3);
    }

    .floating-graphic {
        position: absolute;
        background-color: var(--accent-innovate-dark);
        border-radius: 50%;
        opacity: 0;
        box-shadow: 0 0 15px var(--accent-innovate-dark), 0 0 25px var(--accent-innovate-dark);
        /* Animasi akan di-handle oleh JS untuk interaktivitas mouse */
    }

    body:not(.dark-mode) .floating-graphic {
        background-color: var(--accent-innovate);
        box-shadow: 0 0 15px var(--accent-innovate), 0 0 25px var(--accent-innovate);
    }

    .graphic-1 {
        width: 70px;
        height: 70px;
        top: 15%;
        left: -15%;
    }

    .graphic-2 {
        width: 45px;
        height: 45px;
        bottom: 20%;
        right: -5%;
        background-color: var(--secondary-innovate-dark);
    }

    .graphic-3 {
        width: 55px;
        height: 55px;
        top: 55%;
        left: 10%;
    }

    body:not(.dark-mode) .graphic-2 {
        background-color: var(--secondary-innovate);
    }
</style>

<section id="heroPendidikanInnovateUDynamic" class="section-eduverse">
    <div id="hero-innovateu-plexus"></div> <?php /* Komentar PHP: Kontainer untuk Particles.js */ ?>

    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-7 hero-content-innovateu">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <span class="eyebrow-innovateu">Selamat Datang di InnovateU</span>
                    <h1>
                        Revolusi Pembelajaran <span class="highlight-innovate">Interaktif</span> & Dinamis
                    </h1>
                    <p class="lead-innovateu">
                        Kami adalah ekosistem pendidikan masa depan, mengintegrasikan teknologi canggih dengan metodologi pengajaran inovatif untuk memberdayakan potensi Anda.
                    </p>
                    <div class="hero-cta-innovateu">
                        <a href="#kurikulumAdaptifPendidikan" class="btn-eduverse-primary btn-lg">Jelajahi Kurikulum</a>
                        <a href="#labVirtualPendidikan" class="btn-eduverse-secondary btn-lg">Tur Virtual</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block hero-visual-innovateu" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <img src="https://placehold.co/500x550/172A46/E6F1FF?text=Visualisasi+Kampus+Futuristik&font=orbitron" alt="[Visualisasi Kampus Futuristik InnovateU]" class="img-fluid main-visual">
                <div class="floating-graphic graphic-1" data-depth="0.3"></div>
                <div class="floating-graphic graphic-2" data-depth="0.2"></div>
                <div class="floating-graphic graphic-3" data-depth="0.4"></div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Komentar JavaScript: Inisialisasi Particles.js untuk latar belakang plexus
        if (typeof particlesJS !== 'undefined' && document.getElementById('hero-innovateu-plexus')) {

            function getCssVariableValue(variableName) {
                return getComputedStyle(document.documentElement).getPropertyValue(variableName).trim();
            }

            function updateParticleColors(isDarkMode) {
                const pJS = window.pJSDom[0].pJS;
                if (pJS) {
                    pJS.particles.color.value = isDarkMode ? getCssVariableValue('--muted-text-dark-edu4') : getCssVariableValue('--muted-text-light-edu4');
                    pJS.particles.line_linked.color = isDarkMode ? getCssVariableValue('--accent-innovate-dark') : getCssVariableValue('--accent-innovate');
                    pJS.fn.particlesRefresh();
                }
            }

            const initialThemeIsDark = document.body.classList.contains('dark-mode');
            const particlesConfig = {
                "particles": {
                    "number": {
                        "value": 50,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": initialThemeIsDark ? getCssVariableValue('--muted-text-dark-edu4') : getCssVariableValue('--muted-text-light-edu4')
                    },
                    "shape": {
                        "type": "circle"
                    },
                    "opacity": {
                        "value": 0.3,
                        "random": true
                    },
                    "size": {
                        "value": 2.5,
                        "random": true
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 170,
                        "color": initialThemeIsDark ? getCssVariableValue('--accent-innovate-dark') : getCssVariableValue('--accent-innovate'),
                        "opacity": 0.2,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 1.3,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out"
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
                            "enable": false
                        }
                    },
                    "modes": {
                        "grab": {
                            "distance": 160,
                            "line_linked": {
                                "opacity": 0.6
                            }
                        }
                    }
                },
                "retina_detect": true
            };

            const heroPlexusElement = document.getElementById('hero-innovateu-plexus');
            if (heroPlexusElement) {
                particlesJS('hero-innovateu-plexus', particlesConfig);
                const pJSInstance = window.pJSDom[0].pJS;
                if (pJSInstance) {
                    updateParticleColors(initialThemeIsDark);
                }
            }

            document.addEventListener('themeChangedInnovateU', function(e) {
                updateParticleColors(e.detail.theme === 'dark');
            });

        } else {
            console.warn('Particles.js library not loaded for InnovateU hero background.');
        }

        // Komentar JavaScript: Interaktivitas untuk floating graphics dan gambar utama
        const heroVisualWrapper = document.querySelector('.hero-visual-innovateu');
        const mainVisual = heroVisualWrapper ? heroVisualWrapper.querySelector('.main-visual') : null;
        const floatingGraphics = heroVisualWrapper ? heroVisualWrapper.querySelectorAll('.floating-graphic') : [];

        if (heroVisualWrapper && mainVisual && typeof anime !== 'undefined') {
            heroVisualWrapper.addEventListener('mousemove', function(e) {
                const rect = heroVisualWrapper.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const moveX = (x - centerX) * 0.03; // Intensitas pergerakan
                const moveY = (y - centerY) * 0.03;

                // Komentar JavaScript: Pergerakan gambar utama
                anime.remove(mainVisual); // Hapus animasi sebelumnya untuk menghindari konflik
                anime({
                    targets: mainVisual,
                    rotateY: moveX * 0.5, // Mengurangi intensitas rotasi agar tidak terlalu liar
                    rotateX: -moveY * 0.5,
                    translateZ: Math.abs(moveX) + Math.abs(moveY) > 50 ? 30 : 50, // Z lebih kecil jika mouse jauh
                    scale: 1.02, // Sedikit zoom saat mouse di atas wrapper
                    duration: 300,
                    easing: 'easeOutQuad'
                });

                // Komentar JavaScript: Pergerakan floating graphics
                floatingGraphics.forEach(graphic => {
                    const depth = parseFloat(graphic.getAttribute('data-depth')) || 0.2; // Default depth
                    anime.remove(graphic);
                    anime({
                        targets: graphic,
                        translateX: moveX * (1 + depth * 5), // Efek parallax lebih kuat
                        translateY: moveY * (1 + depth * 5),
                        opacity: [0, 0.4 + depth * 0.3], // Opacity berdasarkan depth
                        scale: [0.5, 1 + depth * 0.2],
                        duration: 500 + depth * 200,
                        easing: 'easeOutQuint'
                    });
                });
            });

            heroVisualWrapper.addEventListener('mouseleave', function() {
                // Komentar JavaScript: Kembalikan gambar utama ke posisi awal
                anime({
                    targets: mainVisual,
                    rotateY: -10, // Kembali ke state hover awal yang sedikit miring
                    rotateX: 3,
                    translateZ: 40,
                    scale: 1,
                    duration: 500,
                    easing: 'easeOutQuad'
                });

                // Komentar JavaScript: Kembalikan floating graphics
                floatingGraphics.forEach(graphic => {
                    anime({
                        targets: graphic,
                        translateX: 0,
                        translateY: 0,
                        opacity: 0,
                        scale: 0.5,
                        duration: 600,
                        easing: 'easeOutQuint'
                    });
                });
            });

            // Komentar JavaScript: Animasi awal untuk floating graphics
            floatingGraphics.forEach((graphic, index) => {
                anime({
                    targets: graphic,
                    opacity: [0, 0.3 + Math.random() * 0.3],
                    scale: [0, 1],
                    translateX: [anime.random(-30, 30) + 'px', 0],
                    translateY: [anime.random(-30, 30) + 'px', 0],
                    duration: 1000 + index * 100,
                    delay: 800 + index * 150, // Delay setelah AOS
                    loop: true,
                    direction: 'alternate',
                    easing: 'easeInOutSine'
                });
            });
        }
    });
</script>