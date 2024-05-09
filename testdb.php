<?php
$servername = "47.236.31.81"; // Ganti dengan alamat IP jika localhost telah berubah
$username = "asbun"; // Ganti dengan nama pengguna MySQL Anda
$password = "Stiga4990l-"; // Ganti dengan kata sandi MySQL Anda
$database = "card"; // Ganti dengan nama database yang ingin Anda hubungkan

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil";

// Tutup koneksi
$conn->close();
?>
