<?php // File: components/contact_osm_elegant.php 
?>
<style>
    /* Elegant Contact with OpenStreetMap Component Styles */
    #contactOsmElegant {
        background-color: var(--bg-light);
        /* Default light */
        transition: background-color 0.4s ease;
        padding-bottom: 0;
        /* Map akan mengisi bagian bawah */
    }

    body.dark-mode #contactOsmElegant {
        background-color: var(--bg-dark);
    }

    .contact-form-elegant {
        background-color: var(--card-bg-light);
        padding: 35px 40px;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
        border: 1px solid var(--border-light);
        transition: all 0.4s ease;
    }

    body.dark-mode .contact-form-elegant {
        background-color: var(--card-bg-dark);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        border-color: var(--border-dark);
    }

    .contact-form-elegant h3 {
        font-family: 'Playfair Display', serif;
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-luminous);
    }

    body.dark-mode .contact-form-elegant h3 {
        color: var(--primary-luminous-dark);
    }

    .contact-form-elegant .form-control {
        border-radius: 5px;
        padding: 12px 18px;
        font-size: 1rem;
        font-family: 'Lato', sans-serif;
        border: 1px solid var(--border-light);
        background-color: #fff;
        /* Input terang di light mode */
        color: var(--text-light);
        transition: all 0.3s ease;
    }

    .contact-form-elegant .form-control:focus {
        border-color: var(--secondary-luminous);
        box-shadow: 0 0 0 0.2rem rgba(var(--secondary-luminous-rgb, 255, 215, 0), 0.2);
    }

    body.dark-mode .contact-form-elegant .form-control {
        background-color: var(--bg-dark);
        /* Input lebih gelap dari card di dark mode */
        border-color: var(--border-dark);
        color: var(--text-dark);
    }

    body.dark-mode .contact-form-elegant .form-control:focus {
        border-color: var(--secondary-luminous-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--secondary-luminous-dark-rgb, 255, 235, 153), 0.2);
    }

    .contact-form-elegant .form-label {
        font-weight: 700;
        /* Label lebih bold */
        font-family: 'Lato', sans-serif;
        color: var(--muted-text-light);
        font-size: 0.9rem;
        transition: color 0.4s ease;
    }

    body.dark-mode .contact-form-elegant .form-label {
        color: var(--muted-text-dark);
    }

    .contact-form-elegant .btn-submit-elegant {
        width: 100%;
        padding: 12px;
    }

    .contact-info-elegant .info-box-elegant {
        display: flex;
        align-items: flex-start;
        padding: 25px;
        background-color: var(--card-bg-light);
        border-radius: 8px;
        margin-bottom: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border-left: 3px solid var(--secondary-luminous);
        transition: all 0.4s ease;
    }

    body.dark-mode .contact-info-elegant .info-box-elegant {
        background-color: var(--card-bg-dark);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        border-left-color: var(--secondary-luminous-dark);
    }

    .contact-info-elegant .info-box-elegant:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 20px rgba(138, 43, 226, 0.1);
        /* Warna primer */
    }

    body.dark-mode .contact-info-elegant .info-box-elegant:hover {
        box-shadow: 0 8px 20px rgba(160, 96, 255, 0.15);
        /* Warna primer dark */
    }

    .contact-info-elegant .info-box-elegant i {
        font-size: 1.8rem;
        color: var(--primary-luminous);
        margin-right: 20px;
        width: 30px;
        line-height: 1;
        margin-top: 2px;
        transition: color 0.4s ease;
    }

    body.dark-mode .contact-info-elegant .info-box-elegant i {
        color: var(--primary-luminous-dark);
    }

    .contact-info-elegant .info-box-elegant h5 {
        font-family: 'Playfair Display', serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .contact-info-elegant .info-box-elegant p,
    .contact-info-elegant .info-box-elegant p a {
        font-size: 1rem;
        color: var(--muted-text-light);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.4s ease;
    }

    .contact-info-elegant .info-box-elegant p a:hover {
        color: var(--primary-luminous);
        text-decoration: underline;
    }

    body.dark-mode .contact-info-elegant .info-box-elegant p,
    body.dark-mode .contact-info-elegant .info-box-elegant p a {
        color: var(--muted-text-dark);
    }

    body.dark-mode .contact-info-elegant .info-box-elegant p a:hover {
        color: var(--primary-luminous-dark);
    }

    #osmMapContainerElegant {
        height: 500px;
        width: 100%;
        margin-top: 50px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid var(--border-light);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        transition: border-color 0.4s ease, box-shadow 0.4s ease;
    }

    body.dark-mode #osmMapContainerElegant {
        border-color: var(--border-dark);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
    }

    /* Filter CSS untuk peta di dark mode (opsional, bisa di JS) */
    body.dark-mode .leaflet-tile-pane.dark-tiles {
        filter: invert(100%) hue-rotate(180deg) brightness(95%) contrast(90%);
    }
