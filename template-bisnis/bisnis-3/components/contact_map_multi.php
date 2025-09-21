<?php // File: components/contact_map_multi.php 
?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin="" />

<style>
    /* Contact Map Multi Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --accent-rgb: 0, 255, 237;
        /* Ditambahkan untuk rgba() */
        --card-bg: #1E1E1E;
        --dark-bg: #121212;
        --dark-bg-rgb: 18, 18, 18;
        /* Variabel untuk warna RGB dari dark-bg */
        --border-color: rgba(0, 255, 237, 0.2);
        --text-color: #E0E0E0;
        /* Warna teks umum untuk tema gelap */
        --text-color-muted: #B0B0B0;
    }

    #contactMapMulti {
        background-color: var(--dark-bg);
        padding-bottom: 0;
    }

    .contact-form-futuristic {
        background-color: var(--card-bg);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        border: 1px solid var(--border-color);
    }

    .contact-form-futuristic h3 {
        color: #fff;
        margin-bottom: 30px;
        font-size: 1.8rem;
        text-align: center;
    }

    .contact-form-futuristic .form-control {
        background-color: var(--dark-bg);
        border: 1px solid var(--border-color);
        color: var(--text-color);
        border-radius: 8px;
        padding: 12px 15px;
        font-size: 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-form-futuristic .form-control::placeholder {
        color: var(--text-color-muted);
        opacity: 0.7;
    }

    .contact-form-futuristic .form-control:focus {
        background-color: #2a2a2a;
        border-color: var(--accent-color);
        box-shadow: 0 0 15px rgba(var(--accent-rgb), 0.2);
        color: #fff;
    }

    .contact-form-futuristic .form-label {
        color: var(--accent-color);
        font-weight: 500;
        margin-bottom: 8px;
    }

    .contact-form-futuristic textarea.form-control {
        min-height: 150px;
    }

    .contact-form-futuristic .btn-submit-futuristic {
        width: 100%;
        /* Asumsikan btn-futuristic-primary sudah didefinisikan di tempat lain */
    }

    .contact-details-futuristic {
        padding: 30px;
    }

    .contact-details-futuristic .info-box {
        display: flex;
        align-items: flex-start;
        padding: 20px;
        background-color: var(--card-bg);
        border-radius: 10px;
        margin-bottom: 20px;
        border-left: 4px solid var(--accent-color);
        transition: background-color 0.3s ease;
    }

    .contact-details-futuristic .info-box:hover {
        background-color: rgba(var(--accent-rgb), 0.1);
    }

    .contact-details-futuristic .info-box i {
        font-size: 1.8rem;
        color: var(--accent-color);
        margin-right: 20px;
        width: 30px;
        line-height: 1;
    }

    .contact-details-futuristic .info-box h5 {
        font-size: 1.1rem;
        color: #fff;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .contact-details-futuristic .info-box p,
    .contact-details-futuristic .info-box p a {
        font-size: 0.95rem;
        color: var(--text-color-muted);
        margin-bottom: 0;
        text-decoration: none;
    }

    .contact-details-futuristic .info-box p a:hover {
        color: var(--accent-color);
        text-decoration: underline;
    }

    /* Map Container */
    #mapContainer {
        width: 100%;
        height: 500px;
        margin-top: 50px;
        border-radius: 15px;
        overflow: hidden;
        border: 2px solid var(--border-color);
        box-shadow: 0 0 20px rgba(var(--accent-rgb), 0.1);
        background-color: var(--dark-bg);
        /* Latar belakang untuk peta saat memuat */
    }

    /* Custom styles for Leaflet popups to match dark theme */
    .leaflet-popup-content-wrapper {
        background: var(--card-bg);
        color: var(--text-color);
        border-radius: 8px;
        border: 1px solid var(--border-color);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .leaflet-popup-content {
        color: var(--text-color);
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .leaflet-popup-content h5 {
        color: #fff;
        /* Atau var(--accent-color) */
        margin: 0 0 8px 0;
        font-size: 1.1em;
        font-weight: bold;
    }

    .leaflet-popup-content p {
        color: var(--text-color-muted);
        margin: 0;
    }

    .leaflet-popup-tip {
        background: var(--card-bg);
    }

    .leaflet-popup-close-button {
        color: var(--text-color-muted) !important;
        /* Penting untuk override */
    }

    .leaflet-popup-close-button:hover {
        color: var(--accent-color) !important;
        /* Penting untuk override */
    }

    .leaflet-container a.leaflet-popup-close-button {
        color: var(--text-color-muted);
    }

    .leaflet-container a.leaflet-popup-close-button:hover {
        color: var(--accent-color);
    }

    /* Styling untuk link di dalam popup */
    .leaflet-popup-content a {
        color: var(--accent-color);
        text-decoration: underline;
    }

    .leaflet-control-attribution a {
        color: var(--accent-color);
        /* Atribusi OpenStreetMap */
    }

    .leaflet-control-attribution {
        background: rgba(var(--dark-bg-rgb), 0.7) !important;
        color: var(--text-color-muted);
    }
</style>

<section id="contactMapMulti" class="section">
    <div class="container">
        <div class="section-title-futuristic" data-aos="fade-up">
            <h2>Terhubung Dengan Kami</h2>
            <p class="subtitle">Jangkau Tim Kami Melalui Berbagai Kanal atau Kunjungi Lokasi Kami</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                <div class="contact-form-futuristic">
                    <h3>Kirim Pesan Cepat</h3>
                    <form action="forms/contact_v3.php" method="post" role="form" class="php-email-form-v3">
                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactNameV3" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name_v3" class="form-control" id="contactNameV3" placeholder="Mis: John Doe" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="contactEmailV3" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" name="email_v3" id="contactEmailV3" placeholder="Mis: john.doe@example.com" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactSubjectV3" class="form-label">Subjek Pesan</label>
                            <input type="text" class="form-control" name="subject_v3" id="contactSubjectV3" placeholder="Mis: Pertanyaan tentang Layanan AI" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contactMessageV3" class="form-label">Isi Pesan Anda</label>
                            <textarea class="form-control" name="message_v3" rows="5" id="contactMessageV3" placeholder="Tuliskan pesan detail Anda di sini..." required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Mengirim...</div>
                            <div class="error-message d-none"></div>
                            <div class="sent-message d-none">Pesan Anda telah terkirim. Kami akan segera menghubungi Anda!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-futuristic-primary btn-submit-futuristic">Kirim Sekarang <i class="fas fa-paper-plane ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                <div class="contact-details-futuristic">
                    <div class="info-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Kantor Pusat:</h5>
                            <p>CyberTower Lt. 25, Jl. Matrix No. 1, Jakarta Digital Valley, Indonesia</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <i class="fas fa-satellite-dish"></i>
                        <div>
                            <h5>Kantor Riset & Inovasi:</h5>
                            <p>TechnoPark Bloc C, Jl. Inovasi Raya No. 8, Bandung Future City, Indonesia</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <i class="fas fa-envelope-open-text"></i>
                        <div>
                            <h5>Email & Dukungan:</h5>
                            <p><a href="mailto:halo@namabisnis.co.id">halo@namabisnis.co.id</a> (Umum)<br><a href="mailto:support-tech@namabisnis.co.id">support-tech@namabisnis.co.id</a> (Teknis)</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <i class="fas fa-headset"></i>
                        <div>
                            <h5>Layanan Pelanggan:</h5>
                            <p><a href="tel:+62219876543">+62-21-9876-5432</a> (Jam Kerja)<br>Live Chat tersedia di website</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mapContainer" data-aos="fade-up" data-aos-delay="300">
    </div>
</section>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const locations = [{
                lat: -6.200000,
                lng: 106.816666,
                title: 'Kantor Pusat Jakarta',
                address: 'CyberTower Lt. 25, Jl. Matrix No. 1, Jakarta Digital Valley, Indonesia'
            },
            {
                lat: -6.914744,
                lng: 107.609810,
                title: 'Kantor Riset & Inovasi',
                address: 'TechnoPark Bloc C, Jl. Inovasi Raya No. 8, Bandung Future City, Indonesia'
            }
        ];

        const mapElement = document.getElementById('mapContainer');
        if (!mapElement) {
            console.error("Elemen kontainer peta (#mapContainer) tidak ditemukan!");
            return; // Ditambahkan semikolon untuk konsistensi
        }

        // Inisialisasi peta, pusatkan antara Jakarta & Bandung dengan zoom yang sesuai
        const map = L.map('mapContainer').setView([-6.557372, 107.213238], 8); // Ditambahkan semikolon

        // Tambahkan tile layer OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 19
        }).addTo(map); // Ditambahkan semikolon

        // Tambahkan marker untuk setiap lokasi
        locations.forEach(loc => {
            const marker = L.marker([loc.lat, loc.lng]).addTo(map);
            // PERBAIKAN: Menghapus backslash (\) yang tidak perlu sebelum backtick (`)
            marker.bindPopup(`<h5>${loc.title}</h5><p>${loc.address}</p>`); // Ditambahkan semikolon
        });

        // (Opsional) Tambahkan kontrol zoom ke posisi yang berbeda jika standar tidak cocok
        // map.zoomControl.setPosition('topright');
    });
</script>