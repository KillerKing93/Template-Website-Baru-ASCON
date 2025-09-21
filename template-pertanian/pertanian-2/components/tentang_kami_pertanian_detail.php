<?php // File: components/tentang_kami_pertanian_detail.php 
?>
<style>
    /* Tentang Kami Pertanian Detail Styles */
    #tentangKamiPertanianDetail {
        background-color: var(--bg-light-farm2);
        /* Default light */
        border-bottom: 1px solid var(--border-light-farm2);
        transition: background-color 0.3s ease;
    }

    body.dark-mode #tentangKamiPertanianDetail {
        background-color: var(--bg-dark-farm2);
        border-bottom-color: var(--border-dark-farm2);
    }

    .about-image-detail-wrapper {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    body.dark-mode .about-image-detail-wrapper {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .about-image-detail-wrapper img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Efek overlay pada gambar */
    .about-image-detail-wrapper::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(46, 125, 50, 0.3), transparent 60%);
        /* var(--primary-modern-farm) dengan alpha */
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

    body.dark-mode .about-image-detail-wrapper::after {
        background: linear-gradient(to top, rgba(102, 187, 106, 0.3), transparent 60%);
        /* var(--primary-modern-farm-dark) dengan alpha */
    }

    .about-image-detail-wrapper:hover::after {
        opacity: 0.5;
    }

    .about-content-detail h3 {
        font-size: 2.3rem;
        font-weight: 700;
        /* Montserrat sudah bold */
        margin-bottom: 20px;
        color: var(--primary-modern-farm);
    }

    body.dark-mode .about-content-detail h3 {
        color: var(--primary-modern-farm-dark);
    }

    .about-content-detail .highlight-text {
        /* Untuk sub-judul atau poin penting */
        font-family: 'Montserrat', sans-serif;
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--secondary-modern-farm);
        /* Warna aksen kuning */
        margin-bottom: 20px;
        display: block;
    }

    body.dark-mode .about-content-detail .highlight-text {
        color: var(--secondary-modern-farm-dark);
    }

    .about-content-detail p {
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 18px;
    }

    .commitment-list {
        list-style: none;
        padding-left: 0;
        margin-top: 25px;
    }

    .commitment-list li {
        display: flex;
        align-items: center;
        /* Ikon dan teks sejajar tengah */
        margin-bottom: 15px;
        font-size: 1rem;
        font-weight: 600;
        /* Teks komitmen lebih tebal */
    }

    .commitment-list li i {
        color: var(--primary-modern-farm);
        font-size: 1.6rem;
        /* Ikon lebih besar */
        margin-right: 15px;
        width: 30px;
        /* Jaga alignment */
        text-align: center;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .commitment-list li:hover i {
        transform: scale(1.1);
    }

    body.dark-mode .commitment-list li i {
        color: var(--primary-modern-farm-dark);
    }
</style>

<section id="tentangKamiPertanianDetail" class="section-pertanian-modern">
    <div class="container">
        <div class="section-title-modern-farm" data-aos="fade-up">
            <h2>Akar Kami, <span class="highlight-accent">Visi Masa Depan</span></h2>
            <div class="line-decorator"></div>
            <p class="subtitle-modern-farm">Perjalanan Kami dalam Mengintegrasikan Tradisi Pertanian dengan Inovasi Teknologi Modern.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="about-image-detail-wrapper">
                    <img src="https://placehold.co/600x500/0F4C75/E8F6EF?text=Tim+AgroModern+Berdiskusi&font=montserrat" alt="[Gambar Tim AgroModern sedang berdiskusi di tengah ladang modern]">
                </div>
            </div>
            <div class="col-lg-6 about-content-detail" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                <h3>Menumbuhkan Inovasi dari Tanah Tradisi</h3>
                <span class="highlight-text">Kami adalah pionir dalam agroteknologi, berdedikasi untuk pertanian yang lebih cerdas, efisien, dan berkelanjutan.</span>
                <p>
                    [Nama Pertanian Modern Anda] lahir dari perpaduan semangat terhadap pertanian warisan leluhur dan antusiasme akan potensi teknologi masa depan. Kami percaya bahwa inovasi adalah kunci untuk mengatasi tantangan pangan global sambil tetap menjaga kelestarian lingkungan.
                </p>
                <p>
                    Setiap langkah kami didasari oleh riset mendalam, praktik terbaik, dan kolaborasi erat dengan para petani, peneliti, serta komunitas. Kami tidak hanya menanam tanaman, kami menumbuhkan harapan untuk masa depan agrikultur yang lebih baik.
                </p>
                <ul class="commitment-list">
                    <li data-aos="fade-left" data-aos-delay="200"><i class="fas fa-leaf"></i> Keberlanjutan Ekologis</li>
                    <li data-aos="fade-left" data-aos-delay="300"><i class="fas fa-cogs"></i> Efisiensi Berbasis Teknologi</li>
                    <li data-aos="fade-left" data-aos-delay="400"><i class="fas fa-hands-helping"></i> Kesejahteraan Komunitas Petani</li>
                    <li data-aos="fade-left" data-aos-delay="500"><i class="fas fa-award"></i> Kualitas Produk Unggul</li>
                </ul>
            </div>
        </div>
    </div>
</section>