<?php // File: components/pricing_table_toggle.php 
?>
<style>
    /* Pricing Table Toggle Component Styles */
    :root {
        /* Pastikan variabel CSS dari index.php bisa diakses */
        --primary-color: #6A11CB;
        --secondary-color: #2575FC;
        --accent-color: #00FFED;
        --card-bg: #1E1E1E;
        --dark-bg: #121212;
        --border-color: rgba(0, 255, 237, 0.2);
        --text-color-muted: #B0B0B0;
    }

    #pricingTableToggle {
        background-color: var(--dark-bg);
    }

    .pricing-toggle-switch {
        text-align: center;
        margin-bottom: 50px;
    }

    .pricing-toggle-switch .switch-label {
        font-size: 1.1rem;
        color: var(--text-color-muted);
        margin: 0 15px;
        font-weight: 500;
    }

    .pricing-toggle-switch .switch-label.active {
        color: var(--accent-color);
        font-weight: 700;
    }

    .pricing-toggle-switch .form-check-input {
        /* Tombol switch Bootstrap */
        width: 3.5em;
        /* Ukuran switch lebih besar */
        height: 1.75em;
        background-color: var(--card-bg);
        border-color: var(--border-color);
        cursor: pointer;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .pricing-toggle-switch .form-check-input:checked {
        background-color: var(--accent-color);
        border-color: var(--accent-color);
    }

    .pricing-toggle-switch .form-check-input:focus {
        box-shadow: 0 0 10px rgba(var(--accent-rgb), 0.3);
    }


    .pricing-plan {
        background-color: var(--card-bg);
        padding: 40px 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        text-align: center;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        border: 1px solid var(--border-color);
        height: 100%;
        /* Untuk tinggi yang sama */
        display: flex;
        flex-direction: column;
    }

    .pricing-plan:hover,
    .pricing-plan.featured {
        transform: translateY(-15px) scale(1.03);
        box-shadow: 0 15px 45px rgba(var(--accent-rgb), 0.2);
        /* Bayangan aksen saat hover/featured */
        border-color: var(--accent-color);
    }

    .pricing-plan.featured {
        /* Plan yang direkomendasikan */
        border-width: 2px;
        position: relative;
    }

    .pricing-plan.featured .featured-badge {
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%);
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        color: #fff;
        padding: 5px 15px;
        font-size: 0.8rem;
        font-weight: 700;
        border-radius: 20px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }


    .pricing-plan .plan-name {
        font-size: 1.6rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
        font-family: 'Poppins', sans-serif;
    }

    .pricing-plan .plan-icon {
        font-size: 3rem;
        color: var(--accent-color);
        margin-bottom: 20px;
    }

    .pricing-plan .plan-price {
        font-size: 2.8rem;
        font-weight: 800;
        color: var(--accent-color);
        margin-bottom: 10px;
        font-family: 'Roboto Mono', monospace;
        /* Font harga yang khas */
    }

    .pricing-plan .plan-price .currency {
        font-size: 1.5rem;
        vertical-align: super;
        /* Mata uang sedikit ke atas */
        margin-right: 3px;
    }

    .pricing-plan .plan-price .period {
        font-size: 1rem;
        color: var(--text-color-muted);
        font-weight: 400;
    }

    .pricing-plan .plan-description {
        font-size: 0.9rem;
        color: var(--text-color-muted);
        margin-bottom: 25px;
        min-height: 40px;
        /* Jaga ruang untuk deskripsi */
    }

    .pricing-plan .plan-features {
        list-style: none;
        padding: 0;
        margin: 0 0 30px 0;
        text-align: left;
        flex-grow: 1;
        /* Agar fitur mengisi ruang */
    }

    .pricing-plan .plan-features li {
        margin-bottom: 12px;
        color: var(--text-color);
        font-size: 0.95rem;
        display: flex;
        align-items: center;
    }

    .pricing-plan .plan-features li i {
        color: var(--accent-color);
        margin-right: 10px;
        font-size: 1.1rem;
    }

    .pricing-plan .plan-features li.disabled {
        /* Fitur yang tidak termasuk */
        color: rgba(var(--text-color-muted-rgb), 0.5);
        /* Kurang terlihat */
        text-decoration: line-through;
    }

    .pricing-plan .plan-features li.disabled i {
        color: rgba(var(--accent-rgb), 0.3);
    }

    .pricing-plan .btn-select-plan {
        margin-top: auto;
        /* Tombol selalu di bawah */
    }

    /* Menyembunyikan harga tahunan/bulanan tergantung toggle */
    .price-yearly,
    .price-monthly {
        display: none;
    }

    .pricing-active-monthly .price-monthly {
        display: block;
    }

    .pricing-active-yearly .price-yearly {
        display: block;
    }
</style>

