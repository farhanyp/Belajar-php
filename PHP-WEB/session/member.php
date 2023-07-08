<?php
session_start();

if(!isset($_SESSION["login"]))
header("Location: /login.php")

?>
<html>
    <head></head>
    <body>
        <h1>Member Page</h1>
        <a href="/logout.php">Logout bang</a>
    </body>
</html>