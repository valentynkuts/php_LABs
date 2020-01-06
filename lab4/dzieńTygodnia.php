<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dzień tygodnia</title>
</head>
<body>

<p><b>Dzień tygodnia</b></p>

<FORM action="" method="POST">

    dzien <input type="number" name="dzien"><br>
    miesiąc <input type="number" name="miesiąc"><br>
    rok <input type="number" name="rok"><br>

    <p><input type="submit" name="Oblicz" value="Oblicz"></p>

</FORM>

<?php
if (isset($_POST['Oblicz'])) {

    $dni = array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');

    $d = $_POST['dzien'];
    $m = $_POST['miesiąc'];
    $r = $_POST['rok'];

    $date = mktime(0, 0, 0, $m, $d, $r);
    $nr_dna = date("w", $date);

    echo $dni["$nr_dna"];

}
?>

</body>
</html>


