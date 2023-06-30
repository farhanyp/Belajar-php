<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "Helper/Input.php";

function viewShowTodoList(){
    while(true){

        showTodoList();
    
        echo PHP_EOL."MENU".PHP_EOL;
        echo "1. Tambah Todo".PHP_EOL;
        echo "2. Hapus Todo".PHP_EOL;
        echo "x. Keluar".PHP_EOL;
    
        $pilihan = input("Pilih: ");
    
        if($pilihan == "1"){
            viewAddTodoList();
        }else if($pilihan == "2"){
            viewRemoveTodoList();
        }else if($pilihan == "x"){
            break;
        }else{
            echo "Input anda salah".PHP_EOL;
        }
    }


}