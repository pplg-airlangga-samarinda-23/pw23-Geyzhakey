<?php

require 'koneksi.php';

//ambil data disini,tampilkan dibawah
$sql = "SELECT * FROM list";
$rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        table {
            margin-left: 410px;

        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Halaman list</h1>
    <a href="list-tambah.php">tambah data</a>

    <table border="1">
        <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>harga</th>
            <th>Ukuran</th>
            <th>Rating</th>
            <th>Tanggal Rilis</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $no=0; foreach ($rows as $row) : ?>
            <tr>
                <td><?= ++$no ?></td>
                <td><?= $row["Judul"]?></td>
                <td><?= $row["Genre"]?></td>
                <td><?= $row["Harga"]?></td>
                <td><?= $row["Ukuran"]?></td>
                <td><?= $row["Rating"]?></td>
                <td><?= $row["Tanggal_Rilis"]?></td>
                <td>
                <a href="list-edit.php?id=<?=$row['id']?>">Edit/</a>
                <a href="list-hapus.php?id=<?=$row['id']?>">hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>