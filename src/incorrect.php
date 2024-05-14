<?php
class MathOperations {

    public function add($a, $b): float {
        return $a + $b;
    }

    public function subtract($a, $b): float {
        return $a - $b;
    }

    public function multiply($a, $b): float {
        return $a * $b;
    }

    public function divide($a, $b): float {
        if ($b === 0) {
            return "Ділення на нуль!";
        } else {
            return $a / $b;
        }
    }
}

$math = new MathOperations();
echo $math->add(5, 3);
echo $math->subtract(10, 4);
echo $math->multiply(6, 2);
echo $math->divide(8, 2);
echo $math->divide(10, 0);
