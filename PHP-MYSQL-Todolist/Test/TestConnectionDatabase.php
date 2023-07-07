<?php

require_once "Helper/getConnection.php";

use Config\Database;

function TestConnection(){

    Database::getConnection();
    echo 'Connected to database successfully';

}

TestConnection();