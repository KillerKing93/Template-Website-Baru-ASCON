<?php // File: components/kontak_pendidikan_tech_osm.php 
?>
<style>
    /* Kontak Pendidikan Tech OSM Styles */
    #kontakPendidikanTechOsm {
        background-color: var(--bg-light-edu4);
        /* Default light */
        padding-bottom: 0;
        /* Map akan mengisi bagian bawah */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPendidikanTechOsm {
        background-color: var(--bg-dark-edu4);
    }

    .contact-form-tech {
        background-color: var(--card-bg-light-edu4);
        padding: 35px 40px;
        border-radius: 10px;
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.07);
        border: 1px solid var(--border-light-edu4);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-form-tech {
        background-color: var(--card-bg-dark-edu4);
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.28);
        border-color: var(--border-dark-edu4);
    }

    .contact-form-tech h3 {
        font-family: 'Orbitron', sans-serif;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-innovate);
        text-align: center;
    }

    body.dark-mode .contact-form-tech h3 {
        color: var(--primary-innovate-dark);
    }

    .contact-form-tech .form-control {
        border-radius: 6px;
        padding: 12px 18px;
        font-size: 1rem;
        font-family: 'Inter', sans-serif;
        border: 1px solid var(--border-light-edu4);
        background-color: #fff;
        color: var(--text-light-edu4);
        transition: all 0.3s ease;
    }

    .contact-form-tech .form-control:focus {
        border-color: var(--accent-innovate);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-innovate-rgb, 127, 0, 255), 0.2);
    }

    body.dark-mode .contact-form-tech .form-control {
        background-color: var(--bg-dark-edu4);
        border-color: var(--border-dark-edu4);
        color: var(--text-dark-edu4);
    }

    body.dark-mode .contact-form-tech .form-control:focus {
        border-color: var(--accent-innovate-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-innovate-dark-rgb, 164, 80, 255), 0.2);
    }

    .contact-form-tech .form-label {
        font-weight: 600;
        color: var(--muted-text-light-edu4);
        font-size: 0.85rem;
        font-family: 'Orbitron', sans-serif;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-tech .form-label {
        color: var(--muted-text-dark-edu4);
    }

    .contact-form-tech .btn-submit-tech {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
    }

    .contact-details-tech .info-box-tech {
        display: flex;
        align-items: center;
        padding: 20px;
        background-color: transparent;
        border-left: 3px solid var(--secondary-innovate);
        margin-bottom: 25px;
        transition: border-color 0.3s ease;
    }

    body.dark-mode .contact-details-tech .info-box-tech {
        border-left-color: var(--secondary-innovate-dark);
    }

    .contact-details-tech .info-box-tech i {
        font-size: 2.2rem;
        color: var(--secondary-innovate);
        margin-right: 20px;
        width: 40px;
        text-align: center;
        flex-shrink: 0;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .contact-details-tech .info-box-tech:hover i {
        transform: scale(1.1);
    }

    body.dark-mode .contact-details-tech .info-box-tech i {
        color: var(--secondary-innovate-dark);
    }

    .contact-details-tech .info-box-tech h5 {
        font-family: 'Rajdhani', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .contact-details-tech .info-box-tech p,
    .contact-details-tech .info-box-tech p a {
        font-size: 1rem;
        color: var(--muted-text-light-edu4);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details-tech .info-box-tech p a:hover {
        color: var(--primary-innovate);
    }

    body.dark-mode .contact-details-tech .info-box-tech p,
    body.dark-mode .contact-details-tech .info-box-tech p a {
        color: var(--muted-text-dark-edu4);
    }

    body.dark-mode .contact-details-tech .info-box-tech p a:hover {
        color: var(--primary-innovate-dark);
    }

    #osmMapContainerInnovateU {
        height: 480px;
        width: 100%;
        margin-top: 60px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid var(--border-light-edu4);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerInnovateU {
        border-color: var(--border-dark-edu4);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    body.dark-mode .leaflet-tile-pane.dark-tiles-innovateu {
        filter: grayscale(0.8) invert(1) contrast(0.9) hue-rotate(190deg) saturate(0.3) brightness(0.9);
    }
</style>

<section id="kontakPendidikanTechOsm" class="section-eduverse">
    <div class="container">
        <div class="section-title-eduverse" data-aos="fade-up">
            <h2 data-text="HUBUNGI KAMI">HUBUNGI <span class="highlight-accent-edu2" data-text="KAMI">KAMI</span></h2>
            <p class="subtitle-eduverse">Tim InnovateU Siap Membantu Anda. Jangkau Kami Melalui Kanal Berikut.</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                <div class="contact-form-tech">
                    <h3>Kirim Pesan Digital</h3>
                    <form action="forms/contact_innovateu.php" method="post" role="form" class="php-email-form-innovateu">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameInnovateU" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name_innovateu" class="form-control" id="contactNameInnovateU" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailInnovateU" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="email_innovateu" id="contactEmailInnovateU" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectInnovateU" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject_innovateu" id="contactSubjectInnovateU" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageInnovateU" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" name="message_innovateu" rows="6" id="contactMessageInnovateU" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Tim kami akan segera menghubungi Anda!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-eduverse-primary btn-submit-tech">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-tech" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <h3 style="font-weight:700; margin-bottom:25px; color: var(--primary-innovate); transition: color 0.3s ease;" class="contact-main-title-innovateu text-lg-start text-center">Pusat Informasi</h3>
                <div class="info-box-tech">
                    <i class="fas fa-map-pin"></i>
                    <div>
                        <h5>Lokasi Kampus Utama:</h5>
                        <p>InnovateU Tower, TechnoPark District, CyberCity, Indonesia</p>
                    </div>
                </div>
                <div class="info-box-tech">
                    <i class="fas fa-envelope-open"></i>
                    <div>
                        <h5>Email Admisi & Info:</h5>
                        <p><a href="mailto:hello@innovateu.id">hello@innovateu.id</a></p>
                    </div>
                </div>
                <div class="info-box-tech">
                    <i class="fas fa-headset"></i>
                    <div>
                        <h5>Layanan Mahasiswa:</h5>
                        <p><a href="tel:+622111223344">(021) 1122-3344</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div id="osmMapContainerInnovateU" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesInnovateU = [-6.21462, 106.84513]; // Contoh: Jakarta
            const mapZoomLevelInnovateU = 13;
            let osmMapInnovateU;

            function initOrUpdateMapInnovateU(theme) {
                const mapContainer = document.getElementById('osmMapContainerInnovateU');
                if (!mapContainer) return;

                if (osmMapInnovateU) {
                    osmMapInnovateU.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) {
                            osmMapInnovateU.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapInnovateU = L.map('osmMapContainerInnovateU').setView(mapCoordinatesInnovateU, mapZoomLevelInnovateU);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapInnovateU.getPane('tilePane');

                if (theme === 'dark') {
                    if (tilePane) tilePane.classList.add('dark-tiles-innovateu');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-innovateu');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapInnovateU);

                if (!osmMapInnovateU.hasLayer(L.marker)) { // Komentar PHP: Cek sederhana apakah marker sudah ada
                    L.marker(mapCoordinatesInnovateU).addTo(osmMapInnovateU)
                        .bindPopup('<b>InnovateU Campus</b><br>TechnoPark District, CyberCity.')
                        .openPopup();
                }
            }

            const currentThemeInnovateU = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapInnovateU(currentThemeInnovateU);

            // Komentar JavaScript: Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedInnovateU', function(e) {
                initOrUpdateMapInnovateU(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for InnovateU cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerInnovateU');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat.</p>';
            }
        }
    });
</script>