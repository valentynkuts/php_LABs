
<FORM action="" method="POST">
    <fieldset>
        <legend>dodawanie posta</legend>
        <p>Tytul</p>
        <p><input type="text" name="tytul"></p>
        <p>Autor</p>
        <p><input type="text" name="autor"></p>
        <p>Tresc</p>
        <p><textarea name="tresc"></textarea></p>
    </fieldset>

    <p><input type="submit" name ="Dodaj" value="Dodaj"></p>
</FORM>

<?php
//$data = date("Y-m-d H:i:s");

include_once "pdo_connection.php";

if (isset($_POST['Dodaj'])) {

    if (!empty($_POST['tytul']) && !empty($_POST['autor']) && !empty($_POST['tresc'])){

        $tytul = $_POST['tytul'];
        $autor = $_POST['autor'];
        $tresc = $_POST['tresc'];

        $query  = "INSERT INTO news (nazwa,data,autor,tresc) VALUES ('$tytul',now(),'$autor','$tresc')";

        $result = $dbo->exec($query);

    } else{
        echo '<p><b>Proszę wypełnić wszystkie pola.</b></p>';
    }

}
?>