<?php

// $date = new DateTime();

// Mengatur Format DateTime
// $string = $date->format("d-m-Y H:i:s");
// echo "Waktu saat ini : $string" . PHP_EOL;

// Merubah input menjadi datetime
// $date = DateTime::createFromFormat("d-m-Y H:i:s", "15-05-2002 07:00:00", new DateTimeZone("Asia/Jakarta"));
// $format = $date->format("d-m-Y H:i:s");
// echo "Waktu saat ini : $format" . PHP_EOL;

// Merubah Tanggal Bulan Tahun
// $date->setDate(2002,5,15);

// Merubah Waktu
// $date->setTime(07,00,00,0);

// menambah satu tahun
// $date->add(new DateInterval("P1Y"));

// menambah satu bulan
// $date->add(new DateInterval("P1M"));

// menambah satu Minggu
// $date->add(new DateInterval("P1W"));

// menambah satu Hari
// $date->add(new DateInterval("P1D"));

// menambah satu Jam
// $date->add(new DateInterval("P1H"));

// mengurangi satu Tahun
// $minusyears = new DateInterval("P1Y");
// $minusyears->invert = true;
// $date->add($minusyears);

// Merubah TimeZone
// $date->setTimezone(new DateTimeZone("America/Toronto"));

// var_dump($date);