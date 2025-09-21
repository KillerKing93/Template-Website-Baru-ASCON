<?php // File: components/fakultas_jurusan_pendidikan.php 
?>
<style>
    /* Fakultas & Jurusan Pendidikan Styles */
    #fakultasJurusanPendidikan {
        background-color: var(--bg-light-edu3);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #fakultasJurusanPendidikan {
        background-color: var(--bg-dark-edu3);
    }

    .faculty-card-illumina {
        background-color: var(--card-bg-light-edu3);
        border-radius: 10px;
        box-shadow: 0 8px 25px rgba(139, 69, 19, 0.05);
        /* var(--primary-illumina) dengan alpha */
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light-edu3);
        overflow: hidden;
        /* Untuk efek gambar */
    }

    body.dark-mode .faculty-card-illumina {
        background-color: var(--card-bg-dark-edu3);
        box-shadow: 0 8px 25px rgba(160, 82, 45, 0.1);
        /* var(--primary-illumina-dark) dengan alpha */
        border-color: var(--border-dark-edu3);
    }

    .faculty-card-illumina:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 35px rgba(139, 69, 19, 0.1);
    }

    body.dark-mode .faculty-card-illumina:hover {
        box-shadow: 0 12px 35px rgba(160, 82, 45, 0.18);
    }

    .faculty-card-illumina .faculty-image-wrapper {
        height: 200px;
        /* Tinggi gambar fakultas */
        overflow: hidden;
        position: relative;
    }

    .faculty-card-illumina .faculty-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease, filter 0.3s ease;
    }

    .faculty-card-illumina:hover .faculty-image-wrapper img {
        transform: scale(1.08);
        filter: brightness(0.9);
    }

    .faculty-card-illumina .faculty-icon-overlay {
        /* Ikon di atas gambar */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.8);
        font-size: 3rem;
        color: rgba(255, 255, 255, 0.7);
        opacity: 0;
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .faculty-card-illumina:hover .faculty-icon-overlay {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }

    .faculty-card-illumina .faculty-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        text-align: center;
        /* Konten di tengah */
    }

    .faculty-card-illumina h4.faculty-name {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.7rem;
        /* Judul fakultas */
        font-weight: 700;
        margin-bottom: 10px;
        color: var(--primary-illumina);
    }

    body.dark-mode .faculty-card-illumina h4.faculty-name {
        color: var(--primary-illumina-dark);
    }

    .faculty-card-illumina p.faculty-description {
        font-size: 0.95rem;
        color: var(--muted-text-light-edu3);
        line-height: 1.7;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    body.dark-mode .faculty-card-illumina p.faculty-description {
        color: var(--muted-text-dark-edu3);
    }

    .faculty-card-illumina .btn-view-majors {
        margin-top: auto;
        /* Tombol di bawah */
        font-size: 0.9rem;
    }
</style>

<section id="fakultasJurusanPendidikan" class="section-illumina">
    <div class="container">
        <div class="section-title-illumina" data-aos="fade-up">
            <h2>Fakultas & <span style="color:var(--secondary-illumina);">Program Studi</span></h2>
            <p class="subtitle-illumina">Menemukan Bidang Keahlian yang Sesuai dengan Minat dan Potensi Anda.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data fakultas
            $fakultas_list = [
                [
                    "nama" => "Fakultas Sastra & Humaniora",
                    "deskripsi" => "Mengkaji kekayaan bahasa, sastra, sejarah, dan filsafat untuk pemahaman peradaban yang mendalam.",
                    "ikon" => "fas fa-feather-alt", // Ikon bulu pena
                    "img" => "https://placehold.co/600x400/FDFBF5/8B4513?text=Sastra+%26+Humaniora&font=cormorantgaramond",
                    "delay" => 100
                ],
                [
                    "nama" => "Fakultas Sains & Teknologi",
                    "deskripsi" => "Menjelajahi batas-batas ilmu pengetahuan alam, matematika, dan rekayasa untuk inovasi masa depan.",
                    "ikon" => "fas fa-atom",
                    "img" => "https://placehold.co/600x400/FDFBF5/B8860B?text=Sains+%26+Teknologi&font=cormorantgaramond",
                    "delay" => 200
                ],
                [
                    "nama" => "Fakultas Seni & Desain",
                    "deskripsi" => "Mengembangkan ekspresi kreatif dan keahlian visual melalui seni rupa, desain grafis, dan media digital.",
                    "ikon" => "fas fa-palette",
                    "img" => "https://placehold.co/600x400/FDFBF5/5F9EA0?text=Seni+%26+Desain&font=cormorantgaramond",
                    "delay" => 300
                ],
                [
                    "nama" => "Fakultas Ekonomi & Bisnis",
                    "deskripsi" => "Mempelajari prinsip ekonomi, manajemen, akuntansi, dan kewirausahaan untuk memimpin di dunia bisnis.",
                    "ikon" => "fas fa-chart-pie",
                    "img" => "https://placehold.co/600x400/FDFBF5/8B4513?text=Ekonomi+%26+Bisnis&font=cormorantgaramond",
                    "delay" => 400
                ],
            ];

            foreach ($fakultas_list as $fakultas) : ?>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $fakultas['delay']; ?>">
                    <div class="faculty-card-illumina">
                        <div class="faculty-image-wrapper">
                            <img src="<?php echo $fakultas['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($fakultas['nama']); ?>]">
                            <div class="faculty-icon-overlay"><i class="<?php echo $fakultas['ikon']; ?>"></i></div>
                        </div>
                        <div class="faculty-content">
                            <h4 class="faculty-name"><?php echo htmlspecialchars($fakultas['nama']); ?></h4>
                            <p class="faculty-description"><?php echo htmlspecialchars($fakultas['deskripsi']); ?></p>
                            <a href="#" class="btn-illumina-secondary btn-view-majors">Lihat Jurusan</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>