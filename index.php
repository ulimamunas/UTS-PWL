<?php

include "connection.php";
session_start();

if(!isset($_SESSION['user_name'])){
  header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>User Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/styleindex.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="indexuser.php">Toko Elektronik Terang Jaya</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#product">Product</a></li>
          <li class="dropdown"><a href="#"><span>
                Akun
              </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login.php">Log In</a></li>
              <li><a href="register.php">Register</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Home ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Selamat Datang<h1>
      <h1>Di Web Toko Eletronik Terang Jaya!</h1>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Home -->

  <main id="main">
    
    <!-- ======= Product ======= -->
    <section id="product" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Product</h2>
          <p>Macam-macam product yang dijual oleh Toko Elektronik Terang Jaya!</p>
        </div>

        <div class="row justify-content-evenly">
          <h1 class="heading" align="center"><span>Rumah Tangga</span></h1>
          <div class="col-lg-6">
            <?php
            $rumahtangga=query("SELECT * FROM product WHERE ctg=1");
            foreach($rumahtangga as $row):
            ?>
            <div class="col-lg-6">
              <div class="image">
                <img src="assets/img/<?=$row['foto_pdt']?>" class="main-img" class="cover2" alt="">
              </div>
              <div class="content">
                <h3><?=$row['name']?></h3>
                <div class="price">Rp <?=$row['price']?> </div>
                <a class="btn btn-primary" href="product-detail.php?id=<?=$row['id']?>">Lihat</a>
              </div>
            </div>
            <?php
            endforeach;
            ?>
          </div>

        </div>

        <div class="row justify-content-evenly">
          <h1 class="heading" align="center"><span>Gadget</span></h1>
          <div class="col-lg-6">
            <?php
            $gadget=query("SELECT * FROM product WHERE ctg=2");
            foreach($gadget as $row):
            ?>
            <div class="col-lg-6">
              <div class="image">
                <img src="assets/img/<?=$row['foto_pdt']?>" class="main-img" class="cover2" alt="">
              </div>
              <div class="content">
                <h3><?=$row['name']?></h3>
                <div class="price">Rp <?=$row['price']?> </div>
                <a class="btn btn-primary" href="product-detail.php?id=<?=$row['id']?>">Lihat</a>
              </div>
            </div>
            <?php
            endforeach;
            ?>
          </div>

        </div>

        <div class="row justify-content-evenly">
          <h1 class="heading" align="center"><span>Lain-Lain</span></h1>
          <div class="col-lg-6">
            <?php
            $lain=query("SELECT * FROM product WHERE ctg=3");
            foreach($lain as $row):
            ?>
            <div class="col-lg-6">
              <div class="image">
                <img src="assets/img/<?=$row['foto_pdt']?>" class="main-img" class="cover2" alt="">
              </div>
              <div class="content">
                <h3><?=$row['name']?></h3>
                <div class="price">Rp <?=$row['price']?> </div>
                <a class="btn btn-primary" href="product-detail.php?id=<?=$row['id']?>">Lihat</a>
              </div>
            </div>
            <?php
            endforeach;
            ?>
          </div>

        </div>

      </div>
    </section><!-- End Product -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>A11.2022.14499 | ULIMA MUNA SYARIFAH</span></strong>.
          <p>All Rights Reserved</p>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>