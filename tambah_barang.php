<?php
require 'functions.php';

$supplier = query("SELECT * FROM supplier");

if (isset($_POST['tambah'])) {
    if (tambah_barang($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href='data_barang.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href='data_barang.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Barang</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #006400;
            text-align: center;
        }

        form {
            width: 50%;
            margin: 20px auto;
        }

        div {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Barang</h1>
    <form action="" method="post">
        <div>
            <label for="nama">Nama Barang:</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="harga">Harga Barang:</label>
            <input type="number" name="harga" id="harga" required>
        </div>
        <div>
            <label for="stok">Stok Barang:</label>
            <input type="number" name="stok" id="stok" required>
        </div>
        <div>
            <label for="id_supplier">ID Supplier:</label>
            <select name="id_supplier" id="id_supplier">
                <?php foreach($supplier as $s) :?>
                    <option value="<?= $s['id_supplier']; ?>">
                        <?= $s['nama_supplier']; ?>
                    </option>
                <?php endforeach;?>
            </select>
        </div>
        <div>
            <button type="submit" name='tambah'>Tambah Barang</button>
        </div>
    </form>
</body>
</html>
