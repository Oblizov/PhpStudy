<?php

/**
 * static variables
 */
//function getCounter()
//{
//    static $counter = 0;
//    $counter++;
//    echo $counter;
//}
//getCounter(); // counter=1
//getCounter(); // counter=2
//getCounter(); // counter=3

/**
 * global variables
 */
//$name = "Tom";
//function hello()
//{
//    $sureName = 'rrrr';
//    global $name;
//    echo "Hello " . $name;
//}
//hello();
//echo ($sureName); // ошибка видна только в функции

//$namess = "Tom";
//function changeName()
//{
//    $username = $GLOBALS["namess"];
//    echo "Старое имя: $username <br>";
//    // изменяем значение переменной $name
//    $GLOBALS["namess"] = "Tomas";
//}
//changeName();
//echo "Новое имя: " . $namess;

//$condition = true;
//for($i = 0; $i < 4; $i++){
//    if($condition){
//
//        $names = "Tom";
//        echo "hello\n";
//    }
//}
//
//echo $names; // Tom


/**
 * @const
 */
//const PI = 3.14;
//if (!defined("PI"))
//    define("PI", 3.14);
//else
//    echo "Константа PI уже определена";
//
//define("NUMBER", 22);
//echo NUMBER;    // 22


// проверка на инициализацию переменной
//$message = 'qqq';
//if(isset($message))
//    echo $message;
//else
//    echo "переменная message не определена";

// проверка на значение в переменной
//$message = "Hello";
//if(empty($message))
//    echo "переменная message не определена";
//else
//    echo $message;

// уничтожить переменную
//$a=20;
//echo $a; // 20
//unset($a);
//echo $a; // ошибка, переменная не определена


/**
 * приведение типов переменных

is_integer($a): возвращает значение true, если переменная $a хранит целое число

is_string($a): возвращает значение true, если переменная $a хранит строку

is_double($a): возвращает значение true, если переменная $a хранит действительное число

is_numeric($a): возвращает значение true, если переменная $a представляет целое или действительное число или является строковым представлением числа. Например:

is_bool($a): возвращает значение true, если переменная $a хранит значение true или FALSE

is_scalar($a): возвращает значение true, если переменная $a представляет один из простых типов: строку, целое число, действительное число, логическое значение.

is_null($a): возвращает значение true, если переменная $a хранит значение null

is_array($a): возвращает значение true, если переменная $a является массивом

is_object($a): возвращает значение true, если переменная $a содержит ссылку на объект
 */

// получить тип
$a = 10;
$b = "10";
echo gettype($a); // integer
echo "<br>";
echo gettype($b);  // string
echo "<br>";

$a = 10;
$b = "10";
echo is_numeric($a);
echo "<br>";
echo is_numeric($b);
echo "<br>";


// установить имя и тип переменной
$a = 10.7;
settype($a, "integer");
echo $a; // 10
echo "<br>";

// преобразование типа переменной
$boolVar = false;
$intVar = (int)$boolVar; // 0
echo "boolVar = $boolVar<br>intVar = $intVar";