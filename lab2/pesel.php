<FORM action="" method="POST">
    <fieldset>
        <legend>Podaj pesel</legend>

        <p>Pesel <input name="pesel"></p>
        <p><input type="submit" name="przeslij" value="Prześlij"></p>

    </fieldset>
</FORM>

<?php

function pesel($pesel)
{
    $rok = substr($pesel, 0, 2);
    $miesiac = substr($pesel, 2, 2);
    $dzien = substr($pesel, 4, 2);
    $plec = substr($pesel, 9, 1);

    $miesiac_int = intval($miesiac, 10);
    $rok_int = intval($rok, 10);
    $plec_int = intval($plec, 10);

    if ($miesiac_int > 12) {

        $rok_int = $rok_int + 2000;
        $miesiac_int = $miesiac_int - 20;

    } else {
        $rok_int = $rok_int + 1900;
    }

    $miesiac_str = '';

    switch ($miesiac_int) {
        case 1:
            $miesiac_str = 'stycznia';
            break;
        case 2:
            $miesiac_str = 'lutego';
            break;
        case 3:
            $miesiac_str = 'marca';
            break;
        case 4:
            $miesiac_str = 'kwietnia';
            break;
        case 5:
            $miesiac_str = 'maja';
            break;
        case 6:
            $miesiac_str = 'czerwca';
            break;
        case 7:
            $miesiac_str = 'lipca';
            break;
        case 8:
            $miesiac_str = 'sierpnia';
            break;
        case 9:
            $miesiac_str = 'września';
            break;
        case 10:
            $miesiac_str = 'października';
            break;
        case 11:
            $miesiac_str = 'listopada';
            break;
        case 12:
            $miesiac_str = 'grudnia';
            break;
    }

    $plec_str = ($plec_int % 2 == 0) ? 'kobieta' : 'mężczyzna';

    echo "Urodziłeś się  $dzien $miesiac_str $rok_int roku <br> jesteś $plec_str";
}

if (isset($_POST['przeslij'])) {

    $pesel = $_POST['pesel'];

    pesel($pesel);
}

?>

