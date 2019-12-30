<?php


function visitcount()
{

//    if (!$db_lnk = mysqli_connect("localhost", "s18424", "VAL.KUTS")){
//        exit("Error");
//    }

    if (!$db_lnk = mysqli_connect("localhost", "root", "123")) {
        exit("Error");
    }

    if (!mysqli_select_db($db_lnk, 's18424')) {
        exit("Error");
    }

    $t = time();

    echo $t.'<br>';

    $query = "INSERT INTO czas_wisyt(czas) VALUES ('$t')";

    if(!mysqli_query($db_lnk, $query)){
        echo "Error insert";
    }

//    $query = "SELECT czas FROM czas_wisyt";
//    $result = mysqli_query($db_lnk, $query);
//    $row = mysqli_fetch_row($result);
//    $czas = $row[0];
//
//    echo $czas.'<br>';

    $t2 = $t - 30;

    echo $t2.'<br>';

    $query = "DELETE FROM czas_wisyt WHERE czas < $t2 ";
    // echo $query;
    if(!mysqli_query($db_lnk, $query)){
        echo "Error delete";
    }


    $query = "SELECT COUNT(*) FROM czas_wisyt";
    $result = mysqli_query($db_lnk, $query);
    $row = mysqli_fetch_row($result);
    $liczba = $row[0];

   // echo $liczba.'<br>';


    if (!mysqli_close($db_lnk)) {
        exit("Error");
    }

    return $liczba;


}


echo visitcount();