<?php
include "connection.php";
session_start();
if (isset($_POST['submit'])) {
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user WHERE username = '$username' && password = '$pass' ";
   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
      if($row['role'] == 'admin'){
         $_SESSION['admin_name'] = $row['name'];
         header('location:admin/index.php');
      } elseif ($row['role'] == 'user') {
         $_SESSION['user_name'] = $row['name'];
         header('location:indexlogin.php');
      }
   } else {
      $error[] = 'incorrect email or password!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login form</title>

  <!-- custom css file link  -->
  <link rel="stylesheet" href="assets/css/stylelogreg.css">

</head>

<body>
  <div class="form-container">
    <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?>
      <input type="username" name="username" required placeholder="enter your username">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
    </form>
  </div>
</body>

</html>