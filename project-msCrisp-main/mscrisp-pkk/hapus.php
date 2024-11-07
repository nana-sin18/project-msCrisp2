<?php
include 'koneksi.php';

$id_produk = $_GET['id'];

// Hapus produk berdasarkan ID
$query = "DELETE FROM produk WHERE id_produk='$id_produk'";
if (mysqli_query($koneksi, $query)) {
    header("Location: halaman_admin.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
