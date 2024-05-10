<?php

require_once "Person.php";

$person = new Person();

$person->name = "Ibnu Darma Maulana";
$person->age = 21;
$person->address = "West Java";
$person->country = "Indonesia";

echo "Name : {$person->name}" . PHP_EOL;
echo "Age : {$person->age}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;
echo Person::AUTHOR . PHP_EOL;