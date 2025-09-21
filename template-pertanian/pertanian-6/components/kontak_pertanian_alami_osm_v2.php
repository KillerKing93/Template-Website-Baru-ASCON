<?php // File: components/kontak_pertanian_alami_osm_v2.php 
?>
<style>
    /* Kontak Pertanian Alami OSM v2 Styles */
    #kontakPertanianAlamiOsmV2 {
        background-color: var(--bg-light-farm5);
        /* Default light */
        padding-bottom: 0;
        /* Map akan mengisi bagian bawah */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPertanianAlamiOsmV2 {
        background-color: var(--bg-dark-farm5);
    }

    .contact-form-eco {
        background-color: var(--card-bg-light-farm5);
        padding: 35px 40px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
        border: 1px solid var(--border-light-farm5);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-form-eco {
        background-color: var(--card-bg-dark-farm5);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark-farm5);
    }

    .contact-form-eco h3 {
        font-family: 'Lora', serif;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-eco-farm);
        text-align: center;
    }

    body.dark-mode .contact-form-eco h3 {
        color: var(--primary-eco-farm-dark);
    }

    .contact-form-eco .form-control {
        border-radius: 8px;
        padding: 12px 18px;
        font-size: 1rem;
        font-family: 'Nunito Sans', sans-serif;
        border: 1px solid var(--border-light-farm5);
        background-color: #fff;
        color: var(--text-light-farm5);
        transition: all 0.3s ease;
    }

    .contact-form-eco .form-control:focus {
        border-color: var(--primary-eco-farm);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-eco-farm-rgb, 85, 107, 47), 0.2);
    }

    body.dark-mode .contact-form-eco .form-control {
        background-color: var(--bg-dark-farm5);
        border-color: var(--border-dark-farm5);
        color: var(--text-dark-farm5);
    }

    body.dark-mode .contact-form-eco .form-control:focus {
        border-color: var(--primary-eco-farm-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-eco-farm-dark-rgb, 143, 188, 143), 0.2);
    }

    .contact-form-eco .form-label {
        font-weight: 600;
        color: var(--muted-text-light-farm5);
        font-size: 0.9rem;
        font-family: 'Nunito Sans', sans-serif;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-eco .form-label {
        color: var(--muted-text-dark-farm5);
    }

    .contact-form-eco .btn-submit-eco {
        width: 100%;
        padding: 12px;
        font-size: 1.05rem;
    }

    .contact-details-eco .info-box-eco {
        display: flex;
        align-items: flex-start;
        /* Ikon dan teks sejajar atas */
        padding: 20px;
        background-color: transparent;
        /* Tanpa background, hanya ikon dan teks */
        border-left: 3px solid var(--secondary-eco-farm);
        /* Garis aksen kiri */
        margin-bottom: 25px;
        transition: border-color 0.3s ease;
    }

    body.dark-mode .contact-details-eco .info-box-eco {
        border-left-color: var(--secondary-eco-farm-dark);
    }

    .contact-details-eco .info-box-eco i {
        font-size: 1.8rem;
        /* Ikon kontak */
        color: var(--secondary-eco-farm);
        margin-right: 20px;
        width: 35px;
        /* Lebar tetap */
        text-align: center;
        flex-shrink: 0;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .contact-details-eco .info-box-eco:hover i {
        transform: scale(1.1);
    }

    body.dark-mode .contact-details-eco .info-box-eco i {
        color: var(--secondary-eco-farm-dark);
    }

    .contact-details-eco .info-box-eco h5 {
        font-family: 'Lora', serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .contact-details-eco .info-box-eco p,
    .contact-details-eco .info-box-eco p a {
        font-size: 1rem;
        color: var(--muted-text-light-farm5);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details-eco .info-box-eco p a:hover {
        color: var(--primary-eco-farm);
    }

    body.dark-mode .contact-details-eco .info-box-eco p,
    body.dark-mode .contact-details-eco .info-box-eco p a {
        color: var(--muted-text-dark-farm5);
    }

    body.dark-mode .contact-details-eco .info-box-eco p a:hover {
        color: var(--primary-eco-farm-dark);
    }

    #osmMapContainerEcoSymphony {
        height: 500px;
        width: 100%;
        margin-top: 60px;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--border-light-farm5);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerEcoSymphony {
        border-color: var(--border-dark-farm5);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.28);
    }

    body.dark-mode .leaflet-tile-pane.dark-tiles-ecosymphony {
        filter: grayscale(0.8) invert(1) contrast(0.8) hue-rotate(20deg) saturate(0.7) brightness(1.1);
        /* Komentar CSS: Filter yang lebih earthy/natural untuk peta dark mode */
    }
</style>

<section id="kontakPertanianAlamiOsmV2" class="section-ecosymphony">
    <div class="container">
        <div class="section-title-ecosymphony" data-aos="fade-up">
            <h2>Terhubung <span style="color:var(--secondary-eco-farm);">dengan Kami</span></h2>
            <p class="subtitle-ecosymphony">Kami Senang Mendengar dari Anda. Mari Wujudkan Harmoni Bersama.</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                <div class="contact-form-eco">
                    <h3>Kirimkan Pesan Anda</h3>
                    <form action="forms/contact_ecosymphony.php" method="post" role="form" class="php-email-form-ecosymphony">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameEco" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name_eco" class="form-control" id="contactNameEco" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailEco" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="email_eco" id="contactEmailEco" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectEco" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject_eco" id="contactSubjectEco" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageEco" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" name="message_eco" rows="6" id="contactMessageEco" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Terima kasih atas minat Anda!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-eco-primary btn-submit-eco">Kirim Pesan Harmoni</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-eco" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <h3 style="font-weight:700; margin-bottom:30px; color: var(--primary-eco-farm); transition: color 0.3s ease;" class="contact-main-title-eco text-lg-start text-center">Informasi Kontak</h3>
                <div class="info-box-eco">
                    <i class="fas fa-map-signs"></i>
                    <div>
                        <h5>Alamat EcoSymphony Farm:</h5>
                        <p>Lembah Harmoni, Jl. Alam Raya No. 101, Desa Asri, Indonesia</p>
                    </div>
                </div>
                <div class="info-box-eco">
                    <i class="fas fa-envelope-open-text"></i>
                    <div>
                        <h5>Email Kami:</h5>
                        <p><a href="mailto:salam@ecosymphony.farm">salam@ecosymphony.farm</a></p>
                    </div>
                </div>
                <div class="info-box-eco">
                    <i class="fas fa-phone-volume"></i>
                    <div>
                        <h5>Telepon & WhatsApp:</h5>
                        <p><a href="tel:+6287712345678">+62 877-1234-5678</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div id="osmMapContainerEcoSymphony" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesEcoSymphony = [-7.2574719, 112.7520883]; // Contoh: Surabaya
            const mapZoomLevelEcoSymphony = 12;
            let osmMapEcoSymphony;

            function initOrUpdateMapEcoSymphony(theme) {
                const mapContainer = document.getElementById('osmMapContainerEcoSymphony');
                if (!mapContainer) return;

                if (osmMapEcoSymphony) {
                    osmMapEcoSymphony.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) {
                            osmMapEcoSymphony.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapEcoSymphony = L.map('osmMapContainerEcoSymphony').setView(mapCoordinatesEcoSymphony, mapZoomLevelEcoSymphony);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapEcoSymphony.getPane('tilePane');

                if (theme === 'dark') {
                    // Komentar JavaScript: Gunakan filter CSS untuk dark mode peta
                    if (tilePane) tilePane.classList.add('dark-tiles-ecosymphony');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-ecosymphony');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapEcoSymphony);

                if (!osmMapEcoSymphony.hasLayer(L.marker)) {
                    L.marker(mapCoordinatesEcoSymphony).addTo(osmMapEcoSymphony)
                        .bindPopup('<b>EcoSymphony Farm</b><br>Lembah Harmoni, Desa Asri.')
                        .openPopup();
                }
            }

            const currentThemeEcoSymphony = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapEcoSymphony(currentThemeEcoSymphony);

            // Komentar JavaScript: Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedEcoSymphony', function(e) {
                initOrUpdateMapEcoSymphony(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for EcoSymphony farm cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerEcoSymphony');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat.</p>';
            }
        }
    });
</script>