<?php
include_once './admin/functions/global.php';

if ($_SERVER['REQUEST_URI'] == '/login') {
    header('Location: admin/login.php');
}

$galleries = getGalleries();
?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!-- Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Animation on Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Pura Griya Sakti Manuaba</title>

    <link rel="icon" type="image/png" href="assets/img/logo/favicon.ico">
</head>

<body data-spy="scroll" data-offset="120" onscroll="showNavbar()">
    <!-- Start Navbar Area -->
    <nav class="navbar d-none navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="logo">
                <a href="">
                    <img src="assets/img/logo/logo.png" alt="Main Logo" width="100px">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#beranda" class="nav-link">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#sejarah" class="nav-link">
                            Sejarah
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#lokasi" class="nav-link">
                            Lokasi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#galeri" class="nav-link">
                            Galeri
                        </a>
                    </li>
                </ul>

                <div class="others-option">
                    <div class="d-flex align-items-center">
                        <div class="option-item">
                            <a href="#tentang" class="default-btn">
                                Tentang
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar Area -->

    <!-- Start Main Banner Area -->
    <div id="beranda" class="main-banner-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-content">
                        <h1>Pura Griya Sakti Manuaba</h1>
                        <p>Aplikasi Virtual Tour 360<sup>o</sup></p>

                        <a target="_blank" href="virtual-tour/index.htm" type="submit" class="btn btn-primary py-3 px-5 mt-5">
                            Mulai Virtual Tour
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="particles-js"></div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Aturan Pengunjung -->
    <section class="about-area pt-100">
        <div class="container" data-aos="fade-up">
            <div class="section-title text-start">
                <h4>Aturan Pengunjung</h4>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <p style="text-align: justify;">
                            Dilarang memasuki wilayah Pura Pegulingan bagi wanita yang sedang datang bulan, dan pengunjung kika sedang tidak suci (sebelan) hal ini bertujuan untuk menjaga kesucian dari Pura Griya Sakti Manuaba.
                            Dilarang membuang sampan sembarangan, diharapkan bagi pengunjung membuang sampan pada tempat sampah yang telah disediakan, uituk menjaga kebersihan pura.
                            Dilarang melakukan tindakan asusila di area Pura Griya Sakti Manuaba dan juga menggunakan pakaian yang sopan sería menggunakan selendang.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="section-title text-start col-12">
                    <h4>Etika Berbusana Kepura</h4>
                </div>
                <div class="col-4" data-aos="fade-right">
                    <h6>Pria:</h6>
                    <ul>
                        <li>Baju</li>
                        <li>Kampuh</li>
                        <li>Kain Panjang atau Kemben</li>
                        <li>Sabuk atau Sesenteng</li>
                        <li>Alas kaki (fakultatif/boleh iya,boleh tidak)</li>
                    </ul>
                </div>
                <div class="col-4" data-aos="fade-up">
                    <img src="assets/img/busana.jpg" alt="Busana">
                </div>
                <div class="col-4" data-aos="fade-left">
                    <h6>Wanita:</h6>
                    <ul>
                        <li>Baju atau kebaya</li>
                        <li>Kain panjang</li>
                        <li>Sesenteng</li>
                        <li>Sabuk</li>
                        <li>Alas kaki (fakultatif/ boleh iya,boleh tidak)</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <p>Kesopanan dalam berpakaian ke Pura diatur pula dalam Tata-Tertib masuk ke Pura di mana dinyatakan bahwa pakaian ke Pura adalah yang sopan, rapi, bersih, dan tidak menonjolkan bagian-bagian tubuh yang dapat merangsang, serta dandanan yang sederhana dalam artian tidak menggunakan hiasan berlebihan.</p>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section>
    <!-- End Aturan Pengunjung -->

    <!-- Start Sejarah -->
    <section id="sejarah" class="about-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Sejarah</h2>
                <div class="bar"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-content">
                        <p style="text-align: justify;">Menurut keyakinan krama Pura Griya sakti Manuaba diceritakan Ida
                            Betara
                            Sakti Manuaba adalah
                            seseorang Brahmana masih
                            keturunan Danghyan Dwijendra. Beliau adalah Putra dari Maha Brahmana yang bernama Brahmana
                            Diler. Beliau sendiri bernama
                            Brahmana Nyoman Buruan yang merupakan cucu dari Dhanghyang Dwijendra. Beliau adalah seorang
                            Brahmana yang sangat sakti
                            dan bijaksana karenanya beliau pada waktu itu dijadikan Bagawanta oleh Raja Bali yang
                            Berkuasa pada waktu itu yang
                            Bergelar Dalem Waturenggong sekitar Abad ke 14 Masehi</p>
                        <p style="text-align: justify;">Pada waktu itu Desa Manuaba sedang tertimpa bencana yang sangat
                            dahsyat
                            bayak orang yang
                            sakit tidak bisa di obati,
                            bayak juga yang meninggal dunia, sawah – sawah dan lading banyak yang kekeringan dan tidak
                            bisa menghasilkan.Akhirnya
                            Bendesa Manuaba yang memerintah pada waktu itu tangkil menghadap Raja Bali mohon petunjuk
                            agar penduduk masyarakat Desa
                            Manuaba bisa diselamatkan. Maka atas petunjuk Raja Bali pada waktu itu dimohonlah Beliau
                            Betara Sakti Manuaba (Sira
                            Brahmana Nyoman Buruan) agar beliau sudi datang ke desa Manuaba untuk menyelamatkan penduduk
                            dari mara bahaya, dan
                            beliaupun berkenaan untuk datang menyelamatkan penduduk Desa Manuaba.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-image px-3 d-flex justify-content-center">
                        <img width="90%" src="assets/img/sejarah/sejarah-1.png" alt="image" class="rounded shadow">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-image px-3 d-flex justify-content-center">
                        <img width="90%" src="assets/img/sejarah/sejarah-2.png" alt="image" class="rounded shadow">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-content">
                        <p style="text-align: justify;">Menurut keyakinan krama Pura Griya sakti Manuaba diceritakan Ida
                            Betara
                            Sakti Manuaba adalah
                            seseorang Brahmana masih
                            keturunan Danghyan Dwijendra. Beliau adalah Putra dari Maha Brahmana yang bernama Brahmana
                            Diler. Beliau sendiri bernama
                            Brahmana Nyoman Buruan yang merupakan cucu dari Dhanghyang Dwijendra. Beliau adalah seorang
                            Brahmana yang sangat sakti
                            dan bijaksana karenanya beliau pada waktu itu dijadikan Bagawanta oleh Raja Bali yang
                            Berkuasa pada waktu itu yang
                            Bergelar Dalem Waturenggong sekitar Abad ke 14 Masehi</p>
                        <p style="text-align: justify;">Pada waktu itu Desa Manuaba sedang tertimpa bencana yang sangat
                            dahsyat
                            bayak orang yang
                            sakit tidak bisa di obati,
                            bayak juga yang meninggal dunia, sawah – sawah dan lading banyak yang kekeringan dan tidak
                            bisa menghasilkan.Akhirnya
                            Bendesa Manuaba yang memerintah pada waktu itu tangkil menghadap Raja Bali mohon petunjuk
                            agar penduduk masyarakat Desa
                            Manuaba bisa diselamatkan. Maka atas petunjuk Raja Bali pada waktu itu dimohonlah Beliau
                            Betara Sakti Manuaba (Sira
                            Brahmana Nyoman Buruan) agar beliau sudi datang ke desa Manuaba untuk menyelamatkan penduduk
                            dari mara bahaya, dan
                            beliaupun berkenaan untuk datang menyelamatkan penduduk Desa Manuaba.</p>
                    </div>
                </div>
            </div>

            <!-- Start Video Area -->
            <div class="video-area pt-100" data-aos="fade-up">
                <div class="container">
                    <div class="video-content">
                        <h3>Pengenalan Pura Griya Sakti Manuaba</h3>
                        <a href="https://www.youtube.com/watch?v=GmEAQclXhDA" class="video-btn popup-youtube">
                            <i class="fas fa-play"></i>
                        </a>

                    </div>
                </div>
            </div>
            <!-- End Video Area -->
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section>
    <!-- End Sejarah -->

    <!-- Start Lokasi -->
    <section id="lokasi" class="features-area pt-5 pb-70" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <h2>Lokasi</h2>
                <div class="bar"></div>
                <p>Pura Griya Sakti Manuaba berlokasi di Jl. Raya Kendran, Kenderan, Kec. Tegallalang, Kabupaten
                    Gianyar</p>
            </div>

            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d986.6341808990163!2d115.2898728!3d-8.44707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd222a85a8df8a3%3A0xd460e0c65b1bdcf0!2sPura%20Griya%20Sakti%20Manuaba!5e0!3m2!1sid!2sid!4v1662939971191!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section>
    <!-- End Lokasi -->

    <!-- End Galeri -->
    <section id="galeri" class="screenshot-area ptb-100" data-aos="fade-up">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Galeri</h2>
                <div class="bar"></div>
            </div>

            <div class="screenshot-slider owl-carousel owl-theme">
                <?php foreach ($galleries as $gallery) { ?>
                    <div class="screenshot-item">
                        <div class="image">
                            <img src="admin/img/galleries/<?= $gallery['image_name'] ?>" alt="image" class="rounded shadow">
                        </div>
                        <h6 class="mt-3 text-light text-center"><?= $gallery['title'] ?></h6>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Galeri -->

    <!-- Start Tentang -->
    <section id="tentang" class="team-area pt-100 pb-70" data-aos="fade-up">
        <div class="container px-5">
            <div class="section-title">
                <h2>Tentang</h2>
                <div class="bar"></div>
                <p>Pihak yang terlibat dalam penelitian yang berjudul "Pengenalan
                    Pura Griya Sakti Manuaba
                    Menggunakan Aplikasi Virtual Tour 360 Degree".</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-team px-3">
                        <div class="image">
                            <img src="assets/img/tentang/pak-harsemadi.jpeg" alt="image" class="rounded-top">

                            <ul class="social">
                                <li>
                                    <a href="https://www.instagram.com/blidedut/?hl=id" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class="content rounded-bottom">
                                <h3>I Gede Harsemadi, S.Kom., M.T.</h3>
                                <p>Dosen Pembimbing I</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-team px-3">
                        <div class="image">
                            <img src="assets/img/tentang/pak-darma.jpeg" alt="image" class="rounded-top">

                            <ul class="social">
                                <li>
                                    <a target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class="content rounded-bottom">
                                <h3>I Made Darma Susila, S.Kom., M,Kom.</h3>
                                <p>Dosen Pembimbing II</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-team px-3">
                        <div class="image">
                            <img src="assets/img/tentang/rio.jpeg" alt="image" class="rounded-top">

                            <ul class="social">
                                <li>
                                    <a href="https://www.instagram.com/rioohermawan/?hl=id" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>

                            <div class="content rounded-bottom">
                                <h3>Komang Rio Hermawan</h3>
                                <p>Mahasiswa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section>
    <!-- End Tentang -->

    <!-- Start Kontak -->
    <!-- <section id="kontak" class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Kontak</h2>
                <div class="bar"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form action="#" id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Nama lengkap ...">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Alamat email ...">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Masukan Komentar anda terkait lokasi ini ..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="send-btn">
                                        <button type="reset" class="default-btn">
                                            Kirim Komentar
                                            <span></span>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h3>Hubungi kami melalui nomor telepon atau alamat email berikut</h3>
                            <h2>
                                <a href="tel:+1-485-456-0102">+1-485-456-0102</a>
                                <span>atau</span>
                                <a href="mailto:hello@colugo.com">hello@colugo.com</a>
                            </h2>

                            <ul class="social">
                                <li>
                                    <a href="https://www.instagram.com/explore/tags/puragriyasaktimanuaba/?hl=id" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section> -->
    <!-- End Kontak -->

    <!-- Start Komentar -->
    <!-- <section id="komentar" class="testimonial-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Komentar</h2>
                <div class="bar"></div>
            </div>

            <div class="testimonial-slides">
                <div class="client-feedback">
                    <div>
                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="single-feedback">
                                <div class="icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                            </div>
                        </div>
                    </div>

                    <button class="prev-arrow slick-arrow">
                        <i class="fa fa-chevron-left"></i>
                    </button>

                    <button class="next-arrow slick-arrow">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>

                <div class="client-thumbnails">
                    <div>
                        <div class="item">
                            <div class="title">
                                <h3>Jonus Nathan</h3>
                                <span>CEO at Envato</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                <h3>Sadio Finn</h3>
                                <span>CEO at FlatIcon</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                <h3>Tom Olivar</h3>
                                <span>CEO at ThemeForest</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                <h3>James Finn</h3>
                                <span>CEO at GitLab</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                <h3>John Lucy</h3>
                                <span>CEO at Linkedin</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                <h3>Sarah Taylor</h3>
                                <span>CEO at Twitter</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                <h3>James Anderson</h3>
                                <span>CEO at Facebook</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="title">
                                <h3>Steven Smith</h3>
                                <span>CEO at EnvyTheme</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="default-shape">
            <div class="shape-1">
                <img src="assets/img/shape/1.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="assets/img/shape/2.png" alt="image">
            </div>

            <div class="shape-3">
                <img src="assets/img/shape/3.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="assets/img/shape/4.svg" alt="image">
            </div>

            <div class="shape-5">
                <img src="assets/img/shape/5.png" alt="image">
            </div>
        </div>
    </section> -->
    <!-- End Komentar -->

    <!-- Start Footer -->
    <div class="copy-right bg-dark">
        <div class="container">
            <div class="copy-right-content">
                <p class="text-light">
                    Copyright © 2022. All Rights Reserved by Pura Griya Sakti Manuaba
                </p>
            </div>
        </div>
    </div>
    <!-- End Footer -->

    <!-- Start Go Top Section -->
    <div class="go-top">
        <i class="fa fa-chevron-up"></i>
        <i class="fa fa-chevron-up"></i>
    </div>
    <!-- End Go Top Section -->

    <!-- jQuery Min JS -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- Popper Min JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Appear JS -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- Odometer JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- Slick JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Particles JS -->
    <script src="assets/js/particles.min.js"></script>
    <!-- Ripples JS -->
    <script src="assets/js/jquery.ripples-min.js"></script>
    <!-- Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- WOW Min JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- AjaxChimp Min JS -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator Min JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact Form Min JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
    <!-- Animation on Scroll JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>