<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu VIP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            max-width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            background-color: #ecf0f1;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Buku Tamu VIP</h2>
    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">

        <label for="nim">NIM:</label>
        <input type="number" id="nim" name="nim">

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST["nama"]);
        $nim = htmlspecialchars($_POST["nim"]);
        echo "<div class='hasil'>";
        echo "<strong>Data Tamu:</strong><br>";
        echo "Nama: $nama<br>";
        echo "NIM: $nim";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
