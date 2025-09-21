<?php // File: components/komunitas_dampak_pertanian.php 
?>
<style>
    /* Komunitas & Dampak Pertanian Styles */
    #komunitasDampakPertanian {
        background-color: var(--bg-light-farm4);
        /* Default light */
        /* background-image: url('https://www.transparenttextures.com/patterns/farmer.png'); */
        /* Tekstur halus opsional */
        /* background-blend-mode: overlay; */
        /* background-size: 400px; */
        /* opacity: 0.8; */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #komunitasDampakPertanian {
        background-color: var(--bg-dark-farm4);
    }

    .impact-card {
        background-color: var(--card-bg-light-farm4);
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        text-align: center;
        height: 100%;
        border-top: 4px solid var(--primary-bio-farm);
        transition: all 0.3s ease;
    }

    body.dark-mode .impact-card {
        background-color: var(--card-bg-dark-farm4);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        border-top-color: var(--primary-bio-farm-dark);
    }

    .impact-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(56, 142, 60, 0.12);
        /* var(--primary-bio-farm) dengan alpha */
    }

    body.dark-mode .impact-card:hover {
        box-shadow: 0 12px 30px rgba(102, 187, 106, 0.18);
        /* var(--primary-bio-farm-dark) dengan alpha */
    }


    .impact-card .impact-icon {
        font-size: 3rem;
        color: var(--primary-bio-farm);
        margin-bottom: 20px;
        display: inline-block;
        background-color: rgba(var(--primary-bio-farm-rgb, 56, 142, 60), 0.08);
        width: 80px;
        height: 80px;
        line-height: 80px;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    body.dark-mode .impact-card .impact-icon {
        color: var(--primary-bio-farm-dark);
        background-color: rgba(var(--primary-bio-farm-dark-rgb, 102, 187, 106), 0.1);
    }

    .impact-card:hover .impact-icon {
        background-color: var(--primary-bio-farm);
        color: #fff;
        transform: rotate(15deg);
    }

    body.dark-mode .impact-card:hover .impact-icon {
        background-color: var(--primary-bio-farm-dark);
        color: var(--bg-dark-farm4);
    }

    .impact-card h5.impact-title {
        font-family: 'Nunito', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .impact-card p.impact-description {
        font-size: 0.95rem;
        color: var(--muted-text-light-farm4);
        line-height: 1.7;
        margin-bottom: 0;
    }

    body.dark-mode .impact-card p.impact-description {
        color: var(--muted-text-dark-farm4);
    }

    .community-cta {
        margin-top: 50px;
        text-align: center;
        padding: 30px;
        background-color: var(--card-bg-light-farm4);
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid var(--border-light-farm4);
        transition: all 0.3s ease;
    }

    body.dark-mode .community-cta {
        background-color: var(--card-bg-dark-farm4);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        border-color: var(--border-dark-farm4);
    }

    .community-cta h4 {
        font-size: 1.8rem;
        margin-bottom: 15px;
        color: var(--primary-bio-farm);
    }

    body.dark-mode .community-cta h4 {
        color: var(--primary-bio-farm-dark);
    }

    .community-cta p {
        max-width: 600px;
        margin: 0 auto 25px auto;
    }
</style>

<section id="komunitasDampakPertanian" class="section-bio-farm">
    <div class="container">
        <div class="section-title-bio-farm" data-aos="fade-up">
            <h2>Komunitas & <span class="highlight-accent-bio">Dampak Positif</span></h2>
            <p class="subtitle-bio-farm">Bersama Membangun Ekosistem Pertanian yang Kuat, Adil, dan Bermanfaat.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="impact-card">
                    <div class="impact-icon"><i class="fas fa-hands-helping"></i></div>
                    <h5 class="impact-title">Pemberdayaan Petani Lokal</h5>
                    <p class="impact-description">Program kemitraan, pelatihan, dan akses pasar untuk meningkatkan kesejahteraan petani di sekitar kami.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="impact-card">
                    <div class="impact-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h5 class="impact-title">Edukasi & Transfer Pengetahuan</h5>
                    <p class="impact-description">Berbagi praktik pertanian modern dan berkelanjutan kepada komunitas melalui workshop dan demplot percontohan.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="impact-card">
                    <div class="impact-icon"><i class="fas fa-leaf"></i></div>
                    <h5 class="impact-title">Pelestarian Lingkungan</h5>
                    <p class="impact-description">Mengimplementasikan metode pertanian organik dan ramah lingkungan untuk menjaga kelestarian tanah, air, dan biodiversitas.</p>
                </div>
            </div>
        </div>

        <div class="community-cta" data-aos="fade-up" data-aos-delay="400">
            <h4>Bergabung dengan Gerakan Pertanian Berkelanjutan Kami</h4>
            <p>Mari bersama-sama menciptakan masa depan pangan yang lebih baik. Pelajari lebih lanjut tentang program kemitraan atau peluang kolaborasi dengan BioFarm Lestari.</p>
            <a href="#kontakPertanianAlamiOsm" class="btn-bio-farm-primary">Hubungi Kami untuk Kolaborasi</a>
        </div>
    </div>
</section>