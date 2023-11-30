<?php
    require 'functions.php';

    $barang = query("SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        body {
            background-color: #f2f2f2; /* Warna latar belakang */
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .navbar {
            background-color: #4CAF50; /* Warna latar belakang navbar hijau */
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
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
            background-color: #ddd; /* Warna latar belakang navbar saat dihover */
            color: black;
        }

        h1 {
            color: #006400; /* Warna teks hijau tua */
            margin-top: 60px; /* Mengatur margin atas untuk memberi ruang di bawah navbar */
        }

        .btn-tambah {
            text-decoration: none;
            padding: 10px 15px;
            background-color: #28a745; /* Warna tombol hijau */
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
            background-color: #4CAF50; /* Warna latar belakang header hijau */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5; /* Warna latar belakang baris ganjil */
        }

        .aksi-btn {
            display: flex;
            gap: 5px;
        }

        .aksi-btn button {
            padding: 8px 12px;
            background-color: #008000; /* Warna tombol hijau tua */
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="data_pembeli.php">Pembelian</a>
        <a href="data_supplier.php">Supplier</a>
        <a href="data_barang.php">Barang</a>
    </div>

    <h1>Daftar Barang</h1>
    <a href="tambah_barang.php" class="btn-tambah">Tambah Barang</a>

    <table>
        <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ID Supplier</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($barang as $brg) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $brg['id_barang'];?></td>
                <td><?= $brg['nama_barang'];?></td>
                <td><?= $brg['harga'];?></td>
                <td><?= $brg['stok'];?></td>
                <td><?= $brg['id_supplier'];?></td>
                <td>
                    <a href="ubah_barang.php?id=<?php echo $brg['id_barang'];?>"><button type="button" class="btn-danger">Ubah</button></a>
                    <a href="hapus_barang.php?id=<?php echo $brg['id_barang'];?>"><button type="button" class="btn-danger">Hapus</button></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
