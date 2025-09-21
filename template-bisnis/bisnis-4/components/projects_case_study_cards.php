<?php // File: components/projects_case_study_cards.php 
?>
<style>
    /* Projects Case Study Cards Component Styles */
    :root {
        /* Variabel dari index.php */
        --dark-bg-primary: #0D0221;
        --primary-accent: #FF00E4;
        --secondary-accent: #00F5D4;
        --text-light: #F0F0F0;
        --text-muted-cyber: #A0A0C0;
        --border-cyber: rgba(0, 245, 212, 0.3);
        --card-bg-cyber-opaque: #0F084B;
        /* var(--dark-bg-secondary) */
    }

    #projectsCaseStudyCards {
        background-color: var(--dark-bg-primary);
        border-bottom: 1px solid var(--border-cyber);
    }

    .case-study-card {
        background: linear-gradient(145deg, var(--card-bg-cyber-opaque) 0%, rgba(13, 2, 33, 0.8) 100%);
        /* var(--dark-bg-primary) dengan alpha */
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.5);
        border: 1px solid var(--border-cyber);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .case-study-card:hover {
        transform: translateY(-12px) scale(1.01);
        box-shadow: 0 0 30px rgba(var(--primary-accent-rgb), 0.3), 0 0 15px rgba(var(--secondary-accent-rgb), 0.2);
    }

    .case-study-card .card-image-wrapper {
        height: 250px;
        /* Tinggi tetap untuk gambar */
        overflow: hidden;
        position: relative;
    }

    .case-study-card .card-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .case-study-card:hover .card-image-wrapper img {
        transform: scale(1.1);
    }

    .case-study-card .card-image-wrapper .project-category-tag {
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: var(--primary-accent);
        color: var(--dark-bg-primary);
        padding: 5px 12px;
        font-size: 0.75rem;
        font-weight: 700;
        border-radius: 3px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .case-study-card .card-content-wrapper {
        padding: 25px;
        flex-grow: 1;
        /* Agar konten mengisi ruang */
        display: flex;
        flex-direction: column;
    }

    .case-study-card .card-content-wrapper h3.project-title {
        font-size: 1.6rem;
        font-weight: 700;
        /* Orbitron sudah bold */
        color: var(--secondary-accent);
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .case-study-card .card-content-wrapper p.project-excerpt {
        font-size: 0.95rem;
        color: var(--text-muted-cyber);
        line-height: 1.7;
        margin-bottom: 20px;
        flex-grow: 1;
        /* Excerpt mengisi ruang sebelum tombol */
    }

    .case-study-card .card-content-wrapper .project-tags {
        margin-bottom: 20px;
    }

    .case-study-card .card-content-wrapper .project-tags .tag {
        display: inline-block;
        background-color: rgba(var(--secondary-accent-rgb), 0.15);
        color: var(--secondary-accent);
        padding: 4px 10px;
        font-size: 0.7rem;
        border-radius: 3px;
        margin-right: 5px;
        margin-bottom: 5px;
        font-family: 'Lexend', sans-serif;
        font-weight: 500;
    }

    .case-study-card .card-content-wrapper .btn-view-case-study {
        margin-top: auto;
        /* Tombol selalu di bawah */
        align-self: flex-start;
        /* Tombol rata kiri */
    }
</style>

<section id="projectsCaseStudyCards" class="section-cyber">
    <div class="container">
        <div class="section-title-cyber" data-aos="fade-up">
            <h2 data-text="PROYEK PILIHAN">PROYEK PILIHAN</h2>
            <p class="subtitle-cyber">Mengintip Lebih Dekat Bagaimana Kami Mengubah Ide Menjadi Solusi Digital Berdampak.</p>
        </div>

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="case-study-card">
                    <div class="card-image-wrapper">
                        <img src="https://placehold.co/600x400/0D0221/FF00E4?text=Project+Nebula" alt="[Gambar Project Nebula]">
                        <span class="project-category-tag">AI & Analitik</span>
                    </div>
                    <div class="card-content-wrapper">
                        <h3 class="project-title">Project Nebula: Platform Prediksi Pasar</h3>
                        <p class="project-excerpt">Mengembangkan platform AI canggih untuk analisis tren pasar dan prediksi harga komoditas dengan akurasi tinggi, memberdayakan investor.</p>
                        <div class="project-tags">
                            <span class="tag">Machine Learning</span><span class="tag">Python</span><span class="tag">Big Data</span>
                        </div>
                        <a href="#" class="btn-cyber-secondary btn-view-case-study">Lihat Studi Kasus</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="case-study-card">
                    <div class="card-image-wrapper">
                        <img src="https://placehold.co/600x400/0D0221/00F5D4?text=Project+Cygnus" alt="[Gambar Project Cygnus]">
                        <span class="project-category-tag">IoT & Smart City</span>
                    </div>
                    <div class="card-content-wrapper">
                        <h3 class="project-title">Project Cygnus: Jaringan Sensor Cerdas</h3>
                        <p class="project-excerpt">Implementasi jaringan sensor IoT skala besar untuk manajemen utilitas perkotaan yang efisien, mengurangi pemborosan dan meningkatkan layanan.</p>
                        <div class="project-tags">
                            <span class="tag">IoT</span><span class="tag">Edge Computing</span><span class="tag">MQTT</span>
                        </div>
                        <a href="#" class="btn-cyber-secondary btn-view-case-study">Lihat Studi Kasus</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="case-study-card">
                    <div class="card-image-wrapper">
                        <img src="https://placehold.co/600x400/0D0221/FFFFFF?text=Project+Orion&font=orbitron" alt="[Gambar Project Orion]">
                        <span class="project-category-tag">Blockchain & Keamanan</span>
                    </div>
                    <div class="card-content-wrapper">
                        <h3 class="project-title">Project Orion: Sistem Identitas Terdesentralisasi</h3>
                        <p class="project-excerpt">Membangun solusi identitas digital berbasis blockchain yang aman dan portabel, memberikan pengguna kontrol penuh atas data pribadi mereka.</p>
                        <div class="project-tags">
                            <span class="tag">Blockchain</span><span class="tag">Smart Contract</span><span class="tag">Cryptography</span>
                        </div>
                        <a href="#" class="btn-cyber-secondary btn-view-case-study">Lihat Studi Kasus</a>
                    </div>
                </div>
            </div>

            <!-- {/* Tombol untuk melihat semua proyek (opsional) */} -->
            <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="btn-cyber-primary">Eksplorasi Semua Proyek</a>
            </div>

        </div>
    </div>
</section>