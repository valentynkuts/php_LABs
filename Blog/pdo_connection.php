<?php

$dsn = 'mysql:host=localhost;dbname=Blog';
$user = 'root';
$pass = '123';
//$user = 's18424';
//$pass = 'VAL.KUTS';
try {
    $dbo = new PDO($dsn, $user, $pass);

} catch (PDOException $e) {
    //print "Error!: " . $e->getMessage() . "<br/>";
    //die();
    echo 'Error!: ' . $e->getMessage() . '<br/>';
    exit;
}
