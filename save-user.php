<?php
require "includes/connection.php";

if(isset($_POST['btn-daftar'])){
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$email = $_POST['email'];
if($password == "admin123"){
    $peran = "admin";
}
else{
    $peran = "user";
}

$check_query = "SELECT * FROM User WHERE email = '$email'";
$hasil = $conn->query($check_query);

if ($hasil ->num_rows > 0){
    echo "Email telah digunakan, silahkan gunakan email lain";
}
else{
    
$sql = "INSERT INTO user(username, password, nama, email, peran)
VALUES ('$username', '$password', '$nama', '$email', '$peran')";
if ($conn->query($sql) == TRUE) {
    echo "<h2>Data has been saved successfuly</h2>";
    header("location: Login.php");
} else {
    echo "<h2>Saving data failed<h2>";
}

}

}
?>