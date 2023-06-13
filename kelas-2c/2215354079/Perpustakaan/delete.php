<?php
require 'config.php';
if ($_GET) {
	$id = $_GET['id'];
	$data = mysqli_query($db, "DELETE FROM tb_buku WHERE id=$id");
	if ($data){
        header('Location: view_buku.php?status=sukses');
    }else{
        header('Location: view_buku.php?status=gagal');
    }
}else{
	echo "Tidak memiliki Akses";
}
?>