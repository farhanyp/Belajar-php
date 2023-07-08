<?php
// Cara mencegah XSS (Cross Side Scripting)
$hello = "Hello ".htmlspecialchars($_GET["firstname"])." ".htmlspecialchars($_GET["lastname"]);
// Semua query parameter bakal di letak di $_GET

?>

<html>
    <head>
        <title>Query Parameter</title>
    </head>
    <body>
        <h1><?= $hello?></h1>
    </body>
</html>