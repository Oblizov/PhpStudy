<?php





//$name = 'Ivan';
//sayHello($name, 89);
//sayHello(age: 33, name: "Ira");
//function sayHello($name, $age = 16){
//    echo("<div>Hello $name. <br /> I'm $age years old. </div<hr>");
//}

//function getAverageScore($name, ...$scores)
//{
//    $result = 0.0;
//    foreach($scores as $score) {
//        $result += $score;
//    }
//    $result = $result / count($scores);
//    echo "<p>$name: $result</p>";
//}
//getAverageScore("Tom", 5, 5, 4, 5);
//getAverageScore("Bob", 4, 3, 4, 4, 4);
//
//
//function sum(...$numbers)
//{
//    $result = 0;
//    foreach($numbers as $number) {
//        $result += $number;
//    }
//    echo "<p>Сумма: $result</p>";
//}
//$numbers = [3, 5, 7, 8];
//sum(...$numbers);


//function add($a, $b)
//{
//    $sum = $a + $b;
//    echo "sum = $sum<br />";
//
//    return $sum;
//}
//
//$result = add(5, 6);
//
//if($result === null)
//    echo "result равен null";
//else
//    echo "result не равен null";

/**
 * @param $a
 * @param $b
 * @return mixed
 *
 * Анонимные функции
 */
//$sum = function($a, $b)
//{
//    return $a + $b;
//};
//$number = $sum(5, 11);  //16
//echo $number;

/**
 * @param $message
 * @return void
 *
 * callback function
 */
//function welcome($message)
//{
//    $message();
//}
//
//welcome(function()
//{
//    echo "Hello!";
//});
//

//function welcomes($message)
//{
//    $message();
//}
//$goodMorning = function() { echo "<h3>Доброе утро</h3>"; };
//$goodEvening = function() { echo "<h3>Добрый вечер</h3>"; };
//
//welcomes($goodMorning);          // Доброе утро
//welcomes($goodEvening);          // Добрый вечер
//welcomes(function(){ echo "<h3>Привет</h3>"; }); // Привет

/**
 * колбек функция
 */
//function sum($numbers, $condition)
//{
//    $result = 0;
//    foreach($numbers as $number){
//        if($condition($number))
//        {
//            $result += $number;
//        }
//    }
//    return $result;
//}
//
//// для четных чисел
//$isEvenNumber = function($n){ return $n % 2 === 0;};
//// для положительных чисел
//$isPositiveNumber = function($n){ return $n > 0;};
//
//$isNegativeNumber = function($n){ return $n < 0;};
//
//$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
//$positiveSum = sum($myNumbers, $isPositiveNumber);
//$evenSum = sum($myNumbers, $isEvenNumber);
//$negativeSum = sum($myNumbers, $isNegativeNumber);
//echo "Сумма положительных чисел: $positiveSum <br /> Сумма четных чисел: $evenSum  <br /> Сумма отрицательных чисел: $negativeSum";


/**
 * замыкания, использовать переменную которая находится вне анонимной функции
 */
//$a = 8;
//$b = 10;
//
//$closure = function($c) use($a, $b)
//{
//    return $a + $b + $c;
//};
//
//$result = $closure(22); // 40
//echo $result;

/**
 * arrow function
 */

//$a = 8;
//$b = 10;
//
//$closure = fn($c) => $a + $b + $c;
//
//$result = $closure(22); // 40
//echo($result);
//
//function sum($numbers, $condition)
//{
//    $result = 0;
//    foreach($numbers as $number){
//        if($condition($number))
//        {
//            $result += $number;
//        }
//    }
//    return $result;
//}
//
//$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
//
//$positiveSum = sum($myNumbers, fn($n)=>$n > 0);
//$evenSum = sum($myNumbers, fn($n) => $n % 2 === 0);
//echo "Сумма положительных чисел: $positiveSum <br /> Сумма четных чисел: $evenSum";

/**
 * generator
 * Дело в том, что при работе с массивом весь массив загружается в память.
 * При небольших объемах проблема может быть игнорироваться.
 * Но чем больше размер массива, соответственно тем больше издержки и потери в производительности.
 * Именно эту проблему и призваны решить генераторы,
 * которые извлекают только одно значение одномоментно при обращении к функции,
 * экономя тем самым вычислительные ресурсы.
 */

function generator(){

    yield 21;
}

//foreach(generator() as $number)
//{
//    echo $number; // 21
//}

//----

function generateNumbers()
{
    for ($i = 0; $i <= 5; $i++) {

        yield $i;
    }
}

// аналогично
function generateNumbers1()
{
yield 0;
    yield 1;
    yield 2;
    yield 3;
    yield 4;
    yield 5;
}

//foreach(generateNumbers() as $number)
//{
//    echo $number; // 012345
//}

//-----

//foreach(generateNumbers() as $index => $number)
//{
//    echo "$index - $number<br/>"; // 012345
//}

//----

function generateNumbers2()
{
    yield 1;
    yield from [2, 3, 4];
    yield 5;
}

//foreach(generateNumbers2() as $number)
//{
//    echo $number; // 12345
//}


//----

function generateNumbers4($start, $end)
{
    for($i = $start; $i < $end; $i++){
        yield $i;
    }
}
foreach(generateNumbers4(4, 9) as $number)
{
    echo $number; // 45678
}
