<?php

// Factorial Problem

function factorial(int $value){
    if($value == 1){
        return 1;
    }else{
        return $value * factorial($value - 1);
    }
}

var_dump(factorial(5));