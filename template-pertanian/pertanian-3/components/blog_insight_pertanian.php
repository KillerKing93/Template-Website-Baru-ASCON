<?php // File: components/blog_insight_pertanian.php 
?>
<style>
    /* Blog Insight Pertanian Styles */
    #blogInsightPertanian {
        background-color: var(--bg-light-farm3);
        /* Default light */
        border-top: 1px solid var(--border-light-farm3);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode #blogInsightPertanian {
        background-color: var(--bg-dark-farm3);
        border-top-color: var(--border-dark-farm3);
    }

    .insight-card {
        background-color: var(--card-bg-light-farm3);
        border-radius: 10px;
        box-shadow: 0 7px 20px rgba(0, 0, 0, 0.07);
        overflow: hidden;
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid transparent;
        /* Border awal transparan */
    }

    body.dark-mode .insight-card {
        background-color: var(--card-bg-dark-farm3);
        box-shadow: 0 7px 20px rgba(0, 0, 0, 0.25);
    }

    .insight-card:hover {
        transform: translateY(-10px) rotate(1deg);
        /* Sedikit rotasi saat hover */
        box-shadow: 0 12px 30px rgba(var(--accent-art-farm-rgb, 3, 169, 244), 0.15);
        border-color: var(--accent-art-farm);
    }

    body.dark-mode .insight-card:hover {
        box-shadow: 0 12px 30px rgba(var(--accent-art-farm-dark-rgb, 79, 195, 247), 0.2);
        border-color: var(--accent-art-farm-dark);
    }

    /* Komentar CSS: Variabel RGB untuk accent-art-farm-dark */
    body.dark-mode {
        --accent-art-farm-dark-rgb: 79, 195, 247;
    }


    .insight-card .insight-image-wrapper {
        height: 230px;
        overflow: hidden;
        position: relative;
    }

    .insight-card .insight-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease, filter 0.5s ease;
    }

    .insight-card:hover .insight-image-wrapper img {
        transform: scale(1.1);
        filter: saturate(1.2);
        /* Sedikit saturasi saat hover */
    }

    .insight-card .insight-image-wrapper .insight-date {
        /* Tanggal di atas gambar */
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: rgba(var(--primary-art-farm-rgb, 76, 175, 80), 0.8);
        color: #fff;
        padding: 8px 12px;
        border-radius: 5px;
        font-family: 'Poppins', sans-serif;
        font-size: 0.8rem;
        font-weight: 600;
        line-height: 1;
    }

    body.dark-mode .insight-card .insight-image-wrapper .insight-date {
        background-color: rgba(var(--primary-art-farm-dark-rgb, 129, 199, 132), 0.85);
    }

    .insight-card .insight-image-wrapper .insight-date .day {
        font-size: 1.5rem;
        display: block;
    }


    .insight-card .insight-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .insight-card .insight-category {
        font-size: 0.8rem;
        color: var(--accent-art-farm);
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 8px;
        letter-spacing: 0.5px;
    }

    body.dark-mode .insight-card .insight-category {
        color: var(--accent-art-farm-dark);
    }

    .insight-card h4.insight-title {
        font-family: 'Teko', sans-serif;
        font-size: 1.7rem;
        /* Judul artikel lebih besar */
        font-weight: 600;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .insight-card h4.insight-title a {
        color: var(--text-light-farm3);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .insight-card h4.insight-title a:hover {
        color: var(--primary-art-farm);
    }

    body.dark-mode .insight-card h4.insight-title a {
        color: var(--text-dark-farm3);
    }

    body.dark-mode .insight-card h4.insight-title a:hover {
        color: var(--primary-art-farm-dark);
    }

    .insight-card p.insight-excerpt {
        font-size: 0.95rem;
        line-height: 1.7;
        color: var(--muted-text-light-farm3);
        margin-bottom: 20px;
        flex-grow: 1;
    }

    body.dark-mode .insight-card p.insight-excerpt {
        color: var(--muted-text-dark-farm3);
    }

    .insight-card .btn-read-insight {
        margin-top: auto;
        align-self: flex-start;
    }
</style>

<section id="blogInsightPertanian" class="section-artistic-farm">
    <div class="container">
        <div class="section-title-artistic-farm" data-aos="fade-up">
            <h2>Wawasan <span style="color: var(--secondary-art-farm);">AgriNova</span></h2>
            <p class="subtitle-artistic-farm">Artikel Mendalam, Tips Praktis, dan Berita Terkini dari Dunia Pertanian Modern.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data artikel untuk blog
            $artikel_blog = [
                [
                    "judul" => "Teknologi Drone: Revolusi Pemetaan dan Analisis Lahan Pertanian",
                    "kategori" => "Inovasi Agrotek",
                    "tanggal_obj" => new DateTime("-2 days"),
                    "excerpt" => "Pelajari bagaimana drone mengubah cara kita memandang dan mengelola lahan pertanian, dari pemetaan presisi hingga analisis kesehatan tanaman.",
                    "img" => "https://placehold.co/600x400/4CAF50/FFFFFF?text=Drone+Pertanian",
                    "delay" => 100
                ],
                [
                    "judul" => "Pertanian Vertikal: Solusi Pangan Perkotaan di Masa Depan?",
                    "kategori" => "Urban Farming",
                    "tanggal_obj" => new DateTime("-9 days"),
                    "excerpt" => "Dengan lahan terbatas di perkotaan, pertanian vertikal menawarkan solusi inovatif untuk produksi pangan lokal yang segar dan berkelanjutan.",
                    "img" => "https://placehold.co/600x400/03A9F4/FFFFFF?text=Pertanian+Vertikal",
                    "delay" => 200
                ],
                [
                    "judul" => "Manajemen Air Cerdas: Kunci Sukses Pertanian di Era Perubahan Iklim",
                    "kategori" => "Keberlanjutan",
                    "tanggal_obj" => new DateTime("-16 days"),
                    "excerpt" => "Teknik irigasi pintar dan sensor kelembaban tanah membantu petani mengoptimalkan penggunaan air dan menghadapi tantangan kekeringan.",
                    "img" => "https://placehold.co/600x400/FF9800/333333?text=Irigasi+Cerdas",
                    "delay" => 300
                ],
            ];

            foreach ($artikel_blog as $artikel) :
                $tgl_hari = $artikel['tanggal_obj']->format('d');
                $tgl_bulan_tahun = $artikel['tanggal_obj']->format('M Y');
            ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $artikel['delay']; ?>">
                    <article class="insight-card">
                        <div class="insight-image-wrapper">
                            <a href="#"><img src="<?php echo $artikel['img']; ?>" alt="[Gambar <?php echo htmlspecialchars($artikel['judul']); ?>]"></a>
                            <div class="insight-date">
                                <span class="day"><?php echo $tgl_hari; ?></span>
                                <span><?php echo $tgl_bulan_tahun; ?></span>
                            </div>
                        </div>
                        <div class="insight-content">
                            <div class="insight-category"><?php echo htmlspecialchars($artikel['kategori']); ?></div>
                            <h4 class="insight-title"><a href="#"><?php echo htmlspecialchars($artikel['judul']); ?></a></h4>
                            <p class="insight-excerpt"><?php echo htmlspecialchars($artikel['excerpt']); ?></p>
                            <a href="#" class="btn-art-farm-secondary btn-read-insight">Baca Detail <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5 pt-3" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="btn-art-farm-primary">Lihat Semua Wawasan</a>
        </div>
    </div>
</section>