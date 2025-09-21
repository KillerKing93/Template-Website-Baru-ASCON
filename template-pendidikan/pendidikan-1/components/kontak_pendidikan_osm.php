<?php // File: components/kontak_pendidikan_osm.php 
?>
<style>
    /* Kontak Pendidikan OSM Styles */
    #kontakPendidikanOsm {
        background-color: var(--bg-light-edu1);
        /* Default light */
        padding-bottom: 0;
        /* Map akan mengisi bagian bawah */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPendidikanOsm {
        background-color: var(--bg-dark-edu1);
    }

    .contact-form-edu {
        background-color: var(--card-bg-light-edu1);
        padding: 35px 40px;
        border-radius: 10px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        border: 1px solid var(--border-light-edu1);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-form-edu {
        background-color: var(--card-bg-dark-edu1);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark-edu1);
    }

    .contact-form-edu h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-edu1);
        text-align: center;
    }

    body.dark-mode .contact-form-edu h3 {
        color: var(--primary-edu1-dark);
    }

    .contact-form-edu .form-control {
        border-radius: 6px;
        padding: 10px 15px;
        font-size: 0.95rem;
        font-family: 'Merriweather Sans', sans-serif;
        border: 1px solid var(--border-light-edu1);
        background-color: #fff;
        color: var(--text-light-edu1);
        transition: all 0.3s ease;
    }

    .contact-form-edu .form-control:focus {
        border-color: var(--primary-edu1);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-edu1-rgb, 52, 152, 219), 0.25);
    }

    body.dark-mode .contact-form-edu .form-control {
        background-color: var(--bg-dark-edu1);
        border-color: var(--border-dark-edu1);
        color: var(--text-dark-edu1);
    }

    body.dark-mode .contact-form-edu .form-control:focus {
        border-color: var(--primary-edu1-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-edu1-dark-rgb, 93, 173, 226), 0.25);
    }

    .contact-form-edu .form-label {
        font-weight: 600;
        color: var(--muted-text-light-edu1);
        font-size: 0.9rem;
        font-family: 'Poppins', sans-serif;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-edu .form-label {
        color: var(--muted-text-dark-edu1);
    }

    .contact-form-edu .btn-submit-edu {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
    }

    .contact-details-edu .info-box-edu {
        display: flex;
        align-items: flex-start;
        padding: 20px;
        background-color: var(--card-bg-light-edu1);
        border-radius: 8px;
        margin-bottom: 20px;
        border-left: 3px solid var(--secondary-edu1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-details-edu .info-box-edu {
        background-color: var(--card-bg-dark-edu1);
        border-left-color: var(--secondary-edu1-dark);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .contact-details-edu .info-box-edu:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 18px rgba(241, 196, 15, 0.1);
        /* var(--secondary-edu1) dengan alpha */
    }

    body.dark-mode .contact-details-edu .info-box-edu:hover {
        box-shadow: 0 6px 18px rgba(243, 156, 18, 0.15);
        /* var(--secondary-edu1-dark) dengan alpha */
    }

    .contact-details-edu .info-box-edu i {
        font-size: 1.8rem;
        color: var(--secondary-edu1);
        margin-right: 18px;
        width: 30px;
        line-height: 1;
        margin-top: 3px;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-details-edu .info-box-edu i {
        color: var(--secondary-edu1-dark);
    }

    .contact-details-edu .info-box-edu h5 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .contact-details-edu .info-box-edu p,
    .contact-details-edu .info-box-edu p a {
        font-size: 0.95rem;
        color: var(--muted-text-light-edu1);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details-edu .info-box-edu p a:hover {
        color: var(--primary-edu1);
    }

    body.dark-mode .contact-details-edu .info-box-edu p,
    body.dark-mode .contact-details-edu .info-box-edu p a {
        color: var(--muted-text-dark-edu1);
    }

    body.dark-mode .contact-details-edu .info-box-edu p a:hover {
        color: var(--primary-edu1-dark);
    }

    #osmMapContainerPendidikan {
        height: 480px;
        width: 100%;
        margin-top: 50px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid var(--border-light-edu1);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerPendidikan {
        border-color: var(--border-dark-edu1);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
    }

    body.dark-mode .leaflet-tile-pane.dark-tiles-pendidikan {
        filter: grayscale(1) invert(1) brightness(0.9) contrast(0.9) hue-rotate(10deg);
    }
</style>

<section id="kontakPendidikanOsm" class="section-pendidikan">
    <div class="container">
        <div class="section-title-pendidikan" data-aos="fade-up">
            <h2>Hubungi <span class="highlight-accent-edu">Kami</span></h2>
            <div class="title-deco-line-edu"></div>
            <p class="subtitle-pendidikan">Kami Siap Membantu Anda. Sampaikan Pertanyaan atau Jadwalkan Kunjungan.</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                <div class="contact-form-edu">
                    <h3>Formulir Kontak</h3>
                    <form action="forms/contact_pendidikan.php" method="post" role="form" class="php-email-form-pendidikan">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameEdu" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name_edu" class="form-control" id="contactNameEdu" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailEdu" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="email_edu" id="contactEmailEdu" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectEdu" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject_edu" id="contactSubjectEdu" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageEdu" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" name="message_edu" rows="6" id="contactMessageEdu" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Terima kasih!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-edu-primary btn-submit-edu">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-edu" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <h3 style="font-weight:700; margin-bottom:25px; color: var(--primary-edu1); transition: color 0.3s ease;" class="contact-main-title-edu text-lg-start text-center">Informasi Institusi</h3>
                <div class="info-box-edu">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h5>Alamat Kampus:</h5>
                        <p>Jl. Pendidikan No. 123, Kota Pelajar, Indonesia</p>
                    </div>
                </div>
                <div class="info-box-edu">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h5>Email Admisi:</h5>
                        <p><a href="mailto:admisi@namainstitusi.ac.id">admisi@namainstitusi.ac.id</a></p>
                    </div>
                </div>
                <div class="info-box-edu">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h5>Telepon Kantor:</h5>
                        <p><a href="tel:+62274555123">(0274) 555-123</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div id="osmMapContainerPendidikan" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesPendidikan = [-7.7956, 110.3695]; // Contoh: Yogyakarta
            const mapZoomLevelPendidikan = 14;
            let osmMapPendidikan;

            function initOrUpdateMapPendidikan(theme) {
                const mapContainer = document.getElementById('osmMapContainerPendidikan');
                if (!mapContainer) return;

                if (osmMapPendidikan) {
                    osmMapPendidikan.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) {
                            osmMapPendidikan.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapPendidikan = L.map('osmMapContainerPendidikan').setView(mapCoordinatesPendidikan, mapZoomLevelPendidikan);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapPendidikan.getPane('tilePane');

                if (theme === 'dark') {
                    if (tilePane) tilePane.classList.add('dark-tiles-pendidikan');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-pendidikan');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapPendidikan);

                if (!osmMapPendidikan.hasLayer(L.marker)) {
                    L.marker(mapCoordinatesPendidikan).addTo(osmMapPendidikan)
                        .bindPopup('<b>[Nama Institusi Anda]</b><br>Jl. Pendidikan No. 123.')
                        .openPopup();
                }
            }

            const currentThemePendidikan = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapPendidikan(currentThemePendidikan);

            // Komentar JavaScript: Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedPendidikan', function(e) {
                initOrUpdateMapPendidikan(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for pendidikan cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerPendidikan');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat.</p>';
            }
        }
    });
</script>