<?php // File: components_econ_v1/cta_corp_finance_v1.php - Call to Action Perusahaan Ekonomi (Perbaikan Warna & Tombol V4) 
?>
<style>
    /* Styles untuk Call to Action Section Perusahaan Ekonomi */
    #ctaCorpFinance {
        /* ID disesuaikan agar cocok dengan HTML */
        background: linear-gradient(rgba(var(--primary-econ-rgb), 0.9), rgba(var(--primary-econ-rgb), 0.92)),
            url('https://placehold.co/1920x450/004E89/FFFFFF?text=Diskusi+Strategi+Keuangan&font=oswald&font-size=55') no-repeat center center;
        background-size: cover;
        background-attachment: fixed;
        padding: 80px 0;
        color: #fff;
        text-align: center;
    }

    body.dark-mode #ctaCorpFinance {
        /* ID disesuaikan */
        background: linear-gradient(rgba(var(--primary-econ-dark-rgb), 0.9), rgba(var(--primary-econ-dark-rgb), 0.92)),
            url('https://placehold.co/1920x450/007ACC/E0E6F1?text=Diskusi+Strategi+Gelap&font=oswald&font-size=55') no-repeat center center;
        background-size: cover;
        background-attachment: fixed;
    }

    .cta-content-econ {
        text-align: center;
    }

    .cta-content-econ h3 {
        font-size: clamp(1.8rem, 4vw, 2.4rem);
        font-weight: 700;
        margin-bottom: 18px;
        color: #FFFFFF;
        text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.45);
        /* Shadow sedikit disesuaikan untuk definisi yang lebih baik */
    }

    body.dark-mode .cta-content-econ h3 {
        text-shadow: 0px 1px 4px rgba(0, 0, 0, 0.6);
    }

    .cta-content-econ p {
        font-size: clamp(1rem, 2vw, 1.15rem);
        margin-bottom: 30px;
        max-width: 680px;
        margin-left: auto;
        margin-right: auto;
        opacity: 0.95;
        line-height: 1.7;
    }

    .cta-content-econ .btn-cta-econ {
        padding: 12px 32px;
        font-size: 1rem;
        /* Warna tombol dan teks diatur oleh class .btn-econ-accent global */
        /* Pastikan class .btn-econ-accent di index.php memiliki: */
        /* color: var(--text-light-econ); untuk light mode */
        /* color: var(--bg-dark-econ); untuk dark mode */
        /* Ini akan memberikan kontras yang baik pada tombol kuning/oranye */
    }
</style>

<section id="ctaCorpFinance" class="cta-econ-v1 section-econ"> <?php // ID diubah dari "cta" menjadi "ctaCorpFinance" 
                                                                ?>
    <div class="container">
        <div class="cta-content-econ" data-aos="zoom-in-up" data-aos-duration="600">
            <h3>Siap Mengambil Langkah Berikutnya Menuju Kesuksesan Finansial?</h3>
            <p>
                Tim ahli kami di QuantumLeap Finance siap membantu Anda merancang strategi keuangan yang optimal dan mencapai tujuan bisnis Anda. Hubungi kami hari ini untuk konsultasi gratis.
            </p>
            <a href="#contact" class="btn-econ-accent btn-cta-econ">Jadwalkan Konsultasi Anda</a>
        </div>
    </div>
</section>

<script>
    // Komentar JavaScript: Script khusus untuk CTA Section (jika ada)
    // AOS sudah menangani animasi dasar.
    // Anime.js bisa digunakan untuk interaksi yang lebih kompleks jika dibutuhkan.
</script>