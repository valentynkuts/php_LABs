<FORM action="" method="POST">

    Imie <input type="text" name="imie" value="<?= $row[1];?>"><br>
    Nazwisko <input type="text" name="nazwisko" value="<?= $row[2];?>"><br>
    Rok urodzenia <input type="text" name="rok" value="<?= $row[3];?>"><br>
    Miejsce urodzenia <input type="text" name="miejsce" value="<?= $row[4];?>"><br>
    <input type="hidden" name="id" value="<?= $row[0];?>">


    <p><input type="submit" name="edit" value="edit"></p>

</FORM>