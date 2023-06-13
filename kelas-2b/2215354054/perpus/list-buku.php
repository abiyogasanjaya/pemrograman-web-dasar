<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
</head>
<body>
    <h1>Perpustakaan PNB</h1>
    <h3>Daftar Buku</h3>
    <br>
    <table border="1">
        <thead>
            <th>Judul Buku</th>
            <th>Penerbit</th>
            <th>Pengarang</th>
            <th>Tahun terbit</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            
            $sql = "SELECT tb_buku.*, tb_kategori.name 
                    FROM tb_buku
                    JOIN tb_kategori ON tb_buku.kategori_id=tb_kategori.id";
            $query = mysqli_query($conn, $sql);

            while ($buku = mysqli_fetch_array($query)) {
                echo"<tr>";
                echo"<td>".$buku['judul']."</td>";
                echo"<td>".$buku['penerbit']."</td>";
                echo"<td>".$buku['pengarang']."</td>";
                echo"<td>".$buku['tahun_terbit']."</td>";
                echo"<td>".$buku['name']."</td>";
                echo"<td><a href='ubah-buku.php?id=".$buku['id']."'>Edit</a> |"; 
                echo    "<a href='proses-hapus.php?id=".$buku['id']."'>Hapus</a></td>";
                echo"</tr>";
            }
            ?>
            
        </tbody>

    </table>
</body>
</html>