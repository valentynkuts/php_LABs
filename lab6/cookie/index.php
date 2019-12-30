<?php
if (!isset($_COOKIE['nazwa']) && !isset($_POST['nazwa'])) {

    include "header.html";
    include "form.html";
    include "footer.html";

} else if (isset($_POST['nazwa'])) {

    include "header.html";

    echo 'Hello ' . $_POST['nazwa'] . '<br>';
    setcookie("nazwa", $_POST['nazwa'], time() + 60*4);
    $lizcnik = 1;
    setcookie("licznik", $lizcnik, time() + 60*4);
    echo 'licznik: '.$lizcnik .'<br>';

    include "footer.html";

} else {

    include "header.html";

    echo 'Hello( cookie ) ' . $_COOKIE['nazwa'] . '<br>';

    $lizcnik  = $_COOKIE['licznik'] + 1;
    setcookie("licznik", $lizcnik, time() + 60*4);

    echo 'licznik: '.$lizcnik .'<br>';

    include "footer.html";
}
?>
