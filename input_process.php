<?php
// buat koneksi dengan database
include("koneksi.php");

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {
    // membuat variabel untuk menampung data dari form
    $nama = $_POST['nama'];
    $tlahir = $_POST['tlahir'];
    $tglLahir = $_POST['tglLahir'];
    $alamat = $_POST['alamat'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $hobi = $_POST['hobi'];
    $noHp = $_POST['noHp'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    // menjalankan query INSERT untuk menambah data ke database
    $query = "INSERT INTO t_login VALUES (NULL, '$nama', '$tlahir', '$tglLahir', '$alamat', '$gender', '$hobi', '$noHp', '$email', '$status')";
    $result = mysqli_query($conn, $query);

    // periksa apakah query berhasil dijalankan
    if(mysqli_affected_rows($conn) > 0){
        // query berhasil dijalankan
    } else {
        // query gagal dijalankan
        die ("Query gagal dijalankan: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    }
}

// melakukan redirect (mengalihkan) ke halaman viewdosen.php
header("location:view.php");
?>
