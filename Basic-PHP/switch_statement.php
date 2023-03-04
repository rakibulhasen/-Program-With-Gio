<?php

/*  Swich Statement */

// $paymentStatus = 'assign';

// switch($paymentStatus) {
//   case 'paid':
//     echo 'Paid';
//     break;

//   case 'declined':
//   case 'assign':
//     echo 'Payment Declined';
//     break;

//   case 'panding':
//     echo 'Pending Payment';
//     break;

//   default:
//     echo "Unknown Payment Status";
// }


// echo PHP_EOL;

// // Lose comparition 
// $paymentStatus = '1'; 

// switch($paymentStatus) {
//   case 1:
//     echo 'Payment Done';
//     break;

//   case 2:
//     echo 'Payment Panding';
//     break;

//   default:
//     echo 'Payment Not found';
// }



// // Switch statment within loops & using break
// $paymentStatuses = [7,2,3];

// foreach($paymentStatuses as $paymentStatus) {
//   switch($paymentStatus) {
//     case 1:
//       echo 'Payment Done',PHP_EOL;
//       break;
  
//     case 2:
//     case 3:
//       echo 'Payment Panding',PHP_EOL;
//       break;
      
//   }
// }


// // Continuee of loop in switch
// $paymentStatuses = [1,2,3];

// foreach($paymentStatuses as $paymentStatus):
// switch($paymentStatus) {
//   case 1:
//     continue 2;
//     echo "Payment is done \n";
    
//   case 2:
//   case 3:
//     echo "Payment is panding \n";
//     break;

//   case 4:
//     echo "Payment is cancel \n";
//     break;
  
//   default:
//     ECHO 'Payment not found';
// }

// endforeach;


// 05:42 - Difference between switch statement & series of if statements (switch vs if). Demonstrating example of the performance difference

// // If else   

// function x(){
//   sleep(3);
//   echo "Done \n";

//   return 3;
// }

// $x = x();

// if( $x === 1 ) {
//   echo 1;
// } elseif( $x === 2) {
//   echo 2;
// }elseif($x === 3){
//   echo 3;
// }else{
//   echo 4;
// }


// function x() {
//   sleep(3);

//   echo "done \n";

//   return 5;
// }

// switch(x()) {
//   case 1:
//     echo 1;
//     break;

//   case 2:
//     echo 2;
//     break;
  
//   case 3:
//     echo 3;
//     break;

//   default:
//     echo 4;
// }



// $today = (string) date('D');

// switch($today) {
//   case 'Mon':
//     echo 'Today is Monday';
//     break;

//   case 'Thu':
//     echo "Today is Thuest Day";
//     break;
  
//   case 'Wed':
//     echo "Today is Wednesday ";
//     break;

//   case 'Fri':
//     echo "Today is Friday";
//     break;

//   case 'Sat':
//     echo "Today is Saterday";
//     break;
  
//   case 'Sun' :
//     echo "Today is Sunday";
//     break;

//   default:
//     echo "Op's don't know waht day today is";
//     break;
// }


// $domain = 'devraki.net';

// $findExtention = strpos($domain, '.');
// $domainExtention = substr($domain, $findExtention + 1); 

// switch($domainExtention) {
//   case 'com':
//     echo "Commercial Domain";
//     break;

//   case 'net':
//     echo 'Network Domain';
//     break;

//   case 'org':
//     echo 'Organization Domain';
//     break;

//   default:
//     echo 'Undefined Domain';
//     break;
// }


// $unitType = 'hospital';
// $unitIcon = '';
// $unitServicee = '';

// switch($unitType) {
//   case 'hospital':
//     $unitIcon = 'hospital.php';
//     $unitServicee = 'For medical Servicee.';
//     displayUnitInfo();
//     break;

//   case 'university':
//   {
//     $unitIcon = 'university.php';
//     $unitServicee = 'For higher education.';
//     displayUnitInfo();
//   }
//     break;

//   case 'policestation':
//   {
//     $unitIcon = 'policestation.php';
//     $unitServicee = 'For safety services.';
//     displayUnitInfo();
//   }
//     break;

//   default:
//     echo 'Undefined Unit';
//     break;
// }

// function displayUnitInfo() {
//   global $unitType, $unitIcon, $unitServicee;
//   echo 'Unit Type : ' , strtoupper($unitType), PHP_EOL;
//   echo 'Unit Image Name : ' , strtolower($unitIcon),  PHP_EOL;
//   echo 'Unit Services : ' , ucfirst(strtolower($unitServicee)), PHP_EOL;
// }


$randomize = rand(1,50);
switch($randomize){
  case ($randomize <= 20):
    $font_size = '11';
    break;

  case ($randomize <= 30):
    $font_size = '16';
    break;

  case ($randomize <= 50):
    $font_size = '20';
    break;

  default: 
    $font_size = '11';
    break;
}

?>

<span style="font-size: <?= $font_size ?>">ww.topware.com</span>

