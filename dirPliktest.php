<?php

$dir = "./";
if (!($fd = opendir($dir)))
    exit ("Nie mogę otworzyć katalogu $dir");

while (($file = readdir($fd)) !== false) {

    echo "$file <br>";
}

closedir($fd);