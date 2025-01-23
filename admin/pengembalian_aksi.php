<?php
// Menghubungkan dengan koneksi
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$console = $_POST['console'];
$jaminan = $_POST['jaminan'];

// Input data ke tabel peminjaman
$query = "INSERT INTO pengembalian (nama, tgl_pinjam, tgl_kembali, console, jaminan) 
          VALUES ('$nama', '$tgl_pinjam', '$tgl_kembali', '$console', '$jaminan')";
mysqli_query($koneksi, $query);

// Redirect ke halaman penyewaan
header("Location: pengembalian.php");
?>