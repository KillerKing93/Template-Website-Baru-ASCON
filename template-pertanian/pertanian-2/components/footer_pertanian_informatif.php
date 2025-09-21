<?php // File: components/footer_pertanian_informatif.php 
?>
<style>
    /* Footer Pertanian Informatif Styles */
    #footerPertanianInformatif {
        background-color: var(--card-bg-dark-farm2);
        /* Latar gelap untuk footer */
        color: var(--muted-text-dark-farm2);
        padding: 70px 0 0 0;
        font-size: 0.95rem;
        border-top: 4px solid var(--primary-modern-farm-dark);
        /* Aksen atas yang lebih tebal */
    }

    /* Komentar CSS: Penyesuaian untuk light mode jika footer ingin beda warna */
    body:not(.dark-mode) #footerPertanianInformatif {
        background-color: #3A4A3A;
        /* Hijau lumut gelap untuk light mode footer */
        color: #D8E0D8;
        border-top-color: var(--primary-modern-farm);
    }

    body:not(.dark-mode) #footerPertanianInformatif .footer-section-modern-farm h5,
    body:not(.dark-mode) #footerPertanianInformatif .footer-brand-modern-farm h4 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerPertanianInformatif .footer-links-modern-farm li a,
    body:not(.dark-mode) #footerPertanianInformatif .footer-contact-modern-farm p,
    body:not(.dark-mode) #footerPertanianInformatif .footer-contact-modern-farm p a {
        color: #D8E0D8;
    }

    body:not(.dark-mode) #footerPertanianInformatif .footer-links-modern-farm li a:hover,
    body:not(.dark-mode) #footerPertanianInformatif .footer-contact-modern-farm p a:hover {
        color: var(--secondary-modern-farm);
    }

    body:not(.dark-mode) #footerPertanianInformatif .footer-section-modern-farm h5::after {
        background-color: var(--secondary-modern-farm);
    }

    body:not(.dark-mode) #footerPertanianInformatif .social-icons-modern-farm a {
        background-color: rgba(255, 179, 0, 0.1);
        /* var(--secondary-modern-farm) dengan alpha */
        color: var(--secondary-modern-farm);
    }

    body:not(.dark-mode) #footerPertanianInformatif .social-icons-modern-farm a:hover {
        background-color: var(--secondary-modern-farm);
        color: #3A4A3A;
    }

    body.dark-mode #footerPertanianInformatif .footer-bottom-modern-farm {
        /* Sudah sesuai dengan dark mode */
        background-color: var(--bg-dark-farm2);
        border-top-color: var(--border-dark-farm2);
    }

    body:not(.dark-mode) #footerPertanianInformatif .footer-bottom-modern-farm {
        background-color: #2E3C2E;
        /* Lebih gelap dari footer light mode */
        border-top-color: #4A5A4A;
    }


    #footerPertanianInformatif .footer-top-modern-farm {
        padding-bottom: 45px;
    }

    #footerPertanianInformatif .footer-brand-modern-farm h4 {
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem;
        /* Brand lebih besar */
        font-weight: 800;
        color: #fff;
        margin-bottom: 18px;
    }

    #footerPertanianInformatif .footer-brand-modern-farm h4 i {
        color: var(--secondary-modern-farm-dark);
        margin-right: 12px;
        font-size: 2.2rem;
        /* Ikon brand juga besar */
    }

    body:not(.dark-mode) #footerPertanianInformatif .footer-brand-modern-farm h4 i {
        color: var(--secondary-modern-farm);
    }

    #footerPertanianInformatif .footer-brand-modern-farm p.footer-mission-text {
        font-size: 1rem;
        margin-bottom: 25px;
        line-height: 1.7;
        max-width: 350px;
        /* Batasi lebar teks misi */
    }

    #footerPertanianInformatif .footer-section-modern-farm h5 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.15rem;
        /* Judul section footer */
        font-weight: 700;
        color: #fff;
        margin-bottom: 22px;
        padding-bottom: 10px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    #footerPertanianInformatif .footer-section-modern-farm h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 3px;
        background-color: var(--secondary-modern-farm-dark);
    }

    #footerPertanianInformatif .footer-links-modern-farm ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPertanianInformatif .footer-links-modern-farm ul li {
        margin-bottom: 12px;
    }

    #footerPertanianInformatif .footer-links-modern-farm ul a {
        color: var(--muted-text-dark-farm2);
        text-decoration: none;
        transition: color 0.3s ease, transform 0.3s ease;
        display: inline-block;
        font-family: 'Source Sans Pro', sans-serif;
    }

    #footerPertanianInformatif .footer-links-modern-farm ul a:hover {
        color: var(--secondary-modern-farm-dark);
        transform: translateX(5px);
        /* Efek geser */
    }

    #footerPertanianInformatif .footer-links-modern-farm ul a i {
        margin-right: 8px;
    }


    #footerPertanianInformatif .footer-contact-modern-farm p {
        margin-bottom: 12px;
        line-height: 1.8;
        display: flex;
        align-items: flex-start;
    }

    #footerPertanianInformatif .footer-contact-modern-farm p i {
        color: var(--secondary-modern-farm-dark);
        margin-right: 12px;
        font-size: 1.1rem;
        margin-top: 5px;
        width: 20px;
    }

    body:not(.dark-mode) #footerPertanianInformatif .footer-contact-modern-farm p i {
        color: var(--secondary-modern-farm);
    }

    #footerPertanianInformatif .footer-contact-modern-farm p a {
        color: var(--muted-text-dark-farm2);
        text-decoration: none;
    }

    #footerPertanianInformatif .footer-contact-modern-farm p a:hover {
        color: var(--secondary-modern-farm-dark);
        text-decoration: underline;
    }

    #footerPertanianInformatif .social-icons-modern-farm a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 5px;
        background-color: rgba(var(--secondary-modern-farm-dark-rgb, 255, 202, 40), 0.12);
        color: var(--secondary-modern-farm-dark);
        margin-right: 10px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }

    /* Komentar CSS: Variabel RGB untuk secondary-modern-farm-dark */
    body.dark-mode {
        --secondary-modern-farm-dark-rgb: 255, 202, 40;
    }

    #footerPertanianInformatif .social-icons-modern-farm a:hover {
        background-color: var(--secondary-modern-farm-dark);
        color: var(--bg-dark-farm2);
        transform: scale(1.1);
    }

    #footerPertanianInformatif .footer-bottom-modern-farm {
        background-color: var(--bg-dark-farm2);
        /* Sub-footer lebih gelap */
        padding: 25px 0;
        margin-top: 50px;
        border-top: 1px solid var(--border-dark-farm2);
        text-align: center;
        font-size: 0.9rem;
    }

    #footerPertanianInformatif .copyright-modern-farm {
        margin: 0;
    }

    #footerPertanianInformatif .credits-modern-farm a {
        color: var(--secondary-modern-farm-dark);
        text-decoration: none;
        font-weight: 600;
    }

    body:not(.dark-mode) #footerPertanianInformatif .credits-modern-farm a {
        color: var(--secondary-modern-farm);
    }

    #footerPertanianInformatif .credits-modern-farm a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPertanianInformatif">
    <div class="footer-top-modern-farm">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-modern-farm" data-aos="fade-up" data-aos-delay="100">
                    <h4><i class="fas fa-seedling"></i> AgroModern ID</h4>
                    <p class="footer-mission-text">Merevolusi pertanian melalui inovasi teknologi, keberlanjutan, dan kemitraan yang kuat dengan petani lokal.</p>
                    <div class="social-icons-modern-farm mt-3">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-modern-farm footer-links-modern-farm" data-aos="fade-up" data-aos-delay="200">
                    <h5>Jelajahi</h5>
                    <ul>
                        <li><a href="#heroPertanianDinamis"><i class="fas fa-angle-right"></i> Beranda</a></li>
                        <li><a href="#tentangKamiPertanianDetail"><i class="fas fa-angle-right"></i> Tentang</a></li>
                        <li><a href="#layananAgroteknologiPertanian"><i class="fas fa-angle-right"></i> Layanan</a></li>
                        <li><a href="#produkKatalogPertanian"><i class="fas fa-angle-right"></i> Produk</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-modern-farm footer-links-modern-farm" data-aos="fade-up" data-aos-delay="300">
                    <h5>Sumber Daya</h5>
                    <ul>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Blog Agrotek</a></li>
                        <li><a href="#testimoniPetaniMitra"><i class="fas fa-angle-right"></i> Kisah Mitra</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> FAQ</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> Pusat Unduhan</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-modern-farm footer-contact-modern-farm" data-aos="fade-up" data-aos-delay="400">
                    <h5>Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Agro Inovasi No. 88, Kota Hijau, Indonesia</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+62227778899">(022) 777-8899</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@agromodern.id">info@agromodern.id</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-modern-farm">
        <div class="container">
            <p class="copyright-modern-farm">&copy; <?php echo date("Y"); ?> <strong><span>AgroModern ID</span></strong>. Hak Cipta Dilindungi Undang-Undang.</p>
            <p class="credits-modern-farm mt-1">
                Dirancang & Dikembangkan oleh <a href="#">Tim Inovasi Digital AgroModern</a>
            </p>
        </div>
    </div>
</footer>