<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>MS Crisp - Fried Chicken</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5F5DC; /* Soft beige */
            color: #333;
            overflow-x: hidden;
        }
        .logo {
            width: 100px;
            height: auto;
            margin-right: 20px;
            filter: grayscale(1);
        }
        .logo:hover{
            filter: grayscale(0);
        }
        header {
            background-color: #ff9d02; /* Light peach */
            padding: 10px 20px;
            display: flex;
            align-items: center;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }
        nav {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
        }
        nav ul {
            list-style-type: none;
            display: flex;
            margin: 0;
            padding: 0;
            flex-wrap: wrap;
        }
        nav ul li {
            margin-right: 15px;
        }
        .nav-item a {
            text-decoration: none;
            color: #232323;
            font-weight: bold;
            padding: 8px 12px;
            transition: color 0.3s;
        }
        .nav-item a:hover {
            color: wheat;
        }
        .navbar-toggler {
            border: none; /* Menghilangkan border tombol */
        }

        .navbar-toggler:focus {
            outline: none; /* Menghilangkan outline saat tombol di-klik */
        }

        .navbar-toggler .navbar-toggler-icon {
            background-color: transparent; /* Menghilangkan background default */
        }

        .navbar-toggler .navbar-toggler-icon::before,
        .navbar-toggler .navbar-toggler-icon::after {
            background-color: #000; /* Warna hitam untuk ikon */
            transition: background-color 0.3s; /* Animasi saat di-hover atau di-click */
        }

        .navbar-toggler.collapsed .navbar-toggler-icon::before,
        .navbar-toggler.collapsed .navbar-toggler-icon::after {
            background-color: #000; /* Pastikan ikon tetap hitam saat collapsed */
        }

        .navbar-toggler:not(.collapsed) .navbar-toggler-icon::before,
        .navbar-toggler:not(.collapsed) .navbar-toggler-icon::after {
            background-color: #000; /* Warna ikon saat tombol tidak collapsed */
        }
        .main-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 100px 20px 40px; 
            background-color: #fff;
            margin-top: 0; 
            flex-wrap: wrap;
        }
        .intro-text {
            max-width: 50%;
        }
        .intro-text h1 {
            font-size: 2.5rem;
            color: #232323;
            margin-top: 50px;
        }
        .intro-text p {
            font-size: 1.1rem;
            margin: 20px 0;
            color: #8E8E8E;
        }
        .cta-button {
            background-color: #ff9d02;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 157, 2, 0.5);
        }
        .cta-button:hover {
            box-shadow: 0 6px 12px rgba(255, 157, 2, 0.7);
            color: white;
        }
        .fried-chicken-image {
            flex-basis: 40%;
            margin-left: 20px;
            margin-top: 70px;
        }
        .fried-chicken-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        footer {
            background-color: #D3D3D3;
            text-align: center;
            padding: 20px;
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
        /* From Uiverse.io by alexmaracinaru */ 
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

        .about-content {
            display: flex;
            align-items: center;
            justify-content: space-between; 
            padding: 20px;
        }
        .about-image {
            flex-basis: 40%; 
            margin-right: 20px; 
        }
        .about-image img {
            max-width: 100%; 
            border-radius: 10px;
        }
        .about-text {
            flex-basis: 60%; 
        }
        .about-text h1 {
            margin-bottom: 20px;
        }

        /* costumers */

        .testimoni{
            background-color: #F5F5DC;
        }
        .var {
            display: flex;
            justify-content: center;
            gap: 30px; /* Memberi jarak antar card */
            flex-wrap: wrap; /* Membuat card tetap responsif */
        }

        .cardtes {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 385px;
            width: 225px;
            background-color: white;
            border-radius: 10px;
            box-shadow: -1rem 0 3rem #00000044;
            transition: 0.4s ease-out;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        .cardtes:hover {
            transform: translateY(-20px);
            text-shadow: 2px 2px 8px #ff9d02;
        }

        .titletes-1 {
            color: #181C14;
            font-size: 20px;
            font-weight: 800;
        }

        .btn {
            margin-top: auto;
            border-radius: 8px;
            background-color: #181C14;
            color: #FCF8F3;
            font-weight: 900;
            transition: 0.4s ease-out;
        }

        .btn:hover {
            font-weight: 900;
            background-color: rgb(243, 168, 28);
            box-shadow: 0px 0px 20px rgba(35, 35, 36, 0.5),
                0px 5px 5px -1px rgba(27, 27, 27, 0.25),
                inset 4px 4px 8px rgba(41, 40, 41, 0.5),
                inset -4px -4px 8px rgba(25, 25, 26, 0.35);
        }

        .bar {
            margin-top: 20px;
            height: 5px;
            width: 100%;
        }

        .emptybar {
            background-color: #201c29;
            width: 100%;
            height: 100%;
        }

        .filledbar {
            width: 0px;
            height: 100%;
            background: linear-gradient(90deg, #F5F5DC, rgba(124, 2, 2, 0.61) 100%);
            transition: 0.6s ease-out;
        }

        .cardtes:hover .filledbar {
            width: 100%;
        }

        .contenttes {
            font-size: 0.9rem;
            color: #8E8E8E;
        }

        .rating {
  display: flex;
  flex-direction: row-reverse;
  gap: 0.3rem;
  --stroke: black;
  --fill: #f11e1e;
  justify-content: center;
}

.rating input {
  appearance: unset;
}

.rating label {
  cursor: pointer;
}

.rating svg {
  width: 1rem;
  height: 1rem;
  overflow: visible;
  fill: transparent;
  stroke: var(--stroke);
  stroke-linejoin: bevel;
  stroke-dasharray: 12;
  animation: idle 4s linear infinite;
  transition: stroke 0.2s, fill 0.5s;
}

@keyframes idle {
  from {
    stroke-dashoffset: 24;
  }
}

.rating label:hover svg {
  stroke: var(--fill);
}

.rating input:checked ~ label svg {
  transition: 0s;
  animation: idle 4s linear infinite, yippee 0.75s backwards;
  fill: var(--fill);
  stroke: var(--fill);
  stroke-opacity: 0;
  stroke-dasharray: 0;
  stroke-linejoin: miter;
  stroke-width: 8px;
}

@keyframes yippee {
  0% {
    transform: scale(1);
    fill: var(--fill);
    fill-opacity: 0;
    stroke-opacity: 1;
    stroke: var(--stroke);
    stroke-dasharray: 10;
    stroke-width: 1px;
    stroke-linejoin: bevel;
  }

  30% {
    transform: scale(0);
    fill: var(--fill);
    fill-opacity: 0;
    stroke-opacity: 1;
    stroke: var(--stroke);
    stroke-dasharray: 10;
    stroke-width: 1px;
    stroke-linejoin: bevel;
  }

  30.1% {
    stroke: var(--fill);
    stroke-dasharray: 0;
    stroke-linejoin: miter;
    stroke-width: 8px;
  }

  60% {
    transform: scale(1.2);
    fill: var(--fill);
  }
}

/* akhiran */

.social-icons {
            list-style: none;
            display: flex;
            gap: 10px;
            padding-left: 0;
        }

        .social-icons li {
            background-color: #ff9d02;
            margin-top: 20px;
            margin-left: 10px;
            padding: 10px;
            border-radius: 50%;
            color: #fff;
            text-align: center;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-icons a {
            color: #fff;
            text-decoration: none;
        }

        .feedback-container {
    background-color: rgba(255, 255, 255, 0.493);
    padding: 20px;
    border-radius: 15px;
    border: 1px solid #4a5568;
    color: #fff;
    height: auto; /* Memastikan tinggi otomatis */
    margin-left: 20px; /* Tambahkan spasi kiri */
}

.feedback-container h1 {
    font-size: 20px; /* Ukuran font judul feedback */
}

.feedback-container textarea {
    width: 100%;
    height: 100px;
    background-color: #f5f5dcc5;
    color: #8E8E8E;
    border: 1px solid #201c29;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 10px;
    outline: none;
}

.buttons {
    display: flex;
    justify-content: space-between;
}

.send-btn, .emoji-btn {
    background-color: #F5F5DC;
    border: 1px solid #201c29;
    color: #8E8E8E;
    border-radius: 10px;
    padding: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.send-btn:hover, .emoji-btn:hover {
    background-color: white;
    color: #232323;
    border-color: #ff9d02;
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .feedback-container {
        margin-left: 0; 
        margin-top: 20px; 
    }
}
.logout {
    color: #000000;
    text-decoration: none;
}
.logout a:hover{
    color: #4a5568;
    text-decoration: line-through;
}

    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <img src="img/logo.png" alt="MS Crisp Logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="variants.php">Variants</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimoni">Testimonial</a></li>
                    <li><a class="logout" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    

    <section class="main-section" id="home">
        <div class="intro-text">
            <h1>Selamat datang di <span style="color: #ff9d02;">MS Crisp</span></h1>
            <p>Nikmati fried chicken kami yang renyah dan lezat dengan tiga rasa yang luar biasa: Original, Spicy, dan BBQ.</p>
            <a href="variants.php" class="cta-button">All Variants</a>
        </div>
        <div class="fried-chicken-image">
            <img src="img/ayam.png" alt="Fried Chicken Image">
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-content">
            <div class="about-image">
                <img src="img/aboutt.png" alt="About MS Crisp">
            </div>
            <div class="about-text">
                <h1>About <span style="color: #ff9d02;">Us</span></h1>
                <p style="color: #8E8E8E;font-size: 0.5 em;">Selamat datang di MS Crisp! Kami adalah penyedia fried chicken yang menyajikan kelezatan dengan cara yang sederhana. Di MS Crisp, kami percaya bahwa cita rasa yang luar biasa tidak harus rumit. Kami menggunakan bahan-bahan segar dan tersedia untuk menciptakan fried chicken yang renyah dan lezat. Kami menawarkan tiga varian rasa: Original, Spicy, dan BBQ, sempurna untuk dinikmati kapan saja. Dengan resep sederhana dan fokus pada kualitas, kami berusaha memberikan pengalaman fried chicken terbaik untuk Anda!</p>
            </div>
        </div>
    </section>

    <section class="populer">
        <h1>Most <span style="color: #ff9d02;">Popular</span></h1>
        <div class="card-container">
            <div class="card">
                <img src="img/original.jpeg" alt="Original Flavor">
                <h2>Original</h2>
                <p style="color: #8E8E8E;">Nikmati kelezatan klasik dari MS Crisp Original! Setiap gigitan ayam yang crispy di luar dan juicy di dalam, diproses dengan bumbu spesial yang kaya rasa, sempurna untuk pecinta fried chicken sejati.</p>
                <h3>IDR 15,000</h3>
                <a href="keranjang.php" style="text-decoration: none;">
                
<button class="cta">
  <span class="hover-underline-animation"> Shop now </span>
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
            
            <div class="card">
                <img src="img/spicyy.jpeg" alt="Original Flavor">
                <h2>Spicy</h2>
                <p style="color: #8E8E8E;">Berani coba sensasi pedas dari MS Crisp Spicy? Ayam crispy dengan bumbu pedas yang menggigit, cocok untuk kamu yang suka rasa berani dan penuh tantangan di setiap gigitan.</p>
                <h3>IDR 15,000</h3>
                <a href="keranjang.php" style="text-decoration: none;">
              
<button class="cta">
  <span class="hover-underline-animation"> Shop now </span>
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
            
            <div class="card">
                <img src="img/bbqqq.jpeg" alt="Original Flavor">
                <h2>BBQ</h2>
                <p style="color: #8E8E8E;">Cita rasa BBQ yang smoky dan manis hadir dalam MS Crisp BBQ! Ayam crispy yang dilapisi bumbu khas BBQ untuk kamu yang mencari kelezatan unik dengan rasa yang menggugah selera.</p>
                <h3>IDR 15,000</h3>
                <a href="keranjang.php" style="text-decoration: none;">
                
<button class="cta">
  <span class="hover-underline-animation"> Shop now </span>
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
            
        </div>
    </section>

    <section class="testimoni">
        <center id="testimoni"><h1>Costumers <span style="color: #ff9d02;">Say</span></h1></center>
        <div class="var">
            <div class="cardtes">
                <div class="contenttes">
                    "Saya sangat suka MS Crisp Original! Teksturnya benar-benar renyah, dan setiap gigitan terasa begitu nikmat. Ayamnya cocok dinikmati kapan saja, baik saat makan siang atau saat santai bersama keluarga."
                </div>
                <!-- Rating Bintang untuk Card 1 -->
                <div class="rating">
                    <input type="radio" id="card1-star-1" name="card1-star-radio" value="1">
                    <label for="card1-star-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card1-star-2" name="card1-star-radio" value="2">
                    <label for="card1-star-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card1-star-3" name="card1-star-radio" value="3">
                    <label for="card1-star-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card1-star-4" name="card1-star-radio" value="4">
                    <label for="card1-star-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card1-star-5" name="card1-star-radio" value="5">
                    <label for="card1-star-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                </div>
                <div class="titletes-1">Orang 1</div>
                <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="cardtes">
                <div class="contenttes">
                    "Saya sangat merekomendasikan MS Crisp Spicy! Rasa pedasnya mantap, cocok untuk yang suka tantangan. Porsi satu ekornya pas untuk dinikmati bersama teman-teman!"
                </div>
                <!-- Rating Bintang untuk Card 2 -->
                <div class="rating">
                    <input type="radio" id="card2-star-1" name="card2-star-radio" value="1">
                    <label for="card2-star-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card2-star-2" name="card2-star-radio" value="2">
                    <label for="card2-star-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card2-star-3" name="card2-star-radio" value="3">
                    <label for="card2-star-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card2-star-4" name="card2-star-radio" value="4">
                    <label for="card2-star-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card2-star-5" name="card2-star-radio" value="5">
                    <label for="card2-star-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                </div>
                <div class="titletes-1">Orang 2</div>
                <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="cardtes">
                <div class="contenttes">
                    "MS Crisp BBQ adalah favorit saya! Porsi satu potong cukup memuaskan, dan saus BBQ-nya bikin setiap gigitan semakin lezat. Jangan lupa promo 10% untuk pembelian semua varian!"
                </div>
                <!-- Rating Bintang untuk Card 3 -->
                <div class="rating">
                    <input type="radio" id="card3-star-1" name="card3-star-radio" value="1">
                    <label for="card3-star-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card3-star-2" name="card3-star-radio" value="2">
                    <label for="card3-star-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card3-star-3" name="card3-star-radio" value="3">
                    <label for="card3-star-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card3-star-4" name="card3-star-radio" value="4">
                    <label for="card3-star-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                    <input type="radio" id="card3-star-5" name="card3-star-radio" value="5">
                    <label for="card3-star-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                    </label>
                </div>
                <div class="titletes-1">Orang 3</div>
                <div class="bar">
                    <div class="emptybar"></div>
                    <div class="filledbar"></div>
                </div>
            </div>
        </div>
        </section>

        <section class="akhir" style="background-color: white;">
            <div class="row" style="margin-top: 50px;" id="contact">
                <div class="col-lg-3 col-md-6 footer-section">
                    <h4 style="margin-top: 20px;margin-left: 10px;">Follow <span style="color: #ff9d02;">Us</span></h4>
                    <ul class="social-icons">
                        <li><a href="#"><i class="bi bi-github"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-tiktok"></i></i></a></li>
                    </ul>
                </div>
        
                <div class="col-lg-3 col-md-6 footer-section">
                    <h4 style="margin-top: 20px;">Contact <span style="color: #ff9d02;">Us</span></h4>
                    <p style="margin-top: 20px;">Jl. Opal Timur VII Blok B 14 No. 4 Regency,<br> Desa Cikampek Utara, Kecamatan Kotabaru,<br>Kabupaten Karawang, Provinsi Jawa Barat.</p>
                    <p>+62 822-4965-6900</p>
                    <p> mscrisp@gmail.com</p>
                </div>
        
                <div class="col-lg-3 col-md-6 feedback-container" style="margin-top: 20px;"> 
                    <h1 style="color: #8E8E8E;">Send Feedback</h1>
                    <textarea id="feedback" placeholder="Kirim masukan Anda..."></textarea>
                    <div class="buttons">
                        <button class="send-btn" onclick="sendFeedback()">Send</button>
                        <button class="emoji-btn" onclick="showSmileEmojiAlert()">
                            <svg viewBox="0 0 512 512" height="20px" xmlns="http://www.w3.org/2000/svg">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                            </svg>
                        </button>
                        <button class="emoji-btn" onclick="showSadEmojiAlert()">
                            <svg viewBox="0 0 512 512" height="20px" xmlns="http://www.w3.org/2000/svg">
                                <path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM174.6 384.1c-4.5 12.5-18.2 18.9-30.7 14.4s-18.9-18.2-14.4-30.7C146.9 319.4 198.9 288 256 288s109.1 31.4 126.6 79.9c4.5 12.5-2 26.2-14.4 30.7s-26.2-2-30.7-14.4C328.2 358.5 297.2 336 256 336s-72.2 22.5-81.4 48.1zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <center><h3 style="margin-top: 50px;">Directions to our <span style="color: #ff9d02;">Location</span> 👇🏻👇🏻</h3></center>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.81688588207848!2d107.46658089231595!3d-6.384944849311804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69726e095d9ecf%3A0x921d1e774fcaab96!2sJl.%20Opal%20Timur%2C%20Cikampek%20Utara%2C%20Kec.%20Kota%20Baru%2C%20Karawang%2C%20Jawa%20Barat%2041374!5e0!3m2!1sid!2sid!4v1729560746769!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        
    <footer style="background-color: #F5F5DC;">
        <p>&copy; 2024 MS Crisp. All rights reserved.</p>
    </footer>

<script>
    function sendFeedback() {
        let feedback = document.getElementById('feedback').value;
        
        if (feedback.trim() === "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Feedback tidak boleh kosong!',
            });
        } else {
            Swal.fire({
                icon: 'success',
                title: 'Terima kasih!',
                text: 'Masukan Anda telah dikirim.',
                showConfirmButton: false,
                timer: 2000
            });
            document.getElementById('feedback').value = ""; 
        }
    }

    function showSmileEmojiAlert() {
        Swal.fire({
            icon: 'info',
            title: 'Tanggapan Anda sudah terkirim!',
            text: 'Terima kasih atas feedback Anda!',
            showConfirmButton: false,
            timer: 2000
        });
    }

    function showSadEmojiAlert() {
        Swal.fire({
            icon: 'info',
            title: 'Tanggapan Anda sudah terkirim!',
            text: 'Kami akan berusaha menjadi lebih baik!',
            showConfirmButton: false,
            timer: 2000
        });
    }


</script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3ZbUfzFW1KpWt2OMECF4wvAUWh9LpEFN4OhBtJGpGYkdPZ5cmGDlFbL6033AcPS" crossorigin="anonymous"></script>
</body>
</html>