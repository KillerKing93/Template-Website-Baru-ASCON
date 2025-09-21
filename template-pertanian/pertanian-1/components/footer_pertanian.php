<?php // File: components/footer_pertanian.php 
?>
<style>
    /* Footer Pertanian Styles */
    #footerPertanian {
        background-color: var(--card-bg-dark);
        /* Latar gelap untuk footer di kedua mode */
        color: var(--muted-text-dark);
        padding: 60px 0 0 0;
        font-size: 0.9rem;
        border-top: 3px solid var(--primary-farm-dark);
        /* Aksen atas yang kuat */
    }

    /* Komentar CSS: Penyesuaian untuk light mode jika footer ingin beda warna */
    body:not(.dark-mode) #footerPertanian {
        background-color: #3E523E;
        /* Hijau gelap untuk light mode footer */
        color: #E0E0D0;
        /* Teks lebih terang di light mode */
        border-top-color: var(--primary-farm);
    }

    body:not(.dark-mode) #footerPertanian .footer-section-pertanian h5,
    body:not(.dark-mode) #footerPertanian .footer-brand-pertanian h4 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerPertanian .footer-links-pertanian li a,
    body:not(.dark-mode) #footerPertanian .footer-contact-pertanian p,
    body:not(.dark-mode) #footerPertanian .footer-contact-pertanian p a {
        color: #E0E0D0;
    }

    body:not(.dark-mode) #footerPertanian .footer-links-pertanian li a:hover,
    body:not(.dark-mode) #footerPertanian .footer-contact-pertanian p a:hover {
        color: var(--secondary-farm);
    }

    body:not(.dark-mode) #footerPertanian .footer-section-pertanian h5::after {
        background-color: var(--secondary-farm);
    }

    body:not(.dark-mode) #footerPertanian .social-icons-pertanian a {
        background-color: rgba(212, 163, 115, 0.1);
        /* var(--secondary-farm) dengan alpha */
        color: var(--secondary-farm);
    }

    body:not(.dark-mode) #footerPertanian .social-icons-pertanian a:hover {
        background-color: var(--secondary-farm);
        color: #3E523E;
        /* Kontras dengan background hover */
    }

    body:not(.dark-mode) #footerPertanian .footer-bottom-pertanian {
        background-color: #2A3D2A;
        /* Sub-footer lebih gelap lagi */
        border-top-color: #5A705A;
    }


    #footerPertanian .footer-top-pertanian {
        padding-bottom: 40px;
    }

    #footerPertanian .footer-brand-pertanian h4 {
        font-family: 'Merriweather', serif;
        font-size: 1.8rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
    }

    #footerPertanian .footer-brand-pertanian h4 i {
        color: var(--secondary-farm-dark);
        margin-right: 10px;
    }

    body:not(.dark-mode) #footerPertanian .footer-brand-pertanian h4 i {
        color: var(--secondary-farm);
    }


    #footerPertanian .footer-brand-pertanian p.footer-about-text {
        font-style: italic;
        font-size: 0.95rem;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    #footerPertanian .footer-section-pertanian h5 {
        font-family: 'Merriweather', serif;
        font-size: 1.2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
        padding-bottom: 10px;
        position: relative;
    }

    #footerPertanian .footer-section-pertanian h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 35px;
        height: 2px;
        background-color: var(--secondary-farm-dark);
    }

    #footerPertanian .footer-links-pertanian ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPertanian .footer-links-pertanian ul li {
        margin-bottom: 10px;
    }

    #footerPertanian .footer-links-pertanian ul a {
        color: var(--muted-text-dark);
        text-decoration: none;
        transition: color 0.3s ease, padding-left 0.3s ease;
        display: inline-block;
        font-family: 'Open Sans', sans-serif;
    }

    #footerPertanian .footer-links-pertanian ul a:hover {
        color: var(--secondary-farm-dark);
        padding-left: 5px;
    }

    #footerPertanian .footer-contact-pertanian p {
        margin-bottom: 10px;
        line-height: 1.7;
    }

    #footerPertanian .footer-contact-pertanian p i {
        color: var(--secondary-farm-dark);
        margin-right: 10px;
        width: 16px;
    }

    body:not(.dark-mode) #footerPertanian .footer-contact-pertanian p i {
        color: var(--secondary-farm);
    }

    #footerPertanian .footer-contact-pertanian p a {
        color: var(--muted-text-dark);
        text-decoration: none;
    }

    #footerPertanian .footer-contact-pertanian p a:hover {
        color: var(--secondary-farm-dark);
        text-decoration: underline;
    }

    #footerPertanian .social-icons-pertanian a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        /* Bulat */
        background-color: rgba(var(--secondary-farm-dark-rgb, 176, 137, 104), 0.15);
        color: var(--secondary-farm-dark);
        margin-right: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    /* Komentar CSS: Variabel RGB untuk secondary-farm-dark */
    body.dark-mode {
        --secondary-farm-dark-rgb: 176, 137, 104;
    }

    #footerPertanian .social-icons-pertanian a:hover {
        background-color: var(--secondary-farm-dark);
        color: var(--bg-dark);
        transform: translateY(-2px);
    }

    #footerPertanian .footer-bottom-pertanian {
        background-color: var(--bg-dark);
        /* Sub-footer lebih gelap */
        padding: 25px 0;
        margin-top: 40px;
        border-top: 1px solid var(--border-dark);
        text-align: center;
        font-size: 0.85rem;
    }

    body:not(.dark-mode) #footerPertanian .footer-bottom-pertanian {
        background-color: #2A3D2A;
        /* Lebih gelap dari footer light mode */
        border-top-color: #5A705A;
    }

    #footerPertanian .copyright-pertanian {
        margin: 0;
    }

    #footerPertanian .credits-pertanian a {
        color: var(--secondary-farm-dark);
        text-decoration: none;
        font-weight: 500;
    }

    body:not(.dark-mode) #footerPertanian .credits-pertanian a {
        color: var(--secondary-farm);
    }

    #footerPertanian .credits-pertanian a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPertanian">
    <div class="footer-top-pertanian">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-12 footer-brand-pertanian" data-aos="fade-up" data-aos-delay="100">
                    <h4><i class="fas fa-tractor"></i> NamaPertanian</h4>
                    <p class="footer-about-text">Menyediakan hasil bumi segar berkualitas langsung dari ladang kami, diproses dengan cinta dan tanggung jawab terhadap alam.</p>
                    <div class="social-icons-pertanian mt-3">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-pertanian footer-links-pertanian" data-aos="fade-up" data-aos-delay="200">
                    <h5>Tautan Cepat</h5>
                    <ul>
                        <li><a href="#heroPertanian">Beranda</a></li>
                        <li><a href="#tentangKamiPertanian">Tentang Kami</a></li>
                        <li><a href="#produkUnggulanPertanian">Produk</a></li>
                        <li><a href="#galeriPertanian">Galeri</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-pertanian footer-links-pertanian" data-aos="fade-up" data-aos-delay="300">
                    <h5>Informasi</h5>
                    <ul>
                        <li><a href="#beritaArtikelPertanian">Artikel & Tips</a></li>
                        <li><a href="#">Cara Pemesanan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-pertanian footer-contact-pertanian" data-aos="fade-up" data-aos-delay="400">
                    <h5>Hubungi Ladang</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Pertanian Sejahtera No. 1, Desa Makmur, Indonesia</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+6281234567890">+62 812-3456-7890</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:info@namapertanian.co.id">info@namapertanian.co.id</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-pertanian">
        <div class="container">
            <p class="copyright-pertanian">&copy; <?php echo date("Y"); ?> <strong><span>NamaPertanian Anda</span></strong>. Semua Hasil Bumi Dilindungi.</p>
            <?php /*
            <p class="credits-pertanian mt-1">
                Dirancang dengan <i class="fas fa-heart" style="color: var(--accent-farm);"></i> oleh Tim Digital Anda
            </p>
            */ ?>
        </div>
    </div>
</footer>