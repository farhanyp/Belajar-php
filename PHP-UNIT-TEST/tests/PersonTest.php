<?php

namespace BelajarPhpUnitTest\Test;

use Exception;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase{

    public function testSuccess(){

        $person = new Person("Yp");
        Assert::assertEquals("Hi maman, my name is Yp", $person->sayHello("maman"));
    }

    // Test Exception
    public function testException(){

        $person = new Person("Yp");
        $this->expectException(Exception::class);
        $person->sayHello(null);
    }

    public function testGoodByeSuccess(){
        $person = new Person("Yp");
        $this->expectOutputString("Good Bye maman".PHP_EOL);
        $person->goodBye("maman");
    }
}