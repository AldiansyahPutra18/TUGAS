<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Pelanggan</h4>
            </div>
            <div class="panel-body">
                <?php
                // Menghubungkan koneksi
                include '../koneksi.php';
                // Menangkap id yang dikirim melalui URL
                $id = $_GET['id'];
                // Mengambil data pelanggan yang memiliki id di atas dari tabel pelanggan
                $data = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id_pelanggan='$id'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <form method="post" action="pelanggan_update.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <!-- Form id pelanggan yang diedit, untuk dikirim ke file aksi -->
                        <input type="hidden" name="id" value="<?php echo $d['id_pelanggan']; ?>">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama .." value="<?php echo $d['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat .." value="<?php echo $d['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" class="form-control" name="telepon" placeholder="Masukkan telepon .." value="<?php echo $d['telepon']; ?>">
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
