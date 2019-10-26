
<?php
$ambil = $conn->query("SELECT * FROM books WHERE id='$_GET[id]'");
$tampil = $ambil->fetch_assoc();

?>
<?php
$conn->query("UPDATE books SET stok = '$stok-1' WHERE id ='$_GET[id]'");
?>

echo "<script>alert('Buku Di pinjam')</script>";
