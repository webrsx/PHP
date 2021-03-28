<?php
 //*Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».

$areaArray = [
    "Московская область" => [
        "Апрелевка" => [30669],
        "Балашиха" => [507366],
        "Кубинка" => [20138]
    ],
    "Ленинградская область" =>[
        "Бокситогорск" => [15091],
        "Волосово" => [11828],
        "Волхово" => [44256],
        "Карамальк" => [43246]
    ],
    "Магаданская область" => [
        "Магадан" => [92052],
        "Сусуман" => [4355],
        "Кандагар" => [25999]
    ]

];
foreach($areaArray as $area => $cityArray){
    echo "$area: <br>";
    foreach($cityArray as $city => $populationArray){
        //substr изменит значение переменной city на true
        $cityBeforeChanges = $city;
        // проверка первой буквы
        $firstLetter = mb_substr ($city, 0, $city = mb_internal_encoding("UTF-8"));
        if($firstLetter == "К"){
            echo "$cityBeforeChanges с населением: ";
            foreach($populationArray as $population){
            echo "$population человек <br>";
            }
        }
    }
}

?>