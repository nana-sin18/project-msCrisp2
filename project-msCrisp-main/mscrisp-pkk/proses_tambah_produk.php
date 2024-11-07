<?php
include("koneksi.php");

$nama = $_POST["nama_produk"];
$deskripsi = $_POST["deskripsi"];
$harga = $_POST["harga"];
$jenis = $_POST["jenis"];

$namafoto = $_FILES["foto_produk"]["name"];
$lokasifoto = $_FILES["foto_produk"]["tmp_name"];

// Hapus kolom 'id' dari query
$query = mysqli_query($koneksi, "INSERT INTO produk (nama, foto, deskripsi, harga, jenis) VALUES ('$nama', '$namafoto', '$deskripsi', '$harga', '$jenis')");

if ($query) {
    move_uploaded_file($lokasifoto, "img/$namafoto");
    header("Location: halaman_admin.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
