<?php // File: components_econ_v3_fresh/hero_econ_v3_fresh.php - Hero Section Aetherium Finance (Fresh) 
?>
<style>
    /* Styles untuk Hero Section Aetherium Finance */
    #heroAether {
        min-height: 100vh;
        background-color: var(--bg-dark-aether);
        color: var(--text-dark-aether);
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding-top: 100px;
        padding-bottom: 80px;
    }

    body:not(.dark-mode) #heroAether {
        background-color: var(--card-bg-light-aether);
        color: var(--text-light-aether);
    }

    body:not(.dark-mode) #heroAether .hero-content-aether h1 {
        color: var(--primary-aether);
    }

    body:not(.dark-mode) #heroAether .hero-content-aether h1 .highlight-aether-accent {
        color: var(--accent-aether);
    }

    body:not(.dark-mode) #heroAether .hero-content-aether h1 .highlight-aether-secondary {
        color: var(--secondary-aether);
    }

    body:not(.dark-mode) #heroAether .hero-content-aether .typed-subtitle-aether-container {
        color: var(--muted-text-light-aether);
    }

    body:not(.dark-mode) #heroAether .typed-cursor-aether {
        color: var(--accent-aether);
    }


    #hero-background-canvas-v3 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    #heroAether .container {
        position: relative;
        z-index: 1;
    }

    #heroAether .hero-content-aether h1 {
        font-size: clamp(2.8rem, 6.5vw, 4.5rem);
        font-weight: 700;
        line-height: 1.12;
        margin-bottom: 1.4rem;
        color: var(--text-dark-aether);
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        letter-spacing: -1px;
    }

    #heroAether .hero-content-aether h1 .highlight-aether-accent {
        color: var(--accent-aether-dark);
        text-shadow: 0 0 12px rgba(var(--accent-aether-dark-rgb), 0.6);
    }

    #heroAether .hero-content-aether h1 .highlight-aether-secondary {
        color: var(--secondary-aether-dark);
        text-shadow: 0 0 10px rgba(var(--secondary-aether-dark-rgb), 0.4);
    }

    #heroAether .hero-content-aether .typed-subtitle-aether-container {
        font-size: clamp(1.15rem, 2.8vw, 1.45rem);
        font-family: 'Source Code Pro', monospace;
        font-weight: 400;
        max-width: 720px;
        opacity: 0.9;
        margin-bottom: 2.8rem;
        line-height: 1.65;
        color: var(--muted-text-dark-aether);
        min-height: 2.6em;
    }

    .typed-cursor-aether {
        color: var(--accent-aether-dark);
        opacity: 1;
        animation: typedBlinkAetherV3 0.7s infinite;
        /* Nama animasi unik */
    }

    @keyframes typedBlinkAetherV3 {
        50% {
            opacity: 0.0;
        }
    }

    /* Nama keyframe unik */

    #heroAether .hero-cta-aether a {
        font-size: 0.95rem;
        padding: 12px 30px;
        margin-top: 8px;
    }

    .hero-visual-aether {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        min-height: 380px;
    }

    .hero-visual-aether img.abstract-finance-art {
        max-width: 95%;
        height: auto;
        border-radius: 12px;
        opacity: 0;
        filter: drop-shadow(0 0 25px rgba(var(--accent-aether-dark-rgb), 0.25));
        transform: perspective(1200px) rotateY(-8deg) rotateX(3deg) scale(0.9);
    }

    body:not(.dark-mode) .hero-visual-aether img.abstract-finance-art {
        filter: drop-shadow(0 0 20px rgba(var(--accent-aether-rgb), 0.2));
    }

    .hero-content-item-aether {
        opacity: 0;
    }
</style>

