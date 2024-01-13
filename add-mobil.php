<?php
require "includes/connection.php";
?>

<?php
if (isset($_POST['btn-add-car'])) {
    $mobil = $_POST['mobil'];
    $deskripsi = $_POST['deskripsi'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $harga = $_POST['harga'];
    $harga_sewa = $_POST['harga_sewa'];
    $gambar = $_POST['gambar'];

    $check_query = "SELECT * FROM mobil WHERE mobil = '$mobil'";
    $result = $conn->query($check_query);

    if($result->num_rows > 0){
        echo "Mobil sudah tersedia, silahkan masukkan mobil lainnya";
    }
    else{

        $query = "INSERT INTO mobil(mobil, deskripsi, tahun_rilis, harga, harga_sewa, gambar)
        VALUES ('$mobil', '$deskripsi', '$tahun_rilis', '$harga', '$harga_sewa', '$gambar')";

        if($conn->query($query) == TRUE)
        {
            echo "Data Mobil berhasil di Simpan";
        } else{
            echo "Data mobil gagal disimpan, Pesan gagal: " . $query . "</br>.$connection->ERROR";
        }
        
    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mobil</title>
    <link rel="stylesheet" href="add-mobil.css">
</head>
<body>
    <Form method="POST" name="isi-mobil">
       <div class="box">
            <div class="container">
            <div class="top">
                    <br>
                    <header>Tambah Mobil</header><br>
                </div>
                <div class="input-field">
                    <label for="mobil">Mobil</label><br>
                    <input type="text" name="mobil" class="form-control"><br>
                </div>
                <div class="input-field">
                    <label for="deskripsi">Deskripsi Mobil</label><br>
                    <input type="text" name="deskripsi" class="form-control"> <br>
                </div>

                <div class="input-field">
                    <label for="tahun_rilis">Tahun Rilis</label> <br>
                    <input type="text" name="tahun_rilis"class="form-control"> <br>
                </div>

                <div class="input-field">
                    <label for="harga">Harga</label> <br>
                    <input type="text" name="harga" class="form-control"> <br>
                </div>
                <div class="input-field">
                    <label for="harga_sewa">Harga Sewa</label> <br>
                    <input type="text" name="harga_sewa" class="form-control"> <br>
                </div>
                <div class="input-field">
                    <label for="gambar">Adress Gambar</label> <br>
                    <input type="text-area" name="gambar"class="form-control"><br>
                </div>
                <div class="btn-add">
                    <button name='btn-add-car' type="submit"><h4>Daftarkan Mobil</h4></button>
                </div>
            </div>
        </div>
    </Form>
</body>
</html>