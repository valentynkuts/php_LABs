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

<FORM action="" method="POST" class="form">
    <div class="form-group">
        <fieldset>
            <legend>dodawanie posta</legend>

            <p><?= date("Y-m-d H:i:s") ?></p>

            <p>Tytul</p>
            <p><input type="text" name="tytul" placeholder="tytul" value="" class="form-control"></p>

            <!--<p>Data</p> -->
            <!-- <p><input name="data" placeholder="<?= date("Y-m-d H:i:s") ?>"></p> -->

            <p>Tekst</p>
            <p><textarea name="text" placeholder="Wpisz tutaj treść swojej wiadomości ..." value="" class="form-control"></textarea></p>
        </fieldset>

        <p><input type="submit" name="Add" value="Add"></p>
        <p><a href="index.php" class="btn btn-default btn-sm">Home</a></p>
    </div>
</FORM>

</body>
</html>

<?php
include_once "pdo_connection.php";

if (isset($_POST['Add'])) {

    if (!empty($_POST['tytul']) && !empty($_POST['text'])) {

        $tytul = $_POST['tytul'];
        $data = date("Y-m-d H:i:s");
        $tekst = $_POST['text'];

        $query = "INSERT INTO Blog (tytul,data_czas,tekst) VALUES ('$tytul','$data','$tekst')";
        $result = $dbo->exec($query);

    } else {
        echo '<p><b>Proszę wypełnić wszystkie pola.</b></p>';
    }

}
$dbo = null;
?>