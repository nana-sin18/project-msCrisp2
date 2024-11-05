<?php
session_start();

if($_SESSION['role'] != "admin"){
    echo "404 anda tidak berhak untuk masuk kehalaman ini";
    die();
}
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Style tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        td {
            color: #333;
        }

        /* Style foto */
        .product-img {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover;
        }

        /* Style untuk baris ganjil */
        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 0 10px;
            }

            th, td {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Daftar Produk</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Foto</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi, "select * from produk");
                while ($d = mysqli_fetch_array($data)){
                    ?>
                <tr>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['foto']; ?></td>
                    <td><?php echo $d['deskripsi']; ?></td>
                    <td><?php echo $d['harga']; ?></td>
                    
                </tr>
                
            </tbody>
            <?php
        }
        ?>
        </table>
        <br><br><br>
        <a href="tambah_produk.php" class="add-button">+ Tambah Variant</a>
    </div>  
</body>
</html>
