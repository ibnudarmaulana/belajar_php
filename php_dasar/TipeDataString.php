<?php

$nama = 'Ibnu Darma Maulana';
$umur = 21;

echo <<<Heredoc
Hallo Nama Saya $nama
Saya Berumur $umur Tahun\n
Heredoc;

echo "<br>";

echo <<<'Nowdoc'
Hallo Nama Saya Ibnu Darma Maulana
Saya Berumur 21 Tahun
Nowdoc;