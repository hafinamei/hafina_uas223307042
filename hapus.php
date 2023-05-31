<?php
// Buka koneksi dengan MySQL
include("koneksi.php");

// Mengecek apakah di URL ada GET id
if (isset($_GET['id'])) {
    // Menyimpan nilai id dari URL ke dalam variabel $id
    $id = $_GET['id'];

    // Jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM t_login WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dijalankan
    if (!$result) {
        die("Gagal menghapus data: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    }
}

// Melakukan redirect ke halaman view.php setelah menghapus data
header("location: view.php");
?>
