<h2>Data Buku</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        <?php $ambil=$conn->query("SELECT * FROM categories"); ?>
        <?php while($tampil = $ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $tampil['name']; ?></td>
            <td>
                <a href="index.php?halaman=hapusbuku&id=<?php echo $tampil['id']; ?>" class="btn-danger btn">Hapus</a>
                <a href="index.php?halaman=ubahbuku&id=<?php echo $tampil['id']; ?>" class="btn btn-warning">Ubah</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php }?>
    </tbody>
</table>
<a href="index.php?halaman=tambahcategori" class="btn btn-primary">Tambah Data</a>
