<?php // File: components/blog_highlights_elegant.php 
?>
<style>
    /* Elegant Blog Highlights Component Styles */
    #blogHighlightsElegant {
        background-color: var(--card-bg-light);
        /* Latar terang */
        transition: background-color 0.4s ease;
    }

    body.dark-mode #blogHighlightsElegant {
        background-color: var(--card-bg-dark);
    }

    .blog-card-elegant {
        background-color: var(--bg-light);
        /* Kontras dengan section */
        border-radius: 8px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
        overflow: hidden;
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light);
    }

    body.dark-mode .blog-card-elegant {
        background-color: var(--bg-dark);
        /* Kontras dengan section */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        border-color: var(--border-dark);
    }

    .blog-card-elegant:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(138, 43, 226, 0.12);
        /* Warna primer */
    }

    body.dark-mode .blog-card-elegant:hover {
        box-shadow: 0 12px 30px rgba(160, 96, 255, 0.18);
        /* Warna primer dark */
    }


    .blog-card-elegant .post-image-elegant {
        height: 220px;
        /* Tinggi gambar tetap */
        overflow: hidden;
    }

    .blog-card-elegant .post-image-elegant img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .blog-card-elegant:hover .post-image-elegant img {
        transform: scale(1.07);
    }

    .blog-card-elegant .post-content-elegant {
        padding: 25px;
        flex-grow: 1;
        /* Konten mengisi ruang */
        display: flex;
        flex-direction: column;
    }

    .blog-card-elegant .post-category-elegant {
        display: inline-block;
        background-color: rgba(var(--secondary-luminous-rgb, 255, 215, 0), 0.15);
        color: var(--secondary-luminous);
        padding: 4px 10px;
        font-size: 0.75rem;
        font-weight: 700;
        border-radius: 4px;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: background-color 0.4s ease, color 0.4s ease;
    }

    body.dark-mode .blog-card-elegant .post-category-elegant {
        background-color: rgba(var(--secondary-luminous-dark-rgb, 255, 235, 153), 0.18);
        color: var(--secondary-luminous-dark);
    }

    .blog-card-elegant h3.post-title-elegant {
        font-family: 'Playfair Display', serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .blog-card-elegant h3.post-title-elegant a {
        color: var(--text-light);
        /* Default light */
        text-decoration: none;
        transition: color 0.4s ease;
    }

    .blog-card-elegant h3.post-title-elegant a:hover {
        color: var(--primary-luminous);
    }

    body.dark-mode .blog-card-elegant h3.post-title-elegant a {
        color: var(--text-dark);
    }

    body.dark-mode .blog-card-elegant h3.post-title-elegant a:hover {
        color: var(--primary-luminous-dark);
    }

    .blog-card-elegant .post-meta-elegant {
        font-size: 0.85rem;
        color: var(--muted-text-light);
        margin-bottom: 15px;
        transition: color 0.4s ease;
    }

    .blog-card-elegant .post-meta-elegant span {
        margin-right: 10px;
    }

    .blog-card-elegant .post-meta-elegant i {
        margin-right: 5px;
    }

    body.dark-mode .blog-card-elegant .post-meta-elegant {
        color: var(--muted-text-dark);
    }

    .blog-card-elegant .post-excerpt-elegant {
        font-size: 0.95rem;
        line-height: 1.7;
        color: var(--muted-text-light);
        margin-bottom: 20px;
        flex-grow: 1;
        /* Excerpt mengisi ruang */
        transition: color 0.4s ease;
    }

    body.dark-mode .blog-card-elegant .post-excerpt-elegant {
        color: var(--muted-text-dark);
    }

    .blog-card-elegant .btn-readmore-elegant {
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        font-size: 0.9rem;
        color: var(--primary-luminous);
        text-decoration: none;
        margin-top: auto;
        /* Tombol di bawah */
        transition: color 0.4s ease;
    }

    .blog-card-elegant .btn-readmore-elegant i {
        margin-left: 5px;
    }

    .blog-card-elegant:hover .btn-readmore-elegant {
        color: var(--secondary-luminous);
    }

    body.dark-mode .blog-card-elegant .btn-readmore-elegant {
        color: var(--primary-luminous-dark);
    }

    body.dark-mode .blog-card-elegant:hover .btn-readmore-elegant {
        color: var(--secondary-luminous-dark);
    }

    .view-all-posts-elegant {
        text-align: center;
        margin-top: 40px;
    }
</style>

<section id="blogHighlightsElegant" class="section-elegant">
    <div class="container">
        <div class="section-title-elegant" data-aos="fade-up">
            <h2>Wawasan & Inspirasi</h2>
            <p class="subtitle-elegant">Artikel Terbaru dari Tim Ahli Kami Mengenai Tren, Teknologi, dan Strategi Digital.</p>
        </div>

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article class="blog-card-elegant">
                    <div class="post-image-elegant">
                        <a href="#"><img src="https://placehold.co/600x400/E0EAFC/333333?text=Artikel+Teknologi+AI" alt="[Gambar Artikel AI]"></a>
                    </div>
                    <div class="post-content-elegant">
                        <div><span class="post-category-elegant">Kecerdasan Buatan</span></div>
                        <h3 class="post-title-elegant"><a href="#">Masa Depan AI: Bagaimana Teknologi Ini Mengubah Industri Kita</a></h3>
                        <div class="post-meta-elegant">
                            <span><i class="fas fa-user"></i> Dr. Elara Vance</span>
                            <span><i class="fas fa-calendar-alt"></i> <?php echo date("d M Y", strtotime("-3 days")); ?></span>
                        </div>
                        <p class="post-excerpt-elegant">Menjelajahi potensi transformatif AI dalam berbagai sektor, dari otomatisasi hingga pengambilan keputusan...</p>
                        <a href="#" class="btn-readmore-elegant">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <article class="blog-card-elegant">
                    <div class="post-image-elegant">
                        <a href="#"><img src="https://placehold.co/600x400/CFDEF3/333333?text=Artikel+Desain+UX" alt="[Gambar Artikel Desain UX]"></a>
                    </div>
                    <div class="post-content-elegant">
                        <div><span class="post-category-elegant">Desain UX</span></div>
                        <h3 class="post-title-elegant"><a href="#">Prinsip Desain User-Centric untuk Produk Digital yang Sukses</a></h3>
                        <div class="post-meta-elegant">
                            <span><i class="fas fa-user"></i> Liam Chen</span>
                            <span><i class="fas fa-calendar-alt"></i> <?php echo date("d M Y", strtotime("-7 days")); ?></span>
                        </div>
                        <p class="post-excerpt-elegant">Memahami pengguna adalah kunci. Pelajari prinsip-prinsip desain yang berfokus pada kebutuhan dan kenyamanan pengguna...</p>
                        <a href="#" class="btn-readmore-elegant">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <article class="blog-card-elegant">
                    <div class="post-image-elegant">
                        <a href="#"><img src="https://placehold.co/600x400/A0C0CF/333333?text=Artikel+Strategi+Digital" alt="[Gambar Artikel Strategi Digital]"></a>
                    </div>
                    <div class="post-content-elegant">
                        <div><span class="post-category-elegant">Strategi Bisnis</span></div>
                        <h3 class="post-title-elegant"><a href="#">5 Langkah Membangun Strategi Digital yang Efektif di Tahun Ini</a></h3>
                        <div class="post-meta-elegant">
                            <span><i class="fas fa-user"></i> Sofia Al-Rashid</span>
                            <span><i class="fas fa-calendar-alt"></i> <?php echo date("d M Y", strtotime("-12 days")); ?></span>
                        </div>
                        <p class="post-excerpt-elegant">Navigasi lanskap digital yang kompleks membutuhkan strategi yang solid. Ikuti langkah-langkah penting ini...</p>
                        <a href="#" class="btn-readmore-elegant">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>

        <div class="view-all-posts-elegant" data-aos="fade-up" data-aos-delay="400">
            <a href="blog.php" class="btn-luminous-secondary">Lihat Semua Artikel <i class="fas fa-newspaper ms-2"></i></a>
        </div>
    </div>
</section>