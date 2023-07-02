<?php

class Programmer {
    
    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
}

class BackEndProgrammer extends Programmer{

}

class FrontEndProgrammer extends Programmer{

}

class Company{
    public Programmer $programmer;

    function sayHelloProgrammer(Programmer $programmer){
        // melakukan pengecekan terhadap instance class
        if($programmer instanceof FrontEndProgrammer){
            echo "Hello Programmer {$programmer->name}".PHP_EOL;
        }else if($programmer instanceof BackEndProgrammer){
            echo "Hello BackEndProgrammer {$programmer->name}".PHP_EOL;
        }else if ($programmer instanceof Programmer){
            echo "Hello FrontEnd Programmer {$programmer->name}".PHP_EOL;
        }
    }

    
}