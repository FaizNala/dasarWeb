<?php
    $myArray = array(); // array kosong
    if (empty($myArray)) {
        echo "Array tidak terdefinisi atau kosong";
    } else {
        echo "Array terdefinisi dan tidak kosong";
    }

    echo "<br><br><hr><br>";

    //$nonExistentVar = 1;
    if (empty($nonExistentVar)) {
        echo "Varaibel tidak terdefinisi atau kosong";
    } else {
        echo "Variabel terdefinisi dan tidak kosong";
    }
?>;