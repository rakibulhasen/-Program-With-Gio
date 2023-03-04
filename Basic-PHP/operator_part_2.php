<?php

// ////////////////////////////////////////////////////
// // PHP Error Control Operator
// ////////////////////////////////////////////////////

// $file_name = 'file.txt';
// // $file_content = file($file_name);

// // Using @
// $file_contents = @file($file_name);


// Increment and Decrement Operators

// // Pre-Increment and Decrement
// $x = 5;
// echo ++$x;
// echo --$x;
 
// // Post-Increment and Decrement
// $x = 4;
// echo $x++ . "\n"; 
// echo $x;

// $y = 5;
// echo $y-- . "\n";
// echo $y; 


// // Increment & Decrement not numeric
// $x = true;
// echo ++$x;

// $x = 'abc';
// var_dump(++$x);

// $y = null;
// var_dump(++$y);
// var_dump(--$y);

// $x = 5;
// var_dump($x++);
// var_dump($x);


// Logical Operators

// // && operators
// $x = true;
// $y = false;

// if ($x && $y) {
//   echo "X and Y are same";
// } else {
//   echo "X and Y are not same";
// } 




// // || Operators
// $x = true;
// $y = false;

// if ($x || $y) {
//   echo "X or Y any one is true";
// } else {
//   echo "X and Y are not true";
// }


// $s1 = true && false;
// var_dump($s1);

// var_dump($s1 = 1 && false);
// var_dump($s2 = 1 and false);
// var_dump($s1);
// var_dump($s2);

// $x = 0;

// if(!$x) {
//   echo "This value is false";
// } else {
//   echo "This is value of x is true";
// }

$x = true;
function hello() {
  echo "Hello World";
  return false;
}
function hello2() {
  echo "Hello2 World";
  return false;
}
$result = $x || hello(); // Short circuits, hello() is not executed
// echo $result; // Outputs true
  

$result = $x && hello() && hello2();
echo $result;