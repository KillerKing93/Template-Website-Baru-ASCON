<?php // File: components/footer_comprehensive.php 
?>
<style>
    /* Comprehensive Footer Component Styles */
    #footerComprehensive {
        background-color: #2C3E50;
        /* Warna gelap utama */
        color: #BDC3C7;
        /* Warna teks abu-abu terang */
        padding: 70px 0 0 0;
        /* Padding atas, tanpa padding bawah karena ada sub-footer */
        font-size: 0.95rem;
    }

    #footerComprehensive .footer-top {
        padding-bottom: 40px;
        border-bottom: 1px solid #3E5165;
        /* Garis pemisah halus */
    }

    #footerComprehensive .footer-contact h3,
    #footerComprehensive .footer-links h4,
    #footerComprehensive .footer-newsletter h4 {
        font-size: 1.5rem;
        /* Ukuran judul footer */
        font-weight: 700;
        color: #FFFFFF;
        /* Judul putih */
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
        font-family: 'Montserrat', sans-serif;
    }

    /* Garis bawah untuk judul footer */
    #footerComprehensive .footer-contact h3::after,
    #footerComprehensive .footer-links h4::after,
    #footerComprehensive .footer-newsletter h4::after {
        content: '';
        position: absolute;
        display: block;
        width: 50px;
        height: 3px;
        background: #007BFF;
        /* Warna aksen */
        bottom: 0;
        left: 0;
        border-radius: 2px;
    }

    #footerComprehensive .footer-contact p {
        line-height: 1.7;
        margin-bottom: 10px;
    }

    #footerComprehensive .footer-contact p strong {
        color: #E0E0E0;
    }

    #footerComprehensive .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerComprehensive .footer-links ul li {
        padding: 8px 0;
        /* Jarak antar link */
        display: flex;
        align-items: center;
    }

    #footerComprehensive .footer-links ul li:first-child {
        padding-top: 0;
    }

    #footerComprehensive .footer-links ul a {
        color: #BDC3C7;
        transition: color 0.3s ease;
        display: inline-block;
        line-height: 1;
        text-decoration: none;
    }

    #footerComprehensive .footer-links ul a:hover {
        color: #00A9FF;
        /* Warna aksen biru cerah saat hover */
        text-decoration: underline;
    }

    #footerComprehensive .footer-links ul i {
        /* Ikon chevron untuk link */
        padding-right: 8px;
        color: #007BFF;
        /* Warna ikon */
        font-size: 0.9rem;
        line-height: 1;
    }

    #footerComprehensive .footer-newsletter p {
        margin-bottom: 15px;
    }

    #footerComprehensive .footer-newsletter form {
        margin-top: 20px;
        background: #fff;
        padding: 6px 10px;
        position: relative;
        border-radius: 50px;
        /* Input grup bulat */
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.06);
    }

    #footerComprehensive .footer-newsletter form input[type="email"] {
        border: 0;
        padding: 8px 15px;
        /* Padding input email */
        width: calc(100% - 120px);
        /* Lebar input email */
        font-size: 0.95rem;
        border-radius: 50px 0 0 50px;
    }

    #footerComprehensive .footer-newsletter form input[type="email"]:focus {
        outline: none;
    }

    #footerComprehensive .footer-newsletter form input[type="submit"] {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        border: 0;
        background: none;
        font-size: 1rem;
        padding: 0 25px;
        /* Padding tombol subscribe */
        background: #007BFF;
        /* Warna tombol */
        color: #fff;
        transition: background-color 0.3s ease;
        border-radius: 0 50px 50px 0;
        /* Sudut tombol */
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        font-weight: 600;
    }

    #footerComprehensive .footer-newsletter form input[type="submit"]:hover {
        background: #0056b3;
        /* Warna tombol saat hover */
    }

    #footerComprehensive .social-links a {
        font-size: 1.3rem;
        /* Ukuran ikon sosial */
        display: inline-block;
        background: rgba(255, 255, 255, 0.08);
        /* Latar belakang transparan untuk ikon */
        color: #fff;
        line-height: 1;
        padding: 10px 0;
        /* Padding atas bawah */
        margin-right: 8px;
        border-radius: 50%;
        /* Ikon bulat */
        text-align: center;
        width: 40px;
        /* Lebar ikon */
        height: 40px;
        /* Tinggi ikon */
        transition: all 0.3s ease-in-out;
    }

    #footerComprehensive .social-links a:hover {
        background: #007BFF;
        /* Warna aksen saat hover */
        color: #fff;
        transform: scale(1.1);
    }

    #footerComprehensive .footer-bottom {
        padding: 30px 0;
        text-align: center;
    }

    #footerComprehensive .copyright {
        margin: 0;
        font-size: 0.9rem;
    }

    #footerComprehensive .credits {
        font-size: 0.85rem;
        margin-top: 5px;
    }

    #footerComprehensive .credits a {
        color: #00A9FF;
        text-decoration: none;
        transition: color 0.3s;
    }

    #footerComprehensive .credits a:hover {
        color: #FFFFFF;
    }
</style>

<footer id="footerComprehensive">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-12 footer-contact" data-aos="fade-up" data-aos-delay="100">
                    <h3><i class="fas fa-rocket me-2"></i> NamaBisnis Anda</h3>
                    <p>
                        Jl. Inovasi Digital No. 123, Blok A <br>
                        Kota Teknologi, Kode Pos 54321<br>
                        Indonesia <br><br>
                        <strong><i class="fas fa-phone-alt me-1"></i> Telepon:</strong> <a href="tel:+62211234567" class="text-white-50 text-decoration-none">(021) 123-4567</a><br>
                        <strong><i class="fas fa-envelope me-1"></i> Email:</strong> <a href="mailto:info@namabisnisanda.com" class="text-white-50 text-decoration-none">info@namabisnisanda.com</a><br>
                    </p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links" data-aos="fade-up" data-aos-delay="200">
                    <h4>Tautan Cepat</h4>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i> <a href="#heroComplex">Beranda</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#aboutDetailed">Tentang Kami</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#servicesInteractive">Layanan</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#portfolioGallery">Portfolio</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="terms.php">Syarat & Ketentuan</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="privacy.php">Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-6 footer-links" data-aos="fade-up" data-aos-delay="300">
                    <h4>Layanan Unggulan</h4>
                    <ul>
                        <li><i class="fas fa-chevron-right"></i> <a href="#servicesInteractive">Pengembangan Web</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#servicesInteractive">Aplikasi Mobile</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#servicesInteractive">Pemasaran Digital</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#servicesInteractive">Solusi Cloud</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#servicesInteractive">Keamanan Siber</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#servicesInteractive">Konsultasi IT</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-newsletter" data-aos="fade-up" data-aos-delay="400">
                    <h4>Langganan Newsletter</h4>
                    <p>Dapatkan berita terbaru, artikel menarik, dan penawaran spesial langsung ke email Anda.</p>
                    <form action="forms/subscribe.php" method="post">
                        <input type="email" name="email" placeholder="Masukkan email Anda" required><input type="submit" value="Langganan">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                &copy; Hak Cipta <strong><span>NamaBisnis Anda</span></strong> <?php echo date("Y"); ?>. Semua Hak Dilindungi.
            </div>
            <div class="credits">
                Dirancang oleh <a href="https://[websiteanda].com/">Tim Anda</a>
            </div>
        </div>
    </div>
</footer>