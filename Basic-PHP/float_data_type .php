<?php

/*  FLOATS  */

// // fLOATS NUMBER
// $x = 13.4;
// echo $x;
// var_dump($x);

// Exponential form
// $x = 12.4e4;
// echo $x , PHP_EOL;
// var_dump($x);

// $x = 12.3e-3;
// echo $x , PHP_EOL;
// var_dump($x);

// // Underscore 
// $x = 13_00.4;
// echo $x, PHP_EOL;
// var_dump($x);

// // Predefine constent float min and min
// echo PHP_FLOAT_MAX , PHP_EOL;
// echo PHP_FLOAT_MIN;

// // LIMITED PRECISIONS
// $x = floor((0.1 + 0.7) * 10);
// // 7.999999999999999999999991118
// echo $x, PHP_EOL;

// echo (0.1 + 0.7) * 10;

// echo ((0.1 + 0.7 ) * 10) == 8 ? "Yes" : "No";

// $x = ceil((0.1 + 0.7) * 10);
// echo $x;

// $x = ceil((0.1 + 0.2) * 10);
// // 0.3000000000000000000000000000000004 * 10 = 4
// echo $x;

// // Compair with float
// $x = 0.23;
// $y = 1 - 0.77 ;

// var_dump($x, $y);

// if($x == $y) {
//   echo "Yes";
// } else {
//   echo "No";
// }


// // NAN
// echo NAN;
// echo log(-1); // NAN

// echo INF; // ING

// echo PHP_FLOAT_MAX * 2 ; // INF

// // check is nan or is inf
// $x = PHP_FLOAT_MAX * 2 ;

// var_dump(is_infinite($x));
// var_dump(is_finite($x));
// var_dump(is_nan($x));
// var_dump(is_nan(log(-1)));  

// // Casting
// $x = 5;

// var_dump((float) $x);
// var_dump(floatval($x));

// // String to float
// $x = 'asdlkf';

// var_dump((float) $x);

// $x = 'asdlkf12.3';

// var_dump((float) $x);

