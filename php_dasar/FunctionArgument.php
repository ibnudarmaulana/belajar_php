<?php

function sumAll(...$parameter){
    $total = 0;
    foreach($parameter as $value){
        $total += $value;
    }

    echo "Total dari " . implode(",",$parameter) . " = $total" . PHP_EOL;
}

sumAll(10,20,30);

$array = [10,20,30];
sumAll(...$array);