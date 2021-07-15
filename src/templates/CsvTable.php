<html>
    <head>
        <title>Data Table: <?=$source?> - <?=$file?></title>
    </head>
    <body>
        <h1>Data Table: <?=$source?> - <?=$file?></h1>
        <table>
            <?php foreach ($rows as $row): ?>
            <tr>
                <?php foreach ($row as $cell): ?>
                <td>
                    <?=$cell?>
                </td>
                <?php endforeach ?>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>
