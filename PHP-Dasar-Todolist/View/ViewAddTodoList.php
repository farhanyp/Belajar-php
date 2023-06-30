<?php

require_once "Helper/Input.php";
require_once "BusinessLogic/AddTodoList.php";


function viewAddTodoList(){
    echo PHP_EOL."MENAMBAH TODO".PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if($todo == "x"){
        // Batal
    }else{
        AddTodoList($todo);
    }
}