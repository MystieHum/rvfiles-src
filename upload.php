<?php
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    
    $target_dir = 'files/';
    $target_file = $target_dir . basename($file_name);

<<<<<<< HEAD
    if (move_uploaded_file($file_tmp, $target_file)) {
        echo 'File uploaded successfully.<br>';
        echo 'File URL: https://' . $_SERVER['HTTP_HOST'] . '/' . $target_file;
    } else {
        echo 'Error uploading file.';
    }
=======
    if (file_exists($target_file)) {
        echo 'Ошибка загрузки: файл уже существует.';
    } else {
        if (move_uploaded_file($file_tmp, $target_file)) {
            echo 'Файл загружен успешно.<br>';
            echo 'Ссылка на файл: <a style="text-decoration: underline;" id="copythat" href="https://' . $_SERVER['HTTP_HOST'] . '/' . $target_file . '">' . $target_file . '</a>';
        } else {
            echo 'Ошибка загрузки.';
        }
    } 
>>>>>>> 467993ad46603dc5811eeb8ba6261391a88c7b8e
?>