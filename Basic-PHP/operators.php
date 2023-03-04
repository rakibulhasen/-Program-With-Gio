<?php

declare(strict_types=1);

/* OPERATORS  */

// Arithmetic Operators

/**
 * (+) Identity
 * (-) Negation
 * (+) Addition
 * (-) Subtraction
 * (*) Multiplication
 * (/) Division
 * (%) Modulo
 * (**) Exponentiation 
 */

////////////////////////////////////////////////////
//  // Basic Arithmetic Operators
////////////////////////////////////////////////////
//  $x = 10;
//  $y = 2;

//  // Addition
//  var_dump($x + $y); 

//   // Subtraction
//   var_dump($x - $y); 

//   // Multiplication
//   var_dump($x * $y); 

//   // Division
//   var_dump($x / $y); 

//   // Modulo
//   var_dump($x % $y); 

//    // Exponentiation
//    var_dump($x ** $y); 


// // With Negative Number
// $x2 = -10;
// $y2 = 2;

// var_dump($x2 * $y2);
// var_dump($x2 - $y2);

// $x2 = 10;
// $y2 = -2;

// var_dump($x2 * $y2);
// var_dump($x2 - $y2);

// ////////////////////////////////////////////////////
// // Plus and Minus Operators
// ////////////////////////////////////////////////////

// $num_str = "10"; // You can use $num_str = +"10";
// $num_str2 = 5; 

// // Cast to integer using plus operator
// var_dump(+$num_str); // Output: 10

// // Cast to integer using minus operator
// var_dump(-$num_str); // Output: -10

// // Cast to integer using (int) type casting
// var_dump((int) $num_str); // Output: 10


// Second tip is about division

// $x = 10;
// $y = 3;

// // Division with integers
// var_dump($x / $y);

// // Division with floats
// var_dump($x / 2.0);

// // Division with zero 
// var_dump($x / 0); // Fatal error

// // Division by zero (aboid a fatal error)
// var_dump(fdiv($x, 0)); 

////////////////////////////////////////////////////
// Modulus
////////////////////////////////////////////////////

// // Modulus Oparators
// $x = 10;
// $y = 2;

// // Modulus with integers
// var_dump($x % $y);

// $x = 10;
// $y = 2.9;

// // Modulus with floats
// var_dump(fmod($x , $y));

// Casting as integer
// $x = 10;
// $y = 6;
// var_dump($x % $y);  

// $x = 10.5;
// $y = 2.9;
// var_dump($x % $y);   

// fmod function
// $x = 10.5;
// $y = 2.9;
// var_dump(fmod($x, $y));   

// Negative 
// $x = 10;
// $y = -3;
// var_dump($x % $y);  

// $x = -10;
// $y = 3;
// var_dump((bool) ('$x % $y'));  



// Assignment Operator

// $x = 4;

// // Multiple Variables
// $x = $y = 40;

// var_dump($x, $y);

// $x = $y = 10 + 4;
// var_dump($x, $y);


// Compined Operators
// $x = 4;
// $x *= 3; // $x = $x + 3;

// var_dump($x);

// // References
// $x = 5;
// $y = &$x;
// $y = 10;
// var_dump($x);


// // String Operators
// // Concatenation Operator
// $greating = "Hello";
// $name = "Rakibul";
// $message = $greating . ' ' . $name;
// var_dump($message);

// // Cincatenation with assignment operator
// $greating = "Hello";
// $greating .= ' World'; // $greating = $greating . 'World';
// var_dump($greating);

// $x += 4;

// var_dump($x); // Undefined variable but still show 3;



// Comparison Operators

// // Equal
// $x = 5;
// $y = 3;
// var_dump($x == $y);

// $y = '5';
// var_dump($x == $y);
// var_dump($x === $y);

// var_dump($x != $y);
// var_dump($x !== $y);

// // NAN
// $a = NAN;
// $b = 5;
// var_dump($a > $b);
// var_dump($a < $b);
// var_dump($a >= $b);
// var_dump($a <= $b);

// // is_nan()
// $a = NAN;
// $b = NAN;
// var_dump($a == $b);
// var_dump(is_nan($a) == $b);
// var_dump(is_nan($a) == is_nan($b));
// var_dump(is_nan($a) != is_nan($b));

// // < and >
// var_dump( $x <> $y);

// $y = '3';

// //  Grater Than Operator
// var_dump($x > $y);

// // Less Than operator
// var_dump($x < $y);


// // Lass than or equal
// var_dump($x <= $y);

// // Grater than or equal
// var_dump($x >= $y);


// Spaceship Operator

// $num1 = 10;
// $num2 = 5;
// $num3 = 10;

// var_dump($num1 <=> $num2);
// var_dump($num1 <=> $num3);
// var_dump($num2 <=> $num1);
 

// // Note on String and Number Comparison
// var_dump(0 == 'hello');
// var_dump(0 == '0');
// var_dump('0' == 'hello'); 

// $x = 'Hello World';
// $y = strpos($x, 'H');

// if($y == false) {
//   echo "H Not Found";
// } else{
//   echo "H is found";
// } // Outpot H not found

// if($y === false) {
//   echo "H Not Found";
// } else{
//   echo "H is found";
// }  // Outpot H is found


// // Ternary Operator
// $result = (false === $y) ? "H not found" : "H is found";

// echo "\n". $result;

////////////////////////////////////////////////////
// Null Coalescing Operator
////////////////////////////////////////////////////

// // Without null coalescing operator
// $y = $x ? $x : 'hellow';

// // with null coalescing operator
// $y = $x ?? 'hello';

// var_dump($y);

// // undefined variable
// $y = $z ?? 'hello'; // $y = 'hello';

// // Undefined array key
// $arr = ['a' => 1, 'b' => 2];
// $c = $arr['c'] ?? 0 ;
// var_dump($c);

  



// Practice problems solving

// Write a PHP program to calculate the area of a rectangle with length = 10 and width = 5 using the multiplication operator.

// $length = 10;
// $width = 5;
// $area = $length * $width;
// echo $area;

// // Write a PHP program to calculate the sum of two numbers, 10 and 20, using the addition operator.

// $num_1 = 10;
// $num_2 = 20;
// $sum = $num_1 + $num_2;
// echo "The Sum of two numbers {$sum}";


// // Write a PHP program to check if a given number is even or odd using the modulus operator.
// $a = 3;
// if( 1 == $a % 2) {
//   echo "{$a} is odd Number";
// } 
// if( 0 == $a % 2) {
//   echo "{$a} is even Number";
// }

// // Write a PHP program to concatenate two strings, "Hello" and "World", using the concatenation operator.

// echo "Hello " . "World \n";
// $s1 = "Hello";
// $s1 .= " World";
// echo $s1 . PHP_EOL;


// // Write a PHP program to check if a given number is positive or negative using the ternary operator.
// $n = 0;
// if( 0 > $n) {
//   echo "{$n} is a Negative Number";
// }
// if( 0 < $n ) {
//   echo "{$n} is a Positive Number";
// }
// if( 0 == $n) {
//   echo "{$n} is neither positive nor negative.";
// }
