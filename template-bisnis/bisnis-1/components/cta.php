<?php // File: components/cta.php 
?>
<style>
    /* CTA Component Styles */
    .cta-component {
        background: #007bff;
        /* Warna primer Bootstrap */
        /* background: linear-gradient(45deg, #007bff, #0056b3); */
        color: white;
        padding: 80px 0;
        text-align: center;
    }

    .cta-component h3 {
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .cta-component p {
        font-size: 1.15rem;
        margin-bottom: 30px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .cta-component .btn-cta {
        background-color: white;
        color: #007bff;
        border: 2px solid white;
        padding: 12px 30px;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 50px;
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
    }

    .cta-component .btn-cta:hover {
        background-color: transparent;
        color: white;
        transform: translateY(-3px);
    }
</style>

<section class="cta-component animate-on-scroll">
    <div class="container">
        <h3>Siap Mengambil Langkah Berikutnya?</h3>
        <p>Hubungi kami hari ini untuk konsultasi gratis dan mari kita diskusikan bagaimana kami dapat membantu bisnis Anda berkembang.</p>
        <a href="#kontak" class="btn btn-cta">Hubungi Kami Sekarang <i class="fas fa-phone-alt ms-2"></i></a>
    </div>
</section>