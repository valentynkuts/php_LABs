<?php

function __autoload($nazwa_klasy){
    include $nazwa_klasy.'.php';
}

//$obj = new Stats("localhost", "s18424", "VAL.KUTS", "s18424");
$obj = new Stats("localhost", "root", "123", "s18424");
//----------
$agent = "X".$_SERVER['HTTP_USER_AGENT'];
$system = array('Windows 2000' => 'NT 5.0', 'Windows XP' => 'NT 5.1'
,'Windows Vista' => 'NT 6.0', 'Windows 7' => 'NT 6.1'
,'Windows 8' => 'NT 6.2','Windows 10' => 'NT 10.0', 'Linux' => 'Linux');

$przegladarka = array('Internet Explorer' => 'MSIE', 'Mozilla Firefox' => 'Firefox'
,'Opera' => 'Opera', 'Chrome' => 'Chrome');

foreach ($system as $nazwa => $id)
    if (strpos($agent, $id))
        $system = $nazwa;

foreach ($przegladarka as $nazwa => $id)
    if (strpos($agent, $id))
        $przegladarka = $nazwa;
    //----------

$data = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$query  = "INSERT INTO STATS (data_czas,przegladarka,system_operacyine,ip) VALUES ('$data','$przegladarka','$system','$ip')";

$obj->insert($query);

$query2  = "SELECT * FROM STATS";

$dane = array();

$dane = $obj->select($query2);

echo '<pre>';
print_r($dane);
echo '</pre>';