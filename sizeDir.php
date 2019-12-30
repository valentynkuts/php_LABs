<FORM action="" method="POST">

    <select name="listaOption">
        <option value=".">.</option>
        <option value="..">..</option>
        <option value="dir1">dir1</option>
        <option value="dir2">dir2</option>
        <option value="dir3">dir3</option>
    </select>

    <input type="submit" name="OK" value="OK">

</FORM>


<?php

function dirsize($dir)
{

    $size = 0;

    if (!($fd = opendir($dir)))
        exit ("Nie mogę otworzyć katalogu $dir");

    while (($file = readdir($fd)) !== false) {

        if ($file != '.' && $file != '..') {

            if (is_dir("$dir/$file")) {
                $size += dirsize("$dir/$file");
            } else {
                $size += filesize("$dir/$file");
            }
        }
    }
    closedir($fd);

    return $size;
}

if (isset($_POST['OK'])) {

    //echo $_POST['listaOption']. '<br>';
    $dir = $_POST['listaOption'];

    if ($dir !== '.')
        $dir = './' . $dir;
    else
        $dir = './';

    $ds = dirsize($dir);

    echo 'size of directory ( ' . $dir . '): ' . $ds . ' B';


}