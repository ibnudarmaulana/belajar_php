<?php

// $nama = ["ibnu", "geral", "restu"];

// for($i=0; $i < count($nama);$i++){
//     echo "Nama ke-$i = $nama[$i]" . PHP_EOL;
// }
// ===================================================
// $names = ["ibnu", "geral", "restu"];

// $angka = 1;
// foreach($names as $name){
//     echo "$angka. $name" . PHP_EOL;
//     $angka++;
// }
// ===================================================

$person = [
    "nama" => "Ibnu Darma Maulana",
    "umur" => 21,
    "hoby" => "Basket"
];

foreach($person as $key => $value){
    echo "$key = $value" . PHP_EOL;
}