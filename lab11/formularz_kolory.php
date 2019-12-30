<FORM action="" method="POST">
    <fieldset>
        <legend><b>Jaki jest Twoj ulubiony kolor?</b></legend>

        czerwony  <input type="radio" name = "kolor" value="czerwony"><br>
        zielony   <input type="radio" name = "kolor" value="zielony"><br>
        niebieski <input type="radio" name = "kolor" value="niebieski"><br>
        fioletowy <input type="radio" name = "kolor" value="fioletowy"><br>
        czarny    <input type="radio" name = "kolor" value="czarny"><br>

    </fieldset>

    <p><input type="submit" name="Glosuj"></p>
</FORM>
<?php
include "pdo_connection.php";

if(isset($_POST['Glosuj']) && isset($_POST['kolor'])){

    $kolor = $_POST['kolor'];

//    echo $kolor;

    $query = "UPDATE kolory SET glosy = glosy+1 WHERE kolor = '$kolor'";

    $result = $dbo->exec($query);
}

$query = "SELECT SUM(glosy) FROM kolory";
$result = $dbo->query($query);
$row = $result->fetch();
$suma = $row[0];

//echo $suma;

$query = "SELECT kolor,glosy, (glosy*100)/$suma AS proc FROM kolory ORDER BY glosy DESC";
$result = $dbo->query($query);
?>

<table>
    <tr>
        <td>kolor</td>
        <td>glosy</td>
        <td>proc</td>
    </tr>



    <?php

    while ($row = $result->fetch(PDO::FETCH_OBJ)){
        echo "<tr>";

        echo "<td>{$row->kolor}</td>";
        echo "<td>{$row->glosy}</td>";
        echo "<td>{$row->proc}</td>";

        echo "</tr>";
    }


//    while ($row = $result->fetch()){
//        echo "<tr>";
//
//        echo "<td>$row[0]</td>";
//        echo "<td>$row[1]</td>";
//        echo "<td>$row[2]</td>";
//
//        echo "</tr>";
//    }
    ?>
</table>

