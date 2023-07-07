<?php

namespace Repository {

    use Entity\Todolist;
    use PDO;

    interface TodolistRepository{

        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;
    }


    class TodolistRepositoryImpl implements TodolistRepository {

        // public array $todolist = array();

        function __construct(private PDO $connection)
        {
        }

        function save(Todolist $todolist): void{
            $sql = "INSERT INTO todolist(todo) VALUES(?)";
            $statemen = $this->connection->prepare($sql);
            $statemen->execute([$todolist->getTodo()]);

            // $number = sizeof($this->todolist) + 1;
            // var_dump($number);
            // $this->todolist[$number] = $todolist;
        }

        function remove(int $number): bool{

            $sql = "SELECT id FROM todolist WHERE id= ?";
            $statemen = $this->connection->prepare($sql);
            $statemen->execute([$number]);

            if($statemen->fetch()){
                $sql = "DELETE FROM todolist WHERE id= ?";
                $statemen = $this->connection->prepare($sql);
                $statemen->execute([$number]);
                return true;
            }else{
                return false;
            }
        }

        function findAll(): array{

            $sql = "SELECT id,todo FROM todolist";
            $statemen = $this->connection->prepare($sql);
            $statemen->execute();

            $array = [];

            foreach($statemen as $rows){

                $todolist = new Todolist();
                $todolist->setId($rows["id"]);
                $todolist->setTodo($rows["todo"]);

                $array[] = $todolist;
            }

            return $array;
        }
        
    }

}