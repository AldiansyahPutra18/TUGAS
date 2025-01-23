<?php
// Menghubungkan dengan koneksi
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$console = $_POST['console'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$harga = $_POST['harga'];
$jaminan = $_POST['jaminan'];

// Input data ke tabel peminjaman
$query = "INSERT INTO peminjaman (nama, console, tgl_pinjam, tgl_kembali, harga, jaminan) 
          VALUES ('$nama', '$console', '$tgl_pinjam', '$tgl_kembali', '$harga', '$jaminan')";
mysqli_query($koneksi, $query);

// Redirect ke halaman penyewaan
header("Location: penyewaan.php");
?>