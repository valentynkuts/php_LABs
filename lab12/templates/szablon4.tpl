<html>
<head>
    <title>Wyniki</title>
    <link rel="stylesheet" type="text/css" href="./templates/style.css">
</head>
<body>

<table>

    {section name=n loop=$wyniki}

        {if $wyniki[n].4 > $wyniki[n].5}
            <tr class="wygrana_gospodarza">
                {elseif $wyniki[n].4 < $wyniki[n].5}
            <tr class="wygrana_przyjezdną">
                {else}
            <tr class="zremisowane">
        {/if}

        <td>{$wyniki[n].0}</td>
        <td>{$wyniki[n].1}</td>
        <td>{$wyniki[n].2}</td>
        <td>{$wyniki[n].3}</td>
        <td>{$wyniki[n].4}</td>
        <td>{$wyniki[n].5}</td>
        </tr>

    {/section}

</table>
</body>
</html>