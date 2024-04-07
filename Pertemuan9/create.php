<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Query untuk membuat tabel user
$query = "CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
)";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "Tabel user berhasil dibuat.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>;
