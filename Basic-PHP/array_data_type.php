<?php


/* ARRAY  */

$groceryList = [
  'Banana', 'Orange', 'Mango'
];

// Display the items
echo "Grocery Lists : \n";
foreach($groceryList as $list) {
  echo ' - ', $list , PHP_EOL;
}

// Students Grades
$grades = [78, 92, 85, 65, 88, 75, 80];

// Calculate Avarage grade for the class
function array_sumation($grades) {
  $sum = 0;
  foreach($grades as $grad) {
    $sum += $grad;
  }
  return $sum;
}

$avarage_score = floor(array_sumation($grades) / count($grades));

// Find hiegest and lowest
$heigest = max($grades);

function heigest($greats){
  $height = $greats[0];
  for($i = 0; $i < count($greats); $i++){
    if($greats[$i] > $height){
      $height = $greats[$i];
    }
  }
  return $height;
}

// Lowest Score
function lowest($greats){
  $lowest = $greats[0];

  for($i = 0; $i < count($greats); $i++) {
    if($greats[$i] < $lowest) {
      $lowest = $greats[$i];
    }
  }
  return $lowest;
}

$lowest = lowest($grades);

echo "\n";
$heiest = heigest($grades);

echo PHP_EOL;
echo "Avarage Score {$avarage_score} \n";
echo "Heigest Score {$heiest} \n";
echo "Lowest Score {$lowest} \n";


// Employee Salaries
$employeSalaries = [1500, 1500,40000, 10_000_0];

// Employ Samary of the salaries
function employ_sumari($salaries) {
  $sum = 0;
  $length = count($salaries);
  for($i = 0; $i < $length; $i++) {
    $sum += $salaries[$i];
  }
  return $sum;
}

echo employ_sumari($employeSalaries);

function boss($salaryes){
  $salaryBoss = $salaryes[0];
  for($i = 0; $i< count($salaryes); $i++){
    if($salaryes[$i] > $salaryBoss) {
      $salaryBoss = $salaryes[$i];
    }
  }
  return "This is out Boss Salary {$salaryBoss}";
}

echo boss($employeSalaries);