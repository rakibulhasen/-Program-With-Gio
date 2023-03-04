<?php

declare(strict_types=1);

// $class = [];

// function add_student(string $name, array $grades){
//   global $class;
//   $class['name'] = $name;
//   $class['grades'] = $grades;
// }

// function update_grades(string $name, array $new_grades){
//   global $class;
//   $class['name'] = $name;
//   $class['grades'] = $new_grades;
// }

// function remove_student(string $name){
//   global $class;
//   unset($class[$name]);
// }

// function get_avarage_grade($grades) {
//   $total = array_sum($grades);
//   $count = count($grades);
//   return $total / $count;
// }

// function display_class() {
//   global $class;
//   foreach ($class as $name => $grades) {
//     $average = get_avarage_grade($grades);
//     echo $name . ' : '. $average. PHP_EOL;
//   }
// }

// add_student("Alice", [90, 85, 95]);
// add_student("Bob", [80, 75, 85]);
// // add_student("Charlie", [70, 75, 65]);
// // update_grades("Alice", [95, 90, 100]);
// // remove_student("Charlie");
// // display_class();


// // print_r($class);


// $class = [];

// $class['name'] = 'Rakibul';
// $classGread = [43,43,3,23,50,77];
// array_push($class, ['name' => 'Jamal', 'grades' => Array(66, 43, 43, 3, 23, 50, 77)]);
// array_push($class, ['name' => 'Jamal', 'grades' => Array(66, 43, 43, 3, 23, 50, 77)]);
// array_push($class, ['name' => 'Jamal', 'grades' => Array(66, 43, 43, 3, 23, 50, 77)]);
// array_push($class, ['name' => 'Jamal', 'grades' => Array(66, 43, 43, 3, 23, 50, 77)]);
// // print_r($class);


// /*  Project: Online Store   */
// $product = [];

// function add_product (string $name, int|float $price, string $image, int $stock) {
//   global $product;
//   static $id = 1;
//   $product_id = $id++;
//   $new_product = ['id' => $product_id, 'name' => $name, 'price' => $price, 'image' => $image, 'stick' => $stock];
//   array_push($product, $new_product);  
// }

// add_product('Apple', 99, 'product1.php', 13);
// add_product('T-Sirt', 19, 'product2.php', 01);


// function add_to_cart(int $product_id, int $quentity) {
//   global $product;
//   foreach ($product as $pro) {
//     if($pro['id'] == $product_id){
//       $cart = $pro;
//       return $cart;
//     }
//   }
//   return false;
// }


// function order($cart, string $name, string $email, string $address, string $city, string $state, int $zip) : array {
//   $order_info = $cart;
//   $order_info['customer'] = ['name' => $name, 'email' => $email, 'address' => $address, 'city' => $city, 'state' => $state, 'zip' => $zip];
//   return $order_info;
// }


// print_r($product);

// $add_to_cart = add_to_cart(1, 3);


// $order = order($add_to_cart, 'Rakibul Hasan', 'rakibul@gmail.com', 'sreebordi', 'Dhaka', 'Dhaka', 2130);
// $order = order(name : 'Jamal', cart:  $add_to_cart, city:'Dhaka', state:  'Dhaka', zip: 2130, address :'sreebordi',email: 'rakibul@gmail.com');

// print_r($order);


// function generatePassword($length) {
//   $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
//   $password = "";
//   for ($i = 0; $i < $length; $i++) {
//     // $password .= $chars[rand(0, strlen($chars)-1)];
//     $password .= $chars[rand(0, strlen($chars)-1)];
//   }
//   return $password;
// }

// $newPassword = generatePassword(10);
// echo $newPassword; 


// echo "\n";

// function genarate_password(int $length) {
//   $password = '';
//   $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,?";
  
//   for($i = 0; $i <= $length; $i++) {
//   $password .= $chars[rand(0, strlen($chars)-1)];
//   }

//   return $password;
// }

// $password = genarate_password(12);
// echo $password;



// echo "\n";








// Callback/ callable 
function process_quiz(array $score, callable $quiz_processor) {
  $quiz_processor($score);
}

function get_avarage(array $score) {
  echo "\n Inside get_avarage()";
}

function get_highest(array $score) {
  echo "\n Inside get higest()";
}

process_quiz([32,43,5,55,33,88,99,90], 'get_avarage');
process_quiz([32,43,5,55,33,88,99,90], 'get_highest');

