<?php

$file_name = $_FILES["upload_file"]["name"];
$file_types = $_FILES["upload_file"]["type"];
$file_size = $_FILES["upload_file"]["size"];
$file_tmp_name = $_FILES["upload_file"]["tmp_name"];
$file_error = $_FILES["upload_file"]["error"];

move_uploaded_file($file_tmp_name, __DIR__.'/file/'.$file_name);

?>

<html>
    <head></head>
    <body>
        <table border="1">
            <tr>
                <td>File name: </td>
                <td><?= $file_name?></td>
            </tr>
            <tr>
                <td>Type File: </td>
                <td><?= $file_types?></td>
            </tr>
            <tr>
                <td>Size File: </td>
                <td><?= $file_size?></td>
            </tr>
            <tr>
                <td>Path temp File: </td>
                <td><?= $file_tmp_name?></td>
            </tr>
            <tr>
                <td>error file: </td>
                <td><?= $file_error?></td>
            </tr>
        </table>
    </body>
</html>