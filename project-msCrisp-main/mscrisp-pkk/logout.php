<?php
include 'koneksi.php';
// Mulai session
session_start();

// Cek apakah session terdaftar
if(isset($_SESSION['username'])) {
    session_unset(); // Hapus semua variabel session
    session_destroy(); // Hapus session data

    // Memberitahu pengguna bahwa logout berhasil dan memberikan permalink untuk login
    echo 'Logout berhasil. Klik <a href="logre.html">di sini</a> untuk login kembali.';
} else {
    echo '<script type="text/javascript">window.location.href = "logre.html";</script>';
    exit;
}
?>