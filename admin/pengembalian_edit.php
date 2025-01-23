<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Pengembalian</h4>
            </div>
            <div class="panel-body">
                <?php
                // Menghubungkan koneksi
                include '../koneksi.php';
                // Menangkap id yang dikirim melalui URL
                $id = $_GET['id'];
                // Mengambil data pelanggan yang memiliki id di atas dari tabel pelanggan
                $data = mysqli_query($koneksi, "SELECT * FROM pengembalian WHERE id_pengembalian='$id'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <form method="post" action="pengembalian_update.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <!-- Form id pelanggan yang diedit, untuk dikirim ke file aksi -->
                        <input type="hidden" name="id" value="<?php echo $d['id_pengembalian']; ?>">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama .." value="<?php echo $d['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Console</label>
                        <input type="text" class="form-control" name="console" placeholder="Masukkan console .." value="<?php echo $d['console']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input type="varchar" class="form-control" name="tgl_pinjam" placeholder="Masukkan tanggal .." value="<?php echo $d['tgl_pinjam']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="varchar" class="form-control" name="tgl_kembali" placeholder="Masukkan tanggal .." value="<?php echo $d['tgl_kembali']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jaminan</label>
                        <input type="varchar" class="form-control" name="jaminan" placeholder="Masukkan jaminan .." value="<?php echo $d['jaminan']; ?>">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
