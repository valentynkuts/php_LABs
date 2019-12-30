<?php
require ('./libs/Smarty.class.php');

$tp1 = new Smarty();
$tp1->template_dir = './templates/';
$tp1->compile_dir = './templates_c/';
$tp1->assign('data',date('d.m.Y'));
$tp1->display('szablon1.tpl');