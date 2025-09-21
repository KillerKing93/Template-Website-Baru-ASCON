<?php // File: components/footer.php 
?>
<style>
    /* Footer Component Styles */
    .footer-component {
        background-color: #343a40;
        /* Abu-abu gelap Bootstrap */
        color: #adb5bd;
        /* Warna teks lebih terang */
        padding: 50px 0;
    }

    .footer-component h5 {
        color: #ffffff;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .footer-component p,
    .footer-component ul li a {
        color: #adb5bd;
        font-size: 0.95rem;
    }

    .footer-component ul {
        list-style: none;
        padding-left: 0;
    }

    .footer-component ul li {
        margin-bottom: 10px;
    }

    .footer-component ul li a:hover {
        color: #007bff;
        text-decoration: none;
    }

    .footer-component .social-icons a {
        color: #adb5bd;
        margin-right: 15px;
        font-size: 1.5rem;
        transition: color 0.3s ease;
    }

    .footer-component .social-icons a:hover {
        color: #007bff;
    }

    .footer-component .copyright {
        border-top: 1px solid #495057;
        /* Garis pemisah */
        padding-top: 30px;
        margin-top: 30px;
        text-align: center;
        font-size: 0.9rem;
    }
</style>

<footer class="footer-component">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <h5><i class="fas fa-building-columns me-2"></i> NamaBisnis Anda</h5>
                <p>Menyediakan solusi inovatif untuk membantu bisnis Anda tumbuh dan berkembang di era digital yang kompetitif.</p>
                <div class="social-icons mt-3">
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h5>Navigasi</h5>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#tentang-kami">Tentang Kami</a></li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>Layanan Utama</h5>
                <ul>
                    <li><a href="#layanan">Pengembangan Web</a></li>
                    <li><a href="#layanan">Pemasaran Digital</a></li>
                    <li><a href="#layanan">Konsultasi IT</a></li>
                    <li><a href="#layanan">Keamanan Siber</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>Hubungi Kami</h5>
                <ul class="contact-footer">
                    <li><i class="fas fa-map-marker-alt me-2"></i> Jl. Contoh No. 123, Kota Anda</li>
                    <li><i class="fas fa-phone me-2"></i> (021) 123-4567</li>
                    <li><i class="fas fa-envelope me-2"></i> info@namabisnis.com</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            &copy; <?php echo date("Y"); ?> NamaBisnis Anda. Semua Hak Dilindungi Undang-Undang.
        </div>
    </div>
</footer>