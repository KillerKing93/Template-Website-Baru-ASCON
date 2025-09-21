<?php // File: components/kontak_pendidikan_athenaeum_osm_v2.php 
?>
<style>
    /* Styles untuk Kontak Section dengan OpenStreetMap */
    #kontak-component {
        background-color: var(--bg-primary);
        padding-bottom: 0 !important;
        /* Section tidak punya padding bawah, peta akan mengisi */
    }

    .contact-form-athenaeum {
        background-color: var(--card-bg);
        border: 1px solid var(--border-color);
        box-shadow: 0 8px 25px color-mix(in srgb, var(--text-primary) 7%, transparent);
        transition: all 0.3s ease;
    }

    html.dark .contact-form-athenaeum {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }


    .contact-form-athenaeum h3 {
        font-family: 'Cinzel Decorative', serif;
        color: var(--color-p);
    }

    .contact-form-athenaeum .form-control-athenaeum {
        border: 1px solid var(--border-color);
        background-color: var(--bg-primary);
        /* Atau #fff untuk light, var(--card-bg-dark) untuk dark */
        color: var(--text-primary);
        transition: all 0.3s ease;
        font-family: 'Inter', sans-serif;
    }

    .contact-form-athenaeum .form-control-athenaeum:focus {
        border-color: var(--color-p);
        box-shadow: 0 0 0 0.2rem color-mix(in srgb, var(--color-p) 20%, transparent);
        background-color: var(--card-bg);
        /* Lebih terang saat fokus */
    }

    html.dark .contact-form-athenaeum .form-control-athenaeum {
        background-color: color-mix(in srgb, var(--bg-primary-dark) 80%, black);
    }

    html.dark .contact-form-athenaeum .form-control-athenaeum:focus {
        background-color: var(--card-bg-dark);
    }

    .contact-form-athenaeum .form-label-athenaeum {
        color: var(--text-muted);
        font-family: 'Inter', sans-serif;
    }

    .contact-details-athenaeum .info-box-athenaeum {
        border-bottom: 1px solid var(--border-color);
        transition: border-color 0.3s ease, background-color 0.3s ease;
        border-radius: 0.375rem;
        /* rounded-md */
    }

    .contact-details-athenaeum .info-box-athenaeum:hover {
        background-color: color-mix(in srgb, var(--card-bg) 80%, transparent);
        border-left: 4px solid var(--color-s);
    }

    .contact-details-athenaeum .info-box-athenaeum i.icon-contact-athenaeum {
        color: var(--color-s);
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .contact-details-athenaeum .info-box-athenaeum:hover i.icon-contact-athenaeum {
        transform: scale(1.15) rotate(-5deg);
    }

    .contact-details-athenaeum .info-box-athenaeum h5 {
        font-family: 'Cinzel Decorative', serif;
        color: var(--text-primary);
    }

    .contact-details-athenaeum .info-box-athenaeum p,
    .contact-details-athenaeum .info-box-athenaeum p a {
        color: var(--text-muted);
        text-decoration: none;
        transition: color 0.3s ease;
        font-family: 'EB Garamond', serif;
    }

    .contact-details-athenaeum .info-box-athenaeum p a:hover {
        color: var(--color-p);
        text-decoration: underline;
    }

    #osmMapContainerAthenaeum {
        border: 1px solid var(--border-color);
        box-shadow: 0 8px 25px color-mix(in srgb, var(--text-primary) 7%, transparent);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    html.dark #osmMapContainerAthenaeum {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    /* Filter untuk peta di dark mode */
    .leaflet-tile-pane.dark-tiles-athenaeum {
        filter: grayscale(0.7) invert(1) contrast(0.85) brightness(0.9);
    }
</style>

<section id="kontak" class="kontak-component section-athenaeum pb-0">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 pb-20 lg:pb-28">
        <div class="section-title-athenaeum" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl">Hubungi <span class="text-[var(--color-s)]">Athenaeum Digitalis</span></h2>
            <p class="subtitle-athenaeum mt-3 text-lg lg:text-xl">
                Kami Menyambut Pertanyaan, Kunjungan, dan Peluang Kolaborasi.
            </p>
        </div>

        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12">
            <div class="lg:col-span-7" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100">
                <div class="contact-form-athenaeum p-6 lg:p-8 rounded-lg h-full">
                    <h3 class="text-2xl lg:text-3xl font-bold mb-6 text-center">Kirimkan Pesan Anda</h3>
                    <form action="path/to/your/contact_form_handler.php" method="post" role="form" class="php-email-form-athenaeum space-y-5">
                        <?php // Komentar PHP: Sesuaikan 'action' dengan URL handler form Anda 
                        ?>
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label for="contactNameAthenaeum" class="form-label-athenaeum block text-sm font-medium mb-1.5">Nama Lengkap</label>
                                <input type="text" name="name_athenaeum" class="form-control-athenaeum w-full px-4 py-2.5 rounded-md text-sm" id="contactNameAthenaeum" required placeholder="Nama Anda">
                            </div>
                            <div>
                                <label for="contactEmailAthenaeum" class="form-label-athenaeum block text-sm font-medium mb-1.5">Alamat Email</label>
                                <input type="email" class="form-control-athenaeum w-full px-4 py-2.5 rounded-md text-sm" name="email_athenaeum" id="contactEmailAthenaeum" required placeholder="email@contoh.com">
                            </div>
                        </div>
                        <div>
                            <label for="contactSubjectAthenaeum" class="form-label-athenaeum block text-sm font-medium mb-1.5">Subjek</label>
                            <input type="text" class="form-control-athenaeum w-full px-4 py-2.5 rounded-md text-sm" name="subject_athenaeum" id="contactSubjectAthenaeum" required placeholder="Subjek pesan">
                        </div>
                        <div>
                            <label for="contactMessageAthenaeum" class="form-label-athenaeum block text-sm font-medium mb-1.5">Pesan Anda</label>
                            <textarea class="form-control-athenaeum w-full px-4 py-2.5 rounded-md text-sm" name="message_athenaeum" rows="5" id="contactMessageAthenaeum" required placeholder="Tuliskan pesan Anda di sini..."></textarea>
                        </div>
                        <div class="my-3 hidden"> <?php /* Untuk pesan loading/error/sukses dari JS form handler */ ?>
                            <div class="loading">Mengirim...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
                        </div>
                        <div class="text-center pt-2">
                            <button type="submit" class="btn-athenaeum btn-athenaeum-primary w-full sm:w-auto text-sm px-8 py-3 rounded-lg">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-5 contact-details-athenaeum space-y-6" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <h3 class="text-2xl lg:text-3xl font-bold mb-0 text-[var(--color-p)] font-cinzel text-center lg:text-left">Informasi Kontak</h3>
                <div class="info-box-athenaeum flex items-start p-4 hover:pl-5 transition-all duration-300">
                    <i class="fas fa-map-marked-alt icon-contact-athenaeum text-2xl lg:text-3xl mr-4 mt-1 w-8 text-center shrink-0"></i>
                    <div>
                        <h5 class="text-lg lg:text-xl font-semibold mb-0.5">Alamat Perpustakaan:</h5>
                        <p class="text-sm lg:text-base">Jl. Cendekia Utama No. 123, Kota Pelajar, ID 45678</p>
                    </div>
                </div>
                <div class="info-box-athenaeum flex items-start p-4 hover:pl-5 transition-all duration-300">
                    <i class="fas fa-envelope-open-text icon-contact-athenaeum text-2xl lg:text-3xl mr-4 mt-1 w-8 text-center shrink-0"></i>
                    <div>
                        <h5 class="text-lg lg:text-xl font-semibold mb-0.5">Email Layanan:</h5>
                        <p class="text-sm lg:text-base"><a href="mailto:info@athenaeumdigitalis.id">info@athenaeumdigitalis.id</a></p>
                    </div>
                </div>
                <div class="info-box-athenaeum flex items-start p-4 hover:pl-5 transition-all duration-300">
                    <i class="fas fa-phone-volume icon-contact-athenaeum text-2xl lg:text-3xl mr-4 mt-1 w-8 text-center shrink-0"></i>
                    <div>
                        <h5 class="text-lg lg:text-xl font-semibold mb-0.5">Telepon Kantor:</h5>
                        <p class="text-sm lg:text-base"><a href="tel:+622123456789">(021) 2345-6789</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full h-[400px] lg:h-[480px] mt-12 lg:mt-16" data-aos="fade-up" data-aos-delay="300">
        <div id="osmMapContainerAthenaeum" class="w-full h-full rounded-t-lg lg:rounded-lg">
            <?php // Komentar PHP: Peta akan diinisialisasi oleh JavaScript di bawah 
            ?>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Script khusus untuk Kontak Section (termasuk Peta Leaflet)
    document.addEventListener('DOMContentLoaded', function() {
        let osmMapInstance; // Variabel untuk menyimpan instance peta

        function initOrUpdateMap(theme) {
            const mapContainer = document.getElementById('osmMapContainerAthenaeum');
            if (!mapContainer || typeof L === 'undefined') {
                if (mapContainer) mapContainer.innerHTML = '<p class="text-center p-10 text-[var(--text-muted)]">Peta tidak dapat dimuat. Pastikan koneksi internet dan library Leaflet tersedia.</p>';
                console.warn('Leaflet.js library not loaded or map container not found.');
                return;
            }

            const mapCoordinates = [-6.200000, 106.816666]; // Contoh: Jakarta, Indonesia
            const mapZoomLevel = 13;
            const tilePaneClass = 'dark-tiles-athenaeum';

            if (osmMapInstance) { // Jika peta sudah ada, hapus tile layer lama
                osmMapInstance.eachLayer(function(layer) {
                    if (layer instanceof L.TileLayer) {
                        osmMapInstance.removeLayer(layer);
                    }
                });
            } else { // Inisialisasi peta jika belum ada
                osmMapInstance = L.map(mapContainer).setView(mapCoordinates, mapZoomLevel);
            }

            // Pilih tile layer berdasarkan tema
            let tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
            let tileOptions = {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                maxZoom: 19,
            };

            // Tambahkan atau hapus class untuk filter CSS pada tile pane
            const tilePane = osmMapInstance.getPane('tilePane');
            if (tilePane) {
                if (theme === 'dark') {
                    tilePane.classList.add(tilePaneClass);
                    // Pertimbangkan menggunakan tile layer khusus dark mode jika tersedia dan diinginkan
                    // tileUrl = 'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png';
                    // tileOptions.attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>';
                } else {
                    tilePane.classList.remove(tilePaneClass);
                }
            }

            L.tileLayer(tileUrl, tileOptions).addTo(osmMapInstance);

            // Tambahkan marker (hanya sekali saat inisialisasi pertama atau jika belum ada)
            let markerExists = false;
            osmMapInstance.eachLayer(function(layer) {
                if (layer instanceof L.Marker) {
                    markerExists = true;
                }
            });

            if (!markerExists) {
                L.marker(mapCoordinates).addTo(osmMapInstance)
                    .bindPopup('<b>Athenaeum Digitalis</b><br>Jl. Cendekia Utama No. 123, Kota Pelajar.')
                    .openPopup();
            }
        }

        // Dapatkan tema saat ini dari HTML element (dikelola oleh script global di index.php)
        const currentTheme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
        initOrUpdateMap(currentTheme);

        // Dengarkan event 'themeChanged' yang di-dispatch oleh script global
        document.addEventListener('themeChanged', function(e) {
            initOrUpdateMap(e.detail.theme);
        });

        // Komentar PHP: Logika untuk form submission (contoh sederhana, idealnya pakai AJAX)
        // const contactForm = document.querySelector('.php-email-form-athenaeum');
        // if (contactForm) {
        //     contactForm.addEventListener('submit', function(e) {
        //         e.preventDefault();
        //         // Tambahkan logika AJAX untuk mengirim form data ke backend (contact_form_handler.php)
        //         // Tampilkan pesan loading, sukses, atau error
        //         console.log('Form submitted (simulasi). Implementasikan AJAX.');
        //         const loadingDiv = this.querySelector('.loading');
        //         const errorMessageDiv = this.querySelector('.error-message');
        //         const sentMessageDiv = this.querySelector('.sent-message');

        //         // Contoh: loadingDiv.classList.remove('hidden');
        //         // Setelah AJAX response:
        //         // Jika sukses: sentMessageDiv.classList.remove('hidden');
        //         // Jika error: errorMessageDiv.textContent = 'Error: Pesan gagal terkirim.'; errorMessageDiv.classList.remove('hidden');
        //     });
        // }
    });
</script>