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
            margin-left: 450px;

        }
    </style>
</head>
<body>
    <h1>Halaman list</h1>
    <table border="1">
        <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Genre</th>
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
                <td><?= $row["genre"]?></td>
                <td><?= $row["harga"]?></td>
                <td><?= $row["Ukuran"]?></td>
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