<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Buku Perpustakaan</title>
</head>
<body>
	<h1>Tambah Buku</h1>
	<form action="tambah.php" method="POST">
		<label>Judul Buku</label>
		<input name="judul" type="text">
		<br>
		<label>Penerbit</label>
		<input name="penerbit" type="text">
		<br>
		<label>Pengarang</label>
		<input name="pengarang" type="text">
		<br>
		<label>Tahun Terbit</label>
		<input name="tahun" type="number">
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