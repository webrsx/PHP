<?php
    // функция уменьшает jpeg до переданнных в нее размеров
    function resize_image($original_image, $new_width){
        $original_width = imagesx($original_image);
        $original_height = imagesy($original_image);
        //расчет пропорции фотографии
        $new_height = $original_height/($original_width/$new_width);
        //запись в jpeg с меньшим разрешением
        $new_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($new_image, $original_image,0,0,0,0,$new_width, $new_height, $original_width, $original_height);
        if(imagejpeg($new_image, "img/small/".$_FILES['photo']['name'])){
            header('Location: http://perenewphp/levelOne/lessonFour/50/');
        }else{
            die("imagejpeg не отработал"); ;
        }
    }

    if(move_uploaded_file($_FILES['photo']['tmp_name'], "img/big/".$_FILES['photo']['name'])){
        $original_image = imagecreatefromjpeg('img/big/'.$_FILES['photo']['name']);
        resize_image($original_image, "400");
    }
    if($_GET['photoname']){
        $photoName = $_GET['photoname'];
        echo "<img src='img/big/$photoName' alt='что-то пошло не так'>";
    }else{
        header('Location: http://perenewphp/levelOne/lessonFour/50/');
    }
    


    // resolution-разрешение
    // file_exists — Проверяет существование указанного файла или каталога
    // imagesx and imagesy - записывают в переменную height и width.
    // imagecreatefromjpeg — Создает новое изображение из файла или URL
    // imagecopyresampled — Копирование и изменение размера изображения с ресемплированием
    // imagejpeg - либо выводит картинку на экран, либо записывает в фаил
    

    
?>