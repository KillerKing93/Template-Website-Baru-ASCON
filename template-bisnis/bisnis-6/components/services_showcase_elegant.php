<?php // File: components/services_showcase_elegant.php 
?>
<style>
    /* Elegant Services Showcase Component Styles */
    #servicesShowcaseElegant {
        background-color: var(--bg-light);
        /* Default light */
        transition: background-color 0.4s ease;
    }

    body.dark-mode #servicesShowcaseElegant {
        background-color: var(--bg-dark);
    }

    .service-card-elegant {
        background-color: var(--card-bg-light);
        border-radius: 8px;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        /* Efek transisi smooth */
        height: 100%;
        border-left: 4px solid transparent;
        /* Border kiri untuk hover */
        position: relative;
        overflow: hidden;
        /* Untuk efek pseudo */
    }

    body.dark-mode .service-card-elegant {
        background-color: var(--card-bg-dark);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
    }

    .service-card-elegant:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 40px rgba(138, 43, 226, 0.15);
        /* Warna primer */
        border-left-color: var(--primary-luminous);
    }

    body.dark-mode .service-card-elegant:hover {
        box-shadow: 0 15px 40px rgba(160, 96, 255, 0.2);
        /* Warna primer dark */
        border-left-color: var(--primary-luminous-dark);
    }

    /* Efek garis diagonal di latar belakang card saat hover */
    .service-card-elegant::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 150%;
        height: 150%;
        background: linear-gradient(45deg, rgba(var(--secondary-luminous-rgb, 255, 215, 0), 0.03) 25%, transparent 25%, transparent 50%, rgba(var(--secondary-luminous-rgb, 255, 215, 0), 0.03) 50%, rgba(var(--secondary-luminous-rgb, 255, 215, 0), 0.03) 75%, transparent 75%, transparent);
        background-size: 30px 30px;
        opacity: 0;
        transform: rotate(0deg);
        transition: opacity 0.5s ease, transform 0.5s ease;
        z-index: 0;
    }

    body.dark-mode .service-card-elegant::after {
        background: linear-gradient(45deg, rgba(var(--secondary-luminous-dark-rgb, 255, 235, 153), 0.04) 25%, transparent 25%, transparent 50%, rgba(var(--secondary-luminous-dark-rgb, 255, 235, 153), 0.04) 50%, rgba(var(--secondary-luminous-dark-rgb, 255, 235, 153), 0.04) 75%, transparent 75%, transparent);
        background-size: 30px 30px;
    }

    .service-card-elegant:hover::after {
        opacity: 1;
        transform: rotate(10deg);
    }


    .service-card-elegant .service-icon-elegant {
        font-size: 3rem;
        /* Ukuran ikon */
        color: var(--primary-luminous);
        margin-bottom: 25px;
        display: inline-block;
        transition: color 0.4s ease, transform 0.4s ease;
        position: relative;
        z-index: 1;
    }

    body.dark-mode .service-card-elegant .service-icon-elegant {
        color: var(--primary-luminous-dark);
    }

    .service-card-elegant:hover .service-icon-elegant {
        transform: scale(1.1) rotate(-5deg);
        color: var(--secondary-luminous);
    }

    body.dark-mode .service-card-elegant:hover .service-icon-elegant {
        color: var(--secondary-luminous-dark);
    }


    .service-card-elegant h3.service-title-elegant {
        font-family: 'Playfair Display', serif;
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        z-index: 1;
    }

    .service-card-elegant p.service-desc-elegant {
        font-size: 1rem;
        color: var(--muted-text-light);
        line-height: 1.8;
        margin-bottom: 25px;
        position: relative;
        z-index: 1;
        transition: color 0.4s ease;
    }

    body.dark-mode .service-card-elegant p.service-desc-elegant {
        color: var(--muted-text-dark);
    }

    .service-card-elegant .btn-details-elegant {
        font-family: 'Lato', sans-serif;
        font-size: 0.9rem;
        font-weight: 700;
        color: var(--primary-luminous);
        text-decoration: none;
        position: relative;
        z-index: 1;
        transition: color 0.4s ease;
    }

    .service-card-elegant .btn-details-elegant i {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    .service-card-elegant:hover .btn-details-elegant {
        color: var(--secondary-luminous);
    }

    .service-card-elegant:hover .btn-details-elegant i {
        transform: translateX(5px);
    }

    body.dark-mode .service-card-elegant .btn-details-elegant {
        color: var(--primary-luminous-dark);
    }

    body.dark-mode .service-card-elegant:hover .btn-details-elegant {
        color: var(--secondary-luminous-dark);
    }
</style>

<section id="servicesShowcaseElegant" class="section-elegant">
    <div class="container">
        <div class="section-title-elegant" data-aos="fade-up">
            <h2>Layanan Unggulan Kami</h2>
            <p class="subtitle-elegant">Solusi Digital Komprehensif yang Dirancang untuk Mengangkat Bisnis Anda ke Tingkat Berikutnya.</p>
        </div>

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card-elegant">
                    <div class="service-icon-elegant"><i class="fas fa-lightbulb"></i></div>
                    <h3 class="service-title-elegant">Konsultasi Strategi Digital</h3>
                    <p class="service-desc-elegant">Merumuskan peta jalan digital yang jelas dan terukur untuk transformasi bisnis Anda, dari analisis hingga implementasi.</p>
                    <a href="#contactOsmElegant" class="btn-details-elegant">Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-elegant">
                    <div class="service-icon-elegant"><i class="fas fa-object-group"></i></div>
                    <h3 class="service-title-elegant">Desain UI/UX Berkelas</h3>
                    <p class="service-desc-elegant">Menciptakan antarmuka yang tidak hanya indah secara visual tetapi juga sangat intuitif dan berpusat pada pengalaman pengguna.</p>
                    <a href="#contactOsmElegant" class="btn-details-elegant">Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card-elegant">
                    <div class="service-icon-elegant"><i class="fas fa-code-branch"></i></div>
                    <h3 class="service-title-elegant">Pengembangan Web & Aplikasi</h3>
                    <p class="service-desc-elegant">Membangun solusi web dan aplikasi mobile yang responsif, aman, dan skalabel menggunakan teknologi terkini.</p>
                    <a href="#contactOsmElegant" class="btn-details-elegant">Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <?php /* Tambahkan lebih banyak layanan jika perlu, dengan delay AOS yang berbeda */ ?>
        </div>
    </div>
</section>