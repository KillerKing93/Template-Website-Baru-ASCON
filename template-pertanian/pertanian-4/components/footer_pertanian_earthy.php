<?php // File: components/footer_pertanian_earthy.php 
?>
<style>
    /* Footer Pertanian Earthy Styles */
    #footerPertanianEarthy {
        background-color: var(--card-bg-dark-farm4);
        /* Latar gelap untuk footer */
        color: var(--muted-text-dark-farm4);
        padding: 70px 0 0 0;
        font-size: 0.95rem;
        border-top: 4px solid var(--primary-bio-farm-dark);
        position: relative;
    }

    /* Komentar CSS: Penyesuaian untuk light mode jika footer ingin beda warna */
    body:not(.dark-mode) #footerPertanianEarthy {
        background-color: #4A5D4A;
        /* Hijau tua keabuan untuk light mode footer */
        color: #D8E8D8;
        border-top-color: var(--primary-bio-farm);
    }

    body:not(.dark-mode) #footerPertanianEarthy .footer-section-earthy h5,
    body:not(.dark-mode) #footerPertanianEarthy .footer-brand-earthy h4 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerPertanianEarthy .footer-links-earthy li a,
    body:not(.dark-mode) #footerPertanianEarthy .footer-contact-earthy p,
    body:not(.dark-mode) #footerPertanianEarthy .footer-contact-earthy p a {
        color: #D8E8D8;
    }

    body:not(.dark-mode) #footerPertanianEarthy .footer-links-earthy li a:hover,
    body:not(.dark-mode) #footerPertanianEarthy .footer-contact-earthy p a:hover {
        color: var(--secondary-bio-farm);
    }

    body:not(.dark-mode) #footerPertanianEarthy .footer-section-earthy h5::after {
        background-color: var(--secondary-bio-farm);
    }

    body:not(.dark-mode) #footerPertanianEarthy .social-icons-earthy a {
        background-color: rgba(255, 193, 7, 0.1);
        /* var(--secondary-bio-farm) dengan alpha */
        color: var(--secondary-bio-farm);
    }

    body:not(.dark-mode) #footerPertanianEarthy .social-icons-earthy a:hover {
        background-color: var(--secondary-bio-farm);
        color: #4A5D4A;
    }

    body:not(.dark-mode) #footerPertanianEarthy .footer-bottom-earthy {
        background-color: #3A4A3A;
        /* Sub-footer lebih gelap lagi */
        border-top-color: #5E705E;
    }

    #footerPertanianEarthy .footer-top-earthy {
        padding-bottom: 45px;
    }

    #footerPertanianEarthy .footer-brand-earthy h4 {
        font-family: 'Nunito', sans-serif;
        font-size: 2.1rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 15px;
    }

    #footerPertanianEarthy .footer-brand-earthy h4 i {
        color: var(--secondary-bio-farm-dark);
        margin-right: 10px;
        font-size: 2rem;
    }

    body:not(.dark-mode) #footerPertanianEarthy .footer-brand-earthy h4 i {
        color: var(--secondary-bio-farm);
    }

    #footerPertanianEarthy .footer-brand-earthy p.footer-motto {
        font-size: 1rem;
        margin-bottom: 20px;
        line-height: 1.7;
        font-style: italic;
    }

    #footerPertanianEarthy .footer-section-earthy h5 {
        font-family: 'Nunito', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
        padding-bottom: 10px;
        position: relative;
        text-transform: capitalize;
        /* Tidak uppercase */
    }

    #footerPertanianEarthy .footer-section-earthy h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 35px;
        height: 3px;
        background-color: var(--secondary-bio-farm-dark);
        border-radius: 1px;
    }

    #footerPertanianEarthy .footer-links-earthy ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPertanianEarthy .footer-links-earthy ul li {
        margin-bottom: 10px;
    }

    #footerPertanianEarthy .footer-links-earthy ul a {
        color: var(--muted-text-dark-farm4);
        text-decoration: none;
        transition: color 0.3s ease, padding-left 0.3s ease;
        display: inline-block;
        font-family: 'Roboto Slab', serif;
        font-weight: 400;
    }

    #footerPertanianEarthy .footer-links-earthy ul a:hover {
        color: var(--secondary-bio-farm-dark);
        padding-left: 6px;
    }

    #footerPertanianEarthy .footer-links-earthy ul a i {
        margin-right: 6px;
        font-size: 0.8em;
    }


    #footerPertanianEarthy .footer-contact-earthy p {
        margin-bottom: 10px;
        line-height: 1.7;
    }

    #footerPertanianEarthy .footer-contact-earthy p i {
        color: var(--secondary-bio-farm-dark);
        margin-right: 10px;
        width: 18px;
        text-align: center;
    }

    body:not(.dark-mode) #footerPertanianEarthy .footer-contact-earthy p i {
        color: var(--secondary-bio-farm);
    }

    #footerPertanianEarthy .footer-contact-earthy p a {
        color: var(--muted-text-dark-farm4);
        text-decoration: none;
    }

    #footerPertanianEarthy .footer-contact-earthy p a:hover {
        color: var(--secondary-bio-farm-dark);
        text-decoration: underline;
    }

    #footerPertanianEarthy .social-icons-earthy a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 6px;
        /* Sedikit kotak */
        background-color: rgba(var(--secondary-bio-farm-dark-rgb, 255, 213, 79), 0.12);
        color: var(--secondary-bio-farm-dark);
        margin-right: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    /* Komentar CSS: Variabel RGB untuk secondary-bio-farm-dark */
    body.dark-mode {
        --secondary-bio-farm-dark-rgb: 255, 213, 79;
    }

    #footerPertanianEarthy .social-icons-earthy a:hover {
        background-color: var(--secondary-bio-farm-dark);
        color: var(--bg-dark-farm4);
        transform: scale(1.05) translateY(-2px);
    }

    #footerPertanianEarthy .footer-bottom-earthy {
        background-color: var(--bg-dark-farm4);
        padding: 25px 0;
        margin-top: 50px;
        border-top: 1px solid var(--border-dark-farm4);
        text-align: center;
        font-size: 0.9rem;
    }

    #footerPertanianEarthy .copyright-earthy {
        margin: 0;
    }

    #footerPertanianEarthy .credits-earthy a {
        color: var(--secondary-bio-farm-dark);
        text-decoration: none;
        font-weight: 500;
    }

    body:not(.dark-mode) #footerPertanianEarthy .credits-earthy a {
        color: var(--secondary-bio-farm);
    }

    #footerPertanianEarthy .credits-earthy a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPertanianEarthy">
    <div class="footer-top-earthy">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-earthy" data-aos="fade-up" data-aos-delay="100">
                    <h4><i class="fas fa-leaf"></i> BioFarm Lestari</h4>
                    <p class="footer-motto">"Menyemai Kehidupan, Memanen Kesejahteraan, Melestarikan Bumi."</p>
                    <div class="social-icons-earthy mt-3">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram-square"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube-square"></i></a>
                        <a href="#" title="Pinterest"><i class="fab fa-pinterest-square"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-earthy footer-links-earthy" data-aos="fade-up" data-aos-delay="200">
                    <h5>Jelajahi Kami</h5>
                    <ul>
                        <li><a href="#heroPertanianBioVisual"><i class="fas fa-angle-right"></i> Beranda</a></li>
                        <li><a href="#tentangKamiPertanianSustainable"><i class="fas fa-angle-right"></i> Filosofi</a></li>
                        <li><a href="#layananPertanianHolistik"><i class="fas fa-angle-right"></i> Layanan</a></li>
                        <li><a href="#produkOrganikPertanianShowcase"><i class="fas fa-angle-right"></i> Produk</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-earthy footer-links-earthy" data-aos="fade-up" data-aos-delay="300">
                    <h5>Informasi Tambahan</h5>
                    <ul>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Kisah Petani</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Resep Sehat</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Program Kemitraan</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Karir di BioFarm</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-earthy footer-contact-earthy" data-aos="fade-up" data-aos-delay="400">
                    <h5>Kontak BioFarm</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Dusun Asri, Jl. Bio Lestari No. 10, Indonesia</p>
                    <p><i class="fas fa-phone"></i> <a href="tel:+6289911223344">+62 899-1122-3344</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@biofarmlestari.id">info@biofarmlestari.id</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-earthy">
        <div class="container">
            <p class="copyright-earthy">&copy; <?php echo date("Y"); ?> <strong><span>BioFarm Lestari</span></strong>. Tumbuh Bersama Alam.</p>
            <p class="credits-earthy mt-1">
                Situs Web Dirancang oleh <a href="#">Studio Digital Organik</a>
            </p>
        </div>
    </div>
</footer>