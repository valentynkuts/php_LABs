<html>
<head>
    <title>Marki</title>
</head>
<body>
<form action="szablon5.php" method="post">
    {html_options name=marka values=$marki_values options=$marki_options selected=$mySelect}
     <input type="submit" name="submit" value="submit">
</form>

{if isset($wyniki)}
<table>

    {section name=n loop=$wyniki}

        <tr>
        <td>{$wyniki[n].marka}</td>
        <td>{$wyniki[n].model}</td>
        <td>{$wyniki[n].rocznik}</td>
        <td>{$wyniki[n].kolor}</td>
        <td>{$wyniki[n].stan}</td>
        </tr>

    {/section}

</table>
{/if}
</body>
</html>
