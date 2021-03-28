<?php 

//5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

function replacement($str){
    echo "$str<br>";
    $array = explode(" ", $str);
    $newStr = implode("_", $array);
    echo $newStr;
};

replacement("тест пробела а может двух пробелов")

?> 