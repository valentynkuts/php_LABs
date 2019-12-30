<?php
include "pdo_connection.php";
//$_GET['id'] = 2;
$query = "SELECT * FROM news WHERE id = '".(int)$_GET['id']."'";
$result = $dbo->query($query);

?>
    <table>
        <tr>
            <td>nazwa</td>
            <td>data</td>
            <td>autor</td>
            <td>tresc</td>
        </tr>
        <?php
        while ($row = $result->fetch(PDO::FETCH_OBJ)){
            echo "<tr>";

            echo "<td>{$row->nazwa}</td>";
            echo "<td>{$row->data}</td>";
            echo "<td>{$row->autor}</td>";
            echo "<td>{$row->tresc}</td>";

            echo "</tr>";
        }

        ?>
    </table>


<?php
$dbo = null;
