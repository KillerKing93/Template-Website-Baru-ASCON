<?php // File: components_econ_v1/hero_corp_finance_v1.php - Hero Section Perusahaan Ekonomi (Perbaikan ID Section) 
?>
<style>
    /* Styles untuk Hero Section Perusahaan Ekonomi */
    #heroCorpFinance {
        /* ID diubah dari #hero menjadi #heroCorpFinance */
        min-height: 90vh;
        background: linear-gradient(to bottom, rgba(var(--bg-light-econ-rgb), 0.88), rgba(var(--bg-light-econ-rgb), 0.97)),
            url('https://placehold.co/1920x1000/DEE2E6/202A37?text=QuantumLeap+Finance+Solutions&font=oswald&font-size=80') no-repeat center center;
        background-size: cover;
        background-attachment: fixed;
        color: var(--text-light-econ);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding-top: 100px;
        padding-bottom: 60px;
    }

    body.dark-mode #heroCorpFinance {
        /* ID diubah dari #hero menjadi #heroCorpFinance */
        background: linear-gradient(to bottom, rgba(var(--bg-dark-econ-rgb), 0.9), rgba(var(--bg-dark-econ-rgb), 0.99)),
            url('https://placehold.co/1920x1000/0A192F/A0B2C3?text=QuantumLeap+Solutions+Dark&font=oswald&font-size=80') no-repeat center center;
        background-size: cover;
        background-attachment: fixed;
        color: var(--text-dark-econ);
    }

    #heroCorpFinance .hero-content-econ h1 {
        font-size: clamp(2.2rem, 5.5vw, 3.6rem);
        font-weight: 700;
        line-height: 1.2;
        text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
        color: var(--primary-econ);
        margin-bottom: 0.8rem;
    }

    body.dark-mode #heroCorpFinance .hero-content-econ h1 {
        color: var(--primary-econ-dark);
        text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.4);
    }

    #heroCorpFinance .hero-content-econ h1 .highlight-econ {
        color: var(--secondary-econ);
    }

    body.dark-mode #heroCorpFinance .hero-content-econ h1 .highlight-econ {
        color: var(--secondary-econ-dark);
    }

    #heroCorpFinance .hero-content-econ p.lead-econ {
        font-size: clamp(1rem, 2.2vw, 1.25rem);
        font-weight: 400;
        max-width: 700px;
        opacity: 0.85;
        margin-bottom: 1.8rem;
        line-height: 1.65;
    }

    .hero-anime-target {
        opacity: 0;
    }

    .hero-shape-decoration {
        position: absolute;
        opacity: 0.07;
        z-index: 0;
        pointer-events: none;
        transition: background-color 0.3s ease;
    }

    .hero-shape-1 {
        width: clamp(140px, 18vw, 200px);
        height: clamp(140px, 18vw, 200px);
        background-color: var(--secondary-econ);
        border-radius: 30% 70% 60% 40% / 40% 30% 70% 60%;
        bottom: -8%;
        left: -4%;
        animation: morphShape 16s infinite alternate ease-in-out;
        animation-delay: -1s;
    }

    .hero-shape-2 {
        width: clamp(90px, 14vw, 160px);
        height: clamp(90px, 14vw, 160px);
        background-color: var(--accent-econ);
        border-radius: 70% 30% 40% 60% / 30% 60% 40% 70%;
        top: -6%;
        right: -4%;
        animation: morphShape 19s infinite alternate-reverse ease-in-out;
        animation-delay: -3s;
    }

    body.dark-mode .hero-shape-1 {
        background-color: var(--secondary-econ-dark);
        opacity: 0.09;
    }

    body.dark-mode .hero-shape-2 {
        background-color: var(--accent-econ-dark);
        opacity: 0.09;
    }

    @keyframes morphShape {

        0%,
        100% {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            transform: rotate(0deg) scale(1) translateX(0) translateY(0);
        }

        25% {
            transform: rotate(15deg) scale(1.03) translateX(5px) translateY(-5px);
        }

        50% {
            border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
            transform: rotate(30deg) scale(1.08) translateX(-5px) translateY(5px);
        }

        75% {
            transform: rotate(15deg) scale(1.03) translateX(5px) translateY(-5px);
        }
    }
</style>

