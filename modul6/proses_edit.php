<?php
include 'koneksi.php';

// Ambil data dari form
$id      = $_POST['id'];
$nama    = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email   = $_POST['email'];

// Validasi sederhana
if (empty($id) || empty($nama) || empty($jabatan) || empty($email)) {
    die("Semua field wajib diisi.");
}

// Pastikan ID adalah angka
if (!is_numeric($id)) {
    die("ID tidak valid.");
}

// Query update
$sql = "UPDATE karyawan SET nama='$nama', jabatan='$jabatan', email='$email' WHERE id=$id";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
