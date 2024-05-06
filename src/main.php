<?php
require_once 'Rectangle.php';
require_once 'Circle.php';

try {
    $rectangle = new Rectangle(7, 8);

    echo "Rectangle: Length = {$rectangle->getArea()}, Width = {$rectangle->getPerimeter()},
Area = {$rectangle->getArea()}, Perimeter = {$rectangle->getPerimeter()}\n
";

        $circle = new Circle(9);

    echo "Circle: Radius = {$circle->getArea()}, Area = {$circle->getArea()}, Circumference = {$circle->getPerimeter()}\n";
} catch (Exception $e) {
    echo "Error:" . $e->getMessage() . "\n";
}

