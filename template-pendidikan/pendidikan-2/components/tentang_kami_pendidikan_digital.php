<?php // File: components/tentang_kami_pendidikan_digital.php 
?>
<style>
    /* Tentang Kami Pendidikan Digital Styles */
    #tentangKamiPendidikanDigital {
        background-color: var(--bg-light-edu2);
        /* Default light */
        border-bottom: 1px solid var(--border-light-edu2);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode #tentangKamiPendidikanDigital {
        background-color: var(--bg-dark-edu2);
        border-bottom-color: var(--border-dark-edu2);
    }

    .about-digital-content h3 {
        font-size: 2.5rem;
        font-weight: 700;
        /* Orbitron sudah bold */
        margin-bottom: 20px;
        color: var(--primary-edu2);
        line-height: 1.3;
    }

    body.dark-mode .about-digital-content h3 {
        color: var(--primary-edu2-dark);
    }

    .about-digital-content .digital-mission-quote {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.15rem;
        font-weight: 500;
        color: var(--muted-text-light-edu2);
        margin-bottom: 25px;
        border-left: 4px solid var(--secondary-edu2);
        padding-left: 20px;
        font-style: italic;
        transition: color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode .about-digital-content .digital-mission-quote {
        color: var(--muted-text-dark-edu2);
        border-left-color: var(--secondary-edu2-dark);
    }

    .about-digital-content p {
        font-size: 1rem;
        line-height: 1.8;
        margin-bottom: 18px;
    }

    .digital-features-list {
        margin-top: 30px;
        list-style: none;
        padding-left: 0;
    }

    .digital-features-list li {
        display: flex;
        align-items: center;
        /* Ikon dan teks sejajar tengah */
        margin-bottom: 18px;
        font-size: 1.05rem;
        /* Ukuran teks fitur */
        font-weight: 500;
        /* Teks fitur sedikit lebih tebal */
    }

    .digital-features-list li i {
        color: var(--accent-edu2);
        font-size: 1.5rem;
        /* Ikon fitur */
        margin-right: 15px;
        width: 30px;
        /* Jaga alignment */
        text-align: center;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .digital-features-list li:hover i {
        transform: scale(1.2) rotate(5deg);
    }

    body.dark-mode .digital-features-list li i {
        color: var(--accent-edu2-dark);
    }

    .about-image-digital-wrapper {
        position: relative;
        text-align: center;
    }

    .about-image-digital {
        border-radius: 10px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        /* Efek "circuit board" atau "digital lines" sebagai border/overlay */
        border: 2px solid transparent;
        /* Awalnya transparan */
        padding: 5px;
        /* Ruang untuk border glow */
        background-clip: padding-box;
        /* Agar background tidak tumpang tindih dengan border */
        position: relative;
        transition: border-color 0.4s ease;
    }

    .about-image-digital-wrapper:hover .about-image-digital {
        border-color: var(--accent-edu2);
        box-shadow: 0 0 20px rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.3);
    }

    body.dark-mode .about-image-digital {
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.35);
    }

    body.dark-mode .about-image-digital-wrapper:hover .about-image-digital {
        border-color: var(--accent-edu2-dark);
        box-shadow: 0 0 20px rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.3);
    }
</style>

<section id="tentangKamiPendidikanDigital" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="TENTANG EDUVERSE">TENTANG <span class="highlight-accent-edu2" data-text="EDUVERSE">EDUVERSE</span></h2>
            <?php /* Komentar PHP: Tidak ada .title-deco-line di sini, efek glitch sudah cukup */ ?>
            <p class="subtitle-eduverse">Membentuk Ekosistem Pembelajaran Digital yang Inovatif, Interaktif, dan Inklusif.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 about-digital-content" data-aos="fade-right" data-aos-duration="900">
                <h3>Merintis Masa Depan Pendidikan Melalui Teknologi.</h3>
                <p class="digital-mission-quote">
                    Visi kami adalah menciptakan pengalaman belajar transformatif yang memberdayakan setiap individu untuk berkembang di era digital.
                </p>
                <p>
                    EduVerse Campus bukan sekadar institusi pendidikan; kami adalah komunitas pembelajar, inovator, dan kreator yang dinamis. Kami memanfaatkan kekuatan teknologi untuk menghadirkan kurikulum yang relevan, metode pengajaran yang menarik, dan lingkungan kolaboratif yang tak terbatas oleh ruang dan waktu.
                </p>
                <ul class="digital-features-list">
                    <li data-aos="fade-right" data-aos-delay="100"><i class="fas fa-vr-cardboard"></i> Pembelajaran Imersif dengan VR/AR</li>
                    <li data-aos="fade-right" data-aos-delay="200"><i class="fas fa-users-cog"></i> Kolaborasi Global & Proyek Tim</li>
                    <li data-aos="fade-right" data-aos-delay="300"><i class="fas fa-brain"></i> Kurikulum Adaptif Berbasis AI</li>
                    <li data-aos="fade-right" data-aos-delay="400"><i class="fas fa-certificate"></i> Sertifikasi Digital & Keterampilan Industri</li>
                </ul>
            </div>
            <div class="col-lg-6 about-image-digital-wrapper" data-aos="zoom-out-left" data-aos-duration="900" data-aos-delay="100">
                <img src="https://placehold.co/550x480/172A45/CCD6F6?text=Kampus+Digital+EduVerse&font=orbitron" alt="[Ilustrasi Kampus Digital EduVerse yang Futuristik]" class="img-fluid about-image-digital">
            </div>
        </div>
    </div>
</section>