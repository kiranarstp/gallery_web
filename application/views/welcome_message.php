<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <title>gallery foto</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/template/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/template/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/template/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/template/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/template/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

  <style>
        #header {
        background-color: #9B4444; /* Ganti dengan warna yang Anda inginkan */
        }

        body {
        background: linear-gradient(45deg, #B784B7, #A94438, #74E291, #A94438);
        background-size: 400% 400%;
        animation: gradientBG 7s ease infinite;
            }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .navbar {
            text-align: center;
        }

        .navbar ul {
            display: inline-block;
            list-style: none;
            padding: 0;
        }

        .navbar ul li {
            display: inline-block;
            margin: 0 10px; /* Jarak antar menu */
        }

        .dropdown ul {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown ul li {
            display: block;
        }

        .dropdown:hover ul {
            display: block;
        }
    </style>

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <div class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="fas fa-user"></i>
      <h1><?php echo $this->session->userdata('username'); ?></h1>
    </div>

    <!-- Tampilan NAVBAR -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                    <li><a class="nav-link" href="<?= site_url('Welcome') ?>">Home</a></li>
                    <li class="dropdown"><a href="#">Gallery <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?php echo site_url('Welcome/album') ?>">Album</a></li>
                        <li><a href="<?php echo site_url('Welcome/foto') ?>">Foto</a></li>
                        <!-- Tambahkan submenu lain di sini sesuai kebutuhan -->
                    </ul>
                    </li>
                    <li><a class="nav-link" href="<?= site_url('Login/logout') ?>">Logout</a></li>
                </ul>
            </nav>
    <!-- Tampilan akhir NAVBAR -->

</header><!-- End Header -->

<!-- Include the Welcome Message Here -->
<?php $this->load->view($content); ?>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gallery Foto</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/template/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/template/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url();?>assets/template/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url();?>assets/template/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>assets/template/js/main.js"></script>

</body>

</html>