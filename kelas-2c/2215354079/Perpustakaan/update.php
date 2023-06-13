<?php 
require 'config.php';
if ($_POST) {
	$id = $_POST['id'];
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$pengarang = $_POST['pengarang'];
	$tahun = $_POST['tahun'];
	$kategori = $_POST['kategori'];
	$data = mysqli_query($db, "UPDATE tb_buku SET judul='$judul',penerbit='$penerbit',pengarang='$pengarang',tahun_terbit='$tahun',kategori_id='$kategori' WHERE id=$id");

	if ($data){
        header('Location: view_buku.php?statusUpdate=sukses');
    }else{
        header('Location: view_buku.php?statusUpdate=gagal');
    }
}else{
	echo "Tidak memiliki Akses";
}