<?php
// Memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// Mengecek apakah di URL ada nilai GET id
if (isset($_GET['id'])) {
    // Ambil nilai id dari URL dan disimpan dalam variabel $id
    $id = $_GET['id'];

    // Menampilkan data t_login dari database yang mempunyai id=$id
    $query = "SELECT * FROM t_login WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    // Mengecek apakah query berhasil
    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    }

    // Mengambil data dari database dan membuat variabel-variabel untuk menampung data
    // Variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_array($result);
    $id = $data["id"];
    $nama = $data['nama'];
    $tlahir = $data['tlahir'];
    $tglLahir = $data['tglLahir'];
    $alamat = $data['alamat'];
    $gender = $data['gender'];
    $hobi = $data['hobi'];
    $noHp = $data['noHp'];
    $email = $data['email'];
    $status = $data['status'];
} else {
    // Jika tidak ada data GET id, akan di-redirect ke view.php
    header("location:view.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        h1 {
            text-align: center;
        }

        .container {
            width: 400px;
            margin: auto;
        }
    </style>
</head>

<body>
    <nav class="navtop">
        <div>
            <h3>VOLUNTEER</h3>
            <a href="input.php"><i class="input"></i>Input</a>
            <link href="css/style.css" rel="stylesheet" type="text/css">
            <a href="view.php"><i class="view"></i>View</a>
        </div>
    </nav>
    <h1>Edit Data Volunteer</h1>
    <div class="container">
        <form id="form_Volunteer" action="edit_process.php" method="post">
            <fieldset>
                <legend>Edit Data Volunteer</legend>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <p>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
                </p>
                <p>
                    <label for="tlahir">Tempat Lahir:</label>
                    <input type="text" name="tlahir" id="tlahir" value="<?php echo $tlahir; ?>">
                </p>
                <p>
                    <label for="tglLahir">Tanggal Lahir:</label>
                    <input type="date" name="tglLahir" id="tglLahir" value="<? echo $tglLahir; ?>">
                </p>
                <p>
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
                </p>
                <p>
                    <label for="gender">Gender:</label>
                    <input type="radio" name="gender" id="gender_l" value="L" <?php if ($gender == "L") echo "checked='checked'"; ?>>
                    Laki-Laki
                    <input type="radio" name="gender" id="gender_p" value="P" <?php if ($gender == "P") echo "checked='checked'"; ?>>
                    Perempuan
                </p>

                <p>
                    <label for="hobi">Hobi:</label>
                    <input type="text" name="hobi" id="hobi" value="<?php echo $hobi; ?>">
                </p>
                <p>
                    <label for="noHp">No HP:</label>
                    <input type="text" name="noHp" id="noHp" placeholder="Contoh: 081223344" value="<?php echo $noHp; ?>">
                </p>
                <p>
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" value="<?php echo $email; ?>">
                </p>
                <p>
                    <label for="status">Status:</label>
                    <input type="text" name="status" id="status" value="<?php echo $status; ?>">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>

</html>

                    
