<?php // File: components/services_interactive.php 
?>
<style>
    /* Interactive Services Component Styles */
    #servicesInteractive {
        background-color: #F4F7F6;
        /* Warna latar yang sedikit berbeda, netral */
    }

    .service-card-interactive {
        background-color: #fff;
        border-radius: 15px;
        padding: 35px 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        /* Transisi dengan bounce */
        height: 100%;
        /* Untuk tinggi yang sama */
        position: relative;
        overflow: hidden;
        /* Untuk efek hover */
    }

    .service-card-interactive:hover {
        transform: translateY(-15px) scale(1.02);
        /* Efek angkat dan sedikit membesar */
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
    }

    .service-card-interactive .service-icon {
        font-size: 3.5rem;
        color: #007BFF;
        margin-bottom: 25px;
        display: inline-block;
        transition: transform 0.3s ease-in-out;
        line-height: 1;
        /* Menyesuaikan line-height untuk ikon */
    }

    .service-card-interactive:hover .service-icon {
        transform: rotateY(360deg) scale(1.1);
        /* Ikon berputar dan membesar */
    }

    .service-card-interactive h5 {
        font-weight: 700;
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #2C3E50;
    }

    .service-card-interactive p {
        font-size: 1rem;
        color: #555;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .service-card-interactive .btn-read-more {
        color: #007BFF;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .service-card-interactive .btn-read-more i {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .service-card-interactive:hover .btn-read-more i {
        transform: translateX(5px);
    }

    .service-card-interactive .btn-read-more:hover {
        color: #0056b3;
    }

    /* Efek garis dekoratif pada hover */
    .service-card-interactive::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        /* Mulai dari luar kiri */
        width: 100%;
        height: 5px;
        /* Tinggi garis */
        background: linear-gradient(90deg, transparent, #007BFF, transparent);
        transition: left 0.5s ease-out;
    }

    .service-card-interactive:hover::before {
        left: 0;
        /* Bergerak ke dalam saat hover */
    }
</style>

<section id="servicesInteractive" class="section">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Layanan Kami</h2>
        </div>
        <p class="section-subtitle">Solusi komprehensif yang dirancang untuk mengakselerasi transformasi digital dan pertumbuhan bisnis Anda.</p>

        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="service-card-interactive">
                    <div class="service-icon">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h5>Desain & Pengembangan Web</h5>
                    <p>Menciptakan pengalaman digital yang menarik, responsif, dan dioptimalkan untuk konversi.</p>
                    <a href="#" class="btn-read-more" data-bs-toggle="modal" data-bs-target="#serviceModal1">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-card-interactive">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h5>Pengembangan Aplikasi Mobile</h5>
                    <p>Solusi aplikasi mobile lintas platform (iOS & Android) yang intuitif dan berperforma tinggi.</p>
                    <a href="#" class="btn-read-more" data-bs-toggle="modal" data-bs-target="#serviceModal2">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="service-card-interactive">
                    <div class="service-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h5>Pemasaran Digital & SEO</h5>
                    <p>Strategi pemasaran berbasis data untuk meningkatkan visibilitas online dan ROI Anda.</p>
                    <a href="#" class="btn-read-more" data-bs-toggle="modal" data-bs-target="#serviceModal3">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="service-card-interactive">
                    <div class="service-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <h5>Solusi Cloud & DevOps</h5>
                    <p>Optimalisasi infrastruktur cloud dan implementasi praktik DevOps untuk efisiensi maksimal.</p>
                    <a href="#" class="btn-read-more" data-bs-toggle="modal" data-bs-target="#serviceModal4">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                <div class="service-card-interactive">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Keamanan Siber</h5>
                    <p>Melindungi aset digital Anda dengan solusi keamanan komprehensif dan proaktif.</p>
                    <a href="#" class="btn-read-more" data-bs-toggle="modal" data-bs-target="#serviceModal5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                <div class="service-card-interactive">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h5>Konsultasi Teknologi</h5>
                    <p>Panduan strategis dan wawasan ahli untuk membantu Anda menavigasi lanskap teknologi.</p>
                    <a href="#" class="btn-read-more" data-bs-toggle="modal" data-bs-target="#serviceModal6">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="serviceModal1" tabindex="-1" aria-labelledby="serviceModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModal1Label"><i class="fas fa-drafting-compass me-2"></i>Desain & Pengembangan Web</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Kami menyediakan layanan desain dan pengembangan web end-to-end, mulai dari konsep awal, UI/UX design, pengembangan frontend dan backend, hingga peluncuran dan pemeliharaan. Fokus kami adalah menciptakan website yang tidak hanya menarik secara visual tetapi juga fungsional, cepat, aman, dan SEO-friendly.</p>
                <h6>Teknologi yang Kami Gunakan:</h6>
                <ul>
                    <li>Frontend: HTML5, CSS3, JavaScript, React, Vue, Angular</li>
                    <li>Backend: Node.js, PHP (Laravel, CodeIgniter), Python (Django, Flask), Ruby on Rails</li>
                    <li>Database: MySQL, PostgreSQL, MongoDB</li>
                    <li>CMS: WordPress, Drupal, Joomla</li>
                </ul>
                <h6>Proses Kami:</h6>
                <ol>
                    <li>Konsultasi & Perencanaan</li>
                    <li>Desain UI/UX & Prototyping</li>
                    <li>Pengembangan & Integrasi</li>
                    <li>Pengujian & Quality Assurance</li>
                    <li>Peluncuran & Dukungan</li>
                </ol>
                <img src="https://placehold.co/700x300/007BFF/FFFFFF?text=Detail+Layanan+Web" class="img-fluid rounded mt-3" alt="[Gambar Detail Layanan Web]">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custom-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="#contactEnhanced" class="btn btn-custom-primary">Diskusikan Proyek Anda</a>
            </div>
        </div>
    </div>
</div>
<script>
    // Services Interactive Component Specific JS
    document.addEventListener('DOMContentLoaded', function() {
        // Animasi untuk ikon layanan saat card di-hover (sudah dihandle CSS, tapi bisa ditambah Anime.js jika perlu)
        // anime({
        //     targets: '.service-card-interactive .service-icon i',
        //     // properti animasi
        // });
    });
</script>