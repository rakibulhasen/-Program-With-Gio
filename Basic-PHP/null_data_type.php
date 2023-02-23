<?php

/*  NULL DATA TYPE  */


// // Null Constant
// $x = null;
// echo $x;
// var_dump($x);

// Undefined Variables
$x = '';
// var_dump((NAN) $x);

var_dump(is_null($x));

$a = array();

echo $a == null ? "Null" : "Not Null";

var_dump(is_null($a));+

//  Casting
$z = null;

var_dump((string) $z);
var_dump((int) $z);
var_dump((bool) $z);
var_dump((array) $z);


