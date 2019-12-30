<?php

$dir = "./";
$arr = scandir("$dir");

echo "<b>Dir</b><br>";

foreach ($arr as $file) {
    if ($file != '.' && $file != '..') {
        if (is_dir($file)) {
            echo "$file <br>";
        }

    }
}

echo "<b>Pliki</b><br>";

foreach ($arr as $file) {
    if ($file != '.' && $file != '..') {
        if (is_file($file)) {
            echo "$file <br>";
        }
    }
}