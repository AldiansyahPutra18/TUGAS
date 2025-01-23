<?php include 'header.php'; ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h2>Data Console</h2>
        </div>
        <div class="panel-body">
            <a href="console_tambah.php" class="btn btn-sm btn-info pull-right"> Tambah Data</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Jenis Console</th>
                    <th>Harga sewa</th>
                    <th width="15%">Opsi</th>
                </tr>
                <?php
                // Koneksi database
                include '../koneksi.php';
                // Mengambil data pelanggan dari database
                $data = mysqli_query($koneksi, "SELECT * FROM console");
                $no = 1;
                // Mengubah data ke array dan menampilkannya
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['jenis_console']; ?></td>
                    <td><?php echo $d['harga_sewa']; ?></td>
                    <td>
                        <a href="console_edit.php?id=<?php echo $d['id_console']; ?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="console_hapus.php?id=<?php echo $d['id_console']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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
