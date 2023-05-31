<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="uashafina";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal : ". mysli_connect_error());
}else{
    echo "Koneksi Berhasil";
}
?>