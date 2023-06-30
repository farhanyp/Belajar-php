<?php

require_once "Model/Todolist.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "Helper/Input.php";

function viewRemoveTodoList (){

    echo PHP_EOL."MENGHAPUS TODO".PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if($pilihan == "x"){
        // 
    }else{
        $success = removeTodoList($pilihan);

        if($success){
            echo "Berhasil menghapus todo nomor {$pilihan}".PHP_EOL;
        }else{
            echo "Gagal menghapus todo nomor {$pilihan}".PHP_EOL;
        }
    }
}