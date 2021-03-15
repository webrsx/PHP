<!-- 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты -->

<?php
function endOfMinutes($minutes){
    if($minutes){
        if($minutes%10 == 0 || $minutes%10 >= 5){
            echo "$minutes минут";
        }
        elseif($minutes%10 == 1){
            "$minutes минута";
        }
        elseif($minutes%10 >= 2 || $minutes%10 <= 4){
            "$minutes минуты";
        }
        else {
            "$minutes мин.";
        }
    }
};
function endOfHours($hour){
    if($hour == 0 || ($hour >=5 && $hour <= 20)){
        echo "$hour часов&nbsp";
    }
    elseif($hour == 1 || $hour == 21){
        echo "$hour час&nbsp";
    }
    elseif(($hour >= 2 && $hour <= 4) || ($hour >= 22 && $hour <= 24)){
        echo "$hour часа&nbsp";
    }
    else {
        echo "$hour ч.&nbsp";
    }
};
endOfHours(date('G'));
endOfMinutes(date("i"));
?>