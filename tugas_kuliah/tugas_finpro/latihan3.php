<?php
require 'functions.php';
$kategori = query(("SELECT * FROM product_item "))

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan</title>
</head>

<body>
    <h3>Daftar Makanan</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($kategori as $k) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="image/<?= $k['gambar_produk']; ?>"></td>
                <td><?= $k['nama_produk']; ?></td>
                <td>
                    <a href="detail_produk.php?id=<?= $k['id']; ?>">Detail</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>