<?php // File: components/layanan_pertanian_holistik.php ?>
<style>
    /* Layanan Pertanian Holistik Styles */
    #layananPertanianHolistik {
        background-color: var(--bg-light-farm4); /* Default light */
        border-bottom: 1px solid var(--border-light-farm4);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    body.dark-mode #layananPertanianHolistik {
        background-color: var(--bg-dark-farm4);
        border-bottom-color: var(--border-dark-farm4);
    }

    .service-holistic-card {
        background-color: var(--card-bg-light-farm4);
        border-radius: 10px;
        padding: 0; /* Padding akan diatur oleh inner-content */
        box-shadow: 0 8px 25px rgba(0,0,0,0.07);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        overflow: hidden; /* Untuk efek gambar */
        border: 1px solid var(--border-light-farm4);
    }
    body.dark-mode .service-holistic-card {
        background-color: var(--card-bg-dark-farm4);
        box-shadow: 0 8px 25px rgba(0,0,0,0.25);
        border-color: var(--border-dark-farm4);
    }
    .service-holistic-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 35px rgba(56,142,60,0.15); /* var(--primary-bio-farm) dengan alpha */
    }
    body.dark-mode .service-holistic-card:hover {
        box-shadow: 0 12px 35px rgba(102,187,106,0.2); /* var(--primary-bio-farm-dark) dengan alpha */
    }

    .service-holistic-card .service-image-wrapper {
        height: 220px; /* Tinggi gambar layanan */
        position: relative;
        overflow: hidden;
    }
    .service-holistic-card .service-image-wrapper img {
        width: 100%; height: 100%; object-fit: cover;
        transition: transform 0.5s ease, filter 0.5s ease;
    }
    .service-holistic-card:hover .service-image-wrapper img {
        transform: scale(1.1);
        filter: brightness(0.9) saturate(1.1);
    }
    .service-holistic-card .service-icon-overlay { /* Ikon di atas gambar */
        position: absolute;
        bottom: -25px; /* Setengah tinggi ikon, agar muncul dari bawah */
        left: 50%;
        transform: translateX(-50%);
        width: 50px; height: 50px;
        background-color: var(--secondary-bio-farm);
        color: var(--text-light-farm4); /* Kontras dengan bg ikon */
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.5rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        transition: all 0.4s ease;
    }
    body.dark-mode .service-holistic-card .service-icon-overlay {
        background-color: var(--secondary-bio-farm-dark);
        color: var(--bg-dark-farm4); /* Kontras dengan bg ikon */
    }
    .service-holistic-card:hover .service-icon-overlay {
        bottom: 15px; /* Muncul ke atas */
        transform: translateX(-50%) rotate(360deg); /* Berputar */
    }


    .service-holistic-card .service-content-wrapper {
        padding: 35px 25px 25px 25px; /* Padding atas lebih besar karena ikon */
        text-align: center;
        flex-grow: 1; display: flex; flex-direction: column;
    }
    .service-holistic-card h4.service-holistic-title {
        font-family: 'Nunito', sans-serif;
        font-size: 1.5rem; /* Judul layanan */
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--primary-bio-farm);
    }
    body.dark-mode .service-holistic-card h4.service-holistic-title {
        color: var(--primary-bio-farm-dark);
    }

    .service-holistic-card p.service-holistic-desc {
        font-size: 0.95rem;
        color: var(--muted-text-light-farm4);
        line-height: 1.7;
        margin-bottom: 20px;
        flex-grow: 1;
    }
     body.dark-mode .service-holistic-card p.service-holistic-desc {
        color: var(--muted-text-dark-farm4);
    }
    .service-holistic-card .btn-explore-service {
        margin-top: auto; /* Tombol di bawah */
        font-size: 0.9rem;
    }
</style>

<section id="layananPertanianHolistik" class="section-bio-farm">
    <div class="container">
        <div class="section-title-bio-farm" data-aos="fade-up">
            <h2>Layanan Holistik <span class="highlight-accent-bio">BioFarm</span></h2>
            <p class="subtitle-bio-farm">Dari Hulu hingga Hilir, Kami Menyediakan Solusi Terpadu untuk Pertanian Anda.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-holistic-card">
                    <div class="service-image-wrapper">
                        <img src="https://placehold.co/600x400/388E3C/FFFFFF?text=Konsultasi+Lahan" alt="[Gambar Konsultasi Lahan Pertanian]">
                        <div class="service-icon-overlay"><i class="fas fa-comments"></i></div>
                    </div>
                    <div class="service-content-wrapper">
                        <h4 class="service-holistic-title">Konsultasi & Perencanaan Lahan</h4>
                        <p class="service-holistic-desc">Analisis kesuburan tanah, pemilihan varietas tanaman, dan perencanaan tata kelola lahan yang optimal.</p>
                        <a href="#" class="btn-bio-farm-secondary btn-explore-service">Pelajari Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-holistic-card">
                    <div class="service-image-wrapper">
                        <img src="https://placehold.co/600x400/FFC107/2D3A3A?text=Penerapan+Teknologi" alt="[Gambar Penerapan Teknologi Pertanian]">
                        <div class="service-icon-overlay"><i class="fas fa-cogs"></i></div>
                    </div>
                    <div class="service-content-wrapper">
                        <h4 class="service-holistic-title">Implementasi Agroteknologi</h4>
                        <p class="service-holistic-desc">Pemasangan sistem irigasi cerdas, sensor IoT, penggunaan drone, dan integrasi platform manajemen pertanian.</p>
                        <a href="#" class="btn-bio-farm-secondary btn-explore-service">Pelajari Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-holistic-card">
                    <div class="service-image-wrapper">
                        <img src="https://placehold.co/600x400/81D4FA/2D3A3A?text=Pelatihan+Petani" alt="[Gambar Pelatihan Petani Modern]">
                        <div class="service-icon-overlay"><i class="fas fa-users-cog"></i></div>
                    </div>
                    <div class="service-content-wrapper">
                        <h4 class="service-holistic-title">Pelatihan & Pendampingan</h4>
                        <p class="service-holistic-desc">Program edukasi dan pendampingan berkelanjutan bagi petani untuk adopsi teknologi dan praktik pertanian terbaik.</p>
                        <a href="#" class="btn-bio-farm-secondary btn-explore-service">Pelajari Detail</a>
                    </div>
                </div>
            </div>
             <?php /* Komentar PHP: Tambahkan lebih banyak layanan jika perlu */ ?>
        </div>
    </div>
</section>
