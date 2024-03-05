<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah : {$hasilTambah} <br>";
echo "Hasil Kurang : {$hasilKurang} <br>";
echo "Hasil Kali : {$hasilKali} <br>";
echo "Hasil Bagi : {$hasilBagi} <br>";
echo "Sisa Bagi : {$sisaBagi} <br>";
echo "Hasil pangkat : {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama : {$hasilSama} <br>";
echo "Hasil tidak sama : {$hasilTidakSama} <br>";
echo "Hasil lebih kecil : {$hasilLebihKecil} <br>";
echo "Hasil lebih besar : {$hasilLebihBesar} <br>";
echo "Hasil  lebih kecil sama : {$hasilLebihKecilSama} <br>";
echo "Hasil  lebih besar sama : {$hasilLebihBesarSama} <br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil and : {$hasilAnd} <br>";
echo "Hasil or : {$hasilOr} <br>";
echo "Hasil not A : {$hasilNotA} <br>";
echo "Hasil  not B: {$hasilNotB} <br><br>";

echo "Hasil tambah sama dengan : ", $a += $b, "<br>";
echo "Hasil kurang sama dengan : ", $a -= $b, "<br>";
echo "Hasil kali sama dengan : ", $a *= $b, "<br>";
echo "Hasil bagi sama dengan : ", $a /= $b, "<br>";
echo "Hasil sisa bagi sama dengan : ", $a %= $b;
echo "<br><br>";

$hasilIndentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik : ", $hasilIndentik, "<br>";
echo "Hasil tidak identik : ", $hasilTidakIdentik, "<br><br>";

$kursi = 45;
$penuh = 28;
$kosong = $kursi - $penuh;
$persentasiKursiKosong = ($kosong/$kursi) * 100;

echo "Persentase kursi Kosong : ", $persentasiKursiKosong, "% <br>";

?>