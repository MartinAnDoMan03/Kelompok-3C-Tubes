<?php
require "includes/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="update-user.css">
</head>

<body>

    <div class="row">

        <?php
        $id = $_POST['id'];
        $query = "SELECT * FROM user WHERE id = $id";
        $result = mysqli_query($conn, $query);
        foreach ($result as $data) {

            ?>

        </div>

        <form method="POST">
        <div class="box">
            <div class="container">
                <div class="top">
                    <br>
                    <header>Update User</header><br>
                </div>
                <div class="input-field">
                    <input type="text" hidden name="id" value="<?php echo $data['id']; ?>">
                    <label for="username">Username</label>
                    <input value="<?php $data['username']; ?>" id="username" type="text" class="form-control" name="username"
                    required autofocus>
                    <div class="invalid-feedback"></div>
                </div><br>

                <div class="input-field">
                <label for="password">Password</label>
                <input value="<?php $data['password']; ?>" id="password" type="password" class="form-control"
                    name="password" required data-eye>
                </div><br>

                <div class="input-field">
                <label for="nama">Nama</label>
                <input value="<?php $data['nama']; ?>" id="nama" type="text" class="form-control" name="nama"
                    required>
                <div class="invalid-feedback"></div>
                </div><br>

                <div class="input-field">
                <label for="email">Email</label>
                <input value="<?php $data['email']; ?>" id="email" type="email" class="form-control" name="email" required>
                <div class="invalid-feedback"></div>
                </div><br>

                <div class="btn-update">
                <button name='btn-update-user' type="submit"><h4>Update</h4></button>
                </div>

            </div><br>
        </div>
    </form>

        <?php
        }
        ?>

    <?php

    if (isset($_POST['btn-update-user'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        
        $query = "UPDATE user SET username= '$username', password= '$password', nama= '$nama', email= '$email' WHERE id= '$id' ";
        $result = mysqli_query($conn, $query);
        echo "<p class='alert alert-success text-center'>";
        echo "<b>Data berhasil di Update</b>";
        echo "</p>";
        $page = "show-user.php";
        $sec = "3";
        header("Refresh: $sec; url=$page");
    }
