<h2>Ubah Buku</h2>
<?php
$ambil = $conn->query("SELECT * FROM books WHERE id='$_GET[id]'");
$tampil = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Buku</label>
        <input type="text" name="name" class="form-control" value="<?php echo $tampil['name']; ?>">
    </div>
    <div class="form-group">
        <label>Stok Buku</label>
        <input type="text" name="stok" class="form-control" value="<?php echo $tampil['stok']; ?>">
    </div>
    <div class="form-group">
        <img src="../foto_buku/<?php echo $tampil['image'] ?>" width="200">
    </div>
    <div class="form-group">
        <label> Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="10"><?php echo $tampil['deskripsi']; ?></textarea>
    </div>
   <button class="btn btn-primary" name="ubah">Ubah</button>

</form>

<?php
if(isset($_POST['ubah']))
{
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    if(!empty($lokasifoto)){
        move_uploaded_file($lokasifoto, "../foto_buku/$namafoto");

        $conn->query("UPDATE books SET name = '$_POST[name]', stok = '$_POST[stok]', image= '$namafoto', deskripsi = '$_POST[deskripsi]' WHERE id ='$_GET[id]'");
    }else{
       $conn->query("UPDATE books SET name = '$_POST[name]', stok = '$_POST[stok]', deskripsi = '$_POST[deskripsi]' WHERE id='$_GET[id]'");
    }
    echo "<script>alert('data Buku telah diubah');</script>";
    echo "<script>location='index.php?halaman=buku';</script>";
}
?>
