<?php
// menghubungkan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$console = $_POST['console'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$harga = $_POST['harga'];
$jaminan = $_POST['jaminan'];
// update data
mysqli_query($koneksi,"update peminjaman set nama='$nama',
console='$console', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali', harga='$harga', jaminan='$jaminan'  where id_peminjaman='$id'");
// mengalihkan halaman kembali ke halaman pelanggan
header("location:penyewaan.php");
?>
