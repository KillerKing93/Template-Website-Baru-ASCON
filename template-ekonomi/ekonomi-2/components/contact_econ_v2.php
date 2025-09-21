<?php // File: components_econ_v2/contact_econ_v2.php - Kontak Vertex Capital Partners 
?>
<style>
    /* Styles untuk Kontak Section Vertex Capital Partners */
    #contactVertex {
        background-color: var(--bg-light-vertex);
        padding-bottom: 0 !important;
        /* Section tidak punya padding bawah, peta akan mengisi */
    }

    body.dark-mode #contactVertex {
        background-color: var(--bg-dark-vertex);
    }

    .contact-form-wrapper-vertex {
        background-color: var(--card-bg-light-vertex);
        padding: 35px 40px;
        border-radius: 8px;
        box-shadow: 0 10px 25px rgba(var(--primary-vertex-rgb), 0.07);
        border: 1px solid var(--border-light-vertex);
    }

    body.dark-mode .contact-form-wrapper-vertex {
        background-color: var(--card-bg-dark-vertex);
        box-shadow: 0 10px 25px rgba(var(--primary-vertex-dark-rgb), 0.1);
        border-color: var(--border-dark-vertex);
    }

    .contact-form-wrapper-vertex h3.contact-form-title-vertex {
        font-size: 1.8rem;
        font-weight: 700;
        /* Raleway lebih tebal */
        margin-bottom: 25px;
        color: var(--primary-vertex);
        text-align: center;
    }

    body.dark-mode .contact-form-wrapper-vertex h3.contact-form-title-vertex {
        color: var(--primary-vertex-dark);
    }

    .contact-form-vertex .form-control-vertex {
        border-radius: 5px;
        padding: 11px 16px;
        font-size: 0.95rem;
        border: 1px solid var(--border-light-vertex);
        background-color: var(--bg-light-vertex);
        /* Latar input sedikit beda dari card */
        color: var(--text-light-vertex);
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        font-family: 'Lato', sans-serif;
        /* Font Lato untuk input */
    }

    .contact-form-vertex .form-control-vertex:focus {
        border-color: var(--secondary-vertex);
        box-shadow: 0 0 0 0.2rem rgba(var(--secondary-vertex-rgb), 0.2);
    }

    body.dark-mode .contact-form-vertex .form-control-vertex {
        background-color: var(--bg-dark-vertex);
        border-color: var(--border-dark-vertex);
        color: var(--text-dark-vertex);
    }

    body.dark-mode .contact-form-vertex .form-control-vertex:focus {
        border-color: var(--secondary-vertex-dark);
        box-shadow: 0 0 0 0.2rem rgba(var(--secondary-vertex-dark-rgb), 0.2);
    }

    .contact-form-vertex .form-label-vertex {
        font-weight: 600;
        /* Label lebih tebal */
        color: var(--muted-text-light-vertex);
        font-size: 0.88rem;
        margin-bottom: 0.4rem;
        font-family: 'Raleway', sans-serif;
        /* Font Raleway untuk label */
    }

    body.dark-mode .contact-form-vertex .form-label-vertex {
        color: var(--muted-text-dark-vertex);
    }

    .contact-form-vertex .btn-submit-vertex {
        width: 100%;
        padding: 11px 0;
        font-size: 1rem;
        /* Ukuran font tombol */
        /* Menggunakan class global .btn-vertex-primary */
    }

    .contact-details-vertex h3.contact-details-title-vertex {
        font-size: 1.8rem;
        color: var(--primary-vertex);
        margin-bottom: 22px;
        font-weight: 700;
    }

    body.dark-mode .contact-details-vertex h3.contact-details-title-vertex {
        color: var(--primary-vertex-dark);
    }

    .contact-details-vertex .contact-item-vertex {
        display: flex;
        align-items: flex-start;
        margin-bottom: 22px;
    }

    .contact-details-vertex .contact-icon-vertex {
        font-size: 1.5rem;
        color: var(--secondary-vertex);
        margin-right: 16px;
        width: 28px;
        flex-shrink: 0;
        padding-top: 4px;
        transition: transform 0.3s ease;
    }

    .contact-details-vertex .contact-item-vertex:hover .contact-icon-vertex {
        transform: scale(1.15);
    }

    body.dark-mode .contact-details-vertex .contact-icon-vertex {
        color: var(--secondary-vertex-dark);
    }

    .contact-details-vertex .contact-text-vertex h5 {
        font-size: 1.1rem;
        font-weight: 700;
        /* Raleway lebih tebal */
        font-family: 'Raleway', sans-serif;
        text-transform: none;
        letter-spacing: 0;
        margin-bottom: 4px;
        color: var(--text-light-vertex);
    }

    body.dark-mode .contact-details-vertex .contact-text-vertex h5 {
        color: var(--text-dark-vertex);
    }

    .contact-details-vertex .contact-text-vertex p,
    .contact-details-vertex .contact-text-vertex p a {
        font-size: 0.95rem;
        color: var(--muted-text-light-vertex);
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
        font-family: 'Lato', sans-serif;
        /* Font Lato untuk detail kontak */
    }

    body.dark-mode .contact-details-vertex .contact-text-vertex p,
    body.dark-mode .contact-details-vertex .contact-text-vertex p a {
        color: var(--muted-text-dark-vertex);
    }

    .contact-details-vertex .contact-text-vertex p a:hover {
        color: var(--primary-vertex);
        text-decoration: underline;
    }

    body.dark-mode .contact-details-vertex .contact-text-vertex p a:hover {
        color: var(--primary-vertex-dark);
    }

    .map-wrapper-vertex {
        height: 420px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid var(--border-light-vertex);
        box-shadow: 0 6px 18px rgba(var(--primary-vertex-rgb), 0.08);
    }

    body.dark-mode .map-wrapper-vertex {
        border-color: var(--border-dark-vertex);
        box-shadow: 0 6px 18px rgba(var(--primary-vertex-dark-rgb), 0.1);
    }

    #leafletMapVertex {
        width: 100%;
        height: 100%;
    }

    body.dark-mode #leafletMapVertex.dark-tiles .leaflet-tile-pane {
        filter: grayscale(0.8) invert(1) contrast(0.9) brightness(0.95) hue-rotate(10deg);
        /* Filter dark map disesuaikan */
    }
