<?php
    require 'functions.php';

    $pembeli = query("SELECT * FROM pembeli");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: #4CAF50;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        h1 {
            color: #006400;
            margin-top: 60px; /* Menyesuaikan margin atas untuk memberi ruang bagi navbar */
        }

        a.btn {
            text-decoration: none;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
            display: inline-block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        .aksi-btn {
            display: flex;
            gap: 5px;
        }

        .aksi-btn button {
            padding: 8px 12px;
            background-color: #008000;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
        }

        .btn-danger {
            background-color: #dc3545;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="data_pembeli.php">Pembelian</a>
        <a href="data_supplier.php">Supplier</a>
        <a href="data_barang.php">Barang</a>
    </div>

    <h1>Daftar Data Pembelian</h1>
    <a href="tambah_pembeli.php" class="btn btn-primary">Tambah Data Pembeli</a>

    <table>
        <tr>
            <th>No</th>
            <th>ID Pembeli</th>
            <th>Nama Pembeli</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pembeli as $brg) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $brg['id_pembeli'];?></td>
                <td><?= $brg['nama_pemebeli'];?></td>
                <td><?= $brg['jk'];?></td>
                <td><?= $brg['no_telp'];?></td>
                <td class="aksi-btn">
                    <a href="ubah_pembeli.php?id=<?php echo $brg['id_pembeli'];?>"><button type="button" class="btn btn-danger">Ubah</button></a>
                    <a href="hapus_pembeli.php?id=<?php echo $brg['id_pembeli'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
