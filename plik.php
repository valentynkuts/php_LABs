<?php
echo "<ul>";

echo "<li>";
echo $_GET['imie'];
echo "</li>";

echo "<li>";
echo $_GET['e-mail'];
echo "</li>";

echo "<li>";
echo $_GET['telefon'];
echo "</li>";

echo "<li>";
echo $_GET['text'];
echo "</li>";

$kontakt = $_GET['kontakt'];

    $N = count($kontakt);

    for($i=0; $i < $N; $i++)
    {
        echo "<li>";
        echo $kontakt[$i];
        echo "</li>";
    }

echo "<li>";
echo $_GET['stronęWWW'];
echo "</li>";

echo "<li>";
echo $_GET['plik'];
echo "</li>";

echo "</ul>";