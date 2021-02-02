<!-- 3) Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. -->

<?php
function myAddition($a, $b){
    return $a + $b;   
};
function mySubtraction($a, $b){
    return $a - $b;   
};
function myMultiplication($a, $b){
    return $a * $b;   
};
function myDivision($a, $b){
    return $a / $b;   
};

echo "<br>функция сложения " .myAddition(4, 6);
echo "<br>функция вычитания " .mySubtraction(76, 12);
echo "<br>функция умножения " .myMultiplication(5, 7);
echo "<br>функция деления " .myDivision(8, 3);

// 4)
// Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($a, $b, $operation){
    switch($operation){
        case "addition":
            return myAddition($a, $b);
            break;
        case "subtraction":
            return mySubtraction($a, $b);
            break;
        case "multiplication":
            return myMultiplication($a, $b);
            break;
        case "division":
            return myDivision($a, $b);
            break;
        default:
         echo "Ошибка 5оа5";
    };
};

echo "<br>" .mathOperation(15, 54, "addition");
echo "<br>" .mathOperation(22, 88, "subtraction");
echo "<br>" .mathOperation(654, 123, "multiplication");
echo "<br>" .mathOperation(3214, 634654, "division");
?>