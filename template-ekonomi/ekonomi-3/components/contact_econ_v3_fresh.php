<?php // File: components_econ_v3_fresh/contact_econ_v3_fresh.php - Kontak Aetherium Finance (Fresh) 
?>
<style>
    /* Styles untuk Kontak Section Aetherium Finance */
    #contactAether {
        background-color: var(--bg-light-aether);
        padding-bottom: 0 !important;
        position: relative;
        padding-top: 90px;
    }

    body.dark-mode #contactAether {
        background-color: var(--bg-dark-aether);
    }

    #contactAether .contact-bg-particles-v3-fresh {
        /* Nama class unik */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none;
        overflow: hidden;
    }

    #contactAether .contact-bg-particles-v3-fresh .particle-contact-v3-fresh {
        /* Nama class unik */
        position: absolute;
        border-radius: 50%;
        background-color: rgba(var(--accent-aether-rgb), 0.12);
        animation: floatParticleContactV3FreshRebuild 22s infinite ease-in-out alternate;
        /* Nama animasi unik */
    }

    body.dark-mode #contactAether .contact-bg-particles-v3-fresh .particle-contact-v3-fresh {
        background-color: rgba(var(--accent-aether-dark-rgb), 0.18);
    }

    @keyframes floatParticleContactV3FreshRebuild {

        /* Nama keyframe unik */
        0% {
            transform: translateY(0px) translateX(0px) scale(0.75);
            opacity: 0.04;
        }

        25% {
            transform: translateY(-22px) translateX(18px) scale(0.95);
            opacity: 0.18;
        }

        50% {
            transform: translateY(12px) translateX(-12px) scale(0.65);
            opacity: 0.08;
        }

        75% {
            transform: translateY(-18px) translateX(22px) scale(1);
            opacity: 0.22;
        }

        100% {
            transform: translateY(0px) translateX(0px) scale(0.75);
            opacity: 0.04;
        }
    }

    .contact-form-wrapper-aether {
        background-color: rgba(var(--card-bg-light-aether-rgb), 0.9);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        padding: 35px 40px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(var(--primary-aether-rgb), 0.08);
        border: 1px solid var(--border-light-aether);
        position: relative;
        z-index: 1;
    }

    body.dark-mode .contact-form-wrapper-aether {
        background-color: rgba(var(--card-bg-dark-aether-rgb), 0.92);
        box-shadow: 0 10px 30px rgba(var(--primary-aether-dark-rgb), 0.13);
        border-color: var(--border-dark-aether);
    }

    .contact-form-wrapper-aether h3.contact-form-title-aether {
        font-size: 1.7rem;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--primary-aether);
        text-align: center;
        letter-spacing: 0.4px;
    }

    body.dark-mode .contact-form-wrapper-aether h3.contact-form-title-aether {
        color: var(--primary-aether-dark);
    }

    .contact-form-aether .form-control-aether {
        border-radius: 5px;
        padding: 11px 16px;
        font-size: 0.92rem;
        border: 1px solid var(--border-light-aether);
        background-color: rgba(var(--bg-light-aether-rgb), 0.75);
        color: var(--text-light-aether);
        transition: all .2s ease-in-out;
        font-family: 'Inter', sans-serif;
    }

    .contact-form-aether .form-control-aether::placeholder {
        color: var(--muted-text-light-aether);
        opacity: 0.75;
    }

    .contact-form-aether .form-control-aether:focus {
        border-color: var(--accent-aether);
        box-shadow: 0 0 0 0.16rem rgba(var(--accent-aether-rgb), 0.22);
        background-color: var(--bg-light-aether);
    }

    body.dark-mode .contact-form-aether .form-control-aether {
        background-color: rgba(var(--bg-dark-aether-rgb), 0.78);
        border-color: var(--border-dark-aether);
        color: var(--text-dark-aether);
    }

    body.dark-mode .contact-form-aether .form-control-aether::placeholder {
        color: var(--muted-text-dark-aether);
    }

    body.dark-mode .contact-form-aether .form-control-aether:focus {
        border-color: var(--accent-aether-dark);
        box-shadow: 0 0 0 0.16rem rgba(var(--accent-aether-dark-rgb), 0.28);
        background-color: var(--bg-dark-aether);
    }

    .contact-form-aether .form-label-aether {
        font-weight: 600;
        color: var(--muted-text-light-aether);
        font-size: 0.8rem;
        margin-bottom: 0.28rem;
        font-family: 'Source Code Pro', monospace;
        text-transform: uppercase;
        letter-spacing: 0.9px;
    }

    body.dark-mode .contact-form-aether .form-label-aether {
        color: var(--muted-text-dark-aether);
    }

    .contact-form-aether .btn-submit-aether {
        width: 100%;
        padding: 11px 0;
        font-size: 0.95rem;
        letter-spacing: 1px;
    }

    .contact-details-aether-wrapper {
        position: relative;
        z-index: 1;
    }

    .contact-details-aether h3.contact-details-main-title {
        font-size: 1.7rem;
        color: var(--primary-aether);
        margin-bottom: 25px;
        font-weight: 700;
        letter-spacing: 0.4px;
    }

    body.dark-mode .contact-details-aether h3.contact-details-main-title {
        color: var(--primary-aether-dark);
    }

    .contact-details-aether .contact-item-aether {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        padding: 16px;
        background-color: rgba(var(--card-bg-light-aether-rgb), 0.55);
        border-radius: 6px;
        transition: background-color 0.3s ease, transform 0.25s ease;
        border: 1px solid transparent;
    }

    .contact-details-aether .contact-item-aether:hover {
        background-color: rgba(var(--card-bg-light-aether-rgb), 0.85);
        transform: translateX(4px);
        border-color: var(--border-light-aether);
    }

    body.dark-mode .contact-details-aether .contact-item-aether {
        background-color: rgba(var(--card-bg-dark-aether-rgb), 0.65);
    }

    body.dark-mode .contact-details-aether .contact-item-aether:hover {
        background-color: rgba(var(--card-bg-dark-aether-rgb), 0.85);
        border-color: var(--border-dark-aether);
    }

    .contact-details-aether .contact-icon-aether {
        font-size: 1.6rem;
        color: var(--accent-aether);
        margin-right: 16px;
        width: 30px;
        flex-shrink: 0;
        padding-top: 1px;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .contact-details-aether .contact-item-aether:hover .contact-icon-aether {
        transform: scale(1.1) rotate(5deg);
        color: var(--secondary-aether);
    }

    body.dark-mode .contact-details-aether .contact-icon-aether {
        color: var(--accent-aether-dark);
    }

    body.dark-mode .contact-details-aether .contact-item-aether:hover .contact-icon-aether {
        color: var(--secondary-aether-dark);
    }

    .contact-details-aether .contact-text-aether h5 {
        font-size: 1.1rem;
        font-weight: 600;
        font-family: 'Source Code Pro', monospace;
        text-transform: none;
        letter-spacing: 0;
        margin-bottom: 3px;
        color: var(--text-light-aether);
    }

    body.dark-mode .contact-details-aether .contact-text-aether h5 {
        color: var(--text-dark-aether);
    }

    .contact-details-aether .contact-text-aether p,
    .contact-details-aether .contact-text-aether p a {
        font-size: 0.9rem;
        color: var(--muted-text-light-aether);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
        font-family: 'Inter', sans-serif;
    }

    body.dark-mode .contact-details-aether .contact-text-aether p,
    body.dark-mode .contact-details-aether .contact-text-aether p a {
        color: var(--muted-text-dark-aether);
    }

    .contact-details-aether .contact-text-aether p a:hover {
        color: var(--primary-aether);
        text-decoration: underline;
    }

    body.dark-mode .contact-details-aether .contact-text-aether p a:hover {
        color: var(--primary-aether-dark);
    }

    .map-wrapper-aether {
        height: 400px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid var(--border-light-aether);
        box-shadow: 0 8px 20px rgba(var(--primary-aether-rgb), 0.07);
        position: relative;
        z-index: 1;
    }

    body.dark-mode .map-wrapper-aether {
        border-color: var(--border-dark-aether);
        box-shadow: 0 8px 20px rgba(var(--primary-aether-dark-rgb), 0.1);
    }

    #leafletMapAetherV3 {
        width: 100%;
        height: 100%;
    }

    body.dark-mode #leafletMapAetherV3.dark-tiles .leaflet-tile-pane {
        filter: grayscale(1) invert(0.95) contrast(0.9) brightness(0.95) hue-rotate(5deg) saturate(0.7);
    }
