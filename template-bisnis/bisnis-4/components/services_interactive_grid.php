<?php // File: components/services_interactive_grid.php 
?>
<style>
    /* Services Interactive Grid Component Styles */
    :root {
        /* Variabel dari index.php */
        --dark-bg-primary: #0D0221;
        --primary-accent: #FF00E4;
        --secondary-accent: #00F5D4;
        --text-light: #F0F0F0;
        --text-muted-cyber: #A0A0C0;
        --border-cyber: rgba(0, 245, 212, 0.3);
        --card-bg-cyber: rgba(15, 8, 75, 0.7);
        /* var(--dark-bg-secondary) dengan alpha */
    }

    #servicesInteractiveGrid {
        background-color: var(--dark-bg-primary);
        /* Bisa ditambahkan background pattern halus */
    }

    .service-card-cyber {
        background: var(--card-bg-cyber);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid var(--border-cyber);
        border-radius: 8px;
        /* Sudut sedikit tajam */
        padding: 30px;
        text-align: center;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        /* Transisi dengan bounce */
        height: 100%;
        position: relative;
        overflow: hidden;
        /* Untuk efek pseudo-elements */
    }

    .service-card-cyber::before,
    .service-card-cyber::after {
        /* Elemen dekoratif garis */
        content: '';
        position: absolute;
        background-color: var(--primary-accent);
        transition: all 0.4s ease;
        opacity: 0.7;
    }

    .service-card-cyber::before {
        /* Garis atas */
        top: 0;
        left: 0;
        width: 0;
        height: 3px;
    }

    .service-card-cyber::after {
        /* Garis kiri */
        top: 0;
        left: 0;
        width: 3px;
        height: 0;
    }

    .service-card-cyber:hover::before {
        width: 100%;
    }

    .service-card-cyber:hover::after {
        height: 100%;
    }

    .service-card-cyber:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 10px 30px rgba(var(--primary-accent-rgb), 0.2);
        border-color: var(--primary-accent);
    }

    .service-card-cyber .service-icon-cyber {
        font-size: 3.5rem;
        color: var(--secondary-accent);
        margin-bottom: 25px;
        display: inline-block;
        transition: transform 0.4s ease, color 0.3s ease;
        text-shadow: 0 0 10px rgba(var(--secondary-accent-rgb), 0.5);
    }

    .service-card-cyber:hover .service-icon-cyber {
        transform: rotateY(15deg) scale(1.1);
        /* Sedikit rotasi 3D */
        color: var(--primary-accent);
        text-shadow: 0 0 15px rgba(var(--primary-accent-rgb), 0.7);
    }

    .service-card-cyber h3.service-title-cyber {
        font-size: 1.5rem;
        font-weight: 700;
        /* Tidak terlalu tebal agar Orbitron terbaca */
        color: var(--text-light);
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }

    .service-card-cyber:hover h3.service-title-cyber {
        color: var(--secondary-accent);
    }

    .service-card-cyber p.service-desc-cyber {
        font-size: 0.95rem;
        color: var(--text-muted-cyber);
        line-height: 1.7;
        margin-bottom: 25px;
        min-height: 80px;
        /* Jaga ruang untuk deskripsi */
    }

    .service-card-cyber .btn-details-cyber {
        font-family: 'Orbitron', sans-serif;
        font-size: 0.8rem;
        color: var(--secondary-accent);
        text-decoration: none;
        border: 1px solid var(--secondary-accent);
        padding: 8px 18px;
        border-radius: 3px;
        transition: all 0.3s ease;
        text-transform: uppercase;
    }

    .service-card-cyber:hover .btn-details-cyber {
        background-color: var(--secondary-accent);
        color: var(--dark-bg-primary);
        box-shadow: 0 0 10px rgba(var(--secondary-accent-rgb), 0.4);
    }
</style>

<section id="servicesInteractiveGrid" class="section-cyber">
    <div class="container">
        <div class="section-title-cyber" data-aos="fade-up">
            <h2 data-text="LAYANAN INTI">LAYANAN INTI</h2>
            <p class="subtitle-cyber">Solusi Digital Terdepan yang Dirancang untuk Mendorong Inovasi dan Pertumbuhan Bisnis Anda di Era Digital.</p>
        </div>

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="100">
                <div class="service-card-cyber">
                    <div class="service-icon-cyber"><i class="fas fa-cogs"></i></div>
                    <h3 class="service-title-cyber">Rekayasa Perangkat Lunak Kustom</h3>
                    <p class="service-desc-cyber">Pengembangan solusi software end-to-end yang disesuaikan dengan kebutuhan unik bisnis Anda, dari aplikasi web hingga sistem enterprise.</p>
                    <a href="#contactMinimalistForm" class="btn-details-cyber">Pelajari Detail</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="service-card-cyber">
                    <div class="service-icon-cyber"><i class="fas fa-project-diagram"></i></div>
                    <h3 class="service-title-cyber">Arsitektur Cloud & DevOps</h3>
                    <p class="service-desc-cyber">Desain dan implementasi infrastruktur cloud yang skalabel, aman, dan efisien, didukung oleh praktik DevOps untuk akselerasi delivery.</p>
                    <a href="#contactMinimalistForm" class="btn-details-cyber">Pelajari Detail</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="300">
                <div class="service-card-cyber">
                    <div class="service-icon-cyber"><i class="fas fa-search-dollar"></i></div>
                    <h3 class="service-title-cyber">Analitik Data & Kecerdasan Bisnis</h3>
                    <p class="service-desc-cyber">Mengubah data mentah menjadi wawasan berharga melalui analitik canggih, visualisasi data, dan solusi Business Intelligence (BI).</p>
                    <a href="#contactMinimalistForm" class="btn-details-cyber">Pelajari Detail</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="service-card-cyber">
                    <div class="service-icon-cyber"><i class="fas fa-user-shield"></i></div>
                    <h3 class="service-title-cyber">Keamanan Siber Proaktif</h3>
                    <p class="service-desc-cyber">Melindungi aset digital Anda dengan strategi keamanan berlapis, threat intelligence, dan respons insiden yang cepat dan efektif.</p>
                    <a href="#contactMinimalistForm" class="btn-details-cyber">Pelajari Detail</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="500">
                <div class="service-card-cyber">
                    <div class="service-icon-cyber"><i class="fas fa-vr-cardboard"></i></div>
                    <h3 class="service-title-cyber">Solusi Imersif (AR/VR/MR)</h3>
                    <p class="service-desc-cyber">Menciptakan pengalaman interaktif dan imersif melalui teknologi Augmented Reality, Virtual Reality, dan Mixed Reality untuk berbagai industri.</p>
                    <a href="#contactMinimalistForm" class="btn-details-cyber">Pelajari Detail</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-delay="600">
                <div class="service-card-cyber">
                    <div class="service-icon-cyber"><i class="fas fa-graduation-cap"></i></div>
                    <h3 class="service-title-cyber">Pelatihan & Konsultasi Teknologi</h3>
                    <p class="service-desc-cyber">Memberdayakan tim Anda dengan pengetahuan dan keahlian terkini melalui program pelatihan kustom dan layanan konsultasi strategis.</p>
                    <a href="#contactMinimalistForm" class="btn-details-cyber">Pelajari Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>