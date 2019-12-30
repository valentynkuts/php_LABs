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

if(isset($_GET["sortid"])) {
    $sort = $_GET["sortid"];
    //echo $sort;

}
else{
    $sort = 1;
   // echo $sort;

}

$query = "SELECT * FROM osoba ORDER BY $sort";

$result = mysqli_query($db_lnk, $query);
//$T = mysqli_fetch_row($result);
?>
<table>
 <tr>
     <td><a href="connection.php?sortid=1">Id</a></td>
     <td><a href="connection.php?sortid=2">Imie</a></td>
     <td><a href="connection.php?sortid=3">Nazwisko</a></td>
     <td><a href="connection.php?sortid=4">Rok urodzenia</a></td>
     <td><a href="connection.php?sortid=5">Miejsce urodzenia</a></td>
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
