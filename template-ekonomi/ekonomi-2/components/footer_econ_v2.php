<?php // File: components_econ_v2/footer_econ_v2.php - Footer Vertex Capital Partners 
?>
<style>
    /* Styles untuk Footer Vertex Capital Partners */
    #footerVertexCapital {
        background-color: var(--text-light-vertex);
        /* Warna gelap untuk footer, kontras dengan body light */
        color: rgba(var(--bg-light-vertex-rgb), 0.75);
        /* Teks terang di atas latar gelap */
        padding: 60px 0 0 0;
        font-size: 0.9rem;
        border-top: 3px solid var(--primary-vertex);
        /* Aksen atas dengan warna primer */
    }

    body.dark-mode #footerVertexCapital {
        background-color: #071321;
        /* Biru malam paling gelap, sedikit beda dari bg utama dark */
        color: var(--muted-text-dark-vertex);
        border-top: 3px solid var(--primary-vertex-dark);
    }

    #footerVertexCapital .footer-top-vertex {
        padding-bottom: 35px;
        border-bottom: 1px solid rgba(var(--bg-light-vertex-rgb), 0.1);
    }

    body.dark-mode #footerVertexCapital .footer-top-vertex {
        border-bottom-color: rgba(var(--border-dark-vertex-rgb), 0.4);
    }

    #footerVertexCapital .footer-brand-vertex .logo-icon-footer-vertex {
        color: var(--secondary-vertex);
        font-size: 1.7em;
    }

    body.dark-mode #footerVertexCapital .footer-brand-vertex .logo-icon-footer-vertex {
        color: var(--secondary-vertex-dark);
    }

    #footerVertexCapital .footer-brand-vertex .brand-text-footer-vertex {
        color: #FFFFFF;
        font-weight: 700;
        /* Brand text lebih tegas */
    }

    body.dark-mode #footerVertexCapital .footer-brand-vertex .brand-text-footer-vertex {
        color: var(--text-dark-vertex);
    }

    #footerVertexCapital .footer-brand-vertex p.footer-tagline-vertex {
        font-size: 0.92rem;
        margin-bottom: 18px;
        line-height: 1.65;
        opacity: 0.8;
        font-family: 'Lato', sans-serif;
        /* Font Lato untuk tagline */
    }

    #footerVertexCapital .footer-section-title-vertex {
        font-family: 'Raleway', sans-serif;
        /* Font Raleway untuk judul section */
        font-size: 1.15rem;
        font-weight: 700;
        color: #FFFFFF;
        margin-bottom: 18px;
        padding-bottom: 7px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    body.dark-mode #footerVertexCapital .footer-section-title-vertex {
        color: var(--text-dark-vertex);
    }

    #footerVertexCapital .footer-section-title-vertex::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 32px;
        height: 2.5px;
        /* Garis lebih tebal */
        background-color: var(--secondary-vertex);
        border-radius: 1px;
    }

    body.dark-mode #footerVertexCapital .footer-section-title-vertex::after {
        background-color: var(--secondary-vertex-dark);
    }

    #footerVertexCapital .footer-links-vertex ul a {
        color: rgba(var(--bg-light-vertex-rgb), 0.7);
        opacity: 0.8;
        font-size: 0.88rem;
        transition: color 0.25s ease, padding-left 0.25s ease, opacity 0.25s ease;
        font-family: 'Lato', sans-serif;
        /* Font Lato untuk link */
    }

    body.dark-mode #footerVertexCapital .footer-links-vertex ul a {
        color: var(--muted-text-dark-vertex);
    }

    #footerVertexCapital .footer-links-vertex ul a:hover {
        color: var(--secondary-vertex);
        padding-left: 4px;
        opacity: 1;
    }

    body.dark-mode #footerVertexCapital .footer-links-vertex ul a:hover {
        color: var(--secondary-vertex-dark);
    }

    #footerVertexCapital .footer-contact-vertex p {
        font-size: 0.88rem;
        line-height: 1.6;
        font-family: 'Lato', sans-serif;
    }

    #footerVertexCapital .footer-contact-vertex p i {
        color: var(--secondary-vertex);
        margin-right: 8px;
        margin-top: 3px;
        width: 15px;
    }

    body.dark-mode #footerVertexCapital .footer-contact-vertex p i {
        color: var(--secondary-vertex-dark);
    }

    #footerVertexCapital .footer-contact-vertex p a:hover {
        color: var(--secondary-vertex);
    }

    body.dark-mode #footerVertexCapital .footer-contact-vertex p a:hover {
        color: var(--secondary-vertex-dark);
    }


    #footerVertexCapital .social-icons-vertex a {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        /* Ikon sosial bulat */
        background-color: rgba(var(--bg-light-vertex-rgb), 0.1);
        color: #FFFFFF;
        font-size: 1rem;
        border: 1px solid rgba(var(--bg-light-vertex-rgb), 0.15);
        /* Border halus */
    }

    body.dark-mode #footerVertexCapital .social-icons-vertex a {
        background-color: rgba(var(--border-dark-vertex-rgb), 0.25);
        color: var(--muted-text-dark-vertex);
        border-color: rgba(var(--border-dark-vertex-rgb), 0.3);
    }

    #footerVertexCapital .social-icons-vertex a:hover {
        background-color: var(--secondary-vertex);
        color: var(--text-light-vertex);
        transform: scale(1.1) translateY(-2px);
        /* Efek hover lebih menarik */
        border-color: var(--secondary-vertex);
    }

    body.dark-mode #footerVertexCapital .social-icons-vertex a:hover {
        background-color: var(--secondary-vertex-dark);
        color: var(--bg-dark-vertex);
        border-color: var(--secondary-vertex-dark);
    }

    #footerVertexCapital .footer-bottom-vertex {
        background-color: rgba(0, 0, 0, 0.18);
        padding: 18px 0;
        margin-top: 40px;
        font-size: 0.82rem;
    }

    body.dark-mode #footerVertexCapital .footer-bottom-vertex {
        background-color: rgba(0, 0, 0, 0.3);
        /* Lebih gelap untuk kontras */
    }

    #footerVertexCapital .credits-vertex a {
        color: var(--secondary-vertex);
        font-weight: 500;
    }

    body.dark-mode #footerVertexCapital .credits-vertex a {
        color: var(--secondary-vertex-dark);
    }
