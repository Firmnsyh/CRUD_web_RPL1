<?php
require 'functions.php';

if (isset($_GET['id'])) {
    $id_supplier = $_GET['id'];
    if (hapus_supplier($id_supplier) > 0) {
        echo "<script>
            alert('Data Supplier Berhasil Dihapus');
            document.location.href='data_supplier.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Supplier Gagal Dihapus');
            document.location.href='data_supplier.php';
        </script>";
    }
} else {
    // Redirect or handle the case when no ID is provided
    header("Location: data_supplier.php");
    exit();
}
?>