<?php // File: components/layanan_pertanian_teknologi.php 
?>
<style>
    /* Layanan Pertanian Teknologi Styles */
    #layananPertanianTeknologi {
        background-color: var(--bg-dark-farm3);
        /* Section ini dominan gelap */
        color: var(--text-dark-farm3);
        border-bottom: 1px solid var(--border-dark-farm3);
    }

    body:not(.dark-mode) #layananPertanianTeknologi {
        /* Penyesuaian jika light mode ingin beda */
        background-color: #E8F5E9;
        /* Hijau sangat pucat */
        color: var(--text-light-farm3);
        border-bottom-color: var(--border-light-farm3);
    }

    body:not(.dark-mode) #layananPertanianTeknologi .section-title-artistic-farm h2 {
        color: var(--primary-art-farm);
    }

    body:not(.dark-mode) #layananPertanianTeknologi .section-title-artistic-farm h2::before,
    body:not(.dark-mode) #layananPertanianTeknologi .section-title-artistic-farm h2::after {
        background-color: var(--secondary-art-farm);
    }

    body:not(.dark-mode) #layananPertanianTeknologi .section-title-artistic-farm p.subtitle-artistic-farm {
        color: var(--muted-text-light-farm3);
    }


    .service-tech-card {
        background-color: var(--card-bg-dark-farm3);
        border: 1px solid var(--border-dark-farm3);
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    body:not(.dark-mode) .service-tech-card {
        background-color: var(--card-bg-light-farm3);
        border-color: var(--border-light-farm3);
    }

    /* Efek "scan line" pada hover */
    .service-tech-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(var(--accent-art-farm-dark-rgb, 79, 195, 247), 0.15), transparent);
        transition: left 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        z-index: 0;
    }

    body:not(.dark-mode) .service-tech-card::before {
        background: linear-gradient(90deg, transparent, rgba(var(--accent-art-farm-rgb, 3, 169, 244), 0.1), transparent);
    }

    .service-tech-card:hover::before {
        left: 150%;
    }

    .service-tech-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(var(--accent-art-farm-dark-rgb, 79, 195, 247), 0.1);
        border-color: var(--accent-art-farm-dark);
    }

    body:not(.dark-mode) .service-tech-card:hover {
        box-shadow: 0 10px 25px rgba(var(--accent-art-farm-rgb, 3, 169, 244), 0.1);
        border-color: var(--accent-art-farm);
    }

    /* Komentar CSS: Variabel RGB untuk accent-art-farm-dark & accent-art-farm */
    body.dark-mode {
        --accent-art-farm-dark-rgb: 79, 195, 247;
    }

    body {
        --accent-art-farm-rgb: 3, 169, 244;
    }


    .service-tech-card .service-tech-icon {
        font-size: 3.2rem;
        color: var(--accent-art-farm-dark);
        /* Warna ikon */
        margin-bottom: 20px;
        display: inline-block;
        position: relative;
        z-index: 1;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    body:not(.dark-mode) .service-tech-card .service-tech-icon {
        color: var(--accent-art-farm);
    }

    .service-tech-card:hover .service-tech-icon {
        transform: scale(1.15);
        color: var(--secondary-art-farm-dark);
        /* Warna ikon saat hover */
    }

    body:not(.dark-mode) .service-tech-card:hover .service-tech-icon {
        color: var(--secondary-art-farm);
    }


    .service-tech-card h4.service-tech-title {
        font-family: 'Teko', sans-serif;
        font-size: 1.8rem;
        /* Judul layanan lebih besar */
        font-weight: 600;
        margin-bottom: 12px;
        color: var(--text-dark-farm3);
        /* Default dark mode */
        position: relative;
        z-index: 1;
    }

    body:not(.dark-mode) .service-tech-card h4.service-tech-title {
        color: var(--text-light-farm3);
    }

    .service-tech-card p.service-tech-desc {
        font-size: 0.95rem;
        color: var(--muted-text-dark-farm3);
        /* Default dark mode */
        line-height: 1.7;
        margin-bottom: 0;
        position: relative;
        z-index: 1;
    }

    body:not(.dark-mode) .service-tech-card p.service-tech-desc {
        color: var(--muted-text-light-farm3);
    }
</style>

<section id="layananPertanianTeknologi" class="section-artistic-farm">
    <div class="container">
        <div class="section-title-artistic-farm" data-aos="fade-up">
            <h2>Solusi <span style="color: var(--accent-art-farm);">Teknologi</span> Pertanian</h2>
            <?php /* Komentar PHP: Subtitle bisa ditambahkan jika perlu */ ?>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-tech-card">
                    <div class="service-tech-icon"><i class="fas fa-robot"></i></div>
                    <h4 class="service-tech-title">Otomatisasi & Robotika</h4>
                    <p class="service-tech-desc">Implementasi robot pertanian untuk tugas presisi seperti penanaman, pemeliharaan, dan pemanenan otomatis.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-tech-card">
                    <div class="service-tech-icon"><i class="fas fa-cloud-sun-rain"></i></div>
                    <h4 class="service-tech-title">Analitik Iklim & Prediksi</h4>
                    <p class="service-tech-desc">Pemanfaatan data iklim dan AI untuk prediksi cuaca akurat, membantu perencanaan tanam dan mitigasi risiko.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-tech-card">
                    <div class="service-tech-icon"><i class="fas fa-microscope"></i></div>
                    <h4 class="service-tech-title">Sensor Tanah & Nutrisi</h4>
                    <p class="service-tech-desc">Penggunaan sensor canggih untuk memantau kondisi tanah, kelembaban, dan tingkat nutrisi secara real-time.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-tech-card">
                    <div class="service-tech-icon"><i class="fas fa-shopping-basket"></i></div>
                    <h4 class="service-tech-title">Platform E-commerce Pertanian</h4>
                    <p class="service-tech-desc">Pengembangan platform digital untuk menghubungkan petani langsung dengan konsumen dan pasar yang lebih luas.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-tech-card">
                    <div class="service-tech-icon"><i class="fas fa-route"></i></div>
                    <h4 class="service-tech-title">Manajemen Rantai Pasok Cerdas</h4>
                    <p class="service-tech-desc">Solusi berbasis blockchain dan IoT untuk transparansi dan efisiensi dalam rantai pasok produk pertanian.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-tech-card">
                    <div class="service-tech-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h4 class="service-tech-title">Edukasi & Adopsi Teknologi</h4>
                    <p class="service-tech-desc">Program pelatihan dan pendampingan untuk membantu petani mengadopsi dan memaksimalkan teknologi pertanian modern.</p>
                </div>
            </div>
        </div>
    </div>
</section>