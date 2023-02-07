<?php
 
 echo "Before Swapping:<br>"; 
 $a = 1;  //values stored by variable $a before swapping 
 $b = 2; //values stored by variable $b before swapping 
 echo "a = $a<br>";  //outputs of $a before swap
 echo "b = $b<br><br>";//outputs of Sb before swap
 echo "After swapping:<br>";  
 $temp = $a; //for being able to swap we will need another variable i named as  $temp 
 $a = $b;  //now variable $a is having value  of $b
 $b = $temp; //here we go again our  $b is having value of $a from  $temp
  
 echo "a = $a<br>"; //outputs of $a after swap  
 echo "b = $b<br>";//outputs of $b after swap  
 ?>