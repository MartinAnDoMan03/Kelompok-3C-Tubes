<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
</head>

<body>
    <form method="POST">
        <div class="box">
            <div class="container">
                <div class="top">
                    <br>
                    <header>Log In</header><br>
                </div>
                <div class="input-field">
                    <input type="text" class="input" placeholder="E-mail" name="email" required>
                </div><br>
                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" name="password" required>
                    <i class='bx bx-lock-alt'></i>
                </div><br>
                <button type="submit" name="btnlogin" class="button">Log in</button><br>
                <div class="two-col">
                </div>
            </div>
    </form>
    
    <?php
    session_start();
    
    require "includes/connection.php";
    
    if (isset($_POST['btnlogin'])) {
        $user_login = $_POST['email'];
        $user_pass = $_POST['password'];
    
        $query = "SELECT * FROM user WHERE email= '$user_login' AND password = '$user_pass'";
        $result = mysqli_query($conn, $query);
    
        if (!$result) {
            die("Query Gagal: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $user_id = $row['id'];
                $user = $row['username'];
                $pass = $row['password'];
                $nama = $row['nama'];
                $email = $row['email'];
                $peran = $row['peran'];
            }
    

            if ($user_login == $email && $user_pass == $pass && $peran == "user") {
                $_SESSION['id'] = $user_id;
                $_SESSION['username'] = $user;
                $_SESSION['nama'] = $nama;
                $_SESSION['email'] = $email;
                header("location: homepage.php");
                exit(); 
            } else if ($user_login == $email && $user_pass == $pass && $peran == "admin") {
                $_SESSION['id'] = $user_id;
                $_SESSION['username'] = $user;
                $_SESSION['nama'] = $nama;
                $_SESSION['email'] = $email;
                header("location: admin.php");
                exit(); 
            }
        } else {
            echo "<script>alert('Login gagal, data tidak ditemukan');</script>";
            header("login.php");
        }
    }
    ?>
    
</body>

</html>