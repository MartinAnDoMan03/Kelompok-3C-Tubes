<?php
require "includes/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mobil</title>
    <link rel="stylesheet" href="update-mobil.css">
</head>

<body>

    <div class="row">

        <?php
        $id = $_POST['id'];
        $query = "SELECT * FROM mobil WHERE id = $id";
        $result = mysqli_query($conn, $query);
        foreach ($result as $data) {

            ?>

        </div>

        <form method="POST">
        <div class="box">
            <div class="container">
                <div class="top">
                    <br>
                    <header>Update Mobil</header><br>
                </div>
                <div class="input-field">
                    <input type="text" hidden name="id" value="<?php echo $data['id']; ?>">
                <label for="mobil"><h4>Mobil</h4></label>
                <input value="<?php $data['mobil']; ?>" id="username" type="text" class="form-control" name="mobil"
                    required autofocus>
                <div class="invalid-feedback"></div>
                </div><br>

                <div class="input-field">
                <label for="deskripsi"><h4>Deskripsi</h4></label>
                <input value="<?php $data['deskripsi']; ?>" id="password" type="text" class="form-control"
                    name="deskripsi" required data-eye>
                </div><br>
                
                <div class="input-field">
                <label for="tahun_rilis"><h4>Tahun Rilis</h4></label>
                <input value="<?php $data['tahun_rilis']; ?>" id="tahun_rilis" type="text" class="form-control" name="tahun_rilis"
                    required>
                <div class="invalid-feedback"></div>
                </div><br>

                <div class="input-field">
                <label for="harga"><h4>Harga</h4></label>
                <input value="<?php $data['harga']; ?>" id="harga" type="text" class="form-control" name="harga" required>
                <div class="invalid-feedback"></div>
                </div><br>

                <div class="input-field">
                <label for="harga"><h4>Harga Sewa</h4></label>
                <input value="<?php $data['harga_sewa']; ?>" id="harga_sewa" type="text" class="form-control" name="harga_sewa" required>
                <div class="invalid-feedback"></div>
                </div><br>

                <div class="input-field">
                <label for="gambar"><h4>Gambar</h4></label>
                <input value="<?php $data['gambar']; ?>" id="gambar" type="textarea" class="form-control" name="gambar"
                    required>
                <div class="invalid-feedback"></div>
                </div><br>

                <div class="btn-update">
                <button name='btn-update-mobil' type="submit"><h4>Update</h4></button>
                </div>
        </div>
    </div>
    </form>

        <?php
        }
        ?>

    <?php

    if (isset($_POST['btn-update-mobil'])) {
        $id = $_POST['id'];
        $mobil = $_POST['mobil'];
        $deskripsi = $_POST['deskripsi'];
        $tahun_rilis = $_POST['tahun_rilis'];
        $harga = $_POST['harga'];
        $harga_sewa = $_POST['harga_sewa'];
        $gambar = $_POST['gambar'];
        
        $query = "UPDATE mobil SET mobil= '$mobil', deskripsi= '$deskripsi', tahun_rilis= '$tahun_rilis', harga= '$harga', harga_sewa='$harga_sewa', gambar='$gambar' WHERE id= '$id' ";
        $result = mysqli_query($conn, $query);
        echo "<p class='alert alert-success text-center'>";
        echo "<b>Data berhasil di Update</b>";
        echo "</p>";
        $page = "show-mobil.php";
        $sec = "3";
        header("Refresh: $sec; url=$page");
    }

    ?>
</body>

</html>
