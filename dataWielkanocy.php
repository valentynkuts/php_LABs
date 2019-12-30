<p>OBLICZANIE DATY WIELKANOCY</p>

<FORM action="" method="POST">
    <fieldset>
        PODAJ ROK <input name="rok">

        <input type="submit" name="oblicz" value="oblicz">
    </fieldset>
</FORM>

<?php
if (isset($_POST['oblicz'])) {

    $rok = $_POST['rok'];


    if ($rok >= 1 && $rok <= 1582) {
        $x = 15;
        $y = 6;
    } elseif ($rok >= 1583 && $rok <= 1699) {
        $x = 22;
        $y = 2;
    } elseif ($rok >= 1700 && $rok <= 1799) {
        $x = 23;
        $y = 3;
    } elseif ($rok >= 1800 && $rok <= 1899) {
        $x = 23;
        $y = 4;
    } elseif ($rok >= 1900 && $rok <= 2099) {
        $x = 24;
        $y = 5;
    } elseif ($rok >= 2100 && $rok <= 2199) {
        $x = 24;
        $y = 6;
    } else {
        echo "Nieprawidłowy rok";
    }


    if ($rok >= 1 && $rok <= 2199) {

        $a = $rok % 19;
        $b = $rok % 4;
        $c = $rok % 7;
        $d = (19 * $a + $x) % 30;
        $f = (2 * $b + 4 * $c + 6 * $d + $y) % 7;

        if ($f == 6 && $d == 29) {
            echo "Wielkanoc wypada 26 kwietnia";
        }

        if (($f == 6 && $d == 28) && ((11 * $x + 11) % 30 < 19)) {
            echo "Wielkanoc wypada 18 kwietnia";
        }

        if (($f + $d) < 10) {
            echo "Wielkanoc wypada " . (22 + $d + $f) . " marca";
        }

        if (($f + $d) > 9) {
            echo "Wielkanoc wypada " . ($d + $f - 9) . " kwietnia";
        }
    }

}

?>