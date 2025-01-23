<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Console</h4>
            </div>
            <div class="panel-body">
                <?php
                // Menghubungkan koneksi
                include '../koneksi.php';
                // Menangkap id yang dikirim melalui URL
                $id = $_GET['id'];
                // Mengambil data pelanggan yang memiliki id di atas dari tabel pelanggan
                $data = mysqli_query($koneksi, "SELECT * FROM console WHERE id_console='$id'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <form method="post" action="console_update.php">
                    <div class="form-group">
                        <label>Jenis Console</label>
                        <!-- Form id pelanggan yang diedit, untuk dikirim ke file aksi -->
                        <input type="hidden" name="id" value="<?php echo $d['id_console']; ?>">
                        <input type="text" class="form-control" name="jenis_console" placeholder="Masukkan console .." value="<?php echo $d['jenis_console']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Harga sewa</label>
                        <input type="text" class="form-control" name="harga_sewa" placeholder="Masukkan harga .." value="<?php echo $d['harga_sewa']; ?>">
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
