<?php

function sumAll(...$parameter) : int
{
    $total = 0;
    foreach($parameter as $value){
        $total += $value;
    }

    return $total;

}

$hasil = sumAll(10,20,30);
echo $hasil;

// ========================================================

function ceknilai(int $nilai) : string
{
    if($nilai >= 90){
        return "A";
    }elseif($nilai >= 80){
        return "B";
    }elseif($nilai >= 70){
        return "C";
    }else{
        return "E";
    }

    echo "Ups" . PHP_EOL;
}

$nilai = ceknilai(80);

echo $nilai;