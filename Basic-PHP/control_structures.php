<?php

/*  
Exercise 1 
Create two variables with two integer numbers. Print out which one is the highest and 
lowest value. (eg. “Highest value is (…)”.” Lowest value is (…)”).
*/

$n1 = 55;
$n2 = 32;

if ($n1 > $n2) {
  define('highest', $n1);
  define('lowest', $n2);
  printf("Highest value is (%s)", highest);
  printf("Lowest value is (%s)", lowest);
  
} elseif ($n2 > $n1) {
  define('highest', $n2);
  define('lowest', $n1);
  printf("Highest value is (%s)", highest);
  printf("Lowest value is (%s)", lowest);
} 


/* 
Exercise 2 
Create a variable with a value in-between number 1 till 4 (Reject any other value). Based 
on the value, print out “Spades”, “Hearts”, “Diamonds” and “Clubs”.
*/


