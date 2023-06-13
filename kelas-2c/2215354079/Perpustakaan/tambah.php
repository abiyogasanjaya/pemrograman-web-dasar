<?php 
require 'config.php';
if ($_POST) {
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$pengarang = $_POST['pengarang'];
	$tahun = $_POST['tahun'];
	$kategori = $_POST['kategori'];
	$data = mysqli_query($db, "INSERT INTO tb_buku(judul, penerbit, pengarang, tahun_terbit, kategori_id) VALUES ('$judul','$penerbit','$pengarang','$tahun','$kategori')");

	if ($data){
        header('Location: index.php?status=sukses');
    }else{
        header('Location: index.php?status=gagal');
    }
}else{
	echo "Tidak memiliki Akses";
}