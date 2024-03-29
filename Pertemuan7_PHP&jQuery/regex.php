<?php
    $pattern = '/[a-z]/'; // Cocokkan hruf kecil
    $text = 'This is a Sampe Text';
    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan";
    } else {
        echo "Tidak ada huruf kecil";
    }

    echo "<br><br><hr><br>";

    $pattern = "/[0-9]+/"; // Cocokkan satu atau lebh digit
    $text = "These are 123 apples.";
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok";
    }

    echo "<br><br><hr><br>";

    $pattern = "/apple/";
    $replacement = "Banana";
    $text = "I like apple pie";
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text; // Output : 'I like banana pie'

    echo "<br><br><hr><br>";

    $pattern = '/go*d/'; // Cocokkan "god', "good", "goood", dll.
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok";
    }

    echo "<br><br><hr><br>";

    $pattern = '/go?d/'; // Cocokkan "god', "good", "goood", dll.
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok";
    }

    echo "<br><br><hr><br>";

    $pattern = '/go{2,2}d/'; // Cocokkan "god', "good", "goood", dll.
    $text = 'god is good';
    if (preg_match($pattern, $text, $matches)) {
        echo "Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok";
    }

?>;