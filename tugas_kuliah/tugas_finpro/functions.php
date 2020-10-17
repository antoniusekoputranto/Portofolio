<?php

function koneksi()
{
    //koneksi db & pilih db
    return mysqli_connect('localhost', 'root', '', 'finpro2020');
}
function query($query)
{
    $conn = koneksi();
    //query isi tabel
    $result = mysqli_query($conn, $query);
    //ubah data ke array
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
