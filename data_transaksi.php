<?php
    require 'functions.php';

    $transaksi = query("SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Daftar Data Transaksi</h1>
    <table border="1"class="table table-success table-striped-columns">
        <tr>
            <td>No</td>
            <td>ID Transaksi</td>
            <td>ID Barang</td>
            <td>ID Pembeli</td>
            <td>Tanggal</td>
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($transaksi as $brg) { ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $brg['id_transaksi'];?></td>
            <td><?= $brg['id_barang'];?></td>
            <td><?= $brg['id_pembeli'];?></td>
            <td><?= $brg['tanggal'];?></td>
            <td><?= $brg['keterangan'];?></td>
            <td>
                <button><a href="">Ubah</a></button>
                <button><a href="">Hapus</a></button>
            </td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>