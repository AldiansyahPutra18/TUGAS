<?php include 'header.php'; ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h2>Data Pengemabalian</h2>
        </div>
        <div class="panel-body">
        <a href="pengembalian_tambah.php" class="btn btn-sm btn-info pull-right"> Tambah Data</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped" id="table-data">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Console</th>
                        <th>Jaminan</th>
                        <th class="no-print" width="15%">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Koneksi database
                    include '../koneksi.php';

                    // Mengambil data penyewaan dari database
                    $data = mysqli_query($koneksi, "SELECT * FROM pengembalian");
                    $no = 1;

                    // Menampilkan data penyewaan
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($d['nama']); ?></td>
                        <td><?php echo htmlspecialchars($d['tgl_pinjam']); ?></td>
                        <td><?php echo htmlspecialchars($d['tgl_kembali']); ?></td>
                        <td><?php echo htmlspecialchars($d['console']); ?></td>
                        <td><?php echo htmlspecialchars($d['jaminan']); ?></td>
                        <td class="no-print">
                            <a href="pengembalian_edit.php?id=<?php echo $d['id_pengembalian']; ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="pengembalian_hapus.php?id=<?php echo $d['id_pengembalian']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
