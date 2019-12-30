<?php
require 'smart_conn.php';
$temp = file("irregular_verbs.txt");
$irr_verbs = array();
foreach ($temp as $linia){
    $irr_verbs[] = explode("|", trim($linia));
}
$tp1->assign('irr_verbs',$irr_verbs);
$tp1->display('szablon3.tpl');
