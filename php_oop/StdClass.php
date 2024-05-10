<?php

$array = [
    "nama" => "Ibnu Darma Maulana",
    "umur" => 21,
    "hoby" => array(
        "Bisnis",
        "Main Volly",
        "Ngoding"
    )
];

$object = (object)$array;

$ObjectToArray = (array)$object;

var_dump($object);