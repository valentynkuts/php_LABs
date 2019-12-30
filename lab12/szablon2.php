<?php
require 'smart_conn.php';
$owoce = file("owoce.txt");
$tp1->assign('dane',$owoce);
$tp1->display('szablon2.tpl');
