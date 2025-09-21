<?php // File: components/tentang_kami_pertanian.php 
?>
<style>
    /* Tentang Kami Pertanian Styles */
    #tentangKamiPertanian {
        background-color: var(--card-bg-light);
        /* Sedikit beda dari body */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #tentangKamiPertanian {
        background-color: var(--card-bg-dark);
    }

    .about-image-pertanian {
        border-radius: 10px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .about-image-pertanian:hover {
        transform: scale(1.03);
    }

    body.dark-mode .about-image-pertanian {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .about-text-pertanian h3 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--primary-farm);
    }

    body.dark-mode .about-text-pertanian h3 {
        color: var(--primary-farm-dark);
    }

    .about-text-pertanian p.mission-statement {
        /* Untuk kutipan misi */
        font-style: italic;
        font-size: 1.15rem;
        color: var(--muted-text-light);
        border-left: 3px solid var(--secondary-farm);
        padding-left: 15px;
        margin-bottom: 20px;
        transition: color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode .about-text-pertanian p.mission-statement {
        color: var(--muted-text-dark);
        border-left-color: var(--secondary-farm-dark);
    }

    .about-text-pertanian p {
        font-size: 1rem;
        line-height: 1.8;
        margin-bottom: 15px;
    }

    .values-list-pertanian {
        list-style: none;
        padding-left: 0;
        margin-top: 25px;
    }

    .values-list-pertanian li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
        font-size: 1rem;
    }

    .values-list-pertanian i {
        color: var(--accent-farm);
        /* Warna ikon nilai */
        font-size: 1.3rem;
        margin-right: 12px;
        margin-top: 4px;
        transition: color 0.3s ease;
    }

    body.dark-mode .values-list-pertanian i {
        color: var(--accent-farm-dark);
    }
</style>

<section id="tentangKamiPertanian" class="section-pertanian">
    <div class="container">
        <div class="section-title-pertanian" data-aos="fade-up">
            <h2>Tentang Ladang Kami</h2>
            <p class="subtitle-pertanian">Sejarah, Misi, dan Nilai-Nilai yang Kami Junjung Tinggi dalam Bertani.</p>
        </div>

        <div class="row align-items-center gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="https://placehold.co/600x450/D4A373/3C2A21?text=Petani+Bahagia+di+Ladang" alt="[Gambar Petani sedang bekerja di ladang]" class="img-fluid about-image-pertanian">
            </div>
            <div class="col-lg-6 about-text-pertanian" data-aos="fade-left" data-aos-delay="200">
                <h3>Dari Tanah Subur, untuk Kehidupan yang Lebih Baik</h3>
                <p class="mission-statement">
                    Misi kami adalah menyediakan produk pertanian segar, sehat, dan berkualitas tinggi yang dihasilkan melalui praktik pertanian berkelanjutan dan ramah lingkungan.
                </p>
                <p>
                    Sejak [Tahun Berdiri], [NamaPertanian Anda] telah berkomitmen untuk menjaga kelestarian alam sambil menghasilkan pangan terbaik bagi masyarakat. Kami percaya bahwa makanan yang baik berasal dari tanah yang sehat dan petani yang sejahtera.
                </p>
                <ul class="values-list-pertanian">
                    <li><i class="fas fa-seedling"></i> <strong>Kualitas Terbaik:</strong> Hanya produk segar dan pilihan yang sampai ke tangan Anda.</li>
                    <li><i class="fas fa-recycle"></i> <strong>Berkelanjutan:</strong> Praktik pertanian yang menjaga keseimbangan ekosistem.</li>
                    <li><i class="fas fa-users"></i> <strong>Kesejahteraan Petani:</strong> Mendukung komunitas petani lokal kami.</li>
                    <li><i class="fas fa-heart"></i> <strong>Kejujuran & Transparansi:</strong> Terbuka mengenai asal-usul dan proses produk kami.</li>
                </ul>
            </div>
        </div>
    </div>
</section>