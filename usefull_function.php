<?php
/*
$fruits = array(
    'coconut',
    'apple',
    'lemon'
);
ksort($fruits);

var_dump($fruits);
*/
// if a varibale is set(if it has a value )
// declare / initialize 
$x;
$y = 5;
echo isset($y);
var_dump(isset($x));
var_dump(isset($y));


if (empty($x))
    echo 'X is empty';
else 
    echo 'X is not empty';

    // count the number if charchters in an array

$message = 'my message';
echo strlen($message);

