<?php // File: components/kontak_pertanian_alami_osm.php 
?>
<style>
    /* Kontak Pertanian Alami OSM Styles */
    #kontakPertanianAlamiOsm {
        background-color: var(--bg-light-farm4);
        /* Default light */
        padding-bottom: 0;
        /* Map akan mengisi bagian bawah */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPertanianAlamiOsm {
        background-color: var(--bg-dark-farm4);
    }

    .contact-form-bio {
        background-color: var(--card-bg-light-farm4);
        padding: 35px 40px;
        border-radius: 12px;
        /* Sudut lebih bulat */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: 1px solid var(--border-light-farm4);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-form-bio {
        background-color: var(--card-bg-dark-farm4);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        border-color: var(--border-dark-farm4);
    }

    .contact-form-bio h3 {
        font-family: 'Nunito', sans-serif;
        font-size: 2rem;
        font-weight: 800;
        margin-bottom: 25px;
        color: var(--primary-bio-farm);
        text-align: center;
    }

    body.dark-mode .contact-form-bio h3 {
        color: var(--primary-bio-farm-dark);
    }

    .contact-form-bio .form-control {
        border-radius: 8px;
        padding: 12px 18px;
        font-size: 1rem;
        font-family: 'Roboto Slab', serif;
        border: 1px solid var(--border-light-farm4);
        background-color: #fff;
        color: var(--text-light-farm4);
        transition: all 0.3s ease;
    }

    .contact-form-bio .form-control:focus {
        border-color: var(--primary-bio-farm);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-bio-farm-rgb, 56, 142, 60), 0.2);
    }

    body.dark-mode .contact-form-bio .form-control {
        background-color: var(--bg-dark-farm4);
        border-color: var(--border-dark-farm4);
        color: var(--text-dark-farm4);
    }

    body.dark-mode .contact-form-bio .form-control:focus {
        border-color: var(--primary-bio-farm-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-bio-farm-dark-rgb, 102, 187, 106), 0.2);
    }

    .contact-form-bio .form-label {
        font-weight: 600;
        color: var(--muted-text-light-farm4);
        font-size: 0.9rem;
        font-family: 'Nunito', sans-serif;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-bio .form-label {
        color: var(--muted-text-dark-farm4);
    }

    .contact-form-bio .btn-submit-bio {
        width: 100%;
        padding: 12px;
        font-size: 1.05rem;
    }

    .contact-details-bio .info-box-bio {
        display: flex;
        align-items: center;
        /* Ikon dan teks sejajar tengah */
        padding: 20px;
        background-color: transparent;
        /* Tanpa background, hanya ikon dan teks */
        border-bottom: 1px solid var(--border-light-farm4);
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .contact-details-bio .info-box-bio:last-child {
        border-bottom: none;
    }

    body.dark-mode .contact-details-bio .info-box-bio {
        border-bottom-color: var(--border-dark-farm4);
    }

    .contact-details-bio .info-box-bio i {
        font-size: 2rem;
        /* Ikon kontak */
        color: var(--secondary-bio-farm);
        /* Warna aksen kuning */
        margin-right: 20px;
        width: 40px;
        text-align: center;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .contact-details-bio .info-box-bio:hover i {
        transform: scale(1.1);
    }

    body.dark-mode .contact-details-bio .info-box-bio i {
        color: var(--secondary-bio-farm-dark);
    }

    .contact-details-bio .info-box-bio h5 {
        font-family: 'Nunito', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .contact-details-bio .info-box-bio p,
    .contact-details-bio .info-box-bio p a {
        font-size: 1rem;
        color: var(--muted-text-light-farm4);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details-bio .info-box-bio p a:hover {
        color: var(--primary-bio-farm);
    }

    body.dark-mode .contact-details-bio .info-box-bio p,
    body.dark-mode .contact-details-bio .info-box-bio p a {
        color: var(--muted-text-dark-farm4);
    }

    body.dark-mode .contact-details-bio .info-box-bio p a:hover {
        color: var(--primary-bio-farm-dark);
    }

    #osmMapContainerBioFarm {
        height: 480px;
        width: 100%;
        margin-top: 60px;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--border-light-farm4);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.09);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerBioFarm {
        border-color: var(--border-dark-farm4);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    body.dark-mode .leaflet-tile-pane.dark-tiles-bio-farm {
        filter: grayscale(1) brightness(0.8) contrast(1.2) sepia(0.1);
        /* Komentar CSS: Filter yang lebih kalem untuk peta dark mode */
    }
</style>

<section id="kontakPertanianAlamiOsm" class="section-bio-farm">
    <div class="container">
        <div class="section-title-bio-farm" data-aos="fade-up">
            <h2>Terhubung <span class="highlight-accent-bio">dengan Alam</span>, Terhubung dengan Kami</h2>
            <p class="subtitle-bio-farm">Kami Siap Menyambut Kunjungan, Pertanyaan, dan Peluang Kolaborasi.</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                <div class="contact-form-bio">
                    <h3>Kirim Pesan Langsung</h3>
                    <form action="forms/contact_bio_farm.php" method="post" role="form" class="php-email-form-bio-farm">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameBio" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name_bio" class="form-control" id="contactNameBio" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailBio" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="email_bio" id="contactEmailBio" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectBio" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject_bio" id="contactSubjectBio" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageBio" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" name="message_bio" rows="6" id="contactMessageBio" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Kami akan segera menghubungi Anda!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-bio-farm-primary btn-submit-bio">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-bio" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <h3 style="font-weight:800; margin-bottom:30px; color: var(--primary-bio-farm); transition: color 0.3s ease;" class="contact-main-title-bio-farm text-lg-start text-center">Informasi BioFarm Lestari</h3>
                <div class="info-box-bio">
                    <i class="fas fa-map-pin"></i>
                    <div>
                        <h5>Lokasi Kebun & Pusat Edukasi:</h5>
                        <p>Dusun Asri, Jl. Bio Lestari No. 10, Kec. Alam Indah, Kab. Sejuk, Indonesia</p>
                    </div>
                </div>
                <div class="info-box-bio">
                    <i class="fas fa-at"></i>
                    <div>
                        <h5>Email Kami:</h5>
                        <p><a href="mailto:info@biofarmlestari.id">info@biofarmlestari.id</a></p>
                    </div>
                </div>
                <div class="info-box-bio">
                    <i class="fas fa-mobile-alt"></i>
                    <div>
                        <h5>Telepon / WhatsApp:</h5>
                        <p><a href="tel:+6289911223344">+62 899-1122-3344</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div id="osmMapContainerBioFarm" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesBioFarm = [-7.7956, 110.3695]; // Contoh: Yogyakarta
            const mapZoomLevelBioFarm = 12;
            let osmMapBioFarm;

            function initOrUpdateMapBioFarm(theme) {
                const mapContainer = document.getElementById('osmMapContainerBioFarm');
                if (!mapContainer) return;

                if (osmMapBioFarm) {
                    osmMapBioFarm.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) {
                            osmMapBioFarm.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapBioFarm = L.map('osmMapContainerBioFarm').setView(mapCoordinatesBioFarm, mapZoomLevelBioFarm);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapBioFarm.getPane('tilePane');

                if (theme === 'dark') {
                    // Komentar JavaScript: Bisa menggunakan tile layer gelap atau filter CSS
                    if (tilePane) tilePane.classList.add('dark-tiles-bio-farm');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-bio-farm');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapBioFarm);

                if (!osmMapBioFarm.hasLayer(L.marker)) {
                    L.marker(mapCoordinatesBioFarm).addTo(osmMapBioFarm)
                        .bindPopup('<b>BioFarm Lestari</b><br>Pusat Pertanian Terintegrasi.')
                        .openPopup();
                }
            }

            const currentThemeBioFarm = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapBioFarm(currentThemeBioFarm);

            // Komentar JavaScript: Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedBioFarm', function(e) {
                initOrUpdateMapBioFarm(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for bio farm cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerBioFarm');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat.</p>';
            }
        }
    });
</script>