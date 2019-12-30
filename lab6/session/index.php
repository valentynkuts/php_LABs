<?php
session_start();
if (isset($_SESSION['zalogowany'])) {

    header("Location:glowna.php");
}

if (isset($_POST['login'])) {

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if (($login == 'student') && ($haslo == 'student')) {
        $_SESSION['zalogowany'] = $login;
        header("Location:glowna.php");

    } else {
        echo 'Niepoprawne dane logowania.';
    }

}
include "formularz.html";

?>
