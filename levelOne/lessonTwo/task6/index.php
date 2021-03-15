<!-- *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень. -->

<?php
    function power($val, $pow){
        if($pow == 1){
            echo "Вот тут значение есть: $val <br>";
            return $val;
        }
        $result = $val;
        recursion($val, $pow, $result);
    }
    function recursion($val, $pow, $result){
        if($pow == 1){
            return power($result, 1);
        }
        $result *= $val;
        recursion($val, $pow-1, $result);
    }

    echo "функция power не возвращает результат. почему? на данном этапе для меня это остается нерешенной загадкой, по мере прокачки узнаем!". power(7, 4);
?>