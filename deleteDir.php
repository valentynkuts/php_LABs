<?php

function deleteDir($dir)
{

    if (!($fd = opendir($dir)))
        exit ("Nie mogę otworzyć katalogu $dir");

    while (($file = readdir($fd)) !== false) {

        if ($file != '.' && $file != '..') {

            if (is_dir("$dir/$file")) {
                deleteDir("$dir/$file");
            } else {
                unlink("$dir/$file");
            }
        }
    }

    closedir($fd);

    return rmdir($dir);

}

$dir = "dir4";

if (deleteDir($dir))
    echo 'direktory deleted';




