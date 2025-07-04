<?php

//echo 111111111155;
###########
$num = 10;
$float = 10.10;
$bool = true;
$arr = [1, 2, 3, "tr"];
$null = null;
###########
$str = "Hello World! $num ";
$str2 = 'Hello World! $num';
$num  +=  2;

//echo "The number is $num.";
//echo "The number is $str.";

//echo $str . $str2;
//echo "$str  $str2";
echo $null;
var_dump($null);
//var_dump($bool);
//var_dump($num);
//var_dump($arr);

/*fun*/
$num = 1231;
$someNum = 23424;
/*
function hello($some, $someElse)
{
    //$some = 30;
    //echo 10 . PHP_EOL;
    //echo "Hello!";
    //return 10 + $some;
    return  $some . $someElse;
}
//hello();
$res = $num + hello(4, 545);
echo "summ =  $res";
echo hello($num, $num);
*/

function itSumm($number, $number2, $number3)
{
    return $number + $number2 + $number3;
}

echo itSumm(1, $num, 432);
echo " \n";
echo pow(itSumm(2, $num, 4), 3);

echo var_dump(pow(-1, 20));
$result = pow(-1, 20);
echo $result;
