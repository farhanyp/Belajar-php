<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";


AddTodoList("Farhan");
AddTodoList("Yudha");
AddTodoList("Pratama");

showTodoList();