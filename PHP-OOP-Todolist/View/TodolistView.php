<?php

namespace View{

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView{ 

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService){
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void{

            while(true){

                $this->todolistService->showTodoList();
            
                echo PHP_EOL."MENU".PHP_EOL;
                echo "1. Tambah Todo".PHP_EOL;
                echo "2. Hapus Todo".PHP_EOL;
                echo "x. Keluar".PHP_EOL;
            
                $pilihan = InputHelper::input("Pilih: ");
            
                if($pilihan == "1"){
                    $this->addTodolist();
                }else if($pilihan == "2"){
                    $this->removeTodolist();
                }else if($pilihan == "x"){
                    break;
                }else{
                    echo "Input anda salah".PHP_EOL;
                }
            }
        }

        function addTodolist(): void{
            echo PHP_EOL."MENAMBAH TODO".PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal)");
        
            if($todo == "x"){
                // Batal
            }else{
                $this->todolistService->addTodolist($todo);
            }
        }

        function removeTodolist(): void{
            
            echo PHP_EOL."MENGHAPUS TODO".PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

            if($pilihan == "x"){
                // 
            }else{
            $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}