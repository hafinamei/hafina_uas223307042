<?php
// Memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

if (isset($_POST['edit'])) {
    // Mendapatkan data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tlahir = $_POST['tlahir'];
    $tglLahir = $_POST['tglLahir'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $hobi = $_POST['hobi'];
    $noHp = $_POST['noHp'];
    $email = $_POST['email'];
    $status = $_POST['status'];

    // Update data volunteer ke database
    $query = "UPDATE t_login SET nama='$nama', tlahir='$tlahir', tglLahir='$tglLahir', alamat='$alamat', gender='$gender', hobi='$hobi', noHp='$noHp', email='$email', status='$status' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    // Periksa hasil query
    if ($result) {
        // Jika berhasil, redirect ke halaman view.php
        header("Location: view.php");
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        die("Gagal memperbarui data: " . mysqli_error($conn));
    }
} else {
    // Jika tidak ada data POST dari form, redirect ke halaman view.php
    header("Location: view.php");
    exit();
}
?>
