<?php

class Person
{

    public $name, $age = 23;

    function hello(){
        echo("Hello!<br>");
    }

    function greetings(){
        return "Greetings, ";
    }

    function displayInfo()
    {
        echo $this->greetings() . "Name: " . $this->name ."; Age: " . $this->age . "<br>";
        // также можно написать
        // echo "Name: $this->name; Age: $this->age<br>";
    }
}


$person = new Person();
print_r($person);
echo("<br>");

$tom = new Person();
$tom->name = "Tom"; // установка свойства $name
$tom->age = 36; // установка свойства $age
$personName = $tom->name;    // получение значения свойства $name
echo "Имя пользователя: " . $personName . "<br>";
$tom->hello(); // вызов метода hello()
print_r($tom);
echo("<br>");
$tom->displayInfo();
echo("<br>");

$tomas = new Person();
$tomas -> name = "Tom";
$tomas -> age = 36;

if($tom == $tomas) echo "переменные tom и tomas равны<br>";
else echo "переменные tom и tomas НЕ равны<br>";

if($tom === $tomas) echo "переменные tom и tomas эквивалентны";
else echo "переменные tom и tomas НЕ эквивалентны";