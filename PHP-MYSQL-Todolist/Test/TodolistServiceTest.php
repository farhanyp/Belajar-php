<?php

require_once "Entity/Todolist.php";
require_once "Repository/TodolistRepository.php";
require_once "Services/TodolistService.php";
require_once "Helper/getConnection.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use Config\Database;

function testShowTodolist(){

    $connection = Database::getConnection();
    $todoRepository = new TodolistRepositoryImpl($connection);
    $todoListService = new TodolistServiceImpl($todoRepository);

    $todoListService->showTodolist();
}

function testAddTodolist(){

    $connection = Database::getConnection();
    $todoRepository = new TodolistRepositoryImpl($connection);
    $todoListService = new TodolistServiceImpl($todoRepository);

    $todoListService->addTodolist("Maman1");
    $todoListService->addTodolist("Maman2");
    $todoListService->addTodolist("Maman3");

    $todoListService->showTodolist();
}

function testRemoveTodolist(){

    $connection = Database::getConnection();
    $todoRepository = new TodolistRepositoryImpl($connection);
    $todoListService = new TodolistServiceImpl($todoRepository);
    
    // $todoListService->showTodolist();
    
    $todoListService->removeTodolist(13);
    
    $todoListService->showTodolist();
}

testRemoveTodolist();