</style>

<footer id="footerVertexCapital">
    <div class="footer-top-vertex">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-12 footer-brand-vertex" data-aos="fade-up" data-aos-delay="100">
                    <a class="navbar-brand d-flex align-items-center mb-2" href="index.php">
                        <i class="fas fa-crescent logo-icon-footer-vertex me-2"></i>
                        <span class="fs-4 font-raleway brand-text-footer-vertex">VertexCapital</span>
                    </a>
                    <p class="footer-tagline-vertex">
                        Membimbing Anda menuju puncak potensi finansial dengan strategi investasi yang cerdas dan pertumbuhan yang berkelanjutan.
                    </p>
                    <div class="social-icons-vertex mt-3">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Medium"><i class="fab fa-medium-m"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-links-vertex" data-aos="fade-up" data-aos-delay="150">
                    <h5 class="footer-section-title-vertex">Perusahaan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#aboutVertex"><i class="fas fa-angle-right me-1 opacity-70"></i> Tentang Kami</a></li>
                        <li><a href="#servicesVertex"><i class="fas fa-angle-right me-1 opacity-70"></i> Layanan</a></li>
                        <li><a href="#"><i class="fas fa-angle-right me-1 opacity-70"></i> Tim Kami</a></li>
                        <li><a href="#"><i class="fas fa-angle-right me-1 opacity-70"></i> Karir</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-links-vertex" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="footer-section-title-vertex">Area Fokus</h5>
                    <ul class="list-unstyled">
                        <li><a href="#servicesVertex"><i class="fas fa-angle-right me-1 opacity-70"></i> Riset Pasar</a></li>
                        <li><a href="#servicesVertex"><i class="fas fa-angle-right me-1 opacity-70"></i> Manajemen Aset</a></li>
                        <li><a href="#servicesVertex"><i class="fas fa-angle-right me-1 opacity-70"></i> Strategi Pertumbuhan</a></li>
                        <li><a href="#marketInsightsVertex"><i class="fas fa-angle-right me-1 opacity-70"></i> Wawasan Industri</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-contact-vertex" data-aos="fade-up" data-aos-delay="250">
                    <h5 class="footer-section-title-vertex">Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Vertex Tower, Financial District, Jakarta</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+62215550123">(021) 555 0123</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@vertexcapital.co.id">info@vertexcapital.co.id</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-vertex">
        <div class="container">
            <p class="copyright-vertex mb-0">&copy; <?php echo date("Y"); ?> <strong><span>Vertex Capital Partners</span></strong>. Semua Hak Dilindungi.</p>
            <p class="credits-vertex mt-1 mb-0">
                Desain oleh <a href="#">Tim Kreatif Vertex</a>
            </p>
        </div>
    </div>
</footer>

<script>
    // Komentar JavaScript: Script khusus untuk Footer (jika ada interaksi tambahan)
    // document.addEventListener('DOMContentLoaded', function () {
    //     if (typeof anime !== 'undefined') {
    //         // Contoh: Animasi untuk social icons saat footer masuk viewport
    //         const footerSocialIcons = document.querySelectorAll('#footerVertexCapital .social-icons-vertex a');
    //         if (footerSocialIcons.length > 0) {
    //             const observer = new IntersectionObserver((entries) => {
    //                 entries.forEach(entry => {
    //                     if (entry.isIntersecting) {
    //                         anime({
    //                             targets: footerSocialIcons,
    //                             translateY: [15, 0], // Naik dari bawah
    //                             opacity: [0,1],
    //                             scale: [0.8, 1], // Sedikit membesar
    //                             delay: anime.stagger(70, {start: (parseInt(entry.target.closest('[data-aos-delay]')?.dataset.aosDelay || 0) + 100)}),
    //                             easing: 'easeOutExpo',
    //                             duration: 600
    //                         });
    //                         observer.unobserve(entry.target.parentElement); 
    //                     }
    //                 });
    //             }, { threshold: 0.2 }); // Trigger saat 20% elemen terlihat

    //             const socialIconsContainer = document.querySelector('#footerVertexCapital .social-icons-vertex');
    //             if (socialIconsContainer) {
    //                footerSocialIcons.forEach(icon => { icon.style.opacity = 0; }); // Sembunyikan awal
    //                observer.observe(socialIconsContainer);
    //             }
    //         }
    //     }
    // });
</script>