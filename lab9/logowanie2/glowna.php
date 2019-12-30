<?php
session_start();
if (!isset($_SESSION['zalogowany'])) {
    header("Location: index.php");
    exit();
}
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
