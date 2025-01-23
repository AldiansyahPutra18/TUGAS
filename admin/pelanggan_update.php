<?php
// menghubungkan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
// update data
mysqli_query($koneksi,"update pelanggan set nama='$nama',
telepon='$telepon', alamat='$alamat' where id_pelanggan='$id'");
// mengalihkan halaman kembali ke halaman pelanggan
header("location:pelanggan.php");
?>
