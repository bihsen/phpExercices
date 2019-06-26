<?php

/*
	- Exercise 1 :
		
		Based on the character exercise, display all his caracteristics using a loop.

	*/

/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

	*/
$array = array(
	"Salad" => "1.03",
	"Tomato" => "2.3",
	"Oignon" => "1.85",
	"Red cabbage" => "0.85"
);

asort($array);
var_dump($array);

echo '<hr>';

krsort($array);
var_dump($array);


echo '<hr>';
$total = 0;
foreach ($array as $key => $value) {
	$total += $value;
}
echo $total;



/*
	- Exercise 3 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 2 etc.

		Do it by using a for AND a while loop
	*/

echo '<hr>';
$myArray = [];
for ($i = 0; $i <= 20; $i++) {
	$myArray[$i] = $i;
}
var_dump($myArray) . '<br>';

/*echo '<hr>';
		$i = 0;
	while($i<=20){
		echo $i . '<br>';
		$i++;
	}*/


/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/




/*while($i<=10){
		$result[$i] = $i*2;
		$i++;
		echo $result[$i];

	}*/
echo '<hr>';

$result = [];
for ($i = 0; $i <= 20; $i++) {
	$result[$i] = $i * 2;
	echo $result[$i] . '<br>';
}





/*
	-Exercise 5 :
		Create a random numerical array.
		Find the smallest value.
		Find the greatest value.
	*/
echo '<hr>';
$numArray = [];
$size = rand(1, 50);
for ($i = 0; $i < $size; $i++) {
	$numArray[$i] = rand(1, 50);
}
echo min($numArray) . '<br>';
echo max($numArray) . '<br>';

echo '<hr>';

// another method 

$mArray = [];
for ($i = 0; $i <= 20; $i++) {
	$mArray[$i] = rand(0, 100);
}
//$max = $mArray[0];
//$min = $mArray[0];
$posMax = 0;
$posMin = 0;

foreach ($mArray as $key => $val) {

	if ($mArray[$posMax] < $val) {

		$posMax = $key;
	}

	if ($mArray[$posMin] > $val) {

		$posMin = $key;
	}
}
var_dump($mArray);
echo "the lowest value:" . $mArray[$posMin] . '<br>';
echo "it's position:" . $posMin . '<br>';
echo "the greatest value" . $mArray[$posMax] . '<br>';
echo "it's position:" . $posMax . '<br>';


//echo 'the smallest number is:'. min($mArray). '<br>';
//echo 'the biggest number is:'. max($mArray);


echo '<hr>';

/*
	- Exercise 1 :
		
		Write a PHP script which displays this pattern : 
			* 
			* * 
			* * * 
			* * * * 
			* * * * * 

		You have to use a loop inside another loop to do this !

	*/
$myStar = "*";
for ($i = 0; $i <= 4; $i++) {

	for ($x = 0; $x <= $i; $x++) {
		echo $myStar;
	}
	echo '<br>';
}


echo '<hr>';

/*
	- Exercise 2 : 
	Write a PHP script which displays this pattern : 
	* 
	* * 
	* * * 
	* * * * 
	* * * * * 
	* * * * * 
	* * * * 
	* * * 
	* * 
	* 
	
	*/

