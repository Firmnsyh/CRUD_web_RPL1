<?php
require 'functions.php';

if (isset($_GET['id'])) {
    $id_pembeli = $_GET['id'];
    if (hapus_pembeli($id_pembeli) > 0) {
        echo "<script>
            alert('Data Pembeli Berhasil Dihapus');
            document.location.href='data_pembeli.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Pembeli Gagal Dihapus');
            document.location.href='data_pembeli.php';
        </script>";
    }
} else {
    // Redirect or handle the case when no ID is provided
    header("Location: data_pembeli.php");
    exit();
}
?>