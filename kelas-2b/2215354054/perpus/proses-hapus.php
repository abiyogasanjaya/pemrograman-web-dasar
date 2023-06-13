<?php

include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tb_buku WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("Location: list-buku.php");
    } else {
        die("Buku tidak ditemukan");
    }
    
} else {
    die("Akses dilarang");
}


?>