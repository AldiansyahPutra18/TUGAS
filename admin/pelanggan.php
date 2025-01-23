<?php include 'header.php'; ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h2>Data Pelanggan</h2>
        </div>
        <div class="panel-body">
            <a href="pelanggan_tambah.php" class="btn btn-sm btn-info pull-right"> Tambah Data</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telpon</th>
                    <th width="15%">Opsi</th>
                </tr>
                <?php
                // Koneksi database
                include '../koneksi.php';
                // Mengambil data pelanggan dari database
                $data = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                $no = 1;
                // Mengubah data ke array dan menampilkannya
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['telepon']; ?></td>
                    <td>
                        <a href="pelanggan_edit.php?id=<?php echo $d['id_pelanggan']; ?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="pelanggan_hapus.php?id=<?php echo $d['id_pelanggan']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
