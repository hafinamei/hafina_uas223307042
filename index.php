<?php

include("koneksi.php");

session_start();

if(isset($_POST['submit'])){
    
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = ($_POST['password']);

   $select = " SELECT * FROM t_user WHERE username = '$username' && password = '$pass' ";


   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $_SESSION['username'] = $username;
      header('location:view.php');
   }else{
      $error[] = 'Incorrect password or username';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <style>
      .container-foto {
         display: grid;
         place-items: center; /* Mengatur posisi elemen ke tengah-tengah */
         }
      
   </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    
<div class="container">

    <form action="" method="post">
        <h1 class="title">LOGIN</h1>
        <img src="img/cute.png" width="100%" height="105vh">
        <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password" class="box" required>
        <input type="submit" value="login now" class="form-btn" name="submit">
        <p>Haven't created an account? <a href="registerasi.php">Register now!</a></p>
    </form>

</div>
<div class=container-foto>
   <img src="img/volunteer.png" width="20%" height="110vh">
</div>
</body>
</html>