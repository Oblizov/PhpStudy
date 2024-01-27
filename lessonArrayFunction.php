<?php

// проверка на массив
$users = ["Tom", "Bob", "Sam"];
$isArray = is_array($users);
echo ($isArray==true)?"это массив":"это не массив";
echo "<br>";

// число элементов в массиве
$users = ["Tom", "Bob", "Sam"];
$number = count($users);
// то же самое, что
// $number = sizeof($users);
echo "В массиве users $number элемента/ов";
echo "<br>";

// перемешивание элементов в массиве
$users = ["Tom", "Bob", "Sam", "Alice"];
shuffle($users);
print_r($users);
echo "<br>";

// создание ассициативного массива(мапы)
$model = "Apple II";
$producer = "Apple";
$year = 1978;

$data = compact("model", "producer", "year");
print_r($data);
echo "<br>";

// сортировка массивов
$users = ["Tom", "Bob", "Sam", "Alice"];
asort($users);
print_r($users);

echo "<br>";

/**
 * SORT_REGULAR: автоматический выбор сортировки

 * SORT_NUMERIC: числовая сортировка

 * SORT_STRING: сортировка по алфавиту
 */
asort($users, SORT_STRING);

// Чтобы отсортировать массив в обратном порядке, применяется функция arsort:

$states = ["Spain" => "Madrid", "France" => "Paris", "Germany" => "Berlin", ];
asort($states);
print_r($states);
// массив после asort   - сортировка по значениям элементов
// Array ( [Germany] => Berlin [Spain] => Madrid [France] => Paris )

ksort($states);
print_r($states);
// массив после ksort - сортировка по ключам элементов
//  Array ( [France] => Paris [Germany] => Berlin [Spain] => Madrid )
echo "<br>";
// Сортировка по ключам в обратном порядке выполняется функцией krsort():

// Естественная сортировка
$os = array("Windows 7", "Windows 8", "Windows 10");
natsort($os);
print_r($os);
// результат
// Array ( [0] => Windows 7 [1] => Windows 8 [2] => Windows 10)
echo "<br>";
// Если нам надо еще при этом, чтобы сортировка не учитывала регистр, то мы можем применить функцию natcasesort():