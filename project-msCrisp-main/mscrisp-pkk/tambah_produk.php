<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Variant Baru</h2>
    <form action="proses_tambah_produk.php" method="POST" enctype="multipart/form-data">
        <label>Nama Variant:</label>
        <input type="text" name="nama_produk" required><br><br>

        <label>Deskripsi:</label>
        <textarea name="deskripsi" required></textarea><br><br>

        <label>Harga:</label>
        <input type="number" name="harga" required><br><br>

        <label>Foto Variant Produk:</label>
        <input type="file" name="foto_produk" required><br><br>

        <label>Jenis:</label>
        <input type="text" name="jenis" required><br><br>

        <button type="submit">Simpan Produk</button>
    </form>
</body>
</html>
