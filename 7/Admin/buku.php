<h2>Data Buku</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Stok Buku</th>
            <th>Gambar</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        <?php $ambil=$conn->query("SELECT * FROM books"); ?>
        <?php while($tampil = $ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $tampil['name']; ?></td>
            <td><?php echo $tampil['stok']; ?></td>
            <td>
                <img src="../foto_buku/<?php echo $tampil['image']; ?>" width="100">
            </td>
            <td><?php echo $tampil['deskripsi']; ?></td>
            <td>
                <a href="index.php?halaman=hapusbuku&id=<?php echo $tampil['id']; ?>" class="btn-danger btn">Hapus</a>
                <a href="index.php?halaman=ubahbuku&id=<?php echo $tampil['id']; ?>" class="btn btn-warning">Ubah</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php }?>
    </tbody>
</table>
<a href="index.php?halaman=tambahbuku" class="btn btn-primary">Tambah Data</a>
