<?php

include "koneksi.php";

if (!isset($_GET['id'])) {
    header("Location: list-buku.php");
}

$id = $_GET['id'];

if ($id = null) {
    header("Location: list-buku.php");
}

$sql = "SELECT tb_buku.*, tb_kategori.name 
        FROM tb_buku
        JOIN tb_kategori 
        ON tb_buku.kategori_id=tb_kategori.id";
$query = mysqli_query($conn, $sql);
$buku = mysqli_fetch_array($query);
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

    <form action="proses-ubah-buku.php" method="post">
        <fieldset>
            <input type="hidden" name="<?php echo $id; ?>">
            <p>
                <label for="judul">Judul Buku</label>
                <input value="<?php echo $buku['judul'] ; ?>" type="text" name="judul" id="judul" placeholder="Judul Buku">
            </p>
            <p>
                <label for="penerbit">Penerbit Buku</label>
                <input value="<?php echo $buku['penerbit'] ; ?>" type="text" name="penerbit" id="penerbit" placeholder="Penerbit Buku">
            </p>
            <p>
                <label for="pengarang">Pengarang Buku</label>
                <input value="<?php echo $buku['pengarang'] ; ?>" type="text" name="pengarang" id="pengarang" placeholder="Pengarang Buku">    
            </p>
            <p>
                <label for="tahun">Tahun Buku</label>
                <input value="<?php echo $buku['tahun_terbit'] ; ?>" type="text" name="tahun" id="tahun" placeholder="Tahun Buku">
            </p>
            <p>
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori">
                    <?php
                        $sql = "SELECT * FROM tb_kategori";
                        $query = mysqli_query($conn, $sql);

                        while ($kategori = mysqli_fetch_array($query)) {
                    ?>
                            <option value="<?=$buku['kategori_id'] == $kategori['id']?>" hidden selected><?=$buku['name']?></option>
                            <option value="<?=$kategori['id']?>"><?=$kategori['name']?></option>
                    <?php 
                        }
                    ?>
                </select>
            </p>
                <input type="submit" value="Ubah Buku" name="ubah">
            <p>

            </p>
        </fieldset>
    </form>
     
</body>
</html>