<?php
require "includes/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="detail-user.css">
</head>

<body>

    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($conn, $query);
    foreach ($result as $data) {
        ?>
        <div class="user-profile">
            <h1>User Profile</h1>
            <div class="profile-info">
                <div class="profile-item">
                    <label for="username">Username:</label>
                    <span name="username">
                        <?php echo "$data[username]" ?>
                    </span>
                </div>
                <div class="profile-item">
                    <label for="password">Password:</label>
                    <span name="username">
                        <?php echo "$data[password]" ?>
                    </span>
                </div>
                <div class="profile-item">
                    <label for="nama">Nama:</label>
                    <span name="nama">
                        <?php echo "$data[nama]" ?>
                    </span>
                </div>
                <div class="profile-item">
                    <label for="email">Email:</label>
                    <span name="email">
                        <?php echo "$data[email]" ?>
                    </span>
                </div>
                <div class="profile-item">
                    <label for="peran">Peran:</label>
                    <span name="peran">
                        <?php echo "$data[peran]" ?>
                    </span>
                </div>
                
                <div class="btn-container">
                <a href="update-user-user.php"><button class="update-btn">Update</button></a><br>
                <a href="logout.php"><button class="logout-btn">Logout</button></a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</body>

</html>