<?php

// пример без использования ссылки
//$tom = "Tom";
//$sam = $tom;
//$sam = "Sam";
//echo "tom = $tom <br>";   // tom = Tom
//echo "sam = $sam";

// пример использования ссылки
//$tom = "Tom";
//$sam = &$tom;   // передача ссылки
//$sam = "Sam";
//echo "tom = $tom <br>";   // tom = Sam
//echo "sam = $sam";

//передача по ссылки
//function square(&$a)
//{
//    $a *= $a;
//    echo "a = $a";
//}
//
//$number = 5;
//square($number);
//echo "<br />number = $number";

//функция которая возвращает ссылку
function &checkName(&$name)
{
    if($name === "admin") $name = "Tom";
    return $name;
}

$userName = "admin";
$checkedName = &checkName($userName);
echo "<br />userName: $userName";
echo "<br />checkedName: $checkedName";