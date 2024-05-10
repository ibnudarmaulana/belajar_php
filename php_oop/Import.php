<?php

require_once "Person.php";

use App\Person as Orang;

$orang = new Orang();
$orang->name = "Ibnu Darma";
$orang->sayhello("ibnu");
