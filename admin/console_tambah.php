<?php include 'header.php'; ?>

<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Console</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="console_aksi.php">
                    <div class="form-group">
                        <label for="jenis_console">Jenis Console</label>
                        <input type="text" class="form-control" id="jenis_console" name="jenis_console" placeholder="Masukkan console ..">
                    </div>
                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa</label>
                        <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" placeholder="Masukkan harga ..">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="console.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
