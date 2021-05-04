<?php
    require("../config/config.php");

    // функция уменьшает jpeg до переданнных в нее размеров
    function resize_image($original_image, $new_width){
        $original_width = imagesx($original_image);
        $original_height = imagesy($original_image);
        //расчет пропорции фотографии
        $new_height = $original_height/($original_width/$new_width);
        //запись в jpeg с меньшим разрешением
        $new_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($new_image, $original_image,0,0,0,0,$new_width, $new_height, $original_width, $original_height);
        if(imagejpeg($new_image, "../public/img/small/".$_FILES['photo']['name'])){
            header('Location: http://perenewphp/levelOne/lessonFive/templates/index.php');
        }else{
            die("imagejpeg не отработал");
        }
    }

    function addInDB($connect, $name, $path, $size){
        $sql = "INSERT INTO `gallerytable` (`id`, `name`, `path`, `size`, `views`) VALUES (NULL, '$name', '$path', '$size', '0');";
        mysqli_query($connect, $sql);
    }

    function giveMePhoto($connect){
        $sql = "SELECT * FROM `gallerytable` order by views DESC";
        $res = mysqli_query($connect, $sql);
        while($arrayWithPhoto = mysqli_fetch_assoc($res)){
           echo "<a class='link-a' href='../engine/server.php?photoId=". $arrayWithPhoto['id'] . "' target='_blank' style='background: url(../public/img/small/". $arrayWithPhoto['name']. ") no-repeat; background-size: cover;'></a>";
        }
    }
    
    function requestById($connect ,$id){
        $sql = "SELECT * FROM `gallerytable` WHERE id =".$id;
        return mysqli_fetch_assoc(mysqli_query($connect, $sql)); 
    }
    // запрос из базы данных количество просмотров, увеличение на один, отправка обратно в базу данных
    function increaseInViews($connect, $id){
        $sqlRequest = "SELECT `views` FROM `gallerytable` WHERE id = ".$id;
        $array = mysqli_fetch_assoc(mysqli_query($connect, $sqlRequest)); 
        $countViews = $array['views'];
        $countViews += 1;
        $sqlUpdate = "UPDATE `gallerytable` SET `views` = ".$countViews. " WHERE `gallerytable`.`id` = ".$id;
        mysqli_query($connect, $sqlUpdate);
    }

    // если есть загруженное через сайт фото, его переместит в нужную директорию, и вызовет функцию уменьшения фото
    if(move_uploaded_file($_FILES['photo']['tmp_name'], "../public/img/big/".$_FILES['photo']['name'])){
        $original_image = imagecreatefromjpeg('../public/img/big/'.$_FILES['photo']['name']);
        resize_image($original_image, "400");
        addInDB($connect, $_FILES['photo']['name'], "public/img/big/", $_FILES['photo']['size']);
    }

    //если кликнули на минифото, вернет полноразмерную версию
    //так же если от public/scripts/script.js придет запрос на фотографии вернет всю инфу из DB. 
    if($_GET['photoId']){
        increaseInViews($connect, $_GET['photoId']);
        $arrayPhotoInfo = requestById($connect, $_GET['photoId']);
        echo "<img src='../".$arrayPhotoInfo['path'].$arrayPhotoInfo['name']."'>";
        echo "<p>".$arrayPhotoInfo['views']." просмотр(ов)</p>";
    }elseif($_GET['request']){
        giveMePhoto($connect);
    }
?>