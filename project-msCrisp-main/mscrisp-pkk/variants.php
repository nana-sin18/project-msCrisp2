<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
            font-family: 'Poppins';
        }
        .populer {
            background-color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .populer h1 {
            margin-bottom: 30px;
        }
        .card-container {
            display: flex;
            justify-content: center; 
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 300px;
            text-align: center;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: 200px; /* Fixed height */
            object-fit: cover; /* Ensures image fits container */
            border-radius: 10px 10px 0 0; /* Rounded top corners */
        }
        .card h2 {
            color: #333;
            margin: 10px 0;
        }
        .card p {
            color: #666;
            margin: 0 0 10px;
        }
        .card h3 {
            color: #d9534f;
            margin: 0 0 10px;
        }
        .cta {
  border: none;
  background: none;
  cursor: pointer;
  padding-bottom: 20px;
  padding-left: 20px;
  
}

.cta span {
  padding-bottom: 7px;
  letter-spacing: 4px;
  font-size: 10px;
  padding-right: 3px;
  text-transform: uppercase;
}

.cta svg {
  transform: translateX(-8px);
  transition: all 0.3s ease;
}

.cta:hover svg {
  transform: translateX(0);
}

.cta:active svg {
  transform: scale(0.9);
}

.hover-underline-animation {
  position: relative;
  color: black;
  padding-bottom: 20px;
  font-size: 10px;
  
}

.hover-underline-animation:after {
  content: "";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #000000;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.cta:hover .hover-underline-animation:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}
    </style>
</head>
<body>
  <?php
  session_start();
  include ("koneksi.php");
  $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE jenis='satu potong'");
  ?>
    <section class="populer" id="populer">
        <h1><span style="color: #ff9d02;">One Piece</span> Variant</h1>
        <div class="card-container">
        <?php while($data = mysqli_fetch_array($query)) : ?>
    <div class="card">
        <img src="img/<?= $data['foto'] ?>" alt="Original Flavor">
        <h2><?= $data['nama'] ?></h2>
        <p style="color: #8E8E8E;"><?= $data['deskripsi'] ?></p>
        <h3><?= $data['harga'] ?></h3>
        <a href="keranjang.php" style="text-decoration: none;">
            <button class="cta">
                <span class="hover-underline-animation">Shop now</span>
                <svg
                  id="arrow-horizontal"
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="10"
                  viewBox="0 0 46 16"
                >
                  <path
                    id="Path_10"
                    data-name="Path 10"
                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                    transform="translate(30)"
                  ></path>
                </svg>
            </button>
        </a>
    </div>
<?php endwhile; ?>    
        </div>
    </section>
    <?php
  $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE jenis='satu ekor'");
  ?>
    <section class="populer" id="populer">
        <h1><span style="color: #ff9d02;">One Piece</span> Variant</h1>
        <div class="card-container">
        <?php while($data = mysqli_fetch_array($query)) : ?>
    <div class="card">
        <img src="img/<?= $data['foto'] ?>" alt="Original Flavor">
        <h2><?= $data['nama'] ?></h2>
        <p style="color: #8E8E8E;"><?= $data['deskripsi'] ?></p>
        <h3><?= $data['harga'] ?></h3>
        <a href="keranjang.php" style="text-decoration: none;">
            <button class="cta">
                <span class="hover-underline-animation">Shop now</span>
                <svg
                  id="arrow-horizontal"
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="10"
                  viewBox="0 0 46 16"
                >
                  <path
                    id="Path_10"
                    data-name="Path 10"
                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                    transform="translate(30)"
                  ></path>
                </svg>
            </button>
        </a>
    </div>
<?php endwhile; ?>    
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>