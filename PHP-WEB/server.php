<html>
    <head>
        <title>Server</title>
    </head>
    <body>
        <table border="1">
            <?php foreach($_SERVER as $key => $value){ ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value ?></td>
                </tr>
                <?php } ?>
        </table>
    </body>
</html>