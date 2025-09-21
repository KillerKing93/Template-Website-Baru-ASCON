<?php // File: components/about_gentle.php 
?>
<style>
    /* Gentle About Us Component Styles */
    #aboutGentle {
        background-color: var(--bg-light);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #aboutGentle {
        background-color: var(--bg-dark);
    }

    .about-image-gentle {
        border-radius: 15px;
        /* Sudut lebih bulat */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .about-image-gentle:hover {
        transform: scale(1.03);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
    }

    body.dark-mode .about-image-gentle {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    body.dark-mode .about-image-gentle:hover {
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
    }


    .about-text-gentle h3 {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 20px;
        color: var(--primary-calm);
        /* Warna judul yang tenang */
    }

    body.dark-mode .about-text-gentle h3 {
        color: var(--accent-calm);
    }

    .about-text-gentle p {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #495057;
        /* Warna teks konten */
        margin-bottom: 15px;
        transition: color 0.3s ease;
    }

    body.dark-mode .about-text-gentle p {
        color: #ced4da;
        /* Warna teks konten di dark mode */
    }

    .about-features-list {
        list-style: none;
        padding-left: 0;
        margin-top: 25px;
    }

    .about-features-list li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
        font-size: 1rem;
    }

    .about-features-list i {
        color: var(--secondary-calm);
        /* Warna ikon fitur */
        font-size: 1.3rem;
        margin-right: 12px;
        margin-top: 3px;
        /* Penyesuaian vertikal */
        transition: color 0.3s ease;
    }

    body.dark-mode .about-features-list i {
        color: var(--accent-calm);
        opacity: 0.9;
    }
</style>

<section id="aboutGentle" class="section-calm">
    <div class="container">
        <div class="section-title-calm" data-aos="fade-up">
            <h2>Tentang Kami</h2>
            <p class="subtitle-calm">Mengenal Lebih Dekat Filosofi dan Pendekatan Kami dalam Melayani Anda.</p>
        </div>

        <div class="row align-items-center gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="https://placehold.co/600x450/F4A261/212529?text=Tim+Harmoni+Berkolaborasi" alt="[Gambar Tim Harmoni sedang Berkolaborasi]" class="img-fluid about-image-gentle">
            </div>
            <div class="col-lg-6 about-text-gentle" data-aos="fade-left" data-aos-delay="200">
                <h3>Dedikasi Kami untuk Ketenangan Digital Anda</h3>
                <p>
                    Di [NamaBisnis Anda], kami percaya bahwa teknologi seharusnya membawa kemudahan dan ketenangan, bukan kerumitan. Kami adalah tim profesional yang berdedikasi untuk menyediakan solusi digital yang intuitif, andal, dan dirancang dengan cermat untuk memenuhi kebutuhan spesifik Anda.
                </p>
                <p>
                    Pendekatan kami berpusat pada pemahaman mendalam terhadap visi Anda, dikombinasikan dengan keahlian teknis dan komitmen terhadap kualitas.
                </p>
                <ul class="about-features-list">
                    <li><i class="fas fa-check-circle"></i> Solusi yang Dirancang Khusus dan Personal</li>
                    <li><i class="fas fa-handshake"></i> Kemitraan yang Transparan dan Kolaboratif</li>
                    <li><i class="fas fa-heart"></i> Komitmen pada Kepuasan dan Kepercayaan Klien</li>
                    <li><i class="fas fa-seedling"></i> Pertumbuhan Berkelanjutan Melalui Inovasi yang Bijaksana</li>
                </ul>
            </div>
        </div>
    </div>
</section>