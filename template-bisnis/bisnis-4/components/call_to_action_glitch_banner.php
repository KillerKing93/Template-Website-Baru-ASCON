<?php // File: components/call_to_action_glitch_banner.php 
?>
<style>
    /* Call to Action Glitch Banner Component Styles */
    :root {
        /* Variabel dari index.php */
        --dark-bg-secondary: #0F084B;
        --primary-accent: #FF00E4;
        --secondary-accent: #00F5D4;
        --text-light: #F0F0F0;
    }

    #ctaGlitchBanner {
        padding: 100px 0;
        background-color: var(--dark-bg-secondary);
        /* Latar gelap */
        position: relative;
        overflow: hidden;
        /* Untuk efek glitch */
        text-align: center;
    }

    /* Efek garis-garis glitch di latar belakang */
    #ctaGlitchBanner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            repeating-linear-gradient(0deg, transparent, transparent 4px, rgba(var(--primary-accent-rgb), 0.05) 4px, rgba(var(--primary-accent-rgb), 0.05) 8px),
            repeating-linear-gradient(90deg, transparent, transparent 3px, rgba(var(--secondary-accent-rgb), 0.05) 3px, rgba(var(--secondary-accent-rgb), 0.05) 6px);
        animation: bgGlitchMove 10s linear infinite;
        z-index: 1;
        opacity: 0.5;
    }

    @keyframes bgGlitchMove {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 100px 50px;
        }
    }

    .cta-content-glitch {
        position: relative;
        z-index: 2;
    }

    .cta-content-glitch h2.cta-title-glitch {
        font-size: 3rem;
        font-weight: 900;
        color: var(--text-light);
        margin-bottom: 20px;
        position: relative;
        /* Untuk efek glitch teks */
    }

    /* Efek glitch pada judul CTA */
    .cta-content-glitch h2.cta-title-glitch span.glitch-layer {
        display: block;
        /* Atau inline-block jika ingin per kata */
        position: relative;
    }

    .cta-content-glitch h2.cta-title-glitch span.glitch-layer::before,
    .cta-content-glitch h2.cta-title-glitch span.glitch-layer::after {
        content: attr(data-text);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background: var(--dark-bg-secondary);
        /* Sembunyikan teks asli */
    }

    .cta-content-glitch h2.cta-title-glitch span.glitch-layer::before {
        left: 2px;
        text-shadow: -2px 0 var(--primary-accent);
        animation: ctaGlitch1 2.5s infinite linear alternate-reverse;
    }

    .cta-content-glitch h2.cta-title-glitch span.glitch-layer::after {
        left: -2px;
        text-shadow: 2px 0 var(--secondary-accent);
        animation: ctaGlitch2 2s infinite linear alternate-reverse;
    }

    @keyframes ctaGlitch1 {
        0% {
            clip-path: polygon(0 0, 100% 0, 100% 5%, 0 5%);
        }

        100% {
            clip-path: polygon(0 95%, 100% 95%, 100% 100%, 0 100%);
        }
    }

    @keyframes ctaGlitch2 {
        0% {
            clip-path: polygon(0 45%, 100% 45%, 100% 50%, 0 50%);
        }

        100% {
            clip-path: polygon(0 20%, 100% 20%, 100% 25%, 0 25%);
        }
    }

    .cta-content-glitch p.cta-subtitle-glitch {
        font-family: 'Lexend', sans-serif;
        font-size: 1.2rem;
        color: var(--text-muted-cyber);
        margin-bottom: 35px;
        max-width: 650px;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<section id="ctaGlitchBanner" class="section-cyber">
    <div class="container cta-content-glitch">
        <div data-aos="zoom-in-out" data-aos-duration="1000">
            <h2 class="cta-title-glitch">
                <span class="glitch-layer" data-text="SIAP UNTUK">SIAP UNTUK</span>
                <span class="glitch-layer" data-text="MELOMPAT KE MASA DEPAN?">MELOMPAT KE MASA DEPAN?</span>
            </h2>
            <p class="cta-subtitle-glitch">
                Jangan biarkan bisnis Anda tertinggal. Mari berkolaborasi untuk menciptakan solusi digital yang revolusioner dan membawa visi Anda menjadi kenyataan.
            </p>
            <a href="#contactMinimalistForm" class="btn-cyber-primary btn-lg">Mulai Diskusi Proyek <i class="fas fa-angle-right ms-2"></i></a>
        </div>
    </div>
</section>