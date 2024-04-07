<?php
// if (isset($_FILES["file"])) {
//     $errors = array();
//     $file_name = $_FILES["file"]["name"];
//     $file_size = $_FILES["file"]["size"];
//     $file_tmp = $_FILES["file"]["tmp_name"];
//     $file_type = $_FILES["file"]["type"];
//     @$file_ext = strtolower("" . end(explode(".", $_FILES["file"]["name"])) . "");
//     $extension = array("pdf", "doc", "docx", "txt");
//     // $extension = array("jpg", "jpeg", "png");

//     if(in_array($file_ext, $extension) == false) {
//         $errors[] = "Ekstensi file yang diizinkan adaf PDF, DOC, DOCX, atau TXT.";
//         // $errors[] = "Ekstensi file yang diizinkan adaf JPG, JPEG, PNG.";
//     }

//     if ($file_size > 2097152) {
//         $errors[] = "Ukuran file tidak boleh lebih 2 MB";
//     }

//     if(empty($errors) == true) {
//         move_uploaded_file($file_tmp, "documents/" .$file_name);
//         // move_uploaded_file($file_tmp, "images/" .$file_name);
//         echo "FIle berhasil diunggah";
//         // move_uploaded_file($file_tmp, "images/" .$file_name);
//         // echo "Gambar berhasil diunggah";
//     } else {
//         echo implode(" ", $errors);
//     }
// }


$targetDirectory = "uploads/"; // Tentukan direktori penyimpanan file

if (isset($_FILES["files"])) {
    $errors = array();
    //$extension = array("pdf", "doc", "docx", "txt");
    $extension = array("jpg", "jpeg", "png", "js");

    foreach ($_FILES["files"]["name"] as $key => $fileName) {
        $file_name = $_FILES["files"]["name"][$key];
        $file_size = $_FILES["files"]["size"][$key];
        $file_tmp = $_FILES["files"]["tmp_name"][$key];
        $file_type = $_FILES["files"]["type"][$key];
        @$file_ext = strtolower(end(explode(".", $file_name)));

        if (!in_array($file_ext, $extension)) {
            //$errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, dan JS.";
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
        }

        if (empty($errors)) {
            $targetFile = $targetDirectory . $file_name;
            if (move_uploaded_file($file_tmp, $targetFile)) {
                echo "File $file_name berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $file_name.<br>";
            }
        } else {
            echo implode(" ", $errors);
        }
    }
}

?>;