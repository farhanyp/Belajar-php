<?php

if(isset($_GET['key']) && $_GET['key'] == "rahasia"){
    header('Content-Disposition: attachment; filename="ajeng.png"');
    header('Content-Type: image/jpg');
    readfile(__DIR__.'ajeng.png');
    exit();
}else{
    echo "invalid Link";
    exit();
}

?>