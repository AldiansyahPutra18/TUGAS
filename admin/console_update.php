<?php
// menghubungkan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$id = $_POST['id'];
$jenis_console = $_POST['jenis_console'];
$harga_sewa = $_POST['harga_sewa'];
// update data
mysqli_query($koneksi,"update console set jenis_console='$jenis_console',
harga_sewa='$harga_sewa' where id_console='$id'");
// mengalihkan halaman kembali ke halaman pelanggan
header("location:console.php");
?>
