<?php

/* STRING  */

$first_name = "Will";
$last_name = 'Smith';

// // Using Single Quotes
// $name = 'My name is ' . $first_name . ' ' . $last_name;

// // Using double quotes
// $name = "My name is $first_name $last_name";

// echo $name;

// Accessing a Specific Character of string
$name = 'Rakibul Hasan';

// echo $name[1];

$name[1] = "A";

echo $name;

echo PHP_EOL;

echo $name[-5] ;


// Heredoc

$text = <<<TEXT

Hello 
My
name
is
$name 
TEXT;

// echo $text;

echo nl2br($text);