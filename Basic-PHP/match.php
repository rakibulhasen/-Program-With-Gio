<?php

$paymentStatus = 'declaring';

$status = match($paymentStatus) {
  'paid' =>  'Payment Done',
  'panding', 'declaring' =>  'Payment is Panding',
  'fload' =>  'Payment is Processing'
};

echo $status;


function typeGet($key){
  return match($key) {
    1 => 'Integer 1',
    '1' => 'String 1',
    true => 'Bool True',
    [] => 'Empty Array',
    [1] => 'Array [1]',
    default => 'Desnot fount'
  };

};

var_dump(typeGet(1));
var_dump(typeGet('1'));
var_dump(typeGet(true));
var_dump(typeGet([]));
var_dump(typeGet([1]));
var_dump(typeGet(array()));


$foo = 404;
echo (match($foo){
  404 => 'Page not found',
  default => 'Unknown error'
});
