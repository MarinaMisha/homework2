<?php
require_once 'Helper.php';

#[AllowDynamicProperties] class User
{
    use Helper;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


}