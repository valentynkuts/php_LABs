<?php
session_start();
ini_set('error_reporting', E_ALL);
include_once "pdo_connection.php";
$current_id = 0;

if (isset($_GET['id'])) {

    $flag = $_GET['id'];

    $query = "SELECT min(id),max(id) FROM Blog";
    $result = $dbo->query($query);
    $row = $result->fetch();
    $min = $row[0];
    $max = $row[1];
//    echo $min;
//    echo $max;
//    $query = "SELECT min(id) FROM Blog";
//    $result = $dbo->query($query);
//    $row = $result->fetch();
//    $min = $row[0];

    if ($flag == 'next') {

        $current_id = $_SESSION['current'] == $max ? 0 : $_SESSION['current'];
        $query = "SELECT * FROM Blog WHERE id = (SELECT min(id) FROM Blog  WHERE id > $current_id)";
        $result = $dbo->query($query);
        $row = $result->fetch(PDO::FETCH_OBJ);

        $id = $row->id;
        $tytul = $row->tytul;
        $data = $row->data_czas;
        $tekst = $row->tekst;

        $_SESSION['current'] = $id;

    } elseif ($flag == 'prev') {

        $current_id = $_SESSION['current'] == $min ? $max+1 : $_SESSION['current'];
        $query = "SELECT * FROM Blog WHERE id = (SELECT max(id) FROM Blog  WHERE id < $current_id)";
        $result = $dbo->query($query);
        $row = $result->fetch(PDO::FETCH_OBJ);

        $id = $row->id;
        $tytul = $row->tytul;
        $data = $row->data_czas;
        $tekst = $row->tekst;

        $_SESSION['current'] = $id;

    } else {

        $current_id = $_SESSION['current'];
        $query = "SELECT * FROM Blog WHERE id = $current_id";
        $result = $dbo->query($query);
        $row = $result->fetch(PDO::FETCH_OBJ);

        $id = $row->id;
        $tytul = $row->tytul;
        $data = $row->data_czas;
        $tekst = $row->tekst;

        // $current = $id;
        $_SESSION['current'] = $id;

    }

} else {

    //$_SESSION['current'] = 1;
    //$current_id = $_SESSION['current'];
    $query = "SELECT * FROM Blog LIMIT 1";
    $result = $dbo->query($query);
    $row = $result->fetch(PDO::FETCH_OBJ);

    $id = $row->id;
    $tytul = $row->tytul;
    $data = $row->data_czas;
    $tekst = $row->tekst;

    $_SESSION['current'] = $id;
}

$dbo = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BLOG</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
    <p><b><?= $tytul ?></b></p>
    <p><?= $data ?></p>
    <p><?= $tekst ?></p>
</div>
<div>
    <a href="index.php?id=prev">Poprzedni</a>
    <a href="index.php?id=next">Następny</a>

</div>

<div>
    <?php
    echo"<a href=\"formularzEdit.php?id=$id\">Edit</a>";
    ?>
    <a href="formularzAdd.php">Add</a>
</div>


</body>
</html>

