<?php
include 'koneksi.php';

// Mengambil data dari form
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];

// Validasi sederhana (opsional tapi direkomendasikan)
if (empty($nama) || empty($jabatan) || empty($email)) {
    die("Semua field wajib diisi.");
}

// Query untuk menyisipkan data
$sql = "INSERT INTO karyawan (nama, jabatan, email) VALUES ('$nama', '$jabatan', '$email')";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Redirect jika berhasil
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
