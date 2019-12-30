<?php
session_start();
if (isset($_SESSION['zalogowany'])) {

    header("Location:glowna.php");
}

if (isset($_POST['login'])) {

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    $path_to_file = './account.txt';

    if (isDataInFile($path_to_file, $login, $haslo)) {
        $_SESSION['zalogowany'] = $login;
        header("Location:glowna.php");

    } else {
        echo 'Niepoprawne dane logowania.';
    }

}
include "formularz.html";


function isDataInFile($path_to_file, $login, $haslo)
{


    if (!$fd = fopen($path_to_file, 'r')) {
        echo("Nie moge otworzyć plik.");
    } else {

        while (!feof($fd)) {
            $linia = fgets($fd);
            $index = strpos($linia, ' ');
            $login_temp = substr($linia, 0, $index);
            $haslo_temp = substr($linia, $index + 1);
            $haslo_temp = trim($haslo_temp);

            if (($login == $login_temp) && ($haslo == $haslo_temp)) {

                fclose($fd);
                return TRUE;

            }

            //echo  $login_temp . ' ' . $haslo_temp .'<br>';

        }
        fclose($fd);
        return FALSE;
    }

}

?>
