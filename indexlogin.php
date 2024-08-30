<?php

include "connection.php";
session_start();

// if(!isset($_SESSION['user_name'])){
//    header('location:index.php');
// }

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

      <h1 class="logo"><a href="indexlogin.php">Toko Elektronik Terang Jaya</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#product">Product</a></li>
            <ul>
              <li><a href="login.php">Log In Admin</a></li>
              <li><a href="index.php">Log Out</a></li>
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
      <h1>Di Web Toko Elektronik Terang Jaya!</h1>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Home -->

  <main id="main">

    <!-- ======= About ======= -->
    <!-- <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/fotogemas/foto4.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Tentang Toko Elektronik Terang Jaya</h3>
            <p>
              Toko Elektronik Terang Jaya terletak di Kecamatan Wonosegoro, Kabupaten Boyolali, Provinsi Jawa Tengah. Memiliki
              penduduk sebanyak 7.614 jiwa, yang terdiri dari 3.909 laki-laki dan 3.705 perempuan.
            </p>
            <div class="row">
              <div class="col-md-6">
                <i class="bi bi-map"></i>
                <h4>Luas Wilayah</h4>
                <p>Luas Wilayah Karangjati Desa: 465.7410 Ha</p>
                <p>yang terdiri dari:</p>
                <p>Pekarangan: 105.8087 Ha</p>
                <p>Sawah Irigasi Teknis: 42.000 Ha</p>
                <p>Sawah Irigasi setengah Teknis: 161.5236 Ha</p>
                <p>Sawah Irigasi Sederhana: 12.000 Ha</p>
                <p>Sawah Tadah Hujan: 35.000 Ha</p>
                <p>Tanah Tegalan: 189,5087 Ha</p>
              </div>
              <div class="col-md-6">
                <i class="bi bi-people"></i>
                <h4>Masyarakat</h4>
                <p>Jumlah: 7.614 Jiwa</p>
                <p>Laki - laki: 3.909 Jiwa</p>
                <p>Perempuan: 3705 Jiwa</p>
                <p>Dari sejumlah penduduk tersebut terdiri dari 2.354 KK, sedangkan usia kerja penduduk Karangjati
                  rata-rata adalah usia produktif/ non produktif</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>End About -->

    <!-- ======= Foto ======= -->
    <section id="foto" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Foto</h2>
          <p>Kumpulan foto gemas dari Toko Elektronik Terang Jaya</p>
        </div>
        <?php
        $foto=query("SELECT * FROM foto");
        foreach($foto as $row):
        ?>
        <div class="product-card">
          <div class="col d-flex justify-content-center">
            <figure class="card-banner">
              <img src="./assets/img/fotogemas/<?= $row['foto'];?>" width="500px">
            </figure>
          </div>
          <?php
          endforeach;
          ?>
        </div>
    </section><!-- End Foto -->

    <!-- ======= Video ======= -->
    <section id="video" class="container">
      <div class="section-title">
        <h2>Video</h2>
        <p>Kumpulan video gemas dari Toko Elektronik Terang Jaya</p>
      </div>
      <div class="row d-flex">
        <?php
        $pvideo=query("SELECT * FROM video ");
        $ac = 0;      
        foreach($pvideo as $row):
        ?>
        <div class="col-6 d-flex ">
          <?=$row['link_video']?>
        </div>
        <?php
        $ac++;
        endforeach;
        ?>
      </div>
    </section><!-- End Video -->

    <!-- ======= Berita ======= -->
    <section id="berita" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Berita</h2>
          <p>Berita ter-up to date dari Desa Karangati</p>
        </div>

        <table class="table table-striped">

          <div class="member">
            <div class="member-info">
              <?php
              $berita = query("SELECT * FROM berita");
              foreach ($berita as $row):
              ?>
              <h3>
                <?=$row['judul']?>
              </h3>
              <h4>
                <?=$row['headline']?>
              </h4>
              <h5>
                <?=$row['isi']?>
              </h5>
              <?php
              endforeach;
              ?>
            </div>
          </div>

        </table>

      </div>
    </section><!-- End Berita -->
    
    <!-- ======= Product ======= -->
    <section id="product" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Product</h2>
          <p>Macam-macam product yang dijual oleh Toko Elektronik Terang Jaya, langsung hubungi nomor yang tertera!</p>
        </div>

        <div class="row justify-content-evenly">
          <h1 class="heading" align="center"><span>Makanan</span></h1>
          <div class="col-lg-6">
            <?php
            $makanan=query("SELECT * FROM product WHERE ctg=1");
            foreach($makanan as $row):
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
          <h1 class="heading" align="center"><span>Minuman</span></h1>
          <div class="col-lg-6">
            <?php
            $makanan=query("SELECT * FROM product WHERE ctg=2");
            foreach($makanan as $row):
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
          <h1 class="heading" align="center"><span>Kerajinan</span></h1>
          <div class="col-lg-6">
            <?php
            $makanan=query("SELECT * FROM product WHERE ctg=3");
            foreach($makanan as $row):
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

    <!-- ======= Pengaduan ======= -->
    <section id="pengaduan" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Pengaduan</h2>
          <p>Silakan laporkan masalah seputar Toko Elektronik Terang Jaya dan web Toko Elektronik Terang Jaya yang anda alami</p>
        </div>

        <div>
          <form action="" method="post" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="aduan" rows="5" placeholder="Aduan" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" name="kirim">Send Message</button></div>
          </form>
        </div>

      </div>
      <div>
        <table>
          <?php
          if(isset($_POST['kirim'])){
            $name = ($_POST['name']);
            $email = ($_POST['email']);
            $subject = ($_POST['subject']);
            $message = ($_POST['aduan']);

            if(!empty($name) && !empty($message)){
              $sql = mysqli_query($conn, "INSERT INTO aduan (name, email, subject, aduan) VALUES ('$name','$email','$subject','$message')");
              if($sql){
                ?>
                <script language="JavaScript">
                  alert("makasi udah speak up, akan segera kami tangani!");
                  document.location = "indexuser.php";
                </script>
                <?php
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);;
              }
            } else {
              ?>
              <script language="JavaScript">
                alert("Nama dan Message harus diisi!");
              </script>
              <?php
            }
          }     
          ?>
        </table>
      </div>

      </div>
    </section><!-- End Pengaduan -->

    <!-- ======= Komentar ======= -->
    <section id="komentar" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Komentar & Contact</h2>
          <p>Silakan hubungi kami dan berikan komentar agar kami bisa lebih baik lagi</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Karangjati, Wonosegoro, Boyolali, Jawa Tengah</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>karangjati@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+62 812 15621995</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="" method="post" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
      <div>
        <table>
          <?php
          if(isset($_POST['submit'])){
            $name = ($_POST['name']);
            $email = ($_POST['email']);
            $subject = ($_POST['subject']);
            $message = ($_POST['message']);
  
            if(!empty($name) && !empty($message)){
              $sql = mysqli_query($conn, "INSERT INTO komen (name, email, subject, message) VALUES ('$name','$email','$subject','$message')");
              if($sql){
                ?>
                <script language="JavaScript">
                  alert("tengs atas feedbacknya! smoga kami bisa improve lagi <3");
                  document.location = "indexuser.php";
                </script>
                <?php
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);;
              }
            } else {
              ?>
              <script language="JavaScript">
                alert("Nama dan Message harus diisi!");
              </script>
              <?php
            }
          }     
          ?>
          <table>
      </div>
    </section><!-- End Komentar -->

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