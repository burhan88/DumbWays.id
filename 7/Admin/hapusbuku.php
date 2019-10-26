<?php

$ambil = $conn->query("SELECT * FROM books WHERE id='$_GET[id]'");
$tampil = $ambil->fetch_assoc();
$image = $tampil['image'];
if (file_exists("../foto_buku/$image")){
    unlink("../foto_buku/$image");
}

$conn->query("DELETE FROM books WHERE id='$_GET[id]'");

    echo "<script>alert('Buku terhapus');</script>";
    echo "<script>location='index.php?halaman=buku';</script>";
?>
