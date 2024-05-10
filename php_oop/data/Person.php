<?php

class Person
{

  const AUTHOR = "Ibnu Darma Maulana";

  var string $name = "Masukan nama";
  var ?int $age = null;
  var string $address ="Masukan alamat";  
  var string $country = "Masukan Kewarganegaraan"; 
  
  function sayhello(string $name){
    echo "Hello my name is {$name}" . PHP_EOL;
  }

  function info(){
    echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
  }
}