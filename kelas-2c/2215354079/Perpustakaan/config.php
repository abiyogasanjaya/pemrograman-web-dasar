<?php 
$db_local = "localhost";
$db_user = "root";
$db_pass = "";
$db_data = "perpustakaan";

$db = mysqli_connect($db_local,$db_user,$db_pass,$db_data);

if ($db) {
	echo "berhasil";
}
?>