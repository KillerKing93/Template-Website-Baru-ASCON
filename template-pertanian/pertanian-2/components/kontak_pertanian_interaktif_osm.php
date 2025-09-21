<?php // File: components/kontak_pertanian_interaktif_osm.php 
?>
<style>
    /* Kontak Pertanian Interaktif OSM Styles */
    #kontakPertanianInteraktifOsm {
        background-color: var(--bg-light-farm2);
        /* Default light */
        padding-bottom: 0;
        /* Map akan mengisi bagian bawah */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPertanianInteraktifOsm {
        background-color: var(--bg-dark-farm2);
    }

    .contact-form-modern-farm {
        background-color: var(--card-bg-light-farm2);
        padding: 35px 40px;
        border-radius: 8px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        border: 1px solid var(--border-light-farm2);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-form-modern-farm {
        background-color: var(--card-bg-dark-farm2);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.28);
        border-color: var(--border-dark-farm2);
    }

    .contact-form-modern-farm h3 {
        font-size: 1.9rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-modern-farm);
    }

    body.dark-mode .contact-form-modern-farm h3 {
        color: var(--primary-modern-farm-dark);
    }

    .contact-form-modern-farm .form-control {
        border-radius: 5px;
        padding: 12px 18px;
        font-size: 1rem;
        font-family: 'Source Sans Pro', sans-serif;
        border: 1px solid var(--border-light-farm2);
        background-color: #fff;
        color: var(--text-light-farm2);
        transition: all 0.3s ease;
    }

    .contact-form-modern-farm .form-control:focus {
        border-color: var(--primary-modern-farm);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-modern-farm-rgb, 46, 125, 50), 0.25);
    }

    /* Komentar CSS: Variabel RGB untuk primary-modern-farm */
    body {
        --primary-modern-farm-rgb: 46, 125, 50;
    }

    body.dark-mode {
        --primary-modern-farm-dark-rgb: 102, 187, 106;
    }

    body.dark-mode .contact-form-modern-farm .form-control {
        background-color: var(--bg-dark-farm2);
        /* Lebih gelap dari card */
        border-color: var(--border-dark-farm2);
        color: var(--text-dark-farm2);
    }

    body.dark-mode .contact-form-modern-farm .form-control:focus {
        border-color: var(--primary-modern-farm-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-modern-farm-dark-rgb, 102, 187, 106), 0.25);
    }

    .contact-form-modern-farm .form-label {
        font-weight: 600;
        color: var(--muted-text-light-farm2);
        font-size: 0.9rem;
        font-family: 'Montserrat', sans-serif;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-modern-farm .form-label {
        color: var(--muted-text-dark-farm2);
    }

    .contact-form-modern-farm .btn-submit-modern-farm {
        width: 100%;
        padding: 12px;
    }

    .contact-details-modern-farm .info-box-modern {
        display: flex;
        align-items: center;
        /* Ikon dan teks sejajar tengah */
        padding: 20px;
        background-color: var(--card-bg-light-farm2);
        border-radius: 8px;
        margin-bottom: 20px;
        border-left: 4px solid var(--secondary-modern-farm);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-details-modern-farm .info-box-modern {
        background-color: var(--card-bg-dark-farm2);
        border-left-color: var(--secondary-modern-farm-dark);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.22);
    }

    .contact-details-modern-farm .info-box-modern:hover {
        transform: translateX(5px);
        box-shadow: 0 6px 20px rgba(255, 179, 0, 0.15);
        /* var(--secondary-modern-farm) dengan alpha */
    }

    body.dark-mode .contact-details-modern-farm .info-box-modern:hover {
        box-shadow: 0 6px 20px rgba(255, 202, 40, 0.2);
        /* var(--secondary-modern-farm-dark) dengan alpha */
    }

    .contact-details-modern-farm .info-box-modern i {
        font-size: 2rem;
        /* Ikon lebih besar */
        color: var(--secondary-modern-farm);
        margin-right: 20px;
        width: 40px;
        /* Lebar tetap */
        text-align: center;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-details-modern-farm .info-box-modern i {
        color: var(--secondary-modern-farm-dark);
    }

    .contact-details-modern-farm .info-box-modern h5 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.15rem;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .contact-details-modern-farm .info-box-modern p,
    .contact-details-modern-farm .info-box-modern p a {
        font-size: 0.95rem;
        color: var(--muted-text-light-farm2);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details-modern-farm .info-box-modern p a:hover {
        color: var(--primary-modern-farm);
    }

    body.dark-mode .contact-details-modern-farm .info-box-modern p,
    body.dark-mode .contact-details-modern-farm .info-box-modern p a {
        color: var(--muted-text-dark-farm2);
    }

    body.dark-mode .contact-details-modern-farm .info-box-modern p a:hover {
        color: var(--primary-modern-farm-dark);
    }

    #osmMapContainerModernFarm {
        height: 480px;
        width: 100%;
        margin-top: 50px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid var(--border-light-farm2);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.07);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerModernFarm {
        border-color: var(--border-dark-farm2);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
    }

    body.dark-mode .leaflet-tile-pane.dark-tiles-modern-farm {
        filter: grayscale(100%) invert(90%) contrast(120%) hue-rotate(10deg) saturate(0.3) brightness(1.1);
        /* Komentar CSS: Filter yang lebih kompleks untuk peta dark mode */
    }
</style>

<section id="kontakPertanianInteraktifOsm" class="section-pertanian-modern">
    <div class="container">
        <div class="section-title-modern-farm" data-aos="fade-up">
            <h2>Terhubung <span class="highlight-accent">Dengan Kami</span></h2>
            <div class="line-decorator"></div>
            <p class="subtitle-modern-farm">Kami Siap Membantu dan Menjawab Pertanyaan Anda Seputar Produk dan Layanan Agroteknologi Kami.</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                <div class="contact-form-modern-farm">
                    <h3>Formulir Kontak</h3>
                    <form action="forms/contact_pertanian_modern.php" method="post" role="form" class="php-email-form-pertanian-modern">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameModern" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name_modern" class="form-control" id="contactNameModern" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailModern" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="email_modern" id="contactEmailModern" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectModern" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject_modern" id="contactSubjectModern" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageModern" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" name="message_modern" rows="6" id="contactMessageModern" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Sedang mengirim...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah berhasil dikirim. Terima kasih!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-farm-modern-primary btn-submit-modern-farm">Kirim Pertanyaan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-modern-farm" data-aos="fade-left" data-aos-delay="200">
                <h3 style="font-weight:700; margin-bottom:25px; color: var(--primary-modern-farm); transition: color 0.3s ease;" class="contact-main-title-modern-farm">Detail Informasi</h3>
                <div class="info-box-modern">
                    <i class="fas fa-map-signs"></i>
                    <div>
                        <h5>Lokasi Kebun & Kantor:</h5>
                        <p>Jl. Agro Inovasi No. 88, Kawasan Pertanian Terpadu, Kota Hijau, Indonesia</p>
                    </div>
                </div>
                <div class="info-box-modern">
                    <i class="fas fa-at"></i>
                    <div>
                        <h5>Email Layanan:</h5>
                        <p><a href="mailto:info@agromodern.id">info@agromodern.id</a></p>
                    </div>
                </div>
                <div class="info-box-modern">
                    <i class="fas fa-phone-square-alt"></i>
                    <div>
                        <h5>Telepon & WhatsApp:</h5>
                        <p><a href="tel:+62227778899">(022) 777-8899</a> / <a href="https://wa.me/6281298765432" target="_blank">+62 812-9876-5432</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div id="osmMapContainerModernFarm" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesModernFarm = [-6.9025, 107.6187]; // Contoh: Bandung
            const mapZoomLevelModernFarm = 13;
            let osmMapModernFarm;

            function initOrUpdateMapModernFarm(theme) {
                const mapContainer = document.getElementById('osmMapContainerModernFarm');
                if (!mapContainer) return;

                if (osmMapModernFarm) {
                    osmMapModernFarm.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) {
                            osmMapModernFarm.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapModernFarm = L.map('osmMapContainerModernFarm').setView(mapCoordinatesModernFarm, mapZoomLevelModernFarm);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapModernFarm.getPane('tilePane');

                if (theme === 'dark') {
                    // Komentar JavaScript: Anda bisa mencari URL tile layer gelap yang gratis atau menggunakan filter CSS
                    // tileUrl = 'https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png'; // Contoh, perlu cek ToS & API key jika ada
                    // tileOptions.attribution = '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
                    if (tilePane) tilePane.classList.add('dark-tiles-modern-farm');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-modern-farm');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapModernFarm);

                if (!osmMapModernFarm.hasLayer(L.marker)) {
                    L.marker(mapCoordinatesModernFarm).addTo(osmMapModernFarm)
                        .bindPopup('<b>Kantor AgroModern</b><br>Jl. Agro Inovasi No. 88.')
                        .openPopup();
                }
            }

            const currentThemeModernFarm = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapModernFarm(currentThemeModernFarm);

            document.addEventListener('themeChangedPertanianModern', function(e) {
                initOrUpdateMapModernFarm(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for modern farm cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerModernFarm');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat.</p>';
            }
        }
    });
</script>