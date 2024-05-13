<?php
require_once 'PerformanceFunctionality.php';

class ClassF
{
    use PerformanceFunctionality;
    public function methodF():void
    {
        echo "Method F from Class F";

    }

}