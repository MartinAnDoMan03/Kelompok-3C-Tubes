<?php
require "includes/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dashboard</title>
    <link rel="stylesheet" href="show-mobil.css">
    <style>
        /* Tambahkan gaya CSS tambahan sesuai kebutuhan */
    </style>
</head>

<body>

    <!-- Navbar Atas -->
    <div class="topnav">
        <a href="#">Logout</a>
    </div>

    <!-- Sidebar -->
    <div class="sidenav">
        <a href="admin.php">Admin</a>
        <a href="homepage.php">Home</a>
    </div>

    <!-- Konten -->
    <div class="content">
        <?php
        $query = "SELECT * FROM mobil";
        $result = mysqli_query($conn, $query);
        ?>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Mobil</th>
                    <th>Deskripsi</th>
                    <th>Tahun Rilis</th>
                    <th>Harga</th>
                    <th>Harga Sewa</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $data) {
                    echo "<tr>";
                    echo "<td> $data[mobil]</td>";
                    $deskripsi = $data['deskripsi'];
                    if (strlen($deskripsi) > 200) {
                        $deskripsi_ringkas = substr($deskripsi, 0, 200);
                        echo "<td> $deskripsi_ringkas...</td>";
                    } else {
                        echo "<td> $deskripsi </td>";
                    }

                    echo "<td> $data[tahun_rilis]</td>";
                    echo "<td> $data[harga]</td>";
                    echo "<td> $data[harga_sewa]</td>";
                    echo '<td><img src="' . $data['gambar'] . '" alt="Gambar" style="height: 100px; width: 100px;"></td>';

                    // tombol hapus dan update
                    echo "<td>";
                    echo "<form method='POST'>";
                    echo "<input type='text' name='id' value='$data[id]' hidden>";
                    echo "<button type='submit' class='btn btn-danger' name='delete' onclick=\"if (confirm('Apakah Anda yakin menghapus data ini?')) {hapusData()} else {return false;}\">Hapus</button>";

                    echo "</form>";

                    echo "<form method='POST' action='update-mobil.php'>";
                    echo "<input type='text' name='id' value='$data[id]' hidden>";
                    echo "<button type='submit' class='btn btn-success' name='update'> Update</button>";
                    echo "</form>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    // action menghapus data
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        if ($conn) {
            $query = "DELETE FROM mobil WHERE id = $id";
            mysqli_query($conn, $query);
            echo "<p class='alert alert-success'></p>";
            echo "<b> data berhasil dihapus </b>";
        }
    }
    ?>

    <!-- Tombol hapus -->
<td>
    <form method='POST'>
        <input type='text' name='id' value='$data[id]' hidden>
        <button type='submit' class='btn btn-danger' name='delete'> Hapus </button>
    </form>
</td>

<!-- Tombol update -->
<td>
    <form method='POST' action='update-mobil.php'>
        <input type='text' name='id' value='$data[id]' hidden>
        <button type='submit' class='btn btn-success' name='update'> Update</button>
    </form>
</td>

</body>

</html>