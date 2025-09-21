<?php // File: components/layanan_agroteknologi_pertanian.php 
?>
<style>
    /* Layanan Agroteknologi Pertanian Styles */
    #layananAgroteknologiPertanian {
        background-color: var(--bg-dark-farm2);
        /* Default dark untuk section ini */
        color: var(--text-dark-farm2);
        border-bottom: 1px solid var(--border-dark-farm2);
    }

    body:not(.dark-mode) #layananAgroteknologiPertanian {
        /* Penyesuaian jika ingin beda di light mode */
        background-color: #E8F6EF;
        /* Hijau pucat untuk light mode */
        color: var(--text-light-farm2);
        border-bottom-color: var(--border-light-farm2);
    }

    body:not(.dark-mode) #layananAgroteknologiPertanian .section-title-modern-farm h2 {
        color: var(--primary-modern-farm);
    }

    body:not(.dark-mode) #layananAgroteknologiPertanian .section-title-modern-farm h2 span.highlight-accent {
        color: var(--secondary-modern-farm);
    }

    body:not(.dark-mode) #layananAgroteknologiPertanian .section-title-modern-farm .line-decorator {
        background: linear-gradient(90deg, var(--primary-modern-farm), var(--secondary-modern-farm));
    }

    body:not(.dark-mode) #layananAgroteknologiPertanian .section-title-modern-farm p.subtitle-modern-farm {
        color: var(--muted-text-light-farm2);
    }


    .service-agro-card {
        background-color: var(--card-bg-dark-farm2);
        /* Kartu lebih gelap dari section */
        border: 1px solid var(--border-dark-farm2);
        border-radius: 8px;
        padding: 30px;
        text-align: left;
        /* Teks rata kiri */
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        /* Untuk alignment ikon dan konten */
        align-items: flex-start;
        /* Ikon di atas, teks di bawahnya */
        flex-direction: column;
        /* Default, bisa diubah jika ikon di samping */
    }

    body:not(.dark-mode) .service-agro-card {
        background-color: var(--card-bg-light-farm2);
        border-color: var(--border-light-farm2);
    }

    .service-agro-card:hover {
        transform: scale(1.03);
        /* Sedikit membesar */
        box-shadow: 0 8px 25px rgba(var(--secondary-modern-farm-dark-rgb, 255, 202, 40), 0.2);
        border-color: var(--secondary-modern-farm-dark);
    }

    body:not(.dark-mode) .service-agro-card:hover {
        box-shadow: 0 8px 25px rgba(var(--secondary-modern-farm-rgb, 255, 179, 0), 0.2);
        border-color: var(--secondary-modern-farm);
    }

    /* Komentar CSS: Variabel RGB untuk secondary-modern-farm-dark & secondary-modern-farm */
    body.dark-mode {
        --secondary-modern-farm-dark-rgb: 255, 202, 40;
    }

    body {
        --secondary-modern-farm-rgb: 255, 179, 0;
    }


    .service-agro-card .service-agro-icon {
        font-size: 2.8rem;
        /* Ukuran ikon layanan */
        color: var(--secondary-modern-farm-dark);
        /* Warna ikon layanan */
        margin-bottom: 20px;
        display: inline-block;
        background-color: rgba(var(--secondary-modern-farm-dark-rgb, 255, 202, 40), 0.1);
        width: 70px;
        height: 70px;
        line-height: 70px;
        text-align: center;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    body:not(.dark-mode) .service-agro-card .service-agro-icon {
        color: var(--secondary-modern-farm);
        background-color: rgba(var(--secondary-modern-farm-rgb, 255, 179, 0), 0.1);
    }

    .service-agro-card:hover .service-agro-icon {
        background-color: var(--secondary-modern-farm-dark);
        color: var(--bg-dark-farm2);
        /* Kontras dengan background hover ikon */
        transform: rotate(-15deg);
    }

    body:not(.dark-mode) .service-agro-card:hover .service-agro-icon {
        background-color: var(--secondary-modern-farm);
        color: var(--bg-light-farm2);
    }


    .service-agro-card h4.service-agro-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1.4rem;
        margin-bottom: 12px;
        color: var(--text-dark-farm2);
        /* Default dark mode */
    }

    body:not(.dark-mode) .service-agro-card h4.service-agro-title {
        color: var(--text-light-farm2);
    }


    .service-agro-card p.service-agro-desc {
        font-size: 0.95rem;
        color: var(--muted-text-dark-farm2);
        /* Default dark mode */
        line-height: 1.7;
        margin-bottom: 0;
        /* Karena tombol akan di bawah */
        flex-grow: 1;
        /* Deskripsi mengisi ruang */
    }

    body:not(.dark-mode) .service-agro-card p.service-agro-desc {
        color: var(--muted-text-light-farm2);
    }

    .service-agro-card .btn-learn-more-agro {
        margin-top: 20px;
        /* Jarak dari deskripsi */
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--secondary-modern-farm-dark);
        /* Default dark mode */
        text-decoration: none;
    }

    .service-agro-card .btn-learn-more-agro i {
        margin-left: 5px;
    }

    body:not(.dark-mode) .service-agro-card .btn-learn-more-agro {
        color: var(--secondary-modern-farm);
    }

    .service-agro-card:hover .btn-learn-more-agro {
        text-decoration: underline;
    }
