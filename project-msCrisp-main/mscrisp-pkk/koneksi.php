<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ms_crisp_pkk";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}