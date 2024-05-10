<?php

trait Say{
    public function godBye(?string $name):void
    {
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }else {
            echo "God Bye $name" . PHP_EOL;
        }
    }

    public function hello(?string $name):void
    {
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        }else {
            echo "Hello $name" . PHP_EOL;
        }
    }
    
}

class Person {
    use Say;

}

$person = new Person();
$person->godBye("ibnu");