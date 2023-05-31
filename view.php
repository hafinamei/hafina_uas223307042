<?php
    include 'koneksi.php'; // memanggil file koneksi.php untuk melakukan koneksi database
?>

<!DOCTYPE html>
<html> 
    <head>
        <style>
            table{
                width: 840px;
                margin: auto;
            }
            h1{
                text-align: center;
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
                <a href="logout.php"><i class="view"></i>Log Out</a>
    	    </div>
        <h1>Data Volunteer</h1>    
        <center><a href="input.php">Input Data Volunteer</a></center>
        <br/>
        <div class="container">
        <table border="1">
        
            <tr>
                <th>ID</th>
                <th>Nama Volunteer</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Gender</th>
                <th>Hobi</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Status</th>
                <th>Pilihan</th>
            </tr>
            <?php
            // jalankan query untuk menampilkan semua data  diurutkan ascending berdasarkan Id
            $query = "SELECT * FROM t_login ORDER BY id ASC";
            $result =  mysqli_query($conn, $query);

            //mengecek apakah ada error ketika menjalankan query
            if(!$result) {
                die ("Query Error: ".mysqli_errno($conn). " - ".mysqli_error($link));
            }

            // hasil query akan disimpan dalam variabel $data dalam bentuk array
            // kemudian dicetak dengan perulangan while
            while ($data = mysqli_fetch_assoc($result)) 
            {
               // mencetak / menampilkan data
               echo "<tr>";
               echo "<td>$data[id]</td>"; // menampilkan data idVolunteeer
               echo "<td>$data[nama]</td>"; // menampilkan data namaVolunteer
               echo "<td>$data[tlahir]</td>";
               echo "<td>$data[tglLahir]</td>";
               echo "<td>$data[alamat]</td>";
               echo "<td>$data[gender]</td>";
               echo "<td>$data[hobi]</td>";
               echo "<td>$data[noHp]</td>";
               echo "<td>$data[email]</td>";
               echo "<td>$data[status]</td>"; // menampilkan data noHp
               // membuat link untuk mengedit dan menghapus data
               echo '<td>
                    <a href="edit.php?id='.$data['id'].'">Edit</a> /
                    <a href="hapus.php?id='.$data['id'].'"
                        onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
               </td>';
               echo "</tr>";  
            }
            ?>
        </table>
    </body>
</html>