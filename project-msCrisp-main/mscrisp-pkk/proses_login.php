<?php
include("koneksi.php");
session_start();

// Mengambil data dari form login
$email = $_POST["email"];
$password = $_POST["password"];


// Mengecek apakah email ada di database
$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
$data = mysqli_fetch_assoc($sql);

if ($data) {
    // Menyimpan data pengguna ke sesi
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];
    
    // Mengecek peran pengguna dan mengarahkan ke halaman yang sesuai
    if ($data['role'] == 'admin') {
        header("Location: halaman_admin.php");
    } else {
        header("Location: home.php");
    }
} else {
    // Jika login gagal, kembali ke halaman login dengan pesan error
    header("Location: logre.html?error=Email atau password salah");
}
?>
