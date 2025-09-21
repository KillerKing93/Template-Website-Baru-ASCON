<?php // File: components/footer_pendidikan_klasik_v2_v2.php 
?>
<style>
    /* Styles untuk Footer Klasik v2 */
    #footer-athenaeum-component {
        /* Footer utama dengan latar gelap */
        background-color: var(--card-bg-dark);
        /* Menggunakan var dari dark mode untuk konsistensi */
        color: var(--text-muted-dark);
        /* Teks muted versi dark */
        border-top: 4px solid var(--color-primary-dark);
        /* Aksen atas dengan warna primer dark */
    }

    html:not(.dark) #footer-athenaeum-component {
        /* Override untuk light mode */
        background-color: #3E322C;
        /* Coklat tua solid untuk light mode */
        color: #E0D8CC;
        /* Teks krem terang */
        border-top-color: var(--color-primary);
    }

    #footer-athenaeum-component .footer-brand-athenaeum h4,
    #footer-athenaeum-component .footer-section-athenaeum h5 {
        color: #FFFFFF;
        /* Judul selalu putih agar kontras di footer gelap */
        font-family: 'Cinzel Decorative', serif;
    }

    #footer-athenaeum-component .footer-brand-athenaeum h4 i {
        color: var(--color-secondary-dark);
    }

    html:not(.dark) #footer-athenaeum-component .footer-brand-athenaeum h4 i {
        color: var(--color-secondary);
    }


    #footer-athenaeum-component .footer-credo-athenaeum {
        font-family: 'EB Garamond', serif;
        font-style: italic;
        opacity: 0.9;
    }

    #footer-athenaeum-component .footer-section-athenaeum h5::after {
        background-color: var(--color-secondary-dark);
    }

    html:not(.dark) #footer-athenaeum-component .footer-section-athenaeum h5::after {
        background-color: var(--color-secondary);
    }

    #footer-athenaeum-component .footer-links-athenaeum ul a {
        color: var(--text-muted-dark);
        /* Link menggunakan warna muted dark */
        font-family: 'Inter', sans-serif;
        transition: color 0.3s ease, padding-left 0.3s ease;
    }

    html:not(.dark) #footer-athenaeum-component .footer-links-athenaeum ul a {
        color: #D0C8BE;
        /* Warna link di light mode footer */
    }

    #footer-athenaeum-component .footer-links-athenaeum ul a:hover {
        color: var(--color-secondary-dark);
        /* Warna hover link */
        padding-left: 6px;
    }

    html:not(.dark) #footer-athenaeum-component .footer-links-athenaeum ul a:hover {
        color: var(--color-secondary);
    }


    #footer-athenaeum-component .footer-contact-athenaeum p i {
        color: var(--color-secondary-dark);
    }

    html:not(.dark) #footer-athenaeum-component .footer-contact-athenaeum p i {
        color: var(--color-secondary);
    }

    #footer-athenaeum-component .footer-contact-athenaeum p a {
        color: var(--text-muted-dark);
    }

    html:not(.dark) #footer-athenaeum-component .footer-contact-athenaeum p a {
        color: #D0C8BE;
    }

    #footer-athenaeum-component .footer-contact-athenaeum p a:hover {
        color: var(--color-secondary-dark);
        text-decoration: underline;
    }

    html:not(.dark) #footer-athenaeum-component .footer-contact-athenaeum p a:hover {
        color: var(--color-secondary);
    }


    #footer-athenaeum-component .social-icons-athenaeum a {
        background-color: color-mix(in srgb, var(--color-secondary-dark) 12%, transparent);
        color: var(--color-secondary-dark);
        transition: all 0.3s ease;
    }

    html:not(.dark) #footer-athenaeum-component .social-icons-athenaeum a {
        background-color: color-mix(in srgb, var(--color-secondary) 12%, transparent);
        color: var(--color-secondary);
    }

    #footer-athenaeum-component .social-icons-athenaeum a:hover {
        background-color: var(--color-secondary-dark);
        color: var(--card-bg-dark);
        /* Teks kontras dengan bg hover */
        transform: scale(1.1) translateY(-2px);
    }

    html:not(.dark) #footer-athenaeum-component .social-icons-athenaeum a:hover {
        background-color: var(--color-secondary);
        color: #3E322C;
        /* Warna teks kontras di light mode */
    }


    #footer-athenaeum-component .footer-bottom-athenaeum {
        background-color: color-mix(in srgb, var(--card-bg-dark) 85%, black);
        /* Sub-footer lebih gelap */
        border-top: 1px solid color-mix(in srgb, var(--border-dark) 70%, black);
    }

    html:not(.dark) #footer-athenaeum-component .footer-bottom-athenaeum {
        background-color: #2c231e;
        /* Sub-footer lebih gelap di light mode */
        border-top-color: #4a3b32;
    }

    #footer-athenaeum-component .credits-athenaeum a {
        color: var(--color-secondary-dark);
        font-weight: 500;
    }

    html:not(.dark) #footer-athenaeum-component .credits-athenaeum a {
        color: var(--color-secondary);
    }

    #footer-athenaeum-component .credits-athenaeum a:hover {
        text-decoration: underline;
    }
