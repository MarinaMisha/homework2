<?php
require_once 'PerformanceFunctionality.php';
require_once 'ClassF.php';
require_once 'ClassA.php';


$classA = new ClassA();
$classA->performanceMethod();
$classA->methodA();

$classF = new ClassF();
$classF->performanceMethod();
$classF->methodF();
