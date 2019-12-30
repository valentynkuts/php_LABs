<p></p><b> Insert </b></p><br>

<FORM action="" method="POST">

    Imie <input type="text" name="imie"><br>
   Nazwisko <input type="text" name="nazwisko"><br>
    Rok urodzenia <input type="text" name="rok"><br>
    Miejsce urodzenia <input type="text" name="miejsce"><br>


    <p><input type="submit" name="submit" value="submit"></p>

</FORM>

<?php

if (!$db_lnk = mysqli_connect("localhost", "s18424", "VAL.KUTS")){
    exit("Error");
}
/*
if (!$db_lnk = mysqli_connect("localhost", "root", "123")){
    exit("Error");
}
*/
if(!mysqli_select_db($db_lnk,'s18424')){
    exit("Error");
}


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

    if(!mysqli_query($db_lnk, $query)){
        echo "Error insert";
    }
}

$query = "SELECT * FROM osoba";
$result = mysqli_query($db_lnk, $query);

?>
<table>
    <tr>
        <td>Id</td>
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>Rok urodzenia</td>
        <td>Miejsce urodzenia</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_row($result)){
        echo "<tr>";

        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";

        echo "</tr>";
    }


    ?>
</table>



<?php
if(!mysqli_close($db_lnk)){
    exit("Error");
}

