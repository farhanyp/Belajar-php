<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

AddTodoList("Farhan");
AddTodoList("Yudha");
AddTodoList("Pratama");
AddTodoList("Yp");
AddTodoList("Maman");
AddTodoList("Mamans");

removeTodoList(3);
showTodoList();