<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            .container{
                width: 400px;
                margin: auto;
            }
        </style>
    </head>
    <body>
    <nav class="navtop">
    	    <div>
    		    <h3>VOLUNTEER</h3>
                <a href="input_process.php"><i class="input"></i>Input</a>
                <link href="css/style.css" rel="stylesheet" type="text/css">
    		    <a href="view.php"><i class="view"></i>View</a>
    	    </div>
        </nav>
        <h1>Input data</h1>
        <div class="container">
            <form id="VOLUNTEER" action="input_process.php" method="post">
                <fieldset>
                    <legend>Input Data Volunteer</legend>
                    <p>
                        <label for="nama">Nama : </label>
                        <input type="text" name="nama" id="nama">
                    </p>
                    <p>
                        <label for="nama">Tempat Lahir : </label>
                        <input type="text" name="tlahir" id="tlahir">
                    </p>
                    <p>
                        <label for="nama">Tanggal Lahir : </label>
                        <input type="date" name="tglLahir" id="tglLahir">
                    </p>
                    <p>
                        <label for="nama">Alamat : </label>
                        <input type="text" name="alamat" id="alamat">
                    </p>
                    <p>
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" id="gender_l" value="L" checked>
                        Laki-Laki
                        <input type="radio" name="gender" id="gender_p" value="P">
                        Perempuan
                    </p>


                    <p>
                        <label for="nama">Hobi : </label>
                        <input type="text" name="hobi" id="hobi">
                    </p>
                    <p>
                        <label for="noHP">No HP:</label>
                        <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081223344">
                    </p>
                    <p>
                        <label for="nama">Email : </label>
                        <input type="text" name="email" id="email">
                    </p>
                    <p>
                        <label for="nama">Status : </label>
                        <input type="text" name="status" id="status">
                    </p>
                </fieldset>
                <p>
                    <input type="submit" name="input" value="simpan">
                </p>
            </form>
    </body>
</html>