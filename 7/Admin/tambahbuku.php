<h2>Tambah Buku</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Buku</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Stok Buku</label>
        <input type="text" class="form-control" name="stok">
    </div>
    <div class="form-group">
        <label>Gambar Buku</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10"></textarea>
    </div>
    <button class="btn btn-primary" name="simpan">Simpan</button>
</form>
<?php
if(isset($_POST['simpan']))
{
    $nama = $_FILES['image']['name'];
    $lokasi = $_FILES['image']['tmp_name'];
    move_uploaded_file($lokasi, "../foto_buku/".$nama);
    $conn->query("INSERT INTO books (name,stok,image,deskripsi) VALUES('$_POST[name]','$_POST[stok]','$nama','$_POST[deskripsi]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=buku'>";
}
?>
