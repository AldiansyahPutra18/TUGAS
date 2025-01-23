<?php
// menghubungkan koneksi
include '../koneksi.php';
// menangkap data id yang dikirim dari url
$id = $_GET['id'];
// menghapus pelanggan
mysqli_query($koneksi,"delete from peminjaman where id_peminjaman='$id'");
// alihkan halaman ke halaman pelanggan
header("location:penyewaan.php");
?>