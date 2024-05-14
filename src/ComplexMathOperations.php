<?php

class ComplexMathOperations
{
    public function operate($a, $b, $operation): float {
        return match ($operation) {
            'add' => $this->add($a, $b),
            'subtract' => $this->subtract($a, $b),
            'multiply' => $this->multiply($a, $b),
            'divide' => $this->divide($a, $b),
            default => "Невідома операція",
        };
    }

    private function add($a, $b): float {
        return $a + $b;
    }

    private function subtract($a, $b): float {
        return $a - $b;
    }

    private function multiply($a, $b): float {
        return $a * $b;
    }

    private function divide($a, $b): float {
        if ($b === 0) {
            return "Ділення на нуль!";
        } else {
            return $a / $b;
        }
    }

    public function power($base, int $exponent): float {
        return pow($base, $exponent);
    }

    public function factorial(int $n): int {
        if ($n < 0) {
            return "Факторіал визначений тільки для невід'ємних чисел";
        } elseif ($n === 0) {
            return 1;
        } else {
            return $n * $this->factorial($n - 1);
        }
    }


}