<html>
<head>
    <title>Pierwszy skrypt</title>
    <meta charset="utf-8">
    <style>
        .czarna {
            background: black;
            text-align: center;
            color: white;
        }

        .tekst {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
echo "Pierwszy skrypt";
?>
<table border=1 width=400 height=400>
    <?php
    for ($i = 0; $i < 8; $i++) {
        echo "<tr>";

        for ($j = 0; $j < 8; $j++) {
            if ($i % 2 != 0 && $j % 2 == 0)
                echo '<td class="czarna"></td>';
            else if ($i % 2 == 0 && $j % 2 != 0)
                echo '<td class="czarna"></td>';
            else
                echo "<td></td>";
        }
        echo "</tr>";

    }
    ?>
</table>
<br>
<table border=1 width=40 height=400>
    <?php
    $tekst = "ABRAKADABRA";
    $n = strlen($tekst);
    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";

        if ($i % 2 != 0)
            echo '<td class="czarna">' . $tekst[$i] . '</td>';
        else
            echo '<td class="tekst">' . $tekst[$i] . '</td>';

        echo "</tr>";
    }
    ?>
</table>

</body>