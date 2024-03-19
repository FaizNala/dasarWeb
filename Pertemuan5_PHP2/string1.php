<?php

    $loremIpsum = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis ratione omnis sapiente ex doloribus fuga, optio voluptate repudiandae qui autem ipsam.';

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang karakter : " . strlen($loremIpsum) . "<br>";
    echo "Panjang kata : " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";
?>