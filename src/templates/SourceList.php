<html>
    <head>
        <title>Source List</title>
    </head>
    <body>
        <h1>Source List</h1>
        <table>
            <?php foreach ($sources as $source_name => $source_config): ?>
            <tr>
                <td>
                    <a href="?source=<?=$source_name?>"><?=$source_name?></a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>
