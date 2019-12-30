<?php
session_start();

if (isset($_SESSION['zalogowany'])) {

    unset($_SESSION['zalogowany']);

} else {

    header("Location: index.php");
    exit();
}

if (isset($_COOKIE[session_name()])) {

    setcookie(session_name(), '', time() - 360);
}

session_destroy();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <title>Moja strona WWW</title>
</head>
<body>
<p>Wylogowanie prawidlowe</p>
<p><a href="index.php">Powrot do strony logowania</a></p>
</body>
</html>
