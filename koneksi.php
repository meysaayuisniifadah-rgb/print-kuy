<?php
$host     = "localhost";
$username = "root";
$password = "";
$dbname   = "db_print_kuy"; // Database disesuaikan dengan db_print_kuy

// Koneksi awal ke MySQL
$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Buat Database jika belum ada
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    $conn->select_db($dbname);
} else {
    die("Gagal membuat database: " . $conn->error);
}

// Buat Tabel Pesanan jika belum ada
$tableSql = "CREATE TABLE IF NOT EXISTS pesanan (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    whatsapp VARCHAR(20) NOT NULL,
    jenis_layanan VARCHAR(50) NOT NULL,
    jenis_kertas VARCHAR(50) NOT NULL,
    jumlah_halaman INT(11) NOT NULL,
    jumlah_rangkap INT(11) NOT NULL,
    opsi_warna VARCHAR(20) NOT NULL,
    opsi_jilid VARCHAR(50) NOT NULL,
    metode_pengambilan VARCHAR(50) NOT NULL,
    catatan TEXT,
    nama_file VARCHAR(255) NOT NULL,
    tanggal_pesan TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$conn->query($tableSql);
?>