<?php


// Day one We covered those topics

///////////////////////////////////////////////////
// Class 1
///////////////////////////////////////////////////

//WHAT IS PHP?
// WHY PHP & WHAT CAN YOU DO WITH IT?
// IS PHP DEAD?
// COURSE OVERVIEW
// BASIC PHP
// INTERMEDIATE PHP
// ADVANCED PHP
// REQUIREMENTS

/*
  * PHP stands for PHP Hypertext Preprocessor which is a recursive acronym. You can read more about recursive acronyms here: https://en.wikipedia.org/wiki/Recursive_acronym
*/


///////////////////////////////////////////////////
// Class 2
///////////////////////////////////////////////////


// What is a web server?
// Devtools to see requests
// Most common web servers
// Ways to install PHP in OS
// XAMPP drawbacks
// Installation for windows
// Testing if the web server is working
// htdocs
// Code Editors


///////////////////////////////////////////////////
// Class 3
///////////////////////////////////////////////////



///////////////////////////////////////////////////
// Class 4 We will cover tomorrow
///////////////////////////////////////////////////

// RESOURCES
// Predefined Constants - https://www.php.net/manual/en/reserved.constants.php
// Magic Constants - https://www.php.net/manual/en/language.constants.magic.php

// Using define()
define('STATUS_PAID', 'Paid');
// Constant Naming Rules
// define(name, value, case-insensitive) 
// Print Constants
echo STATUS_PAID; // Outpot (Paid)

// Check If Constant Has Been Defined
echo defined('STATUS_PAID');  // Outpot ( 1 )

// Using Const Keyword
const STATUS_PAID_ = 'Paid';

echo STATUS_PAID_;

// Differences
if (true) {
  // const FOTHER_AGE = 54;
  define('AGE', 23);
}

echo AGE;

// Dynamic Constant Names
$currentUser = array(
  array(
    'name' => 'rakibul',
  'age' => 24,
  'id' => 12,
  )
);
$currentUserAge = 23;

// echo __LINE__;
echo PHP_EOL, "==================== \n";
foreach ($currentUser as $key => $val) {
  define('STATUS_' . $val['name'] . '_' . 'name', $val['name'] );
  define('STATUS_' . $val['name'] . '_' . 'age', $val['age'] );
  define('STATUS_' . $val['name'] . '_' . 'id', $val['id'] );

  echo PHP_EOL, "==================== \n";

  // $userIno = ( STATUS_."$currentUser"._age );

  $currentUsername = sprintf("STATUS_%s_name", $val['name']);
  $currentUserAge = sprintf("STATUS_%s_age", $val['name']);
  $currentUserId = sprintf("STATUS_%s_id", $val['name']);
  // echo constant($userIno) ;
  echo ( constant($currentUsername) );
  echo ( constant($currentUserAge) );
  echo ( constant($currentUserId) );
  echo PHP_EOL, "==================== \n";

  echo PHP_EOL;
}


foreach ($currentUser as $key => $val) {
  echo $val['name'], PHP_EOL;
}
echo PHP_EOL, "==================== \n";

// When To Use Constants
// Predefined Constants
// Magic Constants
// Variable Variables


$a = 5;
$b = 4;
[$a, $b] = [$b, $a];

echo $b;

echo PHP_EOL;

$c = 12;
$d = $c;

$c = 22;

echo $d;

if (true) {
  // const FOO = 'Bar';
  define('STATUS_PAID', 'Paid');
}

// This is an example that illustrates that "const" cannot be used within a control structure
echo PHP_EOL;
echo PHP_VERSION;

echo PHP_EOL;

echo __FILE__;

$foo = 'bar';

$$foo = 'baz';

echo $foo, $bar;

echo PHP_EOL;

echo PHP_MAJOR_VERSION;

echo PHP_EOL;

echo PHP_MINOR_VERSION;

echo PHP_EOL;

echo PHP_RELEASE_VERSION;

echo PHP_EOL;

echo PHP_FLOAT_MAX;

echo PHP_EOL;

echo E_RECOVERABLE_ERROR;

echo PHP_EOL;

function getFunName()
{
  echo __LINE__;
}

getFunName();

echo PHP_EOL;

define('BARTH_YEAR', '2001');

// echo BARTH_YEAR;

echo constant('BARTH_YEAR');

echo PHP_EOL;


// Variable Variable
// This code demonstrates the use of variable variables
$foo = 'bar'; // $foo is assigned the value of "bar"
$$foo = 'baz'; // A variable named $bar is created, and it is assigned the value of "baz"

// Output the values of $foo and $bar
echo $foo , $bar; // This will output "barbaz" to the screen

echo PHP_EOL;

$frout = array(
  'apple' => 12,
  'bana' => 44,
  'oran' => 56,
);

foreach ($frout as $key => $val ) {
  $$key = $val;
}


echo $apple;


