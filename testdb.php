<?php
$servername = "localhost"; // Ganti dengan alamat IP jika localhost telah berubah
$username = "root"; // Ganti dengan nama pengguna MySQL Anda
$password = ""; // Ganti dengan kata sandi MySQL Anda
$database = "card"; // Ganti dengan nama database yang ingin Anda hubungkan

// Buat koneksi
$conn = new mysqli($servername, $username, $password);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil";

// Tutup koneksi
$conn->close();
?>
