<?php // File: components/kontak_pertanian_modern_osm.php 
?>
<style>
    /* Kontak Pertanian Modern OSM Styles */
    #kontakPertanianModernOsm {
        background-color: var(--bg-light-farm3);
        /* Default light */
        padding-bottom: 0;
        /* Map akan mengisi bagian bawah */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPertanianModernOsm {
        background-color: var(--bg-dark-farm3);
    }

    .contact-form-artistic {
        background-color: var(--card-bg-light-farm3);
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: 1px solid var(--border-light-farm3);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-form-artistic {
        background-color: var(--card-bg-dark-farm3);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        border-color: var(--border-dark-farm3);
    }

    .contact-form-artistic h3 {
        font-family: 'Teko', sans-serif;
        font-size: 2.2rem;
        /* Judul form */
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-art-farm);
        text-align: center;
    }

    body.dark-mode .contact-form-artistic h3 {
        color: var(--primary-art-farm-dark);
    }

    .contact-form-artistic .form-control {
        border-radius: 5px;
        padding: 12px 18px;
        font-size: 1rem;
        font-family: 'Poppins', sans-serif;
        border: 1px solid var(--border-light-farm3);
        background-color: #fff;
        color: var(--text-light-farm3);
        transition: all 0.3s ease;
    }

    .contact-form-artistic .form-control:focus {
        border-color: var(--accent-art-farm);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-art-farm-rgb, 3, 169, 244), 0.2);
    }

    body.dark-mode .contact-form-artistic .form-control {
        background-color: var(--bg-dark-farm3);
        /* Lebih gelap dari card */
        border-color: var(--border-dark-farm3);
        color: var(--text-dark-farm3);
    }

    body.dark-mode .contact-form-artistic .form-control:focus {
        border-color: var(--accent-art-farm-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-art-farm-dark-rgb, 79, 195, 247), 0.25);
    }

    .contact-form-artistic .form-label {
        font-weight: 600;
        color: var(--muted-text-light-farm3);
        font-size: 0.9rem;
        font-family: 'Poppins', sans-serif;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-artistic .form-label {
        color: var(--muted-text-dark-farm3);
    }

    .contact-form-artistic .btn-submit-artistic {
        width: 100%;
        padding: 12px;
        font-size: 1.1rem;
        /* Tombol submit lebih besar */
    }

    .contact-details-artistic .info-box-art {
        display: flex;
        align-items: center;
        /* Ikon dan teks sejajar tengah */
        padding: 20px;
        background-color: transparent;
        /* Tanpa background, hanya ikon dan teks */
        border-bottom: 1px dashed var(--border-light-farm3);
        /* Pemisah antar item */
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .contact-details-artistic .info-box-art:last-child {
        border-bottom: none;
    }

    body.dark-mode .contact-details-artistic .info-box-art {
        border-bottom-color: var(--border-dark-farm3);
    }

    .contact-details-artistic .info-box-art i {
        font-size: 2rem;
        /* Ikon kontak */
        color: var(--accent-art-farm);
        margin-right: 20px;
        width: 40px;
        /* Lebar tetap */
        text-align: center;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .contact-details-artistic .info-box-art:hover i {
        transform: scale(1.1) rotate(-5deg);
    }

    body.dark-mode .contact-details-artistic .info-box-art i {
        color: var(--accent-art-farm-dark);
    }

    .contact-details-artistic .info-box-art h5 {
        font-family: 'Teko', sans-serif;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 3px;
    }

    .contact-details-artistic .info-box-art p,
    .contact-details-artistic .info-box-art p a {
        font-size: 1rem;
        color: var(--muted-text-light-farm3);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details-artistic .info-box-art p a:hover {
        color: var(--primary-art-farm);
    }

    body.dark-mode .contact-details-artistic .info-box-art p,
    body.dark-mode .contact-details-artistic .info-box-art p a {
        color: var(--muted-text-dark-farm3);
    }

    body.dark-mode .contact-details-artistic .info-box-art p a:hover {
        color: var(--primary-art-farm-dark);
    }

    #osmMapContainerArtFarm {
        height: 500px;
        width: 100%;
        margin-top: 60px;
        border-radius: 10px;
        overflow: hidden;
        border: 2px solid var(--border-light-farm3);
        /* Border lebih tebal */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerArtFarm {
        border-color: var(--border-dark-farm3);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
    }

    body.dark-mode .leaflet-tile-pane.dark-tiles-art-farm {
        filter: grayscale(80%) invert(100%) contrast(110%) hue-rotate(200deg) saturate(0.5) brightness(0.9);
        /* Komentar CSS: Filter yang lebih artistik/gelap untuk peta */
    }
</style>

<section id="kontakPertanianModernOsm" class="section-artistic-farm">
    <div class="container">
        <div class="section-title-artistic-farm" data-aos="fade-up">
            <h2>TERHUBUNG <span style="color: var(--secondary-art-farm);">DENGAN KAMI</span></h2>
            <p class="subtitle-artistic-farm">Jaringan Inovasi AgriNova Terbuka untuk Kolaborasi dan Pertanyaan Anda.</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                <div class="contact-form-artistic">
                    <h3>Kirim Sinyal Digital Anda</h3>
                    <form action="forms/contact_pertanian_art.php" method="post" role="form" class="php-email-form-pertanian-art">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameArt" class="form-label">Identitas Pengirim (Nama)</label>
                                <input type="text" name="name_art" class="form-control" id="contactNameArt" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailArt" class="form-label">Alamat Jaringan (Email)</label>
                                <input type="email" class="form-control" name="email_art" id="contactEmailArt" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectArt" class="form-label">Subjek Transmisi</label>
                            <input type="text" class="form-control" name="subject_art" id="contactSubjectArt" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageArt" class="form-label">Isi Pesan Data</label>
                            <textarea class="form-control" name="message_art" rows="6" id="contactMessageArt" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim transmisi...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Transmisi berhasil diterima. Kami akan merespons segera!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-art-farm-primary btn-submit-artistic">Kirim Sinyal</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-artistic" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <h3 style="font-weight:700; margin-bottom:30px; color: var(--primary-art-farm); transition: color 0.3s ease;" class="contact-main-title-art-farm text-lg-start text-center">Pusat Komunikasi AgriNova</h3>
                <div class="info-box-art">
                    <i class="fas fa-broadcast-tower"></i>
                    <div>
                        <h5>Stasiun Utama:</h5>
                        <p>AgriNova Innovation Hub, Sektor Gamma-7, Neo Terra</p>
                    </div>
                </div>
                <div class="info-box-art">
                    <i class="fas fa-at"></i>
                    <div>
                        <h5>Kanal Email:</h5>
                        <p><a href="mailto:connect@agrinova.tech">connect@agrinova.tech</a></p>
                    </div>
                </div>
                <div class="info-box-art">
                    <i class="fas fa-satellite"></i>
                    <div>
                        <h5>Frekuensi Vokal:</h5>
                        <p><a href="tel:+622100110011">(021) 0011-0011</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0"> <?php /* Komentar PHP: Container fluid agar peta full width */ ?>
        <div id="osmMapContainerArtFarm" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesArtFarm = [-2.200000, 113.921327]; // Contoh: Kalimantan Tengah
            const mapZoomLevelArtFarm = 5;
            let osmMapArtFarm;

            function initOrUpdateMapArtFarm(theme) {
                const mapContainer = document.getElementById('osmMapContainerArtFarm');
                if (!mapContainer) return;

                if (osmMapArtFarm) {
                    osmMapArtFarm.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) {
                            osmMapArtFarm.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapArtFarm = L.map('osmMapContainerArtFarm').setView(mapCoordinatesArtFarm, mapZoomLevelArtFarm);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapArtFarm.getPane('tilePane');

                if (theme === 'dark') {
                    // Komentar JavaScript: Contoh tile layer gelap dari CartoDB (perlu cek ToS dan ketersediaan)
                    // tileUrl = 'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png';
                    // tileOptions.attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>';
                    if (tilePane) tilePane.classList.add('dark-tiles-art-farm');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-art-farm');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapArtFarm);

                if (!osmMapArtFarm.hasLayer(L.marker)) {
                    L.marker(mapCoordinatesArtFarm).addTo(osmMapArtFarm)
                        .bindPopup('<b>AgriNova Innovation Hub</b><br>Sektor Gamma-7, Neo Terra.')
                        .openPopup();
                }
            }

            const currentThemeArtFarm = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapArtFarm(currentThemeArtFarm);

            // Komentar JavaScript: Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedArtFarm', function(e) {
                initOrUpdateMapArtFarm(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for art farm cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerArtFarm');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat.</p>';
            }
        }
    });
</script>