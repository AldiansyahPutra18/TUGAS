<?php
// menghubungkan koneksi
include '../koneksi.php';
// menangkap data id yang dikirim dari url
$id = $_GET['id'];
// menghapus pelanggan
mysqli_query($koneksi,"delete from pengembalian where id_pengembalian='$id'");
// alihkan halaman ke halaman pelanggan
header("location:pengembalian.php");
?>