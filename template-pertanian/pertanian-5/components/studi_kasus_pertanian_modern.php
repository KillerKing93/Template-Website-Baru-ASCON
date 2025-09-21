<?php // File: components/studi_kasus_pertanian_modern.php 
?>
<style>
    /* Studi Kasus Pertanian Modern Styles */
    #studiKasusPertanianModern {
        background-color: var(--bg-light-farm5);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #studiKasusPertanianModern {
        background-color: var(--bg-dark-farm5);
    }

    .case-study-item-modern {
        background-color: var(--card-bg-light-farm5);
        border-radius: 10px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light-farm5);
    }

    body.dark-mode .case-study-item-modern {
        background-color: var(--card-bg-dark-farm5);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark-farm5);
    }

    .case-study-item-modern:hover {
        transform: scale(1.03);
        box-shadow: 0 12px 35px rgba(0, 168, 150, 0.12);
        /* var(--primary-futura-farm) dengan alpha */
    }

    body.dark-mode .case-study-item-modern:hover {
        box-shadow: 0 12px 35px rgba(0, 203, 169, 0.18);
        /* var(--primary-futura-farm-dark) dengan alpha */
    }

    .case-study-item-modern .case-study-image {
        height: 250px;
        overflow: hidden;
        border-radius: 10px 10px 0 0;
        /* Hanya sudut atas */
    }

    .case-study-item-modern .case-study-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .case-study-item-modern:hover .case-study-image img {
        transform: scale(1.1);
    }

    .case-study-item-modern .case-study-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .case-study-item-modern .case-study-tags {
        margin-bottom: 10px;
    }

    .case-study-item-modern .case-study-tags .tag {
        display: inline-block;
        background-color: rgba(var(--secondary-futura-farm-rgb, 240, 200, 8), 0.15);
        color: var(--secondary-futura-farm);
        padding: 3px 10px;
        font-size: 0.7rem;
        border-radius: 4px;
        margin-right: 5px;
        margin-bottom: 5px;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    body.dark-mode .case-study-item-modern .case-study-tags .tag {
        background-color: rgba(var(--secondary-futura-farm-dark-rgb, 243, 211, 74), 0.2);
        color: var(--secondary-futura-farm-dark);
    }

    .case-study-item-modern h4.case-study-title {
        font-family: 'Exo 2', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .case-study-item-modern h4.case-study-title a {
        color: var(--text-light-farm5);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .case-study-item-modern h4.case-study-title a:hover {
        color: var(--primary-futura-farm);
    }

    body.dark-mode .case-study-item-modern h4.case-study-title a {
        color: var(--text-dark-farm5);
    }

    body.dark-mode .case-study-item-modern h4.case-study-title a:hover {
        color: var(--primary-futura-farm-dark);
    }

    .case-study-item-modern p.case-study-summary {
        font-size: 0.9rem;
        line-height: 1.7;
        color: var(--muted-text-light-farm5);
        margin-bottom: 20px;
        flex-grow: 1;
    }

    body.dark-mode .case-study-item-modern p.case-study-summary {
        color: var(--muted-text-dark-farm5);
    }

    .case-study-item-modern .btn-read-case-study {
        margin-top: auto;
        align-self: flex-start;
        font-size: 0.9rem;
    }
</style>

<section id="studiKasusPertanianModern" class="section-futura-farm">
    <div class="container">
        <div class="section-title-futura-farm" data-aos="fade-up">
            <h2>Studi Kasus <span class="highlight-yellow">Keberhasilan</span></h2>
            <div class="title-deco-line"></div>
            <p class="subtitle-futura-farm">Bagaimana Solusi AgriTech Kami Memberikan Dampak Nyata bagi Mitra Petani.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article class="case-study-item-modern">
                    <div class="case-study-image">
                        <a href="#"><img src="https://placehold.co/600x400/00A896/FFFFFF?text=Studi+Kasus+Irigasi" alt="[Gambar Studi Kasus Irigasi Cerdas]"></a>
                    </div>
                    <div class="case-study-content">
                        <div class="case-study-tags">
                            <span class="tag">IoT</span><span class="tag">Efisiensi Air</span><span class="tag">Sayuran</span>
                        </div>
                        <h4 class="case-study-title"><a href="#">Peningkatan Hasil Panen Sayuran hingga 30% dengan Irigasi Cerdas</a></h4>
                        <p class="case-study-summary">Implementasi sistem irigasi berbasis sensor IoT di lahan Pak Joko berhasil mengurangi penggunaan air dan meningkatkan kualitas serta kuantitas panen.</p>
                        <a href="#" class="btn-futura-secondary btn-read-case-study">Baca Detail Studi</a>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <article class="case-study-item-modern">
                    <div class="case-study-image">
                        <a href="#"><img src="https://placehold.co/600x400/F0C808/1A2B3C?text=Studi+Kasus+AI+Hama" alt="[Gambar Studi Kasus Deteksi Hama AI]"></a>
                    </div>
                    <div class="case-study-content">
                        <div class="case-study-tags">
                            <span class="tag">AI</span><span class="tag">Deteksi Hama</span><span class="tag">Padi</span>
                        </div>
                        <h4 class="case-study-title"><a href="#">Mengurangi Kerugian Akibat Hama Padi dengan Deteksi Dini Berbasis AI</a></h4>
                        <p class="case-study-summary">Kelompok tani Suka Makmur berhasil menekan angka gagal panen berkat adopsi teknologi AI untuk identifikasi serangan hama secara akurat.</p>
                        <a href="#" class="btn-futura-secondary btn-read-case-study">Baca Detail Studi</a>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <article class="case-study-item-modern">
                    <div class="case-study-image">
                        <a href="#"><img src="https://placehold.co/600x400/02C39A/FFFFFF?text=Studi+Kasus+Pasar+Digital" alt="[Gambar Studi Kasus Pasar Digital Petani]"></a>
                    </div>
                    <div class="case-study-content">
                        <div class="case-study-tags">
                            <span class="tag">Platform Digital</span><span class="tag">Akses Pasar</span><span class="tag">Buah</span>
                        </div>
                        <h4 class="case-study-title"><a href="#">Memperluas Jangkauan Pasar Petani Buah melalui Platform E-commerce</a></h4>
                        <p class="case-study-summary">Koperasi petani buah "Manis Sejahtera" meningkatkan penjualan dan mendapatkan harga lebih baik dengan terhubung langsung ke konsumen.</p>
                        <a href="#" class="btn-futura-secondary btn-read-case-study">Baca Detail Studi</a>
                    </div>
                </article>
            </div>
        </div>
        <div class="text-center mt-5 pt-3" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="btn-futura-primary">Lihat Semua Studi Kasus</a>
        </div>
    </div>
</section>