<?php // File: components/footer_pendidikan_innovateu_links.php 
?>
<style>
    /* Footer Pendidikan InnovateU Links Styles */
    #footerPendidikanInnovateULinks {
        background-color: var(--card-bg-dark-edu4);
        /* Latar gelap untuk footer */
        color: var(--muted-text-dark-edu4);
        padding: 70px 0 0 0;
        font-size: 0.95rem;
        border-top: 4px solid var(--primary-innovate-dark);
        /* Aksen atas */
        position: relative;
        overflow: hidden;
        /* Untuk efek pseudo */
    }

    /* Efek "digital rain" atau "circuit" di latar belakang footer */
    #footerPendidikanInnovateULinks::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            repeating-linear-gradient(45deg, rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.03), rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.03) 1px, transparent 1px, transparent 15px),
            repeating-linear-gradient(-45deg, rgba(var(--secondary-innovate-dark-rgb, 255, 140, 122), 0.03), rgba(var(--secondary-innovate-dark-rgb, 255, 140, 122), 0.03) 1px, transparent 1px, transparent 15px);
        opacity: 0.7;
        z-index: 0;
        animation: footerLinesScroll 50s linear infinite;
    }

    @keyframes footerLinesScroll {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 500px 500px;
        }
    }

    /* Penyesuaian untuk light mode jika footer ingin beda warna */
    body:not(.dark-mode) #footerPendidikanInnovateULinks {
        background-color: #1C3F5F;
        /* Biru tua untuk light mode footer */
        color: #A6B6C6;
        border-top-color: var(--primary-innovate);
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks::before {
        background-image:
            repeating-linear-gradient(45deg, rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.04), rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.04) 1px, transparent 1px, transparent 15px),
            repeating-linear-gradient(-45deg, rgba(var(--secondary-innovate-rgb, 255, 111, 97), 0.04), rgba(var(--secondary-innovate-rgb, 255, 111, 97), 0.04) 1px, transparent 1px, transparent 15px);
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-section-iu h5,
    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-brand-iu h4 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-links-iu li a,
    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-contact-iu p,
    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-contact-iu p a {
        color: #A6B6C6;
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-links-iu li a:hover,
    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-contact-iu p a:hover {
        color: var(--secondary-innovate);
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-section-iu h5::after {
        background: linear-gradient(90deg, var(--secondary-innovate), var(--accent-innovate));
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks .social-icons-iu a {
        background-color: rgba(255, 111, 97, 0.1);
        /* var(--secondary-innovate) dengan alpha */
        color: var(--secondary-innovate);
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks .social-icons-iu a:hover {
        background-color: var(--secondary-innovate);
        color: #1C3F5F;
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-bottom-iu {
        background-color: #11263C;
        /* Sub-footer lebih gelap lagi */
        border-top-color: #2A405A;
    }


    #footerPendidikanInnovateULinks .container {
        position: relative;
        z-index: 1;
    }

    #footerPendidikanInnovateULinks .footer-top-iu {
        padding-bottom: 45px;
    }

    #footerPendidikanInnovateULinks .footer-brand-iu h4 {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.1rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
    }

    #footerPendidikanInnovateULinks .footer-brand-iu h4 i {
        color: var(--accent-innovate-dark);
        margin-right: 10px;
        font-size: 1.9rem;
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-brand-iu h4 i {
        color: var(--accent-innovate);
    }

    #footerPendidikanInnovateULinks .footer-brand-iu p.footer-mission-iu {
        font-size: 0.95rem;
        margin-bottom: 20px;
        line-height: 1.7;
        opacity: 0.9;
        max-width: 370px;
        font-family: 'Inter', sans-serif;
    }

    #footerPendidikanInnovateULinks .footer-section-iu h5 {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.2rem;
        /* Judul section footer */
        font-weight: 600;
        color: #fff;
        margin-bottom: 20px;
        padding-bottom: 10px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }

    #footerPendidikanInnovateULinks .footer-section-iu h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 35px;
        height: 3px;
        background: linear-gradient(90deg, var(--secondary-innovate-dark), var(--accent-innovate-dark));
        border-radius: 1px;
    }

    #footerPendidikanInnovateULinks .footer-links-iu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPendidikanInnovateULinks .footer-links-iu ul li {
        margin-bottom: 10px;
    }

    #footerPendidikanInnovateULinks .footer-links-iu ul a {
        color: var(--muted-text-dark-edu4);
        text-decoration: none;
        transition: color 0.3s ease, padding-left 0.3s ease;
        display: inline-block;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
    }

    #footerPendidikanInnovateULinks .footer-links-iu ul a:hover {
        color: var(--accent-innovate-dark);
        padding-left: 6px;
    }

    #footerPendidikanInnovateULinks .footer-links-iu ul a i {
        margin-right: 7px;
        font-size: 0.85em;
        opacity: 0.8;
    }


    #footerPendidikanInnovateULinks .footer-contact-iu p {
        margin-bottom: 10px;
        line-height: 1.7;
    }

    #footerPendidikanInnovateULinks .footer-contact-iu p i {
        color: var(--accent-innovate-dark);
        margin-right: 10px;
        width: 18px;
        text-align: center;
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks .footer-contact-iu p i {
        color: var(--accent-innovate);
    }

    #footerPendidikanInnovateULinks .footer-contact-iu p a {
        color: var(--muted-text-dark-edu4);
        text-decoration: none;
    }

    #footerPendidikanInnovateULinks .footer-contact-iu p a:hover {
        color: var(--accent-innovate-dark);
        text-decoration: underline;
    }

    #footerPendidikanInnovateULinks .social-icons-iu a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 5px;
        /* Kotak */
        background-color: rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.12);
        color: var(--accent-innovate-dark);
        margin: 0 4px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    #footerPendidikanInnovateULinks .social-icons-iu a:hover {
        background-color: var(--accent-innovate-dark);
        color: var(--bg-dark-edu4);
        transform: scale(1.1);
    }

    #footerPendidikanInnovateULinks .footer-bottom-iu {
        background-color: var(--bg-dark-edu4);
        /* Sub-footer paling gelap */
        padding: 25px 0;
        margin-top: 50px;
        border-top: 1px solid var(--border-dark-edu4);
        text-align: center;
        font-size: 0.9rem;
    }

    #footerPendidikanInnovateULinks .copyright-iu {
        margin: 0;
    }

    #footerPendidikanInnovateULinks .credits-iu a {
        color: var(--accent-innovate-dark);
        text-decoration: none;
        font-weight: 500;
    }

    body:not(.dark-mode) #footerPendidikanInnovateULinks .credits-iu a {
        color: var(--accent-innovate);
    }

    #footerPendidikanInnovateULinks .credits-iu a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPendidikanInnovateULinks">
    <div class="footer-top-iu">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-iu" data-aos="fade-up" data-aos-delay="100">
                    <h4><i class="fas fa-atom"></i> InnovateU</h4>
                    <p class="footer-mission-iu">"Membentuk masa depan melalui pendidikan yang dinamis, teknologi terdepan, dan kolaborasi tanpa batas."</p>
                    <div class="social-icons-iu mt-3">
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-iu footer-links-iu" data-aos="fade-up" data-aos-delay="200">
                    <h5>Navigasi</h5>
                    <ul>
                        <li><a href="#heroPendidikanInnovateuDynamic"><i class="fas fa-angle-right"></i> Beranda</a></li>
                        <li><a href="#tentangKamiPendidikanFuturistik"><i class="fas fa-angle-right"></i> Tentang</a></li>
                        <li><a href="#kurikulumAdaptifPendidikan"><i class="fas fa-angle-right"></i> Kurikulum</a></li>
                        <li><a href="#eventWorkshopVirtualPendidikan"><i class="fas fa-angle-right"></i> Acara</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-iu footer-links-iu" data-aos="fade-up" data-aos-delay="300">
                    <h5>Sumber Daya</h5>
                    <ul>
                        <li><a href="#pusatRisetKolaborasiPendidikan"><i class="fas fa-angle-right"></i> Pusat Riset</a></li>
                        <li><a href="#labVirtualPendidikan"><i class="fas fa-angle-right"></i> Lab Virtual</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Blog & Publikasi</a></li>
                        <li><a href="#jaringanAlumniGlobalPendidikan"><i class="fas fa-angle-right"></i> Jaringan Alumni</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-iu footer-contact-iu" data-aos="fade-up" data-aos-delay="400">
                    <h5>Hubungi Kami</h5>
                    <p><i class="fas fa-map-marker-alt"></i> InnovateU Tower, CyberCity, Indonesia</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+622111223344">(021) 1122-3344</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:hello@innovateu.id">hello@innovateu.id</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-iu">
        <div class="container">
            <p class="copyright-iu">&copy; <?php echo date("Y"); ?> <strong><span>InnovateU Campus</span></strong>. All Digital Rights Reserved.</p>
            <p class="credits-iu mt-1">
                Powered by <a href="#">InnovateU Labs</a>
            </p>
        </div>
    </div>
</footer>