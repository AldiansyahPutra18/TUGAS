<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Penyewaan</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="penyewaan_aksi.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama ..">
                    </div>
                    <div class="form-group">
                        <label>Console</label>
                        <input type="text" class="form-control" name="console" placeholder="Pilih Console ..">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input type="date" class="form-control" name="tgl_pinjam" placeholder="Masukan Tanggal Pinjam ..">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tgl_kembali" placeholder="Masukan Tanggal Kembali ..">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="varchar" class="form-control" name="harga" placeholder="Masukkan Harga ..">
                    </div>
                    <div class="form-group">
                        <label>Jaminan</label>
                        <input type="text" class="form-control" name="jaminan" placeholder="Apa jaminannya ..">
                    </div>
                    <div class="form-container">
                       <button type="button" onclick="window.print()">Cetak Data</button>
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="penyewaan.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
