<?php
include 'koneksi.php';

$id_produk = $_POST['id_produk'];
$nama = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$jenis = $_POST['jenis'];

$namafoto = $_FILES['foto_produk']['name'];
$lokasifoto = $_FILES['foto_produk']['tmp_name'];

if ($namafoto) {
    move_uploaded_file($lokasifoto, "img/$namafoto");
    $query = "UPDATE produk SET nama='$nama', foto='$namafoto', deskripsi='$deskripsi', harga='$harga', jenis='$jenis' WHERE id_produk='$id_produk'";
} else {
    $query = "UPDATE produk SET nama='$nama', deskripsi='$deskripsi', harga='$harga', jenis='$jenis' WHERE id_produk='$id_produk'";
}

if (mysqli_query($koneksi, $query)) {
    header("Location: halaman_admin.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
