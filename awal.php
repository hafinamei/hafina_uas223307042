<?php
session_start();

// Cek apakah ada pesan keluar yang tersimpan di session
if (isset($_SESSION['logout_message'])) {
    // Tampilkan pesan keluar
    echo '<div class="logout-message">' . $_SESSION['logout_message'] . '</div>';

    // Hapus pesan keluar dari session setelah ditampilkan
    unset($_SESSION['logout_message']);
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Halaman Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
    <img src="img/volunteer.png" width="50%" height="60vh">
        <h4>Anda yakin akan logout?</h4>
        <div>
        <a href="view.php">TIDAK atau</a>

        <a href="index.php">LOGOUT</a>
</div>


</html>