</style>

<section id="layananAgroteknologiPertanian" class="section-pertanian-modern">
    <div class="container">
        <div class="section-title-modern-farm" data-aos="fade-up">
            <h2>Layanan <span class="highlight-accent">Agroteknologi</span> Kami</h2>
            <div class="line-decorator"></div>
            <p class="subtitle-modern-farm">Solusi Inovatif untuk Pertanian Presisi, Efisien, dan Berkelanjutan.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-agro-card">
                    <div class="service-agro-icon"><i class="fas fa-tractor"></i></div>
                    <h4 class="service-agro-title">Pertanian Presisi & Drone</h4>
                    <p class="service-agro-desc">Pemanfaatan drone dan sensor untuk pemetaan lahan, analisis kesehatan tanaman, dan penyemprotan presisi.</p>
                    <a href="#" class="btn-learn-more-agro">Pelajari Lebih Lanjut <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-agro-card">
                    <div class="service-agro-icon"><i class="fas fa-water"></i></div>
                    <h4 class="service-agro-title">Manajemen Irigasi Cerdas</h4>
                    <p class="service-agro-desc">Sistem irigasi otomatis berbasis sensor kelembaban tanah dan data cuaca untuk penggunaan air yang optimal.</p>
                    <a href="#" class="btn-learn-more-agro">Pelajari Lebih Lanjut <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-agro-card">
                    <div class="service-agro-icon"><i class="fas fa-chart-bar"></i></div>
                    <h4 class="service-agro-title">Analitik Data Pertanian</h4>
                    <p class="service-agro-desc">Pengolahan data pertanian untuk prediksi hasil panen, deteksi dini hama & penyakit, dan optimasi input pertanian.</p>
                    <a href="#" class="btn-learn-more-agro">Pelajari Lebih Lanjut <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-agro-card">
                    <div class="service-agro-icon"><i class="fas fa-solar-panel"></i></div>
                    <h4 class="service-agro-title">Energi Terbarukan Pertanian</h4>
                    <p class="service-agro-desc">Implementasi solusi energi surya dan biogas untuk operasional pertanian yang lebih hemat dan ramah lingkungan.</p>
                    <a href="#" class="btn-learn-more-agro">Pelajari Lebih Lanjut <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-agro-card">
                    <div class="service-agro-icon"><i class="fas fa-seedling"></i></div>
                    <h4 class="service-agro-title">Konsultasi & Pelatihan Agrotek</h4>
                    <p class="service-agro-desc">Pendampingan dan pelatihan bagi petani untuk adopsi teknologi pertanian modern dan praktik berkelanjutan.</p>
                    <a href="#" class="btn-learn-more-agro">Pelajari Lebih Lanjut <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-agro-card">
                    <div class="service-agro-icon"><i class="fas fa-network-wired"></i></div>
                    <h4 class="service-agro-title">Platform Digital Pertanian</h4>
                    <p class="service-agro-desc">Pengembangan aplikasi dan platform digital untuk manajemen pertanian, rantai pasok, dan akses pasar bagi petani.</p>
                    <a href="#" class="btn-learn-more-agro">Pelajari Lebih Lanjut <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>