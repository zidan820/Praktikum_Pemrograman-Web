<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM produk WHERE id_produk=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form method="post" action="proses_edit.php">
        <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">
        Nama Produk: <input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" required><br><br>
        Harga: <input type="number" name="harga" value="<?php echo $data['harga']; ?>" required><br><br>
        Stok: <input type="number" name="stok" value="<?php echo $data['stok']; ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
