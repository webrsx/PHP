<!-- Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. -->

<?php
    $num = rand(0, 15);
    switch($num){
        case 0: 
            echo " " .$num++;
        case 1: 
            echo " " .$num++;
        case 2: 
            echo " " .$num++;
        case 3: 
            echo " " .$num++;
        case 4: 
            echo " " .$num++;
        case 5:
            echo " " .$num++;
        case 6: 
            echo " " .$num++;
        case 7: 
            echo " " .$num++;
        case 8: 
            echo " " .$num++;
        case 9: 
            echo " " .$num++;
        case 10: 
            echo " " .$num++;
        case 11:
            echo " " .$num++;
        case 12: 
            echo " " .$num++;
        case 13: 
            echo " " .$num++;
        case 14: 
            echo " " .$num++;
        case 15:
            echo " " .$num++;
            break;
        default;
        echo "ошибка 364";
    };
?>