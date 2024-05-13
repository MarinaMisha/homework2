<?php
require_once 'User.php';
require_once 'main1.php';
$user = new User('Marina '."\n", 25);
echo $user->getName();
echo $user->getAge();