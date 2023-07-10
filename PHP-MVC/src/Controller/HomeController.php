<?php

namespace BelajarPhpMvc\Belajar\PHP\MVC\Controller;

use BelajarPhpMvc\Belajar\PHP\MVC\App\View;

class HomeController{

    public function index(){
        $model= [
            "title" => "Belajar PHP MVC",
            "body" => "Body Belajar PHP MVC",
        ];

        View::render("/home/index", $model);
    }

    public function home(){
        echo "HomeController.home()";
    }

    public function about(){
        echo "HomeController.About()";
    }
}