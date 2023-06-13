<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Perpustakaan PNB</h1>

    <form action="proses-tambah-buku.php" method="post">
        <fieldset>
            <p>
                <label for="judul">Judul Buku</label>
                <input type="text" name="judul" id="judul" placeholder="Judul Buku">
            </p>
            <p>
                <label for="penerbit">Penerbit Buku</label>
                <input type="text" name="penerbit" id="penerbit" placeholder="Penerbit Buku">
            </p>
            <p>
                <label for="pengarang">Pengarang Buku</label>
                <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang Buku">    
            </p>
            <p>
                <label for="tahun">Tahun Buku</label>
                <input type="text" name="tahun" id="tahun" placeholder="Tahun Buku">
            </p>
            <p>
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori">
                    <?php
                        $sql = "SELECT * FROM tb_kategori";
                        $query = mysqli_query($conn, $sql);

                        while ($kategori = mysqli_fetch_array($query)) {
                            echo "<option value=".$kategori['id'].">".$kategori['name']."</option>";
                        }

                    ?>
                </select>
            </p>
                <input type="submit" value="Tambah Buku" name="tambah">
            <p>

            </p>
        </fieldset>
    </form>
     
</body>
</html>