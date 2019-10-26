<?php

$ambil = $conn->query("SELECT * FROM categories WHERE id='$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$conn->query("DELETE FROM categories WHERE id='$_GET[id]'");

    echo "<script>alert('Kategori terhapus');</script>";
    echo "<script>location='index.php?halaman=categori';</script>";
?>
