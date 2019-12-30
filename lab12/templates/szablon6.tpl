<html>
<head>
    <title>Marki</title>
</head>
<body>


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

</body>
</html>
