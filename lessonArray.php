<?php

//$num1 = array();
//
//$numbers = [1, 4, 9, 16];
//echo $numbers[1] . "\n";
//$numbers[4] = 10;
//echo $numbers[4];
//
//print_r($numbers); // выводит массив в консоль
//
//$numbers = [0=>2, 1=>5, 2=>8, 3=>17];
//print_r($numbers);

/**
 * перебор массива
 */
$users = ["Tom", "Sam", "Bob", "Alice"];
//$num = count($users);
//for($i=0; $i < $num; $i++)
//{
//    echo "$users[$i] + for \n";
//}

//foreach($users as $element){
//
//    echo "$element + foreach \n";
//}

/**
 * Ассоциативные массивы(мапы)
 */
//$colors = array("red" => "красный", "blue" => "синий", "green" => "зеленый");
//echo ($colors);
//print_r($colors);
//foreach($colors as $color){
//    echo("$color \n");
//}

// переприсваивание существующего элемента массива
//$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
//echo $countries["Spain"];   // Madrid
//echo "\n";
//$countries["Spain"] = "Barcelona";
//echo $countries["Spain"];   // Barcelona

//
//$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
//$countries["Italy"] = "Rome";   // определяем новый элемент с ключом "Italy"
//echo $countries["Italy"]; // Rome
//
//
//$data = [1=> "Tom", "id132" => "Sam", 56 => "Bob"];
//echo $data[1];  // Tom
//echo "\n";
//echo $data["id132"];    // Sam

/**
 * многомерные массивы
 */
$families = [["Tom", "Alice"], ["Bob", "Kate"]];
print_r($families);  // Array ( [0] => Tom [1] => Alice )

$phones = array(
    "apple"=> array("iPhone 12", "iPhone X", "iPhone 12 Pro") ,
    "samsumg"=>array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra"),
    "nokia" => array("Nokia 8.3", "Nokia 3.4"));
foreach ($phones as $brand => $items)
{
    echo "$brand\n";
    foreach ($items as $key => $value)
    {
        echo "$value\n";
    }

}