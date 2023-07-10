<?php

require_once __DIR__.'/../vendor/autoload.php';

use BelajarPhpMvc\Belajar\PHP\MVC\App\Router;
use BelajarPhpMvc\Belajar\PHP\MVC\Controller\HomeController;
use BelajarPhpMvc\Belajar\PHP\MVC\Controller\ProductController;

Router::add("GET", "/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)", ProductController::class,"categories");

Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/login", HomeController::class, "login");
Router::add("GET", "/about", HomeController::class, "about");

Router::run();