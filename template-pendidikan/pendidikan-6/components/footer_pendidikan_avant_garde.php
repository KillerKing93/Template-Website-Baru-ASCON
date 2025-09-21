<?php // File: components/footer_pendidikan_avant_garde.php 
?>
<style>
    /* Footer Pendidikan Avant-Garde Styles */
    #footerPendidikanAvantGarde {
        background-color: var(--bg-dark-edu6);
        /* Footer selalu gelap untuk kesan avant-garde */
        color: var(--muted-text-dark-edu6);
        padding: 80px 0 0 0;
        font-size: 0.95rem;
        border-top: 5px solid;
        border-image-slice: 1;
        border-image-source: linear-gradient(to right, var(--primary-nova-dark), var(--secondary-nova-dark), var(--accent-nova-dark));
        position: relative;
        overflow: hidden;
    }

    /* Efek "geometric pattern" atau "abstract lines" di latar belakang footer */
    #footerPendidikanAvantGarde::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='rgba(var(--accent-nova-dark-rgb,0,229,255),0.04)' fill-opacity='1'%3E%3Cpath d='M0 0h40v40H0zM40 40h40v40H40z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.8;
        z-index: 0;
        animation: footerAbstractScroll 60s linear infinite;
    }

    @keyframes footerAbstractScroll {
        0% {
            background-position: 0px 0px;
        }

        100% {
            background-position: -400px -400px;
        }
    }

    /* Penyesuaian untuk light mode jika footer ingin beda warna (tapi kita buat dominan gelap) */
    body:not(.dark-mode) #footerPendidikanAvantGarde {
        background-color: #1A1A1A;
        /* Tetap gelap */
        color: #D0D0D0;
        border-image-source: linear-gradient(to right, var(--primary-nova), var(--secondary-nova), var(--accent-nova));
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde::before {
        background-image:
            url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='rgba(var(--accent-nova-rgb,0,188,212),0.05)' fill-opacity='1'%3E%3Cpath d='M0 0h40v40H0zM40 40h40v40H40z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-section-ag h5,
    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-brand-ag h4 {
        color: #FFFFFF;
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-links-ag li a,
    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-contact-ag p,
    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-contact-ag p a {
        color: #D0D0D0;
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-links-ag li a:hover,
    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-contact-ag p a:hover {
        color: var(--secondary-nova);
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-section-ag h5::after {
        background: linear-gradient(90deg, var(--secondary-nova), var(--accent-nova));
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde .social-icons-ag a {
        background-color: rgba(255, 111, 97, 0.1);
        /* var(--secondary-nova) dengan alpha */
        color: var(--secondary-nova);
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde .social-icons-ag a:hover {
        background-color: var(--secondary-nova);
        color: #1A1A1A;
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-bottom-ag {
        background-color: #0F0F0F;
        /* Sub-footer paling gelap */
        border-top-color: #2A2A2A;
    }


    #footerPendidikanAvantGarde .container {
        position: relative;
        z-index: 1;
    }

    #footerPendidikanAvantGarde .footer-top-ag {
        padding-bottom: 50px;
    }

    #footerPendidikanAvantGarde .footer-brand-ag h4 {
        font-family: 'Syne', sans-serif;
        font-size: 2.3rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 15px;
        letter-spacing: -0.5px;
    }

    #footerPendidikanAvantGarde .footer-brand-ag h4 i {
        color: var(--accent-nova-dark);
        margin-right: 12px;
        font-size: 2rem;
        transform: rotate(-10deg);
        /* Ikon sedikit miring */
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-brand-ag h4 i {
        color: var(--accent-nova);
    }

    #footerPendidikanAvantGarde .footer-brand-ag p.footer-statement-ag {
        font-size: 1rem;
        margin-bottom: 20px;
        line-height: 1.7;
        opacity: 0.9;
        max-width: 380px;
        font-family: 'Work Sans', sans-serif;
        font-weight: 500;
    }

    #footerPendidikanAvantGarde .footer-section-ag h5 {
        font-family: 'Syne', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 22px;
        padding-bottom: 10px;
        position: relative;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    #footerPendidikanAvantGarde .footer-section-ag h5::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, var(--secondary-nova-dark), var(--accent-nova-dark));
        border-radius: 1px;
    }

    #footerPendidikanAvantGarde .footer-links-ag ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footerPendidikanAvantGarde .footer-links-ag ul li {
        margin-bottom: 12px;
    }

    #footerPendidikanAvantGarde .footer-links-ag ul a {
        color: var(--muted-text-dark-edu6);
        text-decoration: none;
        transition: color 0.3s ease, letter-spacing 0.3s ease;
        display: inline-block;
        font-family: 'Work Sans', sans-serif;
        font-weight: 500;
    }

    #footerPendidikanAvantGarde .footer-links-ag ul a:hover {
        color: var(--accent-nova-dark);
        letter-spacing: 0.5px;
    }

    #footerPendidikanAvantGarde .footer-links-ag ul a i {
        margin-right: 8px;
        font-size: 0.9em;
        opacity: 0.8;
    }


    #footerPendidikanAvantGarde .footer-contact-ag p {
        margin-bottom: 12px;
        line-height: 1.7;
    }

    #footerPendidikanAvantGarde .footer-contact-ag p i {
        color: var(--accent-nova-dark);
        margin-right: 10px;
        width: 18px;
        text-align: center;
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde .footer-contact-ag p i {
        color: var(--accent-nova);
    }

    #footerPendidikanAvantGarde .footer-contact-ag p a {
        color: var(--muted-text-dark-edu6);
        text-decoration: none;
    }

    #footerPendidikanAvantGarde .footer-contact-ag p a:hover {
        color: var(--accent-nova-dark);
        text-decoration: underline;
    }

    #footerPendidikanAvantGarde .social-icons-ag a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 6px;
        /* Kotak */
        background-color: rgba(var(--accent-nova-dark-rgb, 0, 229, 255), 0.1);
        color: var(--accent-nova-dark);
        margin: 0 5px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }

    #footerPendidikanAvantGarde .social-icons-ag a:hover {
        background-color: var(--accent-nova-dark);
        color: var(--bg-dark-edu6);
        transform: scale(1.1) rotate(3deg);
    }

    #footerPendidikanAvantGarde .footer-bottom-ag {
        background-color: #0A0A0A;
        /* Sub-footer paling gelap */
        padding: 25px 0;
        margin-top: 60px;
        border-top: 1px solid #1E1E1E;
        /* var(--card-bg-dark-edu6) */
        text-align: center;
        font-size: 0.9rem;
    }

    #footerPendidikanAvantGarde .copyright-ag {
        margin: 0;
    }

    #footerPendidikanAvantGarde .credits-ag a {
        color: var(--accent-nova-dark);
        text-decoration: none;
        font-weight: 500;
    }

    body:not(.dark-mode) #footerPendidikanAvantGarde .credits-ag a {
        color: var(--accent-nova);
    }

    #footerPendidikanAvantGarde .credits-ag a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footerPendidikanAvantGarde">
    <div class="footer-top-ag">
        <div class="container">
            <div class="row gy-5">

                <div class="col-lg-4 col-md-12 footer-brand-ag" data-aos="fade-up" data-aos-delay="100">
                    <h4><i class="fas fa-flask-vial"></i> Nova Universitas</h4> <?php /* Ikon baru */ ?>
                    <p class="footer-statement-ag">"Merintis batas baru dalam pendidikan interdisipliner, tempat seni bertemu sains, dan kreativitas bersinergi dengan teknologi."</p>
                    <div class="social-icons-ag mt-3">
                        <a href="#" title="Behance"><i class="fab fa-behance-square"></i></a>
                        <a href="#" title="Dribbble"><i class="fab fa-dribbble-square"></i></a>
                        <a href="#" title="ArtStation"><i class="fab fa-artstation"></i></a>
                        <a href="#" title="Medium"><i class="fab fa-medium"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6 footer-section-ag footer-links-ag" data-aos="fade-up" data-aos-delay="200">
                    <h5>Kampus</h5>
                    <ul>
                        <li><a href="#tentangKamiPendidikanInterdisipliner"><i class="fas fa-atom"></i> Manifesto</a></li>
                        <li><a href="#programStudiInovatifNova"><i class="fas fa-microscope"></i> Program Studi</a></li>
                        <li><a href="#pusatKolaborasiSeniSains"><i class="fas fa-palette"></i> Kolaborasi</a></li>
                        <li><a href="#profilDosenPenelitiNova"><i class="fas fa-chalkboard-teacher"></i> Pengajar</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 footer-section-ag footer-links-ag" data-aos="fade-up" data-aos-delay="300">
                    <h5>Sumber Daya</h5>
                    <ul>
                        <li><a href="#eventPameranKaryaNova"><i class="fas fa-calendar-alt"></i> Acara & Pameran</a></li>
                        <li><a href="#"><i class="fas fa-book"></i> Jurnal Riset Nova</a></li>
                        <li><a href="#"><i class="fas fa-photo-video"></i> Galeri Digital</a></li>
                        <li><a href="#"><i class="fas fa-podcast"></i> Nova Podcasts</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 footer-section-ag footer-contact-ag" data-aos="fade-up" data-aos-delay="400">
                    <h5>Hubungi Nexus</h5>
                    <p><i class="fas fa-map-marker-alt"></i> Nova Universitas, Distrik Kreatif, Kota Inovasi</p>
                    <p><i class="fas fa-phone-alt"></i> <a href="tel:+622120242025">(021) 2024-2025</a></p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:connect@novauniversitas.id">connect@novauniversitas.id</a></p>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-ag">
        <div class="container">
            <p class="copyright-ag">&copy; <?php echo date("Y"); ?> <strong><span>Nova Universitas</span></strong>. Interdisciplinary Nexus of Arts & Digital Sciences.</p>
            <p class="credits-ag mt-1">
                Conceptualized by <a href="#">The Nova Collective</a>
            </p>
        </div>
    </div>
</footer>