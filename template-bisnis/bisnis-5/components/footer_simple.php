<?php // File: components/footer_simple.php 
?>
<style>
    /* Simple Footer Component Styles */
    #footerSimple {
        background-color: var(--card-bg-light);
        /* Default light */
        color: #6c757d;
        /* Warna teks footer */
        padding: 40px 0;
        font-size: 0.9rem;
        border-top: 1px solid var(--border-light);
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode #footerSimple {
        background-color: var(--card-bg-dark);
        color: #adb5bd;
        /* Warna teks footer di dark mode */
        border-top-color: var(--border-dark);
    }

    #footerSimple .footer-content-simple {
        text-align: center;
    }

    #footerSimple .footer-logo-simple {
        font-family: 'Raleway', sans-serif;
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--primary-calm);
        /* Warna logo */
        margin-bottom: 10px;
        display: block;
        /* Agar margin bottom bekerja */
        text-decoration: none;
    }

    #footerSimple .footer-logo-simple i {
        margin-right: 5px;
    }

    body.dark-mode #footerSimple .footer-logo-simple {
        color: var(--accent-calm);
    }

    #footerSimple .footer-links-simple {
        list-style: none;
        padding: 0;
        margin: 0 0 15px 0;
    }

    #footerSimple .footer-links-simple li {
        display: inline-block;
        margin: 0 10px;
    }

    #footerSimple .footer-links-simple li a {
        color: #6c757d;
        /* Warna link */
        text-decoration: none;
        transition: color 0.3s ease;
    }

    #footerSimple .footer-links-simple li a:hover {
        color: var(--primary-calm);
        /* Warna link hover */
        text-decoration: underline;
    }

    body.dark-mode #footerSimple .footer-links-simple li a {
        color: #adb5bd;
    }

    body.dark-mode #footerSimple .footer-links-simple li a:hover {
        color: var(--accent-calm);
    }

    #footerSimple .social-icons-simple a {
        color: #6c757d;
        /* Warna ikon sosial */
        margin: 0 8px;
        font-size: 1.2rem;
        transition: color 0.3s ease, transform 0.3s ease;
        display: inline-block;
        /* Untuk transform */
    }

    #footerSimple .social-icons-simple a:hover {
        color: var(--primary-calm);
        transform: scale(1.1);
    }

    body.dark-mode #footerSimple .social-icons-simple a {
        color: #adb5bd;
    }

    body.dark-mode #footerSimple .social-icons-simple a:hover {
        color: var(--accent-calm);
    }

    #footerSimple .copyright-simple {
        margin-top: 20px;
        font-size: 0.85rem;
    }
</style>

<footer id="footerSimple">
    <div class="container footer-content-simple">
        <a href="index.php" class="footer-logo-simple" data-aos="fade-down" data-aos-delay="100"><i class="fas fa-leaf"></i> NamaBisnis</a>

        <ul class="footer-links-simple" data-aos="fade-up" data-aos-delay="200">
            <li><a href="#heroSerene">Beranda</a></li>
            <li><a href="#aboutGentle">Tentang</a></li>
            <li><a href="#servicesMinimalist">Layanan</a></li>
            <li><a href="privacy.php">Privasi</a></li> <?php /* Contoh link ke halaman lain */ ?>
        </ul>

        <div class="social-icons-simple mb-3" data-aos="fade-up" data-aos-delay="300">
            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <p class="copyright-simple" data-aos="fade-up" data-aos-delay="400">
            &copy; <?php echo date("Y"); ?> <strong><span>NamaBisnis Anda</span></strong>. Hak Cipta Dilindungi.
        </p>
        <?php /*
        <p class="credits-simple" data-aos="fade-up" data-aos-delay="450">
            Dirancang dengan <i class="fas fa-heart" style="color: var(--accent-calm);"></i> oleh <a href="#" style="color: var(--primary-calm); text-decoration: none;">Tim Anda</a>
        </p>
        */ ?>
    </div>
</footer>