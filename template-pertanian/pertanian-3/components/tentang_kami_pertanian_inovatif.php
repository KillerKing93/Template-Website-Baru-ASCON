<?php // File: components/tentang_kami_pertanian_inovatif.php 
?>
<style>
    /* Tentang Kami Pertanian Inovatif Styles */
    #tentangKamiPertanianInovatif {
        background-color: var(--bg-light-farm3);
        /* Default light */
        border-bottom: 1px solid var(--border-light-farm3);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode #tentangKamiPertanianInovatif {
        background-color: var(--bg-dark-farm3);
        border-bottom-color: var(--border-dark-farm3);
    }

    .about-content-inovatif h3 {
        font-size: 2.8rem;
        /* Judul lebih besar */
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-art-farm);
        line-height: 1.3;
    }

    body.dark-mode .about-content-inovatif h3 {
        color: var(--primary-art-farm-dark);
    }

    .about-content-inovatif .subtitle-inovatif {
        font-family: 'Poppins', sans-serif;
        font-size: 1.25rem;
        font-weight: 600;
        /* Subtitle lebih tebal */
        color: var(--accent-art-farm);
        margin-bottom: 20px;
        display: block;
    }

    body.dark-mode .about-content-inovatif .subtitle-inovatif {
        color: var(--accent-art-farm-dark);
    }

    .about-content-inovatif p {
        font-size: 1.05rem;
        line-height: 1.9;
        /* Spasi baris lebih lega */
        margin-bottom: 20px;
    }

    .innovation-highlights {
        margin-top: 30px;
    }

    .highlight-item {
        display: flex;
        align-items: flex-start;
        /* Ikon dan teks sejajar atas */
        margin-bottom: 25px;
        padding: 20px;
        background-color: var(--card-bg-light-farm3);
        border-radius: 8px;
        border-left: 5px solid var(--secondary-art-farm);
        /* Aksen samping */
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    body.dark-mode .highlight-item {
        background-color: var(--card-bg-dark-farm3);
        border-left-color: var(--secondary-art-farm-dark);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    .highlight-item:hover {
        transform: translateX(8px);
        box-shadow: 0 8px 20px rgba(var(--secondary-art-farm-rgb, 255, 152, 0), 0.15);
    }

    body.dark-mode .highlight-item:hover {
        box-shadow: 0 8px 20px rgba(var(--secondary-art-farm-dark-rgb, 255, 183, 77), 0.2);
    }


    .highlight-item .icon-highlight {
        font-size: 2.5rem;
        /* Ikon lebih besar */
        color: var(--secondary-art-farm);
        margin-right: 20px;
        width: 50px;
        /* Lebar tetap untuk ikon */
        flex-shrink: 0;
        /* Agar ikon tidak mengecil */
        text-align: center;
        line-height: 1;
        /* Untuk alignment yang lebih baik */
    }

    body.dark-mode .highlight-item .icon-highlight {
        color: var(--secondary-art-farm-dark);
    }

    .highlight-item .text-highlight h5 {
        font-family: 'Teko', sans-serif;
        font-size: 1.6rem;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .highlight-item .text-highlight p {
        font-size: 0.95rem;
        margin-bottom: 0;
        line-height: 1.6;
        color: var(--muted-text-light-farm3);
    }

    body.dark-mode .highlight-item .text-highlight p {
        color: var(--muted-text-dark-farm3);
    }

    .about-image-inovatif-wrapper {
        position: relative;
        text-align: center;
        /* Pusatkan gambar jika lebih kecil dari kolom */
    }

    .about-image-inovatif {
        border-radius: 10px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        /* Efek "glitch" atau distorsi halus pada gambar (opsional) */
        /* filter: contrast(1.1) brightness(0.95); */
        /* animation: imageDistort 8s infinite alternate ease-in-out; */
    }

    body.dark-mode .about-image-inovatif {
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    }

    /* @keyframes imageDistort {
        0% { transform: skewX(-1deg) skewY(0.5deg); }
        100% { transform: skewX(1deg) skewY(-0.5deg); }
    } */
</style>

<section id="tentangKamiPertanianInovatif" class="section-artistic-farm">
    <div class="container">
        <div class="section-title-artistic-farm" data-aos="fade-up">
            <h2>INOVASI <span style="color: var(--secondary-art-farm);">DI JANTUNG</span> AGRINOVA</h2>
            <?php /* Komentar PHP: Subtitle bisa dihilangkan jika judul sudah cukup deskriptif */ ?>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 about-content-inovatif" data-aos="fade-right" data-aos-duration="1000">
                <h3>Merevolusi Pertanian, Satu Inovasi Sekaligus.</h3>
                <span class="subtitle-inovatif">Kami bukan hanya petani; kami adalah ilmuwan data, insinyur, dan visioner yang bersemangat tentang masa depan pangan.</span>
                <p>
                    Di AgriNova Tech, kami percaya bahwa masa depan pertanian terletak pada perpaduan cerdas antara kearifan alam dan kecanggihan teknologi. Kami berinvestasi besar dalam riset dan pengembangan untuk menciptakan solusi agroteknologi yang tidak hanya meningkatkan produktivitas, tetapi juga mempromosikan keberlanjutan dan ketahanan pangan.
                </p>
                <p>
                    Dari pertanian presisi berbasis AI hingga sistem irigasi pintar dan bioteknologi canggih, kami terus mendorong batas-batas kemungkinan untuk menciptakan pertanian yang lebih efisien, menguntungkan, dan ramah lingkungan.
                </p>
            </div>
            <div class="col-lg-6 about-image-inovatif-wrapper" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                <img src="https://placehold.co/600x500/1C1C1C/03A9F4?text=Riset+Agroteknologi+Modern&font=teko" alt="[Gambar Laboratorium Riset Agroteknologi Modern]" class="img-fluid about-image-inovatif">
            </div>
        </div>

        <div class="innovation-highlights row gy-4 mt-5 pt-4">
            <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="highlight-item">
                    <div class="icon-highlight"><i class="fas fa-brain"></i></div>
                    <div class="text-highlight">
                        <h5>AI & Analitik Prediktif</h5>
                        <p>Memanfaatkan kecerdasan buatan untuk analisis data tanaman, prediksi cuaca, dan optimalisasi sumber daya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="300">
                <div class="highlight-item">
                    <div class="icon-highlight"><i class="fas fa-satellite-dish"></i></div>
                    <div class="text-highlight">
                        <h5>Pertanian Presisi & IoT</h5>
                        <p>Sensor pintar dan perangkat IoT untuk pemantauan lahan secara real-time dan tindakan yang tepat sasaran.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="highlight-item">
                    <div class="icon-highlight"><i class="fas fa-dna"></i></div>
                    <div class="text-highlight">
                        <h5>Bioteknologi & Varietas Unggul</h5>
                        <p>Pengembangan varietas tanaman tahan hama dan adaptif terhadap perubahan iklim melalui bioteknologi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-in-up" data-aos-delay="500">
                <div class="highlight-item">
                    <div class="icon-highlight"><i class="fas fa-recycle"></i></div>
                    <div class="text-highlight">
                        <h5>Praktik Pertanian Berkelanjutan</h5>
                        <p>Mengedepankan metode pertanian organik, pengelolaan air yang bijak, dan pengurangan jejak karbon.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>