<p>KALKULATOR</p>
<hr>
<p>Prosty</p>
<FORM action="" method="POST">

    <input name="liczba1">


    <select name="dzialanie">
        <option value="dodawanie"> dodawanie</option>
        <option value="odejmojwanie"> odejmojwanie</option>
        <option value="mnożenie"> mnożenie</option>
        <option value="dzielenie"> dzielenie</option>
    </select>

    <input name="liczba2">

    <p><input type="submit" name="oblicz" value="oblicz"></p>

</FORM>

<?php
if (isset($_POST['oblicz'])) {

    $licz1 = $_POST['liczba1'];
    $licz2 = $_POST['liczba2'];

    $dzialanie = $_POST['dzialanie'];

    if ($dzialanie == "dodawanie") {
        echo "wynik:" . ($licz1 + $licz2);
    }

    if ($dzialanie == "odejmojwanie") {
        echo "wynik:" . ($licz1 - $licz2);

    }

    if ($dzialanie == "mnożenie") {
        echo "wynik:" . ($licz1 * $licz2);

    }

    if ($dzialanie == "dzielenie") {
        echo "wynik:" . ($licz1 / $licz2);

    }
}

?>

<hr>
<p>Zaawansowany</p>

<FORM action="" method="POST">

    <input name="liczba">

    <select name="dzialanie1">
        <option value="cos"> cos</option>
        <option value="sin"> sin</option>
        <option value="tg"> tg</option>
        <option value="dziesietne"> dziesietne na binarne</option>
        <option value="binarne"> binarne na dziesietne</option>
        <option value="dziesietne1"> dziesietne na szesnastkowe</option>
        <option value="szesnastkowe"> szesnastkowe na dziesietne</option>
        <option value="stopnie"> stopnie na radiany</option>
        <option value="radiany"> radiany na stopnie</option>
    </select>

    <p><input type="submit" name="oblicz1" value="oblicz1"></p>

</FORM>

<?php

if (isset($_POST['oblicz1'])) {

    $liczba = $_POST['liczba'];

    $dzialanie1 = $_POST['dzialanie1'];

    switch ($dzialanie1) {
        case "cos":
            echo "wynik:" . cos(deg2rad($liczba));
            break;
        case "sin":
            echo "wynik:" . sin(deg2rad($liczba));
            break;
        case "tg":
            echo "wynik:" . tan(deg2rad($liczba));
            break;
        case "dziesietne":
            echo "wynik:" . decbin($liczba);
            break;
        case "binarne":
            echo "wynik:" . bindec($liczba);
            break;
        case "dziesietne1":
            echo "wynik:" . dechex($liczba);
            break;
        case "szesnastkowe":
            echo "wynik:" . hexdec($liczba);
            break;
        case "stopnie":
            echo "wynik:" . deg2rad($liczba);
            break;
        case "radiany":
            echo "wynik:" . rad2deg($liczba);
            break;
    }

}
?>
<hr>