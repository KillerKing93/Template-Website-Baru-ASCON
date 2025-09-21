<?php // File: components/footer_pertanian_tech_savvy.php 
?>
<style>
    /* Footer Pertanian Tech Savvy Styles */
    #footerPertanianTechSavvy {
        background-color: var(--bg-dark-farm5);
        /* Footer selalu gelap untuk kesan techy */
        color: var(--muted-text-dark-farm5);
        padding: 70px 0 0 0;
        font-size: 0.95rem;
        border-top: 3px solid var(--primary-futura-farm-dark);
        /* Aksen atas */
        position: relative;
        overflow: hidden;
        /* Untuk efek pseudo */
    }

    /* Efek garis-garis data di latar belakang footer */
    #footerPertanianTechSavvy::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background:
            repeating-linear-gradient(45deg,
                rgba(var(--accent-futura-farm-dark-rgb, 3, 218, 197), 0.02),
                rgba(var(--accent-futura-farm-dark-rgb, 3, 218, 197), 0.02) 1px,
                transparent 1px,
                transparent 10px),
            repeating-linear-gradient(-45deg,
                rgba(var(--secondary-futura-farm-dark-rgb, 243, 211, 74), 0.02),
                rgba(var(--secondary-futura-farm-dark-rgb, 243, 211, 74), 0.02) 1px,
                transparent 1px,
                transparent 10px);
        opacity: 0.7;
        z-index: 0;
    }


    #footerPertanianTechSavvy .container {
        position: relative;
        z-index: 1;
    }

    #footerPertanianTechSavvy .footer-brand-tech h4 {
        font-family: 'Exo 2', sans-serif;
        font-size: 2.2rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 15px;
    }

    #footerPertanianTechSavvy .footer-brand-tech h4 .logo-icon-tech {
        /* Bisa berupa SVG atau Font Awesome dengan style techy */
        display: inline-block;
        width: 30px;
        height: 30px;
        background-color: var(--accent-futura-farm-dark);
        border-radius: 4px;
        /* Kotak sedikit bulat */
        margin-right: 10px;
        vertical-align: -3px;
        text-align: center;
        line-height: 30px;
        color: var(--bg-dark-farm5);
        font-size: 1.1rem;
    }

    #footerPertanianTechSavvy .footer-brand-tech p.footer-vision {
        font-size: 1rem;
        margin-bottom: 20px;
        line-height: 1.7;
        font-style: italic;
        opacity: 0.9;
        max-width: 380px;
    }

    #footerPertanianTechSavvy .footer-section-tech h5 {
        font-family: 'Exo 2', sans-serif;
        font-size: 1.3rem;
        /* Judul section footer */
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
        padding-bottom: 10px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }

    #footerPertanianTechSavvy .footer-section-tech h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-futura-farm-dark), var(--accent-futura-farm-dark));
        border-radius: 1px;
    }

    #footerPertanianTechSavvy .footer-links-tech ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPertanianTechSavvy .footer-links-tech ul li {
        margin-bottom: 10px;
    }

    #footerPertanianTechSavvy .footer-links-tech ul a {
        color: var(--muted-text-dark-farm5);
        text-decoration: none;
        transition: color 0.3s ease, padding-left 0.3s ease;
        display: inline-block;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
    }

    #footerPertanianTechSavvy .footer-links-tech ul a:hover {
        color: var(--accent-futura-farm-dark);
        padding-left: 7px;
    }

    #footerPertanianTechSavvy .footer-links-tech ul a i {
        margin-right: 7px;
        font-size: 0.85em;
        opacity: 0.8;
    }


    #footerPertanianTechSavvy .footer-newsletter-tech p {
        margin-bottom: 15px;
    }

    #footerPertanianTechSavvy .footer-newsletter-tech form {
        display: flex;
        margin-top: 10px;
    }

    #footerPertanianTechSavvy .footer-newsletter-tech input[type="email"] {
        flex-grow: 1;
        padding: 10px 15px;
        border: 1px solid var(--border-dark-farm5);
        background-color: var(--bg-dark-farm5);
        color: var(--text-dark-farm5);
        border-radius: 5px 0 0 5px;
        font-size: 0.9rem;
    }

    #footerPertanianTechSavvy .footer-newsletter-tech input[type="submit"] {
        padding: 10px 18px;
        background-color: var(--accent-futura-farm-dark);
        color: var(--bg-dark-farm5);
        border: none;
        border-radius: 0 5px 5px 0;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-transform: uppercase;
        font-size: 0.85rem;
    }

    #footerPertanianTechSavvy .footer-newsletter-tech input[type="submit"]:hover {
        background-color: var(--secondary-futura-farm-dark);
    }

    #footerPertanianTechSavvy .social-icons-tech a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 5px;
        background-color: rgba(var(--accent-futura-farm-dark-rgb, 3, 218, 197), 0.15);
        color: var(--accent-futura-farm-dark);
        margin: 0 4px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    #footerPertanianTechSavvy .social-icons-tech a:hover {
        background-color: var(--accent-futura-farm-dark);
        color: var(--bg-dark-farm5);
        transform: scale(1.1);
    }

    #footerPertanianTechSavvy .footer-bottom-tech {
        background-color: #0A1220;
        /* Sub-footer paling gelap */
        padding: 25px 0;
        margin-top: 60px;
        border-top: 1px solid #1E293B;
        /* var(--card-bg-dark-farm5) */
        text-align: center;
        font-size: 0.9rem;
    }

    #footerPertanianTechSavvy .copyright-tech {
        margin: 0;
    }

    #footerPertanianTechSavvy .credits-tech a {
        color: var(--accent-futura-farm-dark);
        text-decoration: none;
        font-weight: 500;
    }

    #footerPertanianTechSavvy .credits-tech a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPertanianTechSavvy">
    <div class="footer-top-tech">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-tech" data-aos="fade-up" data-aos-delay="100">
                    <h4><span class="logo-icon-tech"><i class="fas fa-cogs"></i></span> AgroFutura</h4>
                    <p class="footer-vision">"Mendigitalkan pertanian, memberdayakan petani, melestarikan planet untuk generasi mendatang."</p>
                    <div class="social-icons-tech mt-3">
                        <a href="#" title="TechCrunch"><i class="fab fa-y-combinator"></i></a> <?php /* Contoh ikon tech */ ?>
                        <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Medium"><i class="fab fa-medium-m"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-tech footer-links-tech" data-aos="fade-up" data-aos-delay="200">
                    <h5>Platform</h5>
                    <ul>
                        <li><a href="#solusiAgritechPertanian"><i class="fas fa-angle-right"></i> AgriManage Pro</a></li>
                        <li><a href="#solusiAgritechPertanian"><i class="fas fa-angle-right"></i> MarketLink</a></li>
                        <li><a href="#solusiAgritechPertanian"><i class="fas fa-angle-right"></i> AgriLearn</a></li>
                        <li><a href="#"><i class="fas fa-angle-right"></i> API Developer</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-tech footer-links-tech" data-aos="fade-up" data-aos-delay="300">
                    <h5>Perusahaan</h5>
                    <ul>
                        <li><a href="#tentangKamiPertanianTeknologi"><i class="fas fa-angle-right"></i> Tentang Kami</a></li>
                        <li><a href="#inovasiRisetPertanian"><i class="fas fa-angle-right"></i> Riset & Inovasi</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Blog Developer</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-tech footer-newsletter-tech" data-aos="fade-up" data-aos-delay="400">
                    <h5>Update Teknologi</h5>
                    <p>Dapatkan berita terbaru tentang inovasi AgriTech langsung ke inbox Anda.</p>
                    <form action="forms/subscribe_futura.php" method="post">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <input type="email" name="email_subscribe_futura" placeholder="Alamat email Anda" required>
                        <input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-tech">
        <div class="container">
            <p class="copyright-tech">&copy; <?php echo date("Y"); ?> <strong><span>AgroFutura Technologies</span></strong>. All Rights Reserved.</p>
            <p class="credits-tech mt-1">
                System Architecture by <a href="#">AgroFutura Labs</a>
            </p>
        </div>
    </div>
</footer>