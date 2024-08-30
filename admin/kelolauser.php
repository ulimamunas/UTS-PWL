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

  <title>Kelola Akun</title>
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
            <a href="kelolauser.php" class="active">
              <i class="bi bi-circle"></i><span>Kelola Akun</span>
            </a>
          </li>
          <li>
            <a href="inputuser.php">
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

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Kelola Akun</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active">Kelola Akun</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div>
          <div class="container">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>No. Telp</th>
                  <th>Username</th>
                  <th>User Type</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $user = query("SELECT * FROM user");
                $i = 1;
                foreach($user as $row):
                ?>
                <tr>
                  <th scope="row">
                    <?= $i;?>
                  </th>
                  <td>
                    <?= $row['email_user']?>
                  </td>
                  <td>
                    <?= $row['notelp']?>
                  </td>
                  <td>
                    <?= $row['username']?>
                  </td>
                  <td>
                    <?= $row['role']?>
                  </td>
                  <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                      data-bs-target="#editModal<?= $i;?>">Edit</button>
                    <a href="deleteuser.php?id=<?= $row['id'];?>" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="editModal<?= $i;?>" tabindex="-1" aria-labelledby="editModalLabel<?= $i;?>"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel<?= $i;?>">Edit Akun</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="" method="POST">
                        <div class="modal-body">
                          <div class="form-floating mb-3">
                            <input id="uname" type="text" class="form-control d-none" name="id"
                              value="<?= $row['id']?>">
                            <input id="username" type="text" class="form-control" name="username"
                              value="<?= $row['username']?>">
                            <label for="username">Username:</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control" name="email_user"
                              value="<?= $row['email_user']?>">
                            <label for="email">Email:</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input id="password" type="password" name="pw" class="form-control">
                            <label for="password">Password Baru:</label>
                          </div>
                          <input type="checkbox" onclick="showPw()">Show Password
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                          <button type="submit" name="simpan" class="btn btn-primary"
                            data-bs-dismiss="modal">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <?php
                  $i++;
                endforeach;
                if(isset($_POST['simpan'])){
                  $id = $_POST['id'];
                  $username = $_POST['username']; 
                  $email_user = $_POST['email_user'];
                  $notelp =$_POST['notelp'];
                  $pw = mysqli_real_escape_string($conn,$_POST['password']);
                  $pw = md5($pw);

                  $edit=  mysqli_query($conn, "UPDATE user SET email_user='$email_user',notelp='$notelp',  username='$username',password='$pw' WHERE id='$id'");
                  if($edit){
                    echo '<script>
                        window.addEventListener("load",function (){window.location.href=window.location.href;},false);
                    </script>';
                  }
                  if(!$edit){
                    echo "GAGAl";
                  }
                }
                ?>
              </tbody>
            </table>
            <script>
              function showPw() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
              }
            </script>

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