<?php
    // if (isset($_POST["submit"])) {
    //     $targetDDirectory = "uploads/"; // direktori tujuan untuk menyimpan file
    //     $targetFile = $targetDDirectory . basename($_FILES["fileToUpload"]["name"]);
    //     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    //     $allowedExtension = array("jpg", "jpeg", "png", "gif");

    //     $maxFileSize = 5 * 1024 * 1024;

    //     if(in_array($fileType, $allowedExtension) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
    //         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    //             echo "File berhasil diunggah.";
    //         } else {
    //             echo "Gagal mengunggah file.";
    //         }
    //     } else {
    //         echo "File tidak valid atau melebihi ukuran maksimuk yang diizinkan.";
    //     }
    // }

    // if (isset($_POST["submit"])) {
    //     $targetDDirectory = "uploads/"; // direktori tujuan untuk menyimpan file
    //     $targetFile = $targetDDirectory . basename($_FILES["fileToUpload"]["name"]);
    //     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    //     $allowedExtension = array("jpg", "jpeg", "png", "gif");
    
    //     $maxFileSize = 5 * 1024 * 1024;
    
    //     if(in_array($fileType, $allowedExtension) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
    //         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    //             echo "File berhasil diunggah.";
    
    //             // Create thumbnail
    //             $thumbnailPath = $targetDDirectory . "thumbnail_" . basename($_FILES["fileToUpload"]["name"]);
    //             list($width, $height) = getimagesize($targetFile);
    //             $newWidth = 200;
    //             $newHeight = round(($height / $width) * $newWidth);
    //             $thumb = imagecreatetruecolor($newWidth, $newHeight);
    //             if ($fileType == "jpg" || $fileType == "jpeg") {
    //                 $source = imagecreatefromjpeg($targetFile);
    //             } elseif ($fileType == "png") {
    //                 $source = imagecreatefrompng($targetFile);
    //             } elseif ($fileType == "gif") {
    //                 $source = imagecreatefromgif($targetFile);
    //             }
    //             imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
    //             if ($fileType == "jpg" || $fileType == "jpeg") {
    //                 imagejpeg($thumb, $thumbnailPath);
    //             } elseif ($fileType == "png") {
    //                 imagepng($thumb, $thumbnailPath);
    //             } elseif ($fileType == "gif") {
    //                 imagegif($thumb, $thumbnailPath);
    //             }
    //             imagedestroy($thumb);
    
    //             echo "Thumbnail berhasil dibuat.";
    //         } else {
    //             echo "Gagal mengunggah file.";
    //         }
    //     } else {
    //         echo "File tidak valid atau melebihi ukuran maksimuk yang diizinkan.";
    //     }
    // }

    if (isset($_POST["submit"])) {
        $targetDirectory = "documents/"; // direktori tujuan untuk menyimpan dokumen
        $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
        $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
        $allowedExtensions = array("txt", "pdf", "doc", "docx");
    
        $maxFileSize = 10 * 1024 * 1024;
    
        if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
                echo "Dokumen berhasil diunggah.";
            } else {
                echo "Gagal mengunggah dokumen.";
            }
        } else {
            echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
    

?>;