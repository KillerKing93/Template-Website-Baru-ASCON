<?php // File: components/footer_pertanian_kontemporer.php 
?>
<style>
    /* Footer Pertanian Kontemporer Styles */
    #footerPertanianKontemporer {
        background-color: var(--card-bg-dark-farm3);
        /* Latar footer gelap */
        color: var(--muted-text-dark-farm3);
        padding: 70px 0 0 0;
        font-size: 0.95rem;
        border-top: 3px solid var(--accent-art-farm-dark);
        /* Aksen atas yang kuat */
        position: relative;
        overflow: hidden;
        /* Untuk elemen pseudo */
    }

    /* Komentar CSS: Penyesuaian untuk light mode jika footer ingin beda warna */
    body:not(.dark-mode) #footerPertanianKontemporer {
        background-color: #2F3A4C;
        /* Biru abu-abu gelap untuk light mode footer */
        color: #D5D8DC;
        border-top-color: var(--accent-art-farm);
    }

    body:not(.dark-mode) #footerPertanianKontemporer .footer-section-kontemporer h5,
    body:not(.dark-mode) #footerPertanianKontemporer .footer-brand-kontemporer h4 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerPertanianKontemporer .footer-links-kontemporer li a,
    body:not(.dark-mode) #footerPertanianKontemporer .footer-contact-kontemporer p,
    body:not(.dark-mode) #footerPertanianKontemporer .footer-contact-kontemporer p a {
        color: #D5D8DC;
    }

    body:not(.dark-mode) #footerPertanianKontemporer .footer-links-kontemporer li a:hover,
    body:not(.dark-mode) #footerPertanianKontemporer .footer-contact-kontemporer p a:hover {
        color: var(--secondary-art-farm);
    }

    body:not(.dark-mode) #footerPertanianKontemporer .footer-section-kontemporer h5::after {
        background-color: var(--secondary-art-farm);
    }

    body:not(.dark-mode) #footerPertanianKontemporer .social-icons-kontemporer a {
        background-color: rgba(255, 152, 0, 0.1);
        /* var(--secondary-art-farm) dengan alpha */
        color: var(--secondary-art-farm);
    }

    body:not(.dark-mode) #footerPertanianKontemporer .social-icons-kontemporer a:hover {
        background-color: var(--secondary-art-farm);
        color: #2F3A4C;
    }

    body:not(.dark-mode) #footerPertanianKontemporer .footer-bottom-kontemporer {
        background-color: #222834;
        /* Sub-footer lebih gelap lagi */
        border-top-color: #3D475A;
    }

    /* Efek garis abstrak di latar belakang footer */
    #footerPertanianKontemporer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(var(--accent-art-farm-dark-rgb, 79, 195, 247), 0.03) 10px, rgba(var(--accent-art-farm-dark-rgb, 79, 195, 247), 0.03) 20px),
            repeating-linear-gradient(-45deg, transparent, transparent 10px, rgba(var(--primary-art-farm-dark-rgb, 129, 199, 132), 0.02) 10px, rgba(var(--primary-art-farm-dark-rgb, 129, 199, 132), 0.02) 20px);
        opacity: 0.7;
        z-index: 0;
    }

    body:not(.dark-mode) #footerPertanianKontemporer::before {
        background-image:
            repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(var(--accent-art-farm-rgb, 3, 169, 244), 0.03) 10px, rgba(var(--accent-art-farm-rgb, 3, 169, 244), 0.03) 20px),
            repeating-linear-gradient(-45deg, transparent, transparent 10px, rgba(var(--primary-art-farm-rgb, 76, 175, 80), 0.02) 10px, rgba(var(--primary-art-farm-rgb, 76, 175, 80), 0.02) 20px);
    }


    #footerPertanianKontemporer .container {
        position: relative;
        z-index: 1;
    }

    #footerPertanianKontemporer .footer-brand-kontemporer h4 {
        font-family: 'Teko', sans-serif;
        font-size: 2.2rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 15px;
    }

    #footerPertanianKontemporer .footer-brand-kontemporer h4 i {
        color: var(--accent-art-farm-dark);
        margin-right: 10px;
        font-size: 2rem;
    }

    body:not(.dark-mode) #footerPertanianKontemporer .footer-brand-kontemporer h4 i {
        color: var(--accent-art-farm);
    }

    #footerPertanianKontemporer .footer-brand-kontemporer p.footer-philosophy {
        font-size: 1rem;
        margin-bottom: 20px;
        line-height: 1.7;
        font-style: italic;
        opacity: 0.9;
    }

    #footerPertanianKontemporer .footer-section-kontemporer h5 {
        font-family: 'Teko', sans-serif;
        font-size: 1.5rem;
        /* Judul section footer */
        font-weight: 600;
        color: #fff;
        margin-bottom: 20px;
        padding-bottom: 10px;
        position: relative;
        text-transform: uppercase;
    }

    #footerPertanianKontemporer .footer-section-kontemporer h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 30px;
        height: 3px;
        background-color: var(--accent-art-farm-dark);
    }

    #footerPertanianKontemporer .footer-links-kontemporer ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPertanianKontemporer .footer-links-kontemporer ul li {
        margin-bottom: 10px;
    }

    #footerPertanianKontemporer .footer-links-kontemporer ul a {
        color: var(--muted-text-dark-farm3);
        text-decoration: none;
        transition: color 0.3s ease, letter-spacing 0.3s ease;
        display: inline-block;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    }

    #footerPertanianKontemporer .footer-links-kontemporer ul a:hover {
        color: var(--accent-art-farm-dark);
        letter-spacing: 0.3px;
    }

    #footerPertanianKontemporer .footer-newsletter-kontemporer p {
        margin-bottom: 15px;
    }

    #footerPertanianKontemporer .footer-newsletter-kontemporer form {
        display: flex;
    }

    #footerPertanianKontemporer .footer-newsletter-kontemporer input[type="email"] {
        flex-grow: 1;
        padding: 10px 15px;
        border: 1px solid var(--border-dark-farm3);
        background-color: var(--bg-dark-farm3);
        color: var(--text-dark-farm3);
        border-radius: 5px 0 0 5px;
        font-size: 0.9rem;
    }

    body:not(.dark-mode) #footerPertanianKontemporer .footer-newsletter-kontemporer input[type="email"] {
        border-color: var(--border-light-farm3);
        background-color: var(--bg-light-farm3);
        color: var(--text-light-farm3);
    }

    #footerPertanianKontemporer .footer-newsletter-kontemporer input[type="submit"] {
        padding: 10px 20px;
        background-color: var(--accent-art-farm-dark);
        color: var(--bg-dark-farm3);
        border: none;
        border-radius: 0 5px 5px 0;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-transform: uppercase;
        font-size: 0.9rem;
    }

    body:not(.dark-mode) #footerPertanianKontemporer .footer-newsletter-kontemporer input[type="submit"] {
        background-color: var(--accent-art-farm);
        color: #fff;
    }

    #footerPertanianKontemporer .footer-newsletter-kontemporer input[type="submit"]:hover {
        background-color: var(--secondary-art-farm-dark);
        /* Warna hover tombol subscribe */
    }

    body:not(.dark-mode) #footerPertanianKontemporer .footer-newsletter-kontemporer input[type="submit"]:hover {
        background-color: var(--secondary-art-farm);
    }


    #footerPertanianKontemporer .social-icons-kontemporer a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 5px;
        background-color: rgba(var(--accent-art-farm-dark-rgb, 79, 195, 247), 0.15);
        color: var(--accent-art-farm-dark);
        margin: 0 5px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    #footerPertanianKontemporer .social-icons-kontemporer a:hover {
        background-color: var(--accent-art-farm-dark);
        color: var(--bg-dark-farm3);
        transform: scale(1.1);
    }

    #footerPertanianKontemporer .footer-bottom-kontemporer {
        background-color: var(--bg-dark-farm3);
        padding: 25px 0;
        margin-top: 60px;
        border-top: 1px solid var(--border-dark-farm3);
        text-align: center;
        font-size: 0.9rem;
    }

    #footerPertanianKontemporer .copyright-kontemporer {
        margin: 0;
    }

    #footerPertanianKontemporer .credits-kontemporer a {
        color: var(--accent-art-farm-dark);
        text-decoration: none;
        font-weight: 500;
    }

    body:not(.dark-mode) #footerPertanianKontemporer .credits-kontemporer a {
        color: var(--accent-art-farm);
    }

    #footerPertanianKontemporer .credits-kontemporer a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPertanianKontemporer">
    <div class="footer-top-kontemporer">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-kontemporer" data-aos="fade-up" data-aos-delay="100">
                    <h4><i class="fas fa-spa"></i> AgriNova Tech</h4>
                    <p class="footer-philosophy">"Menanam inovasi, memanen masa depan yang berkelanjutan dan sejahtera bagi semua."</p>
                    <div class="social-icons-kontemporer mt-3">
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-kontemporer footer-links-kontemporer" data-aos="fade-up" data-aos-delay="200">
                    <h5>Navigasi Cepat</h5>
                    <ul>
                        <li><a href="#heroPertanianArtistik"><i class="fas fa-caret-right"></i> Beranda</a></li>
                        <li><a href="#tentangKamiPertanianInovatif"><i class="fas fa-caret-right"></i> Tentang Kami</a></li>
                        <li><a href="#layananPertanianTeknologi"><i class="fas fa-caret-right"></i> Teknologi</a></li>
                        <li><a href="#galeriProdukPertanianInteraktif"><i class="fas fa-caret-right"></i> Galeri</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-kontemporer footer-links-kontemporer" data-aos="fade-up" data-aos-delay="300">
                    <h5>Informasi & Bantuan</h5>
                    <ul>
                        <li><a href="#blogInsightPertanian"><i class="fas fa-caret-right"></i> Wawasan Pertanian</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Pusat Bantuan (FAQ)</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Kebijakan Privasi</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i> Syarat & Ketentuan</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-kontemporer footer-newsletter-kontemporer" data-aos="fade-up" data-aos-delay="400">
                    <h5>Langganan Kabar Terbaru</h5>
                    <p>Dapatkan update inovasi, tips, dan penawaran eksklusif dari AgriNova Tech.</p>
                    <form action="forms/subscribe_art.php" method="post">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <input type="email" name="email_subscribe_art" placeholder="Alamat email Anda" required>
                        <input type="submit" value="Langganan">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-kontemporer">
        <div class="container">
            <p class="copyright-kontemporer">&copy; <?php echo date("Y"); ?> <strong><span>AgriNova Tech</span></strong>. Inovasi Tanpa Henti.</p>
            <p class="credits-kontemporer mt-1">
                Desain oleh <a href="#">Tim Kreatif AgriNova</a>
            </p>
        </div>
    </div>
</footer>