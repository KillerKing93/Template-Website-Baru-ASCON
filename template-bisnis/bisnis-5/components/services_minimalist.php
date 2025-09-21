<?php // File: components/services_minimalist.php 
?>
<style>
    /* Minimalist Services Component Styles */
    #servicesMinimalist {
        background-color: #FFFFFF;
        /* Latar putih bersih di light mode */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #servicesMinimalist {
        background-color: var(--card-bg-dark);
        /* Latar card di dark mode */
    }

    .service-card-minimalist {
        background-color: var(--card-bg-light);
        /* Default light */
        border: 1px solid var(--border-light);
        border-radius: 10px;
        padding: 30px;
        text-align: left;
        /* Teks rata kiri */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
        /* Bayangan sangat halus */
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    body.dark-mode .service-card-minimalist {
        background-color: var(--bg-dark);
        /* Lebih gelap dari section di dark mode */
        border-color: var(--border-dark);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .service-card-minimalist:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
    }

    body.dark-mode .service-card-minimalist:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        border-color: var(--accent-calm);
    }

    .service-card-minimalist .service-icon-minimalist {
        font-size: 2.5rem;
        /* Ukuran ikon */
        color: var(--primary-calm);
        /* Warna ikon */
        margin-bottom: 20px;
        display: inline-block;
        background-color: rgba(var(--primary-calm-rgb, 108, 117, 125), 0.08);
        /* Latar ikon transparan */
        width: 60px;
        height: 60px;
        line-height: 60px;
        /* Vertikal align */
        text-align: center;
        border-radius: 50%;
        /* Ikon bulat */
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    body.dark-mode .service-card-minimalist .service-icon-minimalist {
        color: var(--accent-calm);
        background-color: rgba(var(--accent-calm-rgb, 244, 162, 97), 0.1);
    }

    .service-card-minimalist h5.service-title-minimalist {
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: var(--text-light);
        /* Default light */
    }

    body.dark-mode .service-card-minimalist h5.service-title-minimalist {
        color: var(--text-dark);
    }

    .service-card-minimalist p.service-desc-minimalist {
        font-size: 0.95rem;
        color: #6C757D;
        /* Warna deskripsi */
        line-height: 1.7;
        margin-bottom: 20px;
        flex-grow: 1;
        /* Agar deskripsi mengisi ruang */
        transition: color 0.3s ease;
    }

    body.dark-mode .service-card-minimalist p.service-desc-minimalist {
        color: #adb5bd;
    }

    .service-card-minimalist .btn-learn-more-minimalist {
        font-family: 'Raleway', sans-serif;
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--primary-calm);
        /* Warna tombol */
        text-decoration: none;
        margin-top: auto;
        /* Tombol di bawah */
        transition: color 0.3s ease;
    }

    .service-card-minimalist .btn-learn-more-minimalist i {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .service-card-minimalist:hover .btn-learn-more-minimalist i {
        transform: translateX(4px);
    }

    body.dark-mode .service-card-minimalist .btn-learn-more-minimalist {
        color: var(--accent-calm);
    }
</style>

<section id="servicesMinimalist" class="section-calm">
    <div class="container">
        <div class="section-title-calm" data-aos="fade-up">
            <h2>Layanan Kami</h2>
            <p class="subtitle-calm">Solusi Digital yang Dirancang dengan Kesederhanaan dan Efektivitas untuk Anda.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card-minimalist">
                    <div class="service-icon-minimalist"><i class="fas fa-palette"></i></div>
                    <h5 class="service-title-minimalist">Desain Web Intuitif</h5>
                    <p class="service-desc-minimalist">Menciptakan pengalaman pengguna yang mulus dan menyenangkan melalui desain web yang bersih, modern, dan mudah dinavigasi.</p>
                    <a href="#" class="btn-learn-more-minimalist">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-minimalist">
                    <div class="service-icon-minimalist"><i class="fas fa-code"></i></div>
                    <h5 class="service-title-minimalist">Pengembangan Andal</h5>
                    <p class="service-desc-minimalist">Membangun aplikasi web dan mobile yang stabil, aman, dan berperforma tinggi menggunakan teknologi teruji dan praktik terbaik.</p>
                    <a href="#" class="btn-learn-more-minimalist">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card-minimalist">
                    <div class="service-icon-minimalist"><i class="fas fa-bullseye"></i></div>
                    <h5 class="service-title-minimalist">Strategi Digital Tepat Sasaran</h5>
                    <p class="service-desc-minimalist">Membantu Anda menjangkau audiens yang tepat dan mencapai tujuan bisnis melalui strategi pemasaran digital yang efektif dan terukur.</p>
                    <a href="#" class="btn-learn-more-minimalist">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>