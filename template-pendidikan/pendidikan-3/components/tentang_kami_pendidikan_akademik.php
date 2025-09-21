<?php // File: components/tentang_kami_pendidikan_akademik.php 
?>
<style>
    /* Tentang Kami Pendidikan Akademik Styles */
    #tentangKamiPendidikanAkademik {
        background-color: var(--bg-light-edu3);
        /* Default light */
        border-bottom: 1px solid var(--border-light-edu3);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode #tentangKamiPendidikanAkademik {
        background-color: var(--bg-dark-edu3);
        border-bottom-color: var(--border-dark-edu3);
    }

    .about-academic-content h3 {
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--primary-illumina);
        line-height: 1.3;
    }

    body.dark-mode .about-academic-content h3 {
        color: var(--primary-illumina-dark);
    }

    .about-academic-content .academic-credo {
        /* Untuk kutipan kredo */
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.3rem;
        font-weight: 600;
        /* Sedikit lebih tebal */
        color: var(--muted-text-light-edu3);
        margin-bottom: 25px;
        border-left: 4px solid var(--secondary-illumina);
        padding-left: 20px;
        font-style: italic;
        transition: color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode .about-academic-content .academic-credo {
        color: var(--muted-text-dark-edu3);
        border-left-color: var(--secondary-illumina-dark);
    }

    .about-academic-content p {
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 18px;
    }

    .academic-highlights {
        margin-top: 30px;
    }

    .highlight-item-academic {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        padding: 20px;
        background-color: var(--card-bg-light-edu3);
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid var(--border-light-edu3);
        transition: all 0.3s ease;
    }

    body.dark-mode .highlight-item-academic {
        background-color: var(--card-bg-dark-edu3);
        border-color: var(--border-dark-edu3);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .highlight-item-academic:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 20px rgba(184, 134, 11, 0.1);
        /* var(--secondary-illumina) dengan alpha */
        border-left: 4px solid var(--secondary-illumina);
    }

    body.dark-mode .highlight-item-academic:hover {
        box-shadow: 0 6px 20px rgba(212, 175, 55, 0.15);
        /* var(--secondary-illumina-dark) dengan alpha */
        border-left-color: var(--secondary-illumina-dark);
    }

    .highlight-item-academic .icon-academic {
        font-size: 2rem;
        /* Ikon highlight */
        color: var(--secondary-illumina);
        margin-right: 18px;
        width: 40px;
        /* Lebar tetap */
        text-align: center;
        flex-shrink: 0;
        transition: color 0.3s ease;
    }

    body.dark-mode .highlight-item-academic .icon-academic {
        color: var(--secondary-illumina-dark);
    }

    .highlight-item-academic .text-academic h5 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .highlight-item-academic .text-academic p {
        font-size: 0.9rem;
        margin-bottom: 0;
        line-height: 1.6;
        color: var(--muted-text-light-edu3);
    }

    body.dark-mode .highlight-item-academic .text-academic p {
        color: var(--muted-text-dark-edu3);
    }

    .about-image-academic-wrapper {
        position: relative;
        text-align: center;
    }

    .about-image-academic {
        border-radius: 10px;
        max-width: 90%;
        /* Gambar tidak full, beri ruang untuk dekorasi */
        height: auto;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        border: 8px solid var(--card-bg-light-edu3);
        /* Frame tebal */
        outline: 1px solid var(--border-light-edu3);
        /* Outline tipis */
        transition: all 0.3s ease;
    }

    body.dark-mode .about-image-academic {
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.35);
        border-color: var(--card-bg-dark-edu3);
        outline-color: var(--border-dark-edu3);
    }

    .about-image-academic-wrapper:hover .about-image-academic {
        transform: rotate(-2deg);
        /* Sedikit miring saat hover */
    }
</style>

<section id="tentangKamiPendidikanAkademik" class="section-illumina">
    <div class="container">
        <div class="section-title-illumina" data-aos="fade-up">
            <h2>Tradisi Keunggulan <span style="color:var(--secondary-illumina);">Akademik</span></h2>
            <p class="subtitle-illumina">Menjunjung Tinggi Warisan Intelektual sambil Merangkul Inovasi untuk Pendidikan Berkualitas.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 about-academic-content" data-aos="fade-right" data-aos-duration="900">
                <h3>Pilar Pengetahuan dan Pencerahan.</h3>
                <p class="academic-credo">
                    "Ilmu adalah pelita yang menerangi jalan peradaban. Di Academia Illumina, kami menyalakan pelita itu untuk setiap generasi."
                </p>
                <p>
                    Selama lebih dari [Jumlah] dekade, Academia Illumina telah menjadi benteng keunggulan akademik, tempat para pemikir, peneliti, dan pemimpin masa depan ditempa. Kami menggabungkan kurikulum klasik yang kaya akan kearifan dengan metodologi pengajaran modern dan fasilitas riset terkini.
                </p>
                <p>
                    Fokus kami adalah pada pengembangan intelektual yang holistik, menumbuhkan rasa ingin tahu yang mendalam, kemampuan analisis kritis, dan integritas etis.
                </p>
            </div>
            <div class="col-lg-6 about-image-academic-wrapper" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                <img src="https://placehold.co/500x420/FDFBF5/8B4513?text=Suasana+Diskusi+Akademik&font=cormorantgaramond" alt="[Gambar Suasana Diskusi Akademik yang Mendalam]" class="img-fluid about-image-academic">
            </div>
        </div>

        <div class="academic-highlights row gy-4 mt-5 pt-3">
            <div class="col-md-12 section-title-illumina text-center" data-aos="fade-up" data-aos-delay="150">
                <h3 style="font-size: 2rem; color: var(--primary-illumina);">Keunggulan Kami</h3>
                <?php /* Komentar PHP: Judul sub-bagian */ ?>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="highlight-item-academic">
                    <div class="icon-academic"><i class="fas fa-microscope"></i></div>
                    <div class="text-academic">
                        <h5>Riset Inovatif</h5>
                        <p>Fasilitas riset mutakhir dan dukungan penuh bagi penelitian yang berdampak.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="highlight-item-academic">
                    <div class="icon-academic"><i class="fas fa-users-class"></i></div> <?php /* Ikon baru */ ?>
                    <div class="text-academic">
                        <h5>Pengajar Berdedikasi</h5>
                        <p>Tenaga pengajar ahli di bidangnya dengan komitmen tinggi terhadap keberhasilan siswa.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="highlight-item-academic">
                    <div class="icon-academic"><i class="fas fa-globe-americas"></i></div>
                    <div class="text-academic">
                        <h5>Jaringan Global</h5>
                        <p>Kemitraan internasional yang membuka peluang studi, riset, dan karir di seluruh dunia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>