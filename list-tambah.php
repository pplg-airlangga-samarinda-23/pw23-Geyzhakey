<?php

require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $Judul = $_POST['Judul'];
    $Genre = $_POST['Genre'];
    $Harga = $_POST['Harga'];
    $Ukuran = $_POST['Ukuran'];
    $Rating = $_POST['Rating'];
    $Tanggal_Rilis = $_POST['Tanggal_Rilis'];

    $sql ="INSERT INTO list (Judul,Genre,Harga,Ukuran,Rating,Tanggal_Rilis) VALUES (?,?,?,?,?,?)";
    $row = $koneksi->execute_query($sql,[$Judul,$Genre,$Harga,$Ukuran,$Rating,$Tanggal_Rilis]);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div class="form-item">
            <label for="Judul">Judul</label>
            <input type="text" name="Judul" id="Judul">
        </div>
        <div class="form-item">
            <label for="Genre">Genre</label>
            <input type="text" name="Genre" id="Genre">
        </div>
        <div class="form-item">
            <label for="Harga">Harga</label>
            <input type="decimal" name="Harga" id="Harga">
        </div>
        <div class="form-item">
        <label for="Ukuran">Ukuran</label>
        <input type="text" name="Ukuran" id="Ukuran">
        </div>
        <div class="form-item">
            <label for="Rating">Rating</label>
            <select name="Rating" id="Rating">
                <option value="0/10">0/10</option>
                <option value="1/10">1/10</option>
                <option value="2/10">2/10</option>
                <option value="3/10">3/10</option>
                <option value="4/10">4/10</option>
                <option value="5/10">5/10</option>
                <option value="6/10">6/10</option>
                <option value="7/10">7/10</option>
                <option value="8/10">8/10</option>
                <option value="9/10">9/10</option>
                <option value="10/10">10/10</option>
                <option value="100/10">100/10</option>
            </select>
            </div>
            <div class="form-item">
            <label for="Tanggal_Rilis">Tanggal Rilis</label>
            <input type="date" name="Tanggal_Rilis" id="Tanggal_Rilis">
            </div>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>