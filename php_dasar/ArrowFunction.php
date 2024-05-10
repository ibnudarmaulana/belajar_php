<?php

$firstName = "Ibnu";
$lastName = "Darma";

$fullName = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $fullName();