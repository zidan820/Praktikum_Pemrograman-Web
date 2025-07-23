<?php
$servername = "localhost";     // Host database
$username   = "root";          // Username default XAMPP
$password   = "";              // Password default XAMPP (kosong)
$dbname     = "db_perusahaan"; // Ganti sesuai nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
