<?php // File: components/footer_pendidikan_tradisional.php 
?>
<style>
    /* Footer Pendidikan Tradisional Styles */
    #footerPendidikanTradisional {
        background-color: var(--card-bg-dark-edu3);
        /* Latar gelap untuk footer */
        color: var(--muted-text-dark-edu3);
        padding: 70px 0 0 0;
        font-size: 0.95rem;
        border-top: 4px solid var(--primary-illumina-dark);
        /* Aksen atas */
        position: relative;
    }

    /* Komentar CSS: Penyesuaian untuk light mode jika footer ingin beda warna */
    body:not(.dark-mode) #footerPendidikanTradisional {
        background-color: #4A3B32;
        /* Coklat tua untuk light mode footer */
        color: #EAE0D5;
        border-top-color: var(--primary-illumina);
    }

    body:not(.dark-mode) #footerPendidikanTradisional .footer-section-tradisional h5,
    body:not(.dark-mode) #footerPendidikanTradisional .footer-brand-tradisional h4 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerPendidikanTradisional .footer-links-tradisional li a,
    body:not(.dark-mode) #footerPendidikanTradisional .footer-contact-tradisional p,
    body:not(.dark-mode) #footerPendidikanTradisional .footer-contact-tradisional p a {
        color: #EAE0D5;
    }

    body:not(.dark-mode) #footerPendidikanTradisional .footer-links-tradisional li a:hover,
    body:not(.dark-mode) #footerPendidikanTradisional .footer-contact-tradisional p a:hover {
        color: var(--secondary-illumina);
    }

    body:not(.dark-mode) #footerPendidikanTradisional .footer-section-tradisional h5::after {
        background-color: var(--secondary-illumina);
    }

    body:not(.dark-mode) #footerPendidikanTradisional .social-icons-tradisional a {
        background-color: rgba(184, 134, 11, 0.1);
        /* var(--secondary-illumina) dengan alpha */
        color: var(--secondary-illumina);
    }

    body:not(.dark-mode) #footerPendidikanTradisional .social-icons-tradisional a:hover {
        background-color: var(--secondary-illumina);
        color: #4A3B32;
    }

    body:not(.dark-mode) #footerPendidikanTradisional .footer-bottom-tradisional {
        background-color: #382E2E;
        /* Sub-footer lebih gelap lagi */
        border-top-color: #5A4B42;
    }

    #footerPendidikanTradisional .footer-top-tradisional {
        padding-bottom: 45px;
    }

    #footerPendidikanTradisional .footer-brand-tradisional h4 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.1rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
    }

    #footerPendidikanTradisional .footer-brand-tradisional h4 i {
        color: var(--secondary-illumina-dark);
        margin-right: 10px;
        font-size: 1.9rem;
    }

    body:not(.dark-mode) #footerPendidikanTradisional .footer-brand-tradisional h4 i {
        color: var(--secondary-illumina);
    }

    #footerPendidikanTradisional .footer-brand-tradisional p.footer-credo {
        font-size: 1rem;
        margin-bottom: 20px;
        line-height: 1.7;
        opacity: 0.9;
        max-width: 370px;
        font-style: italic;
    }

    #footerPendidikanTradisional .footer-section-tradisional h5 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.3rem;
        /* Judul section footer */
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
        padding-bottom: 10px;
        position: relative;
        text-transform: capitalize;
        /* Tidak uppercase */
    }

    #footerPendidikanTradisional .footer-section-tradisional h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 35px;
        height: 2px;
        /* Garis lebih tipis */
        background-color: var(--secondary-illumina-dark);
    }

    #footerPendidikanTradisional .footer-links-tradisional ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPendidikanTradisional .footer-links-tradisional ul li {
        margin-bottom: 10px;
    }

    #footerPendidikanTradisional .footer-links-tradisional ul a {
        color: var(--muted-text-dark-edu3);
        text-decoration: none;
        transition: color 0.3s ease, padding-left 0.3s ease;
        display: inline-block;
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
    }

    #footerPendidikanTradisional .footer-links-tradisional ul a:hover {
        color: var(--secondary-illumina-dark);
        padding-left: 5px;
    }

    #footerPendidikanTradisional .footer-links-tradisional ul a i {
        margin-right: 6px;
        font-size: 0.8em;
        opacity: 0.8;
    }


    #footerPendidikanTradisional .footer-contact-tradisional p {
        margin-bottom: 10px;
        line-height: 1.7;
    }

    #footerPendidikanTradisional .footer-contact-tradisional p i {
        color: var(--secondary-illumina-dark);
        margin-right: 10px;
        width: 18px;
        text-align: center;
    }

    body:not(.dark-mode) #footerPendidikanTradisional .footer-contact-tradisional p i {
        color: var(--secondary-illumina);
    }

    #footerPendidikanTradisional .footer-contact-tradisional p a {
        color: var(--muted-text-dark-edu3);
        text-decoration: none;
    }

    #footerPendidikanTradisional .footer-contact-tradisional p a:hover {
        color: var(--secondary-illumina-dark);
        text-decoration: underline;
    }

    #footerPendidikanTradisional .social-icons-tradisional a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 5px;
        /* Sedikit kotak */
        background-color: rgba(var(--secondary-illumina-dark-rgb, 212, 175, 55), 0.12);
        color: var(--secondary-illumina-dark);
        margin: 0 4px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1rem;
    }

    /* Komentar CSS: Variabel RGB untuk secondary-illumina-dark */
    body.dark-mode {
        --secondary-illumina-dark-rgb: 212, 175, 55;
    }

    #footerPendidikanTradisional .social-icons-tradisional a:hover {
        background-color: var(--secondary-illumina-dark);
        color: var(--bg-dark-edu3);
        transform: scale(1.08);
    }

    #footerPendidikanTradisional .footer-bottom-tradisional {
        background-color: var(--bg-dark-edu3);
        /* Sub-footer paling gelap */
        padding: 25px 0;
        margin-top: 50px;
        border-top: 1px solid var(--border-dark-edu3);
        text-align: center;
        font-size: 0.9rem;
    }

    #footerPendidikanTradisional .copyright-tradisional {
        margin: 0;
    }

    #footerPendidikanTradisional .credits-tradisional a {
        color: var(--secondary-illumina-dark);
        text-decoration: none;
        font-weight: 500;
    }

    body:not(.dark-mode) #footerPendidikanTradisional .credits-tradisional a {
        color: var(--secondary-illumina);
    }

    #footerPendidikanTradisional .credits-tradisional a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPendidikanTradisional">
    <div class="footer-top-tradisional">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-tradisional" data-aos="fade-up" data-aos-delay="100">
                    <h4><i class="fas fa-book-reader"></i> Academia Illumina</h4>
                    <p class="footer-credo">"Lux et Veritas - Cahaya dan Kebenaran, Memandu Perjalanan Intelektual."</p>
                    <div class="social-icons-tradisional mt-3">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Academia.edu"><i class="fas fa-graduation-cap"></i></a> <?php /* Ikon placeholder */ ?>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-tradisional footer-links-tradisional" data-aos="fade-up" data-aos-delay="200">
                    <h5>Akademik</h5>
                    <ul>
                        <li><a href="#fakultasJurusanPendidikan"><i class="fas fa-chevron-right"></i> Fakultas</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Program Pascasarjana</a></li>
                        <li><a href="#risetPublikasiPendidikan"><i class="fas fa-chevron-right"></i> Riset</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Perpustakaan</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-tradisional footer-links-tradisional" data-aos="fade-up" data-aos-delay="300">
                    <h5>Kehidupan Kampus</h5>
                    <ul>
                        <li><a href="#kehidupanKampusPendidikan"><i class="fas fa-chevron-right"></i> Organisasi Mahasiswa</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Fasilitas Olahraga</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Acara & Kegiatan</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Layanan Mahasiswa</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-tradisional footer-contact-tradisional" data-aos="fade-up" data-aos-delay="400">
                    <h5>Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Cendekia No. 1, Kota Ilmu, Indonesia</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+62221234567">(022) 123-4567</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:sekretariat@academiaillumina.ac.id">sekretariat@academiaillumina.ac.id</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-tradisional">
        <div class="container">
            <p class="copyright-tradisional">&copy; <?php echo date("Y"); ?> <strong><span>Academia Illumina</span></strong>. Hak Cipta Dilindungi.</p>
            <p class="credits-tradisional mt-1">
                Dirancang oleh <a href="#">Civitas Academica Illumina</a>
            </p>
        </div>
    </div>
</footer>