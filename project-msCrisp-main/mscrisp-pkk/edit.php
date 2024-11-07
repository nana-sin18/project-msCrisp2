<?php
session_start();
if($_SESSION['role'] != "admin"){
    echo "404 anda tidak berhak untuk masuk kehalaman ini";
    die();
}

include 'koneksi.php';

// Ambil ID produk dari URL
$id_produk = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '$id_produk'");
$d = mysqli_fetch_array($query);

if (!$d) {
    echo "Produk tidak ditemukan!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_produk" value="<?php echo $d['id_produk']; ?>">
        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" value="<?php echo $d['nama']; ?>"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"><?php echo $d['deskripsi']; ?></textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="<?php echo $d['harga']; ?>"><br><br>

        <label>Jenis:</label><br>
        <select name="jenis">
            <option value="satu potong" <?php echo $d['jenis'] == 'satu potong' ? 'selected' : ''; ?>>Satu Potong</option>
            <option value="satu ekor" <?php echo $d['jenis'] == 'satu ekor' ? 'selected' : ''; ?>>Satu Ekor</option>
        </select><br><br>

        <label>Foto Produk (kosongkan jika tidak ingin mengubah):</label><br>
        <input type="file" name="foto_produk"><br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
