<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Buku Perpustakaan</title>
</head>
<body>
	<h1>Tambah Buku</h1>
	<?php 
	if ($_GET) {
		require 'config.php';
		$id = $_GET['id'];
		$query = mysqli_query($db, "SELECT * FROM tb_buku WHERE id = $id");
		$data = mysqli_fetch_array($query);
	}else{
		header("Location: index.php");
	}
	?>
	<form action="update.php" method="POST">
		<input type="text" name="id" value="<?= $data['id']; ?>" hidden>
		<label>Judul Buku</label>
		<input name="judul" type="text" value="<?= $data['judul']; ?>">
		<br>
		<label>Penerbit</label>
		<input name="penerbit" type="text" value="<?= $data['penerbit']; ?>">
		<br>
		<label>Pengarang</label>
		<input name="pengarang" type="text" value="<?= $data['pengarang']; ?>">
		<br>
		<label>Tahun Terbit</label>
		<input name="tahun" type="number" value="<?= $data['tahun_terbit']; ?>">
		<br>
		<label>Kategori</label>
		<select name="kategori">
			<?php
			require 'config.php';
			$queryKategori = mysqli_query($db, "SELECT * FROM tb_kategori");
			while ($dataKategori = mysqli_fetch_array($queryKategori)) {
			?>
			<option value="<?= $dataKategori['id'] ?>"><?= $dataKategori['name'] ?></option>
			<?php $dataKategori++;} ?>
		</select>
		<br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>