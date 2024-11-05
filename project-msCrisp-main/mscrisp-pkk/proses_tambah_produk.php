<?php
include("koneksi.php");

$nama = $_POST["nama_produk"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST["harga"];

$namafoto = $_FILES["foto_produk"]["name"];
$lokasifoto = $_FILES["foto_produk"]["tmp_name"];

$query = mysqli_query($koneksi, "insert into produk values(null, '$nama', '$namafoto', '$deskripsi', '$harga', 2)");

if ($query){
    move_uploaded_file($lokasifoto, "img/$namafoto");
    header("Location: halaman_admin.php");
}