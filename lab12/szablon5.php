<?php
include "pdo_connection.php";
require 'smart_conn.php';

$query = "SELECT marka FROM samochody";
$result = $dbo->query($query);

$marki = array();
while ($row = $result->fetch()){
    $marki[] = $row[0];
}

$marki = array_unique($marki);

$tp1->assign('marki_options',$marki);
$tp1->assign('marki_values',$marki);
$tp1->assign('mySelect', 0);

if(isset($_POST['submit'])){
    $index = $_POST['marka'];
    $marka = $marki[$index];
    $query = "SELECT * FROM samochody WHERE marka =  '$marka'";
    $result = $dbo->query($query);

    $wyniki= array();
$i=0;
    while ($row = $result->fetch(PDO::FETCH_OBJ)){

        $wyniki[$i]['marka'] = $row->marka;
        $wyniki[$i]['model'] = $row->model;
        $wyniki[$i]['rocznik'] = $row->rocznik;
        $wyniki[$i]['kolor'] = $row->kolor;
        $wyniki[$i]['stan'] = $row->stan;
        $i++;

    }

    //print_r($wyniki);
    $tp1->assign('wyniki',$wyniki);
}

$tp1->display('szablon5.tpl');

