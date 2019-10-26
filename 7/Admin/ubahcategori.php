<h2>Ubah Buku</h2>
<?php
$ambil = $conn->query("SELECT * FROM categories WHERE id='$_GET[id]'");
$tampil = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" name="name" class="form-control" value="<?php echo $tampil['name']; ?>">
    </div>
   <button class="btn btn-primary" name="ubah">Ubah</button>

</form>

<?php
if(isset($_POST['ubah']))
{
            $conn->query("UPDATE categories SET name = '$_POST[name]' WHERE id ='$_GET[id]'");

    echo "<script>alert('data Kategori telah diubah');</script>";
    echo "<script>location='index.php?halaman=categori';</script>";
}
?>
