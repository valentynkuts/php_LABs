<?php
if (!isset($_COOKIE['nazwa']) && !isset($_POST['nazwa'])) {

    include "header.html";
    include "form.html";
    include "footer.html";

} else if (isset($_POST['nazwa']) && !isset($_COOKIE['nazwa'])) {

    include "header.html";

    echo 'Hello ' . $_POST['nazwa'] . '<br>';
    setcookie("nazwa", $_POST['nazwa']);

    $path_to_file = './licznik.txt';
    $lizcnik = getDatafromFile($path_to_file);

    setcookie("licznik", $lizcnik);
    echo 'licznik: ' . $lizcnik . '<br>';

    writeDatatoFile($path_to_file, $lizcnik + 1);

    include "footer.html";

} else {

    include "header.html";

    echo 'Hello( cookie ) ' . $_COOKIE['nazwa'] . '<br>';

    $lizcnik = $_COOKIE['licznik'];

    echo 'licznik: ' . $lizcnik . '<br>';

    include "footer.html";

}

function getDatafromFile($path_to_file)
{
    if (!$fd = fopen($path_to_file, 'r')) {
        echo("Nie moge otworzyć plik.");
    } else {

        $liczba = fgets($fd);
        $liczba = trim($liczba);
        fclose($fd);
        return $liczba;
    }

}

function writeDatatoFile($path_to_file, $liczba)
{
    if (!$fd = fopen($path_to_file, 'wb')) {
        echo("Nie moge otworzyć plik.");
    } else {

        if (fwrite($fd, $liczba) === FALSE) {
            echo 'Wystąpił błąd. Zapis nie został dokonany';
        }

        fclose($fd);
    }

}


?>
