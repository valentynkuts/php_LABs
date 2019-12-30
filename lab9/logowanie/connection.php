<?php
function connection()
{

    if (!$db_lnk = mysqli_connect("localhost", "s18424", "VAL.KUTS")){
        exit("Error");
    }

    if (!mysqli_select_db($db_lnk, 's18424')) {
        exit("Error");
    }

    return $db_lnk;

}

function closeConnection($db_lnk)
{
    if (!mysqli_close($db_lnk)) {
        exit("Error");
    }
}