<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Data yang akan dimasukkan
$username = "admin";
$password = "123";

// Hash password menggunakan MD5
$password_hashed = md5($password);

// Query untuk memasukkan data ke dalam tabel user
$query = "INSERT INTO user (username, password) VALUES ('$username', '$password_hashed')";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil dimasukkan ke tabel user.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>;
