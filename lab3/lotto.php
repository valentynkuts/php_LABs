<p></p><b> Lotto 6/49 </b></p><br>

<FORM action="" method="POST">

    <input type="number" name="liczba1" min=1 max=49>
    <input type="number" name="liczba2" min=1 max=49>
    <input type="number" name="liczba3" min=1 max=49>
    <input type="number" name="liczba4" min=1 max=49>
    <input type="number" name="liczba5" min=1 max=49>
    <input type="number" name="liczba6" min=1 max=49>

    <p><input type="submit" name="losowanie" value="losowanie"></p>

</FORM>


<?php

if (isset($_POST['losowanie'])) {


    $lotto = array();

    $counter = 0;

    while ($counter < 6) {

        $los = rand(1, 49);

        if (!in_array($los, $lotto)) {

            array_push($lotto, $los);
            $counter++;

        }
    }

    sort($lotto);

    echo'<p></p><b> Losowanie </b></p><br>';

    foreach ($lotto as $x) {
        echo '<img src = "images/p' . $x . '.png" width = 80 heigth = 80>';
    }

    echo'<p></p><b> Moje liczby </b></p><br>';

    $lotto2 = array($_POST['liczba1'], $_POST['liczba2'], $_POST['liczba3'], $_POST['liczba4'], $_POST['liczba5'], $_POST['liczba6']);

    foreach ($lotto2 as $x) {
        echo '<img src = "images/p' . $x . '.png" width = 80 heigth = 80>';
    }

    echo'<p></p><b> Wynik </b></p><br>';

    $lotto3 = array_intersect($lotto, $lotto2);

    foreach ($lotto3 as $x) {
        echo '<img src = "images/p' . $x . '.png" width = 80 heigth = 80>';
    }

}