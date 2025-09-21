<?php // File: components/berita_artikel_pertanian.php 
?>
<style>
    /* Berita & Artikel Pertanian Styles */
    #beritaArtikelPertanian {
        background-color: var(--bg-light);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #beritaArtikelPertanian {
        background-color: var(--bg-dark);
    }

    .article-card-pertanian {
        background-color: var(--card-bg-light);
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light);
    }

    body.dark-mode .article-card-pertanian {
        background-color: var(--card-bg-dark);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        border-color: var(--border-dark);
    }

    .article-card-pertanian:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(90, 139, 65, 0.1);
        /* var(--primary-farm) dengan alpha */
    }

    body.dark-mode .article-card-pertanian:hover {
        box-shadow: 0 8px 25px rgba(124, 179, 66, 0.15);
        /* var(--primary-farm-dark) dengan alpha */
    }

    .article-card-pertanian .article-image-wrapper {
        height: 200px;
        /* Tinggi gambar artikel */
        overflow: hidden;
    }

    .article-card-pertanian .article-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .article-card-pertanian:hover .article-image-wrapper img {
        transform: scale(1.06);
    }

    .article-card-pertanian .article-content {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .article-card-pertanian .article-date {
        font-size: 0.8rem;
        color: var(--muted-text-light);
        margin-bottom: 8px;
        display: block;
        transition: color 0.3s ease;
    }

    body.dark-mode .article-card-pertanian .article-date {
        color: var(--muted-text-dark);
    }

    .article-card-pertanian .article-date i {
        margin-right: 5px;
    }

    .article-card-pertanian h5.article-title {
        font-family: 'Merriweather', serif;
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .article-card-pertanian h5.article-title a {
        color: var(--text-light);
        /* Default light */
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .article-card-pertanian h5.article-title a:hover {
        color: var(--primary-farm);
    }

    body.dark-mode .article-card-pertanian h5.article-title a {
        color: var(--text-dark);
    }

    body.dark-mode .article-card-pertanian h5.article-title a:hover {
        color: var(--primary-farm-dark);
    }

    .article-card-pertanian p.article-excerpt {
        font-size: 0.9rem;
        color: var(--muted-text-light);
        line-height: 1.6;
        margin-bottom: 15px;
        flex-grow: 1;
        transition: color 0.3s ease;
    }

    body.dark-mode .article-card-pertanian p.article-excerpt {
        color: var(--muted-text-dark);
    }

    .article-card-pertanian .btn-read-article {
        margin-top: auto;
        align-self: flex-start;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--accent-farm);
        /* Warna tombol baca */
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .article-card-pertanian .btn-read-article i {
        margin-left: 4px;
    }

    .article-card-pertanian:hover .btn-read-article {
        color: #C7563A;
        /* Lebih gelap dari accent-farm */
    }

    body.dark-mode .article-card-pertanian .btn-read-article {
        color: var(--accent-farm-dark);
    }

    body.dark-mode .article-card-pertanian:hover .btn-read-article {
        color: #D87A4D;
        /* Lebih gelap dari accent-farm-dark */
    }
</style>

<section id="beritaArtikelPertanian" class="section-pertanian">
    <div class="container">
        <div class="section-title-pertanian" data-aos="fade-up">
            <h2>Berita & Wawasan Pertanian</h2>
            <p class="subtitle-pertanian">Ikuti Perkembangan Terbaru, Tips Bertani, dan Cerita dari Ladang Kami.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article class="article-card-pertanian">
                    <div class="article-image-wrapper">
                        <a href="#"><img src="https://placehold.co/600x400/7CB342/FFFFFF?text=Tips+Bertani+Organik" alt="[Gambar Ilustrasi Tips Bertani Organik]"></a>
                    </div>
                    <div class="article-content">
                        <span class="article-date"><i class="fas fa-calendar-alt"></i> <?php echo date("d M Y", strtotime("-5 days")); ?></span>
                        <h5 class="article-title"><a href="#">5 Tips Mudah Memulai Kebun Organik di Rumah</a></h5>
                        <p class="article-excerpt">Ingin menanam sayuran sendiri? Ikuti panduan praktis ini untuk memulai kebun organik yang subur dan sehat di halaman rumah Anda.</p>
                        <a href="#" class="btn-read-article">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <article class="article-card-pertanian">
                    <div class="article-image-wrapper">
                        <a href="#"><img src="https://placehold.co/600x400/B08968/FFFFFF?text=Manfaat+Pupuk+Kompos" alt="[Gambar Ilustrasi Pupuk Kompos]"></a>
                    </div>
                    <div class="article-content">
                        <span class="article-date"><i class="fas fa-calendar-alt"></i> <?php echo date("d M Y", strtotime("-10 days")); ?></span>
                        <h5 class="article-title"><a href="#">Manfaat Pupuk Kompos untuk Kesuburan Tanah Jangka Panjang</a></h5>
                        <p class="article-excerpt">Pupuk kompos bukan hanya menyuburkan tanaman saat ini, tetapi juga memperbaiki struktur tanah untuk masa depan. Ketahui manfaatnya!</p>
                        <a href="#" class="btn-read-article">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <article class="article-card-pertanian">
                    <div class="article-image-wrapper">
                        <a href="#"><img src="https://placehold.co/600x400/F08A5D/FFFFFF?text=Resep+Masakan+Sehat" alt="[Gambar Ilustrasi Resep Masakan Sehat]"></a>
                    </div>
                    <div class="article-content">
                        <span class="article-date"><i class="fas fa-calendar-alt"></i> <?php echo date("d M Y", strtotime("-15 days")); ?></span>
                        <h5 class="article-title"><a href="#">Resep Salad Segar dengan Hasil Panen Langsung dari Kebun</a></h5>
                        <p class="article-excerpt">Cicipi kesegaran maksimal dengan resep salad sederhana namun lezat, menggunakan bahan-bahan segar dari kebun atau pasar tani.</p>
                        <a href="#" class="btn-read-article">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>