<?php
// menghubungkan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$console = $_POST['console'];
$jaminan = $_POST['jaminan'];
// update data
mysqli_query($koneksi,"update pengembalian set nama='$nama',
tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali', console='$console', jaminan='$jaminan'  where id_pengembalian='$id'");
// mengalihkan halaman kembali ke halaman pelanggan
header("location:pengembalian.php");
?>
