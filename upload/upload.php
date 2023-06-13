<?php
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    
    $target_dir = 'files/';
    $target_file = $target_dir . basename($file_name);

    if (move_uploaded_file($file_tmp, $target_file)) {
        echo 'File uploaded successfully.<br>';
        echo 'File URL: https://' . $_SERVER['HTTP_HOST'] . '/' . $target_file;
    } else {
        echo 'Error uploading file.';
    }
?>