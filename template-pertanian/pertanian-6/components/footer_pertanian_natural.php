<?php // File: components/footer_pertanian_natural.php 
?>
<style>
    /* Footer Pertanian Natural Styles */
    #footerPertanianNatural {
        background-color: var(--card-bg-dark-farm5);
        /* Latar gelap untuk footer */
        color: var(--muted-text-dark-farm5);
        padding: 70px 0 0 0;
        font-size: 0.95rem;
        border-top: 4px solid var(--primary-eco-farm-dark);
        /* Aksen atas */
        position: relative;
        /* Komentar CSS: Bisa ditambahkan background image pattern organik halus */
        /* background-image: url('path/to/organic-pattern.png'); */
        /* background-repeat: repeat; */
        /* background-size: auto; */
        /* background-blend-mode: multiply; */
    }

    /* Komentar CSS: Penyesuaian untuk light mode jika footer ingin beda warna */
    body:not(.dark-mode) #footerPertanianNatural {
        background-color: #4A5D4A;
        /* Hijau tua keabuan untuk light mode footer */
        color: #D8E8D8;
        border-top-color: var(--primary-eco-farm);
    }

    body:not(.dark-mode) #footerPertanianNatural .footer-section-natural h5,
    body:not(.dark-mode) #footerPertanianNatural .footer-brand-natural h4 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerPertanianNatural .footer-links-natural li a,
    body:not(.dark-mode) #footerPertanianNatural .footer-contact-natural p,
    body:not(.dark-mode) #footerPertanianNatural .footer-contact-natural p a {
        color: #D8E8D8;
    }

    body:not(.dark-mode) #footerPertanianNatural .footer-links-natural li a:hover,
    body:not(.dark-mode) #footerPertanianNatural .footer-contact-natural p a:hover {
        color: var(--secondary-eco-farm);
    }

    body:not(.dark-mode) #footerPertanianNatural .footer-section-natural h5::after {
        background-color: var(--secondary-eco-farm);
    }

    body:not(.dark-mode) #footerPertanianNatural .social-icons-natural a {
        background-color: rgba(218, 165, 32, 0.1);
        /* var(--secondary-eco-farm) dengan alpha */
        color: var(--secondary-eco-farm);
    }

    body:not(.dark-mode) #footerPertanianNatural .social-icons-natural a:hover {
        background-color: var(--secondary-eco-farm);
        color: #4A5D4A;
    }

    body:not(.dark-mode) #footerPertanianNatural .footer-bottom-natural {
        background-color: #3A4A3A;
        /* Sub-footer lebih gelap lagi */
        border-top-color: #5E705E;
    }

    #footerPertanianNatural .footer-top-natural {
        padding-bottom: 45px;
    }

    #footerPertanianNatural .footer-brand-natural h4 {
        font-family: 'Lora', serif;
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
    }

    #footerPertanianNatural .footer-brand-natural h4 i {
        color: var(--secondary-eco-farm-dark);
        margin-right: 10px;
        font-size: 1.8rem;
    }

    body:not(.dark-mode) #footerPertanianNatural .footer-brand-natural h4 i {
        color: var(--secondary-eco-farm);
    }

    #footerPertanianNatural .footer-brand-natural p.footer-description {
        font-size: 1rem;
        margin-bottom: 20px;
        line-height: 1.7;
        opacity: 0.9;
        max-width: 360px;
    }

    #footerPertanianNatural .footer-section-natural h5 {
        font-family: 'Lora', serif;
        font-size: 1.3rem;
        /* Judul section footer */
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
        padding-bottom: 10px;
        position: relative;
    }

    #footerPertanianNatural .footer-section-natural h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 35px;
        height: 3px;
        background-color: var(--secondary-eco-farm-dark);
        border-radius: 1px;
    }

    #footerPertanianNatural .footer-links-natural ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPertanianNatural .footer-links-natural ul li {
        margin-bottom: 10px;
    }

    #footerPertanianNatural .footer-links-natural ul a {
        color: var(--muted-text-dark-farm5);
        text-decoration: none;
        transition: color 0.3s ease, padding-left 0.3s ease;
        display: inline-block;
        font-family: 'Nunito Sans', sans-serif;
        font-weight: 500;
    }

    #footerPertanianNatural .footer-links-natural ul a:hover {
        color: var(--secondary-eco-farm-dark);
        padding-left: 6px;
    }

    #footerPertanianNatural .footer-links-natural ul a i {
        margin-right: 6px;
        font-size: 0.8em;
        opacity: 0.8;
    }


    #footerPertanianNatural .footer-contact-natural p {
        margin-bottom: 10px;
        line-height: 1.7;
    }

    #footerPertanianNatural .footer-contact-natural p i {
        color: var(--secondary-eco-farm-dark);
        margin-right: 10px;
        width: 18px;
        text-align: center;
    }

    body:not(.dark-mode) #footerPertanianNatural .footer-contact-natural p i {
        color: var(--secondary-eco-farm);
    }

    #footerPertanianNatural .footer-contact-natural p a {
        color: var(--muted-text-dark-farm5);
        text-decoration: none;
    }

    #footerPertanianNatural .footer-contact-natural p a:hover {
        color: var(--secondary-eco-farm-dark);
        text-decoration: underline;
    }

    #footerPertanianNatural .social-icons-natural a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        /* Bulat */
        background-color: rgba(var(--secondary-eco-farm-dark-rgb, 240, 230, 140), 0.12);
        color: var(--secondary-eco-farm-dark);
        margin: 0 5px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    /* Komentar CSS: Variabel RGB untuk secondary-eco-farm-dark */
    body.dark-mode {
        --secondary-eco-farm-dark-rgb: 240, 230, 140;
    }

    #footerPertanianNatural .social-icons-natural a:hover {
        background-color: var(--secondary-eco-farm-dark);
        color: var(--bg-dark-farm5);
        transform: scale(1.1) translateY(-2px);
    }

    #footerPertanianNatural .footer-bottom-natural {
        background-color: var(--bg-dark-farm5);
        /* Sub-footer lebih gelap */
        padding: 25px 0;
        margin-top: 50px;
        border-top: 1px solid var(--border-dark-farm5);
        text-align: center;
        font-size: 0.9rem;
    }

    #footerPertanianNatural .copyright-natural {
        margin: 0;
    }

    #footerPertanianNatural .credits-natural a {
        color: var(--secondary-eco-farm-dark);
        text-decoration: none;
        font-weight: 500;
    }

    body:not(.dark-mode) #footerPertanianNatural .credits-natural a {
        color: var(--secondary-eco-farm);
    }

    #footerPertanianNatural .credits-natural a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPertanianNatural">
    <div class="footer-top-natural">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-natural" data-aos="fade-up" data-aos-delay="100">
                    <h4><i class="fas fa-feather-alt"></i> EcoSymphony Farm</h4>
                    <p class="footer-description">Menghadirkan simfoni alam ke meja Anda melalui praktik pertanian organik yang penuh cinta dan tanggung jawab.</p>
                    <div class="social-icons-natural mt-3">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-natural footer-links-natural" data-aos="fade-up" data-aos-delay="200">
                    <h5>Jelajahi</h5>
                    <ul>
                        <li><a href="#heroPertanianEcoSymphony"><i class="fas fa-chevron-right"></i> Beranda</a></li>
                        <li><a href="#tentangKamiPertanianHarmoni"><i class="fas fa-chevron-right"></i> Filosofi</a></li>
                        <li><a href="#layananPertanianEkologis"><i class="fas fa-chevron-right"></i> Ekosistem</a></li>
                        <li><a href="#produkAlamiPertanian"><i class="fas fa-chevron-right"></i> Produk</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-natural footer-links-natural" data-aos="fade-up" data-aos-delay="300">
                    <h5>Informasi</h5>
                    <ul>
                        <li><a href="#galeriKeindahanAlamPertanian"><i class="fas fa-chevron-right"></i> Galeri Alam</a></li>
                        <li><a href="#ceritaPetaniEkosistem"><i class="fas fa-chevron-right"></i> Cerita Mitra</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog Pertanian</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-natural footer-contact-natural" data-aos="fade-up" data-aos-delay="400">
                    <h5>Hubungi Kami</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Lembah Harmoni, Jl. Alam Raya No. 101, Indonesia</p>
                    <p><i class="fas fa-phone"></i> <a href="tel:+6287712345678">+62 877-1234-5678</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:salam@ecosymphony.farm">salam@ecosymphony.farm</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-natural">
        <div class="container">
            <p class="copyright-natural">&copy; <?php echo date("Y"); ?> <strong><span>EcoSymphony Farm</span></strong>. Harmoni dengan Alam.</p>
            <p class="credits-natural mt-1">
                Desain oleh <a href="#">Simfoni Kreasi Studio</a>
            </p>
        </div>
    </div>
</footer>