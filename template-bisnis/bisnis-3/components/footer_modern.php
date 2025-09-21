<?php // File: components/footer_modern.php 
?>
<style>
    /* Modern Footer Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --card-bg: #1E1E1E;
        --dark-bg: #121212;
        --border-color: rgba(0, 255, 237, 0.2);
        --text-color-muted: #B0B0B0;
    }

    #footerModern {
        background-color: var(--card-bg);
        /* Latar lebih terang dari body */
        color: var(--text-color-muted);
        padding: 80px 0 0 0;
        /* Padding atas, tanpa bawah untuk sub-footer */
        font-size: 0.95rem;
        border-top: 2px solid var(--accent-color);
        /* Garis aksen tebal di atas footer */
    }

    #footerModern .footer-top-modern {
        padding-bottom: 50px;
    }

    #footerModern .footer-brand h3 {
        font-family: 'Roboto Mono', monospace;
        font-size: 2.2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
    }

    #footerModern .footer-brand h3 .logo-icon {
        color: var(--accent-color);
        margin-right: 10px;
    }

    #footerModern .footer-brand p.tagline {
        font-style: italic;
        color: var(--text-color-muted);
        margin-bottom: 25px;
        font-size: 1rem;
    }

    #footerModern .footer-section-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #fff;
        margin-bottom: 25px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--border-color);
        position: relative;
    }

    #footerModern .footer-section-title::after {
        /* Indikator garis kecil */
        content: '';
        position: absolute;
        left: 0;
        bottom: -1px;
        /* Tepat di atas border-bottom */
        width: 40px;
        height: 3px;
        background-color: var(--accent-color);
    }

    #footerModern .footer-links-modern ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerModern .footer-links-modern ul li {
        margin-bottom: 12px;
    }

    #footerModern .footer-links-modern ul a {
        color: var(--text-color-muted);
        text-decoration: none;
        transition: color 0.3s ease, padding-left 0.3s ease;
        display: inline-block;
    }

    #footerModern .footer-links-modern ul a:hover {
        color: var(--accent-color);
        padding-left: 5px;
        /* Efek geser saat hover */
    }

    #footerModern .footer-links-modern ul a i {
        /* Ikon untuk link (opsional) */
        margin-right: 8px;
        /* color: var(--accent-color); */
    }

    #footerModern .footer-contact-info p {
        margin-bottom: 12px;
        display: flex;
        align-items: flex-start;
    }

    #footerModern .footer-contact-info i {
        color: var(--accent-color);
        margin-right: 12px;
        font-size: 1.1rem;
        margin-top: 4px;
        /* Sejajarkan dengan baris pertama teks */
        width: 20px;
        /* Jaga lebar ikon agar teks sejajar */
    }

    #footerModern .footer-contact-info a {
        color: var(--text-color-muted);
        text-decoration: none;
    }

    #footerModern .footer-contact-info a:hover {
        color: var(--accent-color);
        text-decoration: underline;
    }

    #footerModern .social-links-modern a {
        display: inline-flex;
        /* Agar align-items & justify-content bekerja */
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(var(--accent-rgb), 0.1);
        /* Latar aksen transparan */
        color: var(--accent-color);
        margin-right: 10px;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
        font-size: 1.2rem;
    }

    #footerModern .social-links-modern a:hover {
        background-color: var(--accent-color);
        color: var(--dark-bg);
        transform: translateY(-3px) scale(1.1);
    }

    #footerModern .footer-bottom-modern {
        background-color: var(--dark-bg);
        /* Latar lebih gelap untuk sub-footer */
        padding: 25px 0;
        margin-top: 60px;
        /* Jarak dari konten atas footer */
        border-top: 1px solid var(--border-color);
        text-align: center;
    }

    #footerModern .copyright-text {
        margin: 0;
        font-size: 0.9rem;
    }

    #footerModern .credits-text a {
        color: var(--accent-color);
        text-decoration: none;
        font-weight: 500;
    }

    #footerModern .credits-text a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerModern">
    <div class="footer-top-modern">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand" data-aos="fade-up" data-aos-delay="100">
                    <h3><i class="fas fa-atom logo-icon"></i> NamaBisnis</h3>
                    <p class="tagline">Mendorong Inovasi, Mewujudkan Masa Depan Digital.</p>
                    <p>Kami adalah mitra teknologi Anda yang berdedikasi untuk memberikan solusi canggih dan layanan berkualitas tinggi untuk pertumbuhan bisnis yang berkelanjutan.</p>
                    <div class="social-links-modern mt-4">
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-links-modern" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="footer-section-title">Perusahaan</h4>
                    <ul>
                        <li><a href="#aboutStorytelling"><i class="fas fa-angle-right"></i> Tentang Kami</a></li>
                        <li><a href="#teamShowcase"><i class="fas fa-angle-right"></i> Tim Kami</a></li>
                        <li><a href="careers.php"><i class="fas fa-angle-right"></i> Karir</a></li>
                        <li><a href="#blogPreview"><i class="fas fa-angle-right"></i> Blog & Berita</a></li>
                        <li><a href="press.php"><i class="fas fa-angle-right"></i> Pers</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-links-modern" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="footer-section-title">Solusi Utama</h4>
                    <ul>
                        <li><a href="#servicesDynamicTabs"><i class="fas fa-angle-right"></i> AI & Machine Learning</a></li>
                        <li><a href="#servicesDynamicTabs"><i class="fas fa-angle-right"></i> IoT & Edge Computing</a></li>
                        <li><a href="#servicesDynamicTabs"><i class="fas fa-angle-right"></i> Blockchain Solutions</a></li>
                        <li><a href="#servicesDynamicTabs"><i class="fas fa-angle-right"></i> Advanced CyberSecurity</a></li>
                        <li><a href="#portfolioMasonryHover"><i class="fas fa-angle-right"></i> Studi Kasus</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-contact-info" data-aos="fade-up" data-aos-delay="400">
                    <h4 class="footer-section-title">Hubungi Kami</h4>
                    <p><i class="fas fa-map-marker-alt"></i> CyberTower Lt. 25, Jl. Matrix No. 1, Jakarta Digital Valley, Indonesia</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+622198765432">+62 21 9876 5432</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:halo@namabisnis.co.id">halo@namabisnis.co.id</a></p>
                    <p><i class="fas fa-headset"></i> <a href="support.php">Pusat Bantuan</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-modern">
        <div class="container">
            <p class="copyright-text">&copy; <?php echo date("Y"); ?> <strong><span>NamaBisnis Anda</span></strong>. Semua Hak Dilindungi.</p>
            <p class="credits-text">Dirancang dengan <i class="fas fa-heart mx-1" style="color: var(--accent-color);"></i> oleh <a href="https://[websitekreator].com/">Tim Kreator Anda</a></p>
        </div>
    </div>
</footer>