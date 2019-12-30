<?php
require 'smart_conn.php';
$temp = file("wyniki.txt");
$wyniki= array();

foreach ($temp as $linia){
    $wyniki[] = explode("*", trim($linia));
}

$tp1->assign('wyniki',$wyniki);
$tp1->display('szablon4.tpl');
