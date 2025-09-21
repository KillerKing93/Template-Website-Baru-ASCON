<?php // File: components/about_refined.php 
?>
<style>
    /* Refined About Us Component Styles */
    #aboutRefined {
        background-color: var(--card-bg-light);
        /* Latar sedikit berbeda dari body */
        transition: background-color 0.4s ease;
    }

    body.dark-mode #aboutRefined {
        background-color: var(--card-bg-dark);
    }

    .about-image-refined-wrapper {
        position: relative;
        padding: 15px;
        /* Ruang untuk border dekoratif */
    }

    .about-image-refined-wrapper::before,
    .about-image-refined-wrapper::after {
        /* Border dekoratif */
        content: '';
        position: absolute;
        border: 2px solid var(--secondary-luminous);
        transition: all 0.5s ease, border-color 0.4s ease;
    }

    body.dark-mode .about-image-refined-wrapper::before,
    body.dark-mode .about-image-refined-wrapper::after {
        border-color: var(--secondary-luminous-dark);
    }

    .about-image-refined-wrapper::before {
        /* Border atas-kiri */
        top: 0;
        left: 0;
        width: 70%;
        height: 70%;
        border-right: none;
        border-bottom: none;
        border-top-left-radius: 10px;
    }

    .about-image-refined-wrapper::after {
        /* Border bawah-kanan */
        bottom: 0;
        right: 0;
        width: 70%;
        height: 70%;
        border-left: none;
        border-top: none;
        border-bottom-right-radius: 10px;
    }

    .about-image-refined-wrapper:hover::before,
    .about-image-refined-wrapper:hover::after {
        width: 80%;
        height: 80%;
    }

    .about-image-refined {
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        position: relative;
        /* Agar di atas border pseudo */
        z-index: 1;
    }

    body.dark-mode .about-image-refined {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }


    .about-text-refined h3 {
        font-size: 2.5rem;
        /* Ukuran judul lebih besar */
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-luminous);
        /* Warna judul */
    }

    body.dark-mode .about-text-refined h3 {
        color: var(--primary-luminous-dark);
    }

    .about-text-refined .lead-refined {
        /* Sub-heading atau kutipan */
        font-family: 'Lato', sans-serif;
        font-size: 1.2rem;
        font-style: italic;
        color: var(--muted-text-light);
        margin-bottom: 20px;
        font-weight: 400;
        border-left: 3px solid var(--secondary-luminous);
        padding-left: 15px;
        transition: color 0.4s ease, border-color 0.4s ease;
    }

    body.dark-mode .about-text-refined .lead-refined {
        color: var(--muted-text-dark);
        border-left-color: var(--secondary-luminous-dark);
    }

    .about-text-refined p {
        font-size: 1.05rem;
        line-height: 1.9;
        /* Spasi baris lebih lega */
        margin-bottom: 18px;
    }

    .about-stats-refined {
        margin-top: 30px;
        display: flex;
        justify-content: space-around;
        /* Atau space-between */
        text-align: center;
    }

    .stat-item-refined {
        padding: 10px;
    }

    .stat-item-refined .stat-number {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--primary-luminous);
        display: block;
        margin-bottom: 0;
        transition: color 0.4s ease;
    }

    .stat-item-refined .stat-label {
        font-family: 'Lato', sans-serif;
        font-size: 0.9rem;
        color: var(--muted-text-light);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: color 0.4s ease;
    }

    body.dark-mode .stat-item-refined .stat-number {
        color: var(--primary-luminous-dark);
    }

    body.dark-mode .stat-item-refined .stat-label {
        color: var(--muted-text-dark);
    }
</style>

<section id="aboutRefined" class="section-elegant">
    <div class="container">
        <div class="section-title-elegant" data-aos="fade-up">
            <h2>Tentang AuroraCorp</h2>
            <p class="subtitle-elegant">Memahami Esensi Kami: Visi, Misi, dan Dedikasi untuk Keunggulan.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                <div class="about-image-refined-wrapper">
                    <img src="https://placehold.co/600x480/FFFFFF/8A2BE2?text=Tim+Profesional+AuroraCorp&font=playfairdisplay" alt="[Gambar Tim Profesional AuroraCorp]" class="img-fluid about-image-refined">
                </div>
            </div>
            <div class="col-lg-6 about-text-refined" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                <h3>Merajut Inovasi dengan Keahlian dan Integritas</h3>
                <p class="lead-refined">
                    "Kami percaya bahwa setiap tantangan adalah kanvas untuk inovasi, dan setiap solusi adalah mahakarya kolaborasi."
                </p>
                <p>
                    AuroraCorp didirikan atas dasar semangat untuk menghadirkan solusi digital yang tidak hanya canggih secara teknologi, tetapi juga elegan dalam desain dan intuitif dalam penggunaan. Kami adalah kumpulan para ahli, pemikir kreatif, dan problem solver yang berdedikasi untuk membantu bisnis Anda bersinar di era digital.
                </p>
                <p>
                    Dengan pendekatan yang berpusat pada klien, kami berusaha memahami secara mendalam setiap aspek bisnis Anda untuk merancang strategi dan solusi yang paling tepat sasaran dan memberikan dampak maksimal.
                </p>
                <div class="about-stats-refined">
                    <div class="stat-item-refined" data-aos="zoom-in" data-aos-delay="200">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Tahun Pengalaman</span>
                    </div>
                    <div class="stat-item-refined" data-aos="zoom-in" data-aos-delay="300">
                        <span class="stat-number">150+</span>
                        <span class="stat-label">Proyek Sukses</span>
                    </div>
                    <div class="stat-item-refined" data-aos="zoom-in" data-aos-delay="400">
                        <span class="stat-number">98%</span>
                        <span class="stat-label">Kepuasan Klien</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>