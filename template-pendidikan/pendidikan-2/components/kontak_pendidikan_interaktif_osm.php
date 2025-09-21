<?php // File: components/kontak_pendidikan_interaktif_osm.php 
?>
<style>
    /* Kontak Pendidikan Interaktif OSM Styles */
    #kontakPendidikanInteraktifOsm {
        background-color: var(--bg-light-edu2);
        /* Default light */
        padding-bottom: 0;
        /* Map mengisi bagian bawah */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPendidikanInteraktifOsm {
        background-color: var(--bg-dark-edu2);
    }

    .contact-form-eduverse {
        background-color: var(--card-bg-light-edu2);
        padding: 35px 40px;
        border-radius: 10px;
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.07);
        border: 1px solid var(--border-light-edu2);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-form-eduverse {
        background-color: var(--card-bg-dark-edu2);
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.28);
        border-color: var(--border-dark-edu2);
    }

    .contact-form-eduverse h3 {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.9rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-edu2);
        text-align: center;
    }

    body.dark-mode .contact-form-eduverse h3 {
        color: var(--primary-edu2-dark);
    }

    .contact-form-eduverse .form-control {
        border-radius: 6px;
        padding: 12px 18px;
        font-size: 1rem;
        font-family: 'Montserrat', sans-serif;
        border: 1px solid var(--border-light-edu2);
        background-color: #fff;
        color: var(--text-light-edu2);
        transition: all 0.3s ease;
    }

    .contact-form-eduverse .form-control:focus {
        border-color: var(--accent-edu2);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-edu2-rgb, 78, 205, 196), 0.2);
    }

    body.dark-mode .contact-form-eduverse .form-control {
        background-color: var(--bg-dark-edu2);
        border-color: var(--border-dark-edu2);
        color: var(--text-dark-edu2);
    }

    body.dark-mode .contact-form-eduverse .form-control:focus {
        border-color: var(--accent-edu2-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-edu2-dark-rgb, 111, 255, 233), 0.2);
    }

    .contact-form-eduverse .form-label {
        font-weight: 600;
        color: var(--muted-text-light-edu2);
        font-size: 0.85rem;
        font-family: 'Orbitron', sans-serif;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-eduverse .form-label {
        color: var(--muted-text-dark-edu2);
    }

    .contact-form-eduverse .btn-submit-eduverse {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
    }

    .contact-details-eduverse .info-box-ev {
        display: flex;
        align-items: center;
        padding: 20px;
        background-color: transparent;
        /* Tanpa background */
        border-bottom: 1px dashed var(--border-light-edu2);
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .contact-details-eduverse .info-box-ev:last-child {
        border-bottom: none;
    }

    body.dark-mode .contact-details-eduverse .info-box-ev {
        border-bottom-color: var(--border-dark-edu2);
    }

    .contact-details-eduverse .info-box-ev i {
        font-size: 2rem;
        /* Ikon kontak */
        color: var(--accent-edu2);
        margin-right: 20px;
        width: 40px;
        text-align: center;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .contact-details-eduverse .info-box-ev:hover i {
        transform: scale(1.15);
        color: var(--secondary-edu2);
        /* Warna hover ikon */
    }

    body.dark-mode .contact-details-eduverse .info-box-ev i {
        color: var(--accent-edu2-dark);
    }

    body.dark-mode .contact-details-eduverse .info-box-ev:hover i {
        color: var(--secondary-edu2-dark);
    }

    .contact-details-eduverse .info-box-ev h5 {
        font-family: 'Orbitron', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .contact-details-eduverse .info-box-ev p,
    .contact-details-eduverse .info-box-ev p a {
        font-size: 0.95rem;
        color: var(--muted-text-light-edu2);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details-eduverse .info-box-ev p a:hover {
        color: var(--primary-edu2);
    }

    body.dark-mode .contact-details-eduverse .info-box-ev p,
    body.dark-mode .contact-details-eduverse .info-box-ev p a {
        color: var(--muted-text-dark-edu2);
    }

    body.dark-mode .contact-details-eduverse .info-box-ev p a:hover {
        color: var(--primary-edu2-dark);
    }

    #osmMapContainerEduverse {
        height: 480px;
        width: 100%;
        margin-top: 60px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid var(--border-light-edu2);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerEduverse {
        border-color: var(--border-dark-edu2);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    body.dark-mode .leaflet-tile-pane.dark-tiles-eduverse {
        filter: grayscale(1) invert(1) brightness(0.8) contrast(1.1) hue-rotate(200deg) saturate(0.2);
        /* Komentar CSS: Filter yang lebih techy/gelap untuk peta dark mode */
    }
</style>

<section id="kontakPendidikanInteraktifOsm" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="TERHUBUNG DENGAN KAMI">TERHUBUNG <span class="highlight-accent-edu2" data-text="DENGAN KAMI">DENGAN KAMI</span></h2>
            <p class="subtitle-eduverse">Jaringan EduVerse Terbuka untuk Pertanyaan, Kolaborasi, dan Pendaftaran.</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                <div class="contact-form-eduverse">
                    <h3>Kirim Pesan Digital</h3>
                    <form action="forms/contact_eduverse.php" method="post" role="form" class="php-email-form-eduverse">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameEduverse" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name_eduverse" class="form-control" id="contactNameEduverse" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailEduverse" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="email_eduverse" id="contactEmailEduverse" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectEduverse" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject_eduverse" id="contactSubjectEduverse" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageEduverse" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" name="message_eduverse" rows="6" id="contactMessageEduverse" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Tim kami akan segera menghubungi Anda!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-eduverse-primary btn-submit-eduverse">Kirim Transmisi</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-eduverse" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <h3 style="font-weight:700; margin-bottom:30px; color: var(--primary-edu2); transition: color 0.3s ease;" class="contact-main-title-eduverse text-lg-start text-center">Pusat Informasi EduVerse</h3>
                <div class="info-box-ev">
                    <i class="fas fa-university"></i>
                    <div>
                        <h5>Alamat Kampus Digital:</h5>
                        <p>EduVerse Main Hub, Sektor Gamma-9, Cyberjaya, Indonesia</p>
                    </div>
                </div>
                <div class="info-box-ev">
                    <i class="fas fa-envelope-open-text"></i>
                    <div>
                        <h5>Email Admisi & Info:</h5>
                        <p><a href="mailto:connect@eduverse.id">connect@eduverse.id</a></p>
                    </div>
                </div>
                <div class="info-box-ev">
                    <i class="fas fa-headset"></i>
                    <div>
                        <h5>Layanan Dukungan Virtual:</h5>
                        <p><a href="tel:+622199887766">(021) 9988-7766</a> (24/7)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div id="osmMapContainerEduverse" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesEduverse = [-6.229728, 106.6894312]; // Contoh: BSD City
            const mapZoomLevelEduverse = 14;
            let osmMapEduverse;

            function initOrUpdateMapEduverse(theme) {
                const mapContainer = document.getElementById('osmMapContainerEduverse');
                if (!mapContainer) return;

                if (osmMapEduverse) {
                    osmMapEduverse.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) {
                            osmMapEduverse.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapEduverse = L.map('osmMapContainerEduverse').setView(mapCoordinatesEduverse, mapZoomLevelEduverse);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapEduverse.getPane('tilePane');

                if (theme === 'dark') {
                    // Komentar JavaScript: Gunakan filter CSS untuk dark mode peta
                    if (tilePane) tilePane.classList.add('dark-tiles-eduverse');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-eduverse');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapEduverse);

                if (!osmMapEduverse.hasLayer(L.marker)) {
                    L.marker(mapCoordinatesEduverse).addTo(osmMapEduverse)
                        .bindPopup('<b>EduVerse Main Hub</b><br>Cyberjaya, Indonesia.')
                        .openPopup();
                }
            }

            const currentThemeEduverse = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapEduverse(currentThemeEduverse);

            // Komentar JavaScript: Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedEduverse', function(e) {
                initOrUpdateMapEduverse(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for EduVerse cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerEduverse');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat.</p>';
            }
        }
    });
</script>