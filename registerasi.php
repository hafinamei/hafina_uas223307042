<?php

include ('koneksi.php');

session_start();
error_reporting(0);

if (isset($_POST['submit'])) {

   $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
   $username = ($_POST['username']);
   $email = ($_POST['usermail']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);

   $select = "SELECT * FROM t_user WHERE fullname = '$fullname' AND username = '$username' AND email = '$email' AND password = '$pass'";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $error[] = 'User already exists';
   } else {
      if ($pass != $cpass) {
         $error[] = 'Password does not match!';
      } else {
         $insert = "INSERT INTO t_user(fullname, username, email, password) VALUES('$fullname','$username','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location: index.php');
         exit();
      }
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">

   <form action="" method="post">
      <h3 class="title">REGISTER</h3>
      <img src="img/lucu.png" width="100%" height="105vh">
      <?php
         if (isset($error)) {
            foreach($error as $error) {
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
      <input type="text" name="fullname" placeholder="Enter your full name" class="box" required>
      <input type="text" name="username" placeholder="Enter your username" class="box" required>
      <input type="email" name="usermail" placeholder="Enter your email" class="box" required>
      <input type="password" name="password" placeholder="Enter your password" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirm your password" class="box" required>
      <input type="submit" value="register now" class="form-btn" name="submit">
      <p>Already have an account? <a href="index.php">Login now!</a></p>
   </form>

</div>

</body>
</html>

