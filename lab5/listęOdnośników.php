<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>listę odnośnikówik</title>
</head>
<body>

<p><b>listę odnośników</b></p>

<?php
if (!$fd = fopen('./listę_odnośników.txt', 'r')) {
    echo("Nie moge otworzyć pliku test.txt.");
} else {
    while (!feof($fd)) {
        $linia = fgets($fd);
        $index = strpos($linia, ' ');
        $adres = substr($linia, 0, $index);
        //echo $adres."\n";
        $opis = substr($linia, $index + 1);

        echo '<ul>';
        echo '<li><a href = "' . $adres . '">' . $opis . '</a> </li>';
        echo '</ul>';

    }
    fclose($fd);
}

?>

</body>
</html>

