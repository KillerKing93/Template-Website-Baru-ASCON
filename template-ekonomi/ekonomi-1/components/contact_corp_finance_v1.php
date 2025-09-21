<?php // File: components_econ_v1/contact_corp_finance_v1.php - Kontak Perusahaan Ekonomi (Perbaikan V2) 
?>
<style>
    /* Styles untuk Kontak Section Perusahaan Ekonomi */
    #contactCorpFinance {
        background-color: var(--bg-light-econ);
        padding-bottom: 70px;
        /* Pastikan ada padding bawah jika peta di atas footer */
    }

    body.dark-mode #contactCorpFinance {
        background-color: var(--bg-dark-econ);
    }

    .contact-form-wrapper-econ {
        background-color: var(--card-bg-light-econ);
        padding: 30px 30px;
        border-radius: 8px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        border: 1px solid var(--border-light-econ);
    }

    body.dark-mode .contact-form-wrapper-econ {
        background-color: var(--card-bg-dark-econ);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
        border-color: var(--border-dark-econ);
    }

    .contact-form-wrapper-econ h3.contact-form-title {
        font-size: 1.6rem;
        font-weight: 600;
        margin-bottom: 18px;
        color: var(--primary-econ);
        text-align: center;
    }

    body.dark-mode .contact-form-wrapper-econ h3.contact-form-title {
        color: var(--primary-econ-dark);
    }

    .contact-form-econ .form-control-econ {
        border-radius: 5px;
        padding: 9px 14px;
        /* Padding input disesuaikan */
        font-size: 0.9rem;
        border: 1px solid var(--border-light-econ);
        background-color: #fff;
        color: var(--text-light-econ);
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .contact-form-econ .form-control-econ:focus {
        border-color: var(--secondary-econ);
        box-shadow: 0 0 0 0.15rem rgba(var(--secondary-econ-rgb), 0.2);
        /* Shadow fokus lebih tipis */
    }

    body.dark-mode .contact-form-econ .form-control-econ {
        background-color: var(--bg-dark-econ);
        border-color: var(--border-dark-econ);
        color: var(--text-dark-econ);
    }

    body.dark-mode .contact-form-econ .form-control-econ:focus {
        border-color: var(--secondary-econ-dark);
        box-shadow: 0 0 0 0.15rem rgba(var(--secondary-econ-dark-rgb), 0.2);
    }

    .contact-form-econ .form-label-econ {
        font-weight: 500;
        color: var(--muted-text-light-econ);
        font-size: 0.82rem;
        margin-bottom: 0.25rem;
    }

    body.dark-mode .contact-form-econ .form-label-econ {
        color: var(--muted-text-dark-econ);
    }

    .contact-form-econ .btn-submit-econ {
        width: 100%;
        padding: 9px 0;
    }

    .contact-details-econ h3.contact-details-title {
        font-size: 1.6rem;
        color: var(--primary-econ);
        margin-bottom: 18px;
    }

    body.dark-mode .contact-details-econ h3.contact-details-title {
        color: var(--primary-econ-dark);
    }

    .contact-details-econ .contact-item-econ {
        display: flex;
        align-items: flex-start;
        margin-bottom: 18px;
    }

    .contact-details-econ .contact-icon-econ {
        font-size: 1.4rem;
        color: var(--secondary-econ);
        margin-right: 12px;
        width: 25px;
        flex-shrink: 0;
        padding-top: 2px;
    }

    body.dark-mode .contact-details-econ .contact-icon-econ {
        color: var(--secondary-econ-dark);
    }

    .contact-details-econ .contact-text-econ h5 {
        font-size: 1.05rem;
        font-weight: 600;
        font-family: 'Montserrat', sans-serif;
        text-transform: none;
        letter-spacing: 0;
        margin-bottom: 3px;
        color: var(--text-light-econ);
    }

    body.dark-mode .contact-details-econ .contact-text-econ h5 {
        color: var(--text-dark-econ);
    }

    .contact-details-econ .contact-text-econ p,
    .contact-details-econ .contact-text-econ p a {
        font-size: 0.92rem;
        color: var(--muted-text-light-econ);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-details-econ .contact-text-econ p,
    body.dark-mode .contact-details-econ .contact-text-econ p a {
        color: var(--muted-text-dark-econ);
    }

    .contact-details-econ .contact-text-econ p a:hover {
        color: var(--primary-econ);
        text-decoration: underline;
    }

    body.dark-mode .contact-details-econ .contact-text-econ p a:hover {
        color: var(--primary-econ-dark);
    }

    .map-wrapper-econ {
        height: 350px;
        border-radius: 6px;
        /* Radius disesuaikan */
        overflow: hidden;
        border: 1px solid var(--border-light-econ);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        /* Shadow disesuaikan */
    }

    body.dark-mode .map-wrapper-econ {
        border-color: var(--border-dark-econ);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
    }

    #leafletMapEcon {
        width: 100%;
        height: 100%;
    }

    body.dark-mode #leafletMapEcon.dark-tiles .leaflet-tile-pane {
        filter: grayscale(1) invert(1) contrast(0.85) brightness(0.95);
        /* Filter disesuaikan */
    }
