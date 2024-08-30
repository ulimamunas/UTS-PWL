<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Detail</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <main id="main">

    <!-- ======= Product Detail ======= -->
    <section class="section product-details">
        <div class="container">

          <div class="row">

            <div class="col-6 product-details-img">

              <?php
              $id = $_GET['id'];
              $pdetail = query("SELECT * FROM product WHERE id=$id");
              foreach($pdetail as $row):
              ?>
              <figure  class="product-display">
                <img src="assets/img/<?= $row['foto_pdt'];?>" width="700" height="700" loading="lazy"
                  alt="" class="cover w-100" data-product-display>
              </figure>
            </div>

            <div class="col-6 product-details-content">
              <h3 style="font-size:large;"  class="product-title"><?= $row['name'];?></h3>

              <data  style="font-size:large;" class="product-price" value="<?= $row['price'];?>">Rp
                <?= $row['price'];?></data>

              <p align="justify" class="description-text ">
                <?= $row['deskripsi'];?>
              </p>
              <?php
              endforeach;
              ?>
          
            </div>
          </div>

        </div>

        </div>
      </section><!-- End Product Detail -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>