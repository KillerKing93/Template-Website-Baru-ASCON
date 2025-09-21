<?php // File: components/riset_publikasi_pendidikan.php 
?>
<style>
    /* Riset & Publikasi Pendidikan Styles */
    #risetPublikasiPendidikan {
        background-color: var(--card-bg-light-edu3);
        /* Latar berbeda dari body */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #risetPublikasiPendidikan {
        background-color: var(--card-bg-dark-edu3);
    }

    .research-highlight-card {
        background-color: var(--bg-light-edu3);
        /* Kontras dengan section */
        border-radius: 8px;
        padding: 25px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
        height: 100%;
        border-left: 4px solid var(--accent-illumina);
        /* Aksen samping */
    }

    body.dark-mode .research-highlight-card {
        background-color: var(--bg-dark-edu3);
        /* Kontras dengan section */
        border-left-color: var(--accent-illumina-dark);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    }

    .research-highlight-card:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 25px rgba(95, 158, 160, 0.15);
        /* var(--accent-illumina) dengan alpha */
    }

    body.dark-mode .research-highlight-card:hover {
        box-shadow: 0 10px 25px rgba(119, 168, 170, 0.2);
        /* var(--accent-illumina-dark) dengan alpha */
    }

    .research-highlight-card .research-icon {
        font-size: 2.5rem;
        color: var(--accent-illumina);
        margin-bottom: 15px;
        display: inline-block;
    }

    body.dark-mode .research-highlight-card .research-icon {
        color: var(--accent-illumina-dark);
    }

    .research-highlight-card h5.research-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .research-highlight-card p.research-area {
        /* Bidang riset */
        font-size: 0.85rem;
        color: var(--muted-text-light-edu3);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
    }

    body.dark-mode .research-highlight-card p.research-area {
        color: var(--muted-text-dark-edu3);
    }

    .research-highlight-card p.research-summary {
        font-size: 0.9rem;
        line-height: 1.6;
        color: var(--muted-text-light-edu3);
        margin-bottom: 15px;
    }

    body.dark-mode .research-highlight-card p.research-summary {
        color: var(--muted-text-dark-edu3);
    }

    .research-highlight-card .btn-read-publication {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--accent-illumina);
        text-decoration: none;
    }

    .research-highlight-card .btn-read-publication:hover {
        text-decoration: underline;
    }

    body.dark-mode .research-highlight-card .btn-read-publication {
        color: var(--accent-illumina-dark);
    }

    .research-stats-illumina {
        text-align: center;
        margin-top: 40px;
        padding: 30px;
        background-color: var(--bg-light-edu3);
        border-radius: 8px;
        border: 1px solid var(--border-light-edu3);
    }

    body.dark-mode .research-stats-illumina {
        background-color: var(--bg-dark-edu3);
        border-color: var(--border-dark-edu3);
    }

    .research-stats-illumina h4 {
        font-size: 1.6rem;
        margin-bottom: 20px;
        color: var(--primary-illumina);
    }

    body.dark-mode .research-stats-illumina h4 {
        color: var(--primary-illumina-dark);
    }

    .research-stats-illumina .stat-item {
        font-family: 'Open Sans', sans-serif;
    }

    .research-stats-illumina .stat-item .stat-number {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.2rem;
        font-weight: 700;
        color: var(--secondary-illumina);
        display: block;
    }

    body.dark-mode .research-stats-illumina .stat-item .stat-number {
        color: var(--secondary-illumina-dark);
    }

    .research-stats-illumina .stat-item .stat-label {
        font-size: 0.9rem;
        color: var(--muted-text-light-edu3);
    }

    body.dark-mode .research-stats-illumina .stat-item .stat-label {
        color: var(--muted-text-dark-edu3);
    }
</style>

<section id="risetPublikasiPendidikan" class="section-illumina">
    <div class="container">
        <div class="section-title-illumina" data-aos="fade-up">
            <h2>Riset & <span style="color:var(--secondary-illumina);">Publikasi</span></h2>
            <p class="subtitle-illumina">Kontribusi Kami dalam Pengembangan Ilmu Pengetahuan dan Solusi Inovatif.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="research-highlight-card">
                    <div class="research-icon"><i class="fas fa-book-open"></i></div>
                    <h5 class="research-title">Studi Komparatif Sastra Kontemporer Asia Tenggara</h5>
                    <p class="research-area">Humaniora - Sastra</p>
                    <p class="research-summary">Analisis mendalam terhadap tema dan narasi dalam karya sastra modern dari berbagai negara di Asia Tenggara.</p>
                    <a href="#" class="btn-read-publication">Lihat Publikasi <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="research-highlight-card">
                    <div class="research-icon"><i class="fas fa-cogs"></i></div>
                    <h5 class="research-title">Pengembangan Material Komposit Ramah Lingkungan</h5>
                    <p class="research-area">Sains & Teknologi - Teknik Material</p>
                    <p class="research-summary">Inovasi material baru berbasis serat alam untuk aplikasi industri yang lebih berkelanjutan dan mengurangi limbah.</p>
                    <a href="#" class="btn-read-publication">Lihat Publikasi <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="research-highlight-card">
                    <div class="research-icon"><i class="fas fa-paint-brush"></i></div>
                    <h5 class="research-title">Pengaruh Seni Digital Terhadap Persepsi Estetika Generasi Z</h5>
                    <p class="research-area">Seni & Desain - Media Digital</p>
                    <p class="research-summary">Kajian tentang bagaimana platform digital dan seni berbasis teknologi membentuk preferensi estetika kaum muda.</p>
                    <a href="#" class="btn-read-publication">Lihat Publikasi <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
        </div>

        <div class="research-stats-illumina row mt-5 pt-3" data-aos="fade-up" data-aos-delay="400">
            <div class="col-md-12">
                <h4>Capaian Riset Kami</h4>
            </div>
            <div class="col-lg-3 col-md-6 stat-item">
                <span class="stat-number">500+</span>
                <span class="stat-label">Publikasi Ilmiah</span>
            </div>
            <div class="col-lg-3 col-md-6 stat-item">
                <span class="stat-number">75+</span>
                <span class="stat-label">Proyek Riset Aktif</span>
            </div>
            <div class="col-lg-3 col-md-6 stat-item">
                <span class="stat-number">30+</span>
                <span class="stat-label">Paten Terdaftar</span>
            </div>
            <div class="col-lg-3 col-md-6 stat-item">
                <span class="stat-number">100+</span>
                <span class="stat-label">Kolaborasi Internasional</span>
            </div>
        </div>
    </div>
</section>