<?php // File: components/kehidupan_kampus_pendidikan.php 
?>
<style>
    /* Kehidupan Kampus Pendidikan Styles */
    #kehidupanKampusPendidikan {
        background-color: var(--bg-light-edu3);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kehidupanKampusPendidikan {
        background-color: var(--bg-dark-edu3);
    }

    .campus-life-card {
        background-color: var(--card-bg-light-edu3);
        border-radius: 10px;
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.06);
        overflow: hidden;
        transition: all 0.35s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light-edu3);
    }

    body.dark-mode .campus-life-card {
        background-color: var(--card-bg-dark-edu3);
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.2);
        border-color: var(--border-dark-edu3);
    }

    .campus-life-card:hover {
        transform: translateY(-8px) rotate(1.5deg);
        /* Sedikit miring dan terangkat */
        box-shadow: 0 10px 30px rgba(184, 134, 11, 0.12);
        /* var(--secondary-illumina) dengan alpha */
    }

    body.dark-mode .campus-life-card:hover {
        box-shadow: 0 10px 30px rgba(212, 175, 55, 0.18);
        /* var(--secondary-illumina-dark) dengan alpha */
    }

    .campus-life-card .campus-life-image {
        height: 220px;
        /* Tinggi gambar */
        overflow: hidden;
    }

    .campus-life-card .campus-life-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .campus-life-card:hover .campus-life-image img {
        transform: scale(1.08);
    }

    .campus-life-card .campus-life-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        text-align: center;
        /* Konten di tengah */
    }

    .campus-life-card .campus-life-icon {
        /* Ikon di atas judul */
        font-size: 2.5rem;
        color: var(--accent-illumina);
        margin-bottom: 15px;
        display: inline-block;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .campus-life-card:hover .campus-life-icon {
        transform: scale(1.2);
    }

    body.dark-mode .campus-life-card .campus-life-icon {
        color: var(--accent-illumina-dark);
    }

    .campus-life-card h5.campus-life-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .campus-life-card p.campus-life-desc {
        font-size: 0.95rem;
        color: var(--muted-text-light-edu3);
        line-height: 1.7;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    body.dark-mode .campus-life-card p.campus-life-desc {
        color: var(--muted-text-dark-edu3);
    }

    .campus-life-card .btn-explore-activity {
        margin-top: auto;
        /* Tombol di bawah */
        font-size: 0.9rem;
    }
</style>

<section id="kehidupanKampusPendidikan" class="section-illumina">
    <div class="container">
        <div class="section-title-illumina" data-aos="fade-up">
            <h2>Kehidupan <span style="color:var(--secondary-illumina);">Kampus</span> Dinamis</h2>
            <p class="subtitle-illumina">Lebih dari Sekadar Belajar: Temukan Komunitas, Aktivitas, dan Pengalaman yang Memperkaya.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="campus-life-card">
                    <div class="campus-life-image">
                        <img src="https://placehold.co/600x400/FDFBF5/5F9EA0?text=Organisasi+Mahasiswa&font=opensans" alt="[Gambar Kegiatan Organisasi Mahasiswa]">
                    </div>
                    <div class="campus-life-content">
                        <div class="campus-life-icon"><i class="fas fa-users-rays"></i></div> <?php /* Ikon baru */ ?>
                        <h5 class="campus-life-title">Organisasi & Klub Mahasiswa</h5>
                        <p class="campus-life-desc">Salurkan minat dan bakat Anda melalui berbagai unit kegiatan mahasiswa, mulai dari seni, olahraga, hingga debat ilmiah.</p>
                        <a href="#" class="btn-illumina-secondary btn-explore-activity">Lihat Semua Klub</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="campus-life-card">
                    <div class="campus-life-image">
                        <img src="https://placehold.co/600x400/FDFBF5/8B4513?text=Acara+Budaya+Kampus&font=opensans" alt="[Gambar Acara Budaya Kampus]">
                    </div>
                    <div class="campus-life-content">
                        <div class="campus-life-icon"><i class="fas fa-theater-masks"></i></div>
                        <h5 class="campus-life-title">Acara Seni & Budaya</h5>
                        <p class="campus-life-desc">Nikmati dan berpartisipasi dalam berbagai festival seni, pertunjukan teater, pameran, dan acara budaya lainnya.</p>
                        <a href="#" class="btn-illumina-secondary btn-explore-activity">Kalender Acara</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="campus-life-card">
                    <div class="campus-life-image">
                        <img src="https://placehold.co/600x400/FDFBF5/B8860B?text=Fasilitas+Olahraga&font=opensans" alt="[Gambar Fasilitas Olahraga Kampus]">
                    </div>
                    <div class="campus-life-content">
                        <div class="campus-life-icon"><i class="fas fa-futbol"></i></div>
                        <h5 class="campus-life-title">Olahraga & Kebugaran</h5>
                        <p class="campus-life-desc">Jaga kebugaran dengan fasilitas olahraga lengkap, mulai dari lapangan, gym, hingga kolam renang standar olimpiade.</p>
                        <a href="#" class="btn-illumina-secondary btn-explore-activity">Info Fasilitas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>