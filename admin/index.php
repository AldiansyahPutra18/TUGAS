<?php include 'header.php'; ?>
<?php 
// Koneksi database
include '../koneksi.php'; 
?>
<div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px"><b>Selamat datang!</b> di sistem informasi Sewa Console.</h4>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h4>Dashboard</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-user"></i> 
                                <span class="pull-right">
                                    <?php 
                                    $pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                                    echo mysqli_num_rows($pelanggan);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Pelanggan
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-retweet"></i> 
                                <span class="pull-right">
                                    <?php 
                                    $console = mysqli_query($koneksi, "SELECT * FROM console");
                                    echo mysqli_num_rows($console);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Console
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-retweet"></i> 
                                <span class="pull-right">
                                    <?php 
                                    $console = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                                    echo mysqli_num_rows($console);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Peminjam
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-retweet"></i> 
                                <span class="pull-right">
                                    <?php 
                                    $console = mysqli_query($koneksi, "SELECT * FROM pengembalian");
                                    echo mysqli_num_rows($console);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Pengembalian
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
