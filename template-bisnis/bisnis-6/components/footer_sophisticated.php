<?php // File: components/footer_sophisticated.php 
?>
<style>
    /* Sophisticated Footer Component Styles */
    #footerSophisticated {
        background-color: var(--card-bg-dark);
        /* Latar gelap untuk footer di kedua mode */
        color: var(--muted-text-dark);
        /* Teks muted di dark mode */
        padding: 80px 0 0 0;
        font-size: 0.95rem;
        border-top: 3px solid var(--primary-luminous-dark);
        /* Aksen atas yang kuat */
    }

    /* Penyesuaian untuk light mode jika diperlukan, tapi kita buat dominan gelap */
    body:not(.dark-mode) #footerSophisticated {
        background-color: #2C303A;
        /* Abu-abu gelap untuk light mode */
        color: #D0D0D5;
        /* Teks lebih terang di light mode */
        border-top-color: var(--primary-luminous);
    }

    body:not(.dark-mode) #footerSophisticated .footer-section-sophisticated h5,
    body:not(.dark-mode) #footerSophisticated .footer-brand-sophisticated h3 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerSophisticated .footer-links-sophisticated li a,
    body:not(.dark-mode) #footerSophisticated .footer-contact-sophisticated p,
    body:not(.dark-mode) #footerSophisticated .footer-contact-sophisticated p a {
        color: #D0D0D5;
    }

    body:not(.dark-mode) #footerSophisticated .footer-links-sophisticated li a:hover,
    body:not(.dark-mode) #footerSophisticated .footer-contact-sophisticated p a:hover {
        color: var(--secondary-luminous);
    }

    body:not(.dark-mode) #footerSophisticated .footer-section-sophisticated h5::after {
        background-color: var(--secondary-luminous);
    }

    body:not(.dark-mode) #footerSophisticated .social-links-sophisticated a {
        background-color: rgba(255, 215, 0, 0.1);
        /* Warna sekunder transparan */
        color: var(--secondary-luminous);
    }

    body:not(.dark-mode) #footerSophisticated .social-links-sophisticated a:hover {
        background-color: var(--secondary-luminous);
        color: #2C303A;
    }

    body:not(.dark-mode) #footerSophisticated .footer-bottom-sophisticated {
        background-color: #23262F;
        /* Sub-footer lebih gelap lagi */
        border-top-color: #3A3E4A;
    }


    #footerSophisticated .footer-top-sophisticated {
        padding-bottom: 50px;
    }

    #footerSophisticated .footer-brand-sophisticated h3 {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 15px;
    }

    #footerSophisticated .footer-brand-sophisticated h3 i {
        color: var(--secondary-luminous-dark);
        /* Aksen pada ikon */
        margin-right: 12px;
    }

    body:not(.dark-mode) #footerSophisticated .footer-brand-sophisticated h3 i {
        color: var(--secondary-luminous);
    }

    #footerSophisticated .footer-brand-sophisticated p.footer-tagline {
        font-style: italic;
        font-size: 1.05rem;
        margin-bottom: 20px;
        font-family: 'Lato', sans-serif;
    }

    #footerSophisticated .footer-section-sophisticated h5 {
        font-family: 'Playfair Display', serif;
        font-size: 1.4rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 25px;
        padding-bottom: 12px;
        position: relative;
    }

    #footerSophisticated .footer-section-sophisticated h5::after {
        /* Garis bawah dekoratif */
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 3px;
        background-color: var(--secondary-luminous-dark);
    }

    #footerSophisticated .footer-links-sophisticated ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerSophisticated .footer-links-sophisticated ul li {
        margin-bottom: 12px;
    }

    #footerSophisticated .footer-links-sophisticated ul a {
        color: var(--muted-text-dark);
        text-decoration: none;
        transition: color 0.3s ease, letter-spacing 0.3s ease;
        display: inline-block;
        font-family: 'Lato', sans-serif;
    }

    #footerSophisticated .footer-links-sophisticated ul a:hover {
        color: var(--secondary-luminous-dark);
        letter-spacing: 0.5px;
        /* Sedikit spasi saat hover */
    }

    #footerSophisticated .footer-contact-sophisticated p {
        margin-bottom: 12px;
        line-height: 1.7;
        display: flex;
        align-items: flex-start;
    }

    #footerSophisticated .footer-contact-sophisticated i {
        color: var(--secondary-luminous-dark);
        margin-right: 12px;
        font-size: 1.1rem;
        margin-top: 5px;
        width: 20px;
    }

    body:not(.dark-mode) #footerSophisticated .footer-contact-sophisticated i {
        color: var(--secondary-luminous);
    }

    #footerSophisticated .footer-contact-sophisticated a {
        color: var(--muted-text-dark);
        text-decoration: none;
    }

    #footerSophisticated .footer-contact-sophisticated a:hover {
        color: var(--secondary-luminous-dark);
        text-decoration: underline;
    }

    #footerSophisticated .social-links-sophisticated a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        border-radius: 5px;
        /* Sedikit kotak */
        background-color: rgba(var(--secondary-luminous-dark-rgb, 255, 235, 153), 0.1);
        color: var(--secondary-luminous-dark);
        margin-right: 10px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.3rem;
    }

    #footerSophisticated .social-links-sophisticated a:hover {
        background-color: var(--secondary-luminous-dark);
        color: var(--bg-dark);
        transform: translateY(-3px) rotate(5deg);
        /* Efek hover unik */
    }

    #footerSophisticated .footer-bottom-sophisticated {
        background-color: var(--bg-dark);
        /* Sub-footer lebih gelap */
        padding: 30px 0;
        margin-top: 60px;
        border-top: 1px solid var(--border-dark);
        text-align: center;
    }

    #footerSophisticated .copyright-text-sophisticated {
        margin: 0;
        font-size: 0.9rem;
    }

    #footerSophisticated .credits-text-sophisticated a {
        color: var(--secondary-luminous-dark);
        text-decoration: none;
        font-weight: 500;
    }

    body:not(.dark-mode) #footerSophisticated .credits-text-sophisticated a {
        color: var(--secondary-luminous);
    }

    #footerSophisticated .credits-text-sophisticated a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerSophisticated">
    <div class="footer-top-sophisticated">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-sophisticated" data-aos="fade-up" data-aos-delay="100">
                    <h3><i class="fas fa-gem"></i> AuroraCorp</h3>
                    <p class="footer-tagline">Menerangi Jalan Menuju Kesuksesan Digital Anda.</p>
                    <p>Kami berkomitmen untuk memberikan solusi teknologi yang inovatif, elegan, dan berdampak, membantu bisnis Anda mencapai potensi penuhnya di era digital.</p>
                    <div class="social-links-sophisticated mt-4">
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-sophisticated footer-links-sophisticated" data-aos="fade-up" data-aos-delay="200">
                    <h5>Perusahaan</h5>
                    <ul>
                        <li><a href="#aboutRefined">Tentang Kami</a></li>
                        <li><a href="#">Tim Kami</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#blogHighlightsElegant">Blog</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-sophisticated footer-links-sophisticated" data-aos="fade-up" data-aos-delay="300">
                    <h5>Layanan Utama</h5>
                    <ul>
                        <li><a href="#servicesShowcaseElegant">Strategi Digital</a></li>
                        <li><a href="#servicesShowcaseElegant">Desain UI/UX</a></li>
                        <li><a href="#servicesShowcaseElegant">Pengembangan Web</a></li>
                        <li><a href="#servicesShowcaseElegant">Aplikasi Mobile</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-sophisticated footer-contact-sophisticated" data-aos="fade-up" data-aos-delay="400">
                    <h5>Hubungi Kami</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Aurora Indah No. 1, Suite 88, Kota Metropolitan, Indonesia</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+62215550101">(021) 555-0101</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:kontak@auroracorp.id">kontak@auroracorp.id</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-sophisticated">
        <div class="container">
            <p class="copyright-text-sophisticated">&copy; <?php echo date("Y"); ?> <strong><span>AuroraCorp</span></strong>. Semua Hak Dilindungi.</p>
            <p class="credits-text-sophisticated mt-1">Dirancang dengan Elegansi oleh <a href="#">Tim Desain Aurora</a></p>
        </div>
    </div>
</footer>