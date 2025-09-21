<?php // File: components/kontak_pendidikan_nova_osm.php 
?>
<style>
    /* Kontak Pendidikan Nova OSM Styles */
    #kontakPendidikanNovaOsm {
        background-color: var(--bg-light-edu6);
        /* Default light */
        padding-bottom: 0;
        /* Map akan mengisi bagian bawah */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #kontakPendidikanNovaOsm {
        background-color: var(--bg-dark-edu6);
    }

    .contact-form-nova {
        background-color: var(--card-bg-light-edu6);
        padding: 35px 40px;
        border-radius: 10px;
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.07);
        border: 1px solid var(--border-light-edu6);
        transition: all 0.3s ease;
    }

    body.dark-mode .contact-form-nova {
        background-color: var(--card-bg-dark-edu6);
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.28);
        border-color: var(--border-dark-edu6);
    }

    .contact-form-nova h3 {
        font-family: 'Syne', sans-serif;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-nova);
        text-align: center;
    }

    body.dark-mode .contact-form-nova h3 {
        color: var(--primary-nova-dark);
    }

    .contact-form-nova .form-control {
        border-radius: 6px;
        padding: 12px 18px;
        font-size: 1rem;
        font-family: 'Work Sans', sans-serif;
        border: 1px solid var(--border-light-edu6);
        background-color: #fff;
        color: var(--text-light-edu6);
        transition: all 0.3s ease;
    }

    .contact-form-nova .form-control:focus {
        border-color: var(--accent-nova);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-nova-rgb, 0, 188, 212), 0.2);
    }

    body.dark-mode .contact-form-nova .form-control {
        background-color: var(--bg-dark-edu6);
        border-color: var(--border-dark-edu6);
        color: var(--text-dark-edu6);
    }

    body.dark-mode .contact-form-nova .form-control:focus {
        border-color: var(--accent-nova-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-nova-dark-rgb, 0, 229, 255), 0.2);
    }

    .contact-form-nova .form-label {
        font-weight: 600;
        color: var(--muted-text-light-edu6);
        font-size: 0.9rem;
        font-family: 'Syne', sans-serif;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-nova .form-label {
        color: var(--muted-text-dark-edu6);
    }

    .contact-form-nova .btn-submit-nova {
        width: 100%;
        padding: 12px;
        font-size: 1.05rem;
    }

    .contact-details-nova .info-box-nova {
        display: flex;
        align-items: center;
        /* Ikon dan teks sejajar tengah */
        padding: 20px;
        background-color: transparent;
        /* Tanpa background */
        border-bottom: 1px dashed rgba(var(--border-light-edu6-rgb, 225, 227, 230), 0.7);
        /* Pemisah antar item */
        margin-bottom: 20px;
        transition: border-color 0.3s ease;
    }

    .contact-details-nova .info-box-nova:last-child {
        border-bottom: none;
        margin-bottom: 0;
        /* Remove bottom margin for the last item */
    }

    body.dark-mode .contact-details-nova .info-box-nova {
        border-bottom-color: rgba(var(--border-dark-edu6-rgb, 51, 51, 51), 0.7);
    }

    .contact-details-nova .info-box-nova .contact-icon-nova {
        /* Changed from i to a class for the div */
        font-size: 2.2rem;
        /* Base size for SVGs */
        color: var(--accent-nova);
        margin-right: 20px;
        width: 40px;
        text-align: center;
        flex-shrink: 0;
        transition: color 0.3s ease, transform 0.3s ease;
        line-height: 1;
        /* Ensure SVG doesn't add extra space */
    }

    .contact-details-nova .info-box-nova .contact-icon-nova svg {
        width: 1em;
        height: 1em;
        vertical-align: -0.125em;
        /* Adjust vertical alignment if needed */
    }


    .contact-details-nova .info-box-nova:hover .contact-icon-nova {
        /* Target the div for hover effect */
        transform: scale(1.1) rotate(5deg);
        color: var(--secondary-nova);
    }

    body.dark-mode .contact-details-nova .info-box-nova .contact-icon-nova {
        color: var(--accent-nova-dark);
    }

    body.dark-mode .contact-details-nova .info-box-nova:hover .contact-icon-nova {
        color: var(--secondary-nova-dark);
    }

    .contact-details-nova .info-box-nova h5 {
        font-family: 'Syne', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .contact-details-nova .info-box-nova p,
    .contact-details-nova .info-box-nova p a {
        font-size: 1rem;
        color: var(--muted-text-light-edu6);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-details-nova .info-box-nova p a:hover {
        color: var(--primary-nova);
    }

    body.dark-mode .contact-details-nova .info-box-nova p,
    body.dark-mode .contact-details-nova .info-box-nova p a {
        color: var(--muted-text-dark-edu6);
    }

    body.dark-mode .contact-details-nova .info-box-nova p a:hover {
        color: var(--primary-nova-dark);
    }

    #osmMapContainerNovaUni {
        height: 480px;
        width: 100%;
        margin-top: 60px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid var(--border-light-edu6);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainerNovaUni {
        border-color: var(--border-dark-edu6);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    body.dark-mode .leaflet-tile-pane.dark-tiles-nova-uni {
        filter: grayscale(0.9) invert(1) contrast(0.85) hue-rotate(210deg) saturate(0.5) brightness(0.95);
        /* Komentar CSS: Filter yang lebih artistik/gelap untuk peta dark mode */
    }
</style>

<section id="kontakPendidikanNovaOsm" class="section-nova-uni">
    <div class="container">
        <div class="section-title-nova-uni" data-aos="fade-up">
            <h2>Hubungi <span style="color:var(--secondary-nova);">Nova Universitas</span></h2>
            <p class="subtitle-nova-uni">Kami Selalu Terbuka untuk Pertanyaan, Diskusi, dan Peluang Kolaborasi Inovatif.</p>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                <div class="contact-form-nova">
                    <h3>Kirim Pesan Langsung</h3>
                    <form action="forms/contact_nova_uni.php" method="post" role="form" class="php-email-form-nova-uni">
                        <?php /* Komentar PHP: Sesuaikan action URL */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameNova" class="form-label">Nama Anda</label>
                                <input type="text" name="name_nova" class="form-control" id="contactNameNova" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailNova" class="form-label">Email Anda</label>
                                <input type="email" class="form-control" name="email_nova" id="contactEmailNova" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectNova" class="form-label">Subjek Pesan</label>
                            <input type="text" class="form-control" name="subject_nova" id="contactSubjectNova" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageNova" class="form-label">Isi Pesan</label>
                            <textarea class="form-control" name="message_nova" rows="6" id="contactMessageNova" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Tim kami akan segera merespons!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-nova-primary btn-submit-nova">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-nova" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <h3 style="font-weight:700; margin-bottom:25px; color: var(--primary-nova); transition: color 0.3s ease;" class="contact-main-title-nova text-lg-start text-center">Pusat Informasi & Admisi</h3>
                <div class="info-box-nova">
                    <div class="contact-icon-nova">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                    </div>
                    <div>
                        <h5>Alamat Kampus Utama:</h5>
                        <p>Nova Universitas, Distrik Kreatif, Kota Inovasi, Indonesia</p>
                    </div>
                </div>
                <div class="info-box-nova">
                    <div class="contact-icon-nova">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                        </svg>
                    </div>
                    <div>
                        <h5>Email Resmi:</h5>
                        <p><a href="mailto:info@novauniversitas.id">info@novauniversitas.id</a></p>
                    </div>
                </div>
                <div class="info-box-nova">
                    <div class="contact-icon-nova">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </div>
                    <div>
                        <h5>Telepon & Layanan Virtual:</h5>
                        <p><a href="tel:+622120242025">(021) 2024-2025</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div id="osmMapContainerNovaUni" data-aos="fade-up" data-aos-delay="300">
            <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript */ ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof L !== 'undefined') {
            const mapCoordinatesNovaUni = [-6.175110, 106.865036]; // Contoh: Jakarta (dekat Istiqlal)
            const mapZoomLevelNovaUni = 14;
            let osmMapNovaUni;

            function initOrUpdateMapNovaUni(theme) {
                const mapContainer = document.getElementById('osmMapContainerNovaUni');
                if (!mapContainer) return;

                if (osmMapNovaUni) {
                    osmMapNovaUni.eachLayer(function(layer) {
                        if (layer instanceof L.TileLayer) {
                            osmMapNovaUni.removeLayer(layer);
                        }
                    });
                } else {
                    osmMapNovaUni = L.map('osmMapContainerNovaUni').setView(mapCoordinatesNovaUni, mapZoomLevelNovaUni);
                }

                let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                let tileOptions = {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                };

                const tilePane = osmMapNovaUni.getPane('tilePane');

                if (theme === 'dark') {
                    if (tilePane) tilePane.classList.add('dark-tiles-nova-uni');
                } else {
                    if (tilePane) tilePane.classList.remove('dark-tiles-nova-uni');
                }

                L.tileLayer(tileUrl, tileOptions).addTo(osmMapNovaUni);

                // Check if a marker already exists before adding a new one
                let markerExists = false;
                osmMapNovaUni.eachLayer(function(layer) {
                    if (layer instanceof L.Marker) {
                        markerExists = true;
                    }
                });

                if (!markerExists) {
                    L.marker(mapCoordinatesNovaUni).addTo(osmMapNovaUni)
                        .bindPopup('<b>Nova Universitas</b><br>Distrik Kreatif, Kota Inovasi.')
                        .openPopup();
                }
            }

            const currentThemeNovaUni = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            initOrUpdateMapNovaUni(currentThemeNovaUni);

            // Komentar JavaScript: Dengarkan event perubahan tema dari index.php
            document.addEventListener('themeChangedNovaUni', function(e) {
                initOrUpdateMapNovaUni(e.detail.theme);
            });

        } else {
            console.warn('Leaflet.js library not loaded. Map for Nova Universitas cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainerNovaUni');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding:50px 20px;">Peta tidak dapat dimuat.</p>';
            }
        }
    });
</script>