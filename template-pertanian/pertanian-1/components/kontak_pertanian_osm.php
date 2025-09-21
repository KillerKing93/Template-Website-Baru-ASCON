<?php // File: components/kontak_pertanian_osm.php 
?>
<style>
    /* Kontak Pertanian dengan OpenStreetMap Styles */
    #kontakPertanianOsm {
        background-color: var(--card-bg-light);
        /* Sedikit beda dari body */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPertanianOsm {
        background-color: var(--card-bg-dark);
    }

    .contact-form-pertanian {
        background-color: var(--bg-light);
        /* Default light */
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode .contact-form-pertanian {
        background-color: var(--bg-dark);
        /* Lebih gelap dari section di dark mode */
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.18);
    }

    .contact-form-pertanian h3 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-farm);
    }

    body.dark-mode .contact-form-pertanian h3 {
        color: var(--primary-farm-dark);
    }

    .contact-form-pertanian .form-control {
        border-radius: 5px;
        padding: 10px 15px;
        font-size: 0.95rem;
        border: 1px solid var(--border-light);
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, background-color 0.3s ease, color 0.3s ease;
        background-color: #fff;
        color: var(--text-light);
    }

    .contact-form-pertanian .form-control:focus {
        border-color: var(--primary-farm);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-farm-rgb, 90, 139, 65), 0.25);
    }

    body.dark-mode .contact-form-pertanian .form-control {
        background-color: var(--card-bg-dark);
        /* Atau var(--bg-dark) */
        border-color: var(--border-dark);
        color: var(--text-dark);
    }

    body.dark-mode .contact-form-pertanian .form-control:focus {
        border-color: var(--primary-farm-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--primary-farm-dark-rgb, 124, 179, 66), 0.25);
    }

    .contact-form-pertanian .form-label {
        font-weight: 600;
        color: var(--muted-text-light);
        font-size: 0.9rem;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-pertanian .form-label {
        color: var(--muted-text-dark);
    }

    .contact-info-pertanian .info-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }

    .contact-info-pertanian .info-item i {
        font-size: 1.8rem;
        color: var(--primary-farm);
        margin-right: 18px;
        width: 30px;
        line-height: 1;
        margin-top: 2px;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-info-pertanian .info-item i {
        color: var(--primary-farm-dark);
    }

    .contact-info-pertanian .info-item h5 {
        font-family: 'Merriweather', serif;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .contact-info-pertanian .info-item p,
    .contact-info-pertanian .info-item p a {
        font-size: 1rem;
        color: var(--muted-text-light);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-info-pertanian .info-item p a:hover {
        color: var(--primary-farm);
        text-decoration: underline;
    }

    body.dark-mode .contact-info-pertanian .info-item p,
    body.dark-mode .contact-info-pertanian .info-item p a {
        color: var(--muted-text-dark);
    }

    body.dark-mode .contact-info-pertanian .info-item p a:hover {
        color: var(--primary-farm-dark);
    }

    #osmMapContainerPertanian {
        height: 400px;
        width: 100%;
        border-radius: 8px;
        border: 1px solid var(--border-light);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerPertanian {
        border-color: var(--border-dark);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Komentar CSS: Filter untuk peta di dark mode (opsional, bisa di JS) */
    body.dark-mode .leaflet-tile-pane.dark-tiles-pertanian {
        filter: invert(1) hue-rotate(180deg) brightness(0.85) contrast(0.95);
    }
</style>

<section id="kontakPertanianOsm" class="section-pertanian">
    <div class="container">
        <div class="section-title-pertanian" data-aos="fade-up">
            <h2>Hubungi Kami</h2>
            <p class="subtitle-pertanian">Jangan Ragu untuk Menghubungi Kami untuk Pertanyaan atau Pemesanan.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="contact-info-pertanian">
                    <h3 style="font-weight:700; margin-bottom:25px; color: var(--primary-farm); transition: color 0.3s ease;" class="contact-main-title-pertanian">Informasi Kontak Ladang</h3>
                    <?php /* Komentar PHP: Judul ini akan terpengaruh dark mode dari h3 global */ ?>
                    <div class="info-item">
                        <i class="fas fa-map-marked-alt"></i>
                        <div>
                            <h5>Alamat Ladang:</h5>
                            <p>Jl. Pertanian Sejahtera No. 1, Desa Makmur, Kab. Hijau, Indonesia</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h5>Email:</h5>
                            <p><a href="mailto:info@namapertanian.co.id">info@namapertanian.co.id</a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h5>Telepon / WhatsApp:</h5>
                            <p><a href="tel:+6281234567890">+62 812-3456-7890</a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-store"></i>
                        <div>
                            <h5>Toko/Kios Pasar (jika ada):</h5>
                            <p>Blok C No. 5, Pasar Tani Segar Jaya, Setiap Sabtu Pagi</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="contact-form-pertanian">
                    <h3>Kirim Pesan kepada Kami</h3>
                    <form action="forms/contact_pertanian.php" method="post" role="form" class="php-email-form-pertanian">
                        <?php /* Komentar PHP: Ganti action dengan skrip pemroses form Anda */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNamePertanian" class="form-label">Nama Anda</label>
                                <input type="text" name="name_pertanian" class="form-control" id="contactNamePertanian" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailPertanian" class="form-label">Email Anda</label>
                                <input type="email" class="form-control" name="email_pertanian" id="contactEmailPertanian" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectPertanian" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject_pertanian" id="contactSubjectPertanian" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessagePertanian" class="form-label">Pesan</label>
                            <textarea class="form-control" name="message_pertanian" rows="5" id="contactMessagePertanian" required></textarea>
                        </div>
                        <div class="my-3">
                            <?php /* Komentar PHP: Placeholder untuk pesan loading/error/sukses */ ?>
                            <div class="loading d-none">Memuat...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Terima kasih!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-farm-primary">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <div id="osmMapContainerPertanian">
                    <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript di bawah */ ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            // Komentar JavaScript: Koordinat lokasi pertanian (contoh)
            const mapCoordinatesPertanian = [-2.548926, 118.014863]; // Contoh: Tengah Indonesia
            const mapZoomLevelPertanian = 5;
            let osmMapPertanian;

            function initOrUpdateMapPertanian(theme) {
                const mapContainer = document.getElementById('osmMapContainerPertanian');
                if (!mapContainer) return;

                if (osmMapPertanian) {
                    osmMapPertanian.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) { // Hanya hapus tile layers
                            osmMapPertanian.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapPertanian = L.map('osmMapContainerPertanian').setView(mapCoordinatesPertanian, mapZoomLevelPertanian);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapPertanian.getPane('tilePane');

                if (theme === 'dark') {
                    // Komentar JavaScript: Contoh tile layer gelap dari Stamen (cek ToS)
                    // tileUrl = 'https://stamen-tiles-{s}.a.ssl.fastly.net/toner-background/{z}/{x}/{y}{r}.png';
                    // tileOptions.attribution = 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
                    if (tilePane) tilePane.classList.add('dark-tiles-pertanian');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-pertanian');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapPertanian);

                // Komentar JavaScript: Tambahkan marker jika peta baru diinisialisasi
                if (!osmMapPertanian.hasLayer(L.marker)) {
                    L.marker(mapCoordinatesPertanian).addTo(osmMapPertanian)
                        .bindPopup('<b>Lokasi [NamaPertanian Anda]</b><br>Desa Makmur, Kab. Hijau.')
                        .openPopup();
                }
            }

            // Komentar JavaScript: Inisialisasi peta dengan tema saat ini
            const currentThemePertanian = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapPertanian(currentThemePertanian);

            // Komentar JavaScript: Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedPertanian', function(e) {
                initOrUpdateMapPertanian(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for pertanian cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerPertanian');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat. Pastikan Leaflet.js termuat dengan benar.</p>';
            }
        }
    });
</script>