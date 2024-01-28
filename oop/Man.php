<?php

class Man
{
    public $name, $age;
    function __construct($name = "Al",
                         $age = 21,
                         $weight = 80,
                         $height = 180)
    {
        $this->name = $name;
        $this->age = $age;

        $this->weight = $weight;
        $this->height = $height;
    }

    function displayInfo()
    {
        echo "Name: $this->name; Age: $this->age<br>";
    }

    // уничтожает объекты
    function __destruct(){
        echo("Call destructor class Person");
    }
}

$tom = new Man("Tom", 36);
$tom -> displayInfo();

$bob = new Man("Bob");
$bob -> displayInfo();

$al = new Man();
$al -> displayInfo();

$dave = new Man('Dave', 24, 190, 95);
echo $dave->weight;
echo("<br>");
echo $dave->height;




