<?php


$a = 5;
$b = 3;
//echo $a + $b;

//echo("$a + \$b = " . $a + $b . '/b');


/**
 * switch
 * switch сравнивает только значение, но не учитывает тип выражения
 */

//$name = 'Ivan';
//switch($name){
//    case 'Anya' :
//        echo('Hello '. $name);
//        break;
//    case 'Vova' :
//        echo('Ella '. $name);
//        break;
//    case 'Ivan' :
//        echo('What\'s up '. $name . '!!!');
//        break;
//    case 'Pavel' :
//        echo('Fuck you, '. $name);
//        break;
//    default:
//        echo "действие по умолчанию";
//        break;
//}

/**
 * march - альтернатива switch
 * match также учитывает тип сравниваемого выражения, важен тип!!!
 */
//$guests = 'Svetal';
//match($guests)
//{
//    'Ira' => $operation = "Ira + 2",
//    'Sveta' => $operation = "Sveta + 3",
//    default => $operation = "действие по умолчанию",
//};
//echo $operation;


/**
 * if else
 *
 * if (0) {}       // false
 * if (-0.0) {}    // false
 * if (-1) {}      // true
 * if ("") {}      // false (пустая строка)
 * if ("a") {}     // true (непустая строка)
 * if (null) {}    // false (значие отсутствует)
 *
 * $a = (2 == "2");    // true (значения равны)
 * $b = (2 === "2");   // false (значения представляют разные типы)
 *
 * $a = (2 != "2");    // false, так как значения равны
 * $b = (2 !== "2");   // true, так как значения представляют разные типы
 *
 * $a = 2 <=> 2;     // 0    (эквивалентно 2 == 2)
 * $b = 3 <=> 2;     // 1    (эквивалентно 3 > 2)
 * $c = 1 <=> 2;     // -1   (эквивалентно 1 < 2)
 */

//$num1 = rand(1, 10);
//$num2 = $num1 = rand(1, 11);;
//$resNum = $num1 + $num2;
//
//if($resNum < 10){
//    echo("result = " . $resNum . ', less 10');
//}
//elseif($resNum > 10 && $resNum < 20){
//    echo("result = " . $resNum . ', more 10');
//}
//else {
//    echo ("Out of range!!!");
//}

/**
 * тернальная опреация
 */
//$a = rand(1, 9);
//$b = rand(1, 9);
//$z = $a < $b ? $a + $b : $a - $b;
//echo ("a = $a, b = $b, z = $z");

