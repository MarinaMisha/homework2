<?php

//function generateRandomArray( int $length , int $min , int $max) : array
//{
   // $randomArray = [] ;
    //for ($i = 0; $i < $length ; $i++) {
        //$randomArray[] = rand($min , $max);
    //}



    //return $randomArray;

//}
//$randomNumbers = generateRandomArray(20 , 2 , 200) ;
////$minNumber = min($randomNumbers);
//$maxNumber = max($randomNumbers);

//echo "Масив случайних чисел: " .implode(", " , $randomNumbers) . " " .  PHP_EOL ;

//echo "Минимальний єлемент: " . $minNumber . " "  . PHP_EOL;

//echo "Максимальний єлемент: " . $maxNumber . " " . PHP_EOL ;

//sort($randomNumbers);
//echo "Сортированний масив: " . implode(" ," , $randomNumbers) ;

function  fibonacciGenerator( int $maxNumbers): Generator
{
    $a = 0 ;
    $b = 1 ;
    while ($a < $maxNumbers) {
        yield $a ;
        $sum = $a + $b ;
        $a = $b ;
        $b = $sum;

    }

}
$maxNumbers = 100;
foreach (fibonacciGenerator($maxNumbers) as $number) {
    echo $number . " " . PHP_EOL ;
}


