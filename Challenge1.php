<?php
// our missing array. 4,5,8,9  are missing.
$arr1 = array(1,2,3,6,7,10); 

// construct a new array:1,2....max(given array of 10 elements in challenge Q1 but by using this method you can have many as you want as long as you listed).
$arr2 = range(1,max($arr1));                                                    

// use array_diff to get the missing elements 
print_r(array_diff($arr2,$arr1));
?>
