<html>
<head>
    <meta charset=utf-8">
    <title>Galeria obrazów</title>
</head>
<body>
<?php
$imgDir = "./images";
//odczytanie parametru
if (isSet($_GET['imgid'])) {
    $imgId = $_GET['imgid'];
} else {
    $imgId = 0;
}

//odczytanie zawartości katalogu
$dir = scandir($imgDir);  // array
array_shift($dir);  // delete .
array_shift($dir);  // delete ..

foreach ($dir as $key => $val) {
    if (is_dir("$imgDir/$val")) {
        unset($dir[$key]);
        continue;
    }

    $kropka = strpos($val, ".");
    $ext = substr($val, $kropka);

    if ($ext != ".jpg" && $ext != ".png" && $ext != ".gif") {
        unset($dir[$key]);
        continue;
    }

}

sort($dir);


$count = count($dir);

//sprawdzenie poprawności parametru
if ($imgId < 0 || $imgId >= $count || !is_Numeric($imgId)) {
    $imgId = 0;
}

//ustalenie nazwy bieżącego obrazu oraz
//identyfikatorów obrazów dla odnośników
$imgName = $dir["$imgId"];
$first = 0;
$last = $count - 1;
if ($imgId < $count - 1) {
    $next = $imgId + 1;
} else {
    $next = $count - 1;
}

if ($imgId > 0) {
    $prev = $imgId - 1;
} else {
    $prev = 0;
}
?>
<div>
    <div id='obraz' style='text-align:center'>
        <?php
        echo "<img src=\"$imgDir/$imgName\" alt=\"$imgName\" />";
        ?>
    </div>
    <div id='opis' style='text-align:center'>
        <?php
        $imgId++;
        echo "Obraz $imgName ($imgId z $count)";
        ?>
    </div>
    <div id='nawigacja' style='text-align:center'>
        <?php
        echo "<a href=\"galeria.php?imgid=$first\">Pierwszy</a> ";
        echo "<a href=\"galeria.php?imgid=$prev\">Poprzedni</a> ";
        echo "<a href=\"galeria.php?imgid=$next\">Następny</a> ";
        echo "<a href=\"galeria.php?imgid=$last\">Ostatni</a> ";
        ?>
    </div>
</div>
</body>
</html>