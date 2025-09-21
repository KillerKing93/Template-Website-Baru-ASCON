<?php // File: components/program_unggulan_pendidikan.php 
?>
<style>
    /* Program Unggulan Pendidikan Styles */
    #programUnggulanPendidikan {
        background-color: var(--bg-light-edu1);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #programUnggulanPendidikan {
        background-color: var(--bg-dark-edu1);
    }

    .program-card-edu {
        background-color: var(--card-bg-light-edu1);
        border-radius: 10px;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.07);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid var(--border-light-edu1);
        position: relative;
        /* Untuk efek ::before */
        overflow: hidden;
    }

    body.dark-mode .program-card-edu {
        background-color: var(--card-bg-dark-edu1);
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark-edu1);
    }

    /* Efek garis aksen saat hover */
    .program-card-edu::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        /* Awalnya tidak ada lebar */
        height: 5px;
        /* Ketebalan garis */
        background: linear-gradient(90deg, var(--primary-edu1), var(--secondary-edu1));
        transition: width 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .program-card-edu:hover::before {
        width: 100%;
    }

    body.dark-mode .program-card-edu::before {
        background: linear-gradient(90deg, var(--primary-edu1-dark), var(--secondary-edu1-dark));
    }

    .program-card-edu:hover {
        transform: translateY(-8px);
    }

    .program-card-edu .program-icon-edu {
        font-size: 3rem;
        /* Ukuran ikon program */
        color: var(--primary-edu1);
        margin-bottom: 20px;
        display: inline-block;
        padding: 15px;
        background-color: rgba(var(--primary-edu1-rgb, 52, 152, 219), 0.08);
        /* var(--primary-edu1) dengan alpha */
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    /* Komentar CSS: Variabel RGB untuk primary-edu1 */
    body {
        --primary-edu1-rgb: 52, 152, 219;
    }

    body.dark-mode {
        --primary-edu1-dark-rgb: 93, 173, 226;
    }

    body.dark-mode .program-card-edu .program-icon-edu {
        color: var(--primary-edu1-dark);
        background-color: rgba(var(--primary-edu1-dark-rgb, 93, 173, 226), 0.12);
    }

    .program-card-edu:hover .program-icon-edu {
        color: #fff;
        background-color: var(--primary-edu1);
        transform: rotateY(360deg);
        /* Ikon berputar */
    }

    body.dark-mode .program-card-edu:hover .program-icon-edu {
        background-color: var(--primary-edu1-dark);
        color: var(--bg-dark-edu1);
    }


    .program-card-edu .program-content-edu {
        padding: 25px;
        padding-top: 0;
        /* Padding atas sudah dari ikon */
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .program-card-edu h4.program-title-edu {
        font-family: 'Poppins', sans-serif;
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .program-card-edu p.program-desc-edu {
        font-size: 0.95rem;
        color: var(--muted-text-light-edu1);
        line-height: 1.7;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    body.dark-mode .program-card-edu p.program-desc-edu {
        color: var(--muted-text-dark-edu1);
    }

    .program-card-edu .btn-detail-program {
        margin-top: auto;
        /* Tombol di bawah */
        font-size: 0.9rem;
    }
</style>

<section id="programUnggulanPendidikan" class="section-pendidikan">
    <div class="container">
        <div class="section-title-pendidikan" data-aos="fade-up">
            <h2>Program <span class="highlight-accent-edu">Unggulan</span> Kami</h2>
            <div class="title-deco-line-edu"></div>
            <p class="subtitle-pendidikan">Menawarkan Berbagai Program Studi yang Dirancang untuk Memenuhi Kebutuhan Industri dan Minat Siswa.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="program-card-edu">
                    <div class="program-content-edu">
                        <div class="program-icon-edu"><i class="fas fa-laptop-code"></i></div>
                        <h4 class="program-title-edu">Teknologi Informasi & Informatika</h4>
                        <p class="program-desc-edu">Mempelajari pengembangan perangkat lunak, kecerdasan buatan, keamanan siber, dan analisis data.</p>
                        <a href="#" class="btn-edu-secondary btn-detail-program">Lihat Kurikulum</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="program-card-edu">
                    <div class="program-content-edu">
                        <div class="program-icon-edu"><i class="fas fa-chart-line"></i></div>
                        <h4 class="program-title-edu">Bisnis Digital & Manajemen</h4>
                        <p class="program-desc-edu">Fokus pada strategi bisnis modern, pemasaran digital, e-commerce, dan manajemen inovasi.</p>
                        <a href="#" class="btn-edu-secondary btn-detail-program">Lihat Kurikulum</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="program-card-edu">
                    <div class="program-content-edu">
                        <div class="program-icon-edu"><i class="fas fa-palette"></i></div>
                        <h4 class="program-title-edu">Desain Komunikasi Visual & Multimedia</h4>
                        <p class="program-desc-edu">Mengembangkan kreativitas dalam desain grafis, animasi, produksi video, dan media interaktif.</p>
                        <a href="#" class="btn-edu-secondary btn-detail-program">Lihat Kurikulum</a>
                    </div>
                </div>
            </div>
            <?php /* Komentar PHP: Tambahkan program unggulan lainnya jika ada */ ?>
        </div>
    </div>
</section>