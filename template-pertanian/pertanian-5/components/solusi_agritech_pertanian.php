<?php // File: components/solusi_agritech_pertanian.php 
?>
<style>
    /* Solusi AgriTech Pertanian Styles */
    #solusiAgritechPertanian {
        background-color: var(--bg-dark-farm5);
        /* Dominan gelap untuk section ini */
        color: var(--text-dark-farm5);
        border-bottom: 1px solid var(--border-dark-farm5);
        position: relative;
        /* Untuk elemen dekoratif */
    }

    /* Efek grid pattern di background */
    #solusiAgritechPertanian::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            linear-gradient(rgba(var(--accent-futura-farm-dark-rgb, 3, 218, 197), 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(var(--accent-futura-farm-dark-rgb, 3, 218, 197), 0.03) 1px, transparent 1px);
        background-size: 25px 25px;
        /* Ukuran grid lebih kecil */
        opacity: 0.7;
        z-index: 0;
    }

    body:not(.dark-mode) #solusiAgritechPertanian {
        /* Penyesuaian jika light mode ingin beda */
        background-color: #EDF2F7;
        /* Abu-abu muda kebiruan */
        color: var(--text-light-farm5);
        border-bottom-color: var(--border-light-farm5);
    }

    body:not(.dark-mode) #solusiAgritechPertanian::before {
        background-image:
            linear-gradient(rgba(var(--accent-futura-farm-rgb, 2, 195, 154), 0.04) 1px, transparent 1px),
            linear-gradient(90deg, rgba(var(--accent-futura-farm-rgb, 2, 195, 154), 0.04) 1px, transparent 1px);
    }

    /* Komentar CSS: Variabel RGB untuk accent-futura-farm-dark & accent-futura-farm */
    body.dark-mode {
        --accent-futura-farm-dark-rgb: 3, 218, 197;
    }

    body {
        --accent-futura-farm-rgb: 2, 195, 154;
    }

    body:not(.dark-mode) #solusiAgritechPertanian .section-title-futura-farm h2 {
        color: var(--primary-futura-farm);
    }

    body:not(.dark-mode) #solusiAgritechPertanian .section-title-futura-farm h2 .highlight-yellow {
        color: var(--secondary-futura-farm);
    }

    body:not(.dark-mode) #solusiAgritechPertanian .section-title-futura-farm .title-deco-line {
        background: linear-gradient(90deg, var(--primary-futura-farm), var(--secondary-futura-farm));
    }

    body:not(.dark-mode) #solusiAgritechPertanian .section-title-futura-farm p.subtitle-futura-farm {
        color: var(--muted-text-light-farm5);
    }


    .solution-card-futura {
        background-color: var(--card-bg-dark-farm5);
        /* Kartu lebih gelap dari section */
        border: 1px solid var(--border-dark-farm5);
        border-radius: 8px;
        padding: 30px;
        text-align: left;
        /* Teks rata kiri */
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
        /* Untuk z-index konten */
        z-index: 1;
    }

    body:not(.dark-mode) .solution-card-futura {
        background-color: var(--card-bg-light-farm5);
        border-color: var(--border-light-farm5);
    }

    .solution-card-futura:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 0 30px rgba(var(--accent-futura-farm-dark-rgb, 3, 218, 197), 0.15);
        border-color: var(--accent-futura-farm-dark);
    }

    body:not(.dark-mode) .solution-card-futura:hover {
        box-shadow: 0 0 30px rgba(var(--accent-futura-farm-rgb, 2, 195, 154), 0.15);
        border-color: var(--accent-futura-farm);
    }

    .solution-card-futura .solution-icon-wrapper {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-futura-farm-dark), var(--accent-futura-farm-dark));
        color: var(--bg-dark-farm5);
        /* Teks ikon kontras */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        /* Ukuran ikon */
        margin-bottom: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }

    body:not(.dark-mode) .solution-card-futura .solution-icon-wrapper {
        background: linear-gradient(135deg, var(--primary-futura-farm), var(--accent-futura-farm));
        color: #fff;
    }

    .solution-card-futura:hover .solution-icon-wrapper {
        transform: rotate(-10deg) scale(1.1);
        box-shadow: 0 6px 15px rgba(var(--accent-futura-farm-dark-rgb, 3, 218, 197), 0.3);
    }

    body:not(.dark-mode) .solution-card-futura:hover .solution-icon-wrapper {
        box-shadow: 0 6px 15px rgba(var(--accent-futura-farm-rgb, 2, 195, 154), 0.3);
    }


    .solution-card-futura h4.solution-title {
        font-family: 'Exo 2', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--text-dark-farm5);
        /* Default dark mode */
    }

    body:not(.dark-mode) .solution-card-futura h4.solution-title {
        color: var(--text-light-farm5);
    }

    .solution-card-futura p.solution-desc {
        font-size: 0.95rem;
        color: var(--muted-text-dark-farm5);
        /* Default dark mode */
        line-height: 1.7;
        margin-bottom: 20px;
    }

    body:not(.dark-mode) .solution-card-futura p.solution-desc {
        color: var(--muted-text-light-farm5);
    }

    .solution-card-futura .btn-learn-solution {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--accent-futura-farm-dark);
        /* Default dark mode */
        text-decoration: none;
    }

    .solution-card-futura .btn-learn-solution i {
        margin-left: 5px;
    }

    body:not(.dark-mode) .solution-card-futura .btn-learn-solution {
        color: var(--accent-futura-farm);
    }

    .solution-card-futura:hover .btn-learn-solution {
        text-decoration: underline;
    }