</style>

<section id="contactOsmElegant" class="section-elegant">
    <div class="container">
        <div class="section-title-elegant" data-aos="fade-up">
            <h2>Hubungi Kami</h2>
            <p class="subtitle-elegant">Kami Selalu Siap Mendengarkan Ide dan Kebutuhan Anda. Mari Terhubung!</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                <div class="contact-form-elegant">
                    <h3>Kirim Pesan Langsung</h3>
                    <form action="forms/contact_vFinal.php" method="post" role="form" class="php-email-form-vFinal">
                        <?php /* Ganti action dengan skrip pemroses form Anda */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameVFinal" class="form-label">Nama Lengkap Anda</label>
                                <input type="text" name="name_vFinal" class="form-control" id="contactNameVFinal" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailVFinal" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="email_vFinal" id="contactEmailVFinal" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectVFinal" class="form-label">Subjek Pesan</label>
                            <input type="text" class="form-control" name="subject_vFinal" id="contactSubjectVFinal" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageVFinal" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" name="message_vFinal" rows="6" id="contactMessageVFinal" required></textarea>
                        </div>
                        <div class="my-3">
                            <?php /* Placeholder untuk pesan loading/error/sukses */ ?>
                            <div class="loading d-none">Memuat...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Terima kasih!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-luminous-primary btn-submit-elegant">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-info-elegant" data-aos="fade-left" data-aos-delay="200">
                <h3 style="font-weight:700; margin-bottom:25px; color: var(--primary-luminous); transition: color 0.4s ease;" class="contact-info-main-title">Detail Kontak AuroraCorp</h3>
                <?php /* Komentar PHP: Judul ini akan terpengaruh dark mode dari h3 global */ ?>
                <div class="info-box-elegant">
                    <i class="fas fa-map-marked-alt"></i>
                    <div>
                        <h5>Alamat Utama:</h5>
                        <p>Jl. Aurora Indah No. 1, Suite 88, Kota Metropolitan, Indonesia</p>
                    </div>
                </div>
                <div class="info-box-elegant">
                    <i class="fas fa-envelope-open-text"></i>
                    <div>
                        <h5>Email Kami:</h5>
                        <p><a href="mailto:kontak@auroracorp.id">kontak@auroracorp.id</a></p>
                    </div>
                </div>
                <div class="info-box-elegant">
                    <i class="fas fa-phone-volume"></i>
                    <div>
                        <h5>Telepon:</h5>
                        <p><a href="tel:+62215550101">(021) 555-0101</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0"> <?php /* Container fluid agar peta full width */ ?>
        <div id="osmMapContainerElegant" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript di bawah */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesElegant = [-6.208763, 106.845599]; // Contoh: Jakarta Pusat
            const mapZoomLevelElegant = 14;
            let osmMapElegant; // Deklarasikan di luar agar bisa diakses oleh event listener tema

            function initOrUpdateMap(theme) {
                const mapContainer = document.getElementById('osmMapContainerElegant');
                if (!mapContainer) return;

                if (osmMapElegant) { // Jika peta sudah ada, hapus layer lama
                    osmMapElegant.eachLayer(function(layer) {
                        if (!!layer.options && !!layer.options.attribution) { // Cek apakah itu tile layer
                            osmMapElegant.removeLayer(layer);
                        }
                    });
                } else { // Inisialisasi peta jika belum ada
                    osmMapElegant = L.map('osmMapContainerElegant').setView(mapCoordinatesElegant, mapZoomLevelElegant);
                }

                // Pilih tile layer berdasarkan tema
                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'; // Default light
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapElegant.getPane('tilePane');

                if (theme === 'dark') {
                    // Contoh tile layer gelap dari CartoDB (perlu cek ToS dan ketersediaan)
                    // tileUrl = 'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png';
                    // tileOptions.attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>';
                    // Atau gunakan filter CSS jika tidak ada tile layer gelap yang cocok
                    if (tilePane) tilePane.classList.add('dark-tiles');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapElegant);

                // Tambahkan marker (hanya jika peta baru diinisialisasi atau jika marker perlu di-update)
                if (!osmMapElegant.hasLayer(L.marker)) { // Cek sederhana, mungkin perlu cara lebih baik
                    L.marker(mapCoordinatesElegant).addTo(osmMapElegant)
                        .bindPopup('<b>Kantor AuroraCorp</b><br>Jl. Aurora Indah No. 1.')
                        .openPopup();
                }
            }

            // Inisialisasi peta dengan tema saat ini
            const currentTheme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMap(currentTheme);

            // Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChanged', function(e) {
                initOrUpdateMap(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerElegant');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat. Pastikan Leaflet.js termuat dengan benar dan koneksi internet stabil.</p>';
            }
        }
    });
</script>