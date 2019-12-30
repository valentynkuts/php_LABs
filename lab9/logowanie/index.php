<?php
//include_once "connection.php";
session_start();

function checkPass($user, $pass)
{

    if (!$db_lnk = mysqli_connect("localhost", "s18424", "VAL.KUTS")) {
        exit("Error");
    }


    if (!mysqli_select_db($db_lnk, 's18424')) {
        exit("Error");
    }

    //$db_lnk = connection();

    $pass = trim($pass);
    $user = trim($user);

    $query = "SELECT haslo FROM users WHERE nazwa = '$user'";
    $result = mysqli_query($db_lnk, $query);
    $row = mysqli_fetch_row($result);

    //print_r($row);

    if (!mysqli_close($db_lnk)) {
        exit("Error");
    }

    if (mysqli_num_rows($result) == 0) {

        return null;

    } else if ($row[0] != md5($pass)) {

        return null;


    } else {
        return true;
    }


}

if (isset($_SESSION['zalogowany'])) {

    header("Location: glowna.php");
    exit();

}

if (isset($_POST['user']) && isset($_POST['haslo'])) {

    if (($result = checkPass($_POST['user'], $_POST['haslo'])) !== null) {

        $_SESSION['zalogowany'] = $_POST['user'];
        header("Location: glowna.php");
        exit();

    } else {
        $komunikat = "Niepoprawne dane logowania.";
    }
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <title>Logowanie uzytkownikow</title>
</head>
<body>
<div>
    <form action="" method="post">

        <?php if (isset($komunikat)): ?>
            <div><?= $komunikat; ?></div>
        <?php endif; ?>

        <table border="0">
            <tr>
                <td>Uzytkownik:</td>
                <td>
                    <input type="text" name="user"/>
                </td>
            </tr>
            <tr>
                <td>Haslo:</td>
                <td>
                    <input type="password" name="haslo"/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Wejdz"/>
                </td>
            </tr>
        </table>
    </form>
</div>
<p><a href="rejestracja.php">Rejestracja</a></p>
</body>
</html>

