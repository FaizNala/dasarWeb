<?php
    // $pesan = "Saya arek Malang";
    // echo strrev($pesan) . "<br";

    $pesan = "Saya arek malang";
    // ubah variabel pesan menjadi array denga peritah explode
    $pesanPerKata = explode(" ", $pesan);
    // ubah setiap kata dalam array menjadi kebalikannya
    $pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
    // gabugkan kembali array menjadi string
    $pesan = implode(" ", $pesanPerKata);

    echo $pesan . "<br>";

?>