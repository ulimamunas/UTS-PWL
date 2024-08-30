<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['admin_name'])){
  header('location:login.php');
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambahkan Akun</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">Admin | Terang Jaya</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-person"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2">
              <?php echo $_SESSION['admin_name'] ?>
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="kelolauser.php">
              <i class="bi bi-circle"></i><span>Kelola Akun</span>
            </a>
          </li>
          <li>
            <a href="inputuser.php" class="active">
              <i class="bi bi-circle"></i><span>Tambahkan Akun</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="kelolaproduct.php">
              <i class="bi bi-circle"></i><span>Kelola Product</span>
            </a>
          </li>
          <li>
            <a href="inputproduct.php">
              <i class="bi bi-circle"></i><span>Tambahkan Product</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambahkan Akun</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">Tambahkan Akun</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div>
          <!-- Multi Columns Form -->
          <form class="row g-3" action="" method="POST">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" name="email">
              <label for="email" class="form-label">Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="notelp" name="notelp">
              <label for="notelp" class="form-label">No. Telp</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name">
              <label for="name" class="form-label">Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="username" class="form-control" id="username" name="username">
              <label for="username" class="form-label">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="pw" class="form-control" id="inputPassword">
              <label for="inputPassword" class="form-label">Password</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="pw2" class="form-control" id="inputPassword2">
              <label for="inputPassword2" class="form-label">Konfirmasi Password</label>
            </div>
            <div class="text-center">
              <button type="submit" name="buat" class="btn btn-primary">Buat Akun</button>
            </div>
          </form><!-- End Multi Columns Form -->
          <?php
              if (isset($_POST['buat'])) {

                if (register($_POST) > 0) {
                  echo "<script>alert('user added');</script>";
                } else {
                  echo mysqli_error($conn);
                }
              }
              ?>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>A11.2022.14499 - ULIMA MUNA SYARIFAH</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>