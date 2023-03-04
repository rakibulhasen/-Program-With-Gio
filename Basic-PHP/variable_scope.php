<?php

/*  Variable Scope  */
 

// Golobal scipe

$x = 5;
// include 'script1.php';
echo $x; // Output: 5


// // Local Scope

// function foo() {
//   echo $x; // Undefined variable: x
// }



// // Using global keyword to access variables in the global scope
// $x = 5;

// function foo() {
//     global $x;
//     echo $x; // Output: 5
// }


// // How are global variables stored & GLOBALS superglobal

// $x = 32;

// function getVal() {
//   $GLOBALS['x'];
//   echo $GLOBALS['x'];
// }

// getVal();


