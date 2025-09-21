<?php // File: components/kontak_pendidikan_klasik_osm.php 
?>
<style>
    /* Kontak Pendidikan Klasik OSM Styles */
    #kontakPendidikanKlasikOsm {
        background-color: var(--bg-light-edu3);
        /* Default light */
        padding-bottom: 0;
        /* Map akan mengisi bagian bawah */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPendidikanKlasikOsm {
        background-color: var(--bg-dark-edu3);
    }

    .contact-form-classic {
        background-color: var(--card-bg-light-edu3);
        padding: 35px 40px;
        border-radius: 8px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        border: 1px solid var(--border-light-edu3);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-form-classic {
        background-color: var(--card-bg-dark-edu3);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark-edu3);
    }

    .contact-form-classic h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-illumina);
        text-align: center;
    }

    body.dark-mode .contact-form-classic h3 {
        color: var(--primary-illumina-dark);
    }

    .contact-form-classic .form-control {
        border-radius: 6px;
        padding: 10px 15px;
        font-size: 0.95rem;
        font-family: 'Open Sans', sans-serif;
        border: 1px solid var(--border-light-edu3);
        background-color: #fff;
        color: var(--text-light-edu3);
        transition: all 0.3s ease;
    }

    .contact-form-classic .form-control:focus {
        border-color: var(--primary-illumina);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-illumina-rgb, 139, 69, 19), 0.2);
    }

    body.dark-mode .contact-form-classic .form-control {
        background-color: var(--bg-dark-edu3);
        border-color: var(--border-dark-edu3);
        color: var(--text-dark-edu3);
    }

    body.dark-mode .contact-form-classic .form-control:focus {
        border-color: var(--primary-illumina-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-illumina-dark-rgb, 160, 82, 45), 0.2);
    }

    /* Komentar CSS: Variabel RGB untuk primary-illumina-dark */
    body.dark-mode {
        --primary-illumina-dark-rgb: 160, 82, 45;
    }

    .contact-form-classic .form-label {
        font-weight: 600;
        color: var(--muted-text-light-edu3);
        font-size: 0.9rem;
        font-family: 'Open Sans', sans-serif;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-classic .form-label {
        color: var(--muted-text-dark-edu3);
    }

    .contact-form-classic .btn-submit-classic {
        width: 100%;
        padding: 10px;
        font-size: 1rem;
    }

    .contact-details-classic .info-box-classic {
        display: flex;
        align-items: flex-start;
        padding: 20px 0;
        /* Hanya padding atas bawah */
        border-bottom: 1px solid var(--border-light-edu3);
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .contact-details-classic .info-box-classic:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }

    body.dark-mode .contact-details-classic .info-box-classic {
        border-bottom-color: var(--border-dark-edu3);
    }

    .contact-details-classic .info-box-classic i {
        font-size: 1.8rem;
        color: var(--secondary-illumina);
        margin-right: 18px;
        width: 30px;
        text-align: center;
        flex-shrink: 0;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .contact-details-classic .info-box-classic:hover i {
        transform: scale(1.1);
    }

    body.dark-mode .contact-details-classic .info-box-classic i {
        color: var(--secondary-illumina-dark);
    }

    .contact-details-classic .info-box-classic h5 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .contact-details-classic .info-box-classic p,
    .contact-details-classic .info-box-classic p a {
        font-size: 1rem;
        color: var(--muted-text-light-edu3);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details-classic .info-box-classic p a:hover {
        color: var(--primary-illumina);
    }

    body.dark-mode .contact-details-classic .info-box-classic p,
    body.dark-mode .contact-details-classic .info-box-classic p a {
        color: var(--muted-text-dark-edu3);
    }

    body.dark-mode .contact-details-classic .info-box-classic p a:hover {
        color: var(--primary-illumina-dark);
    }

    #osmMapContainerIllumina {
        height: 480px;
        width: 100%;
        margin-top: 60px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid var(--border-light-edu3);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerIllumina {
        border-color: var(--border-dark-edu3);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
    }

    body.dark-mode .leaflet-tile-pane.dark-tiles-illumina {
        filter: grayscale(0.6) invert(1) contrast(0.8) brightness(0.9);
        /* Komentar CSS: Filter yang lebih kalem untuk peta dark mode */
    }
</style>

<section id="kontakPendidikanKlasikOsm" class="section-illumina">
    <div class="container">
        <div class="section-title-illumina" data-aos="fade-up">
            <h2>Hubungi <span style="color:var(--secondary-illumina);">Academia Illumina</span></h2>
            <p class="subtitle-illumina">Kami Menyambut Pertanyaan, Kunjungan, dan Peluang Kolaborasi Akademik.</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                <div class="contact-form-classic">
                    <h3>Kirimkan Pesan Anda</h3>
                    <form action="forms/contact_illumina.php" method="post" role="form" class="php-email-form-illumina">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameIllumina" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name_illumina" class="form-control" id="contactNameIllumina" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailIllumina" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="email_illumina" id="contactEmailIllumina" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectIllumina" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject_illumina" id="contactSubjectIllumina" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageIllumina" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" name="message_illumina" rows="6" id="contactMessageIllumina" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Terima kasih!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-illumina-primary btn-submit-classic">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-classic" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <h3 style="font-weight:700; margin-bottom:25px; color: var(--primary-illumina); transition: color 0.3s ease;" class="contact-main-title-illumina text-lg-start text-center">Informasi Kontak</h3>
                <div class="info-box-classic">
                    <i class="fas fa-map-marked-alt"></i>
                    <div>
                        <h5>Alamat Kampus Utama:</h5>
                        <p>Jl. Cendekia No. 1, Kompleks Academia, Kota Ilmu, Indonesia</p>
                    </div>
                </div>
                <div class="info-box-classic">
                    <i class="fas fa-envelope-open-text"></i>
                    <div>
                        <h5>Email Sekretariat:</h5>
                        <p><a href="mailto:sekretariat@academiaillumina.ac.id">sekretariat@academiaillumina.ac.id</a></p>
                    </div>
                </div>
                <div class="info-box-classic">
                    <i class="fas fa-phone-volume"></i>
                    <div>
                        <h5>Telepon Kantor:</h5>
                        <p><a href="tel:+62221234567">(022) 123-4567</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div id="osmMapContainerIllumina" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesIllumina = [-6.9174639, 107.6191228]; // Contoh: Bandung
            const mapZoomLevelIllumina = 14;
            let osmMapIllumina;

            function initOrUpdateMapIllumina(theme) {
                const mapContainer = document.getElementById('osmMapContainerIllumina');
                if (!mapContainer) return;

                if (osmMapIllumina) {
                    osmMapIllumina.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) {
                            osmMapIllumina.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapIllumina = L.map('osmMapContainerIllumina').setView(mapCoordinatesIllumina, mapZoomLevelIllumina);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                // Komentar JavaScript: Contoh tile layer dengan gaya klasik (misal Stamen Toner Lite)
                // let tileUrl = 'https://stamen-tiles-{s}.a.ssl.fastly.net/toner-lite/{z}/{x}/{y}{r}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &amp; <a href="http://stamen.com">Stamen Design</a>'
                };

                const tilePane = osmMapIllumina.getPane('tilePane');

                if (theme === 'dark') {
                    // Komentar JavaScript: Untuk peta klasik, filter gelap mungkin tidak selalu ideal.
                    // Bisa pilih tile layer gelap yang berbeda atau filter yang lebih subtle.
                    // tileUrl = 'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png';
                    // tileOptions.attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>';
                    if (tilePane) tilePane.classList.add('dark-tiles-illumina');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-illumina');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapIllumina);

                if (!osmMapIllumina.hasLayer(L.marker)) {
                    L.marker(mapCoordinatesIllumina).addTo(osmMapIllumina)
                        .bindPopup('<b>Academia Illumina</b><br>Jl. Cendekia No. 1, Kota Ilmu.')
                        .openPopup();
                }
            }

            const currentThemeIllumina = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapIllumina(currentThemeIllumina);

            // Komentar JavaScript: Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedIllumina', function(e) {
                initOrUpdateMapIllumina(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for Illumina cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerIllumina');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat.</p>';
            }
        }
    });
</script>