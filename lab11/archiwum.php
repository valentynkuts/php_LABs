<?php
include "pdo_connection.php";

$query = "SELECT id,nazwa FROM news";
$result = $dbo->query($query);

echo '<p>nazwa</p>';


while ($row = $result->fetch(PDO::FETCH_OBJ)) {

    echo "<a href = \"news.php?id={$row->id}\">{$row->nazwa}</a><br>";
}

$dbo = null;
