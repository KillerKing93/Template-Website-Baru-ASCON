<?php // File: components/layanan.php 
?>
<style>
    /* Layanan Component Styles */
    .layanan-component .service-card .icon {
        font-size: 3.5rem;
        /* Ikon lebih besar */
        color: #007bff;
        margin-bottom: 25px;
        transition: transform 0.3s ease;
    }

    .layanan-component .service-card:hover .icon {
        transform: scale(1.1);
    }

    .layanan-component .service-card h5 {
        font-weight: 600;
        font-size: 1.3rem;
        margin-bottom: 15px;
        color: #343a40;
    }

    .layanan-component .service-card p {
        font-size: 0.95rem;
        color: #6c757d;
    }
</style>

<section id="layanan" class="section bg-light layanan-component">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Layanan Unggulan Kami</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 animate-on-scroll">
                <div class="custom-card service-card text-center">
                    <div class="icon"><i class="fas fa-laptop-code"></i></div>
                    <h5>Pengembangan Web & Aplikasi</h5>
                    <p>Membangun platform digital yang responsif, cepat, dan aman untuk mendukung pertumbuhan bisnis Anda.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 animate-on-scroll" style="transition-delay: 0.2s;">
                <div class="custom-card service-card text-center">
                    <div class="icon"><i class="fas fa-chart-line"></i></div>
                    <h5>Strategi Pemasaran Digital</h5>
                    <p>Meningkatkan visibilitas online dan menjangkau target audiens yang tepat melalui kampanye efektif.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 animate-on-scroll" style="transition-delay: 0.4s;">
                <div class="custom-card service-card text-center">
                    <div class="icon"><i class="fas fa-shield-alt"></i></div>
                    <h5>Keamanan Siber & Konsultasi IT</h5>
                    <p>Melindungi aset digital Anda dan memberikan panduan teknologi untuk efisiensi operasional.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // Layanan component specific JS
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof anime === 'function') {
            // Contoh animasi sederhana untuk ikon layanan saat di-hover (CSS sudah menangani sebagian)
            // anime.js bisa digunakan untuk animasi yang lebih kompleks jika diperlukan
            document.querySelectorAll('.layanan-component .service-card').forEach(card => {
                card.addEventListener('mouseenter', () => {
                    anime({
                        targets: card.querySelector('.icon i'),
                        rotate: '10deg',
                        scale: 1.1,
                        duration: 300,
                        easing: 'easeInOutSine'
                    });
                });
                card.addEventListener('mouseleave', () => {
                    anime({
                        targets: card.querySelector('.icon i'),
                        rotate: '0deg',
                        scale: 1,
                        duration: 300,
                        easing: 'easeInOutSine'
                    });
                });
            });
        }
    });
</script>