<?php
function isEven($number){
    return $number % 2 == 0;
}

$arr = range(1, 100);
shuffle($arr );
$arr = array_slice($arr ,0,rand(2,10));
$arrStr = implode(",",$arr);
echo "массив чисел - [$arrStr] <br>";

$arrFilterd = array_filter($arr,"isEven");//array_filter($arr,fn($n)=> $n % 2 == 0 );
$arrFilterdStr = implode(",",$arrFilterd);
echo "только четные - [$arrFilterdStr] <br>";