<?php // File: components/team_showcase.php 
?>
<style>
    /* Team Showcase Component Styles */
    #teamShowcase {
        background-color: #FFFFFF;
        /* Latar putih */
    }

    .team-member {
        text-align: center;
        margin-bottom: 20px;
        background: #fff;
        border-radius: 15px;
        /* Sudut lebih bulat */
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.07);
        padding: 30px 20px;
        transition: all 0.3s ease-in-out;
        position: relative;
        overflow: hidden;
        /* Untuk efek hover */
    }

    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
    }

    .team-member .pic {
        overflow: hidden;
        width: 180px;
        /* Ukuran foto */
        height: 180px;
        border-radius: 50%;
        /* Foto bulat */
        margin: 0 auto 20px auto;
        border: 4px solid #007BFF;
        /* Border dengan warna aksen */
        transition: border-color 0.3s ease;
    }

    .team-member:hover .pic {
        border-color: #0056b3;
    }

    .team-member .pic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Pastikan gambar mengisi lingkaran */
        transition: transform .4s ease;
    }

    .team-member:hover .pic img {
        transform: scale(1.1);
        /* Efek zoom pada foto */
    }

    .team-member h4 {
        /* Nama anggota tim */
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 1.4rem;
        color: #2C3E50;
        font-family: 'Montserrat', sans-serif;
    }

    .team-member span {
        /* Jabatan */
        display: block;
        font-size: 1rem;
        margin-bottom: 15px;
        color: #007BFF;
        /* Warna jabatan */
        font-style: italic;
    }

    .team-member p {
        /* Deskripsi singkat */
        font-style: italic;
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 15px;
    }

    .team-member .social {
        margin-top: 15px;
    }

    .team-member .social a {
        color: #777;
        margin: 0 8px;
        /* Jarak antar ikon sosial */
        font-size: 1.2rem;
        transition: color .3s;
        display: inline-block;
    }

    .team-member .social a:hover {
        color: #007BFF;
        transform: scale(1.2);
        /* Ikon membesar saat hover */
    }

    /* Efek garis dekoratif di atas nama */
    .team-member::before {
        content: "";
        position: absolute;
        top: 15px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background-color: #00A9FF;
        transition: width 0.4s ease-out;
        border-radius: 2px;
    }

    .team-member:hover::before {
        width: 60px;
    }
</style>

<section id="teamShowcase" class="section">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tim Kami</h2>
        </div>
        <p class="section-subtitle">Bertemu dengan para profesional berdedikasi di balik kesuksesan proyek-proyek kami.</p>

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="pic"><img src="https://placehold.co/180x180/2C3E50/FFFFFF?text=Tim+1" class="img-fluid" alt="[Foto Anggota Tim 1]"></div>
                    <h4>Ahmad Subarjo</h4>
                    <span>Chief Executive Officer</span>
                    <p>Memimpin dengan visi dan dedikasi untuk inovasi.</p>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member">
                    <div class="pic"><img src="https://placehold.co/180x180/007BFF/FFFFFF?text=Tim+2" class="img-fluid" alt="[Foto Anggota Tim 2]"></div>
                    <h4>Citra Lestari</h4>
                    <span>Chief Technology Officer</span>
                    <p>Pakar teknologi dengan fokus pada solusi mutakhir.</p>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member">
                    <div class="pic"><img src="https://placehold.co/180x180/28A745/FFFFFF?text=Tim+3" class="img-fluid" alt="[Foto Anggota Tim 3]"></div>
                    <h4>Bambang Wijaya</h4>
                    <span>Head of Marketing</span>
                    <p>Strategi pemasaran kreatif untuk hasil maksimal.</p>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="team-member">
                    <div class="pic"><img src="https://placehold.co/180x180/FFC107/2C3E50?text=Tim+4" class="img-fluid" alt="[Foto Anggota Tim 4]"></div>
                    <h4>Dewi Anggraini</h4>
                    <span>Lead UX Designer</span>
                    <p>Menciptakan pengalaman pengguna yang intuitif.</p>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>