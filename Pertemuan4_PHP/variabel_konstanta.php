<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahaan $angka1 dan $angka2 adalah $hasil.";

$benar = true;
$salah = false;
echo "Variabel benar : $benar, Variabel salah : $salah";

// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2003);

echo "Selamat datang di " . NAMA_SITUS . ", stiyus yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>