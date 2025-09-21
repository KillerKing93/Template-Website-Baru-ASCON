<?php // File: components/footer_pendidikan_informatif.php 
?>
<style>
    /* Footer Pendidikan Informatif Styles */
    #footerPendidikanInformatif {
        background-color: var(--card-bg-dark-edu1);
        /* Latar gelap untuk footer */
        color: var(--muted-text-dark-edu1);
        padding: 60px 0 0 0;
        font-size: 0.95rem;
        border-top: 3px solid var(--primary-edu1-dark);
    }

    /* Komentar CSS: Penyesuaian untuk light mode jika footer ingin beda warna */
    body:not(.dark-mode) #footerPendidikanInformatif {
        background-color: #34495E;
        /* Biru abu-abu gelap untuk light mode footer */
        color: #BDC3C7;
        border-top-color: var(--primary-edu1);
    }

    body:not(.dark-mode) #footerPendidikanInformatif .footer-section-edu h5,
    body:not(.dark-mode) #footerPendidikanInformatif .footer-brand-edu h4 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerPendidikanInformatif .footer-links-edu li a,
    body:not(.dark-mode) #footerPendidikanInformatif .footer-contact-edu p,
    body:not(.dark-mode) #footerPendidikanInformatif .footer-contact-edu p a {
        color: #BDC3C7;
    }

    body:not(.dark-mode) #footerPendidikanInformatif .footer-links-edu li a:hover,
    body:not(.dark-mode) #footerPendidikanInformatif .footer-contact-edu p a:hover {
        color: var(--secondary-edu1);
    }

    body:not(.dark-mode) #footerPendidikanInformatif .footer-section-edu h5::after {
        background-color: var(--secondary-edu1);
    }

    body:not(.dark-mode) #footerPendidikanInformatif .social-icons-edu a {
        background-color: rgba(241, 196, 15, 0.1);
        /* var(--secondary-edu1) dengan alpha */
        color: var(--secondary-edu1);
    }

    body:not(.dark-mode) #footerPendidikanInformatif .social-icons-edu a:hover {
        background-color: var(--secondary-edu1);
        color: #34495E;
    }

    body:not(.dark-mode) #footerPendidikanInformatif .footer-bottom-edu {
        background-color: #2C3E50;
        /* Sub-footer lebih gelap lagi */
        border-top-color: #4A6572;
    }

    #footerPendidikanInformatif .footer-top-edu {
        padding-bottom: 40px;
    }

    #footerPendidikanInformatif .footer-brand-edu h4 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
    }

    #footerPendidikanInformatif .footer-brand-edu h4 i {
        color: var(--secondary-edu1-dark);
        margin-right: 10px;
        font-size: 1.6rem;
    }

    body:not(.dark-mode) #footerPendidikanInformatif .footer-brand-edu h4 i {
        color: var(--secondary-edu1);
    }

    #footerPendidikanInformatif .footer-brand-edu p.footer-motto-edu {
        font-size: 0.95rem;
        margin-bottom: 20px;
        line-height: 1.6;
        opacity: 0.9;
        max-width: 350px;
        font-style: italic;
    }

    #footerPendidikanInformatif .footer-section-edu h5 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.15rem;
        /* Judul section footer */
        font-weight: 600;
        color: #fff;
        margin-bottom: 20px;
        padding-bottom: 10px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    #footerPendidikanInformatif .footer-section-edu h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 30px;
        height: 2px;
        background-color: var(--secondary-edu1-dark);
    }

    #footerPendidikanInformatif .footer-links-edu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPendidikanInformatif .footer-links-edu ul li {
        margin-bottom: 10px;
    }

    #footerPendidikanInformatif .footer-links-edu ul a {
        color: var(--muted-text-dark-edu1);
        text-decoration: none;
        transition: color 0.3s ease, padding-left 0.3s ease;
        display: inline-block;
        font-family: 'Merriweather Sans', sans-serif;
        font-weight: 400;
    }

    #footerPendidikanInformatif .footer-links-edu ul a:hover {
        color: var(--secondary-edu1-dark);
        padding-left: 5px;
    }

    #footerPendidikanInformatif .footer-links-edu ul a i {
        margin-right: 6px;
        font-size: 0.8em;
        opacity: 0.8;
    }


    #footerPendidikanInformatif .footer-contact-edu p {
        margin-bottom: 10px;
        line-height: 1.7;
    }

    #footerPendidikanInformatif .footer-contact-edu p i {
        color: var(--secondary-edu1-dark);
        margin-right: 10px;
        width: 16px;
        text-align: center;
    }

    body:not(.dark-mode) #footerPendidikanInformatif .footer-contact-edu p i {
        color: var(--secondary-edu1);
    }

    #footerPendidikanInformatif .footer-contact-edu p a {
        color: var(--muted-text-dark-edu1);
        text-decoration: none;
    }

    #footerPendidikanInformatif .footer-contact-edu p a:hover {
        color: var(--secondary-edu1-dark);
        text-decoration: underline;
    }

    #footerPendidikanInformatif .social-icons-edu a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        /* Bulat */
        background-color: rgba(var(--secondary-edu1-dark-rgb, 243, 156, 18), 0.15);
        color: var(--secondary-edu1-dark);
        margin: 0 4px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1rem;
    }

    /* Komentar CSS: Variabel RGB untuk secondary-edu1-dark */
    body.dark-mode {
        --secondary-edu1-dark-rgb: 243, 156, 18;
    }

    #footerPendidikanInformatif .social-icons-edu a:hover {
        background-color: var(--secondary-edu1-dark);
        color: var(--bg-dark-edu1);
        transform: scale(1.1);
    }

    #footerPendidikanInformatif .footer-bottom-edu {
        background-color: var(--bg-dark-edu1);
        /* Sub-footer lebih gelap */
        padding: 20px 0;
        margin-top: 40px;
        border-top: 1px solid var(--border-dark-edu1);
        text-align: center;
        font-size: 0.85rem;
    }

    #footerPendidikanInformatif .copyright-edu {
        margin: 0;
    }

    #footerPendidikanInformatif .credits-edu a {
        color: var(--secondary-edu1-dark);
        text-decoration: none;
        font-weight: 500;
    }

    body:not(.dark-mode) #footerPendidikanInformatif .credits-edu a {
        color: var(--secondary-edu1);
    }

    #footerPendidikanInformatif .credits-edu a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPendidikanInformatif">
    <div class="footer-top-edu">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-edu" data-aos="fade-up" data-aos-delay="100">
                    <h4><i class="fas fa-university"></i> NamaInstitusi</h4>
                    <p class="footer-motto-edu">"Membentuk karakter, mengasah potensi, membangun peradaban."</p>
                    <div class="social-icons-edu mt-3">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-edu footer-links-edu" data-aos="fade-up" data-aos-delay="200">
                    <h5>Tentang Kami</h5>
                    <ul>
                        <li><a href="#tentangKamiPendidikanVisi"><i class="fas fa-angle-right"></i> Visi & Misi</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Sejarah</a></li>
                        <li><a href="#fasilitasPendidikanModern"><i class="fas fa-angle-right"></i> Fasilitas</a></li>
                        <li><a href="#">Struktur Organisasi</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-edu footer-links-edu" data-aos="fade-up" data-aos-delay="300">
                    <h5>Akademik</h5>
                    <ul>
                        <li><a href="#programUnggulanPendidikan"><i class="fas fa-angle-right"></i> Program Studi</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Kalender Akademik</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Pendaftaran Online</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Beasiswa</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-edu footer-contact-edu" data-aos="fade-up" data-aos-delay="400">
                    <h5>Hubungi Kami</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No. 123, Kota Pelajar, Indonesia</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+62274555123">(0274) 555-123</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@namainstitusi.ac.id">info@namainstitusi.ac.id</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-edu">
        <div class="container">
            <p class="copyright-edu">&copy; <?php echo date("Y"); ?> <strong><span>Nama Institusi Pendidikan Anda</span></strong>. Hak Cipta Dilindungi.</p>
            <p class="credits-edu mt-1">
                Dirancang oleh <a href="#">Tim Kreatif Institusi</a>
            </p>
        </div>
    </div>
</footer>