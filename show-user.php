<?php
require "includes/connection.php"
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="show-user.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

<?php
require "includes/connection.php"
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="show-mobil.css">
</head>

<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>

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
        $query = "SELECT * FROM user";
        $result = mysqli_query($conn, $query);
        echo "<table class = 'table table-bordered'>";
        echo "<tr>";
        echo "<th>Username</th>";
        echo "<th>Password</th>";
        echo "<th>Nama</th>";
        echo "<th>E-mail</th>";
        echo "<th>Peran</th>";
        echo "<th colspan = '2'>Action</th>";

        foreach ($result as $data) {
            echo "<tr>";
            echo "<td> $data[username]</td>";
            echo "<td> $data[password]</td>";
            echo "<td> $data[nama]</td>";
            echo "<td> $data[email]</td>";
            echo "<td> $data[peran]</td>";

            //tombol hapus
            echo "<td>";
            echo "<form method = 'POST'>";
            echo "<input type = 'text' name = 'id' value = '$data[id]' hidden>";
            echo "<button type='submit' class='btn btn-danger' name='delete' onclick=\"if (confirm('Apakah Anda yakin menghapus data ini?')) {hapusData()} else {return false;}\">Hapus</button>";
            echo "</form>";
            echo "</td>";

            //tombol update
            echo "<td>";
            echo "<form method = 'POST' action='update-user.php'>";
            echo "<input type = 'text' name = 'id' value = '$data[id]' hidden>";
            echo "<button type = 'submit' class = 'btn btn-success' name = 'update'> Update</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }

        ?>
    </div>

    <?php
    //action menghapus data
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        if ($conn) {
            $query = "DELETE FROM user WHERE id = $id";
            mysqli_query($conn, $query);
            header("location: show-user.php");
        }
    }
    ?>
</body>

</html>