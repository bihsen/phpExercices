<?php

// Test something 

/*if ($condition) {
    echo 'Its\'s tru e';
    echo  'blablabla' ;
}else{
    echo 'It is not true';
}
*/

/*$test = true;

if ($test == true)
    echo 'It is true';
else 
    echo 'It is false';
*/


$x = 10;
$y = 5;
if($x == $y)
    echo 'Two values are the same ';
else if ($x > $y)
    echo 'X value is bigger ';
else if ($x < $y)
    echo 'Y value is bigger';

if ($x >= $y)
    echo 'X is greater or equal to Y';

    if ($x != $y)
        echo 'Both values are different ';

        $results = ($x == $y) ?  " It's true " : "it's not true";
        echo '<br>' . $results;