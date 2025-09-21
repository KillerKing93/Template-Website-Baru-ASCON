<?php // File: components/footer_pendidikan_modern_v2.php 
?>
<style>
    /* Footer Pendidikan Modern v2 Styles */
    #footerPendidikanModernV2 {
        background-color: var(--card-bg-dark-edu2);
        /* Latar gelap untuk footer */
        color: var(--muted-text-dark-edu2);
        padding: 70px 0 0 0;
        font-size: 0.95rem;
        border-top: 4px solid var(--primary-edu2-dark);
        /* Aksen atas */
        position: relative;
        overflow: hidden;
        /* Untuk efek pseudo */
    }

    /* Efek "digital rain" atau "circuit" di latar belakang footer */
    #footerPendidikanModernV2::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            repeating-linear-gradient(0deg, rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.02), rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.02) 1px, transparent 1px, transparent 20px),
            repeating-linear-gradient(90deg, rgba(var(--secondary-edu2-dark-rgb, 255, 135, 135), 0.02), rgba(var(--secondary-edu2-dark-rgb, 255, 135, 135), 0.02) 1px, transparent 1px, transparent 20px);
        opacity: 0.5;
        z-index: 0;
        animation: footerBgScroll 40s linear infinite;
    }

    @keyframes footerBgScroll {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: -400px -400px;
        }

        /* Sesuaikan untuk kecepatan scroll pattern */
    }

    /* Penyesuaian untuk light mode jika footer ingin beda warna */
    body:not(.dark-mode) #footerPendidikanModernV2 {
        background-color: #2C3E50;
        /* Biru abu-abu gelap untuk light mode footer */
        color: #BDC3C7;
        border-top-color: var(--primary-edu2);
    }

    body:not(.dark-mode) #footerPendidikanModernV2::before {
        background-image:
            repeating-linear-gradient(0deg, rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.03), rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.03) 1px, transparent 1px, transparent 20px),
            repeating-linear-gradient(90deg, rgba(var(--secondary-edu2-rgb, 255, 107, 107), 0.03), rgba(var(--secondary-edu2-rgb, 255, 107, 107), 0.03) 1px, transparent 1px, transparent 20px);
    }

    body:not(.dark-mode) #footerPendidikanModernV2 .footer-section-edu2 h5,
    body:not(.dark-mode) #footerPendidikanModernV2 .footer-brand-edu2 h4 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerPendidikanModernV2 .footer-links-edu2 li a,
    body:not(.dark-mode) #footerPendidikanModernV2 .footer-contact-edu2 p,
    body:not(.dark-mode) #footerPendidikanModernV2 .footer-contact-edu2 p a {
        color: #BDC3C7;
    }

    body:not(.dark-mode) #footerPendidikanModernV2 .footer-links-edu2 li a:hover,
    body:not(.dark-mode) #footerPendidikanModernV2 .footer-contact-edu2 p a:hover {
        color: var(--secondary-edu2);
    }

    body:not(.dark-mode) #footerPendidikanModernV2 .footer-section-edu2 h5::after {
        background: linear-gradient(90deg, var(--secondary-edu2), var(--accent-edu2));
    }

    body:not(.dark-mode) #footerPendidikanModernV2 .social-icons-edu2 a {
        background-color: rgba(255, 107, 107, 0.1);
        /* var(--secondary-edu2) dengan alpha */
        color: var(--secondary-edu2);
    }

    body:not(.dark-mode) #footerPendidikanModernV2 .social-icons-edu2 a:hover {
        background-color: var(--secondary-edu2);
        color: #2C3E50;
    }

    body:not(.dark-mode) #footerPendidikanModernV2 .footer-bottom-edu2 {
        background-color: #1F2B38;
        /* Sub-footer lebih gelap lagi */
        border-top-color: #3A4B5C;
    }


    #footerPendidikanModernV2 .container {
        position: relative;
        z-index: 1;
    }

    #footerPendidikanModernV2 .footer-top-edu2 {
        padding-bottom: 45px;
    }

    #footerPendidikanModernV2 .footer-brand-edu2 h4 {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
    }

    #footerPendidikanModernV2 .footer-brand-edu2 h4 i {
        color: var(--accent-edu2-dark);
        margin-right: 10px;
        font-size: 1.8rem;
    }

    body:not(.dark-mode) #footerPendidikanModernV2 .footer-brand-edu2 h4 i {
        color: var(--accent-edu2);
    }

    #footerPendidikanModernV2 .footer-brand-edu2 p.footer-tagline-edu2 {
        font-size: 0.95rem;
        margin-bottom: 20px;
        line-height: 1.7;
        opacity: 0.9;
        max-width: 360px;
        font-family: 'Montserrat', sans-serif;
    }

    #footerPendidikanModernV2 .footer-section-edu2 h5 {
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

    #footerPendidikanModernV2 .footer-section-edu2 h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 35px;
        height: 3px;
        background: linear-gradient(90deg, var(--secondary-edu2-dark), var(--accent-edu2-dark));
        border-radius: 1px;
    }

    #footerPendidikanModernV2 .footer-links-edu2 ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPendidikanModernV2 .footer-links-edu2 ul li {
        margin-bottom: 10px;
    }

    #footerPendidikanModernV2 .footer-links-edu2 ul a {
        color: var(--muted-text-dark-edu2);
        text-decoration: none;
        transition: color 0.3s ease, padding-left 0.3s ease;
        display: inline-block;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
    }

    #footerPendidikanModernV2 .footer-links-edu2 ul a:hover {
        color: var(--accent-edu2-dark);
        padding-left: 6px;
    }

    #footerPendidikanModernV2 .footer-links-edu2 ul a i {
        margin-right: 7px;
        font-size: 0.85em;
        opacity: 0.8;
    }


    #footerPendidikanModernV2 .footer-contact-edu2 p {
        margin-bottom: 10px;
        line-height: 1.7;
    }

    #footerPendidikanModernV2 .footer-contact-edu2 p i {
        color: var(--accent-edu2-dark);
        margin-right: 10px;
        width: 18px;
        text-align: center;
    }

    body:not(.dark-mode) #footerPendidikanModernV2 .footer-contact-edu2 p i {
        color: var(--accent-edu2);
    }

    #footerPendidikanModernV2 .footer-contact-edu2 p a {
        color: var(--muted-text-dark-edu2);
        text-decoration: none;
    }

    #footerPendidikanModernV2 .footer-contact-edu2 p a:hover {
        color: var(--accent-edu2-dark);
        text-decoration: underline;
    }

    #footerPendidikanModernV2 .social-icons-edu2 a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 5px;
        /* Kotak */
        background-color: rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.1);
        color: var(--accent-edu2-dark);
        margin: 0 5px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    #footerPendidikanModernV2 .social-icons-edu2 a:hover {
        background-color: var(--accent-edu2-dark);
        color: var(--bg-dark-edu2);
        transform: scale(1.1);
    }

    #footerPendidikanModernV2 .footer-bottom-edu2 {
        background-color: var(--bg-dark-edu2);
        /* Sub-footer paling gelap */
        padding: 25px 0;
        margin-top: 50px;
        border-top: 1px solid var(--border-dark-edu2);
        text-align: center;
        font-size: 0.9rem;
    }

    #footerPendidikanModernV2 .copyright-edu2 {
        margin: 0;
    }

    #footerPendidikanModernV2 .credits-edu2 a {
        color: var(--accent-edu2-dark);
        text-decoration: none;
        font-weight: 500;
    }

    body:not(.dark-mode) #footerPendidikanModernV2 .credits-edu2 a {
        color: var(--accent-edu2);
    }

    #footerPendidikanModernV2 .credits-edu2 a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPendidikanModernV2">
    <div class="footer-top-edu2">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-edu2" data-aos="fade-up" data-aos-delay="100">
                    <h4><i class="fas fa-atom"></i> EduVerse Campus</h4>
                    <p class="footer-tagline-edu2">"Merajut Jaringan Pengetahuan, Membangun Ekosistem Inovasi Digital."</p>
                    <div class="social-icons-edu2 mt-3">
                        <a href="#" title="Discord"><i class="fab fa-discord"></i></a>
                        <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Reddit"><i class="fab fa-reddit-alien"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-edu2 footer-links-edu2" data-aos="fade-up" data-aos-delay="200">
                    <h5>Navigasi</h5>
                    <ul>
                        <li><a href="#heroPendidikanEduverseInteractive"><i class="fas fa-angle-right"></i> Beranda</a></li>
                        <li><a href="#tentangKamiPendidikanDigital"><i class="fas fa-angle-right"></i> Tentang</a></li>
                        <li><a href="#programStudiFuturistik"><i class="fas fa-angle-right"></i> Program</a></li>
                        <li><a href="#eventWebinarPendidikan"><i class="fas fa-angle-right"></i> Acara</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-edu2 footer-links-edu2" data-aos="fade-up" data-aos-delay="300">
                    <h5>Sumber Daya</h5>
                    <ul>
                        <li><a href="#labVirtualPendidikan"><i class="fas fa-angle-right"></i> Lab Virtual</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Pustaka Digital</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Forum Komunitas</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Blog Edukasi</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-edu2 footer-contact-edu2" data-aos="fade-up" data-aos-delay="400">
                    <h5>Hubungi EduVerse</h5>
                    <p><i class="fas fa-map-marker-alt"></i> EduVerse Main Hub, Sektor Gamma-9, Cyberjaya</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+622199887766">(021) 9988-7766</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:connect@eduverse.id">connect@eduverse.id</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-edu2">
        <div class="container">
            <p class="copyright-edu2">&copy; <?php echo date("Y"); ?> <strong><span>EduVerse Campus</span></strong>. All Digital Rights Reserved.</p>
            <p class="credits-edu2 mt-1">
                Platform dirancang oleh <a href="#">Tim Inovasi EduVerse</a>
            </p>
        </div>
    </div>
</footer>