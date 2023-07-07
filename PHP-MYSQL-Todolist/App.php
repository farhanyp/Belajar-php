<?php

require_once "Entity/Todolist.php";
require_once "View/TodolistView.php";
require_once "Services/TodolistService.php";
require_once "Repository/TodolistRepository.php";
require_once "Helper/InputHelper.php";

use Service\TodolistServiceImpl;
use View\TodolistView;
use Repository\TodolistRepositoryImpl;

$todoRepositor = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todoRepositor);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();





