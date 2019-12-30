

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

if(isset($_POST["edit"])) {
    $id = $_POST['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $rok = $_POST['rok'];
    $miejsce = $_POST['miejsce'];

//    echo $id;
//    echo $imie;
//    echo $nazwisko;
//    echo $rok;
//    echo $miejsce;

    // rok - 19...
    $query = "UPDATE osoba SET Imie = '$imie', Nazwisko = '$nazwisko',Rok_urodzenia = $rok, Miejsce_urodzenia = '$miejsce'
               WHERE Id = $id";

    if(!mysqli_query($db_lnk, $query)){
        echo "Error update";
    }

    unset($_GET['edit']);
}

if(isset($_GET["edit"])) {
    $editId = $_GET["edit"];
    //echo $id;
    $query = "SELECT * FROM osoba WHERE Id = $editId";
    if($result = mysqli_query($db_lnk, $query)){
        $row = mysqli_fetch_row($result);
        include "formularz.php";
    } else{
        echo "Error select";
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
        echo '<td><a href="edit.php?edit='."$row[0]".'">edit</a></td>';

        echo "</tr>";
    }

    ?>
</table>



<?php
if(!mysqli_close($db_lnk)){
    exit("Error");
}

