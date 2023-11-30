<?php
require 'functions.php';

if (isset($_GET['id'])) {
    $id_pembeli = $_GET['id'];
    $pembeli = query("SELECT * FROM pembeli WHERE id_pembeli = $id_pembeli")[0];
} else {
    header("Location: data_pembeli.php");
    exit();
}

if (isset($_POST['update'])) {
    if (ubah_pembeli($_POST) > 0) {
        echo "<script>
            alert('Data Pembeli Berhasil Diubah');
            document.location.href='data_pembeli.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Pembeli Gagal Diubah');
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
    <title>Edit Pembeli</title>
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
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Edit Data Pembeli</h1>
    <form action="" method="post">
        <input type="hidden" name="id_pembeli" value="<?= $pembeli['id_pembeli']; ?>">
        <div>
            <label for="nama_pemebeli">Nama Pembeli:</label>
            <input type="text" name="nama_pemebeli" id="nama_pemebeli" value="<?= $pembeli['nama_pemebeli']; ?>" required>
        </div>
        <div>
            <label for="jk">Jenis Kelamin:</label>
            <input type="text" name="jk" id="jk" value="<?= $pembeli['jk']; ?>" required>
        </div>
        <div>
            <label for="no_telp">No. Telepon:</label>
            <input type="text" name="no_telp" id="no_telp" value="<?= $pembeli['no_telp']; ?>" required>
        </div>
        <button type="submit" name="update">Update Data</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
