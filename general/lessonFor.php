<?php

/**
 * for
 */
//for ($i = 1; $i < 10; $i++)
//{
//    echo ("Квадрат числа $i равен " . $i * $i . "\n");
//}

/**
 * while
 */
//$counter = 1;
//while($counter<10)
//{
//    echo $counter + $counter . "\n";
//    $counter++;
//}

/** do while */
//$counter = 1;
//do
//{
//    echo $counter + $counter . "\n";
//    $counter++;
//}
//while($counter<10);

/**
 * break
 */
//for ($i = 1; $i < 10; $i++)
//{
//    $result = $i * $i;
//    if($result==25)
//    {
//        break;
//    }
//    echo ("Квадрат числа $i равен $result\n");
//}

/**
 * continue
 */
for ($i = 1; $i < 10; $i++)
{
    if($i==5)
    {
        continue;
    }
    echo ("Квадрат числа $i равен " . $i * $i . "\n");
}
