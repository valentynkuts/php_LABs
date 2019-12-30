<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
</head>
<body>

<form method="POST" action="">
    <div>

        <p> login: <input type="text" name="login"></p>
        <p> haslo: <input type="password" name="haslo"><br></p>
        <p> powtoz haslo: <input type="password" name="pass"></p>
        <p> email: <input type="email" name="email"><br></p>
        <input type="submit" name="rejestracja" value="rejestracja">

    </div>
</form>

</body>
</html>

<?php
include_once "connection.php";

if (isset($_POST['rejestracja'])) {
    //$flag = false;
    if (!empty($_POST['login']) && !empty($_POST['haslo']) && !empty($_POST['pass']) && !empty($_POST['email'])){

        if (!($_POST['haslo'] === $_POST['pass'])) {
            echo '<p>Hasla rozne</p>';

        } else {

            $login = $_POST['login'];
            $pass = md5($_POST['haslo']);
            $email = $_POST['email'];
            $timeRejestr = time();
            $ip = $_SERVER['REMOTE_ADDR'];

            $db_lnk = connection();

            $query = "SELECT nazwa FROM users WHERE nazwa = '$login'";
            $result = mysqli_query($db_lnk, $query);

            if (mysqli_num_rows($result) != 0) {

                echo '<p> Login <b>' . $login . '</b> juz istnieje </p>';

            } else {
                $query = "INSERT INTO users (nazwa,haslo,email,rejestracja,logowanie,ip) VALUES ('$login','$pass','$email',$timeRejestr,0,'$ip')";

                if (!mysqli_query($db_lnk, $query)) {
                    echo "Error insert";
                }
            }
        }
        closeConnection($db_lnk);
    } else{
        echo '<p><b>Proszę wypełnić wszystkie pola.</b></p>';
    }

}


