<?php
// declare(strict_types=1);
// /* Data Typees $ Type Casting  */

// # 4 Scalar Type
//     # bool - true / false
//     $completed = true;
//     # int - 1, 2, 3, 0, -5 (not decimal)
//     $score = 44;
//     # float - 1.5, 0.1
//     $price = 0.44;
//     # string - "Geo", "Hello World"
//     $greating = "Hello Gio";

//     // Show Desplay
//     echo $completed . '<br />';
//     echo $score . '<br />';
//     echo $price . '<br />';
//     echo $greating . '<br />';

//     // Outpot
//     // 1
//     // 44
//     // 0.44
//     // Hello Gio

//     // Get Type Function
//     echo gettype($completed);
//     // Vur Dump Function
//     var_dump($score);

// # 4 Compound Types
//     # array 
//     $students = ['Rakibul', 'Hasan', 'Jamal'];
//     # object
//     # callable
//     # iterable

//     // Show Desplay
//     print_r($students);

//     // Outpot
//     // Array ( [0] => Rakibul [1] => Hasan [2] => Jamal )

// # 3 Special Types
//     # resource
//     # null


//     $content = Null;
//     echo $content;


//     $score = '75';

//     var_dump($score);
 
// // Strict Type
// function sum(int $x, int $y) {
//   var_dump($x, $y);
//   return $x + $y;
// }
// // echo sum(3, '2'); 

// $x =  (int)'5';
// var_dump($x);




/*  Data Type and Type Casting */

# 4 Scalar Type
    # bool - true / false
    # int - 1, 2, 3, 4, 5, 5, -3 (not decimal)
    # float - 1.4, 5.5, -4.3
    # strig "Hello", "Rakibiul"

# 4 Compunt Type
    # array
    # object
    # callable
    # iterable


# Special Type
    # resource
    # null





////////////////////////////////////////////////////////
/*  Data Type and Type Casting */
////////////////////////////////////////////////////////

// # 4 Scalar Type
//     # bool - true / false
    // $checkout = true;
//     # int - 1, 2, 3, 4, 5, 5, -3 (not decimal)
//     $age = 23;
//     # float - 1.4, 5.5, -4.3
//     $cash = 12.4;
//     # strig "Hello", "Rakibiul"
//     $name = "Rakibul";

//     echo $checkout , PHP_EOL;
//     echo $age , PHP_EOL;
//     echo $cash , PHP_EOL;
//     echo $name , PHP_EOL;

// # 4 Compunt Type
//     # array 
//     $status = [1, 'coming ', true, 12.4];
//     print_r($status);
//     # object
//     # callable
//     # iterable


// # Special Type
//     # resource
//     # null

// ////////////////////////////////////////////////////////
// // Get The Type Of The Variable (gettype, var_dump)
// ////////////////////////////////////////////////////////

// // get function
// echo gettype($checkout);

// // Var Dump Function
// var_dump($checkout);


// ////////////////////////////////////////////////////////
// // Type Hinting Example
// ////////////////////////////////////////////////////////

// function sum($x, $y) {
//     var_dump($x, $y);
//     return $x + $y;
// }

// echo sum(5, 6);
// echo PHP_EOL;

// function sum2($x, $y) {
//     var_dump($x, $y);
//     return $x + $y;
// }

// echo sum2(5, '6');


////////////////////////////////////////////////////////
// // Type Juggling / Type Coercion
////////////////////////////////////////////////////////

// function sum(int $x, int $y) {
//     var_dump($x, $y);
//     return $x + $y;
// }

// echo sum(5, '9');


// ////////////////////////////////////////////////////////
// // Strict Types
// ////////////////////////////////////////////////////////

// declare(strict_types=1);

// function sum(int $x, int $y) {
//     var_dump($x, $y);
//     return $x + $y;
// }

// echo sum(4, '8');


// ////////////////////////////////////////////////////////
// //Type Casting
// ////////////////////////////////////////////////////////

// $x = (int) '5';
// var_dump($x);

    




?>