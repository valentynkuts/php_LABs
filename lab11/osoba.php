<p></p><b> Insert </b></p><br>

<FORM action="" method="POST">

    Imie <input type="text" name="imie"><br>
    Nazwisko <input type="text" name="nazwisko"><br>
    Rok urodzenia <input type="text" name="rok"><br>
    Miejsce urodzenia <input type="text" name="miejsce"><br>


    <p><input type="submit" name="submit" value="submit"></p>

</FORM>

<?php

include "pdo_connection.php";

if(isset($_POST['submit'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $rok = $_POST['rok'];
    $miejsce = $_POST['miejsce'];

//    echo $imie;
//    echo $nazwisko;
//    echo $rok;
//    echo $miejsce;

    // rok - 19...
    $query = "INSERT INTO osoba(Imie, Nazwisko,Rok_urodzenia, Miejsce_urodzenia) VALUES ('$imie', '$nazwisko',$rok,'$miejsce')";

    $result = $dbo->exec($query);
}

$query = "SELECT * FROM osoba";
$result = $dbo->query($query);

?>
<table>
    <tr>
        <td>Id</td>
        <td>Imie</td<table>
        <td>Nazwisko</td>
        <td>Rok urodzenia</td>
        <td>Miejsce urodzenia</td>
    </tr>

    <?php
    while ($row = $result->fetch(PDO::FETCH_OBJ)){
        echo "<tr>";

        echo "<td>{$row->Id}</td>";
        echo "<td>{$row->Imie}</td>";
        echo "<td>{$row->Nazwisko}</td>";
        echo "<td>{$row->Rok_urodzenia}</td>";
        echo "<td>{$row->Miejsce_urodzenia}</td>";

        echo "</tr>";
    }
    ?>
</table>



<?php
$dbo = null;


