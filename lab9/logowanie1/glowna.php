<?php
include_once "connection.php";
session_start();
if (!isset($_SESSION['zalogowany'])) {

    header("Location: index.php");
    exit();
} else {

    $db_lnk = connection();

    $login = $_SESSION['zalogowany'];

    $query = "SELECT * FROM users WHERE nazwa = '$login'";
    $result = mysqli_query($db_lnk, $query);
    $row = mysqli_fetch_assoc($result);

    //print_r($row);

    $t_rejesrt = $row['rejestracja'];
    $dataRejestr = date("d-m-Y  H:i:s", $t_rejesrt);
    $t_OstatLogow = ($row['logowanie'] == 0) ? time() : $row['logowanie'];
    $dataOstatLogow = date("d-m-Y  H:i:s", $t_OstatLogow);
    $ip = $row['ip'];

    echo '<br>';
    //echo $t_rejesrt . '<br>';
    echo 'Data rejestracji: '.$dataRejestr . '<br>';
    echo 'Data ostatnego logowania: '.$dataOstatLogow . '<br>';
    echo 'IP: '.$ip . '<br>';

    $t_OstatLogow = time();
    $ip = $_SERVER['REMOTE_ADDR'];
    $query = "UPDATE users SET logowanie = '$t_OstatLogow',ip = '$ip' WHERE nazwa = '$login'";

    if(!mysqli_query($db_lnk, $query)){
        echo "Error update";
    }



}

closeConnection($db_lnk);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <title>Moja strona WWW</title>
</head>
<body>
<div>
    Witamy na stronie.
</div>
<p>Pamietaj o wylogowaniu przed opuszczeniem strony.</p>
<p><a href="logout.php">Wylogowanie</a></p>
</body>
</html>
