<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>wyznacznik macierzy</title>
</head>
<body>

<p><b>Wyznacznik macierzy 3 x 3</b></p>

<?php
if (isset($_POST['Oblicz'])) {

    $macierzy3x3 = array(array(), array(), array());

    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= 3; $j++) {
            $macierzy3x3[$i][$j] = $_POST['liczba' . $i . $j];
        }
    }

    $wyznacznik = $macierzy3x3[1][1] * $macierzy3x3[2][2] * $macierzy3x3[3][3] + $macierzy3x3[1][2] * $macierzy3x3[2][3] * $macierzy3x3[3][1] +
        $macierzy3x3[1][3] * $macierzy3x3[2][1] * $macierzy3x3[3][2] - $macierzy3x3[1][3] * $macierzy3x3[2][2] * $macierzy3x3[3][1] -
        $macierzy3x3[1][1] * $macierzy3x3[2][3] * $macierzy3x3[3][2] - $macierzy3x3[2][1] * $macierzy3x3[1][2] * $macierzy3x3[3][3];

}

if (isset($_POST['Wyczyśż'])) {
    unset($_POST);
}
?>

<FORM action="" method="POST">

    <input type="number" name="liczba11" value="<?= $_POST['liczba11']; ?>">
    <input type="number" name="liczba12" value="<?= $_POST['liczba12']; ?>">
    <input type="number" name="liczba13" value="<?= $_POST['liczba13']; ?>">
    <br>

    <input type="number" name="liczba21" value="<?= $_POST['liczba21']; ?>">
    <input type="number" name="liczba22" value="<?= $_POST['liczba22']; ?>">
    <input type="number" name="liczba23" value="<?= $_POST['liczba23']; ?>">
    <br>

    <input type="number" name="liczba31" value="<?= $_POST['liczba31']; ?>">
    <input type="number" name="liczba32" value="<?= $_POST['liczba32']; ?>">
    <input type="number" name="liczba33" value="<?= $_POST['liczba33']; ?>">
    <br>
    <p>Wyznacznik macierzy A</p>
    Det A =  <input type="number" name="wyznacznik" value="<?= $wyznacznik; ?>">

    <p><input type="submit" name="Oblicz" value="Oblicz">
    <input type="submit" name="Wyczyśż" value="Wyczyśż"></p>

</FORM>

</body>
</html>
