<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perpustakaan</title>
</head>
<body>
	<h1>Perpustakaan PNB</h1>
	<h3>Menu</h3>
	<?php if ($_GET['status']=='sukses'){
		echo "Berhasil di tambahkan buku baru.";
	}else{
		echo "Gagal di menambahkan buku";
	} ?>
	<nav>
		<ul>
			<li>
				<a href="view_tambah.php">Tambah Buku</a>
			</li>
			<li>
				<a href="view_buku.php">Daftar Buku</a>
			</li>
		</ul>
	</nav>
</body>
</html>