<?php // File: components/contact_osm_map.php 
?>
<style>
    /* Contact with OpenStreetMap Component Styles */
    #contactOsmMap {
        background-color: var(--bg-light);
        /* Default light */
        transition: background-color 0.3s ease;
    }

    body.dark-mode #contactOsmMap {
        background-color: var(--bg-dark);
    }

    .contact-form-calm {
        background-color: var(--card-bg-light);
        /* Default light */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode .contact-form-calm {
        background-color: var(--card-bg-dark);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
    }

    .contact-form-calm h3 {
        font-size: 1.6rem;
        font-weight: 600;
        margin-bottom: 25px;
        color: var(--primary-calm);
        /* Warna judul form */
    }

    body.dark-mode .contact-form-calm h3 {
        color: var(--accent-calm);
    }

    .contact-form-calm .form-control {
        border-radius: 8px;
        padding: 10px 15px;
        font-size: 0.95rem;
        border: 1px solid var(--border-light);
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, background-color 0.3s ease, color 0.3s ease;
        background-color: #fff;
        /* Default light */
        color: var(--text-light);
    }

    .contact-form-calm .form-control:focus {
        border-color: var(--secondary-calm);
        box-shadow: 0 0 0 0.2rem rgba(var(--secondary-calm-rgb, 168, 218, 220), 0.25);
    }

    body.dark-mode .contact-form-calm .form-control {
        background-color: var(--bg-dark);
        /* Lebih gelap dari card */
        border-color: var(--border-dark);
        color: var(--text-dark);
    }

    body.dark-mode .contact-form-calm .form-control:focus {
        border-color: var(--accent-calm);
        box-shadow: 0 0 0 0.2rem rgba(var(--accent-calm-rgb, 244, 162, 97), 0.25);
    }

    .contact-form-calm .form-label {
        font-weight: 500;
        color: #495057;
        /* Warna label */
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-form-calm .form-label {
        color: #adb5bd;
    }

    .contact-info-calm .info-item-calm {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    .contact-info-calm .info-item-calm i {
        font-size: 1.5rem;
        color: var(--secondary-calm);
        /* Warna ikon info */
        margin-right: 15px;
        width: 25px;
        /* Lebar tetap untuk ikon */
        margin-top: 3px;
        transition: color 0.3s ease;
    }

    body.dark-mode .contact-info-calm .info-item-calm i {
        color: var(--accent-calm);
    }

    .contact-info-calm .info-item-calm h5 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 3px;
        color: var(--text-light);
        /* Default light */
    }

    .contact-info-calm .info-item-calm p,
    .contact-info-calm .info-item-calm p a {
        font-size: 0.95rem;
        color: #6c757d;
        /* Warna teks info */
        margin-bottom: 0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-info-calm .info-item-calm p a:hover {
        color: var(--primary-calm);
        /* Warna link hover */
        text-decoration: underline;
    }

    body.dark-mode .contact-info-calm .info-item-calm h5 {
        color: var(--text-dark);
    }

    body.dark-mode .contact-info-calm .info-item-calm p,
    body.dark-mode .contact-info-calm .info-item-calm p a {
        color: #adb5bd;
    }

    body.dark-mode .contact-info-calm .info-item-calm p a:hover {
        color: var(--accent-calm);
    }

    /* OpenStreetMap Container */
    #osmMapContainer {
        height: 450px;
        width: 100%;
        border-radius: 10px;
        border: 1px solid var(--border-light);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode #osmMapContainer {
        border-color: var(--border-dark);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }

    /* Styling untuk Leaflet map tiles di dark mode (opsional, bisa di JS) */
    body.dark-mode .leaflet-tile-pane {
        /* filter: invert(1) hue-rotate(180deg) brightness(0.9) contrast(0.9); */
        /* Filter ini bisa membuat peta terlihat 'dark mode', tapi kualitas bisa bervariasi */
    }
</style>

<section id="contactOsmMap" class="section-calm">
    <div class="container">
        <div class="section-title-calm" data-aos="fade-up">
            <h2>Hubungi Kami</h2>
            <p class="subtitle-calm">Kami Senang Mendengar dari Anda. Sampaikan Pesan atau Kunjungi Kami.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="contact-form-calm">
                    <h3>Kirim Pesan</h3>
                    <form action="forms/contact_v5.php" method="post" role="form" class="php-email-form-v5">
                        <?php /* Ganti action dengan skrip pemroses form Anda */ ?>
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameV5" class="form-label">Nama</label>
                                <input type="text" name="name_v5" class="form-control" id="contactNameV5" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailV5" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email_v5" id="contactEmailV5" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectV5" class="form-label">Subjek</label>
                            <input type="text" class="form-control" name="subject_v5" id="contactSubjectV5" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageV5" class="form-label">Pesan</label>
                            <textarea class="form-control" name="message_v5" rows="5" id="contactMessageV5" required></textarea>
                        </div>
                        <div class="my-3">
                            <?php /* Placeholder untuk pesan loading/error/sukses */ ?>
                            <div class="loading d-none">Memuat...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Terima kasih!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-calm-primary">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 contact-info-calm" data-aos="fade-left" data-aos-delay="200">
                <h3 style="font-weight:600; margin-bottom:25px;">Informasi Kontak</h3>
                <div class="info-item-calm">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h5>Alamat Kantor:</h5>
                        <p>Jl. Harmoni Raya No. 42, Kota Sejahtera, Indonesia</p>
                    </div>
                </div>
                <div class="info-item-calm">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h5>Email:</h5>
                        <p><a href="mailto:info@namabisnisharmoni.co.id">info@namabisnisharmoni.co.id</a></p>
                    </div>
                </div>
                <div class="info-item-calm">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h5>Telepon:</h5>
                        <p><a href="tel:+622123456789">(021) 2345-6789</a></p>
                    </div>
                </div>
                <div class="info-item-calm">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h5>Jam Operasional:</h5>
                        <p>Senin - Jumat: 08:30 - 17:00 WIB</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <div id="osmMapContainer">
                    <?php /* Komentar PHP: Peta akan diinisialisasi oleh JavaScript di bawah */ ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Inisialisasi OpenStreetMap dengan Leaflet.js
    document.addEventListener('DOMContentLoaded', function() {
        // Pastikan Leaflet.js sudah dimuat (dari index.php)
        if (typeof L !== 'undefined') {
            // Koordinat lokasi (contoh: Monas, Jakarta)
            const mapCoordinates = [-6.175392, 106.827153];
            const mapZoomLevel = 15; // Level zoom peta

            // Inisialisasi peta
            const osmMap = L.map('osmMapContainer').setView(mapCoordinates, mapZoomLevel);

            // Tambahkan tile layer OpenStreetMap
            // Anda bisa memilih tile server lain jika diinginkan
            // Untuk dark mode, bisa menggunakan tile layer yang berbeda atau filter CSS
            const lightTileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
            // Contoh tile layer gelap (opsional, perlu cari yang sesuai)
            // const darkTileUrl = 'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png';

            let currentTileLayer = L.tileLayer(lightTileUrl, {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(osmMap);

            // Tambahkan marker
            L.marker(mapCoordinates).addTo(osmMap)
                .bindPopup('<b>Kantor [NamaBisnis Anda]</b><br>Jl. Harmoni Raya No. 42.')
                .openPopup();

            // Fungsi untuk mengubah tile layer saat tema berganti (jika ada tile layer gelap)
            // Ini perlu diintegrasikan dengan logika theme toggler di index.php
            // Misalnya, panggil fungsi ini dari event listener theme toggler
            window.updateMapTheme = function(theme) {
                // osmMap.removeLayer(currentTileLayer);
                // if (theme === 'dark' && typeof darkTileUrl !== 'undefined') {
                //     currentTileLayer = L.tileLayer(darkTileUrl, { attribution: '...' }).addTo(osmMap);
                // } else {
                //     currentTileLayer = L.tileLayer(lightTileUrl, { attribution: '...' }).addTo(osmMap);
                // }
                // Atau, jika hanya menggunakan filter CSS, toggle class pada map container
                const mapContainer = document.getElementById('osmMapContainer');
                if (theme === 'dark') {
                    mapContainer.classList.add('dark-map-tiles'); // Anda perlu definisikan .dark-map-tiles di CSS
                } else {
                    mapContainer.classList.remove('dark-map-tiles');
                }
            }

            // Panggil updateMapTheme saat tema berubah (perlu dihubungkan dengan event theme toggle)
            // Contoh: document.getElementById('themeToggler').addEventListener('click', () => {
            //     const newTheme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            //     window.updateMapTheme(newTheme);
            // });
            // Inisialisasi tema peta saat load
            // const initialTheme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            // window.updateMapTheme(initialTheme);


        } else {
            console.warn('Leaflet.js library not loaded. Map cannot be initialized.');
            const mapContainer = document.getElementById('osmMapContainer');
            if (mapContainer) {
                mapContainer.innerHTML = '<p style="text-align:center; padding-top:50px;">Peta tidak dapat dimuat. Pastikan Leaflet.js termuat dengan benar.</p>';
            }
        }
    });
</script>