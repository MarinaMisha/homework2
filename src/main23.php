<?php
require_once 'Helper.php';
require_once 'User.php';
$city = new City('Kyiv'. "\n", 00010);
echo $city->getName();
echo $city->getAge();

