<?php // File: components/pusat_riset_kolaborasi_pendidikan.php 
?>
<style>
    /* Pusat Riset & Kolaborasi Pendidikan Styles */
    #pusatRisetKolaborasiPendidikan {
        background-color: var(--card-bg-light-edu4);
        /* Latar berbeda dari body */
        border-bottom: 1px solid var(--border-light-edu4);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode #pusatRisetKolaborasiPendidikan {
        background-color: var(--card-bg-dark-edu4);
        border-bottom-color: var(--border-dark-edu4);
    }

    .research-hub-content h3 {
        font-size: 2.5rem;
        font-weight: 700;
        /* Orbitron sudah bold */
        margin-bottom: 20px;
        color: var(--primary-innovate);
        line-height: 1.3;
    }

    body.dark-mode .research-hub-content h3 {
        color: var(--primary-innovate-dark);
    }

    .research-hub-content .hub-description {
        font-family: 'Inter', sans-serif;
        font-size: 1.1rem;
        color: var(--muted-text-light-edu4);
        margin-bottom: 30px;
        line-height: 1.7;
    }

    body.dark-mode .research-hub-content .hub-description {
        color: var(--muted-text-dark-edu4);
    }

    .research-area-item {
        display: flex;
        align-items: flex-start;
        /* Ikon dan teks sejajar atas */
        margin-bottom: 25px;
        padding: 20px;
        background-color: rgba(var(--bg-light-edu4-rgb, 244, 247, 252), 0.7);
        border-radius: 8px;
        border-left: 4px solid var(--secondary-innovate);
        /* Aksen samping */
        transition: all 0.3s ease;
    }

    body.dark-mode .research-area-item {
        background-color: rgba(var(--bg-dark-edu4-rgb, 10, 25, 47), 0.8);
        border-left-color: var(--secondary-innovate-dark);
    }

    .research-area-item:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 20px rgba(var(--secondary-innovate-rgb, 255, 111, 97), 0.15);
    }

    body.dark-mode .research-area-item:hover {
        box-shadow: 0 6px 20px rgba(var(--secondary-innovate-dark-rgb, 255, 140, 122), 0.2);
    }

    /* Komentar CSS: Variabel RGB untuk secondary-innovate */
    body {
        --secondary-innovate-rgb: 255, 111, 97;
    }

    body.dark-mode {
        --secondary-innovate-dark-rgb: 255, 140, 122;
    }


    .research-area-item .research-area-icon {
        font-size: 2.2rem;
        /* Ikon area riset */
        color: var(--secondary-innovate);
        margin-right: 20px;
        width: 50px;
        /* Lebar tetap */
        text-align: center;
        flex-shrink: 0;
    }

    body.dark-mode .research-area-item .research-area-icon {
        color: var(--secondary-innovate-dark);
    }

    .research-area-item .research-area-text h5 {
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .research-area-item .research-area-text p {
        font-size: 0.95rem;
        margin-bottom: 0;
        line-height: 1.6;
        color: var(--muted-text-light-edu4);
    }

    body.dark-mode .research-area-item .research-area-text p {
        color: var(--muted-text-dark-edu4);
    }

    .collaboration-image-wrapper {
        position: relative;
        text-align: center;
    }

    .collaboration-image {
        border-radius: 10px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1);
        border: 2px solid transparent;
        padding: 6px;
        background-clip: padding-box;
        position: relative;
        transition: all 0.3s ease;
    }

    .collaboration-image-wrapper:hover .collaboration-image {
        border-color: var(--accent-innovate);
        box-shadow: 0 0 25px rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.3);
    }

    body.dark-mode .collaboration-image {
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.35);
    }

    body.dark-mode .collaboration-image-wrapper:hover .collaboration-image {
        border-color: var(--accent-innovate-dark);
        box-shadow: 0 0 25px rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.3);
    }
</style>

<section id="pusatRisetKolaborasiPendidikan" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="PUSAT RISET & KOLABORASI">PUSAT RISET & <span class="highlight-accent-edu2" data-text="KOLABORASI">KOLABORASI</span></h2>
            <p class="subtitle-eduverse">Wadah Inovasi Terdepan yang Menghubungkan Akademisi, Industri, dan Komunitas Global.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 research-hub-content" data-aos="fade-right" data-aos-duration="900">
                <h3>Mendorong Batas Pengetahuan, Menciptakan Dampak Nyata.</h3>
                <p class="hub-description">
                    Pusat Riset dan Kolaborasi InnovateU adalah jantung dari ekosistem inovasi kami. Di sini, ide-ide brilian bertemu dengan keahlian multidisiplin untuk menghasilkan penelitian terapan yang relevan dengan tantangan global dan kebutuhan industri.
                </p>
                <div class="research-areas-list">
                    <div class="research-area-item" data-aos="fade-right" data-aos-delay="100">
                        <div class="research-area-icon"><i class="fas fa-microchip"></i></div>
                        <div class="research-area-text">
                            <h5>Teknologi Kuantum & AI</h5>
                            <p>Eksplorasi komputasi kuantum, algoritma AI lanjut, dan aplikasinya di berbagai sektor.</p>
                        </div>
                    </div>
                    <div class="research-area-item" data-aos="fade-right" data-aos-delay="200">
                        <div class="research-area-icon"><i class="fas fa-globe-americas"></i></div>
                        <div class="research-area-text">
                            <h5>Solusi Keberlanjutan Global</h5>
                            <p>Riset interdisipliner untuk energi terbarukan, ekonomi sirkular, dan mitigasi perubahan iklim.</p>
                        </div>
                    </div>
                    <div class="research-area-item" data-aos="fade-right" data-aos-delay="300">
                        <div class="research-area-icon"><i class="fas fa-user-md"></i></div> <?php /* Ikon untuk Bio-Informatika/Kesehatan */ ?>
                        <div class="research-area-text">
                            <h5>Bio-Informatika & Kesehatan Digital</h5>
                            <p>Penerapan data science dan AI dalam analisis genomik, penemuan obat, dan layanan kesehatan presisi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 collaboration-image-wrapper" data-aos="zoom-in-up" data-aos-duration="900" data-aos-delay="100">
                <img src="https://placehold.co/550x500/172A46/E6F1FF?text=Kolaborasi+Riset+InnovateU&font=rajdhani" alt="[Gambar Tim Riset InnovateU sedang Berkolaborasi]" class="img-fluid collaboration-image">
            </div>
        </div>
    </div>
</section>