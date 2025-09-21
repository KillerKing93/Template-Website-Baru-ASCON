<?php // File: components/about_detailed.php 
?>
<style>
    /* Detailed About Us Component Styles */
    #aboutDetailed {
        background-color: #FFFFFF;
        /* Latar belakang putih bersih */
    }

    #aboutDetailed .content h3 {
        font-weight: 700;
        font-size: 2.5rem;
        color: #2C3E50;
        margin-bottom: 20px;
    }

    #aboutDetailed .content .fst-italic {
        /* Untuk sub-heading atau kutipan */
        color: #555;
        margin-bottom: 25px;
        font-size: 1.1rem;
    }

    #aboutDetailed .content ul {
        list-style: none;
        padding: 0;
    }

    #aboutDetailed .content ul li {
        padding-left: 30px;
        position: relative;
        margin-bottom: 15px;
        font-size: 1.05rem;
    }

    #aboutDetailed .content ul i {
        position: absolute;
        left: 0;
        top: 2px;
        font-size: 20px;
        color: #007BFF;
        /* Warna ikon */
    }

    #aboutDetailed .content p:last-child {
        margin-bottom: 0;
    }

    #aboutDetailed .about-image-container {
        position: relative;
        min-height: 400px;
        /* Pastikan ada ruang untuk gambar */
    }

    #aboutDetailed .about-image {
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(44, 62, 80, 0.15);
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    #aboutDetailed .about-image:hover {
        transform: scale(1.03);
        box-shadow: 0 15px 40px rgba(44, 62, 80, 0.2);
    }

    /* Tambahan untuk efek visual pada gambar */
    #aboutDetailed .about-image-container::before {
        content: '';
        position: absolute;
        left: -20px;
        top: -20px;
        width: 80%;
        height: 80%;
        background: rgba(0, 123, 255, 0.07);
        /* Warna aksen transparan */
        z-index: -1;
        /* Di belakang gambar */
        border-radius: 10px;
        transition: all 0.4s ease;
    }

    #aboutDetailed .about-image-container:hover::before {
        left: -10px;
        top: -10px;
        width: 85%;
        height: 85%;
    }
</style>

<section id="aboutDetailed" class="section section-light">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tentang Kami</h2>
        </div>
        <p class="section-subtitle">Lebih dari sekadar penyedia layanan, kami adalah mitra pertumbuhan Anda yang berdedikasi untuk kesuksesan bersama.</p>

        <div class="row">
            <div class="col-lg-6 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Misi Kami Adalah Memberdayakan Inovasi Digital Anda</h3>
                <p class="fst-italic">
                    Dengan semangat kolaborasi dan keahlian mendalam, kami berkomitmen untuk menghadirkan solusi yang tidak hanya memenuhi, tetapi melampaui ekspektasi.
                </p>
                <ul>
                    <li><i class="fas fa-check-double"></i> Fokus pada solusi yang berpusat pada pengguna dan hasil yang terukur.</li>
                    <li><i class="fas fa-check-double"></i> Mengadopsi teknologi terkini untuk memberikan keunggulan kompetitif.</li>
                    <li><i class="fas fa-check-double"></i> Membangun kemitraan jangka panjang berdasarkan kepercayaan dan transparansi.</li>
                </ul>
                <p>
                    Sejak didirikan, [NamaBisnis Anda] telah membantu berbagai klien dari beragam industri untuk bertransformasi dan berkembang di lanskap digital yang terus berubah. Kami percaya bahwa setiap tantangan adalah peluang untuk berinovasi.
                </p>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center about-image-container" data-aos="fade-left" data-aos-delay="200">
                <img src="https://placehold.co/600x450/007BFF/FFFFFF?text=Tim+Kolaboratif+Kami" class="img-fluid about-image" alt="[Gambar Tim Kolaboratif Kami]">
            </div>
        </div>

    </div>
</section>