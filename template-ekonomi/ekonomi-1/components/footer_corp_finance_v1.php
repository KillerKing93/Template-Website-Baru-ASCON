<?php // File: components_econ_v1/footer_corp_finance_v1.php - Footer Perusahaan Ekonomi (Perbaikan V2) 
?>
<style>
    /* Styles untuk Footer Perusahaan Ekonomi */
    #footerCorpFinance {
        background-color: var(--text-light-econ);
        color: var(--bg-light-econ);
        padding: 45px 0 0 0;
        font-size: 0.88rem;
        /* Ukuran font dasar footer */
    }

    body.dark-mode #footerCorpFinance {
        background-color: #0D1724;
        /* Warna biru malam paling gelap */
        color: var(--muted-text-dark-econ);
    }

    #footerCorpFinance .footer-top-econ {
        padding-bottom: 30px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.07);
    }

    body.dark-mode #footerCorpFinance .footer-top-econ {
        border-bottom-color: rgba(var(--border-dark-econ-rgb), 0.4);
    }

    #footerCorpFinance .footer-brand-econ .logo-icon-footer-econ {
        color: var(--secondary-econ);
        font-size: 1.5em;
    }

    body.dark-mode #footerCorpFinance .footer-brand-econ .logo-icon-footer-econ {
        color: var(--secondary-econ-dark);
    }

    #footerCorpFinance .footer-brand-econ .brand-text-footer {
        color: #fff;
    }

    body.dark-mode #footerCorpFinance .footer-brand-econ .brand-text-footer {
        color: var(--text-dark-econ);
    }

    #footerCorpFinance .footer-brand-econ p.footer-tagline-econ {
        font-size: 0.88rem;
        margin-bottom: 16px;
        /* Margin disesuaikan */
        line-height: 1.6;
        opacity: 0.8;
    }

    #footerCorpFinance .footer-section-title-econ {
        font-family: 'Oswald', sans-serif;
        font-size: 1.05rem;
        font-weight: 500;
        color: #fff;
        margin-bottom: 16px;
        padding-bottom: 6px;
        position: relative;
        text-transform: uppercase;
    }

    body.dark-mode #footerCorpFinance .footer-section-title-econ {
        color: var(--text-dark-econ);
    }

    #footerCorpFinance .footer-section-title-econ::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 28px;
        height: 2px;
        background-color: var(--secondary-econ);
    }

    body.dark-mode #footerCorpFinance .footer-section-title-econ::after {
        background-color: var(--secondary-econ-dark);
    }

    #footerCorpFinance .footer-links-econ ul a {
        color: var(--bg-light-econ);
        opacity: 0.7;
        font-size: 0.85rem;
        transition: color 0.25s ease, padding-left 0.25s ease, opacity 0.25s ease;
        /* Transisi lebih cepat */
    }

    body.dark-mode #footerCorpFinance .footer-links-econ ul a {
        color: var(--muted-text-dark-econ);
    }

    #footerCorpFinance .footer-links-econ ul a:hover {
        color: var(--secondary-econ);
        padding-left: 3px;
        opacity: 1;
    }

    body.dark-mode #footerCorpFinance .footer-links-econ ul a:hover {
        color: var(--secondary-econ-dark);
    }

    #footerCorpFinance .footer-contact-econ p {
        font-size: 0.85rem;
        line-height: 1.55;
        /* Spasi baris disesuaikan */
    }

    #footerCorpFinance .footer-contact-econ p i {
        color: var(--secondary-econ);
        margin-right: 7px;
        margin-top: 2px;
        /* Penyesuaian vertikal ikon */
        width: 14px;
        /* Lebar ikon disesuaikan */
    }

    body.dark-mode #footerCorpFinance .footer-contact-econ p i {
        color: var(--secondary-econ-dark);
    }

    #footerCorpFinance .social-icons-econ a {
        width: 34px;
        height: 34px;
        border-radius: 4px;
        background-color: rgba(255, 255, 255, 0.07);
        color: #fff;
        font-size: 0.95rem;
    }

    body.dark-mode #footerCorpFinance .social-icons-econ a {
        background-color: rgba(var(--border-dark-econ-rgb), 0.2);
        color: var(--muted-text-dark-econ);
    }

    #footerCorpFinance .social-icons-econ a:hover {
        background-color: var(--secondary-econ);
        color: var(--text-light-econ);
        transform: scale(1.06);
    }

    body.dark-mode #footerCorpFinance .social-icons-econ a:hover {
        background-color: var(--secondary-econ-dark);
        color: var(--bg-dark-econ);
    }

    #footerCorpFinance .footer-bottom-econ {
        background-color: rgba(0, 0, 0, 0.18);
        padding: 16px 0;
        margin-top: 30px;
        font-size: 0.8rem;
    }

    body.dark-mode #footerCorpFinance .footer-bottom-econ {
        background-color: rgba(0, 0, 0, 0.3);
    }

    #footerCorpFinance .credits-econ a {
        color: var(--secondary-econ);
        font-weight: 500;
        /* Font weight untuk credits */
    }

    body.dark-mode #footerCorpFinance .credits-econ a {
        color: var(--secondary-econ-dark);
    }
