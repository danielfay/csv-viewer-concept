<html>
    <head>
        <title>File List</title>
    </head>
    <body>
        <h1>File List</h1>
        <table>
            <?php foreach ($files as $file): ?>
            <tr>
                <td>
                    <a href="?source=<?=$source?>&file=<?=$file?>"><?=$file?></a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>