$myStar = "*";
for ($i = 0; $i <= 4; $i++) {

	for ($x = 0; $x <= $i; $x++) {
		echo $myStar;
	}
	echo '<br>';
}
for ($i = 4; $i >= 0; $i--) {

	for ($x = 0; $x <= $i; $x++) {
		echo $myStar;
	}
	echo '<br>';
}
/*
	 //* This loop  is for the rows
	 for ($i = 0; $i < 5 ; $i++) {

		//* This loop is for the columns
		for ($colomn = 0; $colomn <= $i; $colomn++) {
			echo "* ";
		}
		echo "<br>";
	}

	//* This loop  is for the rows
	for ($i = 4; $i >= 0; $i--) {

		//* This loop is for the columns
		for ($x = 0; $x <= $i; $x++) {
			echo "* ";
		}
		echo "<br>";
	}


/*

	
	echo '<hr>';


	/*
	- Exercise 3 : 

		We already have two arrays :
	    $artists = array(
	        0 => array("Eminem", "IAM"), 
	        1 => array("Madonna", "Katy Perry"), 
	        2 => array("Pink Floyd", "AC/DC")
	    );
    
    
    
	    $style = array(
	        0 => "Rap",
	        1 => "Pop", 
	        2 => "Rock"
	    );   
    
 
 		Write a PHP script which merge the two arrays to have a single array looking like this :

		    $array3 =  array (      
		        "Rap" => Array (          
		            [0] => "Eminem",              
		            [1] => "IAM"    
		        ),  
		        "Pop" => Array (          
		            [0] => "Madonna",              
		            [1] => "Katy Perry"    
		        ),
		        "Rock" => Array (          
		            [0] => "Pink Floyd",              
		            [1] => "AC/DC"    
		        )            
		    )
	*/

$artists = array(
	0 => array("Eminem", "IAM"),
	1 => array("Madonna", "Katy Perry"),
	2 => array("Pink Floyd", "AC/DC")
);



$style = array(
	0 => "Rap",
	1 => "Pop",
	2 => "Rock"
);

$array4 = [];
foreach ($style as $key => $value) {
	$array4[$value] = $artists[$key];
}
var_dump($array4);

/*
	-Exercise 4 :
	
		We have an array of bank transactions, which indicates the credit and debit amounts of each person.
		For each person, calculate the real amount of their account and it as a key/value in the array.

		$transactions = array(
		    "Marie" => array(
		        "debit"=>6,
		        "credit"=>9
		    ),
		    "Julien" => array(
		        "debit"=>21,
		        "credit"=>19
		    ),
		    "Sophie" => array(
		        "debit"=>15,
		        "credit"=>14
		    ),
		    "John" => array(
		        "debit"=>10,
		        "credit"=>14
		    )
		);

		// Expected results : 
		$transactions = array(
		    "Marie" => array(
		        "debit"=>6,
		        "credit"=>9,
		        "amount"=>3
		    ),
		    "Julien" => array(
		        "debit"=>21,
		        "credit"=>19,
		        "amount"=>-2
		    ),
		    "Sophie" => array(
		        "debit"=>15,
		        "credit"=>14,
		        "amount"=>-1
		    ),
		    "John" => array(
		        "debit"=>10,
		        "credit"=>14,
		        "amount"=>4
		    )
		);
	*/




$transactions = array(
	"Marie" => array(
		"debit" => 6,
		"credit" => 9
	),
	"Julien" => array(
		"debit" => 21,
		"credit" => 19
	),
	"Sophie" => array(
		"debit" => 15,
		"credit" => 14
	),
	"John" => array(
		"debit" => 10,
		"credit" => 14
	)
);

echo '<hr>';
$amount = 0;
foreach ($transactions as $key => $value) {
	$amount = $value['debit'] - $value['credit'];
	$transactions[$key]['amount'] = $amount;
}
var_dump($transactions);


/*
	- Final exercise - ONLY FOR THE BEASTS

		We have an array of integers, unsorted, with all numbers from 1 to
		 50 BUT one element is missing (the array is therefore 49).
		
		The goal is to find the missing item (the missing number).
		However, you have 3 constraints:
		- You have the right to LOOP the array only once!
		- You have the right to use only one variable!
		- You can not use functions (sorting etc ...)

		An example with an array with 9 elements :

			$array = array(5, 1, 3, 2, 9, 6 ,8, 4, 10);
	        // Le nombre manquant est 7

	        $var = ...

	        for (int i = 0; i < count($array); ++i)
	        {
	            ...
	        }

	        echo "Missing number is: " . $var;

	*/

	$array = array(5, 1, 3, 2, 9, 6 ,8, 4, 10);
	        // Le nombre manquant est 7

	        $numB;

	        for (int i = 0; i < count($array); ++i){
				
	            
	        }

	        echo "Missing number is: " . $numB;
