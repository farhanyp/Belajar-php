<?php

namespace BelajarPhpMvc\Belajar\PHP\MVC\App;

class Router{

    private static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function):void {
        self::$routes[]= [
            "method" => $method,
            "path"=> $path,
            "controller"=> $controller,
            "function" => $function
        ];
    }

    public static function run():void {
        $path = "/";
        if(isset($_SERVER["PATH_INFO"])){
            $path = $_SERVER["PATH_INFO"];
        }
        $method = $_SERVER["REQUEST_METHOD"];

        foreach(self::$routes as $route){
            if($path == $route["path"] && $method == $route["method"]){
                
                $controller = new $route["controller"];
                $function = $route["function"];
                $controller->$function();
                return;
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND".PHP_EOL;
        // echo $route["method"];
        // echo $_SERVER["PATH_INFO"];
        // var_dump(self::$routes);
        // var_dump($method);
        // var_dump($method);
    }

}