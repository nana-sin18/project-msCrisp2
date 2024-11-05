<?php
include 'koneksi.php'; // Memasukkan koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil feedback dari input
    $message = $_POST['feedback'];

    // Menyiapkan dan mengikat
    $stmt = $koneksi->prepare("INSERT INTO feedback (message) VALUES (?)");
    $stmt->bind_param("s", $message);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "Feedback berhasil dikirim.";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error; // Pastikan ini mencetak pesan kesalahan
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $koneksi->close();
}
?>
