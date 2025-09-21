<?php // File: components/tentang_kami_pertanian_harmoni.php 
?>
<style>
    /* Tentang Kami Pertanian Harmoni Styles */
    #tentangKamiPertanianHarmoni {
        background-color: var(--bg-light-farm5);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #tentangKamiPertanianHarmoni {
        background-color: var(--bg-dark-farm5);
    }

    .about-content-harmoni h3 {
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: var(--primary-eco-farm);
        line-height: 1.3;
    }

    body.dark-mode .about-content-harmoni h3 {
        color: var(--primary-eco-farm-dark);
    }

    .about-content-harmoni .philosophy-quote {
        font-family: 'Lora', serif;
        /* Font serif untuk kutipan */
        font-size: 1.3rem;
        font-style: italic;
        color: var(--muted-text-light-farm5);
        margin-bottom: 25px;
        border-left: 4px solid var(--secondary-eco-farm);
        padding-left: 25px;
        position: relative;
    }

    .about-content-harmoni .philosophy-quote::before {
        /* Ikon kutip atas */
        content: "\f10d";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        position: absolute;
        left: -5px;
        /* Sedikit keluar dari border */
        top: -10px;
        font-size: 1.8rem;
        color: var(--secondary-eco-farm);
        opacity: 0.3;
    }

    body.dark-mode .about-content-harmoni .philosophy-quote {
        color: var(--muted-text-dark-farm5);
        border-left-color: var(--secondary-eco-farm-dark);
    }

    body.dark-mode .about-content-harmoni .philosophy-quote::before {
        color: var(--secondary-eco-farm-dark);
    }

    .about-content-harmoni p {
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 18px;
    }

    .values-grid-harmoni {
        /* Untuk menampilkan nilai-nilai inti */
        margin-top: 30px;
    }

    .value-item-harmoni {
        text-align: center;
        padding: 20px;
    }

    .value-item-harmoni .value-icon {
        font-size: 2.8rem;
        /* Ikon nilai */
        color: var(--accent-eco-farm);
        margin-bottom: 15px;
        display: inline-block;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .value-item-harmoni:hover .value-icon {
        transform: scale(1.15) rotate(5deg);
        color: var(--secondary-eco-farm);
    }

    body.dark-mode .value-item-harmoni .value-icon {
        color: var(--accent-eco-farm-dark);
    }

    body.dark-mode .value-item-harmoni:hover .value-icon {
        color: var(--secondary-eco-farm-dark);
    }

    .value-item-harmoni h5 {
        font-family: 'Nunito Sans', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .value-item-harmoni p {
        font-size: 0.9rem;
        margin-bottom: 0;
        line-height: 1.6;
        color: var(--muted-text-light-farm5);
    }

    body.dark-mode .value-item-harmoni p {
        color: var(--muted-text-dark-farm5);
    }

    .about-image-harmoni-wrapper {
        position: relative;
    }

    .about-image-harmoni {
        border-radius: 12px;
        max-width: 100%;
        height: auto;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        /* Efek "watercolor splash" atau bentuk organik di belakang gambar */
    }

    .about-image-harmoni-wrapper::before {
        content: '';
        position: absolute;
        bottom: -20px;
        right: -20px;
        width: 80%;
        height: 70%;
        background-color: rgba(var(--secondary-eco-farm-rgb, 218, 165, 32), 0.15);
        /* var(--secondary-eco-farm) dengan alpha */
        border-radius: 60% 40% 30% 70% / 70% 30% 70% 30%;
        /* Bentuk organik acak */
        z-index: -1;
        /* Di belakang gambar */
        animation: organicShapeMorph 15s infinite alternate ease-in-out;
        transition: background-color 0.3s ease;
    }

    /* Komentar CSS: Variabel RGB untuk secondary-eco-farm */
    body {
        --secondary-eco-farm-rgb: 218, 165, 32;
    }

    body.dark-mode {
        --secondary-eco-farm-dark-rgb: 240, 230, 140;
    }

    body.dark-mode .about-image-harmoni-wrapper::before {
        background-color: rgba(var(--secondary-eco-farm-dark-rgb, 240, 230, 140), 0.15);
    }

    @keyframes organicShapeMorph {
        0% {
            border-radius: 60% 40% 30% 70% / 70% 30% 70% 30%;
            transform: scale(1) rotate(0deg);
        }

        50% {
            border-radius: 30% 70% 60% 40% / 40% 60% 30% 70%;
            transform: scale(1.05) rotate(5deg);
        }

        100% {
            border-radius: 60% 40% 30% 70% / 70% 30% 70% 30%;
            transform: scale(1) rotate(0deg);
        }
    }

    body.dark-mode .about-image-harmoni {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }
</style>

<section id="tentangKamiPertanianHarmoni" class="section-ecosymphony">
    <div class="container">
        <div class="section-title-ecosymphony" data-aos="fade-up">
            <h2>Filosofi <span style="color:var(--secondary-eco-farm);">EcoSymphony</span></h2>
            <p class="subtitle-ecosymphony">Menyelaraskan Langkah dengan Alam untuk Pertanian yang Berkelanjutan dan Menyejahterakan.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-6 about-content-harmoni" data-aos="fade-right" data-aos-duration="900">
                <h3>Harmoni Pertanian, Kehidupan, dan Lingkungan.</h3>
                <p class="philosophy-quote">
                    "Di EcoSymphony Farm, kami percaya bahwa bumi adalah mitra, bukan sumber daya yang dieksploitasi. Setiap benih yang kami tanam adalah nada dalam simfoni alam yang berkelanjutan."
                </p>
                <p>
                    Sejak awal, EcoSymphony Farm dibangun di atas prinsip-prinsip ekologis yang mendalam. Kami mengintegrasikan kearifan tradisional dengan inovasi modern untuk menciptakan sistem pertanian yang tidak hanya produktif tetapi juga memulihkan dan memperkaya tanah tempat kami berpijak.
                </p>
                <p>
                    Kami berkomitmen untuk transparansi penuh, dari ladang hingga ke tangan Anda, memastikan bahwa setiap produk yang Anda nikmati adalah hasil dari praktik yang etis dan penuh cinta terhadap alam.
                </p>
            </div>
            <div class="col-lg-6 about-image-harmoni-wrapper" data-aos="fade-left" data-aos-duration="900" data-aos-delay="100">
                <img src="https://placehold.co/550x450/F5F5F0/556B2F?text=Ladang+Organik+EcoSymphony&font=lora" alt="[Gambar Ladang Organik EcoSymphony yang Indah]" class="img-fluid about-image-harmoni">
            </div>
        </div>

        <div class="values-grid-harmoni row gy-4 mt-5 pt-3">
            <div class="col-md-12 section-title-ecosymphony text-center" data-aos="fade-up" data-aos-delay="150">
                <h3 style="font-size: 2.2rem; color: var(--primary-eco-farm);">Nilai Inti Kami</h3>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="value-item-harmoni">
                    <div class="value-icon"><i class="fas fa-seedling"></i></div>
                    <h5>Organik Murni</h5>
                    <p>Tanpa pestisida, tanpa GMO. Hanya kebaikan alami dari tanah yang sehat.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-delay="300">
                <div class="value-item-harmoni">
                    <div class="value-icon"><i class="fas fa-recycle"></i></div>
                    <h5>Siklus Berkelanjutan</h5>
                    <p>Mengelola limbah menjadi kompos, menjaga siklus nutrisi alami tetap berjalan.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="value-item-harmoni">
                    <div class="value-icon"><i class="fas fa-users"></i></div>
                    <h5>Kesejahteraan Komunitas</h5>
                    <p>Memberdayakan petani lokal dan membangun ekosistem yang adil dan suportif.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in-up" data-aos-delay="500">
                <div class="value-item-harmoni">
                    <div class="value-icon"><i class="fas fa-hand-holding-heart"></i></div>
                    <h5>Cinta Pada Alam</h5>
                    <p>Setiap tindakan kami didasari oleh rasa hormat dan cinta terhadap Ibu Pertiwi.</p>
                </div>
            </div>
        </div>
    </div>
</section>