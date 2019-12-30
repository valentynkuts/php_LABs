<?php
include_once "pdo_connection.php";
//$tytul = 'Tytul';
//$data = date("Y-m-d H:i:s");
//$tekst = 'tekst';

if (isset($_GET['id'])) {
    $current_id = $_GET['id'];
    $query = "SELECT * FROM Blog WHERE id = $current_id";
    $result = $dbo->query($query);
    $row = $result->fetch(PDO::FETCH_OBJ);

    $id = $row->id;
    $tytul = $row->tytul;
    $data = $row->data_czas;
    $tekst = $row->tekst;

}

if (isset($_POST['Edit'])) {
    $id = $_POST['id'];
    $tytul = $_POST['tytul'];
    //$data = date("Y-m-d H:i:s");
    $tekst = $_POST['text'];
    $query = "UPDATE Blog SET tytul = '$tytul',tekst = '$tekst' WHERE id = '$id'";
    $result = $dbo->exec($query);

}

if (isset($_POST['Delete'])) {
    $id = $_POST['id'];
    //$tytul = $_POST['tytul'];
    //$data = date("Y-m-d H:i:s");
    //$tekst = $_POST['text'];
    $query = "DELETE FROM Blog WHERE id = '$id'";
    $result = $dbo->exec($query);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BLOG</title>
    <link rel="stylesheet" type="text/css" href="przykład/css/bootstrap.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<script src="przykład/js/jquery.js"></script>
<script src="przykład/js/bootstrap.js"></script>

<FORM action="" method="POST">
    <fieldset>
        <legend> Redagowanie danych </legend>
        <p>Tytul</p>
        <p><input name="tytul" placeholder="tytul" value="<?= $tytul ?>" class="form-control"></p>
        <p>Data</p>
        <p><input name="data" placeholder="<?= $data ?>" class="form-control"></p>
        <p>Tekst</p>
        <p><textarea name="text" placeholder="Wpisz tutaj treść swojej wiadomości ..." value="" class="form-control"><?= $tekst ?></textarea></p>
        <input type="hidden" name="id" value="<?= $current_id ?>">
    </fieldset>

    <p><input type="submit" name="Edit" value="Edit"></p>
    <p><input type="submit" name = "Delete" value="Delete"></p>
    <p><a href="index.php" class="btn btn-default btn-sm">Home</a></p>
</FORM>

</body>
</html>