<section id="pricingTableToggle" class="section">
    <div class="container" data-aos="fade-up">
        <div class="section-title-futuristic">
            <h2>Paket Harga Fleksibel</h2>
            <p class="subtitle">Pilih Rencana yang Paling Sesuai dengan Kebutuhan dan Anggaran Bisnis Anda</p>
        </div>

        <div class="pricing-toggle-switch" data-aos="fade-up" data-aos-delay="100">
            <span class="switch-label monthly-label active">Bulanan</span>
            <div class="form-check form-switch d-inline-block mx-2">
                <input class="form-check-input" type="checkbox" role="switch" id="pricingToggle">
            </div>
            <span class="switch-label yearly-label">Tahunan (Hemat 20%)</span>
        </div>

        <div class="row gy-4 justify-content-center pricing-plans-container pricing-active-monthly"> 
            <!-- {/* Default aktif bulanan */} -->
            <!-- {/* Plan 1: Basic */} -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-plan">
                    <div class="plan-icon"><i class="fas fa-rocket"></i></div>
                    <h3 class="plan-name">Starter</h3>
                    <p class="plan-description">Ideal untuk individu atau bisnis kecil yang baru memulai.</p>

                    <div class="price-monthly">
                        <div class="plan-price"><span class="currency">Rp</span>499K<span class="period">/bln</span></div>
                    </div>
                    <div class="price-yearly">
                        <div class="plan-price"><span class="currency">Rp</span>4.79M<span class="period">/thn</span></div>
                    </div>

                    <ul class="plan-features">
                        <li><i class="fas fa-check-circle"></i> 1 Proyek Website</li>
                        <li><i class="fas fa-check-circle"></i> 10 Halaman</li>
                        <li><i class="fas fa-check-circle"></i> Desain Responsif</li>
                        <li><i class="fas fa-check-circle"></i> Dukungan Email Dasar</li>
                        <li class="disabled"><i class="fas fa-times-circle"></i> Optimasi SEO Lanjutan</li>
                        <li class="disabled"><i class="fas fa-times-circle"></i> Laporan Analitik Bulanan</li>
                    </ul>
                    <a href="#" class="btn-futuristic-secondary btn-select-plan">Pilih Paket</a>
                </div>
            </div>

            <!-- {/* Plan 2: Professional (Featured) */} -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing-plan featured">
                    <span class="featured-badge">Populer</span>
                    <div class="plan-icon"><i class="fas fa-briefcase"></i></div>
                    <h3 class="plan-name">Professional</h3>
                    <p class="plan-description">Solusi lengkap untuk bisnis yang sedang berkembang pesat.</p>

                    <div class="price-monthly">
                        <div class="plan-price"><span class="currency">Rp</span>1.2M<span class="period">/bln</span></div>
                    </div>
                    <div class="price-yearly">
                        <div class="plan-price"><span class="currency">Rp</span>11.5M<span class="period">/thn</span></div>
                    </div>

                    <ul class="plan-features">
                        <li><i class="fas fa-check-circle"></i> 5 Proyek Website/App</li>
                        <li><i class="fas fa-check-circle"></i> Halaman Tidak Terbatas</li>
                        <li><i class="fas fa-check-circle"></i> Fitur Kustom</li>
                        <li><i class="fas fa-check-circle"></i> Optimasi SEO Lanjutan</li>
                        <li><i class="fas fa-check-circle"></i> Dukungan Prioritas (Telepon & Email)</li>
                        <li><i class="fas fa-check-circle"></i> Laporan Analitik Bulanan</li>
                    </ul>
                    <a href="#" class="btn-futuristic-primary btn-select-plan">Pilih Paket</a>
                </div>
            </div>

            <!-- {/* Plan 3: Enterprise */} -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="pricing-plan">
                    <div class="plan-icon"><i class="fas fa-building"></i></div>
                    <h3 class="plan-name">Enterprise</h3>
                    <p class="plan-description">Solusi kustom skala besar dengan fitur dan dukungan premium.</p>

                    <div class="price-monthly">
                        <div class="plan-price" style="font-size:1.8rem; padding-top:15px; padding-bottom:15px;">Hubungi Kami</div>
                    </div>
                    <div class="price-yearly">
                        <div class="plan-price" style="font-size:1.8rem; padding-top:15px; padding-bottom:15px;">Hubungi Kami</div>
                    </div>

                    <ul class="plan-features">
                        <li><i class="fas fa-check-circle"></i> Solusi Kustom Sesuai Kebutuhan</li>
                        <li><i class="fas fa-check-circle"></i> Tim Developer & Manajer Proyek Khusus</li>
                        <li><i class="fas fa-check-circle"></i> Integrasi Sistem Kompleks</li>
                        <li><i class="fas fa-check-circle"></i> SLA (Service Level Agreement)</li>
                        <li><i class="fas fa-check-circle"></i> Keamanan Tingkat Enterprise</li>
                        <li><i class="fas fa-check-circle"></i> Dukungan 24/7 Dedikasi</li>
                    </ul>
                    <a href="#contactMapMulti" class="btn-futuristic-secondary btn-select-plan">Konsultasi Gratis</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pricingToggle = document.getElementById('pricingToggle');
        const plansContainer = document.querySelector('.pricing-plans-container');
        const monthlyLabel = document.querySelector('.monthly-label');
        const yearlyLabel = document.querySelector('.yearly-label');

        if (pricingToggle && plansContainer) {
            pricingToggle.addEventListener('change', function() {
                if (this.checked) { // Tahunan aktif
                    plansContainer.classList.remove('pricing-active-monthly');
                    plansContainer.classList.add('pricing-active-yearly');
                    yearlyLabel.classList.add('active');
                    monthlyLabel.classList.remove('active');
                } else { // Bulanan aktif
                    plansContainer.classList.remove('pricing-active-yearly');
                    plansContainer.classList.add('pricing-active-monthly');
                    monthlyLabel.classList.add('active');
                    yearlyLabel.classList.remove('active');
                }
                // Re-initialize AOS untuk item harga jika perlu setelah perubahan display
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }
            });
        }
    });
</script>