</style>

<section id="contactVertex" class="contact-vertex-v2 section-vertex pb-0">
    <div class="container pb-5"> <?php // Container untuk konten di atas peta 
                                    ?>
        <div class="section-title-vertex" data-aos="fade-up">
            <h2>Hubungi Vertex Capital</h2>
            <p class="subtitle-vertex">Kami siap mendengar dari Anda. Sampaikan pertanyaan, ide, atau kebutuhan investasi Anda kepada tim ahli kami.</p>
        </div>

        <div class="row gy-4 gy-lg-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                <div class="contact-form-wrapper-vertex">
                    <h3 class="contact-form-title-vertex">Kirim Pesan Langsung</h3>
                    <form action="path/to/your/contact_handler_vertex.php" method="post" role="form" class="contact-form-vertex needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameVertex" class="form-label-vertex">Nama Lengkap Anda</label>
                                <input type="text" name="name_vertex" class="form-control form-control-vertex" id="contactNameVertex" required placeholder="Contoh: Johnathan Doe">
                                <div class="invalid-feedback">Nama lengkap wajib diisi.</div>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailVertex" class="form-label-vertex">Alamat Email</label>
                                <input type="email" class="form-control form-control-vertex" name="email_vertex" id="contactEmailVertex" required placeholder="email@domain.com">
                                <div class="invalid-feedback">Alamat email yang valid wajib diisi.</div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectVertex" class="form-label-vertex">Subjek Pesan</label>
                            <input type="text" class="form-control form-control-vertex" name="subject_vertex" id="contactSubjectVertex" required placeholder="Misalnya: Permintaan Konsultasi Investasi">
                            <div class="invalid-feedback">Subjek pesan wajib diisi.</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageVertex" class="form-label-vertex">Detail Pesan</label>
                            <textarea class="form-control form-control-vertex" name="message_vertex" rows="5" id="contactMessageVertex" required placeholder="Tuliskan detail pertanyaan atau kebutuhan Anda di sini..."></textarea>
                            <div class="invalid-feedback">Pesan wajib diisi.</div>
                        </div>
                        <div class="my-3">
                            <div class="loading-vertex d-none small p-2 rounded">Mengirim pesan...</div>
                            <div class="error-message-vertex d-none bg-danger text-white p-2 rounded small"></div>
                            <div class="sent-message-vertex d-none bg-success text-white p-2 rounded small">Pesan Anda telah terkirim. Tim kami akan segera menghubungi Anda.</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-vertex-primary btn-submit-vertex">Kirim Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                <div class="contact-details-vertex">
                    <h3 class="contact-details-title-vertex font-raleway">Informasi Perusahaan</h3>
                    <div class="contact-item-vertex">
                        <div class="contact-icon-vertex"><i class="fas fa-map-marked-alt"></i></div>
                        <div class="contact-text-vertex">
                            <h5>Kantor Pusat:</h5>
                            <p>Vertex Tower, 25th Floor<br>Financial District, Jakarta, 12190, Indonesia</p>
                        </div>
                    </div>
                    <div class="contact-item-vertex">
                        <div class="contact-icon-vertex"><i class="fas fa-phone-volume"></i></div>
                        <div class="contact-text-vertex">
                            <h5>Telepon & Fax:</h5>
                            <p>Tel: <a href="tel:+62215550123">+62 21 555 0123</a><br>Fax: +62 21 555 0124</p>
                        </div>
                    </div>
                    <div class="contact-item-vertex">
                        <div class="contact-icon-vertex"><i class="fas fa-envelope-open-text"></i></div>
                        <div class="contact-text-vertex">
                            <h5>Email Resmi:</h5>
                            <p>Umum: <a href="mailto:info@vertexcapital.co.id">info@vertexcapital.co.id</a><br>Investasi: <a href="mailto:invest@vertexcapital.co.id">invest@vertexcapital.co.id</a></p>
                        </div>
                    </div>
                    <div class="contact-item-vertex">
                        <div class="contact-icon-vertex"><i class="far fa-clock"></i></div>
                        <div class="contact-text-vertex">
                            <h5>Jam Operasional Kantor:</h5>
                            <p>Senin - Jumat: 09:00 - 18:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0 mt-5"> <?php // Peta full width di bawah konten kontak 
                                            ?>
        <div class="map-wrapper-vertex" data-aos="fade-up" data-aos-delay="300">
            <div id="leafletMapVertex"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Validasi form kontak Bootstrap
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.contact-form-vertex.needs-validation')
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
                        //     form.querySelector('.sent-message-vertex').classList.remove('d-none');
                        //     form.reset();
                        //     form.classList.remove('was-validated');
                        //     setTimeout(() => {
                        //         form.querySelector('.sent-message-vertex').classList.add('d-none');
                        //     }, 5000);
                        // }

                    }, false)
                })
        })();

        // Inisialisasi Peta Leaflet
        if (typeof L !== 'undefined') {
            const mapContainerVertex = document.getElementById('leafletMapVertex');
            if (mapContainerVertex) {
                const mapCoordinatesVertex = [-6.2244, 106.8079]; // Contoh: SCBD Jakarta
                const mapZoomLevelVertex = 15;
                let leafletMapVertexInstance;

                function initOrUpdateLeafletMapVertex(theme) {
                    if (leafletMapVertexInstance) {
                        leafletMapVertexInstance.eachLayer(function(layer) {
                            if (layer instanceof L.TileLayer) leafletMapVertexInstance.removeLayer(layer);
                        });
                    } else {
                        leafletMapVertexInstance = L.map(mapContainerVertex).setView(mapCoordinatesVertex, mapZoomLevelVertex);
                    }

                    let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
                    let tileOptions = {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        maxZoom: 18,
                    };

                    const tilePane = leafletMapVertexInstance.getPane('tilePane');
                    if (tilePane) {
                        if (theme === 'dark') {
                            mapContainerVertex.classList.add('dark-tiles');
                        } else {
                            mapContainerVertex.classList.remove('dark-tiles');
                        }
                    }

                    L.tileLayer(tileUrl, tileOptions).addTo(leafletMapVertexInstance);

                    let markerExists = false;
                    leafletMapVertexInstance.eachLayer(layer => {
                        if (layer instanceof L.Marker) markerExists = true;
                    });
                    if (!markerExists) {
                        L.marker(mapCoordinatesVertex).addTo(leafletMapVertexInstance)
                            .bindPopup('<b>Vertex Capital Partners HQ</b><br>Vertex Tower, Financial District.')
                            .openPopup();
                    }
                }

                const currentThemeVertex = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
                initOrUpdateLeafletMapVertex(currentThemeVertex);

                document.addEventListener('themeChangedEconV2', function(e) { // Sesuaikan nama event
                    if (leafletMapVertexInstance) {
                        initOrUpdateLeafletMapVertex(e.detail.theme);
                    }
                });
            } else {
                console.warn('Kontainer peta Leaflet dengan ID "leafletMapVertex" tidak ditemukan.');
            }
        } else {
            const mapPlaceholder = document.getElementById('leafletMapVertex');
            if (mapPlaceholder) mapPlaceholder.innerHTML = '<p style="text-align:center; padding: 20px; color: var(--muted-text-light-vertex);">Peta lokasi tidak dapat dimuat.</p>';
        }
    });
</script>