<?php
if (isset($_POST['Prycisk'])) {
    $ile = $_POST['liczba'];
    //echo $ile;
}
?>
<p><b>Iloczyn skalarny wektorów</b></p>

<FORM action="skalar3.php" method="POST">
    <input type="hidden" name="ile" value="<?php echo $ile; ?>">
    <?php
    //echo $_POST['liczba'];
    //echo '<input type="hidden" name="ile" value = "$ile">';
    //echo $ile;
    echo 'Wektor A ';
    for ($i = 0; $i < $ile; $i++)
        echo '<input type="number" name="poleA' . $i . '">';

    echo '<br>';

    echo 'Wektor B ';
    for ($i = 0; $i < $ile; $i++)
        echo '<input type="number" name="poleB' . $i . '">';

    echo '<br>';
    ?>

    <p><input type="submit" name="oblicz" value="oblicz"></p>

</FORM>