</style>

<footer id="footerCorpFinance">
    <div class="footer-top-econ">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-12 footer-brand-econ" data-aos="fade-up" data-aos-delay="100">
                    <a class="navbar-brand d-flex align-items-center mb-2" href="index.php">
                        <i class="fas fa-chart-line logo-icon-footer-econ me-2"></i>
                        <span class="fw-bold fs-4 font-oswald brand-text-footer">QuantumLeap</span>
                    </a>
                    <p class="footer-tagline-econ">
                        Membuka potensi finansial Anda dengan solusi inovatif dan strategi yang terukur untuk pertumbuhan berkelanjutan.
                    </p>
                    <div class="social-icons-econ mt-3">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-links-econ" data-aos="fade-up" data-aos-delay="150"> <?php // Delay disesuaikan 
                                                                                                                ?>
                    <h5 class="footer-section-title-econ">Perusahaan</h5>
                    <ul>
                        <li><a href="#about"><i class="fas fa-angle-right me-1 opacity-70"></i> Tentang Kami</a></li>
                        <li><a href="#services"><i class="fas fa-angle-right me-1 opacity-70"></i> Layanan</a></li>
                        <li><a href="#"><i class="fas fa-angle-right me-1 opacity-70"></i> Karir</a></li>
                        <li><a href="#insights"><i class="fas fa-angle-right me-1 opacity-70"></i> Wawasan</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-links-econ" data-aos="fade-up" data-aos-delay="200"> <?php // Delay disesuaikan 
                                                                                                                ?>
                    <h5 class="footer-section-title-econ">Solusi Kami</h5>
                    <ul>
                        <li><a href="#services"><i class="fas fa-angle-right me-1 opacity-70"></i> Analisis Keuangan</a></li>
                        <li><a href="#services"><i class="fas fa-angle-right me-1 opacity-70"></i> Manajemen Investasi</a></li>
                        <li><a href="#services"><i class="fas fa-angle-right me-1 opacity-70"></i> Konsultasi Risiko</a></li>
                        <li><a href="#services"><i class="fas fa-angle-right me-1 opacity-70"></i> Pendanaan Bisnis</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-contact-econ" data-aos="fade-up" data-aos-delay="250"> <?php // Delay disesuaikan 
                                                                                                            ?>
                    <h5 class="footer-section-title-econ">Hubungi Kami</h5>
                    <p><i class="fas fa-map-marker-alt"></i> QuantumLeap Tower, Jakarta</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+622150012345">(021) 500 12345</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@quantumleap.finance">info@quantumleap.finance</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-econ">
        <div class="container">
            <p class="copyright-econ">&copy; <?php echo date("Y"); ?> <strong><span>QuantumLeap Finance</span></strong>. Semua Hak Dilindungi.</p>
            <p class="credits-econ mt-1">
                Dirancang oleh <a href="#">Tim QuantumLeap</a>
            </p>
        </div>
    </div>
</footer>

<script>
    // Komentar JavaScript: Script khusus untuk Footer
    // document.addEventListener('DOMContentLoaded', function () {
    //     if (typeof anime !== 'undefined') {
    //         // Animasi untuk social icons saat footer masuk viewport
    //         const footerSocialIcons = document.querySelectorAll('#footerCorpFinance .social-icons-econ a');
    //         if (footerSocialIcons.length > 0) {
    //             const observer = new IntersectionObserver((entries) => {
    //                 entries.forEach(entry => {
    //                     if (entry.isIntersecting) {
    //                         anime({
    //                             targets: footerSocialIcons,
    //                             translateY: [10, 0],
    //                             opacity: [0,1],
    //                             delay: anime.stagger(80, {start: 200}),
    //                             easing: 'easeOutCubic'
    //                         });
    //                         observer.unobserve(entry.target.parentElement); // Observe parent .social-icons-econ
    //                     }
    //                 });
    //             }, { threshold: 0.3 });

    //             if (document.querySelector('#footerCorpFinance .social-icons-econ')) {
    //                observer.observe(document.querySelector('#footerCorpFinance .social-icons-econ'));
    //             }
    //         }
    //     }
    // });
</script>