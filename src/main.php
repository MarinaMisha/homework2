<?php
require_once 'ComplexMathOperations.php';
$math = new ComplexMathOperations();
echo $math->operate(5, 3, 'add');
echo $math->operate(10, 4, 'subtract');
echo $math->operate(6, 2, 'multiply');
echo $math->operate(8, 2, 'divide');
echo $math->operate(10, 0, 'divide');
echo $math->power(2, 3);
echo $math->factorial(5);