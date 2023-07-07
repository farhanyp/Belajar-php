<?php

require_once "Entity/Todolist.php";
require_once "Repository/TodolistRepository.php";
require_once "Services/TodolistService.php";
require_once "View/TodolistView.php";
require_once "Helper/InputHelper.php";

use Entity\Todolist;
use View\TodolistView;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testViewShowTodolist(){

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistView->showTodolist();
}

function testAddShowTodolist(){

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Maman1");
    $todolistService->addTodolist("Maman2");
    $todolistService->addTodolist("Maman3");
    $todolistService->addTodolist("Maman4");
    $todolistService->addTodolist("Maman5");

    $todolistView->showTodolist();
}

function testRemoveShowTodolist(){

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Maman1");
    $todolistService->addTodolist("Maman2");
    $todolistService->addTodolist("Maman3");
    $todolistService->addTodolist("Maman4");
    $todolistService->addTodolist("Maman5");
    
    $todolistView->showTodolist();

    // $todolistView->removeTodolist();

    // $todolistView->showTodolist();
}

testAddShowTodolist();