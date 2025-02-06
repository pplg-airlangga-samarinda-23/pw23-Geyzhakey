    <?php

    require 'koneksi.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['id'];

        $sql = "SELECT * FROM list WHERE id=?";
        $row = $koneksi->execute_query($sql,[$id])->fetch_assoc();
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $Judul = $_POST['Judul'];
        $Genre = $_POST['Genre'];
        $Harga = $_POST['Harga'];
        $Ukuran = $_POST['Ukuran'];
        $Rating = $_POST['Rating'];
        $Tanggal_Rilis = $_POST['Tanggal_Rilis'];
        $id = $_GET['id'];

        $sql ="UPDATE list SET Judul=?, Genre=? ,Harga=? ,Ukuran=? ,Rating=? ,Tanggal_Rilis=? WHERE id=?";
        $row = $koneksi->execute_query($sql,[$Judul,$Genre,$Harga,$Ukuran,$Rating,$Tanggal_Rilis,$id]); 

        if($row) {
            header("location:list.php");
        }
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
        <h1>edit data</h1>

        <form action="" method="POST">
            <div class="form-item">
                <label for="Judul">Judul</label>
                <input type="text" name="Judul" id="Judul" value="<?=htmlspecialchars($row['Judul'])?>">
            </div>
            <div class="form-item">
                <label for="Genre">Genre</label>
                <input type="text" name="Genre" id="Genre" value="<?=htmlspecialchars($row['Genre'])?>">
            </div>
            <div class="form-item">
                <label for="Harga">Harga</label>
                <input type="number" step="any" name="Harga" id="Harga" value="<?=$row['Harga']?>">
            </div>
            <div class="form-item">
            <label for="Ukuran">Ukuran</label>
            <input type="text" name="Ukuran" id="Ukuran" value="<?=$row['Ukuran']?>">
            </div>
            <div class="form-item">
                <label for="Rating">Rating</label>
                <select name="Rating" id="Rating">
                    <option value="0/10" <?=($row['Rating'] == '0/10') ? 'selected' : '' ?>>0/10</option>
                    <option value="1/10" <?=($row['Rating'] == '1/10') ? 'selected' : ''?>>1/10</option>
                    <option value="2/10" <?=($row['Rating'] == '2/10') ? 'selected' : ''?>>2/10</option>
                    <option value="3/10" <?=($row['Rating'] == '3/10') ? 'selected' : ''?>>3/10</option>
                    <option value="4/10" <?=($row['Rating'] == '4/10') ? 'selected' : ''?>>4/10</option>
                    <option value="5/10" <?=($row['Rating'] == '5/10') ? 'selected' : ''?>>5/10</option>
                    <option value="6/10" <?=($row['Rating'] == '6/10') ? 'selected' : ''?>>6/10</option>
                    <option value="7/10" <?=($row['Rating'] == '7/10') ? 'selected' : ''?>>7/10</option>
                    <option value="8/10" <?=($row['Rating'] == '8/10') ? 'selected' : ''?>>8/10</option>
                    <option value="9/10" <?=($row['Rating'] == '9/10') ? 'selected' : ''?>>9/10</option>
                    <option value="10/10" <?=($row['Rating'] == '10/10') ? 'selected' : ''?>>10/10</option>
                    <option value="100/10" <?=($row['Rating'] == '100/10') ? 'selected' : ''?>>100/10</option>

                </select>
                </div>
                <div class="form-item">
                <label for="Tanggal_Rilis">Tanggal Rilis</label>
                <input type="date" name="Tanggal_Rilis" id="Tanggal_Rilis" value="<?=$row['Tanggal_Rilis']?>">
                </div>
            <button type="submit">Kirim</button>
        </form>
    </body>
    </html>