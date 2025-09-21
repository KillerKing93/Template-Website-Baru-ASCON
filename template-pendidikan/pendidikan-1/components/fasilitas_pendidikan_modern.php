<?php // File: components/fasilitas_pendidikan_modern.php 
?>
<style>
    /* Fasilitas Pendidikan Modern Styles */
    #fasilitasPendidikanModern {
        background-color: var(--card-bg-light-edu1);
        /* Latar berbeda dari body */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #fasilitasPendidikanModern {
        background-color: var(--card-bg-dark-edu1);
    }

    .facility-item-edu {
        text-align: center;
        padding: 25px;
        background-color: var(--bg-light-edu1);
        /* Kontras dengan section */
        border-radius: 8px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid var(--border-light-edu1);
    }

    body.dark-mode .facility-item-edu {
        background-color: var(--bg-dark-edu1);
        /* Kontras dengan section */
        border-color: var(--border-dark-edu1);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    }

    .facility-item-edu:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 10px 25px rgba(241, 196, 15, 0.15);
        /* var(--secondary-edu1) dengan alpha */
        border-color: var(--secondary-edu1);
    }

    body.dark-mode .facility-item-edu:hover {
        box-shadow: 0 10px 25px rgba(243, 156, 18, 0.2);
        /* var(--secondary-edu1-dark) dengan alpha */
        border-color: var(--secondary-edu1-dark);
    }


    .facility-item-edu .facility-icon-edu {
        font-size: 3.2rem;
        /* Ikon fasilitas */
        color: var(--secondary-edu1);
        margin-bottom: 20px;
        display: inline-block;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .facility-item-edu:hover .facility-icon-edu {
        transform: rotate(5deg);
    }

    body.dark-mode .facility-item-edu .facility-icon-edu {
        color: var(--secondary-edu1-dark);
    }

    .facility-item-edu h5.facility-name-edu {
        font-family: 'Poppins', sans-serif;
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .facility-item-edu p.facility-desc-edu {
        font-size: 0.9rem;
        color: var(--muted-text-light-edu1);
        line-height: 1.6;
        margin-bottom: 0;
    }

    body.dark-mode .facility-item-edu p.facility-desc-edu {
        color: var(--muted-text-dark-edu1);
    }
</style>

<section id="fasilitasPendidikanModern" class="section-pendidikan">
    <div class="container">
        <div class="section-title-pendidikan" data-aos="fade-up">
            <h2>Fasilitas <span class="highlight-accent-edu">Modern</span> & Lengkap</h2>
            <div class="title-deco-line-edu"></div>
            <p class="subtitle-pendidikan">Menyediakan Lingkungan Belajar yang Nyaman, Inspiratif, dan Mendukung Teknologi Terkini.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-delay="100">
                <div class="facility-item-edu">
                    <div class="facility-icon-edu"><i class="fas fa-school"></i></div>
                    <h5 class="facility-name-edu">Ruang Kelas Interaktif</h5>
                    <p class="facility-desc-edu">Dilengkapi proyektor, smart board, dan koneksi internet cepat untuk pembelajaran dinamis.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="facility-item-edu">
                    <div class="facility-icon-edu"><i class="fas fa-flask"></i></div>
                    <h5 class="facility-name-edu">Laboratorium Terpadu</h5>
                    <p class="facility-desc-edu">Lab komputer, bahasa, sains, dan studio multimedia dengan peralatan modern dan lengkap.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-delay="300">
                <div class="facility-item-edu">
                    <div class="facility-icon-edu"><i class="fas fa-book-reader"></i></div>
                    <h5 class="facility-name-edu">Perpustakaan Digital & Fisik</h5>
                    <p class="facility-desc-edu">Koleksi buku, jurnal, dan sumber belajar digital yang kaya untuk mendukung riset dan literasi.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="facility-item-edu">
                    <div class="facility-icon-edu"><i class="fas fa-users"></i></div>
                    <h5 class="facility-name-edu">Area Kolaborasi & Diskusi</h5>
                    <p class="facility-desc-edu">Ruang terbuka dan co-working space yang nyaman untuk belajar kelompok dan berdiskusi.</p>
                </div>
            </div>
            <?php /* Komentar PHP: Tambahkan fasilitas lain jika perlu */ ?>
        </div>
    </div>
</section>