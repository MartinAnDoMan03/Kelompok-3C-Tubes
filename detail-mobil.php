<?php
require "includes/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Detail Page</title>
    <link rel="stylesheet" href="detail-mobil.css">
</head>

<body>
<nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.html">Mobisync</a>
            </div>
            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="logout.php">logout</a></li>
                <li>
                    <?php
                    $username = $_SESSION['username'];
                    echo '<a href="detail-user.php?id=' . $_SESSION['id'] . '">' . $username . '</a>';
                    ?>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM mobil WHERE id = $id";
    $result = mysqli_query($conn, $query);
    foreach ($result as $data) {
        ?>
    <main class="car-details">
        <div class="detail-box">
            <div class="car-image">
            <?php echo '<img src="' . $data['gambar'] . '" alt="Gambar">'; ?>
            </div>
            <div class="car-info">
                <h1 class="car-name"><?php echo "$data[mobil]" ?></h1>
                <p class="car-description"><?php echo "$data[deskripsi]"?></p>
                <div class="car-specs">
                    <p><strong>Tahun Rilis :</strong> <?php echo "$data[tahun_rilis]" ?></p>
                    <p><strong>Harga :</strong><?php echo "$data[harga]" ?></p>
                    <p><strong>Harga Sewa :</strong><?php echo "$data[harga_sewa]" ?></p>
                </div>
                <div class="btn-container">
                <a href="struk-beli.php?id=<?php echo $data['id']; ?>"><button class="beli-btn">Beli</button></a><br>
                <a href="struk-sewa.php?id=<?php echo $data['id']; ?>"><button class="sewa-btn">Sewa</button></a>
                </div>
            </div>
        </div>
    </main>
    <?php
    }
    ?>

    <footer>
        <p>&copy; 2023 Mobisync. All Rights Reserved.</p>
    </footer>
</body>

</html>