</style>

<footer id="footer-athenaeum-component" class="pt-16 lg:pt-20">
    <div class="footer-top-athenaeum pb-10 lg:pb-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8">

                <div class="lg:col-span-4 footer-brand-athenaeum" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="text-2xl lg:text-3xl font-bold mb-3 flex items-center">
                        <i class="fas fa-book-reader mr-3 text-2xl"></i> Athenaeum Digitalis
                    </h4>
                    <p class="footer-credo-athenaeum text-sm lg:text-base mb-4 max-w-sm">
                        "Lux et Veritas - Cahaya dan Kebenaran, Memandu Perjalanan Intelektual Lintas Zaman."
                    </p>
                    <div class="social-icons-athenaeum mt-4 space-x-2">
                        <a href="#" title="Facebook" class="inline-flex items-center justify-center w-9 h-9 rounded-md text-base"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter" class="inline-flex items-center justify-center w-9 h-9 rounded-md text-base"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Instagram" class="inline-flex items-center justify-center w-9 h-9 rounded-md text-base"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="LinkedIn" class="inline-flex items-center justify-center w-9 h-9 rounded-md text-base"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="lg:col-span-2 md:col-span-1 footer-section-athenaeum footer-links-athenaeum" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="text-lg font-semibold mb-4 pb-2 relative">Navigasi Cepat</h5>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="#hero" class="hover:text-[var(--color-s)]"><i class="fas fa-angle-right mr-1.5 opacity-70"></i> Beranda</a></li>
                        <li><a href="#tentang-kami" class="hover:text-[var(--color-s)]"><i class="fas fa-angle-right mr-1.5 opacity-70"></i> Tentang Kami</a></li>
                        <li><a href="#koleksi-digital" class="hover:text-[var(--color-s)]"><i class="fas fa-angle-right mr-1.5 opacity-70"></i> Koleksi</a></li>
                        <li><a href="#riset-unggulan" class="hover:text-[var(--color-s)]"><i class="fas fa-angle-right mr-1.5 opacity-70"></i> Riset</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-3 md:col-span-1 footer-section-athenaeum footer-links-athenaeum" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="text-lg font-semibold mb-4 pb-2 relative">Layanan Kami</h5>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="#ruang-studi" class="hover:text-[var(--color-s)]"><i class="fas fa-angle-right mr-1.5 opacity-70"></i> Ruang Studi Virtual</a></li>
                        <li><a href="#acara-literasi" class="hover:text-[var(--color-s)]"><i class="fas fa-angle-right mr-1.5 opacity-70"></i> Acara & Diskusi</a></li>
                        <li><a href="#bantuan-riset" class="hover:text-[var(--color-s)]"><i class="fas fa-angle-right mr-1.5 opacity-70"></i> Bantuan Riset</a></li>
                        <li><a href="#faq" class="hover:text-[var(--color-s)]"><i class="fas fa-angle-right mr-1.5 opacity-70"></i> FAQ & Bantuan</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-3 footer-section-athenaeum footer-contact-athenaeum" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="text-lg font-semibold mb-4 pb-2 relative">Hubungi Kami</h5>
                    <address class="not-italic space-y-2.5 text-sm">
                        <p class="flex items-start"><i class="fas fa-map-marker-alt mt-0.5 mr-2.5 w-4 text-center"></i> Jl. Cendekia Utama No. 123, Kota Pelajar, ID 45678</p>
                        <p class="flex items-center"><i class="fas fa-phone-alt mr-2.5 w-4 text-center"></i> <a href="tel:+622123456789">(021) 2345-6789</a></p>
                        <p class="flex items-center"><i class="fas fa-envelope mr-2.5 w-4 text-center"></i> <a href="mailto:info@athenaeumdigitalis.id">info@athenaeumdigitalis.id</a></p>
                    </address>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom-athenaeum py-6 text-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <p class="copyright-athenaeum text-xs sm:text-sm mb-0.5">
                &copy; <?php echo date("Y"); ?> <strong><span>Athenaeum Digitalis</span></strong>. Hak Cipta Dilindungi Undang-Undang.
            </p>
            <p class="credits-athenaeum text-xs sm:text-sm">
                Dirancang dengan <i class="fas fa-heart text-red-500"></i> oleh Tim Athenaeum Digitalis
                <?php // Komentar PHP: Anda bisa mengganti dengan nama tim/developer Anda 
                ?>
            </p>
        </div>
    </div>
</footer>

<script>
    // Komentar JavaScript: Script khusus untuk Footer (jika ada)
    // Misalnya, untuk newsletter sign-up atau animasi tambahan.
</script>