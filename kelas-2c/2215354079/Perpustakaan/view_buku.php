<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
</head>
<body>
    <h1>
        List buku
    </h1>

    <?php if ($_GET) {
    	if (isset($_GET['status'])) {
    		if ($_GET['status']=='sukses'){
				echo "Berhasil menghapus buku.";
			}else{
				echo "Gagal di menghapus buku";
			}
    	}
    	if (isset($_GET['statusUpdate'])) {
    		if ($_GET['statusUpdate']=='sukses'){
				echo "Berhasil mengedit buku.";
			}else{
				echo "Gagal di mengedit buku";
			}
    	}
    } ?>

    <table border="1">
        <thead>
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Kategori</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT tb_buku.*,tb_kategori.name 
            FROM tb_buku
            JOIN tb_kategori 
            ON tb_buku.kategori_id = tb_kategori.id";
            $query = mysqli_query($db, $sql);
            while ($buku = mysqli_fetch_array($query)){
            ?>
                <tr>
	                <td><?= $buku['judul']; ?></td>
	                <td><?= $buku['penerbit']; ?></td>
	                <td><?= $buku['pengarang']; ?></td>
	                <td><?= $buku['tahun_terbit']; ?></td>
	                <td><?= $buku['name']; ?></td>
	                <td><a href="view_update.php?id=<?= $buku['id']; ?>">Update</a> | <a href="delete.php?id=<?= $buku['id']; ?>">Delete</a></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</body>
</html>