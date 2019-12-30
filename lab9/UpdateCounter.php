<?php

function getAndUpdateCounter(){

    if (!$db_lnk = mysqli_connect("localhost", "s18424", "VAL.KUTS")){
        exit("Error");
    }

//    if (!$db_lnk = mysqli_connect("localhost", "root", "123")){
//        exit("Error");
//    }

    if(!mysqli_select_db($db_lnk,'s18424')){
        exit("Error");
    }

    $query = "SELECT hits FROM licznic";
    $result = mysqli_query($db_lnk, $query);
    $row = mysqli_fetch_row($result);
    $licznic = $row[0];

    //echo $licznic;

    $licznic = $licznic + 1;
    $query = "UPDATE licznic SET hits = '$licznic'";

    if(!mysqli_query($db_lnk, $query)){
        echo "Error update";
    }
    $query = "SELECT hits FROM licznic";
    $result = mysqli_query($db_lnk, $query);
    $row = mysqli_fetch_row($result);
    $licznic = $row[0];


    if (!mysqli_close($db_lnk)) {
        exit("Error");
    }

    return $licznic;


}


echo getAndUpdateCounter();