<?php // File: components/footer_cyberpunk_links.php 
?>
<style>
    /* Footer Cyberpunk Links Component Styles */
    :root {
        /* Variabel dari index.php */
        --dark-bg-primary: #0D0221;
        --dark-bg-secondary: #0F084B;
        --primary-accent: #FF00E4;
        --secondary-accent: #00F5D4;
        --text-light: #F0F0F0;
        --text-muted-cyber: #A0A0C0;
        --border-cyber: rgba(0, 245, 212, 0.3);
    }

    #footerCyberpunkLinks {
        background-color: var(--dark-bg-secondary);
        /* Latar footer */
        color: var(--text-muted-cyber);
        padding: 70px 0 0 0;
        /* Padding atas, tanpa bawah untuk sub-footer */
        font-size: 0.9rem;
        border-top: 2px solid var(--primary-accent);
        /* Garis aksen tebal */
        position: relative;
        overflow: hidden;
    }

    /* Efek grid/circuit di latar belakang footer */
    #footerCyberpunkLinks::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            linear-gradient(rgba(var(--secondary-accent-rgb), 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(var(--secondary-accent-rgb), 0.05) 1px, transparent 1px);
        background-size: 30px 30px;
        /* Ukuran grid */
        opacity: 0.5;
        z-index: 0;
    }

    #footerCyberpunkLinks .container {
        position: relative;
        /* Agar konten di atas ::before */
        z-index: 1;
    }

    #footerCyberpunkLinks .footer-section-cyber h5 {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.2rem;
        color: var(--secondary-accent);
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
        padding-bottom: 8px;
    }

    #footerCyberpunkLinks .footer-section-cyber h5::after {
        /* Garis bawah judul section */
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background-color: var(--primary-accent);
    }

    #footerCyberpunkLinks .footer-logo-cyber {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        font-weight: 900;
        color: var(--text-light);
        margin-bottom: 15px;
        display: inline-block;
    }

    #footerCyberpunkLinks .footer-logo-cyber .char {
        display: inline-block;
    }

    /* Untuk animasi jika ada */

    #footerCyberpunkLinks .footer-links-list-cyber {
        list-style: none;
        padding-left: 0;
    }

    #footerCyberpunkLinks .footer-links-list-cyber li {
        margin-bottom: 10px;
    }

    #footerCyberpunkLinks .footer-links-list-cyber li a {
        color: var(--text-muted-cyber);
        text-decoration: none;
        transition: color 0.3s ease, padding-left 0.3s ease;
        font-family: 'Lexend', sans-serif;
    }

    #footerCyberpunkLinks .footer-links-list-cyber li a:hover {
        color: var(--secondary-accent);
        padding-left: 8px;
    }

    #footerCyberpunkLinks .footer-links-list-cyber li a i {
        margin-right: 8px;
        opacity: 0.7;
    }

    #footerCyberpunkLinks .footer-contact-cyber p {
        margin-bottom: 8px;
        line-height: 1.6;
    }

    #footerCyberpunkLinks .footer-contact-cyber p i {
        color: var(--primary-accent);
        margin-right: 10px;
        width: 16px;
        /* Jaga alignment */
    }

    #footerCyberpunkLinks .footer-contact-cyber p a {
        color: var(--text-muted-cyber);
        text-decoration: none;
    }

    #footerCyberpunkLinks .footer-contact-cyber p a:hover {
        color: var(--secondary-accent);
    }

    #footerCyberpunkLinks .social-icons-cyber a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 3px;
        /* Kotak */
        background-color: rgba(var(--secondary-accent-rgb), 0.1);
        color: var(--secondary-accent);
        margin-right: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    #footerCyberpunkLinks .social-icons-cyber a:hover {
        background-color: var(--secondary-accent);
        color: var(--dark-bg-primary);
        transform: scale(1.1) rotate(5deg);
        /* Efek hover unik */
    }

    #footerCyberpunkLinks .footer-bottom-cyber {
        background-color: var(--dark-bg-primary);
        /* Sub-footer lebih gelap */
        padding: 20px 0;
        margin-top: 50px;
        text-align: center;
        border-top: 1px solid var(--border-cyber);
        font-size: 0.85rem;
    }

    #footerCyberpunkLinks .footer-bottom-cyber .copyright-cyber {
        margin: 0;
    }

    #footerCyberpunkLinks .footer-bottom-cyber .credits-cyber a {
        color: var(--primary-accent);
        text-decoration: none;
        font-weight: 500;
    }

    #footerCyberpunkLinks .footer-bottom-cyber .credits-cyber a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerCyberpunkLinks">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-12 footer-section-cyber" data-aos="fade-up" data-aos-delay="100">
                <a href="index.php" class="footer-logo-cyber">
                    <!-- {/* Script akan mengisi karakter di sini */} -->
                </a>
                <p class="mt-2">QuantumLeap Solutions: Meretas batas inovasi, membangun realitas digital masa depan dengan solusi teknologi terdepan.</p>
                <div class="social-icons-cyber mt-3">
                    <a href="#" title="X/Twitter"><i class="fab fa-xing"></i></a>
                    <!-- {/* X icon */} -->
                    <a href="#" title="Discord"><i class="fab fa-discord"></i></a>
                    <a href="#" title="Matrix"><i class="fas fa-project-diagram"></i></a>
                    <!-- {/* Placeholder Matrix */} -->
                    <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6 footer-section-cyber" data-aos="fade-up" data-aos-delay="200">
                <h5>// Navigasi</h5>
                <ul class="footer-links-list-cyber">
                    <li><a href="#heroDataVisualization"><i class="fas fa-angle-right"></i> Beranda</a></li>
                    <li><a href="#aboutDeconstructed"><i class="fas fa-angle-right"></i> Manifesto</a></li>
                    <li><a href="#servicesInteractiveGrid"><i class="fas fa-angle-right"></i> Layanan</a></li>
                    <li><a href="#projectsCaseStudyCards"><i class="fas fa-angle-right"></i> Proyek</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 col-6 footer-section-cyber" data-aos="fade-up" data-aos-delay="300">
                <h5>// Sumber Daya</h5>
                <ul class="footer-links-list-cyber">
                    <li><a href="#"><i class="fas fa-book-open"></i> Blog Teknologi</a></li>
                    <li><a href="#"><i class="fas fa-file-alt"></i> Whitepapers</a></li>
                    <li><a href="#contactMinimalistForm"><i class="fas fa-headset"></i> Dukungan Klien</a></li>
                    <li><a href="#"><i class="fas fa-user-secret"></i> Kebijakan Privasi</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 footer-section-cyber footer-contact-cyber" data-aos="fade-up" data-aos-delay="400">
                <h5>// Kontak Jaringan</h5>
                <p><i class="fas fa-map-marker-alt"></i> Neo-Jakarta Node, Sektor 7</p>
                <p><i class="fas fa-broadcast-tower"></i> <a href="tel:SYSTEM.ERROR">SYSTEM.ERROR.CONTACT</a></p>
                <p><i class="fas fa-envelope"></i> <a href="mailto:signal@quantumleap.tech">signal@quantumleap.tech</a></p>
                <p><i class="fas fa-clock"></i> Operasional: 24/7 (Matrix Time)</p>
            </div>
        </div>
    </div>

    <div class="footer-bottom-cyber">
        <div class="container">
            <p class="copyright-cyber">&copy; <?php echo date("Y"); ?> <span style="color:var(--primary-accent);">QuantumLeap Solutions</span>. All Rights Reserved in this Reality Matrix.</p>
            <p class="credits-cyber">System Design by <a href="#">[YourAlias/Studio]</a></p>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Footer Logo Character Spans for Glitch Effect (jika diinginkan)
        const footerLogoElement = document.querySelector('.footer-logo-cyber');
        const footerLogoName = "QLEAP";
        if (footerLogoElement) {
            footerLogoElement.innerHTML = ''; // Kosongkan dulu
            footerLogoName.split('').forEach(char => {
                const span = document.createElement('span');
                span.className = 'char';
                // span.setAttribute('data-char', char); // Bisa untuk efek glitch
                span.textContent = char;
                footerLogoElement.appendChild(span);
            });
        }
    });
</script>