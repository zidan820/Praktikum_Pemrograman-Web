<?php
include 'koneksi.php';

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);

if (!$result) {
    die("Query gagal: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h2>Daftar Produk Toko</h2>
    <a href="tambah.php">Tambah Produk Baru</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id_produk']}</td>";
                echo "<td>{$row['nama_produk']}</td>";
                echo "<td>Rp " . number_format($row['harga']) . "</td>";
                echo "<td>{$row['stok']}</td>";
                echo "<td>
                        <a href='edit.php?id={$row['id_produk']}'>Edit</a> |
                        <a href='hapus.php?id={$row['id_produk']}' onclick='return confirm(\"Yakin hapus data ini?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Belum ada data produk.</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
