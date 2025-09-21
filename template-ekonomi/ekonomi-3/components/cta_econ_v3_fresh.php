<?php // File: components_econ_v3_fresh/cta_econ_v3_fresh.php - Call to Action Aetherium Finance (Fresh) 
?>
<style>
    /* Styles untuk Call to Action Section Aetherium Finance */
    #ctaAether {
        background-color: var(--primary-aether);
        color: #FFFFFF;
        padding: 90px 0;
        position: relative;
        overflow: hidden;
        text-align: center;
    }

    body.dark-mode #ctaAether {
        background-color: var(--primary-aether-dark);
    }

    #ctaAether .cta-background-pattern-v3 {
        /* Nama class unik */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none;
        opacity: 0.07;
        background-image:
            linear-gradient(rgba(var(--accent-aether-rgb), 0.4) 0.8px, transparent 0.8px),
            linear-gradient(90deg, rgba(var(--accent-aether-rgb), 0.4) 0.8px, transparent 0.8px);
        background-size: 35px 35px;
        animation: subtleGridShiftAetherV3Fresh 35s linear infinite;
        /* Nama animasi unik */
        transition: background-image 0.3s ease;
    }

    body.dark-mode #ctaAether .cta-background-pattern-v3 {
        opacity: 0.09;
        background-image:
            linear-gradient(rgba(var(--accent-aether-dark-rgb), 0.4) 0.8px, transparent 0.8px),
            linear-gradient(90deg, rgba(var(--accent-aether-dark-rgb), 0.4) 0.8px, transparent 0.8px);
        background-size: 35px 35px;
    }

    @keyframes subtleGridShiftAetherV3Fresh {

        /* Nama keyframe unik */
        0% {
            background-position: 0px 0px;
        }

        100% {
            background-position: 70px 70px;
        }
    }

    .cta-content-aether-wrapper {
        position: relative;
        z-index: 1;
        background-color: rgba(var(--bg-light-aether-rgb), 0.02);
        /* Latar lebih transparan */
        backdrop-filter: blur(2.5px);
        -webkit-backdrop-filter: blur(2.5px);
        padding: 40px 30px;
        border-radius: 10px;
        display: inline-block;
        max-width: 820px;
        box-shadow: 0 0 30px rgba(var(--primary-aether-rgb), 0.08);
        border: 1px solid rgba(var(--accent-aether-rgb), 0.08);
    }

    body.dark-mode .cta-content-aether-wrapper {
        background-color: rgba(var(--card-bg-dark-aether-rgb), 0.12);
        box-shadow: 0 0 40px rgba(var(--primary-aether-dark-rgb), 0.12);
        border: 1px solid rgba(var(--accent-aether-dark-rgb), 0.12);
    }

    .cta-content-aether-wrapper h3.cta-title-aether {
        font-size: clamp(1.8rem, 4.2vw, 2.5rem);
        font-weight: 700;
        margin-bottom: 18px;
        color: #FFFFFF;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
        line-height: 1.3;
        letter-spacing: -0.2px;
    }

    .cta-content-aether-wrapper h3.cta-title-aether .highlight-cta-accent {
        color: var(--accent-aether);
    }

    body.dark-mode .cta-content-aether-wrapper h3.cta-title-aether .highlight-cta-accent {
        color: var(--accent-aether-dark);
    }

    .cta-content-aether-wrapper p.cta-subtitle-aether {
        font-size: clamp(0.95rem, 2vw, 1.05rem);
        margin-bottom: 30px;
        max-width: 660px;
        margin-left: auto;
        margin-right: auto;
        opacity: 0.92;
        line-height: 1.7;
        font-family: 'Inter', sans-serif;
        color: #FFFFFF;
    }

    body.dark-mode .cta-content-aether-wrapper p.cta-subtitle-aether {
        color: var(--text-dark-aether);
        opacity: 0.88;
    }

    .cta-content-aether-wrapper .btn-cta-aether {
        padding: 13px 35px;
        font-size: 1rem;
        font-weight: 600;
        transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s ease;
    }

    .cta-content-aether-wrapper .btn-cta-aether:hover {
        transform: translateY(-3px) scale(1.03);
        box-shadow: 0 7px 20px rgba(var(--accent-aether-rgb), 0.35);
    }

    body.dark-mode .cta-content-aether-wrapper .btn-cta-aether:hover {
        box-shadow: 0 7px 20px rgba(var(--accent-aether-dark-rgb), 0.35);
    }
</style>

<section id="ctaAether" class="cta-aether-v3 section-aether">
    <div class="cta-background-pattern-v3"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="cta-content-aether-wrapper" data-aos="zoom-in" data-aos-duration="700">
                    <h3 class="cta-title-aether">
                        [ Revolusikan Strategi Finansial Anda Bersama <span class="highlight-cta-accent">Aetherium</span> ]
                    </h3>
                    <p class="cta-subtitle-aether">
                        Jangan biarkan masa depan keuangan Anda ditentukan oleh metode konvensional. Saatnya beralih ke solusi FinTech yang cerdas, aman, dan terdesentralisasi.
                    </p>
                    <div>
                        <a href="#contactAether" class="btn-aether-accent btn-cta-aether">
                            Konsultasi Gratis Sekarang <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Script khusus untuk CTA Section Aetherium (Fresh)
    // AOS sudah menangani animasi masuk dasar.
</script>