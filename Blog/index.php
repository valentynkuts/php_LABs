<?php
session_start();
//ini_set('error_reporting', E_ALL);
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

        $current_id = $_SESSION['current'] == $min ? $max + 1 : $_SESSION['current'];
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
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="przykład/css/bootstrap.css">
    <script src="przykład/js/jquery.js"></script>
    <script src="przykład/js/bootstrap.js"></script>

</head>
<body>
<div class="panel panel-default">

    <div class="page-header">
        <p><b>BLOG</b></p>
    </div>
    <!--------------------->
    <div class="panel-body">

        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <p><b><?= $tytul ?></b></p>
                    <p><?= $data ?></p>
                </div>


                <div class="col-md-12 text-center">
                    <p><?php echo $tekst; ?></p>
                </div>

                <div class="col-md-12 text-center">
                    <a href="index.php?id=prev" class="btn btn-default btn-sm">Poprzedni</a>
                    <a href="index.php?id=next" class="btn btn-default btn-sm">Następny</a>
                </div>


            </div>

        </div>
        <!--------------------->
        <div class="panel-footer">
            <?php echo "<a href=\"formularzEdit.php?id=$id\" class=\"btn btn-default btn-sm\">Edit</a>"; ?>
            <a href="formularzAdd.php" class="btn btn-default btn-sm">Add</a>
        </div>

    </div>
</div>
</body>
</html>

