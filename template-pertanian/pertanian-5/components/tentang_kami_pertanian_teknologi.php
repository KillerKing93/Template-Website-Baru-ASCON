<?php // File: components/tentang_kami_pertanian_teknologi.php ?>
<style>
    /* Tentang Kami Pertanian Teknologi Styles */
    #tentangKamiPertanianTeknologi {
        background-color: var(--bg-light-farm5); /* Default light */
        border-bottom: 1px solid var(--border-light-farm5);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    body.dark-mode #tentangKamiPertanianTeknologi {
        background-color: var(--bg-dark-farm5);
        border-bottom-color: var(--border-dark-farm5);
    }

    .about-tech-content h3 {
        font-size: 2.6rem; /* Ukuran judul */
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--primary-futura-farm);
        line-height: 1.3;
    }
    body.dark-mode .about-tech-content h3 {
        color: var(--primary-futura-farm-dark);
    }

    .about-tech-content .tech-mission-statement {
        font-family: 'Inter', sans-serif;
        font-size: 1.2rem;
        font-weight: 500; /* Sedikit lebih tebal */
        color: var(--muted-text-light-farm5);
        margin-bottom: 25px;
        border-left: 4px solid var(--secondary-futura-farm);
        padding-left: 20px;
        font-style: normal; /* Tidak italic */
        transition: color 0.3s ease, border-color 0.3s ease;
    }
    body.dark-mode .about-tech-content .tech-mission-statement {
        color: var(--muted-text-dark-farm5);
        border-left-color: var(--secondary-futura-farm-dark);
    }

    .about-tech-content p {
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 18px;
    }

    .tech-pillars-grid {
        margin-top: 35px;
    }
    .pillar-tech-item {
        background-color: var(--card-bg-light-farm5);
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.06);
        transition: all 0.3s ease;
        height: 100%; /* Untuk tinggi yang sama jika dalam row */
        border: 1px solid var(--border-light-farm5);
    }
    body.dark-mode .pillar-tech-item {
        background-color: var(--card-bg-dark-farm5);
        box-shadow: 0 6px 18px rgba(0,0,0,0.2);
        border-color: var(--border-dark-farm5);
    }
    .pillar-tech-item:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 168, 150, 0.15); /* var(--primary-futura-farm) dengan alpha */
        border-color: var(--primary-futura-farm);
    }
    body.dark-mode .pillar-tech-item:hover {
        box-shadow: 0 10px 25px rgba(0, 203, 169, 0.2); /* var(--primary-futura-farm-dark) dengan alpha */
        border-color: var(--primary-futura-farm-dark);
    }

    .pillar-tech-item .pillar-tech-icon {
        font-size: 2.8rem; /* Ikon pilar */
        color: var(--primary-futura-farm);
        margin-bottom: 15px;
        display: inline-block;
        transition: color 0.3s ease, transform 0.3s ease;
    }
    .pillar-tech-item:hover .pillar-tech-icon {
        transform: scale(1.1);
    }
    body.dark-mode .pillar-tech-item .pillar-tech-icon {
        color: var(--primary-futura-farm-dark);
    }

    .pillar-tech-item h5.pillar-tech-title {
        font-family: 'Exo 2', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 8px;
    }
    .pillar-tech-item p.pillar-tech-desc {
        font-size: 0.9rem;
        margin-bottom: 0;
        line-height: 1.6;
        color: var(--muted-text-light-farm5);
    }
    body.dark-mode .pillar-tech-item p.pillar-tech-desc {
        color: var(--muted-text-dark-farm5);
    }

    .about-image-tech-wrapper {
        position: relative;
        text-align: center;
    }
    .about-image-tech {
        border-radius: 10px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 12px 35px rgba(0,0,0,0.1);
        border: 2px solid var(--border-light-farm5);
        transition: all 0.3s ease;
    }
    body.dark-mode .about-image-tech {
        box-shadow: 0 12px 35px rgba(0,0,0,0.3);
        border-color: var(--border-dark-farm5);
    }
    /* Efek "glitch" atau "data lines" pada gambar */
    .about-image-tech-wrapper::before {
        content: '';
        position: absolute;
        top: -10px; left: -10px; right: 10px; bottom: 10px;
        border: 2px dashed var(--accent-futura-farm);
        opacity: 0;
        transition: opacity 0.4s ease, transform 0.4s ease;
        z-index: -1;
        border-radius: 12px;
        transform: scale(0.95);
    }
    .about-image-tech-wrapper:hover::before {
        opacity: 0.5;
        transform: scale(1);
    }
    body.dark-mode .about-image-tech-wrapper::before {
        border-color: var(--accent-futura-farm-dark);
    }

</style>

<section id="tentangKamiPertanianTeknologi" class="section-futura-farm">
    <div class="container">
        <div class="section-title-futura-farm" data-aos="fade-up">
            <h2>Tentang <span class="highlight-yellow">AgroFutura</span></h2>
            <div class="title-deco-line"></div>
            <p class="subtitle-futura-farm">Memadukan Kearifan Alam dengan Inovasi Teknologi untuk Pertanian Masa Depan.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 about-image-tech-wrapper" data-aos="zoom-in-right" data-aos-duration="900">
                <img src="https://placehold.co/600x520/1E293B/00A896?text=Tim+Riset+AgroFutura&font=exo2" alt="[Gambar Tim Riset AgroFutura di Laboratorium]" class="img-fluid about-image-tech">
            </div>
            <div class="col-lg-6 about-tech-content" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                <h3>Misi Kami: Agrikultur Cerdas, Bumi Lestari.</h3>
                <p class="tech-mission-statement">
                    AgroFutura berdedikasi untuk menjadi garda terdepan dalam revolusi pertanian melalui penerapan teknologi canggih yang berkelanjutan.
                </p>
                <p>
                    Kami adalah tim yang terdiri dari agronom, insinyur, ilmuwan data, dan visioner yang percaya bahwa teknologi dapat menjadi kekuatan pendorong untuk ketahanan pangan global, kesejahteraan petani, dan kelestarian lingkungan. Kami mengembangkan dan mengimplementasikan solusi inovatif yang mengoptimalkan setiap aspek pertanian.
                </p>
                <div class="tech-pillars-grid row gy-3">
                    <div class="col-md-6">
                        <div class="pillar-tech-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="pillar-tech-icon"><i class="fas fa-cogs"></i></div>
                            <div class="pillar-text">
                                <h5 class="pillar-tech-title">Inovasi Berkelanjutan</h5>
                                <p class="pillar-tech-desc">Riset dan pengembangan berkelanjutan untuk solusi agritech terdepan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pillar-tech-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="pillar-tech-icon"><i class="fas fa-handshake-angle"></i></div> <?php /* Ikon baru */ ?>
                            <div class="pillar-text">
                                <h5 class="pillar-tech-title">Kemitraan Strategis</h5>
                                <p class="pillar-tech-desc">Kolaborasi erat dengan petani, akademisi, dan industri untuk dampak maksimal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
