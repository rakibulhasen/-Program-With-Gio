<?php


/*  While Loop  */

// $i = 0;
// while ($i <= 15) {
//   echo $i . ", ";
//   $i++;
// }

// $i = 23;
// while ($i <= 10) {
//   echo $i++;
// }

// $x = 4;
// var_dump($x);
// $x++;
// var_dump($x);

// $n =0;
// $i = 1;
// while($i <= 5)
// {
//   $n += $i;
//   $i++;
// }
                                                                                                                    
// var_dump("Total Sum: {$n}" );


// $z = 0;
// echo ++$z;
// var_dump($z);

// $number = 0;
// $iteration = 0 ;
// while(++$iteration <= 5) {
//   $number += $iteration;
// }

// var_dump($number);

// $number = 0;
// $iteration = 6;
// while ($iteration--) {
//   $number += $iteration;
// }

// var_dump($number);


// $range = 0;
// while(++$range <= 10) {
//   if($range % 2 == 0) :
//     echo $range . " is even Number \n" ; 
//   else : echo $range . " is odd Number \n" ; 

//   endif;
// }

// // Nested loop
// $i = 1;
// $x = 1;
// while ($i <= 5) {
//   while($x <= 5){
//     echo ($i * $x) , ' ';
//     $x++;
//   }

  
//   $x= 1;
//   echo "\n";
//   $i++;
// }



// // Infinite Loops (Looping forever)
// $n = 0 ;
// $i =0;
// while(1 <= 2) {
//   if($i == 2) break;
//   $i++;
// }

// var_dump($i);


// // Using the Break Statement

// $i = 0;

// while (1){
//   $i++;
//   echo "Infinity Loop \n";
//   if($i >= 40) 
//     break;
// }


// $i = 0 ;
// while ( $i <= 15) {
//   $j = 10;
//   while ($j <= 20) {
//     echo $i . '_' . ', ';
//     $j++;
//     if($i >= 15 && $j >= 20) {
//       break 2;
//     }
//   }
//   $i++;
// }


// // Continue Statement
// $i = 0;
// while( $i < 10 ) {
  
//   if($i % 2 == 0){
//     $i++;
//     continue;
//   }

//   echo $i++, ', '; 
// }






//// do-while

// $i =0;
// do {
//   echo $i++, ', ';
// }while($i <= 12);


// for
// for ($i = 0;$i <= 15; $i++){
//   if($i <= 14){
//     echo $i, ', ' ;
//   }
//   if($i == 15){
//     echo $i ;
//   }
// }




// // Multiple expressions within for loop

// for ($i = 0;$i <= 15; print $i . ', ', $i++){
//   // echo $i, ', ' ;
// }


// for ($i = 0; print $i . ', ', $i <= 15; $i++){
//   // echo $i, ', ' ;
// }

// //Iterate over strings
// $text = "Hello World";
// $length = strlen($text) ;
// for( $i = $length -1 ; $i >= 0; $i--) {
//   // if($text[$i] == ' ') {
//   //   continue;
//   // }  
//   echo $text[$i];
// } 




// foreach loop

$programingLanguages = ['PHP', "JAVA", 'C++', 'JavaScript', 'Python'];

foreach($programingLanguages as &$languages) {
  $languages = strtoupper($languages);
  // echo $languages , ', ';
} 

echo PHP_EOL;
print_r($programingLanguages);
echo $languages;


// $user = [
//   'name' => 'Rakibul Hasan',
//   'email' => 'rakibul@gmail.com',
//   'skill' => ['PHP', "JAVA", 'C++', 'JavaScript', 'Python']
// ];

// foreach($user as $key => $user) {
//   if(is_array($user)) {
//     echo ucfirst($key) . ' : ', implode(',', $user);
//   }
//   else {
//     echo ucfirst($key) . ' : ' . $user , "\n";
//   }
// }



foreach($programingLanguages as $languages) :

echo $languages;


endforeach;