<section id="heroCorpFinance" class="hero-econ-v1 section-econ"> <?php // ID diubah dari "hero" menjadi "heroCorpFinance" 
                                                                    ?>
    <div class="hero-shape-decoration hero-shape-1" data-aos="fade" data-aos-delay="800" data-aos-duration="2000"></div>
    <div class="hero-shape-decoration hero-shape-2" data-aos="fade" data-aos-delay="900" data-aos-duration="2000"></div>

    <div class="container position-relative z-1">
        <div class="hero-content-econ">
            <h1 class="display-4 mb-3 hero-anime-target">
                Membuka <span class="highlight-econ">Peluang Ekonomi</span>, <br class="d-none d-md-block">Mendorong Pertumbuhan <span class="highlight-econ">Berkelanjutan</span>
            </h1>
            <p class="lead lead-econ mb-4 hero-anime-target">
                QuantumLeap Finance menyediakan analisis mendalam, strategi inovatif, dan konsultasi ahli untuk membantu bisnis Anda mencapai potensi finansial tertinggi.
            </p>
            <div class="hero-cta-econ hero-anime-target">
                <a href="#services" class="btn-econ-primary btn-lg me-sm-3 mb-3 mb-sm-0">Layanan Kami</a>
                <a href="#contact" class="btn-econ-secondary btn-lg">Hubungi Ahli</a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof anime !== 'undefined') {
            const heroSection = document.getElementById('heroCorpFinance'); // ID ini sekarang seharusnya cocok
            if (heroSection) {
                const heroTitle = heroSection.querySelector('.hero-content-econ h1');
                const heroLead = heroSection.querySelector('.hero-content-econ p.lead-econ');
                const heroCta = heroSection.querySelector('.hero-content-econ .hero-cta-econ');

                const heroTimeline = anime.timeline({
                    easing: 'easeOutExpo',
                    duration: 900
                });

                if (heroTitle) {
                    heroTimeline.add({
                        targets: heroTitle,
                        opacity: [0, 1],
                        translateY: [50, 0],
                        delay: 400
                    });
                }

                if (heroLead) {
                    heroTimeline.add({
                        targets: heroLead,
                        opacity: [0, 1],
                        translateY: [40, 0],
                        offset: '-=600'
                    });
                }

                if (heroCta) {
                    heroTimeline.add({
                        targets: heroCta,
                        opacity: [0, 1],
                        translateY: [30, 0],
                        offset: '-=500'
                    });
                }

                const shape1 = heroSection.querySelector('.hero-shape-1');
                const shape2 = heroSection.querySelector('.hero-shape-2');

                if (shape1) {
                    anime({
                        targets: shape1,
                        translateX: () => anime.random(-15, 15),
                        translateY: () => anime.random(-15, 15),
                        scale: [{
                                value: 1.08,
                                duration: 3200,
                                easing: 'easeInOutQuad'
                            },
                            {
                                value: 0.92,
                                duration: 3200,
                                easing: 'easeInOutQuad'
                            },
                            {
                                value: 1,
                                duration: 3200,
                                easing: 'easeInOutQuad'
                            }
                        ],
                        rotate: '1.5turn',
                        loop: true,
                        direction: 'alternate',
                        easing: 'easeInOutSine',
                        duration: 10000
                    });
                }
                if (shape2) {
                    anime({
                        targets: shape2,
                        translateX: () => anime.random(-20, 20),
                        translateY: () => anime.random(-20, 20),
                        scale: [{
                                value: 0.95,
                                duration: 3800,
                                easing: 'easeInOutQuad'
                            },
                            {
                                value: 1.12,
                                duration: 3800,
                                easing: 'easeInOutQuad'
                            },
                            {
                                value: 1,
                                duration: 3800,
                                easing: 'easeInOutQuad'
                            }
                        ],
                        rotate: '-1.5turn',
                        loop: true,
                        direction: 'alternate',
                        easing: 'easeInOutSine',
                        duration: 12000
                    });
                }
            } else {
                console.warn('Hero section with ID "heroCorpFinance" not found. Animations skipped.');
                document.querySelectorAll('#heroCorpFinance .hero-anime-target').forEach(el => { // Selector tetap pakai #heroCorpFinance jika ID section diubah
                    if (el) el.style.opacity = 1;
                });
            }

        } else {
            console.warn('Anime.js not loaded. Hero animations will not run.');
            document.querySelectorAll('#heroCorpFinance .hero-anime-target').forEach(el => { // Selector tetap pakai #heroCorpFinance jika ID section diubah
                if (el) el.style.opacity = 1;
            });
        }
    });
</script>