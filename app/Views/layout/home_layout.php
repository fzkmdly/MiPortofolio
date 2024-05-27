<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faiz Akhmad Daulay</title>

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/Verrr.jpg'); ?>" rel="icon">
    <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<body>

    <header id="header">
        <div class="d-flex flex-column">

        <div class="profile">
            <img src="assets/img/Faz-no-bg.png" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Faiz Akhmad Daulay</a></h1>
            <div class="social-links mt-3 text-center">
            <a href="https://twitter.com/SaizMazroui04" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.facebook.com/faizakhmad.akhmad.1/" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/fzkhmdly/" class="instagram"><i class="bx bxl-instagram"></i></a>
            <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
            <a href="https://www.linkedin.com/in/faiz-akhmad-daulay-65730b291/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
            <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->
    
    <?=$this->renderSection('bodycontent') ?>



    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/typed.js/typed.umd.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>
</html>