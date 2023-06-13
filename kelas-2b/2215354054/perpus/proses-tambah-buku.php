<?php

include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun'];
    $kategori = $_POST['kategori'];

    $sql = "INSERT INTO tb_buku (judul, penerbit, pengarang, tahun_terbit, kategori_id) 
            VALUES ('$judul',
                    ' $penerbit', 
                     '$pengarang', 
                     '$tahun', 
                     '$kategori')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: index.php?status=sukses");
    } else {
        header("Location: index.php?status=gagal");
    }
} else {
    die ("Akses tidak diijinkan");
}


?>