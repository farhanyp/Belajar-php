<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Config;

use PDO;

class Database{

    private static ?PDO $pdo = null;

    public static function getConnection(string $env = "test"){
        if(self::$pdo == null){
            require __DIR__."/../../config/database.php";
            $config = getDatabaseConfig();
            self::$pdo = new PDO(
                $config["database"][$env]["url"],
                $config["database"][$env]["username"],
                $config["database"][$env]["password"]
            );
        }
    }
}