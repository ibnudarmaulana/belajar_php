<?php
require_once __DIR__ . "/vendor/autoload.php";

use APP\Data\People;

$people = new People("ibnu");
$people->sayHello("Budi");