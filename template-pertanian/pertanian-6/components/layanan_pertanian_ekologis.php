<?php // File: components/layanan_pertanian_ekologis.php 
?>
<style>
    /* Layanan Pertanian Ekologis Styles */
    #layananPertanianEkologis {
        background-color: var(--bg-light-farm5);
        /* Default light */
        border-bottom: 1px solid var(--border-light-farm5);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode #layananPertanianEkologis {
        background-color: var(--bg-dark-farm5);
        border-bottom-color: var(--border-dark-farm5);
    }

    .service-eco-card {
        background-color: var(--card-bg-light-farm5);
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        transition: all 0.4s ease;
        height: 100%;
        border: 1px solid var(--border-light-farm5);
        position: relative;
        /* Untuk elemen dekoratif */
    }

    body.dark-mode .service-eco-card {
        background-color: var(--card-bg-dark-farm5);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.22);
        border-color: var(--border-dark-farm5);
    }

    /* Efek "growing vine" atau akar pada hover */
    .service-eco-card::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 3px;
        /* Ketebalan akar */
        height: 0;
        /* Awalnya tidak ada tinggi */
        background-color: var(--primary-eco-farm);
        border-radius: 3px 3px 0 0;
        transition: height 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        opacity: 0.7;
    }

    .service-eco-card:hover::before {
        height: 100%;
        /* Akar tumbuh memenuhi tinggi card */
    }

    body.dark-mode .service-eco-card::before {
        background-color: var(--primary-eco-farm-dark);
    }


    .service-eco-card .service-eco-icon-wrapper {
        width: 70px;
        height: 70px;
        background-color: rgba(var(--primary-eco-farm-rgb, 85, 107, 47), 0.1);
        /* var(--primary-eco-farm) dengan alpha */
        color: var(--primary-eco-farm);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        /* Ukuran ikon */
        margin-bottom: 20px;
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
        /* Di atas ::before */
    }

    body.dark-mode .service-eco-card .service-eco-icon-wrapper {
        background-color: rgba(var(--primary-eco-farm-dark-rgb, 143, 188, 143), 0.15);
        color: var(--primary-eco-farm-dark);
    }

    .service-eco-card:hover .service-eco-icon-wrapper {
        background-color: var(--primary-eco-farm);
        color: #fff;
        transform: scale(1.1) rotate(5deg);
    }

    body.dark-mode .service-eco-card:hover .service-eco-icon-wrapper {
        background-color: var(--primary-eco-farm-dark);
        color: var(--bg-dark-farm5);
    }

    /* Komentar CSS: Variabel RGB untuk primary-eco-farm-dark */
    body.dark-mode {
        --primary-eco-farm-dark-rgb: 143, 188, 143;
    }


    .service-eco-card h4.service-eco-title {
        font-family: 'Lora', serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 12px;
        position: relative;
        z-index: 1;
    }

    .service-eco-card p.service-eco-desc {
        font-size: 0.95rem;
        color: var(--muted-text-light-farm5);
        line-height: 1.7;
        margin-bottom: 0;
        position: relative;
        z-index: 1;
    }

    body.dark-mode .service-eco-card p.service-eco-desc {
        color: var(--muted-text-dark-farm5);
    }
</style>

<section id="layananPertanianEkologis" class="section-ecosymphony">
    <div class="container">
        <div class="section-title-ecosymphony" data-aos="fade-up">
            <h2>Layanan <span style="color:var(--secondary-eco-farm);">Ekosistem</span> Kami</h2>
            <p class="subtitle-ecosymphony">Membangun Pertanian yang Selaras dengan Alam, Memberikan Manfaat Holistik.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-eco-card">
                    <div class="service-eco-icon-wrapper"><i class="fas fa-tree"></i></div>
                    <h4 class="service-eco-title">Agroforestri & Permakultur</h4>
                    <p class="service-eco-desc">Desain dan implementasi sistem agroforestri yang mengintegrasikan pohon, tanaman pangan, dan ternak untuk ekosistem yang produktif dan tangguh.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-eco-card">
                    <div class="service-eco-icon-wrapper"><i class="fas fa-water"></i></div>
                    <h4 class="service-eco-title">Konservasi Air & Tanah</h4>
                    <p class="service-eco-desc">Penerapan teknik konservasi seperti terasering, penanaman tanaman penutup tanah, dan pembuatan embung untuk menjaga kualitas air dan kesuburan tanah.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-eco-card">
                    <div class="service-eco-icon-wrapper"><i class="fas fa-dove"></i></div>
                    <h4 class="service-eco-title">Peningkatan Biodiversitas</h4>
                    <p class="service-eco-desc">Menciptakan habitat bagi serangga penyerbuk dan predator alami hama, serta menanam varietas lokal untuk menjaga keanekaragaman hayati.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-eco-card">
                    <div class="service-eco-icon-wrapper"><i class="fas fa-graduation-cap"></i></div>
                    <h4 class="service-eco-title">Edukasi & Wisata Agro</h4>
                    <p class="service-eco-desc">Program edukasi tentang pertanian berkelanjutan dan pengalaman wisata agro yang mendekatkan masyarakat dengan alam dan proses produksi pangan.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-eco-card">
                    <div class="service-eco-icon-wrapper"><i class="fas fa-certificate"></i></div>
                    <h4 class="service-eco-title">Sertifikasi Organik & Fair Trade</h4>
                    <p class="service-eco-desc">Pendampingan bagi petani untuk mendapatkan sertifikasi organik dan fair trade, meningkatkan nilai jual dan akses pasar produk.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-eco-card">
                    <div class="service-eco-icon-wrapper"><i class="fa-solid fa-seedling"></i></div>
                    <h4 class="service-eco-title">Bank Benih Lokal</h4>
                    <p class="service-eco-desc">Pengembangan dan pelestarian benih-benih varietas lokal yang adaptif dan berkualitas untuk kedaulatan pangan.</p>
                </div>
            </div>
        </div>
    </div>
</section>