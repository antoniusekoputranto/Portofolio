<?php
require 'functions.php';
//ambil id
$id = $_GET['id'];

$k = query("SELECT * FROM product_item WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="image/<?= $k['gambar_produk']; ?>" width="60" height="60"></li>
        <li>Deskripsi Produk : <?= $k['deskripsi_produk']; ?></li>
        <li>Link Produk : <?= $m['link_produk']; ?></li>
        <li><a href="">Edit</a> | <a href="">Delete</a></li>
        <li><a href="latihan3.php">Back</a></li>
    </ul>
</body>

</html>