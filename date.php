<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date</title>
</head>
<body>

<p><b>Date</b></p>

<?php
$miesiac = array('styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec', 'sierpień', 'wrzesień', 'październik', 'listopad', 'grudzień');

$dni = array('niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota');

$nr_dna = date("w");
$nr_miesiaca = date("n");


echo 'Dziś jest ' . $dni["$nr_dna"] . ', ' . date("d") . ' ' . $miesiac["$nr_miesiaca"] . ' ' . date("Y") . ', '
    . date("h:i:sa") . ', ' . date("O") . ' GMT';

?>

</body>
</html>

