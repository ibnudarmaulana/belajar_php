<?php

// $sample = function(){
//     echo "hello";
// };

// $sample();

// Mengakses variable di luar function

$firstName = "Ibnu";
$lastName = "Darma";

$fullName = function() use ($firstName, $lastName){
    echo "Nama Lengkap : $firstName $lastName" . PHP_EOL;
};

$fullName();