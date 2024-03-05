<?PHP
$nilaiNumerik = 92;
if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90) {
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}
echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atle tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPertanaman = 10;
$jumlahBuah = 0;

for ($i = 0; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPertanaman);
}

echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah : $totalSkor<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai : $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (lulus) <br>";
}

echo "<br>";

// 4.6
$nilaiSiswa2 = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$total = 0;
$rataRata = 0;

for($i = 0; $i <10; $i++) {
    if ($nilaiSiswa2[$i] > 70 && $nilaiSiswa2[$i] < 92) {
        $total += $nilaiSiswa2[$i]; 
    }
}

$rataRata = $total / 8;
echo "Rata-rata nilai siswa : $rataRata<br><br>";

// 4.7
$harga = 120000;
$diskon = 0.8;

if ($harga >= 100000) {
    $harga *= $diskon; 
}

echo "harga setelah diskon : $harga<br><br>";

// 4.8
$poin = 600;
$hadiahTambahan = ($poin > 500) ? "Ya" : "Tidak";

echo "Total skor pemain adalah: $poin<br>";
echo "Apakah pemain mendapatkan hadiah tambahan ? $hadiahTambahan<br><br>";




?>