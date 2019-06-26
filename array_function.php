<?php
$fruits = array(
    'coconut',
    'apple',
    'lemon'
);

var_dump($fruits);
echo '<hr>';
// sort array
sort($fruits);
// array after sorting 
var_dump($fruits );

// Sort associative array 
$gender= array( 
    'Michel' => 'Male',
    'Sarah' => 'Female',
    'Ricardo' => 'Male'
);

// value sort 
asort($gender);
arsort($gender);


// value sort reverse
krsort($gender);
//key sort 
ksort($gender);

var_dump($gender);

// to count the number of elements in my array
echo count($gender);


