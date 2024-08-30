<?php

include "connection.php";

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email_user = $_POST['email_user'];
   $notelp = $_POST['notelp'];
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $role = 'user';

   $select = " SELECT * FROM user WHERE username = '$username' && password = '$pass' ";
   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $error[] = 'user already exist!';
   } else {
      if ($pass != $cpass) {
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO user(name, email_user, notelp, username, password, role) VALUES('$name','$email_user','$notelp','$username','$pass','$role')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/stylelogreg.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email_user" required placeholder="enter your email">
      <input type="text" name="notelp" required placeholder="enter your phone number">
      <input type="username" name="username" required placeholder="enter your username">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>