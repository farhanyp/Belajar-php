<?php
function showTodoList(){

    global $todolist;

    echo PHP_EOL."TODOLIST". PHP_EOL;

    foreach($todolist as $number => $value){
        echo "$number. $value". PHP_EOL;
    }
}