<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plik</title>
</head>
<body>

<p><b>Plik</b></p>

<?php
if (!$fd = fopen('./test.txt', 'r')) {
    echo("Nie moge otworzyć pliku test.txt.");
} else {
    while (!feof($fd)) {
        $str = fgets($fd);
        $str = nl2br($str);
        echo($str);
    }
    fclose($fd);
}

?>

</body>
</html>

