<?php // File: components/stats_counter.php 
?>
<style>
    /* Stats Counter Component Styles */
    #statsCounter {
        padding: 80px 0;
        background: linear-gradient(rgba(44, 62, 80, 0.85), rgba(44, 62, 80, 0.9)), url('https://placehold.co/1920x600/34495E/FFFFFF?text=Latar+Statistik') no-repeat center center fixed;
        background-size: cover;
        color: #fff;
    }

    #statsCounter .container {
        position: relative;
        z-index: 2;
    }

    .stat-item {
        text-align: center;
        margin-bottom: 30px;
    }

    .stat-item .stat-icon {
        font-size: 3rem;
        /* Ukuran ikon besar */
        color: #00A9FF;
        /* Warna aksen biru cerah */
        margin-bottom: 15px;
        display: block;
        transition: transform 0.3s ease;
    }

    .stat-item:hover .stat-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .stat-item .stat-number {
        font-size: 3rem;
        /* Ukuran angka besar */
        font-weight: 800;
        font-family: 'Montserrat', sans-serif;
        display: block;
        color: #FFFFFF;
        margin-bottom: 5px;
    }

    .stat-item .stat-description {
        font-size: 1.1rem;
        font-weight: 500;
        color: #E0E0E0;
        /* Teks deskripsi lebih terang */
        font-family: 'Open Sans', sans-serif;
    }
</style>

<section id="statsCounter" class="section-dark">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-md-6 stat-item" data-aos="fade-up" data-aos-delay="100">
                <span class="stat-icon"><i class="fas fa-smile-beam"></i></span>
                <span class="stat-number" data-target="250">0</span>
                <p class="stat-description">Klien Puas</p>
            </div>

            <div class="col-lg-3 col-md-6 stat-item" data-aos="fade-up" data-aos-delay="200">
                <span class="stat-icon"><i class="fas fa-project-diagram"></i></span>
                <span class="stat-number" data-target="420">0</span>
                <p class="stat-description">Proyek Selesai</p>
            </div>

            <div class="col-lg-3 col-md-6 stat-item" data-aos="fade-up" data-aos-delay="300">
                <span class="stat-icon"><i class="fas fa-headset"></i></span>
                <span class="stat-number" data-target="1500">0</span>
                <p class="stat-description">Jam Dukungan</p>
            </div>

            <div class="col-lg-3 col-md-6 stat-item" data-aos="fade-up" data-aos-delay="400">
                <span class="stat-icon"><i class="fas fa-users"></i></span>
                <span class="stat-number" data-target="35">0</span>
                <p class="stat-description">Tim Profesional</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Stats Counter Component Specific JS
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('#statsCounter .stat-number');
        const speed = 200; // Kecepatan animasi (semakin kecil semakin cepat)

        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            const increment = target / speed;

            const updateCount = () => {
                const count = +counter.innerText;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 10); // Interval update
                } else {
                    counter.innerText = target; // Pastikan angka akhir sesuai target
                }
            };
            updateCount();
        };

        // Intersection Observer untuk memicu animasi saat elemen terlihat
        const observerOptions = {
            root: null, // viewport
            threshold: 0.5 // 50% elemen terlihat
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counterElement = entry.target.querySelector('.stat-number') ||
                        entry.target; // Jika targetnya adalah .stat-number langsung
                    if (counterElement && !counterElement.classList.contains('animated')) {
                        animateCounter(counterElement);
                        counterElement.classList.add('animated'); // Tandai sudah dianimasikan
                        // observer.unobserve(entry.target); // Hentikan observasi setelah animasi (opsional)
                    }
                }
            });
        }, observerOptions);

        // Amati setiap .stat-item atau .stat-number
        document.querySelectorAll('#statsCounter .stat-item').forEach(item => {
            observer.observe(item);
        });
        // Jika Anda menargetkan .stat-number secara langsung:
        // counters.forEach(counter => {
        //    observer.observe(counter);
        // });
    });
</script>