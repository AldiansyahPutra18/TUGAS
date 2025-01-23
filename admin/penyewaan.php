<?php include 'header.php'; ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h2>Data Penyewaan</h2>
        </div>
        <div class="panel-body">
            <a href="penyewaan_tambah.php" class="btn btn-sm btn-info pull-right">Tambah Data</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped" id="table-data">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama</th>
                        <th>Console</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Harga</th>
                        <th>Jaminan</th>
                        <th class="no-print" width="15%">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Koneksi database
                    include '../koneksi.php';

                    // Mengambil data penyewaan dari database
                    $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                    $no = 1;

                    // Menampilkan data penyewaan
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($d['nama']); ?></td>
                        <td><?php echo htmlspecialchars($d['console']); ?></td>
                        <td><?php echo htmlspecialchars($d['tgl_pinjam']); ?></td>
                        <td><?php echo htmlspecialchars($d['tgl_kembali']); ?></td>
                        <td><?php echo htmlspecialchars($d['harga']); ?></td>
                        <td><?php echo htmlspecialchars($d['jaminan']); ?></td>
                        <td class="no-print">
                            <a href="penyewaan_edit.php?id=<?php echo $d['id_peminjaman']; ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="penyewaan_hapus.php?id=<?php echo $d['id_peminjaman']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <div class="form-container text-center mt-4">
                <button type="button" class="btn btn-primary" onclick="printTable()">Cetak Data</button>
            </div>
        </div>
    </div>
</div>
<script>
    function printTable() {
        const table = document.querySelector('#table-data').cloneNode(true);
        table.querySelectorAll('.no-print').forEach(el => el.remove());

        const newWindow = window.open('', '', 'width=800, height=600');
        newWindow.document.write('<html><head><title>Data Penyewaan</title></head><body>');
        newWindow.document.write('<h2>Data Penyewaan</h2>');
        newWindow.document.write(table.outerHTML);
        newWindow.document.write('</body></html>');
        newWindow.document.close();
        newWindow.print();
    }
</script>
<?php include 'footer.php'; ?>
