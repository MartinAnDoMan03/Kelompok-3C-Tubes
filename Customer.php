<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Detail Page</title>
    <link rel="stylesheet" href="Customer.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.html">Mobisync</a>
            </div>
            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="logout.php"onclick="if (confirm('Apakah Anda yakin ingin keluar?')) {hapusData()} else {return false;}">logout</a></li>
                <li>
                    <?php
                    session_start();
                    $username = $_SESSION['username'];
                    echo '<a href="detail-user.php?id=' . $_SESSION['id'] . '">' . $username . '</a>';
                    ?>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    require "includes/connection.php";
    $query = "SELECT * FROM mobil";
    $result = mysqli_query($conn, $query);
    foreach ($result as $data) {
        ?>


        <a href="detail-mobil.php?id=<?php echo $data['id']; ?>" class="car-link">
            <div class="car-detail">
                <div class="car-image">
                    <?php echo '<img src="' . $data['gambar'] . '" alt="Gambar">'; ?>
                </div>
                <div class="car-info">
                    <h1 class="car-name">
                        <?php echo "$data[mobil]" ?>
                    </h1>
                    <p class="car-description">
                        <?php
                        $deskripsi = $data['deskripsi'];
                        if (strlen($deskripsi) > 200) {
                            $deskripsi_ringkas = substr($deskripsi, 0, 200);
                            echo "$deskripsi_ringkas...";
                        } else {
                            echo "$deskripsi";
                        } ?>
                    </p>
                    <div class="car-specs">
                        <p><strong>Tahun Rilis:</strong>
                            <?php echo "$data[tahun_rilis]" ?>
                        </p>
                        <p><strong>Harga:</strong>
                            <?php echo "$data[harga]" ?>
                        </p>
                        <p><strong>Harga Sewa:</strong><?php echo "$data[harga_sewa]" ?></p>
                    </div>
                </div>
            </div>
        </a>
        <?php
    }
    ?>
</body>

</html>