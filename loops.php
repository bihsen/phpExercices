<?php
//For loop
for ($i=0; $i <= 10 ; $i++) { 
    echo $i . '<br>';
}

echo '<hr>';
// Loop throught an array
$fruits = array(
    'Apple',
    'Coconut',
    'Lemon'
);
$size =count($fruits);
for ($i=0; $i < $size ; $i++) { 
    echo $fruits[$i]. '<br>';
}
echo '<hr>';
// While 
//Display all the numbers from 0 to 10
$i = 0;
while($i<=10){
    echo $i . '<br>';
    $i++;
}

echo '<hr>';

$i = 0;
while(true){
    echo $i . '<br>';
    if($i == 10)
    break;
    $i++;
}
//Do while 
$test = false;
do{
    echo 'Hello';
    //instructions 
}while($test);

echo '<hr>';

$i = 0;
do{
    echo $i . '<br>';
    $i++;
}while ($i <= 10);

echo '<hr>';
// Foreach
foreach ($fruits as $key => $value) {
    echo 'Key :' . $key;
    echo '/Value:'.$value . '<br>';
}


echo '<hr>';
$countries = array(
    'Luxembourg' => 600000,
    'France' => 1700000
);




foreach ($countries as $country => $people) {
    echo $country . '/' . $people . '<br>';
}