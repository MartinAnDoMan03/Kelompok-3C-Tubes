<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>

    <!-- Navbar Atas -->
    <div class="topnav">
    <a href="logout.php" class="logout-btn" onclick="if (confirm('Apakah Anda yakin ingin keluar?')) {hapusData()} else {return false;}">Logout</a>
        

    </div>


    <!-- Sidebar -->
    <div class="sidenav">
        <a href="admin.php">Admin</a>
        <a href="homepage.php">Home</a>

    </div>

    <!-- Konten -->
    <div class="content">
        <!-- Card 1 -->
        <a href="show-mobil.php">
            <div class="card card1">
                <h3>SHOW CAR</h3>
                <p>Klik isini!</p>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="add-mobil.php">
            <div class="card card2">
                <h3>INSERT CARS</h3>
                <p>Klik isini!</p>
            </div>
        </a>

        <!-- Card 3 -->
        <a href="show-user.php">
            <div class="card card3">
                <h3>SHOW USER</h3>
                <p>Klik isini!</p>
            </div>
        </a>
    </div>

</body>

</html>