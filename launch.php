<?php
// Задание 1: Определение простой функции и возвращаемые значения. Создайте функцию multiply , которая
// принимает два числа в качестве параметров, умножает их и возвращает результат.

function multiply($a, $b) {
    $result = $a * $b;
    return $result;
    }

// Задание 2: Область видимости переменных. Создайте переменную $globalVar с числом 50 за пределами функции.
// Внутри функции sumGlobal создайте локальную переменную $localVar со значением 100 и сложите ее с $globalVar
//Выведите результат.

$globalVar = 50;
function sumGlobal() {
echo $globalVar;
$localVar = 100;
return $globalVar + $localVar;
}


//Задание 3: Рекурсия. Напишите рекурсивную функцию factorial , которая вычисляет факториал числа. Факториал
//числа n — это произведение всех чисел от 1 до n .

function factorial($n) {
    if ($n <= 1) {
    return 1;
    }
    return $n *factorial($n - 1);
    }

// Задание 4: Анонимные функции. Создайте анонимную функцию, которая принимает строку и выводит её в верхнем
// регистре. Передайте эту функцию в качестве аргумента для функции array_map для обработки массива строк.

$array = ["apple", "banana", "cherry"];
$result = array_map(function(strtoupper $array)) {
return $result;
}, $result;
print_r($result);

// Задание 5: Стрелочные функции. Напишите стрелочную функцию, которая принимает два числа и возвращает их сумму

$sum = fn(3, 4) => 3 + 4;
echo $sum(3, 4);

//Задание 6: Замыкания / Closure. Создайте функцию counter , которая возвращает замыкание. Замыкание должно
// увеличивать счётчик на 1 при каждом вызове.

function counter() {
    $count = 0;
    return function() use ($count) {
    $count++;
    return ++$count;
    };
    }
    $myCounter = $counter;
    echo $myCounter();
    echo $myCounter(); 

// Задание 7: Генераторы и оператор yield. Напишите генератор, который возвращает числа от 1 до 5 с помощью
// оператора yield .

function generateNumbers() {
    for ($i = 1; $i <= 5; i++) {
    yield $i;
    }
    }
    $generator = $generateNumbers;
    foreach (generateNumbers() as $number) {
    echo $number . " "; 
    }

    // Задание 8: Использование встроенных функций. Используя встроенные функции PHP, найдите минимальное и максимальное значения в массиве чисел.
    $array = [3, 7, 2, 8, 4, 10, 1];
    $minValue = min ($array);
    $maxValue = max ($array);
    echo "Минимум: " . $minVAlue. "\n"; 
    echo "Максимум: " . $maxValue . "\n";            
