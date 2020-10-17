<?php

//koneksi db & pilih db
$conn = mysqli_connect('localhost', 'root', '', 'finpro2020');

//query isi tabel
$result = mysqli_query($conn, "SELECT * FROM product_item ");

//ubah data ke array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
$kategori = $rows;



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
            <th>#</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>link</th>
            <th>aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($kategori as $k) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="image/<?= $k['gambar_produk']; ?>"></td>
                <td><?= $k['nama_produk']; ?></td>
                <td><?= $k['deskripsi_produk']; ?></td>
                <td><?= $k['link_produk']; ?></td>
                <td>
                    <a href="">Edit</a> | <a href="">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>