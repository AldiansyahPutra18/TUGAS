<!DOCTYPE html>
<html>
<head>
    <title>Sistem Sewa Console</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body style="background:rgb(150, 166, 255);">
    <!-- Cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    <!-- Menu navigasi -->
    <nav class="navbar navbar-inverse" style="border-radius: 0;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PLAYSTASION</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="pelanggan.php"><i class="glyphicon glyphicon-user"></i> Pelanggan</a></li>
                    <li><a href="console.php"><i class="glyphicon glyphicon-list-alt"></i> Console</a></li>
                    <li><a href="penyewaan.php"><i class="glyphicon glyphicon-list-alt"></i> Penyewaan</a></li>
                    <li><a href="pengembalian.php"><i class="glyphicon glyphicon-list-alt"></i> Pengembalian</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="glyphicon glyphicon-wrench"></i> Pengaturan <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                        <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                            <li><a href="ganti_password.php"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><p class="navbar-text">hi <b><?php echo $_SESSION['username']; ?></b> selamat bekerja!</p></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir menu navigasi -->
</body>
</html>
