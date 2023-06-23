<?php
require('fpdf.php');

if (isset($_FILES['text_file'])) {
    $file = $_FILES['text_file'];

    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileSize = $file['size'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];

    echo $fileName . "<br>" . $fileType . "<br>" . $fileSize . "<br>" . $fileTmpName . "<br>" . $fileError;
}
