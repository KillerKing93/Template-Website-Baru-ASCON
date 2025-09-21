<?php // File: components/faq_accordion.php 
?>
<style>
    /* FAQ Accordion Component Styles */
    #faqAccordion {
        background-color: #FFFFFF;
        /* Latar putih */
    }

    .faq-list {
        padding: 0;
        list-style: none;
    }

    .faq-list .accordion-item {
        border: none;
        /* Hapus border default Bootstrap */
        margin-bottom: 15px;
        border-radius: 10px !important;
        /* Paksa border radius */
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        /* Agar border radius bekerja dengan baik */
    }

    .faq-list .accordion-header {
        /* Tombol pertanyaan */
        border: none !important;
        border-radius: 10px !important;
    }

    .faq-list .accordion-button {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        /* Ukuran font pertanyaan */
        color: #2C3E50;
        background-color: #F8F9FA;
        /* Latar tombol sedikit abu-abu */
        padding: 20px 25px;
        /* Padding lebih besar */
        text-align: left;
        border: none !important;
        width: 100%;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .faq-list .accordion-button:not(.collapsed) {
        /* Saat terbuka */
        color: #FFFFFF;
        background-color: #007BFF;
        /* Warna aksen saat terbuka */
        box-shadow: none;
        /* Hapus bayangan default saat aktif */
    }

    .faq-list .accordion-button:focus {
        box-shadow: none;
        /* Hapus focus ring */
        border: none;
    }

    /* Kustomisasi ikon accordion Bootstrap */
    .faq-list .accordion-button::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23007BFF'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        transform: scale(1.2) rotate(-90deg);
        /* Ikon awal mengarah ke kanan */
        transition: transform .3s ease-in-out;
    }

    .faq-list .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23FFFFFF'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        transform: rotate(0deg);
        /* Ikon mengarah ke bawah saat terbuka */
    }

    .faq-list .accordion-body {
        padding: 20px 25px;
        /* Padding untuk jawaban */
        font-size: 1rem;
        line-height: 1.7;
        color: #4A4A4A;
        background-color: #fff;
        /* Pastikan latar jawaban putih */
    }

    .faq-list .accordion-body p:last-child {
        margin-bottom: 0;
    }

    .faq-more-info {
        text-align: center;
        margin-top: 40px;
    }

    .faq-more-info p {
        font-size: 1.1rem;
        color: #555;
    }
</style>

<section id="faqAccordion" class="section">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pertanyaan Umum (FAQ)</h2>
        </div>
        <p class="section-subtitle">Temukan jawaban cepat untuk pertanyaan yang paling sering diajukan tentang layanan kami.</p>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion faq-list" id="faqlist">

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                <span class="num me-2">1.</span> Bagaimana proses untuk memulai proyek dengan [NamaBisnis Anda]?
                            </button>
                        </h2>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Prosesnya sederhana! Pertama, Anda dapat menghubungi kami melalui formulir kontak, email, atau telepon. Kami akan menjadwalkan sesi konsultasi gratis untuk memahami kebutuhan, tujuan, dan anggaran proyek Anda. Setelah itu, kami akan menyusun proposal rinci yang mencakup lingkup kerja, timeline, dan estimasi biaya. Jika Anda setuju, kita akan menandatangani kontrak dan memulai pengerjaan proyek.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                <span class="num me-2">2.</span> Berapa lama waktu yang dibutuhkan untuk menyelesaikan sebuah proyek website?
                            </button>
                        </h2>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Waktu penyelesaian proyek sangat bervariasi tergantung pada kompleksitas, fitur yang diinginkan, dan ketersediaan konten dari pihak Anda. Proyek website sederhana bisa memakan waktu 4-8 minggu, sementara proyek yang lebih kompleks dengan fitur kustom mungkin membutuhkan waktu 3-6 bulan atau lebih. Kami akan memberikan estimasi timeline yang realistis dalam proposal proyek.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                <span class="num me-2">3.</span> Apakah Anda menyediakan layanan pemeliharaan setelah website selesai dibuat?
                            </button>
                        </h2>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Ya, kami menawarkan paket layanan pemeliharaan website yang komprehensif. Ini mencakup pembaruan rutin (konten, plugin, tema, keamanan), backup data, monitoring uptime, dan dukungan teknis. Kami ingin memastikan website Anda tetap berjalan optimal, aman, dan up-to-date setelah peluncuran.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                <span class="num me-2">4.</span> Teknologi apa saja yang biasa Anda gunakan dalam pengembangan?
                            </button>
                        </h2>
                        <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Kami selalu mengikuti perkembangan teknologi terkini dan memilih stack teknologi yang paling sesuai untuk setiap proyek. Untuk frontend, kami sering menggunakan HTML5, CSS3, JavaScript (beserta framework seperti React, Vue, atau Angular). Untuk backend, kami menguasai Node.js, PHP (Laravel, CodeIgniter), Python (Django, Flask), dan lainnya. Kami juga berpengalaman dengan berbagai database (SQL & NoSQL) dan platform CMS seperti WordPress.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                <span class="num me-2">5.</span> Bagaimana dengan SEO (Search Engine Optimization) untuk website saya?
                            </button>
                        </h2>
                        <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                SEO adalah bagian integral dari proses pengembangan web kami. Kami menerapkan praktik SEO on-page terbaik sejak awal, seperti struktur URL yang ramah SEO, optimasi tag meta, penggunaan heading yang tepat, optimasi kecepatan website, dan desain responsif. Kami juga dapat menyediakan layanan SEO off-page dan pembuatan konten berkelanjutan untuk meningkatkan peringkat website Anda di mesin pencari.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-more-info mt-5" data-aos="fade-up" data-aos-delay="600">
                    <p>Tidak menemukan jawaban yang Anda cari? <a href="#contactEnhanced" class="fw-bold text-decoration-none">Hubungi kami</a> untuk informasi lebih lanjut.</p>
                </div>

            </div>
        </div>
    </div>
</section>