</style>

<section id="solusiAgritechPertanian" class="section-futura-farm">
    <div class="container" style="position:relative; z-index:1;"> <?php /* Kontainer konten di atas pattern */ ?>
        <div class="section-title-futura-farm" data-aos="fade-up">
            <h2>Solusi <span class="highlight-yellow">AgriTech</span> Terintegrasi</h2>
            <div class="title-deco-line"></div>
            <p class="subtitle-futura-farm">Teknologi Cerdas untuk Setiap Tahap Pertanian, dari Benih hingga Meja Konsumen.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card-futura">
                    <div class="solution-icon-wrapper"><i class="fas fa-seedling"></i></div>
                    <h4 class="solution-title">Smart Seeding & Planting</h4>
                    <p class="solution-desc">Optimalisasi penanaman dengan analisis data tanah, pemilihan bibit unggul berbasis AI, dan robot penanam presisi.</p>
                    <a href="#" class="btn-learn-solution">Pelajari Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card-futura">
                    <div class="solution-icon-wrapper"><i class="fas fa-tint-slash"></i></div> <?php /* Ikon irigasi/air */ ?>
                    <h4 class="solution-title">Precision Irrigation System</h4>
                    <p class="solution-desc">Sistem irigasi cerdas yang mengatur volume dan jadwal penyiraman secara otomatis berdasarkan data sensor dan cuaca.</p>
                    <a href="#" class="btn-learn-solution">Pelajari Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="solution-card-futura">
                    <div class="solution-icon-wrapper"><i class="fas fa-shield-alt"></i></div>
                    <h4 class="solution-title">AI Pest & Disease Detection</h4>
                    <p class="solution-desc">Deteksi dini hama dan penyakit tanaman menggunakan analisis citra drone dan AI, memungkinkan tindakan pencegahan cepat.</p>
                    <a href="#" class="btn-learn-solution">Pelajari Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="solution-card-futura">
                    <div class="solution-icon-wrapper"><i class="fas fa-chart-line"></i></div>
                    <h4 class="solution-title">Yield Prediction & Analytics</h4>
                    <p class="solution-desc">Model prediktif untuk perkiraan hasil panen, membantu perencanaan logistik dan strategi pasar yang lebih baik.</p>
                    <a href="#" class="btn-learn-solution">Pelajari Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="solution-card-futura">
                    <div class="solution-icon-wrapper"><i class="fas fa-boxes"></i></div>
                    <h4 class="solution-title">Smart Supply Chain</h4>
                    <p class="solution-desc">Pelacakan produk dari ladang ke konsumen menggunakan teknologi blockchain untuk transparansi dan kualitas terjamin.</p>
                    <a href="#" class="btn-learn-solution">Pelajari Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="solution-card-futura">
                    <div class="solution-icon-wrapper"><i class="fas fa-solar-panel"></i></div>
                    <h4 class="solution-title">Sustainable Farm Management</h4>
                    <p class="solution-desc">Platform terintegrasi untuk manajemen operasional pertanian berkelanjutan, termasuk penggunaan energi terbarukan.</p>
                    <a href="#" class="btn-learn-solution">Pelajari Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>