<?php
// Informasi koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'datakerja';

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menambahkan data karyawan baru
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $nama = $_POST['nama'];
    $bagian = $_POST['bagian'];

    $sql = "INSERT INTO karyawan (nama, bagian) VALUES ('$nama', '$bagian')";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success'>Data karyawan berhasil ditambahkan!</p>";
    } else {
        echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

// Menghapus data karyawan berdasarkan ID
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete_id_karyawan'])) {
    $id_karyawan = $_GET['delete_id_karyawan'];
    $sql = "DELETE FROM karyawan WHERE id_karyawan = $id_karyawan";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success'>Data berhasil dihapus!</p>";
    } else {
        echo "<p class='error'>Error: " . $conn->error . "</p>";
    }
}

// Query untuk mengambil data dari tabel 'karyawan'
$sql = "SELECT * FROM karyawan";
$result = $conn->query($sql);

// Fungsi untuk mengunduh data dalam format CSV
if (isset($_GET['download'])) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="data_karyawan.csv"');

    $output = fopen('php://output', 'w');
    fputcsv($output, array('ID', 'Nama', 'Bagian')); // Header CSV

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            fputcsv($output, $row);
        }
    }
    fclose($output);
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        .form-container {
            margin-bottom: 20px;
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .form-container label {
            display: block;
            margin: 8px 0 4px;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            color: #dc3545;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .success {
            color: #28a745;
            font-weight: bold;
        }
        .error {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Daftar Karyawan</h2>

    <!-- Tombol untuk mencetak dan mengunduh data -->
    <div class="form-container">
        <form method="GET" action="">
            <button type="button" onclick="window.print()">Cetak Data</button>
            <button type="submit" name="download">Unduh Data CSV</button>
        </form>
    </div>

    <!-- Form untuk menambahkan data baru -->
    <div class="form-container">
        <form method="POST" action="">
            <label>Nama:</label>
            <input type="text" name="nama" required>
            <label>Bagian:</label>
            <input type="text" name="bagian" required>
            <button type="submit" name="add">Tambah Data</button>
        </form>
    </div>

    <!-- Tabel untuk menampilkan data karyawan -->
    <?php
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Aksi</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_karyawan"] . "</td>
                    <td>" . $row["nama"] . "</td>
                    <td>" . $row["bagian"] . "</td>
                    <td><a href='?delete_id_karyawan=" . $row["id_karyawan"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Tidak ada data karyawan.</p>";
    }

    // Menutup koneksi
    $conn->close();
    ?>
</body>
</html>