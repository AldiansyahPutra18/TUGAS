<?php
// menghubungkan dengan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
// input data ke tabel pelanggan
mysqli_query($koneksi,"insert into pelanggan
values('','$nama','$alamat','$telepon')");
header("location:pelanggan.php");
?>
