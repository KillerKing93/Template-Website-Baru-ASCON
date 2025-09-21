<?php // File: components/jaringan_alumni_global_pendidikan.php 
?>
<style>
    /* Jaringan Alumni Global Pendidikan Styles */
    #jaringanAlumniGlobalPendidikan {
        background-color: var(--card-bg-light-edu4);
        /* Latar berbeda dari body */
        border-top: 1px solid var(--border-light-edu4);
        border-bottom: 1px solid var(--border-light-edu4);
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    body.dark-mode #jaringanAlumniGlobalPendidikan {
        background-color: var(--card-bg-dark-edu4);
        border-top-color: var(--border-dark-edu4);
        border-bottom-color: var(--border-dark-edu4);
    }

    .alumni-network-content h3 {
        font-size: 2.5rem;
        font-weight: 700;
        /* Orbitron sudah bold */
        margin-bottom: 20px;
        color: var(--primary-innovate);
        line-height: 1.3;
    }

    body.dark-mode .alumni-network-content h3 {
        color: var(--primary-innovate-dark);
    }

    .alumni-network-content .network-intro {
        font-family: 'Inter', sans-serif;
        font-size: 1.15rem;
        color: var(--muted-text-light-edu4);
        margin-bottom: 30px;
        line-height: 1.7;
    }

    body.dark-mode .alumni-network-content .network-intro {
        color: var(--muted-text-dark-edu4);
    }

    .alumni-highlight-item {
        text-align: center;
        margin-bottom: 30px;
        padding: 20px;
        /* Tambahkan padding untuk ruang efek hover */
        background-color: transparent;
        /* Hapus background agar efek pada foto lebih terlihat */
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .alumni-highlight-item:hover {
        transform: translateY(-5px);
        /* box-shadow: 0 10px 25px rgba(var(--accent-innovate-rgb,127,0,255),0.1); */
    }

    /* body.dark-mode .alumni-highlight-item:hover {
        box-shadow: 0 10px 25px rgba(var(--accent-innovate-dark-rgb,164,80,255),0.15);
    } */


    .alumni-highlight-item .alumni-photo-wrapper {
        position: relative;
        display: inline-block;
        /* Agar wrapper pas dengan gambar */
        margin-bottom: 15px;
    }

    .alumni-highlight-item img.alumni-photo {
        width: 130px;
        /* Ukuran foto alumni */
        height: 130px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid var(--accent-innovate);
        /* Border lebih tebal dan berwarna aksen */
        box-shadow: 0 6px 18px rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.2);
        transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .alumni-highlight-item:hover img.alumni-photo {
        transform: scale(1.1);
        box-shadow: 0 10px 25px rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.35);
        border-color: var(--secondary-innovate);
        /* Ganti warna border saat hover */
    }

    body.dark-mode .alumni-highlight-item img.alumni-photo {
        border-color: var(--accent-innovate-dark);
        box-shadow: 0 6px 18px rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.25);
    }

    body.dark-mode .alumni-highlight-item:hover img.alumni-photo {
        box-shadow: 0 10px 25px rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.4);
        border-color: var(--secondary-innovate-dark);
    }

    /* Efek "online status" atau "highlight ring" */
    .alumni-highlight-item .alumni-photo-wrapper::after {
        content: '';
        position: absolute;
        bottom: 5px;
        right: 5px;
        width: 20px;
        height: 20px;
        background-color: var(--primary-innovate);
        /* Warna status online */
        border: 2px solid var(--card-bg-light-edu4);
        /* Sesuaikan dengan bg card */
        border-radius: 50%;
        opacity: 0;
        transform: scale(0.5);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .alumni-highlight-item:hover .alumni-photo-wrapper::after {
        opacity: 1;
        transform: scale(1);
    }

    body.dark-mode .alumni-highlight-item .alumni-photo-wrapper::after {
        background-color: var(--primary-innovate-dark);
        border-color: var(--card-bg-dark-edu4);
    }


    .alumni-highlight-item h5.alumni-name {
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .alumni-highlight-item p.alumni-achievement {
        font-size: 0.9rem;
        color: var(--muted-text-light-edu4);
        line-height: 1.5;
        font-style: italic;
        opacity: 0;
        /* Awalnya transparan */
        transform: translateY(10px);
        /* Mulai dari bawah */
        transition: opacity 0.4s ease 0.1s, transform 0.4s ease 0.1s;
        /* Delay sedikit */
    }

    .alumni-highlight-item:hover p.alumni-achievement {
        opacity: 1;
        transform: translateY(0);
    }

    body.dark-mode .alumni-highlight-item p.alumni-achievement {
        color: var(--muted-text-dark-edu4);
    }

    .alumni-map-wrapper {
        height: 400px;
        background-color: var(--bg-light-edu4);
        border-radius: 10px;
        border: 1px solid var(--border-light-edu4);
        margin-top: 20px;
        position: relative;
        overflow: hidden;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .alumni-map-wrapper:hover {
        transform: scale(1.01);
        /* Sedikit zoom pada wrapper peta */
        box-shadow: 0 0 25px rgba(var(--primary-innovate-rgb, 0, 169, 224), 0.2);
    }

    body.dark-mode .alumni-map-wrapper {
        background-color: var(--bg-dark-edu4);
        border-color: var(--border-dark-edu4);
    }

    body.dark-mode .alumni-map-wrapper:hover {
        box-shadow: 0 0 25px rgba(var(--primary-innovate-dark-rgb, 0, 191, 255), 0.25);
    }

    .alumni-map-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.6;
        /* Opasitas gambar peta */
        transition: opacity 0.4s ease;
    }

    .alumni-map-wrapper:hover img {
        opacity: 0.8;
        /* Opasitas bertambah saat hover */
    }

    .alumni-map-wrapper .map-overlay-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: var(--text-light-edu4);
        font-family: 'Orbitron', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        text-align: center;
        opacity: 0.7;
        transition: opacity 0.3s ease;
        pointer-events: none;
        /* Agar tidak menghalangi hover pada wrapper */
    }

    body.dark-mode .alumni-map-wrapper .map-overlay-text {
        color: var(--text-dark-edu4);
    }

    .alumni-map-wrapper:hover .map-overlay-text {
        opacity: 1;
    }
</style>

<section id="jaringanAlumniGlobalPendidikan" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="JARINGAN ALUMNI GLOBAL">JARINGAN <span class="highlight-accent-edu2" data-text="ALUMNI GLOBAL">ALUMNI GLOBAL</span></h2>
            <p class="subtitle-eduverse">Terhubung dengan Ribuan Lulusan InnovateU yang Sukses Berkarier di Seluruh Dunia.</p>
        </div>

        <div class="row align-items-center gy-5">
            <div class="col-lg-7 alumni-network-content" data-aos="fade-right" data-aos-duration="900">
                <h3>Membangun Koneksi, Membuka Peluang Tanpa Batas.</h3>
                <p class="network-intro">
                    Jaringan alumni InnovateU adalah aset berharga bagi para lulusan kami. Ini adalah komunitas global yang suportif, tempat berbagi pengalaman, pengetahuan, dan peluang karier lintas industri dan negara.
                </p>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="alumni-highlight-item">
                            <div class="alumni-photo-wrapper">
                                <img src="https://placehold.co/150x150/00A9E0/FFFFFF?text=AD" alt="[Foto Alumni Adinda Putri]" class="alumni-photo">
                            </div>
                            <h5 class="alumni-name">Adinda Putri</h5>
                            <p class="alumni-achievement">Lead Data Scientist, Quantum Analytics Corp. (Singapura)</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="alumni-highlight-item">
                            <div class="alumni-photo-wrapper">
                                <img src="https://placehold.co/150x150/FF6F61/FFFFFF?text=BK" alt="[Foto Alumni Banyu Kusuma]" class="alumni-photo">
                            </div>
                            <h5 class="alumni-name">Banyu Kusuma</h5>
                            <p class="alumni-achievement">Founder & CEO, GreenTech Solutions (Indonesia)</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="alumni-highlight-item">
                            <div class="alumni-photo-wrapper">
                                <img src="https://placehold.co/150x150/7F00FF/FFFFFF?text=CS" alt="[Foto Alumni Chloe S.]">
                            </div>
                            <h5 class="alumni-name">Chloe Sharma</h5>
                            <p class="alumni-achievement">UX Design Lead, Future Interfaces Inc. (Kanada)</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="alumni-highlight-item">
                            <div class="alumni-photo-wrapper">
                                <img src="https://placehold.co/150x150/4ECDC4/1C3F5F?text=RZ" alt="[Foto Alumni Rizky Z.]">
                            </div>
                            <h5 class="alumni-name">Rizky Zulkarnain</h5>
                            <p class="alumni-achievement">Cybersecurity Consultant, EMEA Region (Jerman)</p>
                        </div>
                    </div>
                </div>
                <div class="text-center text-lg-start mt-4" data-aos="fade-up" data-aos-delay="500">
                    <a href="#" class="btn-eduverse-primary">Gabung Komunitas Alumni</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="zoom-in-left" data-aos-duration="900" data-aos-delay="100">
                <div class="alumni-map-wrapper">
                    <img src="https://placehold.co/500x400/172A46/8892B0?text=Peta+Alumni+InnovateU&font=montserrat" alt="[Peta Persebaran Alumni Global InnovateU]">
                    <div class="map-overlay-text">Jaringan Global Kami</div>
                </div>
            </div>
        </div>
    </div>
</section>