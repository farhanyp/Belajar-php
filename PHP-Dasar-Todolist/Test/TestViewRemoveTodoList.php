<?php

require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "View/ViewRemoveTodoList.php";

AddTodoList("Farhan");
AddTodoList("Yudha");
AddTodoList("Pratama");
AddTodoList("YP");
AddTodoList("YP2");

showTodoList();

viewRemoveTodoList();

showTodoList();