</style>

<section id="contact" class="contact-econ-v1 section-econ">
    <div class="container">
        <div class="section-title-econ" data-aos="fade-up">
            <h2>Hubungi Tim Ahli Kami</h2>
            <p class="subtitle-econ">Kami siap mendiskusikan kebutuhan finansial Anda dan memberikan solusi yang paling tepat. Jangan ragu untuk menghubungi kami.</p>
        </div>

        <div class="row gy-4 gy-lg-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                <div class="contact-form-wrapper-econ">
                    <h3 class="contact-form-title">Kirim Pertanyaan Anda</h3>
                    <form action="path/to/your/contact_handler_econ.php" method="post" role="form" class="contact-form-econ needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameEcon" class="form-label-econ">Nama Lengkap</label>
                                <input type="text" name="name_econ" class="form-control form-control-econ" id="contactNameEcon" required placeholder="Nama Anda">
                                <div class="invalid-feedback">Mohon masukkan nama Anda.</div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailEcon" class="form-label-econ">Alamat Email</label>
                                <input type="email" class="form-control form-control-econ" name="email_econ" id="contactEmailEcon" required placeholder="email@anda.com">
                                <div class="invalid-feedback">Mohon masukkan alamat email yang valid.</div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectEcon" class="form-label-econ">Subjek</label>
                            <input type="text" class="form-control form-control-econ" name="subject_econ" id="contactSubjectEcon" required placeholder="Subjek pesan Anda">
                            <div class="invalid-feedback">Mohon masukkan subjek pesan.</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageEcon" class="form-label-econ">Pesan Anda</label>
                            <textarea class="form-control form-control-econ" name="message_econ" rows="5" id="contactMessageEcon" required placeholder="Tuliskan pertanyaan atau detail kebutuhan Anda..."></textarea>
                            <div class="invalid-feedback">Mohon masukkan pesan Anda.</div>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim...</div>
                            <div class="error-message d-none bg-danger text-white p-2 rounded small"></div>
                            <div class="sent-message d-none bg-success text-white p-2 rounded small">Pesan Anda telah terkirim. Terima kasih!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-econ-primary btn-submit-econ">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                <div class="contact-details-econ">
                    <h3 class="contact-details-title font-oswald fs-4">Informasi Kontak Kami</h3>
                    <div class="contact-item-econ">
                        <div class="contact-icon-econ"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-text-econ">
                            <h5>Alamat Kantor Pusat:</h5>
                            <p>QuantumLeap Tower, Lt. 30<br>Jl. Jend. Sudirman Kav. 1-2, Jakarta Pusat, 10220</p>
                        </div>
                    </div>
                    <div class="contact-item-econ">
                        <div class="contact-icon-econ"><i class="fas fa-phone-alt"></i></div>
                        <div class="contact-text-econ">
                            <h5>Telepon Layanan:</h5>
                            <p><a href="tel:+622150012345">(021) 500 12345</a></p>
                        </div>
                    </div>
                    <div class="contact-item-econ">
                        <div class="contact-icon-econ"><i class="fas fa-envelope"></i></div>
                        <div class="contact-text-econ">
                            <h5>Email Konsultasi:</h5>
                            <p><a href="mailto:konsultasi@quantumleap.finance">konsultasi@quantumleap.finance</a></p>
                        </div>
                    </div>
                    <div class="contact-item-econ">
                        <div class="contact-icon-econ"><i class="fas fa-clock"></i></div>
                        <div class="contact-text-econ">
                            <h5>Jam Operasional:</h5>
                            <p>Senin - Jumat: 08:30 - 17:30 WIB</p>
                        </div>
                    </div>
                    <div class="mt-4 map-wrapper-econ" data-aos="zoom-in" data-aos-delay="300">
                        <div id="leafletMapEcon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.contact-form-econ.needs-validation') // Lebih spesifik
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')

                        // Contoh sederhana untuk menampilkan pesan (tanpa AJAX)
                        // if (form.checkValidity()) {
                        //     event.preventDefault(); 
                        //     form.querySelector('.sent-message').classList.remove('d-none');
                        //     form.reset();
                        //     form.classList.remove('was-validated');
                        //     setTimeout(() => {
                        //         form.querySelector('.sent-message').classList.add('d-none');
                        //     }, 5000);
                        // }

                    }, false)
                })
        })();

        if (typeof L !== 'undefined') {
            const mapContainer = document.getElementById('leafletMapEcon');
            if (mapContainer) {
                const mapCoordinatesEcon = [-6.2087634, 106.845599];
                const mapZoomLevelEcon = 14;
                let leafletMapEconInstance;

                function initOrUpdateLeafletMap(theme) {
                    if (leafletMapEconInstance) {
                        leafletMapEconInstance.eachLayer(function(layer) {
                            if (layer instanceof L.TileLayer) leafletMapEconInstance.removeLayer(layer);
                        });
                    } else {
                        leafletMapEconInstance = L.map(mapContainer).setView(mapCoordinatesEcon, mapZoomLevelEcon);
                    }

                    let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                    let tileOptions = {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        maxZoom: 18,
                    };

                    // Tambah class untuk styling tile di dark mode
                    // Tile pane akan memiliki class 'dark-tiles' jika dark mode aktif
                    const tilePane = leafletMapEconInstance.getPane('tilePane'); // Dapatkan tilePane
                    if (tilePane) { // Pastikan tilePane ada
                        if (theme === 'dark') {
                            mapContainer.classList.add('dark-tiles'); // Class pada container peta
                            // Anda bisa juga menambahkan class pada tilePane jika diperlukan styling lebih spesifik
                            // tilePane.classList.add('dark-tiles-leaflet-pane'); 
                        } else {
                            mapContainer.classList.remove('dark-tiles');
                            // tilePane.classList.remove('dark-tiles-leaflet-pane');
                        }
                    }

                    L.tileLayer(tileUrl, tileOptions).addTo(leafletMapEconInstance);

                    let markerExists = false;
                    leafletMapEconInstance.eachLayer(layer => {
                        if (layer instanceof L.Marker) markerExists = true;
                    });
                    if (!markerExists) {
                        L.marker(mapCoordinatesEcon).addTo(leafletMapEconInstance)
                            .bindPopup('<b>QuantumLeap Finance HQ</b><br>QuantumLeap Tower, Jakarta.')
                            .openPopup();
                    }
                }

                const currentThemeEcon = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
                initOrUpdateLeafletMap(currentThemeEcon);

                document.addEventListener('themeChangedEconV1', function(e) {
                    if (leafletMapEconInstance) { // Pastikan peta sudah diinisialisasi
                        initOrUpdateLeafletMap(e.detail.theme);
                    }
                });
            } else {
                console.warn('Leaflet.js tidak dimuat atau kontainer peta tidak ditemukan.');
                const mapPlaceholder = document.getElementById('leafletMapEcon');
                if (mapPlaceholder) mapPlaceholder.innerHTML = '<p style="text-align:center; padding: 20px; color: var(--muted-text-light-econ);">Peta lokasi tidak tersedia.</p>';
            }
        } else {
            const mapPlaceholder = document.getElementById('leafletMapEcon');
            if (mapPlaceholder) mapPlaceholder.innerHTML = '<p style="text-align:center; padding: 20px; color: var(--muted-text-light-econ);">Peta lokasi tidak tersedia.</p>';
        }
    });
</script>