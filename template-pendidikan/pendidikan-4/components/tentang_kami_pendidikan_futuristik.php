<?php // File: components/tentang_kami_pendidikan_futuristik.php 
?>
<style>
    /* Tentang Kami Pendidikan Futuristik Styles */
    #tentangKamiPendidikanFuturistik {
        background-color: var(--card-bg-light-edu4);
        /* Latar berbeda dari body, lebih terang */
        border-bottom: 1px solid var(--border-light-edu4);
        transition: background-color 0.3s ease, border-color 0.3s ease;
        padding-top: 100px;
        /* Padding atas lebih besar */
        padding-bottom: 100px;
        position: relative;
        /* Untuk elemen dekoratif absolut */
        overflow: hidden;
        /* Mencegah elemen dekoratif keluar */
    }

    body.dark-mode #tentangKamiPendidikanFuturistik {
        background-color: var(--card-bg-dark-edu4);
        border-bottom-color: var(--border-dark-edu4);
    }

    /* Elemen Dekoratif Absolut di Latar Belakang Section */
    #tentangKamiPendidikanFuturistik::before,
    #tentangKamiPendidikanFuturistik::after {
        content: '';
        position: absolute;
        border-radius: 50%;
        opacity: 0.05;
        /* Sangat transparan */
        z-index: 0;
        /* Di belakang konten */
        transition: opacity 0.3s ease, transform 0.5s ease;
    }

    #tentangKamiPendidikanFuturistik::before {
        /* Lingkaran besar 1 */
        width: 400px;
        height: 400px;
        background-color: var(--primary-innovate);
        top: -100px;
        left: -150px;
        animation: decorativeCircleFloat1 20s infinite linear alternate;
    }

    #tentangKamiPendidikanFuturistik::after {
        /* Lingkaran besar 2 */
        width: 300px;
        height: 300px;
        background-color: var(--secondary-innovate);
        bottom: -80px;
        right: -120px;
        animation: decorativeCircleFloat2 25s infinite linear alternate;
    }

    body.dark-mode #tentangKamiPendidikanFuturistik::before {
        background-color: var(--primary-innovate-dark);
    }

    body.dark-mode #tentangKamiPendidikanFuturistik::after {
        background-color: var(--secondary-innovate-dark);
    }

    @keyframes decorativeCircleFloat1 {
        0% {
            transform: translateY(0) translateX(0) rotate(0deg);
        }

        100% {
            transform: translateY(20px) translateX(30px) rotate(45deg);
        }
    }

    @keyframes decorativeCircleFloat2 {
        0% {
            transform: translateY(0) translateX(0) rotate(0deg);
        }

        100% {
            transform: translateY(-20px) translateX(-25px) rotate(-30deg);
        }
    }


    .about-futuristic-content-iu {
        position: relative;
        z-index: 1;
        /* Agar di atas elemen dekoratif section */
    }

    .about-futuristic-content-iu h3 {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-innovate);
        line-height: 1.3;
        position: relative;
        padding-bottom: 10px;
    }

    .about-futuristic-content-iu h3::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 60px;
        height: 4px;
        background-color: var(--secondary-innovate);
        box-shadow: 0 0 10px var(--secondary-innovate);
        animation: pulseLine 2s infinite alternate;
    }

    body.dark-mode .about-futuristic-content-iu h3 {
        color: var(--primary-innovate-dark);
    }

    body.dark-mode .about-futuristic-content-iu h3::after {
        background-color: var(--secondary-innovate-dark);
        box-shadow: 0 0 10px var(--secondary-innovate-dark);
    }

    .about-futuristic-content-iu .mission-statement-iu {
        font-family: 'Inter', sans-serif;
        font-size: 1.25rem;
        font-weight: 500;
        color: var(--muted-text-light-edu4);
        margin-bottom: 30px;
        border-left: 5px solid var(--accent-innovate);
        padding-left: 25px;
        font-style: normal;
        transition: color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode .about-futuristic-content-iu .mission-statement-iu {
        color: var(--muted-text-dark-edu4);
        border-left-color: var(--accent-innovate-dark);
    }

    .about-futuristic-content-iu p {
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .stats-innovateu {
        margin-top: 40px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
    }

    .stat-item-iu {
        background-color: rgba(var(--card-bg-light-edu4-rgb, 255, 255, 255), 0.7);
        /* Lebih transparan */
        backdrop-filter: blur(3px);
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        border: 1px solid var(--border-light-edu4);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    body.dark-mode .stat-item-iu {
        background-color: rgba(var(--card-bg-dark-edu4-rgb, 23, 42, 69), 0.7);
        border-color: var(--border-dark-edu4);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .stat-item-iu:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(var(--primary-innovate-rgb, 0, 169, 224), 0.15);
    }

    body.dark-mode .stat-item-iu:hover {
        box-shadow: 0 8px 20px rgba(var(--primary-innovate-dark-rgb, 0, 191, 255), 0.2);
    }

    .stat-item-iu .stat-number-iu {
        font-family: 'Orbitron', sans-serif;
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-innovate);
        display: block;
        margin-bottom: 5px;
        transition: color 0.3s ease;
    }

    body.dark-mode .stat-item-iu .stat-number-iu {
        color: var(--primary-innovate-dark);
    }

    .stat-item-iu .stat-label-iu {
        font-size: 0.9rem;
        color: var(--muted-text-light-edu4);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    body.dark-mode .stat-item-iu .stat-label-iu {
        color: var(--muted-text-dark-edu4);
    }

    .about-image-futuristic-iu-wrapper {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        /* Padding untuk memberi ruang elemen dekoratif */
    }

    .about-image-futuristic-iu {
        border-radius: 15px;
        /* Sudut lebih membulat */
        max-width: 100%;
        height: auto;
        box-shadow: 0 15px 45px rgba(var(--primary-innovate-rgb, 0, 169, 224), 0.15);
        position: relative;
        display: block;
        transition: transform 0.5s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.5s ease;
        z-index: 1;
        /* Di atas elemen dekoratif wrapper */
    }

    .about-image-futuristic-iu-wrapper:hover .about-image-futuristic-iu {
        transform: scale(1.05) rotate(-1deg);
        /* Efek hover lebih dinamis */
        box-shadow: 0 20px 55px rgba(var(--primary-innovate-rgb, 0, 169, 224), 0.25);
    }

    body.dark-mode .about-image-futuristic-iu {
        box-shadow: 0 15px 45px rgba(var(--primary-innovate-dark-rgb, 0, 191, 255), 0.2);
    }

    body.dark-mode .about-image-futuristic-iu-wrapper:hover .about-image-futuristic-iu {
        box-shadow: 0 20px 55px rgba(var(--primary-innovate-dark-rgb, 0, 191, 255), 0.3);
    }

    /* Menghilangkan frame interaktif ::before pada wrapper */
    .about-image-futuristic-iu-wrapper::before {
        display: none;
    }

    /* Menghilangkan bayangan bawah ::after pada image */
    .about-image-futuristic-iu::after {
        display: none;
    }

    /* Elemen dekoratif baru di sekitar gambar */
    .img-deco-shape {
        position: absolute;
        border-radius: 8px;
        opacity: 0;
        /* Awalnya transparan, muncul saat hover wrapper */
        transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
        z-index: 0;
        /* Di belakang gambar utama */
    }

    .about-image-futuristic-iu-wrapper:hover .img-deco-shape {
        opacity: 0.15;
        /* Opasitas saat hover */
    }

    body.dark-mode .about-image-futuristic-iu-wrapper:hover .img-deco-shape {
        opacity: 0.2;
    }

    .img-deco-1 {
        /* Bentuk di kiri atas */
        width: 100px;
        height: 100px;
        background-color: var(--secondary-innovate);
        top: -20px;
        left: -30px;
        transform: rotate(45deg) scale(0.8);
    }

    .about-image-futuristic-iu-wrapper:hover .img-deco-1 {
        top: 0;
        left: -10px;
        transform: rotate(30deg) scale(1);
    }

    body.dark-mode .img-deco-1 {
        background-color: var(--secondary-innovate-dark);
    }

    .img-deco-2 {
        /* Bentuk di kanan bawah */
        width: 120px;
        height: 120px;
        background-color: var(--accent-innovate);
        bottom: -30px;
        right: -40px;
        transform: rotate(-30deg) scale(0.8);
        border-radius: 50% 0 50% 0;
        /* Bentuk organik */
    }

    .about-image-futuristic-iu-wrapper:hover .img-deco-2 {
        bottom: -10px;
        right: -20px;
        transform: rotate(-15deg) scale(1);
    }

    body.dark-mode .img-deco-2 {
        background-color: var(--accent-innovate-dark);
    }
</style>

<section id="tentangKamiPendidikanFuturistik" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="TENTANG INNOVATEU">TENTANG <span class="highlight-accent-edu2" data-text="INNOVATEU">INNOVATEU</span></h2>
            <p class="subtitle-eduverse">Mengukir Masa Depan Pendidikan dengan Teknologi, Kreativitas, dan Kolaborasi Global.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 about-futuristic-content-iu" data-aos="fade-right" data-aos-duration="900">
                <h3>Pendidikan Transformatif untuk Era Digital.</h3>
                <p class="mission-statement-iu">
                    InnovateU adalah ekosistem pembelajaran dinamis yang bertujuan untuk memberdayakan individu dengan keterampilan dan pengetahuan relevan untuk sukses di dunia yang terus berubah.
                </p>
                <p>
                    Kami percaya bahwa pendidikan sejati melampaui batas-batas ruang kelas tradisional. Dengan mengintegrasikan teknologi imersif, kurikulum adaptif, dan jaringan kolaborasi global, kami menciptakan pengalaman belajar yang personal, menarik, dan berdampak. Misi kami adalah mencetak para inovator, pemecah masalah, dan pemimpin yang siap menghadapi tantangan masa depan.
                </p>
                <div class="stats-innovateu">
                    <div class="stat-item-iu" data-aos="fade-up" data-aos-delay="100">
                        <span class="stat-number-iu">50+</span>
                        <span class="stat-label-iu">Program Inovatif</span>
                    </div>
                    <div class="stat-item-iu" data-aos="fade-up" data-aos-delay="200">
                        <span class="stat-number-iu">100+</span>
                        <span class="stat-label-iu">Mitra Industri</span>
                    </div>
                    <div class="stat-item-iu" data-aos="fade-up" data-aos-delay="300">
                        <span class="stat-number-iu">20+</span>
                        <span class="stat-label-iu">Negara Terjangkau</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about-image-futuristic-iu-wrapper" data-aos="zoom-in-left" data-aos-duration="900" data-aos-delay="100">
                <div class="img-deco-shape img-deco-1"></div> <?php /* Elemen dekoratif baru */ ?>
                <img src="https://placehold.co/500x430/172A46/E6F1FF?text=Kampus+Inovatif&font=rajdhani" alt="[Gambar Kampus Inovatif InnovateU]" class="img-fluid about-image-futuristic-iu">
                <div class="img-deco-shape img-deco-2"></div> <?php /* Elemen dekoratif baru */ ?>
            </div>
        </div>
    </div>
</section>