<?php
include 'koneksi.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID tidak valid.");
}

$id = $_GET['id'];
$sql = "SELECT * FROM karyawan WHERE id = $id";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    die("Data tidak ditemukan.");
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Karyawan</title>
</head>
<body>
    <h2>Form Edit Data Karyawan</h2>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        Nama: <input type="text" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required><br><br>
        Jabatan: <input type="text" name="jabatan" value="<?php echo htmlspecialchars($row['jabatan']); ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br><br>
        
        <input type="submit" value="Update">
    </form>
</body>
</html>
