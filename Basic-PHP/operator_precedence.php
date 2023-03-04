<?php

/*  Precedence && Associativity  */

// $x = 4 + 5 ** 3;
// var_dump($x);


// // Right Associative 
// $x = ($y = $x );
// var_dump($y);

// // 
// $x = 5;
// $y = 10;
// $z = 15  ;

// var_dump((((($x + $y) - $z) + 5) - 4)); 


// //
// var_dump(1 <= 1 == 1);

// // Logical Operators
// $x = true;
// $y = false;

// var_dump($x and !$y);  


// 

// $x = '';
// $y = 'hello';
// $z = $x || $y; // $z will be assigned the value 'hello' because $x is falsy (empty string)

// echo $z;  

$a = 1;
echo $a + $a++;

$i = 1;
$array[$i] = $i++; // may set either index 1 or 2

var_dump($array[$i]);
