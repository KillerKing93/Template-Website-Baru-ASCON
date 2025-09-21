<?php // File: components/cerita_petani_ekosistem.php 
?>
<style>
    /* Cerita Petani Ekosistem Styles */
    #ceritaPetaniEkosistem {
        background-color: var(--bg-light-farm5);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #ceritaPetaniEkosistem {
        background-color: var(--bg-dark-farm5);
    }

    .story-card-ecosystem {
        background-color: var(--card-bg-light-farm5);
        border-radius: 10px;
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.06);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        /* Untuk layout jika ada gambar dan teks berdampingan */
        flex-direction: column;
        /* Default */
        border: 1px solid var(--border-light-farm5);
    }

    body.dark-mode .story-card-ecosystem {
        background-color: var(--card-bg-dark-farm5);
        box-shadow: 0 7px 22px rgba(0, 0, 0, 0.22);
        border-color: var(--border-dark-farm5);
    }

    .story-card-ecosystem:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 30px rgba(85, 107, 47, 0.12);
        /* var(--primary-eco-farm) dengan alpha */
    }

    body.dark-mode .story-card-ecosystem:hover {
        box-shadow: 0 10px 30px rgba(143, 188, 143, 0.18);
        /* var(--primary-eco-farm-dark) dengan alpha */
    }

    .story-card-ecosystem .story-image-wrapper {
        height: 200px;
        /* Tinggi gambar cerita */
        overflow: hidden;
        border-radius: 10px 10px 0 0;
        /* Hanya sudut atas */
    }

    .story-card-ecosystem .story-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .story-card-ecosystem:hover .story-image-wrapper img {
        transform: scale(1.08);
    }

    .story-card-ecosystem .story-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .story-card-ecosystem .story-author {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .story-card-ecosystem .story-author img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 15px;
        border: 2px solid var(--secondary-eco-farm);
        transition: border-color 0.3s ease;
    }

    body.dark-mode .story-card-ecosystem .story-author img {
        border-color: var(--secondary-eco-farm-dark);
    }

    .story-card-ecosystem .story-author .author-name {
        font-family: 'Lora', serif;
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 0;
    }

    .story-card-ecosystem .story-author .author-role {
        font-size: 0.8rem;
        color: var(--muted-text-light-farm5);
        transition: color 0.3s ease;
    }

    body.dark-mode .story-card-ecosystem .story-author .author-role {
        color: var(--muted-text-dark-farm5);
    }

    .story-card-ecosystem h5.story-title {
        font-family: 'Lora', serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .story-card-ecosystem h5.story-title a {
        color: var(--text-light-farm5);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .story-card-ecosystem h5.story-title a:hover {
        color: var(--primary-eco-farm);
    }

    body.dark-mode .story-card-ecosystem h5.story-title a {
        color: var(--text-dark-farm5);
    }

    body.dark-mode .story-card-ecosystem h5.story-title a:hover {
        color: var(--primary-eco-farm-dark);
    }

    .story-card-ecosystem p.story-excerpt {
        font-size: 0.9rem;
        line-height: 1.7;
        color: var(--muted-text-light-farm5);
        margin-bottom: 20px;
        flex-grow: 1;
        transition: color 0.3s ease;
    }

    body.dark-mode .story-card-ecosystem p.story-excerpt {
        color: var(--muted-text-dark-farm5);
    }

    .story-card-ecosystem .btn-read-story {
        margin-top: auto;
        align-self: flex-start;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--accent-eco-farm);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .story-card-ecosystem .btn-read-story i {
        margin-left: 4px;
    }

    .story-card-ecosystem:hover .btn-read-story {
        color: var(--primary-eco-farm);
    }

    body.dark-mode .story-card-ecosystem .btn-read-story {
        color: var(--accent-eco-farm-dark);
    }

    body.dark-mode .story-card-ecosystem:hover .btn-read-story {
        color: var(--primary-eco-farm-dark);
    }
</style>

<section id="ceritaPetaniEkosistem" class="section-ecosymphony">
    <div class="container">
        <div class="section-title-ecosymphony" data-aos="fade-up">
            <h2>Cerita dari <span style="color:var(--secondary-eco-farm);">Jantung Ekosistem</span></h2>
            <p class="subtitle-ecosymphony">Kisah Inspiratif dari Para Petani, Mitra, dan Pegiat Lingkungan di Jaringan EcoSymphony Farm.</p>
        </div>

        <div class="row gy-4">
            <?php
            // Komentar PHP: Array data cerita
            $cerita_petani = [
                [
                    "judul" => "Dari Lahan Kritis menjadi Oasis Hijau: Kisah Pak Slamet",
                    "penulis_nama" => "Pak Slamet Riyadi",
                    "penulis_peran" => "Petani Mitra, Desa Argo Mulyo",
                    "foto_penulis" => "https://placehold.co/100x100/556B2F/FFFFFF?text=PS",
                    "excerpt" => "Dengan bimbingan EcoSymphony, lahan gersang saya kini menjadi kebun sayur organik yang produktif dan menyejahterakan keluarga.",
                    "img_artikel" => "https://placehold.co/600x400/8FBC8F/2A2F2A?text=Lahan+Hijau+Pak+Slamet&font=lora",
                    "delay" => 100
                ],
                [
                    "judul" => "Inovasi Pakan Ternak Alami ala Ibu Wati",
                    "penulis_nama" => "Ibu Wati Ningsih",
                    "penulis_peran" => "Peternak Sapi Perah, Komunitas Lestari",
                    "foto_penulis" => "https://placehold.co/100x100/DAA520/382E2E?text=IW",
                    "excerpt" => "EcoSymphony membantu kami mengembangkan pakan fermentasi dari limbah pertanian yang meningkatkan kualitas susu dan kesehatan ternak.",
                    "img_artikel" => "https://placehold.co/600x400/F0E68C/2A2F2A?text=Sapi+Sehat+Ibu+Wati&font=lora",
                    "delay" => 200
                ],
                [
                    "judul" => "Generasi Muda Kembali ke Desa: Semangat Agripreneurship",
                    "penulis_nama" => "Andi & Rara",
                    "penulis_peran" => "Agripreneur Muda, EcoSymphony Incubator",
                    "foto_penulis" => "https://placehold.co/100x100/A0522D/FFFFFF?text=AR",
                    "excerpt" => "Program inkubasi EcoSymphony memberikan kami modal, pengetahuan, dan jaringan untuk membangun startup agritech kami sendiri.",
                    "img_artikel" => "https://placehold.co/600x400/CD853F/2A2F2A?text=Startup+Agripreneur&font=lora",
                    "delay" => 300
                ],
            ];

            foreach ($cerita_petani as $cerita) : ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $cerita['delay']; ?>">
                    <article class="story-card-ecosystem">
                        <div class="story-image-wrapper">
                            <a href="#"><img src="<?php echo $cerita['img_artikel']; ?>" alt="[Gambar <?php echo htmlspecialchars($cerita['judul']); ?>]"></a>
                        </div>
                        <div class="story-content">
                            <div class="story-author">
                                <img src="<?php echo $cerita['foto_penulis']; ?>" alt="[Foto <?php echo htmlspecialchars($cerita['penulis_nama']); ?>]">
                                <div>
                                    <h6 class="author-name"><?php echo htmlspecialchars($cerita['penulis_nama']); ?></h6>
                                    <span class="author-role"><?php echo htmlspecialchars($cerita['penulis_peran']); ?></span>
                                </div>
                            </div>
                            <h5 class="story-title"><a href="#"><?php echo htmlspecialchars($cerita['judul']); ?></a></h5>
                            <p class="story-excerpt"><?php echo htmlspecialchars($cerita['excerpt']); ?></p>
                            <a href="#" class="btn-read-story">Baca Kisah Lengkap <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5 pt-3" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="btn-eco-primary">Lihat Semua Cerita Inspiratif</a>
        </div>
    </div>
</section>