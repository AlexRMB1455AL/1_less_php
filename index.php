?php

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

echo log(120), sin(12), min(max(12, 14), min(3, 4)), round(5.5), abs(1/5), decbin(10), cos(34) ;

/*str*/
$arr1 = [1, 2, 3, "tr"];
$foo = 'hello';
$foo1 = 'aNIMAL';
$foo = ucfirst($foo);
echo $foo, ucfirst($foo1);

$str = "some string 10";
$res = str_replace(' 10', '', $str);
echo $res;

echo str_increment('ABC'), chr(34), hex2bin("0942346f465787da"), bin2hex("ABCD"), rtrim("ABCD "), "D", implode($arr1), ord($foo), ucwords($foo1 . $foo);

/*arr*/
$arr3 = [1, 2, 3, "tr"];
array_push($arr3, 67);
var_dump($arr3);
echo max($arr3);
$arr3 = [
    'key1' => 1,
    'key2' => 2,
    'key3' => 3,
    "tr" => 17,
    [
        1,
        67,
    ]
];
echo $arr3['key3'];
$arr3['last'] = 67;
echo $arr3['last'];

$arr4 = [['id' => 1, 'name' => 'John',], ['id' => 2, 'name' => 'Jim',], 'id' => 101,];
$res_ac = array_column($arr4, 'name');
/*print_r ($res_ac);

print_r (array_diff($arr, $arr3));

print_r (array_keys($arr4));

print_r (array_merge($arr3, $arr4, $arr1));

$arr5 = array_push($arr1,  123);

$arr6 = array_replace($arr3, $arr4);
*/
/*arrEnd*/

/*if*/

$num = 165;
$res = 'Good';

if ($num >= 150) {

    $res = 'Success';

} elseif ($num === 90) {
    $res = 'Sad';
}

else {
    $res = 'Super Sad';
}

echo $res;

$gender = 'Male';
$age = 20;

if ($gender == 'Male' && $age >= 18) {
    $res = 'Saccess';
} elseif ($gender != 'Male' || $age >= 28) {
    $res = 'Go to the Restoran';

} else {
    $res = 'Waiting somebody else';
}
echo $res;

/*ifEnd*/

/*iter*/

$arr7 = [
    'mon' => 10,
    'tu' => 20,
    'the' => 30,
    'fr' => 40,
    50,
    60,
    70,
    80,
    90,
    100,
    ];

foreach ($arr7 as $value) {

    if ($value > 40) {
        echo $value . PHP_EOL;
        if ($value > 95){
            echo 'more 95 ', $value . PHP_EOL;
            break;
        }
        if ($value == 70 || $value == 80) {
            echo '70 or 80' . PHP_EOL;
        }
    }
}
foreach ($arr7 as $key => $value) {


        echo $key . PHP_EOL;
        echo $value . PHP_EOL;
        echo '--------------' . PHP_EOL;

}
/*iter*/

$numbers = [];
$strings = [];
$bools = [];
$arrs = [];

$arr8 = [
    20,
    30,
    40,
    50,
    'fgkjghk',
    'ydfvjh',
    'wetrfgfxc',
    'gdrssdx',
    false,
    true,
    [12, 13, 14],
    ['yfhg', 'edfyuyg', 'utfhik'],
    [18, 19, 22, false],
    [989, 457687, 97655],

];


foreach ($arr8 as $value) {

    if (is_numeric($value)) {
        $numbers[] = $value;
    } elseif (is_string($value)) {
        $strings[] = $value;
    } elseif (is_bool($value)) {
        $bools[] = $value;
    } elseif (is_array($value)) {
        $arrs[] = $value;
    }
}

var_dump($numbers);
var_dump($strings);
var_dump($bools);
var_dump($arrs);
