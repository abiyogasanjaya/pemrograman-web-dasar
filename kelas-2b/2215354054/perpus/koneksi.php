<?php

$server='localhost';
$user='root';
$password='';
$db='perpustakaan';

$conn =mysqli_connect($server, $user, $password, $db);

if ($conn) {
    echo "Berhasil terhubung";
} else {
    die("Gagal terhubung<br>".mysqli_connect_error());
}

?>