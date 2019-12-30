<?php

//$teraz = time();
//echo $teraz;

$teraz=time();
echo $teraz . '<br>';
echo date("Y-m-d H:i:s",$teraz).'<br>';

$date_str = date("Y-n-d-H-i-s",$teraz);

echo $date_str.'<br>';

list($y, $m, $d, $h, $i, $s) = explode("-", $date_str);

echo $y.'<br>';
echo $m.'<br>';
echo $d.'<br>';
echo $h.'<br>';
echo $i.'<br>';
echo $s.'<br>';

//$t2  = mktime(date("H"), date("i"), 0, date("n")  , date("d"), date("Y"));

$t2 = mktime(); ////
$time2 = mktime($h,$i,$s,$m, $d, $y);

$time1 = mktime(11,30,0,6, 4, 2019);////
//---------sek
$time_sek = abs($time1 - $t2);

echo "sek: $time_sek  s <br>";

$time_sek1 = abs($time1-$time2);

echo "sek1: $time_sek1  s <br>";

//----------dni

$t_dni = $time_sek/86400; ////

echo 'Dni do kolokwiuma: '.$t_dni.'<br>';

echo 'dni: '.floor($t_dni).'<br>';////

$time_dni = abs(ceil(($time1-$time2)/86400));

echo 'Dni do kolokwiuma: '.$time_dni.'<br>';

//------------godz



$time_godz_sek = $time_sek % 86400; ////

echo "time godz sek: $time_godz_sek <br>";

echo 'godz: '.floor($time_godz_sek / 3600). '<br>'; ////

$time_godz = abs(ceil(($time1-$time2)/(60*60)%24));

echo 'Godziny do kolokwiuma: '. $time_godz.'<br>';



$time_min_sek = $time_godz_sek % 3600;//TODO

echo 'Min(sek) do kolokwiuma: '. $time_min_sek.'<br>';

echo 'Min do kolokwiuma: '. floor($time_min_sek/60).'<br>';

$time_sek = $time_min_sek % 60;

echo "sek: $time_sek <br>";