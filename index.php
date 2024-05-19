<?php
echo phpinfo();
$dsn = 'mysql:host=mysql;port=3306;dbname=hillel';
$database = new PDO($dsn, 'marina', 'root');
var_dump($database);