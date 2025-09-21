<?php // File: components/kontak_pertanian_futuristik_osm.php 
?>
<style>
    /* Kontak Pertanian Futuristik OSM Styles */
    #kontakPertanianFuturistikOsm {
        background-color: var(--bg-light-farm5);
        /* Default light */
        padding-bottom: 0;
        /* Map akan mengisi bagian bawah */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPertanianFuturistikOsm {
        background-color: var(--bg-dark-farm5);
    }

    .contact-form-futuristic-farm {
        background-color: var(--card-bg-light-farm5);
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.07);
        border: 1px solid var(--border-light-farm5);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-form-futuristic-farm {
        background-color: var(--card-bg-dark-farm5);
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.28);
        border-color: var(--border-dark-farm5);
    }

    .contact-form-futuristic-farm h3 {
        font-family: 'Exo 2', sans-serif;
        font-size: 2rem;
        /* Judul form */
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-futura-farm);
        text-align: center;
    }

    body.dark-mode .contact-form-futuristic-farm h3 {
        color: var(--primary-futura-farm-dark);
    }

    .contact-form-futuristic-farm .form-control {
        border-radius: 6px;
        /* Sudut sedikit membulat */
        padding: 12px 18px;
        font-size: 1rem;
        font-family: 'Inter', sans-serif;
        border: 1px solid var(--border-light-farm5);
        background-color: #fff;
        color: var(--text-light-farm5);
        transition: all 0.3s ease;
    }

    .contact-form-futuristic-farm .form-control:focus {
        border-color: var(--accent-futura-farm);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-futura-farm-rgb, 2, 195, 154), 0.2);
    }

    /* Komentar CSS: Variabel RGB untuk accent-futura-farm */
    body {
        --accent-futura-farm-rgb: 2, 195, 154;
    }

    body.dark-mode {
        --accent-futura-farm-dark-rgb: 3, 218, 197;
    }

    body.dark-mode .contact-form-futuristic-farm .form-control {
        background-color: var(--bg-dark-farm5);
        border-color: var(--border-dark-farm5);
        color: var(--text-dark-farm5);
    }

    body.dark-mode .contact-form-futuristic-farm .form-control:focus {
        border-color: var(--accent-futura-farm-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-futura-farm-dark-rgb, 3, 218, 197), 0.2);
    }

    .contact-form-futuristic-farm .form-label {
        font-weight: 600;
        color: var(--muted-text-light-farm5);
        font-size: 0.9rem;
        font-family: 'Exo 2', sans-serif;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-futuristic-farm .form-label {
        color: var(--muted-text-dark-farm5);
    }

    .contact-form-futuristic-farm .btn-submit-futuristic-farm {
        width: 100%;
        padding: 12px;
        font-size: 1.05rem;
    }

    .contact-details-futuristic-farm .info-box-futura {
        display: flex;
        align-items: center;
        padding: 20px;
        background-color: transparent;
        /* Tanpa background, hanya ikon dan teks */
        border-bottom: 1px solid var(--border-light-farm5);
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .contact-details-futuristic-farm .info-box-futura:last-child {
        border-bottom: none;
    }

    body.dark-mode .contact-details-futuristic-farm .info-box-futura {
        border-bottom-color: var(--border-dark-farm5);
    }

    .contact-details-futuristic-farm .info-box-futura i {
        font-size: 2.2rem;
        /* Ikon kontak */
        color: var(--accent-futura-farm);
        margin-right: 20px;
        width: 45px;
        /* Lebar tetap */
        text-align: center;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .contact-details-futuristic-farm .info-box-futura:hover i {
        transform: scale(1.1);
        color: var(--secondary-futura-farm);
        /* Warna hover ikon */
    }

    body.dark-mode .contact-details-futuristic-farm .info-box-futura i {
        color: var(--accent-futura-farm-dark);
    }

    body.dark-mode .contact-details-futuristic-farm .info-box-futura:hover i {
        color: var(--secondary-futura-farm-dark);
    }

    .contact-details-futuristic-farm .info-box-futura h5 {
        font-family: 'Exo 2', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .contact-details-futuristic-farm .info-box-futura p,
    .contact-details-futuristic-farm .info-box-futura p a {
        font-size: 1rem;
        color: var(--muted-text-light-farm5);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details-futuristic-farm .info-box-futura p a:hover {
        color: var(--primary-futura-farm);
    }

    body.dark-mode .contact-details-futuristic-farm .info-box-futura p,
    body.dark-mode .contact-details-futuristic-farm .info-box-futura p a {
        color: var(--muted-text-dark-farm5);
    }

    body.dark-mode .contact-details-futuristic-farm .info-box-futura p a:hover {
        color: var(--primary-futura-farm-dark);
    }

    #osmMapContainerFuturaFarm {
        height: 500px;
        width: 100%;
        margin-top: 60px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid var(--border-light-farm5);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerFuturaFarm {
        border-color: var(--border-dark-farm5);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    body.dark-mode .leaflet-tile-pane.dark-tiles-futura-farm {
        filter: grayscale(0.9) invert(1) contrast(0.9) hue-rotate(180deg) brightness(1) saturate(0.4);
        /* Komentar CSS: Filter yang lebih techy/monochrome untuk peta dark mode */
    }
</style>

<section id="kontakPertanianFuturistikOsm" class="section-futura-farm">
    <div class="container">
        <div class="section-title-futura-farm" data-aos="fade-up">
            <h2>Hubungi <span class="highlight-yellow">Tim AgriFutura</span></h2>
            <div class="title-deco-line"></div>
            <p class="subtitle-futura-farm">Kami Siap Membantu Anda dengan Solusi Pertanian Inovatif. Mari Berdiskusi!</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                <div class="contact-form-futuristic-farm">
                    <h3>Kirim Pesan Digital</h3>
                    <form action="forms/contact_futura_farm.php" method="post" role="form" class="php-email-form-futura-farm">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameFutura" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name_futura" class="form-control" id="contactNameFutura" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailFutura" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="email_futura" id="contactEmailFutura" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectFutura" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject_futura" id="contactSubjectFutura" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageFutura" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" name="message_futura" rows="6" id="contactMessageFutura" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Tim kami akan segera menghubungi Anda!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-futura-primary btn-submit-futuristic-farm">Kirim Data</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-futuristic-farm" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <h3 style="font-weight:700; margin-bottom:30px; color: var(--primary-futura-farm); transition: color 0.3s ease;" class="contact-main-title-futura-farm text-lg-start text-center">Pusat Komunikasi</h3>
                <div class="info-box-futura">
                    <i class="fas fa-map-marked-alt"></i>
                    <div>
                        <h5>Markas Inovasi:</h5>
                        <p>AgriFutura Tower, Silicon Valley Pertanian, Blok Alpha-7, Indonesia</p>
                    </div>
                </div>
                <div class="info-box-futura">
                    <i class="fas fa-envelope-open-text"></i>
                    <div>
                        <h5>Kanal Email:</h5>
                        <p><a href="mailto:connect@agrifutura.id">connect@agrifutura.id</a></p>
                    </div>
                </div>
                <div class="info-box-futura">
                    <i class="fas fa-headset"></i>
                    <div>
                        <h5>Layanan Dukungan:</h5>
                        <p><a href="tel:+622177778888">(021) 7777-8888</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div id="osmMapContainerFuturaFarm" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesFuturaFarm = [-6.1753924, 106.8271528]; // Contoh: Jakarta
            const mapZoomLevelFuturaFarm = 13;
            let osmMapFuturaFarm;

            function initOrUpdateMapFuturaFarm(theme) {
                const mapContainer = document.getElementById('osmMapContainerFuturaFarm');
                if (!mapContainer) return;

                if (osmMapFuturaFarm) {
                    osmMapFuturaFarm.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) {
                            osmMapFuturaFarm.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapFuturaFarm = L.map('osmMapContainerFuturaFarm').setView(mapCoordinatesFuturaFarm, mapZoomLevelFuturaFarm);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapFuturaFarm.getPane('tilePane');

                if (theme === 'dark') {
                    // Komentar JavaScript: Anda bisa mencari URL tile layer gelap yang gratis atau menggunakan filter CSS
                    // Contoh tile layer gelap dari CartoDB (perlu cek ToS dan ketersediaan)
                    // tileUrl = 'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png';
                    // tileOptions.attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>';
                    if (tilePane) tilePane.classList.add('dark-tiles-futura-farm');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-futura-farm');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapFuturaFarm);

                if (!osmMapFuturaFarm.hasLayer(L.marker)) {
                    L.marker(mapCoordinatesFuturaFarm).addTo(osmMapFuturaFarm)
                        .bindPopup('<b>AgriFutura Innovation Hub</b><br>Silicon Valley Pertanian.')
                        .openPopup();
                }
            }

            const currentThemeFuturaFarm = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapFuturaFarm(currentThemeFuturaFarm);

            // Komentar JavaScript: Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedFuturaFarm', function(e) {
                initOrUpdateMapFuturaFarm(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for futura farm cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerFuturaFarm');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat.</p>';
            }
        }
    });
</script>