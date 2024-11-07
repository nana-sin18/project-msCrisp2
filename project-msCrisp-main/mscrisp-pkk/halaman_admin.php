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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F5F5DC;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
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
            font-size: 24px;
        }

        /* Style tabel */
        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            font-size: 16px;
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

        /* Style tombol aksi */
        .btne, .btnh {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .btne a, .btnh a {
            text-decoration: none;
            color: #333;
        }

        .btne {
            background-color: #FFD700;
            margin-right: 5px;
        }

        .btnh {
            background-color: #FF6347;
            color: white;
        }

        .btne:hover {
            background-color: #FFC107;
        }

        .btnh:hover {
            background-color: #FF4500;
        }

        /* Style tombol tambah produk */
        .add-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            text-align: center;
            color: white;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
        }

        .add-button:hover {
            background-color: #45a049;
        }

        /* Responsif */
        @media (max-width: 768px) {
            th, td {
                padding: 8px;
                font-size: 14px;
            }

            .container {
                width: 100%;
                padding: 0 10px;
            }

            .add-button {
                width: 100%;
                box-sizing: border-box;
            }
        }

        @media (max-width: 480px) {
            th, td {
                font-size: 12px;
                padding: 6px;
            }

            h1 {
                font-size: 20px;
            }

            /* Ubah layout tombol aksi */
            .btne, .btnh {
                padding: 6px;
                font-size: 12px;
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
                    <th>Jenis</th>
                    <th>Aksi</th>
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
                    <td><img src="img/<?php echo $d['foto']; ?>" class="product-img"></td>
                    <td><?php echo $d['deskripsi']; ?></td>
                    <td><?php echo $d['harga']; ?></td>
                    <td><?php echo $d['jenis']; ?></td>   
                    <td>
                        <button class="btne"><a href="edit.php?id=<?php echo $d['id_produk']; ?>">Edit</a></button>
                        <button class="btnh"><a href="hapus.php?id=<?php echo $d['id_produk']; ?>">Hapus</a></button>
                    </td>      
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="tambah_produk.php" class="add-button">+ Tambah Variant</a>
    </div>  
</body>
</html>
