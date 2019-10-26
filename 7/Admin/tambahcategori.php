<h2>Tambah Kategori</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" class="form-control" name="name">
    </div>
    <button class="btn btn-primary" name="simpan">Simpan</button>
</form>
<?php
if(isset($_POST['simpan']))
{
    $conn->query("INSERT INTO categories (name) VALUES('$_POST[name]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=categories'>";
}
?>