</style>

<section id="contactAether" class="contact-aether-v3 section-aether pb-0">
    <div class="contact-bg-particles-v3-fresh">
        <?php // Partikel akan ditambahkan oleh JavaScript 
        ?>
    </div>
    <div class="container pb-5">
        <div class="section-title-aether" data-aos="fade-up">
            <h2>[ Koneksi Digital Aetherium ]</h2>
            <p class="subtitle-aether">Jaringan Kami Terbuka. Hubungi Tim Pakar FinTech Kami untuk Memulai Diskusi Strategis Anda.</p>
        </div>

        <div class="row gy-4 gy-lg-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                <div class="contact-form-wrapper-aether">
                    <h3 class="contact-form-title-aether">Kirimkan Byte Pertanyaan Anda</h3>
                    <form action="path/to/your/contact_handler_aether.php" method="post" role="form" class="contact-form-aether needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameAetherV3" class="form-label-aether">Nama Pengguna:</label>
                                <input type="text" name="name_aether" class="form-control form-control-aether" id="contactNameAetherV3" required placeholder="Contoh: Neo Anderson">
                                <div class="invalid-feedback">Identitas pengguna diperlukan.</div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailAetherV3" class="form-label-aether">Alamat Jaringan (Email):</label>
                                <input type="email" class="form-control form-control-aether" name="email_aether" id="contactEmailAetherV3" required placeholder="neo@matrix.net">
                                <div class="invalid-feedback">Alamat jaringan yang valid diperlukan.</div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectAetherV3" class="form-label-aether">Subjek Transmisi:</label>
                            <input type="text" class="form-control form-control-aether" name="subject_aether" id="contactSubjectAetherV3" required placeholder="Contoh: Permintaan Demo Platform DeFi">
                            <div class="invalid-feedback">Subjek transmisi diperlukan.</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageAetherV3" class="form-label-aether">Isi Data Stream Anda:</label>
                            <textarea class="form-control form-control-aether" name="message_aether" rows="5" id="contactMessageAetherV3" required placeholder="Jelaskan kebutuhan FinTech atau pertanyaan Anda di sini..."></textarea>
                            <div class="invalid-feedback">Isi data stream diperlukan.</div>
                        </div>
                        <div class="my-3">
                            <div class="loading-aether d-none small p-2 rounded">Mengenkripsi & Mengirim...</div>
                            <div class="error-message-aether d-none bg-danger text-white p-2 rounded small"></div>
                            <div class="sent-message-aether d-none bg-success text-white p-2 rounded small">Transmisi Data Berhasil. Tim Aetherium akan segera merespons.</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-aether-primary btn-submit-aether">Kirim Transmisi</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 contact-details-aether-wrapper" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="contact-details-aether">
                    <h3 class="contact-details-main-title font-source-code">Pusat Komunikasi Aetherium</h3>
                    <div class="contact-item-aether">
                        <div class="contact-icon-aether"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-text-aether">
                            <h5>Alamat Holo-Deck:</h5>
                            <p>Aetherium Hub, Sector 7G, Cyberspace Grid 0.1 <br>Neo-Metropolis, ID-01001</p>
                        </div>
                    </div>
                    <div class="contact-item-aether">
                        <div class="contact-icon-aether"><i class="fas fa-headset"></i></div>
                        <div class="contact-text-aether">
                            <h5>Saluran Komunikasi Langsung:</h5>
                            <p>Tel: <a href="tel:+622101010101">(021) 0101-0101 (Ext: 777)</a></p>
                        </div>
                    </div>
                    <div class="contact-item-aether">
                        <div class="contact-icon-aether"><i class="fas fa-envelope-open-text"></i></div>
                        <div class="contact-text-aether">
                            <h5>Kanal Email Terenkripsi:</h5>
                            <p>General: <a href="mailto:connect@aetherium.finance">connect@aetherium.finance</a><br>Support: <a href="mailto:support@aetherium.finance">support@aetherium.finance</a></p>
                        </div>
                    </div>
                    <div class="contact-item-aether">
                        <div class="contact-icon-aether"><i class="far fa-calendar-alt"></i></div>
                        <div class="contact-text-aether">
                            <h5>Jam Operasional Node:</h5>
                            <p>Senin - Jumat: 09:00 - 18:00 (GMT+7)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 mt-5">
        <div class="map-wrapper-aether" data-aos="fade-up" data-aos-delay="300">
            <div id="leafletMapAetherV3"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.contact-form-aether.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })();

        if (typeof L !== 'undefined') {
            const mapContainerAetherV3 = document.getElementById('leafletMapAetherV3');
            if (mapContainerAetherV3) {
                const mapCoordinatesAetherV3 = [-6.175392, 106.827153];
                const mapZoomLevelAetherV3 = 14;
                let leafletMapAetherInstanceV3;

                function initOrUpdateLeafletMapAetherV3(theme) {
                    if (leafletMapAetherInstanceV3) {
                        leafletMapAetherInstanceV3.eachLayer(function(layer) {
                            if (layer instanceof L.TileLayer) leafletMapAetherInstanceV3.removeLayer(layer);
                        });
                    } else {
                        leafletMapAetherInstanceV3 = L.map(mapContainerAetherV3).setView(mapCoordinatesAetherV3, mapZoomLevelAetherV3);
                    }

                    let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                    let tileOptions = {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        maxZoom: 18,
                    };

                    const tilePane = leafletMapAetherInstanceV3.getPane('tilePane');
                    if (tilePane) {
                        if (theme === 'dark') {
                            mapContainerAetherV3.classList.add('dark-tiles');
                        } else {
                            mapContainerAetherV3.classList.remove('dark-tiles');
                        }
                    }

                    L.tileLayer(tileUrl, tileOptions).addTo(leafletMapAetherInstanceV3);

                    let markerExists = false;
                    leafletMapAetherInstanceV3.eachLayer(layer => {
                        if (layer instanceof L.Marker) markerExists = true;
                    });
                    if (!markerExists) {
                        L.marker(mapCoordinatesAetherV3, {
                                icon: L.icon({
                                    iconUrl: `https://placehold.co/36x36/${theme === 'dark' ? '9F70FD' : '4A00E0'}/FFFFFF?text=AE&font=sourcecodepro&font-size=14`,
                                    iconSize: [36, 36],
                                    iconAnchor: [18, 36],
                                    popupAnchor: [0, -36]
                                })
                            }).addTo(leafletMapAetherInstanceV3)
                            .bindPopup('<b>Aetherium Finance HQ</b><br>Cyberspace Grid 0.1, Neo-Metropolis.')
                            .openPopup();
                    }
                }

                const currentThemeAether = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
                initOrUpdateLeafletMapAetherV3(currentThemeAether);

                document.addEventListener('themeChangedEconV3Fresh', function(e) { // Nama event unik
                    if (leafletMapAetherInstanceV3) {
                        initOrUpdateLeafletMapAetherV3(e.detail.theme);
                    }
                });
            } else {
                console.warn('Kontainer peta Leaflet dengan ID "leafletMapAetherV3" tidak ditemukan.');
            }
        } else {
            const mapPlaceholder = document.getElementById('leafletMapAetherV3');
            if (mapPlaceholder) mapPlaceholder.innerHTML = '<p style="text-align:center; padding: 20px; color: var(--muted-text-light-aether);">Peta lokasi tidak dapat dimuat.</p>';
        }

        const contactBgParticlesContainerV3Fresh = document.querySelector('#contactAether .contact-bg-particles-v3-fresh'); // Selector unik
        if (contactBgParticlesContainerV3Fresh && typeof anime !== 'undefined') {
            const numberOfParticlesContactV3Fresh = 10; // Jumlah partikel disesuaikan
            for (let i = 0; i < numberOfParticlesContactV3Fresh; i++) {
                const p = document.createElement('div');
                p.classList.add('particle-contact-v3-fresh'); // Class unik
                const size = Math.random() * 3.5 + 1.2;
                p.style.width = `${size}px`;
                p.style.height = `${size}px`;
                p.style.left = `${Math.random() * 100}%`;
                p.style.top = `${Math.random() * 100}%`;
                p.style.animationDelay = `${Math.random() * 7}s`;
                p.style.animationDuration = `${Math.random() * 8 + 14}s`;
                contactBgParticlesContainerV3Fresh.appendChild(p);
            }
        }
    });
</script>