<?php

if(!isset($_SESSION)){
    session_start();
}

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'cars';

$conn = mysqli_connect($host, $user, $pass, $database);