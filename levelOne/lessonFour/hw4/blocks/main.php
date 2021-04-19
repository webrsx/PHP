<?php
    $namePhoto = scandir("img/small");
    for($i=2; $i < count($namePhoto); $i++):?>
    <a class="link-a" href="server.php?photoname=<?= $namePhoto[$i]?>" target="_blank" style="background: url(img/small/<?= $namePhoto[$i]?>) no-repeat; background-size: cover;"></a>
<?php
    endfor;
?>    
<form action="server.php" method="post" enctype="multipart/form-data">
        Загрузите ваше изображение:<br>
        <input type="file" name="photo" accept="image/*" value="загрузите фото"><br>
        <input type="submit" value="отправить">
</form>
