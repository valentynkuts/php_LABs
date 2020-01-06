<?php


$time2 = mktime();

$time1 = mktime(11, 30, 0, 6, 4, 2019);

//---------sek

$time_sek = abs($time1 - $time2);

//echo "sek: $time_sek  s <br>";

//----------dni

echo 'Dni do kolokwiuma: ' . ceil($time_sek / 86400) . '<br>';
//echo 'Dni do kolokwiuma: '.floor($time_sek/86400).'<br>';

//------------godz

$time_godz_sek = $time_sek % 86400;

echo 'Godziny do kolokwiuma: ' . ceil($time_godz_sek / 3600) . '<br>';
//echo 'Godziny do kolokwiuma: '.floor($time_godz_sek / 3600). '<br>';

//---------min

$time_min_sek = $time_godz_sek % 3600;

//echo 'Min do kolokwiuma: '. ceil($time_min_sek/60).'<br>';
echo 'Min do kolokwiuma: ' . floor($time_min_sek / 60) . '<br>';

//-----sek

$time_sek = $time_min_sek % 60;

echo "Sek do kolokwiuma: $time_sek <br>";

