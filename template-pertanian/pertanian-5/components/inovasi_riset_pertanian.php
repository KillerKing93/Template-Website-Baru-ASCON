<?php // File: components/inovasi_riset_pertanian.php 
?>
<style>
    /* Inovasi & Riset Pertanian Styles */
    #inovasiRisetPertanian {
        background-color: var(--bg-light-farm5);
        /* Default light */
        transition: background-color 0.3s ease;
        padding-top: 60px;
        padding-bottom: 60px;
        /* Padding lebih sedikit */
    }

    body.dark-mode #inovasiRisetPertanian {
        background-color: var(--bg-dark-farm5);
    }

    .innovation-item {
        display: flex;
        align-items: center;
        /* Konten sejajar tengah vertikal */
        margin-bottom: 40px;
        padding: 25px;
        background-color: var(--card-bg-light-farm5);
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid var(--border-light-farm5);
        transition: all 0.3s ease;
    }

    body.dark-mode .innovation-item {
        background-color: var(--card-bg-dark-farm5);
        border-color: var(--border-dark-farm5);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .innovation-item:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 25px rgba(0, 168, 150, 0.1);
        /* var(--primary-futura-farm) dengan alpha */
    }

    body.dark-mode .innovation-item:hover {
        box-shadow: 0 8px 25px rgba(0, 203, 169, 0.15);
        /* var(--primary-futura-farm-dark) dengan alpha */
    }

    .innovation-item .innovation-icon {
        font-size: 3rem;
        /* Ikon besar */
        color: var(--primary-futura-farm);
        margin-right: 25px;
        width: 70px;
        /* Lebar tetap untuk ikon */
        height: 70px;
        line-height: 70px;
        text-align: center;
        flex-shrink: 0;
        background-color: rgba(var(--primary-futura-farm-rgb, 0, 168, 150), 0.08);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    body.dark-mode .innovation-item .innovation-icon {
        color: var(--primary-futura-farm-dark);
        background-color: rgba(var(--primary-futura-farm-dark-rgb, 0, 203, 169), 0.1);
    }

    .innovation-item:hover .innovation-icon {
        background-color: var(--primary-futura-farm);
        color: #fff;
        transform: rotate(-10deg);
    }

    body.dark-mode .innovation-item:hover .innovation-icon {
        background-color: var(--primary-futura-farm-dark);
        color: var(--bg-dark-farm5);
    }


    .innovation-item .innovation-content h5 {
        font-family: 'Exo 2', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .innovation-item .innovation-content p {
        font-size: 0.95rem;
        color: var(--muted-text-light-farm5);
        line-height: 1.6;
        margin-bottom: 0;
    }

    body.dark-mode .innovation-item .innovation-content p {
        color: var(--muted-text-dark-farm5);
    }

    .innovation-image-wrapper {
        text-align: center;
        /* Pusatkan gambar */
    }

    .innovation-image {
        max-width: 85%;
        /* Gambar tidak terlalu besar */
        height: auto;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border: 3px solid var(--card-bg-light-farm5);
        /* Frame untuk gambar */
        transition: all 0.3s ease;
    }

    body.dark-mode .innovation-image {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        border-color: var(--card-bg-dark-farm5);
    }

    .innovation-image-wrapper:hover .innovation-image {
        transform: scale(1.03);
        border-color: var(--secondary-futura-farm);
    }

    body.dark-mode .innovation-image-wrapper:hover .innovation-image {
        border-color: var(--secondary-futura-farm-dark);
    }
</style>

<section id="inovasiRisetPertanian" class="section-futura-farm">
    <div class="container">
        <div class="section-title-futura-farm" data-aos="fade-up">
            <h2>Riset & <span class="highlight-yellow">Inovasi</span> Kami</h2>
            <div class="title-deco-line"></div>
            <p class="subtitle-futura-farm">Mendorong Batas Pengetahuan untuk Agrikultur yang Lebih Maju dan Berdampak.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="innovation-item" data-aos="fade-right" data-aos-delay="100">
                    <div class="innovation-icon"><i class="fas fa-flask"></i></div>
                    <div class="innovation-content">
                        <h5>Pengembangan Varietas Unggul</h5>
                        <p>Riset bioteknologi untuk menghasilkan bibit tanaman yang lebih tahan penyakit, adaptif terhadap iklim, dan bernutrisi tinggi.</p>
                    </div>
                </div>
                <div class="innovation-item" data-aos="fade-right" data-aos-delay="200">
                    <div class="innovation-icon"><i class="fas fa-solar-panel"></i></div>
                    <div class="innovation-content">
                        <h5>Teknologi Energi Terbarukan</h5>
                        <p>Studi implementasi panel surya, mikrohidro, dan biogas untuk operasional pertanian yang mandiri energi dan ramah lingkungan.</p>
                    </div>
                </div>
                <div class="innovation-item" data-aos="fade-right" data-aos-delay="300">
                    <div class="innovation-icon"><i class="fas fa-chart-pie"></i></div>
                    <div class="innovation-content">
                        <h5>Model Analitik Data Lanjut</h5>
                        <p>Pengembangan algoritma machine learning untuk analisis data pertanian skala besar, mendukung keputusan strategis.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 innovation-image-wrapper" data-aos="zoom-in-left" data-aos-delay="200">
                <img src="https://placehold.co/550x450/1E293B/00A896?text=Laboratorium+Riset+AgroFutura&font=exo2" alt="[Foto Laboratorium Riset Pertanian Modern]" class="img-fluid innovation-image">
            </div>
        </div>
    </div>
</section>