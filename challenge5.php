<?php
$sumOdd = 0; 
$productOdd=1;    // we will first intialize our variable that will help us 
$sumEven = 0;
$productEven=1;
foreach (range(1, 10) as $number) { // range ya array dufite

    if (0 === $number % 2) {// condition izareba elements ziri muri array za even numbers 
	  $sumEven += $number; // this code will help us to find sum of even number
   $productEven *= $number; // this code will help us to find product of even number
        continue;
		  
    } 
	
	
	else   // else will give odd number kubera condition yo hejuru twahasyize
	{

   $sumOdd += $number;  // this code will help us to find sum of odd number
   $productOdd *= $number;  // this code will help us to find products of odd number

	 
        continue;
		  
	}
}
echo '<br> sum of odd number is  = '.$sumOdd;
echo '<br> product of odd number is  = '.$productOdd;
echo '<br> sum of even number is  = '.$sumEven;
echo '<br> product of even number is  = '.$productEven;

?>
