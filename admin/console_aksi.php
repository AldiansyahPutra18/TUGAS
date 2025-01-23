<?php
// Menghubungkan dengan file koneksi ke database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$jenis_console = $_POST['jenis_console'];
$harga_sewa = $_POST['harga_sewa'];

// Memasukkan data ke tabel "console"
$query = "INSERT INTO console (jenis_console, harga_sewa) VALUES ('$jenis_console', '$harga_sewa')";

if (mysqli_query($koneksi, $query)) {
    // Redirect ke halaman console.php setelah berhasil
    header("Location: console.php");
    exit();
} else {
    // Menampilkan pesan error jika query gagal
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
