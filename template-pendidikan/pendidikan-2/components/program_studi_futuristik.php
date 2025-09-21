<?php // File: components/program_studi_futuristik.php 
?>
<style>
    /* Program Studi Futuristik Styles */
    #programStudiFuturistik {
        background-color: var(--bg-dark-edu2);
        /* Dominan gelap */
        color: var(--text-dark-edu2);
        border-bottom: 1px solid var(--border-dark-edu2);
    }

    body:not(.dark-mode) #programStudiFuturistik {
        /* Penyesuaian jika light mode ingin beda */
        background-color: #F0F7FA;
        /* Biru sangat pucat */
        color: var(--text-light-edu2);
        border-bottom-color: var(--border-light-edu2);
    }

    body:not(.dark-mode) #programStudiFuturistik .section-title-eduverse h2 {
        color: var(--primary-edu2);
    }

    body:not(.dark-mode) #programStudiFuturistik .section-title-eduverse h2 span.highlight-accent-edu2 {
        color: var(--secondary-edu2);
    }

    body:not(.dark-mode) #programStudiFuturistik .section-title-eduverse h2 span.highlight-accent-edu2::before {
        text-shadow: -1px 0 var(--accent-edu2);
    }

    body:not(.dark-mode) #programStudiFuturistik .section-title-eduverse h2 span.highlight-accent-edu2::after {
        text-shadow: 1px 0 var(--secondary-edu2);
    }

    body:not(.dark-mode) #programStudiFuturistik .section-title-eduverse p.subtitle-eduverse {
        color: var(--muted-text-light-edu2);
    }


    .program-futuristic-card {
        background-color: var(--card-bg-dark-edu2);
        border: 1px solid var(--border-dark-edu2);
        border-radius: 8px;
        padding: 30px;
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
        /* Untuk efek hover */
        overflow: hidden;
    }

    body:not(.dark-mode) .program-futuristic-card {
        background-color: var(--card-bg-light-edu2);
        border-color: var(--border-light-edu2);
    }

    /* Efek "circuit lines" pada hover */
    .program-futuristic-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image:
            radial-gradient(circle at 10% 10%, rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.1) 1px, transparent 1.5px),
            radial-gradient(circle at 90% 80%, rgba(var(--primary-edu2-dark-rgb, 51, 161, 255), 0.1) 1px, transparent 1.5px);
        background-size: 30px 30px;
        opacity: 0;
        transition: opacity 0.5s ease;
        z-index: 0;
    }

    body:not(.dark-mode) .program-futuristic-card::before {
        background-image:
            radial-gradient(circle at 10% 10%, rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.1) 1px, transparent 1.5px),
            radial-gradient(circle at 90% 80%, rgba(var(--primary-edu2-rgb, 0, 119, 204), 0.1) 1px, transparent 1.5px);
    }

    .program-futuristic-card:hover::before {
        opacity: 1;
    }

    .program-futuristic-card .program-content-wrapper {
        position: relative;
        z-index: 1;
    }

    .program-futuristic-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 0 25px rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.15);
        border-color: var(--accent-edu2-dark);
    }

    body:not(.dark-mode) .program-futuristic-card:hover {
        box-shadow: 0 0 25px rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.15);
        border-color: var(--accent-edu2);
    }


    .program-futuristic-card .program-icon-futuristic {
        font-size: 3rem;
        color: var(--accent-edu2-dark);
        /* Warna ikon */
        margin-bottom: 20px;
        display: inline-block;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    body:not(.dark-mode) .program-futuristic-card .program-icon-futuristic {
        color: var(--accent-edu2);
    }

    .program-futuristic-card:hover .program-icon-futuristic {
        transform: scale(1.1);
        color: var(--secondary-edu2-dark);
        /* Warna ikon saat hover */
    }

    body:not(.dark-mode) .program-futuristic-card:hover .program-icon-futuristic {
        color: var(--secondary-edu2);
    }

    .program-futuristic-card h4.program-title-futuristic {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: var(--text-dark-edu2);
        /* Default dark mode */
    }

    body:not(.dark-mode) .program-futuristic-card h4.program-title-futuristic {
        color: var(--text-light-edu2);
    }

    .program-futuristic-card p.program-desc-futuristic {
        font-size: 0.95rem;
        color: var(--muted-text-dark-edu2);
        /* Default dark mode */
        line-height: 1.7;
        margin-bottom: 20px;
    }

    body:not(.dark-mode) .program-futuristic-card p.program-desc-futuristic {
        color: var(--muted-text-light-edu2);
    }

    .program-futuristic-card .program-tags-futuristic span {
        background-color: rgba(var(--primary-edu2-dark-rgb, 51, 161, 255), 0.2);
        color: var(--primary-edu2-dark);
        padding: 3px 8px;
        font-size: 0.75rem;
        border-radius: 4px;
        margin-right: 5px;
        margin-bottom: 5px;
        display: inline-block;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
    }

    body:not(.dark-mode) .program-futuristic-card .program-tags-futuristic span {
        background-color: rgba(var(--primary-edu2-rgb, 0, 119, 204), 0.1);
        color: var(--primary-edu2);
    }
</style>

<section id="programStudiFuturistik" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="PROGRAM STUDI">PROGRAM <span class="highlight-accent-edu2" data-text="STUDI">STUDI</span></h2>
            <p class="subtitle-eduverse">Kurikulum Inovatif yang Dirancang untuk Mempersiapkan Anda Menghadapi Tantangan Masa Depan.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="program-futuristic-card">
                    <div class="program-content-wrapper">
                        <div class="program-icon-futuristic"><i class="fas fa-brain"></i></div>
                        <h4 class="program-title-futuristic">Rekayasa Kecerdasan Artifisial</h4>
                        <p class="program-desc-futuristic">Mempelajari pengembangan AI, machine learning, deep learning, dan aplikasinya dalam berbagai industri.</p>
                        <div class="program-tags-futuristic">
                            <span>AI/ML</span><span>Python</span><span>Data Science</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="program-futuristic-card">
                    <div class="program-content-wrapper">
                        <div class="program-icon-futuristic"><i class="fas fa-cubes"></i></div>
                        <h4 class="program-title-futuristic">Teknologi Realitas Virtual & Augmentasi</h4>
                        <p class="program-desc-futuristic">Mengembangkan aplikasi VR/AR interaktif untuk simulasi, edukasi, hiburan, dan solusi industri.</p>
                        <div class="program-tags-futuristik">
                            <span>VR/AR</span><span>Unity</span><span>3D Modeling</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="program-futuristic-card">
                    <div class="program-content-wrapper">
                        <div class="program-icon-futuristic"><i class="fas fa-shield-virus"></i></div>
                        <h4 class="program-title-futuristic">Keamanan Siber & Forensik Digital</h4>
                        <p class="program-desc-futuristic">Mempelajari teknik pertahanan siber, analisis malware, etika hacking, dan investigasi forensik digital.</p>
                        <div class="program-tags-futuristic">
                            <span>CyberSecurity</span><span>Networking</span><span>Forensics</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php /* Komentar PHP: Tambahkan program studi lainnya jika ada */ ?>
        </div>
    </div>
</section>