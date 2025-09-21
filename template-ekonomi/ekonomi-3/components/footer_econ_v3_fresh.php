<?php // File: components_econ_v3_fresh/footer_econ_v3_fresh.php - Footer Aetherium Finance (Fresh) 
?>
<style>
    /* Styles untuk Footer Aetherium Finance */
    #footerAether {
        background-color: var(--dark-bg-aether);
        color: var(--muted-text-dark-aether);
        padding: 65px 0 0 0;
        font-size: 0.88rem;
        border-top: 3px solid var(--primary-aether-dark);
        position: relative;
        overflow: hidden;
    }

    #footerAether .footer-background-effect-v3-fresh {
        /* Nama class unik */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none;
        overflow: hidden;
    }

    #footerAether .footer-background-effect-v3-fresh .rain-drop-v3-fresh {
        /* Nama class unik */
        position: absolute;
        font-family: 'Source Code Pro', monospace;
        color: rgba(var(--accent-aether-dark-rgb), 0.07);
        /* Warna tetesan lebih subtle */
        font-size: 0.7rem;
        /* Ukuran karakter lebih kecil */
        user-select: none;
        animation: digitalRainFallV3FreshRebuild 13s linear infinite;
        /* Nama animasi unik */
    }

    @keyframes digitalRainFallV3FreshRebuild {

        /* Nama keyframe unik */
        to {
            transform: translateY(100vh) rotate(12deg);
            opacity: 0;
        }
    }

    #footerAether .container {
        position: relative;
        z-index: 1;
    }

    #footerAether .footer-brand-aether .brand-logo-footer-aether {
        font-family: 'Source Code Pro', monospace;
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--text-dark-aether);
        margin-bottom: 10px;
        display: inline-block;
        letter-spacing: 0.2px;
        /* Spasi huruf brand */
    }

    #footerAether .footer-brand-aether .brand-logo-footer-aether i {
        color: var(--accent-aether-dark);
        margin-right: 6px;
        font-size: 1.6rem;
    }

    #footerAether .footer-brand-aether p.footer-tagline-short {
        font-size: 0.85rem;
        /* Tagline lebih kecil */
        margin-bottom: 16px;
        line-height: 1.5;
        opacity: 0.7;
        max-width: 330px;
    }

    #footerAether .footer-section-title-aether {
        font-family: 'Source Code Pro', monospace;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--text-dark-aether);
        margin-bottom: 16px;
        padding-bottom: 7px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 0.9px;
    }

    #footerAether .footer-section-title-aether::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 28px;
        height: 2px;
        background: linear-gradient(90deg, var(--accent-aether-dark), var(--secondary-aether-dark));
        border-radius: 1px;
    }

    #footerAether .footer-links-aether ul a {
        color: var(--muted-text-dark-aether);
        text-decoration: none;
        transition: color 0.25s ease, padding-left 0.25s ease, letter-spacing 0.25s ease;
        display: inline-block;
        font-family: 'Inter', sans-serif;
        font-size: 0.82rem;
    }

    #footerAether .footer-links-aether ul a:hover {
        color: var(--accent-aether-dark);
        padding-left: 4px;
        letter-spacing: 0.15px;
    }

    #footerAether .footer-links-aether ul a i.link-icon {
        margin-right: 5px;
        font-size: 0.7em;
        opacity: 0.6;
    }

    #footerAether .footer-contact-aether p {
        margin-bottom: 7px;
        line-height: 1.55;
        font-size: 0.82rem;
    }

    #footerAether .footer-contact-aether p i.contact-icon {
        color: var(--accent-aether-dark);
        margin-right: 8px;
        width: 15px;
        text-align: center;
    }

    #footerAether .footer-contact-aether p a {
        color: var(--muted-text-dark-aether);
        text-decoration: none;
    }

    #footerAether .footer-contact-aether p a:hover {
        color: var(--accent-aether-dark);
    }

    #footerAether .social-icons-aether a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 5px;
        background-color: rgba(var(--accent-aether-dark-rgb), 0.09);
        color: var(--accent-aether-dark);
        margin: 0 3px;
        text-decoration: none;
        transition: all 0.25s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        font-size: 0.95rem;
        border: 1px solid transparent;
    }

    #footerAether .social-icons-aether a:hover {
        background-color: var(--accent-aether-dark);
        color: var(--bg-dark-aether);
        transform: scale(1.07) translateY(-2px);
        border-color: var(--accent-aether-dark);
        box-shadow: 0 0 7px rgba(var(--accent-aether-dark-rgb), 0.22);
    }

    #footerAether .footer-bottom-aether {
        background-color: #0A0E13;
        padding: 20px 0;
        margin-top: 45px;
        text-align: center;
        font-size: 0.78rem;
        border-top: 1px solid var(--border-dark-aether);
    }

    #footerAether .copyright-aether {
        margin: 0;
    }

    #footerAether .credits-aether a {
        color: var(--accent-aether-dark);
        text-decoration: none;
        font-weight: 500;
    }

    #footerAether .credits-aether a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerAether">
    <div class="footer-background-effect-v3-fresh">
        <?php // Partikel "digital rain" akan ditambahkan oleh JavaScript 
        ?>
    </div>
    <div class="footer-top-aether">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-12 footer-brand-aether" data-aos="fade-up" data-aos-delay="100">
                    <a class="brand-logo-footer-aether" href="index.php">
                        <i class="fas fa-atom"></i> Aetherium
                    </a>
                    <p class="footer-tagline-short">
                        Merintis masa depan keuangan digital dengan inovasi, keamanan, dan inklusivitas sebagai inti dari setiap solusi kami.
                    </p>
                    <div class="social-icons-aether mt-3">
                        <a href="#" title="Twitter/X"><i class="fab fa-xing"></i></a>
                        <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Telegram"><i class="fab fa-telegram-plane"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-links-aether" data-aos="fade-up" data-aos-delay="150">
                    <h5 class="footer-section-title-aether">// Navigasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="#heroAether"><i class="fas fa-angle-right link-icon"></i> Beranda</a></li>
                        <li><a href="#aboutAether"><i class="fas fa-angle-right link-icon"></i> Filosofi</a></li>
                        <li><a href="#servicesAether"><i class="fas fa-angle-right link-icon"></i> Solusi</a></li>
                        <li><a href="#marketDataAether"><i class="fas fa-angle-right link-icon"></i> Data Pasar</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-links-aether" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="footer-section-title-aether">// Sumber Daya</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fas fa-file-code link-icon"></i> Dokumentasi API</a></li>
                        <li><a href="#"><i class="fas fa-book link-icon"></i> Whitepaper</a></li>
                        <li><a href="#"><i class="fas fa-question-circle link-icon"></i> FAQ & Bantuan</a></li>
                        <li><a href="#"><i class="fas fa-shield-alt link-icon"></i> Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-contact-aether" data-aos="fade-up" data-aos-delay="250">
                    <h5 class="footer-section-title-aether">// Hubungi Node</h5>
                    <p><i class="fas fa-map-marker-alt contact-icon"></i> Aetherium Hub, Sector 7G, Cyberspace</p>
                    <p><i class="fas fa-phone-alt contact-icon"></i> <a href="tel:+622101010101">(021) 0101-0101</a></p>
                    <p><i class="fas fa-envelope contact-icon"></i> <a href="mailto:connect@aetherium.finance">connect@aetherium.finance</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-aether">
        <div class="container">
            <p class="copyright-aether mb-0">&copy; <?php echo date("Y"); ?> <strong><span>Aetherium Finance</span></strong>. All Rights Reserved in the Digital Aether.</p>
            <p class="credits-aether mt-1 mb-0">
                System Architecture by <a href="#">Aetherium Core Devs</a>
            </p>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const footerBgEffectV3Fresh = document.querySelector('#footerAether .footer-background-effect-v3-fresh'); // Selector unik
        if (footerBgEffectV3Fresh && typeof anime !== 'undefined') {
            const numberOfDropsV3Fresh = 35; // Jumlah "tetesan hujan" disesuaikan
            const charactersV3Fresh = '0123456789ABCDEF<>/|{}[]()*&^%$#@!~`'; // Karakter lebih bervariasi

            for (let i = 0; i < numberOfDropsV3Fresh; i++) {
                const drop = document.createElement('div');
                drop.classList.add('rain-drop-v3-fresh'); // Class unik
                drop.textContent = charactersV3Fresh.charAt(Math.floor(Math.random() * charactersV3Fresh.length));
                drop.style.left = `${Math.random() * 100}%`;
                drop.style.fontSize = `${Math.random() * 0.35 + 0.55}rem`; // Ukuran lebih kecil dan bervariasi
                drop.style.animationDuration = `${Math.random() * 5 + 6}s`; // Durasi jatuh 6-11s
                drop.style.animationDelay = `${Math.random() * 9}s`;
                drop.style.opacity = Math.random() * 0.2 + 0.03; // Opacity lebih subtle
                footerBgEffectV3Fresh.appendChild(drop);
            }
        }
    });
</script>