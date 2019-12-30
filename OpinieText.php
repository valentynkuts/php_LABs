<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PlikWrite</title>
</head>
<body>

<p><b>Wyraż swoja opinia </b> (max 255 znaków):</p>

<FORM action="" method="POST">
    <textarea name="opinia" cols=20 rows=10></textarea>

    <p><input type="submit" name="Wyślij" value="Wyślij"></p>

</FORM>

<?php

if (isset($_POST['Wyślij'])) {

    $stare_opinie = file_get_contents("test.txt");

    //echo $stare_opinie;

    $opinia_str = date("d-m-Y H:i:s")."\n".$_POST['opinia']."\n";

    if (!file_put_contents("test.txt", $opinia_str)) {
        echo("Wystąpił błąd. Zapis nie został dokonany <br>");
    } else {
        echo 'Zapisana opinie<br>';
    }

    if (!file_put_contents("test.txt", $stare_opinie, FILE_APPEND)) {
        echo("Wystąpił błąd. Zapis nie został dokonany <br>");
    } else {
        echo 'Zapisane stare opinie <br>';
    }
}

echo nl2br(file_get_contents("test.txt"));

?>

</body>
</html>

