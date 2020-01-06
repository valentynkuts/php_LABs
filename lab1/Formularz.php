<FORM action="plik.php" xmlns="http://www.w3.org/1999/html">
    <fieldset>
        <legend>Formularz kontaktowy</legend>
        <ul>
            <li>Imię i nazwisko *
                <input name="imie" placeholder="Twoje imię i nazwisko">
            </li>

            <li>Adres e-mail *
                <input type="email" name="e-mail" placeholder="Twój adres e-mail">
            </li>

            <li>Telefon kontaktowy
                <input name="telefon" placeholder="Dozwolone znaki, cyfry,...">
            </li>

            <li>Wybierz temat *
                <select name="lista">
                    <option value="temat1"> Wykonanie strony internetowe</option>
                    <option value="temat2"> Wykonanie temat2</option>
                    <option value="temat3"> Wykonanie temat3</option>
                </select>
            </li>

            <textarea name = "text" placeholder="Wpisz tutaj treść swojej wiadomości ..."></textarea>

            <li>Treść wiadomości *</li>
            <p>
                <li>Preferowana forma kontaktu
            <p>
            <ul>
                <li>
                    <input type="checkbox" name = "kontakt[]" value = "E-mail">E-mail
                </li>
                <li>
                    <input type="checkbox" name = "kontakt[]" value = "Telefon">Telefon
                </li>
            </ul>
            </li>
            </p>
            </p>
            <p>
                <li>Posiadasz już stronę www?
            <p>
            <ul>
                <li>
                    <input type="radio" name = "stronęWWW" value="Tak">Tak
                </li>
                <li>
                    <input type="radio" name = "stronęWWW" value="Nie">Nie
                </li>
            </ul>
            </li>
            </p>
            </p>

            <li>Załączniki</li>

        </ul>

        <input type="file" name="plik">

    </fieldset>

    <p><input type="submit" value="Wyślij formularz"></p>
</FORM>