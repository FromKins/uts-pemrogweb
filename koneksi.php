<?php
session_start();

$servername = 'localhost';
$username = 'rikics';
$password = 'qwerty123';
$database = 'uts';

$koneksi = mysqli_connect($servername,  $username, $password, $database);

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>