<section id="heroAether" class="hero-aether-v3 section-aether">
    <canvas id="hero-background-canvas-v3"></canvas>

    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-7 col-md-12 text-center text-lg-start">
                <div class="hero-content-aether">
                    <h1 class="hero-content-item-aether">
                        Merintis <span class="highlight-aether-accent">Masa Depan</span><br> Keuangan <span class="highlight-aether-secondary">Digital</span>.
                    </h1>
                    <div class="typed-subtitle-aether-container hero-content-item-aether">
                        <span id="typed-subtitle-aether-v3"></span>
                    </div>
                    <div class="hero-cta-aether hero-content-item-aether">
                        <a href="#servicesAether" class="btn-aether-primary me-sm-3 mb-3 mb-sm-0">Jelajahi Solusi FinTech</a>
                        <a href="#contactAether" class="btn-aether-secondary">Hubungi Pakar Kami</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-flex hero-visual-aether">
                <img src="https://placehold.co/500x580/161B22/00F5A0?text="
                    alt="[Visualisasi Abstrak Data Keuangan dan Teknologi FinTech]"
                    class="img-fluid abstract-finance-art hero-content-item-aether">
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof anime !== 'undefined') {
            const heroItemsV3 = document.querySelectorAll('#heroAether .hero-content-item-aether'); // Selector unik
            if (heroItemsV3.length > 0) {
                anime({
                    targets: heroItemsV3,
                    translateY: [45, 0],
                    opacity: [0, 1],
                    delay: anime.stagger(160, {
                        start: 550
                    }),
                    duration: 950,
                    easing: 'easeOutExpo'
                });
            }
            const visualImageV3 = document.querySelector('#heroAether .abstract-finance-art'); // Selector unik
            if (visualImageV3) {
                anime({
                    targets: visualImageV3,
                    opacity: [0, 0.9],
                    scale: [0.85, 1],
                    rotateY: [-15, 0],
                    rotateX: [8, 0],
                    duration: 1300,
                    delay: 900,
                    easing: 'easeOutQuint'
                });
            }
        } else {
            document.querySelectorAll('#heroAether .hero-content-item-aether').forEach(el => el.style.opacity = 1);
        }

        if (typeof Typed !== 'undefined' && document.getElementById('typed-subtitle-aether-v3')) {
            var typedAetherV3 = new Typed('#typed-subtitle-aether-v3', { // ID unik
                strings: [
                    'Inovasi Terdepan dalam Teknologi Finansial.',
                    'Strategi Cerdas untuk Pertumbuhan Aset Digital Anda.',
                    'Keamanan dan Transparansi di Era Keuangan Baru.'
                ],
                typeSpeed: 40,
                backSpeed: 15,
                backDelay: 2100,
                startDelay: 1100,
                loop: true,
                cursorChar: '_',
                contentType: 'html',
                smartBackspace: true
            });
        } else {
            const subtitleElementV3 = document.getElementById('typed-subtitle-aether-v3'); // ID unik
            if (subtitleElementV3) {
                subtitleElementV3.textContent = 'Inovasi Terdepan dalam Teknologi Finansial.';
            }
        }

        const canvasBgV3 = document.getElementById('hero-background-canvas-v3'); // ID unik
        if (canvasBgV3) {
            const ctxBgV3 = canvasBgV3.getContext('2d');
            let widthBgV3 = canvasBgV3.width = canvasBgV3.offsetWidth;
            let heightBgV3 = canvasBgV3.height = canvasBgV3.offsetHeight;
            let particlesArrayV3 = [];
            let numberOfParticlesV3 = Math.floor((widthBgV3 * heightBgV3) / 18000);

            function getParticleColorsV3() {
                const isDarkMode = document.body.classList.contains('dark-mode');
                return {
                    point: isDarkMode ? 'rgba(var(--accent-aether-dark-rgb), 0.6)' : 'rgba(var(--accent-aether-rgb), 0.5)',
                    line: isDarkMode ? 'rgba(var(--secondary-aether-dark-rgb), 0.25)' : 'rgba(var(--secondary-aether-rgb), 0.2)'
                };
            }

            class ParticleV3 {
                constructor(x, y) {
                    this.x = x || Math.random() * widthBgV3;
                    this.y = y || Math.random() * heightBgV3;
                    this.size = Math.random() * 1.8 + 0.6;
                    this.speedX = (Math.random() * 0.3 - 0.15);
                    this.speedY = (Math.random() * 0.3 - 0.15);
                }
                update() {
                    this.x += this.speedX;
                    this.y += this.speedY;
                    if (this.size > 0.05) this.size -= 0.003;
                    if (this.size <= 0.05) {
                        this.x = Math.random() * widthBgV3;
                        this.y = Math.random() * heightBgV3;
                        this.size = Math.random() * 1.8 + 0.6;
                        this.speedX = (Math.random() * 0.3 - 0.15);
                        this.speedY = (Math.random() * 0.3 - 0.15);
                    }
                }
                draw() {
                    const colors = getParticleColorsV3();
                    ctxBgV3.fillStyle = colors.point;
                    ctxBgV3.beginPath();
                    ctxBgV3.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctxBgV3.fill();
                }
            }

            function initParticlesV3() {
                particlesArrayV3 = [];
                if (canvasBgV3.offsetWidth > 0 && canvasBgV3.offsetHeight > 0) {
                    numberOfParticlesV3 = Math.floor((canvasBgV3.offsetWidth * canvasBgV3.offsetHeight) / 18000);
                } else {
                    numberOfParticlesV3 = 50;
                }
                for (let i = 0; i < numberOfParticlesV3; i++) {
                    particlesArrayV3.push(new ParticleV3());
                }
            }

            function handleParticlesV3() {
                const colors = getParticleColorsV3();
                for (let i = 0; i < particlesArrayV3.length; i++) {
                    particlesArrayV3[i].update();
                    particlesArrayV3[i].draw();
                    for (let j = i; j < particlesArrayV3.length; j++) {
                        const dx = particlesArrayV3[i].x - particlesArrayV3[j].x;
                        const dy = particlesArrayV3[i].y - particlesArrayV3[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);
                        if (distance < 90) {
                            ctxBgV3.beginPath();
                            ctxBgV3.strokeStyle = colors.line;
                            ctxBgV3.lineWidth = 0.15;
                            ctxBgV3.moveTo(particlesArrayV3[i].x, particlesArrayV3[j].y);
                            ctxBgV3.lineTo(particlesArrayV3[j].x, particlesArrayV3[i].y);
                            ctxBgV3.stroke();
                        }
                    }
                }
            }

            let animationFrameIdBgV3;

            function animateBackgroundV3() {
                if (!canvasBgV3 || !document.body.contains(canvasBgV3)) {
                    if (animationFrameIdBgV3) cancelAnimationFrame(animationFrameIdBgV3);
                    animationFrameIdBgV3 = null; // Reset ID
                    return;
                }
                ctxBgV3.clearRect(0, 0, widthBgV3, heightBgV3);
                handleParticlesV3();
                animationFrameIdBgV3 = requestAnimationFrame(animateBackgroundV3);
            }

            function resizeCanvasBgV3() {
                if (!canvasBgV3 || !document.body.contains(canvasBgV3)) return;
                widthBgV3 = canvasBgV3.width = canvasBgV3.offsetWidth;
                heightBgV3 = canvasBgV3.height = canvasBgV3.offsetHeight;
                if (widthBgV3 > 0 && heightBgV3 > 0) {
                    initParticlesV3();
                }
            }

            const bgCanvasObserverV3 = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (widthBgV3 > 0 && heightBgV3 > 0) {
                            if (!animationFrameIdBgV3) {
                                initParticlesV3();
                                animateBackgroundV3();
                            }
                        } else {
                            setTimeout(resizeCanvasBgV3, 50);
                        }
                    } else {
                        if (animationFrameIdBgV3) {
                            cancelAnimationFrame(animationFrameIdBgV3);
                            animationFrameIdBgV3 = null;
                        }
                    }
                });
            }, {
                threshold: 0.01
            });

            if (canvasBgV3) {
                bgCanvasObserverV3.observe(canvasBgV3);
                window.addEventListener('resize', resizeCanvasBgV3);
                document.addEventListener('themeChangedEconV3Fresh', function(e) {
                    /* Nama event unik */ });
            }
        } else {
            console.warn('Canvas element for hero background animation not found.');
        }
    });
</script>