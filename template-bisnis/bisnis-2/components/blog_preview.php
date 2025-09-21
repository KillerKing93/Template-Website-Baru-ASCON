<?php // File: components/blog_preview.php 
?>
<style>
    /* Blog Preview Component Styles */
    #blogPreview {
        background-color: #F4F7F6;
        /* Latar belakang netral */
    }

    .blog-post-item {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        /* Untuk gambar */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        /* Tinggi sama */
        display: flex;
        flex-direction: column;
    }

    .blog-post-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
    }

    .blog-post-item .post-img {
        max-height: 250px;
        /* Batasi tinggi gambar */
        overflow: hidden;
    }

    .blog-post-item .post-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .blog-post-item:hover .post-img img {
        transform: scale(1.05);
        /* Efek zoom pada gambar */
    }

    .blog-post-item .post-content {
        padding: 25px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        /* Agar konten mengisi ruang */
    }

    .blog-post-item .post-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #2C3E50;
        font-family: 'Montserrat', sans-serif;
        line-height: 1.3;
    }

    .blog-post-item .post-title a {
        color: #2C3E50;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .blog-post-item .post-title a:hover {
        color: #007BFF;
    }

    .blog-post-item .post-meta {
        font-size: 0.9rem;
        color: #777;
        margin-bottom: 15px;
    }

    .blog-post-item .post-meta span {
        margin-right: 15px;
    }

    .blog-post-item .post-meta i {
        margin-right: 5px;
        color: #007BFF;
    }

    .blog-post-item .post-excerpt {
        font-size: 1rem;
        color: #555;
        line-height: 1.7;
        margin-bottom: 20px;
        flex-grow: 1;
        /* Agar excerpt mengisi ruang sebelum tombol */
    }

    .blog-post-item .read-more a {
        color: #007BFF;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .blog-post-item .read-more a i {
        margin-left: 5px;
    }

    .blog-post-item .read-more a:hover {
        color: #0056b3;
    }

    .all-posts-link {
        text-align: center;
        margin-top: 40px;
    }
</style>

<section id="blogPreview" class="section">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Artikel Terbaru</h2>
        </div>
        <p class="section-subtitle">Dapatkan wawasan, tips, dan berita terkini dari industri kami melalui artikel-artikel pilihan.</p>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article class="blog-post-item">
                    <div class="post-img">
                        <img src="https://placehold.co/600x400/007BFF/FFFFFF?text=Blog+Post+1" alt="[Gambar Artikel Blog 1]" class="img-fluid">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="blog-single.php?id=1">Tren Teknologi Terkini yang Akan Mengubah Bisnis di 2025</a>
                        </h3>
                        <div class="post-meta">
                            <span><i class="fas fa-user"></i> Admin</span>
                            <span><i class="fas fa-calendar-alt"></i> <time datetime="2025-05-20">20 Mei 2025</time></span>
                            <span><i class="fas fa-comments"></i> 12 Komentar</span>
                        </div>
                        <p class="post-excerpt">
                            Dunia teknologi terus berkembang pesat. Ketahui tren-tren utama seperti AI generatif, komputasi kuantum, dan Web3 yang siap merevolusi cara kita berbisnis...
                        </p>
                        <div class="read-more mt-auto">
                            <a href="blog-single.php?id=1">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <article class="blog-post-item">
                    <div class="post-img">
                        <img src="https://placehold.co/600x400/28A745/FFFFFF?text=Blog+Post+2" alt="[Gambar Artikel Blog 2]" class="img-fluid">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="blog-single.php?id=2">Panduan Lengkap Strategi SEO untuk Pemula di Tahun Ini</a>
                        </h3>
                        <div class="post-meta">
                            <span><i class="fas fa-user"></i> Jane Doe</span>
                            <span><i class="fas fa-calendar-alt"></i> <time datetime="2025-05-15">15 Mei 2025</time></span>
                            <span><i class="fas fa-comments"></i> 8 Komentar</span>
                        </div>
                        <p class="post-excerpt">
                            Optimasi mesin pencari (SEO) adalah kunci visibilitas online. Pelajari dasar-dasar SEO, mulai dari riset kata kunci hingga optimasi on-page dan off-page...
                        </p>
                        <div class="read-more mt-auto">
                            <a href="blog-single.php?id=2">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <article class="blog-post-item">
                    <div class="post-img">
                        <img src="https://placehold.co/600x400/FFC107/2C3E50?text=Blog+Post+3" alt="[Gambar Artikel Blog 3]" class="img-fluid">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="blog-single.php?id=3">Membangun Budaya Inovasi di Perusahaan Anda: Tips Praktis</a>
                        </h3>
                        <div class="post-meta">
                            <span><i class="fas fa-user"></i> John Smith</span>
                            <span><i class="fas fa-calendar-alt"></i> <time datetime="2025-05-10">10 Mei 2025</time></span>
                            <span><i class="fas fa-comments"></i> 15 Komentar</span>
                        </div>
                        <p class="post-excerpt">
                            Inovasi bukan hanya tentang ide besar, tetapi juga tentang budaya yang mendukung kreativitas dan eksperimen. Berikut cara membangunnya di organisasi Anda...
                        </p>
                        <div class="read-more mt-auto">
                            <a href="blog-single.php?id=3">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <div class="all-posts-link" data-aos="fade-up" data-aos-delay="400">
            <a href="blog.php" class="btn btn-custom-secondary">Lihat Semua Artikel <i class="fas fa-newspaper ms-2"></i></a>
        </div>
    </div>
</section>