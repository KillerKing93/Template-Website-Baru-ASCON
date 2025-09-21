<?php // File: components/berita_acara_pendidikan.php 
?>
<style>
    /* Berita & Acara Pendidikan Styles */
    #beritaAcaraPendidikan {
        background-color: var(--card-bg-light-edu1);
        /* Latar berbeda dari body */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #beritaAcaraPendidikan {
        background-color: var(--card-bg-dark-edu1);
    }

    .news-card-edu {
        background-color: var(--bg-light-edu1);
        /* Kontras dengan section */
        border-radius: 8px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        overflow: hidden;
        transition: all 0.35s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light-edu1);
    }

    body.dark-mode .news-card-edu {
        background-color: var(--bg-dark-edu1);
        /* Kontras dengan section */
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.22);
        border-color: var(--border-dark-edu1);
    }

    .news-card-edu:hover {
        transform: translateY(-7px);
        box-shadow: 0 10px 28px rgba(52, 152, 219, 0.15);
        /* var(--primary-edu1) dengan alpha */
    }

    body.dark-mode .news-card-edu:hover {
        box-shadow: 0 10px 28px rgba(93, 173, 226, 0.2);
        /* var(--primary-edu1-dark) dengan alpha */
    }

    .news-card-edu .news-image-wrapper {
        height: 200px;
        overflow: hidden;
    }

    .news-card-edu .news-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .news-card-edu:hover .news-image-wrapper img {
        transform: scale(1.07);
    }

    .news-card-edu .news-content {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .news-card-edu .news-meta {
        font-size: 0.8rem;
        color: var(--muted-text-light-edu1);
        margin-bottom: 8px;
        display: block;
        transition: color 0.3s ease;
    }

    body.dark-mode .news-card-edu .news-meta {
        color: var(--muted-text-dark-edu1);
    }

    .news-card-edu .news-meta i {
        margin-right: 5px;
        color: var(--secondary-edu1);
    }

    body.dark-mode .news-card-edu .news-meta i {
        color: var(--secondary-edu1-dark);
    }


    .news-card-edu h5.news-title {
        font-family: 'Poppins', sans-serif;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .news-card-edu h5.news-title a {
        color: var(--text-light-edu1);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .news-card-edu h5.news-title a:hover {
        color: var(--primary-edu1);
    }

    body.dark-mode .news-card-edu h5.news-title a {
        color: var(--text-dark-edu1);
    }

    body.dark-mode .news-card-edu h5.news-title a:hover {
        color: var(--primary-edu1-dark);
    }

    .news-card-edu p.news-excerpt {
        font-size: 0.9rem;
        line-height: 1.6;
        color: var(--muted-text-light-edu1);
        margin-bottom: 15px;
        flex-grow: 1;
        transition: color 0.3s ease;
    }

    body.dark-mode .news-card-edu p.news-excerpt {
        color: var(--muted-text-dark-edu1);
    }

    .news-card-edu .btn-read-news {
        margin-top: auto;
        align-self: flex-start;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--primary-edu1);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .news-card-edu .btn-read-news i {
        margin-left: 4px;
    }

    .news-card-edu:hover .btn-read-news {
        color: var(--secondary-edu1);
    }

    body.dark-mode .news-card-edu .btn-read-news {
        color: var(--primary-edu1-dark);
    }

    body.dark-mode .news-card-edu:hover .btn-read-news {
        color: var(--secondary-edu1-dark);
    }
</style>

<section id="beritaAcaraPendidikan" class="section-pendidikan">
    <div class="container">
        <div class="section-title-pendidikan" data-aos="fade-up">
            <h2>Berita & <span class="highlight-accent-edu">Acara</span> Terkini</h2>
            <div class="title-deco-line-edu"></div>
            <p class="subtitle-pendidikan">Ikuti Informasi Terbaru Seputar Prestasi, Kegiatan, dan Pengumuman Penting dari Institusi Kami.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data berita/acara
            $berita_acara = [
                [
                    "judul" => "Siswa Kami Meraih Juara 1 Olimpiade Sains Nasional",
                    "tanggal_obj" => new DateTime("-2 days"),
                    "excerpt" => "Prestasi membanggakan kembali diraih oleh siswa kami dalam ajang kompetisi sains tingkat nasional...",
                    "img" => "https://placehold.co/600x400/3498DB/FFFFFF?text=Juara+Olimpiade&font=poppins",
                    "delay" => 100
                ],
                [
                    "judul" => "Workshop Coding untuk Pemula: Membuka Minat di Bidang IT",
                    "tanggal_obj" => new DateTime("-5 days"),
                    "excerpt" => "Institusi kami sukses menyelenggarakan workshop coding dasar yang diikuti antusias oleh para siswa...",
                    "img" => "https://placehold.co/600x400/F1C40F/2C3E50?text=Workshop+Coding&font=poppins",
                    "delay" => 200
                ],
                [
                    "judul" => "Penerimaan Siswa Baru Tahun Ajaran 2025/2026 Telah Dibuka!",
                    "tanggal_obj" => new DateTime("-8 days"),
                    "excerpt" => "Jangan lewatkan kesempatan untuk bergabung dengan keluarga besar [Nama Institusi Pendidikan Anda]. Pendaftaran dibuka hingga...",
                    "img" => "https://placehold.co/600x400/E74C3C/FFFFFF?text=Pendaftaran+Siswa+Baru&font=poppins",
                    "delay" => 300
                ],
            ];

            foreach ($berita_acara as $item) :
                $tanggal_formatted = $item['tanggal_obj']->format('d M Y');
            ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $item['delay']; ?>">
                    <article class="news-card-edu">
                        <div class="news-image-wrapper">
                            <a href="#"><img src="<?php echo $item['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($item['judul']); ?>]"></a>
                        </div>
                        <div class="news-content">
                            <span class="news-meta"><i class="fas fa-calendar-alt"></i> <?php echo $tanggal_formatted; ?></span>
                            <h5 class="news-title"><a href="#"><?php echo htmlspecialchars($item['judul']); ?></a></h5>
                            <p class="news-excerpt"><?php echo htmlspecialchars($item['excerpt']); ?></p>
                            <a href="#" class="btn-read-news">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>