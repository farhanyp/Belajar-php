<?php

require_once "Entity/Todolist.php";
require_once "Repository/TodolistRepository.php";
require_once "Services/TodolistService.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(){

    $todoRepository = new TodolistRepositoryImpl();
    $todoListService = new TodolistServiceImpl($todoRepository);

    $todoRepository->todolist[1] = new Todolist("A");
    $todoRepository->todolist[2] = new Todolist("B");
    $todoRepository->todolist[3] = new Todolist("C");

    $todoListService->showTodolist();
}

function testAddTodolist(){

    $todoRepository = new TodolistRepositoryImpl();
    $todoListService = new TodolistServiceImpl($todoRepository);

    $todoListService->addTodolist("Maman1");
    $todoListService->addTodolist("Maman2");
    $todoListService->addTodolist("Maman3");

    $todoListService->showTodolist();
}

function testRemoveTodolist(){

    $todoRepository = new TodolistRepositoryImpl();
    $todoListService = new TodolistServiceImpl($todoRepository);

    $todoListService->addTodolist("Maman1");
    $todoListService->addTodolist("Maman2");
    $todoListService->addTodolist("Maman3");
    $todoListService->addTodolist("Maman4");
    $todoListService->addTodolist("Maman5");
    
    // $todoListService->showTodolist();
    
    $todoListService->removeTodolist(3);
    
    $todoListService->showTodolist();
}

testRemoveTodolist();