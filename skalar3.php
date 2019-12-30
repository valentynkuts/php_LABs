<?php
if (isset($_POST['oblicz'])) {

    $wektor1 = array();
    $wektor2 = array();

    $ile = $_POST['ile'];
    //echo $ile.'<br>';
    $skalar = 0;

    echo 'iloczyn skalarny wektora A = {';
    for ($i = 0; $i < $ile; $i++) {
        $wektor1[$i] = $_POST["poleA" . $i];
        echo $wektor1[$i] . ',';
        $wektor2[$i] = $_POST["poleB" . $i];

        $skalar += $wektor1[$i] * $wektor2[$i];

    }

    echo '} oraz wektora B = {';

    for ($i = 0; $i < $ile; $i++) {
        echo $wektor2[$i] . ',';

    }

    echo '} wynosi: ' . $skalar;

}