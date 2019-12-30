<?php

function __autoload($nazwa_klasy){
    include $nazwa_klasy.'.php';
}

$u = new Ubezpieczenie('BMW',10000,2,
    44.5,55.5,12.8,
    4000,25);

$cena = $u->obliczCenu();

echo 'cena: '.$cena;
