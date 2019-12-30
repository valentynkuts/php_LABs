<?php
include "pdo_connection.php";
require 'smart_conn.php';
$marka = 'Toyota';
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
$tp1->assign('wyniki',$wyniki);
print_r($wyniki);
$tp1->display('szablon6.tpl');