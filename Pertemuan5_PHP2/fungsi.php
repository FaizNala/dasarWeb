<?php
    // fungsi
    // function perkenalan() {
    //     echo "Assalamualaikum, ";
    //     echo "Perkenalkan, nama sata Nala <br>";
    //     echo "Senang berkenalan dengan anda<br><br>";
    // }

    // for ($i = 0; $i < 2; $i++) {
    //     perkenalan();
    // } 

    // // fungsi dengan paramter
    // function perkenalan($nama, $salam) {
    //     echo $salam . ", ";
    //     echo "Perkenalkan, nama saya $nama <br>";
    //     echo "$salam<br><br>";
    // }

    // perkenalan("Hamdana", "Hallo");

    // echo "<hr>";

    // $saya = "Elok";
    // $ucapanSalam = "Selamat pagi";

    // perkenalan($saya, $ucapanSalam);

    // // parameter dengan nilai default
    // function perkenalan($nama, $salam = "Assalamualaikum") {
    //     echo $salam . ", ";
    //     echo "Perkenalkan, nama saya $nama <br>";
    //     echo "$salam<br><br>";
    // }

    // perkenalan("Hamdana", "Hallo");

    // echo "<hr>";

    // $saya = "Elok";
    // $ucapanSalam = "Selamat pagi";

    // perkenalan($saya);

    // // fungsi yang mengembalikan nilai
    // function hitungUmur($thn_lahir, $thn_sekarang) {
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }

    // echo "Umur saya adalah " . hitungUmur(2003, 2024) . " tahun"

    // // memanggil fungsi dalam fungsi
    function hitungUmur($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur; 
    }
    function perkenalan ($nama, $salam = "Assalamualaikum") {
        echo $salam. ", ";
        echo "Perkenalkan, nama saya $nama <br>";

        echo "Saya berusia " . hitungUmur(2003, 2024) . " tahun<br>";
        echo "Senang berkenalan dengan anda <br>";
    }

    perkenalan('Elok')
?>