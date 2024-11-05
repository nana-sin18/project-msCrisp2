<?php
include("koneksi.php");

// Mengambil data dari form register
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = 'user'; // Default role adalah 'user'

// Memeriksa apakah email sudah terdaftar
$check_email = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");
if (mysqli_num_rows($check_email) > 0) {
    // Email sudah terdaftar, kembali ke halaman register dengan pesan error
    header("Location: logre.html?error=Email sudah terdaftar");
} else {
    // Menyimpan data pengguna baru ke database
    $query = "INSERT INTO user (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
    if (mysqli_query($koneksi, $query)) {
        // Registrasi berhasil, arahkan ke halaman login
        header("Location: home.php?success=Registrasi berhasil");
    } else {
        // Terjadi kesalahan saat menyimpan data
        header("Location: logre.html?error=Registrasi gagal, coba lagi");
    }
}
?>
