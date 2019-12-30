

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

if(isset($_GET["delete"])) {
    $id = $_GET["delete"];
    //echo $id;
    $query = "DELETE FROM osoba WHERE Id = $id";
   // echo $query;
    if(!mysqli_query($db_lnk, $query)){
        echo "Error delete";
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
        echo '<td><a href="delete.php?delete='."$row[0]".'">delete</a></td>';

        echo "</tr>";
    }

    ?>
</table>



<?php
if(!mysqli_close($db_lnk)){
    exit("Error");
}

