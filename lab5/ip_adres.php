<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IP</title>
</head>
<body>

<?php

$ip = $_SERVER['REMOTE_ADDR'];

$arr = file('./adres_ip.txt');

$flag = false;

foreach ($arr as $val) {
    $str = trim($val);

    if ($ip == $str) {
        $flag = true;
        break;
    }

}
if ($flag) {
    header('Location: ./niemozna.php');
} else {
    include 'zapraszam.php';
}

?>

</body>
</html>

