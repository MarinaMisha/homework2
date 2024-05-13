<?php
require_once 'PerformanceFunctionality.php';

class ClassA
{
    use PerformanceFunctionality;

    public function methodA():void
    {
        echo "Method A from Class A . \n";

    }

}