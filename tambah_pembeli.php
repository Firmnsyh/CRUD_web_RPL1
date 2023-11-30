<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah_pembeli($_POST) > 0) {
        echo "<script>
            alert('Data Pembeli Berhasil Ditambahkan');
            document.location.href='data_pembeli.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Pembeli Gagal Ditambahkan');
            document.location.href='data_pembeli.php';
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembeli</title>
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

        input {
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
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Pembeli</h1>
    <form action="" method="post">
        <div>
            <label for="nama_pemebeli">Nama Pembeli:</label>
            <input type="text" name="nama_pemebeli" id="nama_pemebeli" required>
        </div>
        <div>
            <label for="jk">Jenis Kelamin:</label>
            <input type="text" name="jk" id="jk" required>
        </div>
        <div>
            <label for="no_telp">No. Telepon:</label>
            <input type="text" name="no_telp" id="no_telp" required>
        </div>
        <button type="submit" name="tambah">Tambah Data</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
