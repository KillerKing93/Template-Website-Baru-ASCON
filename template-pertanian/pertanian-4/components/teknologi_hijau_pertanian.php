<?php // File: components/teknologi_hijau_pertanian.php 
?>
<style>
    /* Teknologi Hijau Pertanian Styles */
    #teknologiHijauPertanian {
        background-color: var(--bg-dark-farm4);
        /* Dominan gelap untuk section ini */
        color: var(--text-dark-farm4);
        border-bottom: 1px solid var(--border-dark-farm4);
    }

    body:not(.dark-mode) #teknologiHijauPertanian {
        /* Penyesuaian jika light mode ingin beda */
        background-color: #E8F5E9;
        /* Hijau sangat pucat */
        color: var(--text-light-farm4);
        border-bottom-color: var(--border-light-farm4);
    }

    body:not(.dark-mode) #teknologiHijauPertanian .section-title-bio-farm h2 {
        color: var(--primary-bio-farm);
    }

    body:not(.dark-mode) #teknologiHijauPertanian .section-title-bio-farm h2 .highlight-accent-bio {
        color: var(--secondary-bio-farm);
    }

    body:not(.dark-mode) #teknologiHijauPertanian .section-title-bio-farm h2 .highlight-accent-bio::after {
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='10' viewBox='0 0 100 10' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 5 Q 25 10, 50 5 T 100 5' stroke='%23FFC107' stroke-width='3' fill='none'/%3E%3C/svg%3E");
    }

    body:not(.dark-mode) #teknologiHijauPertanian .section-title-bio-farm p.subtitle-bio-farm {
        color: var(--muted-text-light-farm4);
    }

    .tech-green-item {
        text-align: center;
        padding: 25px;
        background-color: var(--card-bg-dark-farm4);
        /* Kartu lebih gelap dari section */
        border-radius: 10px;
        border: 1px solid var(--border-dark-farm4);
        transition: all 0.3s ease;
        height: 100%;
    }

    body:not(.dark-mode) .tech-green-item {
        background-color: var(--card-bg-light-farm4);
        border-color: var(--border-light-farm4);
    }

    .tech-green-item:hover {
        transform: scale(1.05);
        box-shadow: 0 0 25px rgba(var(--accent-bio-farm-dark-rgb, 179, 229, 252), 0.2);
        border-color: var(--accent-bio-farm-dark);
    }

    body:not(.dark-mode) .tech-green-item:hover {
        box-shadow: 0 0 25px rgba(var(--accent-bio-farm-rgb, 129, 212, 250), 0.2);
        border-color: var(--accent-bio-farm);
    }

    /* Komentar CSS: Variabel RGB untuk accent-bio-farm-dark & accent-bio-farm */
    body.dark-mode {
        --accent-bio-farm-dark-rgb: 179, 229, 252;
    }

    body {
        --accent-bio-farm-rgb: 129, 212, 250;
    }


    .tech-green-item .tech-green-icon {
        font-size: 3.5rem;
        /* Ikon besar */
        color: var(--accent-bio-farm-dark);
        /* Warna ikon */
        margin-bottom: 20px;
        display: inline-block;
        line-height: 1;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    body:not(.dark-mode) .tech-green-item .tech-green-icon {
        color: var(--accent-bio-farm);
    }

    .tech-green-item:hover .tech-green-icon {
        transform: rotate(10deg);
        color: var(--secondary-bio-farm-dark);
        /* Warna ikon saat hover */
    }

    body:not(.dark-mode) .tech-green-item:hover .tech-green-icon {
        color: var(--secondary-bio-farm);
    }

    .tech-green-item h5.tech-green-title {
        font-family: 'Nunito', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--text-dark-farm4);
        /* Default dark mode */
    }

    body:not(.dark-mode) .tech-green-item h5.tech-green-title {
        color: var(--text-light-farm4);
    }

    .tech-green-item p.tech-green-desc {
        font-size: 0.9rem;
        color: var(--muted-text-dark-farm4);
        /* Default dark mode */
        line-height: 1.6;
        margin-bottom: 0;
    }

    body:not(.dark-mode) .tech-green-item p.tech-green-desc {
        color: var(--muted-text-light-farm4);
    }
</style>

<section id="teknologiHijauPertanian" class="section-bio-farm">
    <div class="container">
        <div class="section-title-bio-farm" data-aos="fade-up">
            <h2>Teknologi <span class="highlight-accent-bio">Hijau</span> & Inovasi</h2>
            <p class="subtitle-bio-farm">Pilar Teknologi Kami dalam Mewujudkan Pertanian yang Produktif dan Bertanggung Jawab.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-right" data-aos-delay="100">
                <div class="tech-green-item">
                    <div class="tech-green-icon"><i class="fas fa-solar-panel"></i></div>
                    <h5 class="tech-green-title">Energi Surya Terbarukan</h5>
                    <p class="tech-green-desc">Pemanfaatan panel surya untuk kebutuhan energi operasional pertanian, mengurangi emisi karbon.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-right" data-aos-delay="200">
                <div class="tech-green-item">
                    <div class="tech-green-icon"><i class="fas fa-recycle"></i></div>
                    <h5 class="tech-green-title">Pengelolaan Limbah Organik</h5>
                    <p class="tech-green-desc">Transformasi limbah pertanian menjadi pupuk kompos berkualitas tinggi dan biogas sebagai sumber energi alternatif.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-left" data-aos-delay="300">
                <div class="tech-green-item">
                    <div class="tech-green-icon"><i class="fas fa-tint"></i></div>
                    <h5 class="tech-green-title">Konservasi Air Presisi</h5>
                    <p class="tech-green-desc">Sistem irigasi tetes dan sensor kelembaban untuk penggunaan air yang efisien dan minimalisasi pemborosan.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-left" data-aos-delay="400">
                <div class="tech-green-item">
                    <div class="tech-green-icon"><i class="fas fa-bug"></i></div>
                    <h5 class="tech-green-title">Pengendalian Hama Terpadu (PHT)</h5>
                    <p class="tech-green-desc">Mengutamakan metode biologis dan alami dalam pengendalian hama, mengurangi ketergantungan pada pestisida kimia.</p>
                </div>
            </div>
        </div>
    </div>
</section>