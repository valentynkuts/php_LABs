<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PlikWrite</title>
</head>
<body>

<p><b>PlikWrite</b></p>

<?php
$str = 'Przykładowy wiersz tekstu. Test.';
if (!$fd = fopen('./test.txt', 'ab')) {   // wb -rewrite binar...
    echo("Nie moge otworzyć pliku test.txt.");
} else {
    if (fwrite($fd, $str) === false) {
        echo 'Wystąpił błąd. Zapis nie został dokonany';
    }
    else{
        echo 'Zapisany';
    }
    fclose($fd);
}

echo file_get_contents("test.txt");

?>

</body>
</html>

