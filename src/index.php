<?php

//echo "Hello. What is you name?";
//$name = trim(fgets(STDIN));
 //echo "$name How old are you?";
 //$age = trim(fgets(STDIN));
 //echo "$name $age Where you from";
 //$from = trim(fgets(STDIN));
 //echo "$name $age $from It's true that you study programming?";
 //$study = trim(fgets(STDIN));
 //cho "name = $name , age = $age , from = $from , study = $study";

//$number1 = 24;
//$number2 = 37;
//$result = ($number1 + $number2) / 2;
  //echo $result . PHP_EOL;

//boolean
//echo "example1" . PHP_EOL;
//$bool1 = true;
//$bool2 = false;
//$result1 = ($bool1 === $bool2) ? "Yes" : "No";
//echo $result1 . PHP_EOL;
//$result2 = ($bool1 == $bool2) ? "Yes" : "No";
//echo $result2 . PHP_EOL;
//echo "example2" . PHP_EOL;
//$num1 = 5;
//$num2 = 5;
//$result3 = ($num1 === $num2) ? "Yes" : "No";
//echo $result3 . PHP_EOL;
//$result4 = ($num1 == $num2) ? "Yes" : "No";
//echo $result4 . PHP_EOL;

//echo "example3" . PHP_EOL;
//$numStr = "3";
//$num3 = 3;
//$result5 = ($numStr === $num3) ? "Yes" : "No";
//echo $result5 . PHP_EOL;
//$result6 = ($numStr == $num3) ? "Yes" : "No";
//echo $result6 . PHP_EOL;

//echo "example4" . PHP_EOL;
//$nullStr = null;
//$str2 = "";
//$result7 = ($nullStr === $str2) ? "Yes" : "No";
//echo $result7 . PHP_EOL;
//$result8 = ($nullStr == $str2) ? "Yes" : "No";
//echo $result8 . PHP_EOL;

//echo "example5" . PHP_EOL;
//$nullStr2 = null;
//$bool3 = true;



//$result10 = ($nullStr2 == $bool3) ? "Yes" : "No";
//echo $result10 . PHP_EOL;

//echo "example6" . PHP_EOL;
//$str1 = "Hello";
//$str2 = "Marina";
//$result11 = ($str1 === $str2) ? "Yes" : "No";
//echo $result11 . PHP_EOL;
//$result12 = ($str1 == $str2) ? "Yes" : "No";

//echo "example7" . PHP_EOL;
//$array1 = [];
//$str4 = "";
//$result13 = ($array1 == $str4) ? "Yes" : "No";
//echo $result13 . PHP_EOL;


//$value = 2;
//switch ($value) {
   // case 1 :
       // echo "green" . PHP_EOL ;
        //break;
    //case 2 :
        //echo "red" . PHP_EOL ;
       // break;
   // case 3:
        //echo "blue" . PHP_EOL;
       // break;
    //case 4 :
        //echo "brown" . PHP_EOL ;
       // break;
    //case 5 :
       // echo "violet" . PHP_EOL;
       // break;
   // case 6 :
       // echo "black" . PHP_EOL ;
      //  break;
   // default :
        //echo "white" . PHP_EOL;
        //break;
//}
// 2 вариант
//function getColorName ($value): string  {
    //switch ($value) {
       // case 1 :
           // return "green" ;
        //case 2 :
           // return "red" ;
        //case 3 :
            //return "blue" ;
        //case 4 :
           // return "brown" ;
      //  case 5 :
          //  return "violet" ;
        //case 6 :
           // return "black" ;
        //default  :
            //return "white" ;
   // }

//}
//echo "black" .  getColorName($value) ;

//homework 6
function nameActions  ( int $a , int $b , $callback = null): float|int
{

    $result = $a * $b ;

    if ($callback && is_callable($callback)) {
        $callback($result);
    }
    return $result;
}
$secondArgument = function ($arg) {
    echo "Вивод Аргумент : $arg\n";
};
echo "Результат Умножения :" . nameActions(10, 6) . "\n";















